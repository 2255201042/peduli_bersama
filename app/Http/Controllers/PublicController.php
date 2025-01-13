<?php

namespace App\Http\Controllers;

use App\Models\Kampayes;
use Illuminate\Http\Request;
use App\Models\Gambars;
use App\Models\Validasi_Danas;
use Illuminate\Support\Facades\Auth;
use Endroid\QrCode\Builder\Builder;
use Illuminate\Support\Facades\URL;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Kdata = Kampayes::where('end_date', '>=', now())
            ->where('status', 2)
            ->orderBy('created_at', 'desc')
            ->get();
    
        $dummyCampaigns = [
            (object)[
                'id' => 1,
                'title' => 'Dummy Campaign 1',
                'deskripsi' => 'This is a dummy description for campaign 1.',
                'target_dana' => 1000000,
                'gambar' => 'placeholder.webp',
                'end_date' => now()->addDays(10),
            ],
            (object)[
                'id' => 2,
                'title' => 'Dummy Campaign 2',
                'deskripsi' => 'This is a dummy description for campaign 2.',
                'target_dana' => 2000000,
                'gambar' => 'placeholder.webp',
                'end_date' => now()->addDays(15),
            ],
            (object)[
                'id' => 3,
                'title' => 'Dummy Campaign 3',
                'deskripsi' => 'This is a dummy description for campaign 3.',
                'target_dana' => 3000000,
                'gambar' => 'placeholder.webp',
                'end_date' => now()->addDays(20),
            ],
            (object)[
                'id' => 4,
                'title' => 'Dummy Campaign 4',
                'deskripsi' => 'This is a dummy description for campaign 4.',
                'target_dana' => 4000000,
                'gambar' => 'placeholder.webp',
                'end_date' => now()->addDays(25),
            ],
            (object)[
                'id' => 5,
                'title' => 'Dummy Campaign 5',
                'deskripsi' => 'This is a dummy description for campaign 5.',
                'target_dana' => 5000000,
                'gambar' => 'placeholder.webp',
                'end_date' => now()->addDays(30),
            ],
            (object)[
                'id' => 6,
                'title' => 'Dummy Campaign 6',
                'deskripsi' => 'This is a dummy description for campaign 6.',
                'target_dana' => 6000000,
                'gambar' => 'placeholder.webp',
                'end_date' => now()->addDays(35),
            ],
        ];
    
        if ($Kdata->count() < 6) {
            $remainingCampaigns = 6 - $Kdata->count();
            $Kdata = $Kdata->concat(array_slice($dummyCampaigns, 0, $remainingCampaigns));
        }
    
        // Map images to ensure valid paths
        $Kdata = $Kdata->map(function ($kampanye) {
            $kampanye->image_path = $kampanye->gambar 
                ? asset('images/campaigns/' . $kampanye->gambar) 
                : asset('images/placeholder.jpg');
            return $kampanye;
        });
    
        return view('public.home', compact('Kdata'));
    }

    public function donasi()
    {

        $galleryItems = Kampayes::where('end_date', '>=', now())
        ->where('status', 2)
        ->orderBy('created_at', 'desc')
        ->get();

    
        return view('public.donasi', compact('galleryItems'));
    }

    public function detail(string $id)
    {
        $Kdata = Kampayes::find($id);
        $Transaksis = Validasi_Danas::where('kampanye_id', $id)->orderBy('created_at', 'desc')->get(); 
        return view('public.detail', compact('Kdata', 'Transaksis'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
    
        if ($search) {
            $Kdata = Kampayes::where('end_date', '>=', now())
                ->where('status', 2)
                ->where('title', 'like', "%".$search."%")
                ->orWhere('deskripsi', 'like', "%".$search."%")
                ->get();
        } else {
            $Kdata = Kampayes::where('end_date', '>=', now())
            ->where('status', 2)
            ->orderBy('created_at', 'desc')
            ->get();
        }
    
        return view('public.search', compact('Kdata', 'search'));
    }  




    public function generateQRCode($donasiId)
    {
        $donasi = Validasi_Danas::findOrFail($donasiId);
    
        $publicIp = gethostbyname(gethostname());
    
        if ($publicIp === '127.0.0.1') {
            $publicIp = 'your-static-ip-or-local-network-ip'; // Replace with your static/public IP if needed
        }
    
        $validationUrl = "http://$publicIp:8000/success-transaction/$donasi->id";
        $baseUrl = config('app.url'); // This will use the APP_URL from .env
        $successUrl = "$baseUrl/success-transaction/$donasi->id";

        // Generate QR Code
        $qrCode = Builder::create()
            ->data($validationUrl)
            ->size(300)
            ->margin(10)
            ->build();
    
        // Convert QR code to base64 format for inline display
        $qrCodeBase64 = base64_encode($qrCode->getString());
    
        return view('public.qrcode', compact('donasi', 'qrCodeBase64', 'validationUrl', 'successUrl'));
    }

    public function successTransaction($donasiId)
    {
        $donasi = Validasi_Danas::findOrFail($donasiId);

        // Update the payment_date
        $donasi->payment_date = now();
        $donasi->save();

        return view('public.success', compact('donasi'));
    }

    public function showDonationForm($id)
    {
        $Kdata = Kampayes::findOrFail($id);
    
        $userData = Auth::check() && Auth::user()->role_id == 2
            ? [
                'id_donatur' => Auth::user()->id,
                'name' => Auth::user()->name,
                'no_hp' => Auth::user()->no_hp,
            ]
            : null;
    
        return view('public.pembayaran', compact('Kdata', 'userData'));
    }
    
    public function donasiStore(Request $request)
    {
        $request->validate([
            'kampanye_id' => 'required|exists:kampanye,id',
            'name' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'payment_amount' => 'required|numeric|min:1',
            'is_anonim' => 'nullable|boolean',
        ]);

        $donasi = new Validasi_Danas();
        if (Auth::check()) {
            $donasi->id_donatur = Auth::id();
        }
        $donasi->kampanye_id = $request->kampanye_id;
        $donasi->name = $request->is_anonim ? 'Anonim' : $request->name;
        $donasi->no_hp = $request->no_hp;
        $donasi->payment_amount = $request->payment_amount;
        $donasi->payment_date = null; 
        $donasi->save();

        return redirect()->route('generate.qr', $donasi->id)
            ->with('success', 'Donation has been submitted. Proceed with validation.');
    }
}

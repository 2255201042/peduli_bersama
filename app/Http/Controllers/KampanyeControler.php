<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kampayes;
use App\Models\Validasi_Danas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Reason;


// done galang = 1
// aktif = 2
// pending = 3
// sedang di proses wd = 4
// selesai = 5
// 6 wd gagal
// 7 gagal galang
// 8 dibatalkan




class KampanyeControler extends Controller
{
    public function index()
    {
        $userID = Auth::id();
    
        $totalUsers = User::count();
    
        $activeCampaigns = Kampayes::where('status', 1)->count();
    
        $totalDonations = Validasi_Danas::whereIn('kampanye_id', Kampayes::where('id_penggalang', $userID)->pluck('id'))->sum('payment_amount');
        
        $recentCampaigns = Kampayes::where('id_penggalang', $userID)
            ->latest()
            ->limit(5)
            ->get();
    
        $recentDonations = Validasi_Danas::whereIn('kampanye_id', Kampayes::where('id_penggalang', $userID)->pluck('id'))
            ->latest()
            ->limit(5)
            ->get();
    
        $donationTrends = Validasi_Danas::selectRaw('DATE_FORMAT(payment_date, "%Y-%m") as month, SUM(payment_amount) as total')
            ->whereIn('kampanye_id', Kampayes::where('id', $userID)->pluck('id'))
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->pluck('total', 'month');
    
        return view('admin.kampanye.dash', compact(
            'totalUsers',
            'activeCampaigns',
            'totalDonations',
            'recentCampaigns',
            'recentDonations',
            'donationTrends'
        ));
    }


    public function list()
    {
        $kampanyes = Kampayes::all();
        return view('admin.kampanye.list', compact('kampanyes'));
    }

    public function create()
    {
            return view('admin.kampanye.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'target_dana' => 'required|numeric|min:1',
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'f_ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Upload campaign image
        $campaignImage = time() . '_campaign.' . $request->file('gambar')->extension();
        $request->file('gambar')->move(public_path('images/campaigns'), $campaignImage);

        // Upload KTP image
        $ktpImage = time() . '_ktp.' . $request->file('f_ktp')->extension();
        $request->file('f_ktp')->move(public_path('images/ktp'), $ktpImage);

        // Upload additional attachment (optional)
        $lampiran = null;
        if ($request->hasFile('lampiran')) {
            $lampiran = time() . '_lampiran.' . $request->file('lampiran')->extension();
            $request->file('lampiran')->move(public_path('attachments'), $lampiran);
        }

        Kampayes::create([
            'id_penggalang' => auth()->user()->id,
            'title' => $request->input('title'),
            'deskripsi' => $request->input('deskripsi'),
            'target_dana' => $request->input('target_dana'),
            'gambar' => $campaignImage,
            'f_ktp' => $ktpImage,
            'lampiran' => $lampiran,
            'status' => 3, // Default status
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);

        return redirect()->route('admin.kampanye')->with('success', 'Kampanye berhasil dibuat.');
    }


    public function show($id)
    {
        $kampanye = Kampayes::find($id);
        return view('admin.kampanye.show', compact('kampanye'));
    }

    public function createPencairanDana()
    {
        $kampanyes = Kampayes::where('id_penggalang', Auth::id())
            ->where('status', '1')
            ->get();

        $withdrawals = Kampayes::select('kampanye.id', 'kampanye.title', 'kampanye.status', 'reason.alesan', DB::raw('SUM(validasidana.payment_amount) as total_amount'))
            ->where('kampanye.id_penggalang', Auth::id())
            ->where(function ($query) {
                $query->where('kampanye.status', 4)
                    ->orWhere('kampanye.status', 5)
                    ->orWhere('kampanye.status', 6);
            })
            ->leftJoin('validasidana', 'kampanye.id', '=', 'validasidana.kampanye_id')
            ->leftJoin('reason', 'kampanye.id', '=', 'reason.kampanye_id')
            ->groupBy('kampanye.id', 'kampanye.title', 'kampanye.status', 'reason.alesan')
            ->get();

        return view('admin.kampanye.pencairan', compact('kampanyes', 'withdrawals'));
    }

    public function storePencairanDana(Request $request)
    {
        
    
        $kampanye = Kampayes::findOrFail($request->kampanye_id); // Corrected class name if needed
    
        if ($kampanye->status != 1) { 
            return redirect()->back()->with('error', 'Kampanye ini tidak memenuhi syarat untuk pencairan dana.');
        }

        
        try {
            $proposalFilename = time() . '_proposal.' . $request->file('pengajuan_dana')->getClientOriginalExtension();
            $request->file('pengajuan_dana')->move(public_path('attachments'), $proposalFilename);
    
            
            $kampanye->status = 4;
            $kampanye->perposal = $proposalFilename;

            $kampanye->save();
    
            return redirect()->route('pencairan.create')->with('success', 'Pencairan dana berhasil diajukan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengajukan pencairan dana. Silakan coba lagi.');
        }
    }





    public function kampanyeSelesai()
    {
        $userID = auth()->user()->id;
        $kampanyeSelesai = Kampayes::where('user_id', $userID)->where('status', 0)->get();
        return view('admin.kampanyeselesai', compact('kampanyeSelesai'));
    }

    public function kampanyeAktif()
    {
        $userID = auth()->user()->id;
        $kampanyeAktif = Kampayes::where('user_id', $userID)->where('status', 1)->get();
        return view('admin.kampanyeaktif', compact('kampanyeAktif'));
    }
    


    public function laporanKeuangan()
    {
        $userID = auth()->user()->id;
        $laporanKeuangan = Validasi_Danas::where('kampanye_id', $userID)->get();
        return view('admin.laporankeuangan', compact('laporanKeuangan'));
    }

    public function laporanAktivitas()
    {
        $userID = auth()->user()->id;
        $laporanAktivitas = Validasi_Danas::where('kampanye_id', $userID)->get();
        return view('admin.laporanaktivitas', compact('laporanAktivitas'));
    }


    public function laporanPengguna()
    {
        $userID = auth()->user()->id;
        $laporanPengguna = Validasi_Danas::where('kampanye_id', $userID)->get();
        return view('admin.laporanpengguna', compact('laporanPengguna'));
    }


}

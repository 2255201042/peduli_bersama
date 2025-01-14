<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kampayes;
use App\Models\Reason;
use App\Models\Validasi_Danas;
use Illuminate\Support\Facades\DB;

// 1 kamoanye
// 2 donatur
// 3 admin


class DashboardAdminController extends Controller
{
    public function dashboardAdmin()
    {
       
        $totalUsers = User::count();
        $activeCampaigns = Kampayes::where('status', 1)->count();
        $totalDonations = Validasi_Danas::sum('payment_amount');
        $recentCampaigns = Kampayes::orderBy('created_at', 'desc')->take(5)->get();
        $recentDonations = Validasi_Danas::orderBy('payment_date', 'desc')->take(5)->get();

        $donationTrends = Validasi_Danas::select(
            DB::raw('MONTH(payment_date) as month'),
            DB::raw('SUM(payment_amount) as total')
        )
        ->groupBy('month')
        ->orderBy('month')
        ->get()
        ->mapWithKeys(function ($item) {
            return [date("F", mktime(0, 0, 0, $item->month, 10)) => $item->total];
        });

        return view('admin.admin.dash', compact(
            'totalUsers',
            'activeCampaigns',
            'totalDonations',
            'recentCampaigns',
            'recentDonations',
            'donationTrends'
        ));
    }


    public function detailkampanye($id) {
        $kampanye = Kampayes::find($id);
        $dananya = Validasi_Danas::where('kampanye_id', $id)->get();
        return view('admin.admin.detail', compact('kampanye', 'dananya'));
    }

    
    public function penguna(Request $request)
    {
        $search = $request->input('search');
        
        // where not role is 3 
        $users = User::where('role_id', '!=', 3)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->paginate(10);

        $usersCount = User::where('role_id', '!=', 3)->count();

    
        return view('admin.admin.pengguna', compact('users', 'usersCount', 'search'));
    }

    public function pengalang(Request $request)
    {
        // Fetch the data with a limit of 5 rows
        $kampanyeDone = Kampayes::where('status', 1)->limit(5)->get();
        $kampanyeAktif = Kampayes::where('status', 2)->limit(5)->get();
        $kampanyePending = Kampayes::where('status', 3)->limit(5)->get();
        $kampanyeProssesWd = Kampayes::where('status', 4)->limit(5)->get();
        $kampanyeWdBerhasil = Kampayes::where('status', 5)->limit(5)->get();
        $kampanyeWdGagal = Kampayes::where('status', 6)->limit(5)->get();
        $kampanyeGagalGalang = Kampayes::where('status', 7)->limit(5)->get();


        // Pass the data to the view
        return view('admin.admin.penggalang', compact(
            'kampanyeDone',
            'kampanyeAktif',
            'kampanyePending',
            'kampanyeProssesWd',
            'kampanyeWdBerhasil',
            'kampanyeWdGagal',
            'kampanyeGagalGalang',
        ));
    }

    public function kelolaFull(Request $request)
    {
        $kampanyes = Kampayes::query()
            ->when($request->search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->when($request->status, function ($query, $status) {
                return $query->where('status', $status);
            })
            ->paginate(10);
    
        return view('admin.admin.kelola', compact('kampanyes'));
    }
    
    public function approveCampaign(Request $request, $id)
    {
        $campaign = Kampayes::findOrFail($id);
        $campaign->status = $request->status;
    
        if (in_array($request->status, [6, 7, 8]) && $request->reason) {
            Reason::create([
                'kampanye_id' => $campaign->id,
                'alesan' => $request->reason,
            ]);
        }
    
        $campaign->save();
    
        return redirect()->route('admin.kelola')->with('success', 'Campaign updated successfully!');
    }
    
    public function dataPengguna(Request $request)
    {
        $search = $request->input('search');
        
        $users = User::where('role_id', 2)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->paginate(10); 
    
        $usersCount = User::where('role_id', 2)->count();
    
        return view('admin.pengguna', compact('users', 'usersCount', 'search'));
    }
}
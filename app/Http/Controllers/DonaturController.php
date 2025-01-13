<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validasi_Danas;
use Illuminate\Support\Facades\Auth;

class DonaturController extends Controller
{
    public function index()
    {
        $totalDonasi = Validasi_Danas::where('id_donatur', Auth::id())->count();

        $totalUang = Validasi_Danas::where('id_donatur', Auth::id())->sum('payment_amount');

        $riwayatDonasi = Validasi_Danas::where('id_donatur', Auth::id())
            ->join('kampanye', 'validasidana.kampanye_id', '=', 'kampanye.id')
            ->orderBy('payment_date', 'desc')
            ->get(['validasidana.*', 'kampanye.*']);


            // Pass data to the view
        return view('admin.donatur.riwayatdonasi', compact('riwayatDonasi', 'totalDonasi', 'totalUang'));
    }
}

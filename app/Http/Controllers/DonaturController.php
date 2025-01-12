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
            ->with('kampanye') // Load related campaign information
            ->orderBy('created_at', 'desc') // Sort by most recent donations
            ->get();

        // Pass data to the view
        return view('admin.donatur.riwayatdonasi', compact('riwayatDonasi', 'totalDonasi', 'totalUang'));
    }
}

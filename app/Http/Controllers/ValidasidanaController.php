<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validasi_Danas;
use App\Models\Kampayes;

class ValidasidanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all validation records
        $validasiDanas = Validasi_Danas::all();
        return view('validasidana.index', compact('validasiDanas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('validasidana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'kampanye_id' => 'required|integer|exists:kampayes,id',
            'id_donatur' => 'required|integer',
            'name' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'payment_amount' => 'required|numeric',
            'payment_date' => 'required|date',
        ]);

        // Create a new validation record
        Validasi_Danas::create($request->all());




        return redirect()->route('validasidana.index')
                         ->with('success', 'Validasi dana berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Validasi_Danas  $validasiDana
     * @return \Illuminate\Http\Response
     */
    public function show(Validasi_Danas $validasiDana)
    {
        return view('validasidana.show', compact('validasiDana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Validasi_Danas  $validasiDana
     * @return \Illuminate\Http\Response
     */
    public function edit(Validasi_Danas $validasiDana)
    {
        return view('validasidana.edit', compact('validasiDana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Validasi_Danas  $validasiDana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Validasi_Danas $validasiDana)
    {
        // Validate the request
        $request->validate([
            'kampanye_id' => 'required|integer|exists:kampayes,id',
            'id_donatur' => 'required|integer',
            'name' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'payment_amount' => 'required|numeric',
            'payment_date' => 'required|date',
        ]);

        // Update the validation record
        $validasiDana->update($request->all());

        return redirect()->route('validasidana.index')
                         ->with('success', 'Validasi dana berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Validasi_Danas  $validasiDana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Validasi_Danas $validasiDana)
    {
        $validasiDana->delete();

        return redirect()->route('validasidana.index')
                         ->with('success', 'Validasi dana berhasil dihapus.');
    }
}

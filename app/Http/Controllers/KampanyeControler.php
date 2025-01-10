<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampayes;

class KampanyeControler extends Controller
{
    /**
     * Display a listing of the campaigns.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all campaigns
        $kampanyes = Kampayes::all();
        return view('kampanye.index', compact('kampanyes'));
    }

    /**
     * Show the form for creating a new campaign.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kampanye.create');
    }

    /**
     * Store a newly created campaign in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'id_admin' => 'required|integer',
            'id_penggalang' => 'required|integer',
            'title' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'target_dana' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Create a new campaign
        Kampayes::create($request->all());

        return redirect()->route('kampanye.index')
                         ->with('success', 'Kampanye berhasil dibuat.');
    }

    /**
     * Display the specified campaign.
     *
     * @param  Kampayes  $kampanye
     * @return \Illuminate\Http\Response
     */
    public function show(Kampayes $kampanye)
    {
        return view('kampanye.show', compact('kampanye'));
    }

    /**
     * Show the form for editing the specified campaign.
     *
     * @param  Kampayes  $kampanye
     * @return \Illuminate\Http\Response
     */
    public function edit(Kampayes $kampanye)
    {
        return view('kampanye.edit', compact('kampanye'));
    }

    /**
     * Update the specified campaign in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Kampayes  $kampanye
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kampayes $kampanye)
    {
        // Validate input
        $request->validate([
            'id_admin' => 'required|integer',
            'id_penggalang' => 'required|integer',
            'title' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'target_dana' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Update campaign
        $kampanye->update($request->all());

        return redirect()->route('kampanye.index')
                         ->with('success', 'Kampanye berhasil diperbarui.');
    }

    /**
     * Remove the specified campaign from storage.
     *
     * @param  Kampayes  $kampanye
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kampayes $kampanye)
    {
        $kampanye->delete();

        return redirect()->route('kampanye.index')
                         ->with('success', 'Kampanye berhasil dihapus.');
    }



    public function donatur()
    {
        $galleryItems = [
            ['image' => 'images/gallery1.jpg', 'title' => 'Gallery Item 1'],
            ['image' => 'images/gallery2.jpg', 'title' => 'Gallery Item 2'],
            ['image' => 'images/gallery3.jpg', 'title' => 'Gallery Item 3'],
            ['image' => 'images/gallery4.jpg', 'title' => 'Gallery Item 4'],
            ['image' => 'images/gallery5.jpg', 'title' => 'Gallery Item 5'],
            ['image' => 'images/gallery6.jpg', 'title' => 'Gallery Item 6'],
        ];

        return view('public.donasi', compact('galleryItems'));
    }
}

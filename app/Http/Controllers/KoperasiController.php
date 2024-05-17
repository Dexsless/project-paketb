<?php

namespace App\Http\Controllers;

use App\Models\Koperasi;
use App\Http\Requests\StoreKoperasiRequest;
use App\Http\Requests\UpdateKoperasiRequest;
use App\Models\Mahasiswa;

class KoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $koperasi = Koperasi::all();
        return view('koperasi.index', compact('koperasi', 'mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $koperasi = Koperasi::all();
        $mahasiswa = Mahasiswa::all();
        return view('koperasi.create', compact('koperasi', 'mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKoperasiRequest $request)
    {
        $validated = $request->validate([
            'mahasiswa_id' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required'
        ]);
        $koperasi = new Koperasi();
        $koperasi->mahasiswa_id = $request->mahasiswa_id;
        $koperasi->jumlah = $request->jumlah;
        $koperasi->tanggal = $request->tanggal;
        $koperasi->save();

        return redirect()->route('koperasis.index')
        ->with('success', 'Koperasi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $koperasi = Koperasi::findOrFail($id);
        return view('koperasi.show', compact('koperasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $koperasi = Koperasi::findOrFail($id);
        $mahasiswa = Mahasiswa::all();
        return view('koperasi.edit', compact('koperasi', 'mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKoperasiRequest $request, $id)
    {
        $validated = $request->validate([
            'mahasiswa_id' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required'
        ]);
        $koperasi = Koperasi::findOrFail($id);
        $koperasi->mahasiswa_id = $request->mahasiswa_id;
        $koperasi->jumlah = $request->jumlah;
        $koperasi->tanggal = $request->tanggal;
        $koperasi->save();

        return redirect()->route('koperasis.index')
        ->with('success', 'Koperasi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $koperasi = Koperasi::findOrFail($id);
        $koperasi->delete();
        return redirect()->route('koperasis.index')
        ->with('success', 'Koperasi deleted successfully');
    }
}

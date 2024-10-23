<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class gurucontroller extends Controller
{
    public function index()
    {
        // Ambil semua data siswa dari database
        $siswa = siswa::all();


        // Kirim data siswa ke view index.blade.php
        return view('guru.index', compact('siswa'));
    }

    public function create()
    {
        // return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelapor'=> 'required|string',
            'terlapor'=> 'required|string',
            'kelas'=> 'required|string',
            'laporan'=> 'required|string',
            'bukti'=> 'required|string',
        ]);


        siswa::create([
            'pelapor'=> $request->pelapor,
            'terlapor'=> $request->terlapor,
            'kelas'=> $request->kelas,
            'laporan'=> $request->laporan,
            'bukti'=> $request->bukti,
            'status'=> 'sedang dalam tinjuan',
        ]);


        return redirect('/guru')->with('Mantap', 'Laporan sudah diterima guru');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        //Validate the incoming request data

        //find the product by ID
        $siswa = siswa::findOrFail($id);
        

        //update product details
        $siswa->status = 'Selesai';

        //save the update product
        $siswa->save();

        //redirect back to the product index with a succes message
        return redirect()->route('guru.index')->with('success', 'berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

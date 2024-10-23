<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class siswacontroller extends Controller
{
    public function index()
    {
        // Ambil semua data siswa dari database
        $siswa = siswa::all();


        // Kirim data siswa ke view index.blade.php
        return view('siswa.index', compact('siswa'));
    }

    public function create(): View
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {   

        $request->validate([
            'pelapor'=> 'required|string',
            'terlapor'=> 'required|string',
            'kelas'=> 'required|string',
            'laporan'=> 'required|string',
            'bukti'=> 'required|file',
        ]);

        if ($request->hasFile('bukti')) {
            // Store the file and generate the path
            $bukti = $request->file('bukti')->store('bukti', 'public');
            $buktipath = 'storage/' . $bukti;
        } else {
            return back()->withErrors(['bukti' => 'File upload is required']);
        }


        siswa::create([
            'pelapor'=> $request->pelapor,
            'terlapor'=> $request->terlapor,
            'kelas'=> $request->kelas,
            'laporan'=> $request->laporan,
            'bukti'=> $buktipath,
            'status'=> 'sedang dalam tinjauan',
        ]);


        return redirect('/siswa')->with('Mantap', 'Laporan sudah diterima guru');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

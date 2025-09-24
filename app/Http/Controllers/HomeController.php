<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('layouts/beranda');
    }

    public function tentang()
    {
        return view('layouts/tentang');
    }

    public function informasi()
    {
        return view('layouts/informasi');
    }

    public function kontak()
    {
        return view('layouts/kontak');
    }

    public function storeKontak(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'pesan' => 'required|string'
        ]);

        // Simpan ke database (akan kita buat modelnya nanti)
        \App\Models\Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
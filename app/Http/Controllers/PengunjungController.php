<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Models\Pengunjung;
use App\Http\Requests\StorePengunjungRequest;
use App\Http\Requests\UpdatePengunjungRequest;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hari = Pengunjung::whereDate('created_at', today())->count();
        $hari2 = Pengunjung::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
        $hari3 = Pengunjung::whereMonth('created_at', now())->count();
        $puas = Ulasan::where('reaksi', 'puas')->count();
        $tidakpuas = Ulasan::where('reaksi', 'tidak puas')->count();
        $pelayanan = Pengunjung::all();

        return view('pengunjung/home_index', compact('hari', 'hari2', 'hari3', 'puas', 'tidakpuas', 'pelayanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengunjungRequest $request)
    {
        $validasi = $request->validate([
            'nama' => 'required|unique:pengunjungs,nama|string|max:255',
            'instansi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_handphone' => 'required|string|regex:/^0\d{9,12}$/',
            'sub-bagian' => 'required',
            'tujuan' => 'required|string|max:255',
        ]);

        Pengunjung::create($validasi);

        return redirect('/pengunjung#form');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengunjungRequest $request, Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengunjung $pengunjung)
    {
        //
    }
}

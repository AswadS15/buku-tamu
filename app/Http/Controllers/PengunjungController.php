<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Divisi;
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
        $divisi = Divisi::all();

        return view('home.index', compact('hari', 'hari2', 'hari3', 'puas', 'tidakpuas', 'pelayanan', 'divisi'));
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
        $nama = $request->nama;
        $instansi = $request->instansi;
        $alamat = $request->alamat;
        $hp = $request->hp;
        $divisi = $request->divisi;
        $data = $request->data;




        if (Pengunjung::where('hp', $hp)->exists()) {

            $idpengunjung = Pengunjung::where('hp', $hp)
                ->value('id');

            $pesan = new Pesan();
            $pesan->id_pengunjungs = $idpengunjung;
            $pesan->data = $request->data;
            $pesan->save();
            return redirect('home');
        } else {

            $data = new Pengunjung();
            $data->nama = $nama;
            $data->instansi = $instansi;
            $data->alamat = $alamat;
            $data->hp = $hp;
            $data->id_divisi = $divisi;
            $data->save();

            $idpengunjung = Pengunjung::where('hp', $hp)
                ->value('id');

            $pesan = new Pesan();
            $pesan->id_pengunjungs = $idpengunjung;
            $pesan->data = $request->data;
            $pesan->save();


            return redirect('home');
        }
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

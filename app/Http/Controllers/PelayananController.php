<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengunjung = Pengunjung::with('divisi')->paginate(5);

        return view('pengunjung.index', compact('pengunjung'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengunjung = Pengunjung::find($id);
        return view('pengunjung.detail', compact('pengunjung'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengunjung = Pengunjung::find($id);
        $pengunjung->delete();

        return redirect()->route('pengunjung.index')->with('status', 'Data Jenis Tujuan Berhasil Dihapus');
    }
}

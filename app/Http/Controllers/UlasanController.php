<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Http\Requests\StoreUlasanRequest;
use App\Http\Requests\UpdateUlasanRequest;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $puas = Ulasan::where('reaksi', 'puas')->count();
        $tidakpuas = Ulasan::where('reaksi', 'tidak puas')->count();

        return view('pengunjung/home_index', compact('puas', 'tidakpuas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengunjung.home_index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUlasanRequest $request)
    {

        $validasi = $request->validate([
            'nama' => 'required|unique:ulasans,nama|string|max:255',
            'ulasan' => 'required|string|max:255',
        ]);
        Ulasan::create($validasi);

        return redirect('/pengunjung#form');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ulasan $ulasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ulasan $ulasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUlasanRequest $request, Ulasan $ulasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ulasan $ulasan)
    {
        //
    }
}

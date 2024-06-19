<?php

namespace App\Http\Controllers;

use App\Models\Laminasi;
use Illuminate\Http\Request;

class LaminasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laminasi = Laminasi::all();
        return view('master.laminasi.index',compact('laminasi'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.laminasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $laminasi = new Laminasi();
        $laminasi->nama_laminasi = $request->nama_laminasi;
        $laminasi->harga = $request->harga;
        $laminasi->harga_modal = $request->harga_modal;
        $laminasi->save();
        return redirect()->route('laminasi.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Laminasi $laminasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laminasi $laminasi)
    {
        return view('master.laminasi.edit',compact('laminasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laminasi $laminasi)
    {
        $laminasi->nama_laminasi = $request->nama_laminasi;
        $laminasi->harga = $request->harga;
        $laminasi->save();
        return redirect()->route('laminasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laminasi $laminasi)
    {
        $laminasi->delete();
        return redirect()->route('laminasi.index');
    }
}

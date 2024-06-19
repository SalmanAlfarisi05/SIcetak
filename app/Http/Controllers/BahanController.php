<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahan = Bahan::all();
        return view('master.bahan.index',compact('bahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.bahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bahan = new Bahan();
        $bahan->nama_bahan = $request->nama_bahan;
        $bahan->harga = $request->harga;
        $bahan->save();
        return redirect()->route('bahan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bahan $bahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bahan $bahan)
    {
        return view('master.bahan.edit',compact('bahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bahan $bahan)
    {
        $bahan->nama_bahan = $request->nama_bahan;
        $bahan->harga = $request->harga;
        $bahan->save();
        return redirect()->route('bahan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bahan $bahan)
    {
        $bahan->delete();
        return redirect()->route('bahan.index');
    }
}

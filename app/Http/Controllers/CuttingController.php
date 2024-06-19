<?php

namespace App\Http\Controllers;

use App\Models\Cutting;
use Illuminate\Http\Request;

class CuttingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cutting = Cutting::all();
        return view('master.cutting.index',compact('cutting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.cutting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cutting = new Cutting();
        $cutting->nama_cutting = $request->nama_cutting;
        $cutting->harga = $request->harga;
        $cutting->save();

        return redirect()->route('cutting.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Cutting $cutting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cutting $cutting)
    {
        return view('master.cutting.edit',compact('cutting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cutting $cutting)
    {
        $cutting->nama_cutting = $request->nama_cutting;
        $cutting->harga = $request->harga;
        $cutting->save();
        return redirect()->route('cutting.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cutting $cutting)
    {
        $cutting->delete();
        return redirect()->route('cutting.index');
    }
}

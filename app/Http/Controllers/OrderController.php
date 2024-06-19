<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Cutting;
use App\Models\Laminasi;
use App\Models\Order;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::all();
        return view('master.order.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bahan = Bahan::all();
        $laminasi = Laminasi::all();
        $cutting = Cutting::all();
        return view('master.order.create',compact('bahan','laminasi','cutting'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $config = [
            'table' => 'orders',
            'length' => 13,
            'prefix' => 'TRX'. date('ymd'),
            'field'=> 'kode_pemesanan'
        ];

        $bahan = Bahan::find($request->bahan_id);
        $ukuran = $request->panjang* $request->lebar;
        $dana_masuk = $bahan->harga;

        if($request->laminasi_id){
            $laminasi = Laminasi::find($request->laminasi_id);
            $dana_masuk += $laminasi->harga;
        }
        if($request->cutting_id){
            $cutting = Cutting::find($request->cutting_id);
            $dana_masuk += $cutting->harga;
        }

        $total = $ukuran* $dana_masuk/10000;

        $order = new Order();
        $order->kode_pemesanan = IdGenerator::generate($config);
        $order->user_id = Auth::user()->id;
        $order->nama = $request->nama;
        $order->tanggal = $request->tanggal;
        $order->panjang = $request->panjang;
        $order->lebar = $request->lebar;
        $order->estimasi = $request->estimasi;
        $order->total = $total;
        $order->bahan_id = $request->bahan_id;
        if($request->laminasi_id){
            $order->laminasi_id = $request->laminasi_id;
        }
        if($request->cutting_id){
            $order->cutting_id = $request->cutting_id;
        }
        $order->save();
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}

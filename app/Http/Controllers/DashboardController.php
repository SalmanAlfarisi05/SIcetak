<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pengeluaran;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function getOmset()
    {
        $order = Order::all();
        $omset = $order->sum('total');
        $pOperasional = Pengeluaran::whereNotIn('keterangan', ['Bahan', 'Tinta', 'Makloon'])->get();
        $pBahan = Pengeluaran::whereIn('keterangan', ['Bahan', 'Tinta', 'Makloon'])->get();
        $pOperasionalSum = $pOperasional->sum('nominal');
        $pBahanSum = $pBahan->sum('nominal');

        $orders = Order::all();
        $ordersByDate = $orders->groupBy(function ($date) {
            return Carbon::parse($date->tanggal)->format('Y-m-d');
        })->sortKeys();

        $omsetData = $ordersByDate->map(function ($row) {
            return $row->sum('total');
        });

        // Group and sum pengeluaran by date
        $pengeluaran = Pengeluaran::all();
        $pengeluaranByDate = $pengeluaran->groupBy(function ($date) {
            return Carbon::parse($date->tanggal)->format('Y-m-d');
        })->sortKeys();

        $pengeluaranData = $pengeluaranByDate->map(function ($row) {
            return $row->sum('nominal');
        });

        // Combine omset and pengeluaran data
        $combinedData = collect();

        // Merge all dates from both datasets
        $allDates = $omsetData->keys()->merge($pengeluaranData->keys())->unique()->sort();

        foreach ($allDates as $date) {
            $combinedData->put($date, [
                'omset' => $omsetData->get($date, 0),
                'pengeluaran' => $pengeluaranData->get($date, 0)
            ]);
        }


        return response()->json(
            [
                'order' => $order,
                'omset' => $omset,
                'pOperasional' => $pOperasional,
                'pBahan' => $pBahan,
                'pOperasionalSum' => $pOperasionalSum,
                'pBahanSum' => $pBahanSum,
                'omsetData' => $omsetData,
                'pengeluaranData' => $pengeluaranData,
                'combinedData' =>$combinedData
            ]
        );
    }
    public function getOmsetFilter($start, $end)
    {
        $order = Order::whereBetween('tanggal', [$start, $end])->get();
        $omset = $order->sum('total');

        $pOperasional = Pengeluaran::whereBetween('tanggal', [$start, $end])->whereNotIn('keterangan', ['Bahan', 'Tinta', 'Makloon'])->get();
        $pBahan = Pengeluaran::whereBetween('tanggal', [$start, $end])->whereIn('keterangan', ['Bahan', 'Tinta', 'Makloon'])->get();
        $pOperasionalSum = $pOperasional->sum('nominal');
        $pBahanSum = $pBahan->sum('nominal');

        return response()->json(
            [
                'order' => $order,
                'omset' => $omset,
                'pOperasional' => $pOperasional,
                'pBahan' => $pBahan,
                'pOperasionalSum' => $pOperasionalSum,
                'pBahanSum' => $pBahanSum,
            ]
        );
    }
}

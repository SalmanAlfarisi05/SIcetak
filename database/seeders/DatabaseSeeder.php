<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bahan;
use App\Models\Cutting;
use App\Models\Laminasi;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'management',
        //     'email' => 'management@my.id',
        //     'password'=> Hash::make(12345678),
        //     'role'=>'management'
        // ]);

        // Bahan::create([
        //     'nama_bahan' => 'Graftac',
        //     'harga' => 100000,
        // ]);
        // Laminasi::create([
        //     'nama_laminasi' => 'Doff',
        //     'harga' => 100000,
        // ]);
        // Cutting::create([
        //     'nama_cutting' => 'Mesin',
        //     'harga' => 100000,
        // ]);

        // $orders = [];
        // for ($i = 0; $i < 50; $i++) {
        //     $orders[] = [
        //         'kode_pemesanan' => Str::random(10),
        //         'nama' => 'User ' . $i,
        //         'panjang' => rand(100, 200),
        //         'lebar' => rand(50, 100),
        //         'total' => rand(10000, 20000),
        //         'tanggal' => Carbon::now()->subDays(rand(0, 365))->format('Y-m-d'),
        //         'estimasi' => rand(1, 14),
        //         'bahan_id' => 1,
        //         'user_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ];
        // }

        // DB::table('orders')->insert($orders);

        $pengeluarans = [];
        for ($i = 0; $i < 50; $i++) {
            $pengeluarans[] = [
                'tanggal' => Carbon::now()->subDays(rand(0, 365))->format('Y-m-d'),
                'keterangan' => 'Pengeluaran ke-' . ($i + 1),
                'nominal' => rand(10000, 200000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('pengeluarans')->insert($pengeluarans);
    }
}

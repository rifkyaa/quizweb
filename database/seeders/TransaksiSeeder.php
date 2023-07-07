<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            [
                'no_transaksi' => '0105230001',
                'product_id' => 'p001',
                'QTY' => 2,
                'total_harga' => 40000  
            ],
            [
                'no_transaksi' => '0105230001',
                'product_id' => 'p001',
                'QTY' => 2,
                'total_harga' => 700000  
            ],
        ];
		 foreach ($transactions as $transaksi) {
            Transaksi::Create([
                "no_transaksi" => $transaksi["no_transaksi"],
                "product_id" => $transaksi["product_id"],
                "QTY" => $transaksi["QTY"],
                "total_harga" => $transaksi["total_harga"],
            ]);
        }
    }
}

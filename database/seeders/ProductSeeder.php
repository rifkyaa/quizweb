<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nama' => 'Baju',
                'status' => 'tidak tersedia',
                'stok' => 0,
                'harga' => 100000  
            ],
            [
                'nama' => 'Tepeda',
                'status' => 'tidak tersedia',
                'stok' => 0,
                'harga' => 700000  
            ],
            [
                'nama' => 'Tas',
                'status' => 'tersedia',
                'stok' => 7,
                'harga' => 90000  
            ],
            [
                'nama' => 'Sandal',
                'status' => 'tersedia',
                'stok' => 10,
                'harga' => 60000  
            ],
            [
                'nama' => 'Headphone',
                'status' => 'tersedia',
                'stok' => 3,
                'harga' => 250000  
            ],
            [
                'nama' => 'Jam Tangan',
                'status' => 'tersedia',
                'stok' => 7,
                'harga' => 280000  
            ],
            [
                'nama' => 'Celana',
                'status' => 'tidak tersedia',
                'stok' => 0,
                'harga' => 120000  
            ],
            [
                'nama' => 'Jaket',
                'status' => 'tidak tersedia',
                'stok' => 0,
                'harga' => 300000  
            ],
        ];
		 foreach ($products as $product) {
            Product::Create([
                "nama" => $product["nama"],
                "status" => $product["status"],
                "stok" => $product["stok"],
                "harga" => $product["harga"],
            ]);
        }
    }
}

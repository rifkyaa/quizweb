<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function dataTransaction() {
        $transactions = Transaksi::all();
        $data =[
            "transactionsData" => $transactions,
        ];
        return view('transaction.index', $data);  
    }

    public function buatTransaction()
    {
        return view('transaction.buat');
    }
    
    public function store(Request $request) {
        $request->validate([
            'no_transaksi' => ['required'],
            'product_id' => ['required'],
            'qty' => ['required'],
            'total_harga' => ['required'],
        ]);

        try {
            // Memulai transaksi database
            DB::beginTransaction();
    
            // Cek apakah produk sudah ada dalam transaksi sebelumnya
            $existingTransaction = Transaksi::where('no_transaksi', $request->no_transaksi)
                ->where('product_id', $request->product_id)
                ->first();
    
            if ($existingTransaction) {
                // Jika produk sudah ada dalam transaksi, tambahkan qty yang ada
                $existingTransaction->qty += $request->qty;
                $existingTransaction->total_harga += $request->total_harga;
                $existingTransaction->save();
            } else {
                // Jika produk belum ada dalam transaksi, buat transaksi baru
                Transaksi::create([
                    'no_transaksi' => $request->no_transaksi,
                    'product_id' => $request->product_id,
                    'qty' => $request->qty,
                    'total_harga' => $request->total_harga,
                ]);
            }
    
            // Commit transaksi database
            DB::commit();
    
            return redirect()->to('/transaction');
        } catch (\Exception $e) {
            // Rollback transaksi database jika terjadi kesalahan
            DB::rollBack();
    
            return redirect()->to('/transaction');
        }
    }
}

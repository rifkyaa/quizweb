<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::where('status', 'Tersedia')->get();
        $data =[
            "productsData" => $products,
        ];
        return view('products.index', $data);
    }
}

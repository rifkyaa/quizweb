@extends('layouts.app')
@section('content')

    <h1>Products Tersedia</h1>
    {{-- <hr><a href="{{ 'create/'}}">Create Data</a> --}}
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Stok</th>
            <th>harga</th>
        </tr>
        @foreach ($productsData as $index => $product)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $product->nama }}</td>
            <td>{{ $product->status }}</td>
            <td>{{ $product->stok }}</td>
            <td>{{ $product->harga}}</td>
        </tr>
            
        @endforeach
    </table>

    @endsection
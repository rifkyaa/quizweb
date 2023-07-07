@extends('layouts.app')
@section('content')

<h1 class=" text-uppercase">Daftar Transaksi</h1>
<a href="{{ '/' }}" class="btn btn-outline-primary my-3">Back</a>
<a href="{{ '/transaction/buattransaksi' }}" class="btn btn-outline-primary my-3">Buat Transaksi</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>No Transaksi</th>
        <th>Product Id</th>
        <th>QTY</th>
        <th>Total Harga</th>
    </tr>
    @foreach ($transactionsData as $index => $transaction)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $transaction->no_transaksi }}</td>
        <td>{{ $transaction->product_id }}</td>
        <td>{{ $transaction->qty }}</td>
        <td>{{ $transaction->total_harga}}</td>
    </tr>
        
    @endforeach
</table>

@endsection
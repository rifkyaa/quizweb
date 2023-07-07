@extends('layouts.app')

@section('content')
    <h1>Buat Transaksi Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ '/transaction' }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="no_transaksi">Nomor Transaksi:</label>
            <input type="text" name="no_transaksi" id="no_transaksi" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="product_id">ID Produk:</label>
            <input type="text" name="product_id" id="product_id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="qty">Qty:</label>
            <input type="number" name="qty" id="qty" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="total_harga">Total:</label>
            <input type="number" name="total_harga" id="total_harga" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Buat</button>
    </form>
@endsection

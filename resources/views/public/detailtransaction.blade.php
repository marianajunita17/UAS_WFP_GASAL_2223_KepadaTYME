@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Produk</th>
                        <th>Gambar</th>
                        <th>harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                    </tr>
                    @foreach ($transactions as $t)
                        <tr>
                            <td>{{ $t->name }}</td>
                            <td><img src="{{ $t->photourl }}" alt="gambar" width="200", height="200"></td>
                            <td>{{ $t->price }}</td>
                            <td>{{ $t->quantity }}</td>
                            <td>{{ $t->subtotal }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script></script>
@endsection

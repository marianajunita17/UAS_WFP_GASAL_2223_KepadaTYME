@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>Order ID</th>
                        <th>Customer ID</th>
                        <th>Total Belanja</th>
                        <th>Tanggal Transaksi</th>
                        <th>Detail</th>
                    </tr>
                    @foreach ($transaction as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->user_id }}</td>
                            <td>{{ $t->total }}</td>
                            <td>{{ $t->transaction_date }}</td>
                            <td>
                                <a href="{{ route('public.detailtransaction', ['transactionid' => $t->id]) }}" class="btn btn-primary buy-btn">Lihat Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script></script>
@endsection

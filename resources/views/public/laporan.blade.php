@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Berapa Kali Dibeli</th>
                        <th>Transaction Tanggal</th>
                    </tr>
                    @foreach ($laporan as $t)
                        <tr>
                            <td>{{ $t->name }}</td>
                            <td>{{ $t->price }}</td>
                            <td>{{ $t->qty }}</td>
                            <td>{{ $t->transaction_date }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script></script>
@endsection

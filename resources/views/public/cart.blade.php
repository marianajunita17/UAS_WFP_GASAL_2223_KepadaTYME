@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ Route('product.checkout') }}" method="post">
                @csrf
                <input type="submit" name="" id="" value="Checkout" class="btn btn-success">
            </form>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>name</th>
                        <th>price</th>
                        <th>qty</th>
                        <th>img</th>
                        <th>subtotal</th>
                    </tr>
                    @if ($cart)
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($cart as $c)
                            @php
                                $subtotal = $c['price'] * $c['quantity'];
                                $total += $subtotal;
                            @endphp
                            <tr>
                                <td>{{ $c['name'] }}</td>
                                <td>{{ $c['price'] }}</td>
                                <td>{{ $c['quantity'] }}</td>
                                <td><img src="{{ $c['photourl'] }}" alt="image" width="200" height="200"></td>
                                <td>{{ $subtotal }}</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script></script>
@endsection

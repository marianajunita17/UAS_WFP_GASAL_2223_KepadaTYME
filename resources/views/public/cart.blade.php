@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{url('/checkout')}}" method="POST">
                @csrf
            <input type="submit" value="Checkout" class="btn btn-success">
        </form>
        </div>
        <div class="row justify-content-center md-4">
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
                            $subtotal = $c["price"] * $c["quantity"];
                            $total += $subtotal;
                        @endphp
                            <tr>
                                <td>{{$c["name"]}}</td>
                                <td>{{$c["price"]}}</td>
                                <td>{{$c["quantity"]}}</td>
                                <td><img src="{{$c["filename"]}}" alt="image"></td>
                                <td>{{$subtotal}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3"></td>
                            <td>Total :</td>
                            <td>{{$total}}</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>

    </script>
@endsection

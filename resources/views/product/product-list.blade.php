@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Ukuran</th>
                        <th>Type</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($products as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->price }}</td>
                            <td>{{ $p->dimensi }}</td>
                            <td>{{ $p->type->name }}</td>
                            <td>{{ $p->brand->name }}</td>
                            <td>
                                @foreach ($p->categories()->get() as $cat)
                                    <li>{{ $cat->name }}</li>
                                @endforeach
                            </td>
                            <td><img src="{{ $p->photourl }}" alt="image" width="200" height="200"></td>
                            <td><button class="btn btn-primary buy-btn" data-id="{{ $p->id }}">Buy Now</button>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".buy-btn").on("click", function() {
                let id = $(this).attr("data-id");
                $.post(
                    "{{ url('/product-page/addcart') }}" + "/" + id, {
                        _token: "{{ csrf_token() }}"
                    },
                    function(data) {
                        if (data.status == "oke") {
                            alert(data.message);
                        }
                    }
                )
            });
        });
    </script>
@endsection

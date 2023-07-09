@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($brands as $b)
                        <tr>
                            <td>{{ $b->name }}</td>
                            <td><img src="{{ $b->photourl }}" alt="image"></td>
                            <td><button class="btn btn-primary buy-btn" data-id="{{ $b->id }}">Edit</button></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script></script>
@endsection

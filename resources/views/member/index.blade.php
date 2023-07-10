@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Customer</th>
                        <th>Email Customer</th>
                        <th>Poin</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($members as $m)
                        <tr>
                            <td>{{ $m->name }}</td>
                            <td>{{ $m->email }}</td>
                            <td>{{ $m->members->poin }}</td>
                            <td><button class="btn btn-primary buy-btn" data-id="{{ $m->id }}">Edit</button></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script></script>
@endsection

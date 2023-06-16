@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
<div class="container card shadow">
    <h1>Daftar Buku</h1>
    <hr>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
     <h4 class="card"> </h4>   
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Jumlah Tersedia</th>
                <th>No ISBN</th>
                <th>Data dibuat pada</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td> {{ $book->id }} </td>
                    <td> {{ $book->title}} </td>
                    <td> {{ $book->stok}} </td>
                    <td> {{ $book->isbn}} </td>
                    <td> {{ $book->created_at}} </td>
                </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection
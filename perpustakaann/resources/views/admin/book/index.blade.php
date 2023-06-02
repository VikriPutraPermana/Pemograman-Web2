@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
<div class="container card shadow">
    <h1>Daftar Buku</h1>
    <br>
    <a href="/admin/create" class="btn btn-primary">+ Tambah Buku</a>
    <hr>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Jumlah Tersedia</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $book->title}} </td>
                    <td> {{ $book->stok}} </td>
                    <td>
                        <a href="" class="btn btn-primary" >View</a>
                        <a href="" class="btn btn-primary" >Edit</a>
                        <a href="" class="btn btn-primary" >Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
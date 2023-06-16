@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
<div class="container card shadow">
    <h1>Daftar Buku</h1>
    <br>
    <a href="{{ url("/dashboard/book/create") }}" class="btn btn-primary">+ Tambah Buku</a>
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
                        <a href="{{ url('/dashboard/book/show', $book->id) }}" class="btn btn-primary btn-sm" >View</a>
                        <a href="{{ url('/dashboard/book/edit', $book->id) }}" class="btn btn-warning btn-sm" >Edit</a>
                        <form action="{{ url('/dashboard/book/destroy', $book->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
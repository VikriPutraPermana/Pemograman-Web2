@extends('admin.layout.index')
@section('content')

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
            <tr>
                <td>1</td>
                <td>Rembulan</td>
                <td>10</td>
                <td><a class="btn btn-primary" href="">View</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    <a class="btn btn-primary" href="">Delete</a></td>
            </tr>
        </tbody>
    </table>
    </div>
@endsection
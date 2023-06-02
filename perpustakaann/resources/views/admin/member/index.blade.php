@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
<div class="container card shadow">
    <h1>Daftar Buku</h1>
    <br>
    <a href="admin/member" class="btn btn-primary">+ Tambah Anggota</a>
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
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $member->name}} </td>
                    <td> {{ $member->gender}} </td>
                    <td> {{ $member->status}} </td>
                    <td> {{ $member->address}} </td>
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
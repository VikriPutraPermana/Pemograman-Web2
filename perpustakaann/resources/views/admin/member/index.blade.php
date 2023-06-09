@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
<div class="container card shadow">
    <h1>Daftar Anggota</h1>
    <br>
    <a href="{{ url("/dashboard/member/create") }}" class="btn btn-primary">+ Tambah Anggota</a>
    <hr>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
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
                    <td> {{ $member->email}} </td>
                    <td> {{ $member->gender}} </td>
                    <td> {{ $member->status}} </td>
                    <td> {{ $member->address}} </td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm" >View</a>
                        <a href="" class="btn btn-warning btn-sm" >Edit</a>
                        <form action="{{ url('/dashboard/member/destroy', $member->id) }}" method="post" class="d-inline">
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
</div>
@endsection
@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
<div class="container card shadow">
    <h1>Daftar Anggota</h1>
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
                <th>Name</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>Address</th>
                <th>Data dibuat pada</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td> {{ $member->id }} </td>
                    <td> {{ $member->name}} </td>
                    <td> {{ $member->email}} </td>
                    <td> {{ $member->gender}} </td>
                    <td> {{ $member->status}} </td>
                    <td> {{ $member->address}} </td>
                    <td> {{ $member->created_at}} </td>
                </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection
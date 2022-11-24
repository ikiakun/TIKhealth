@extends('layouts.app')

@section('content')
    <h2>Daftar User</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="row">No</th>
                <th scope="row">Nama</th>
                <th scope="row">Tanggal Pembuatan</th>
                <th scope="row">Role</th>
                <th scope="row">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                
            <tr>
                <th scope="col">{{ $loop->iteration }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->role }}</td>
                <td>
                    <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('user.destroy', $item->id) }}" class="d-inline" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
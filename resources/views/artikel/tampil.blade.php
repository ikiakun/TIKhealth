@extends('layouts.app')

@section('content')
    <h2>Daftar Artikel</h2>
    <a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah Artikel</a>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="row">No</th>
                <th scope="row">Judul</th>
                <th scope="row">Foto</th>
                <th scope="row">Isi</th>
                <th scope="row">Tanggal Terbit</th>
                <th scope="row">Penulis</th>
                <th scope="row">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                
            <tr>
                <th scope="col">{{ $loop->iteration }}</th>
                <td>{{ $item->judul }}</td>
                <td>
                    <img src="{{ asset('storage/', $item->foto) }}">    
                </td>
                <td>{{ $item->isi }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>{{ $item->user->name }}</td>
                <td>
                    <a href="{{ route('artikel.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('artikel.destroy', $item->id) }}" class="d-inline" method="POST">
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
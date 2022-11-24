@extends('layouts.app')

@section('content')
    <h2>Daftar Kategori</h2>
    <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="row">No</th>
                <th scope="row">Nama</th>
                <th scope="row">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                
            <tr>
                <th scope="col">{{ $loop->iteration }}</th>
                <td>{{ $item->nama }}</td>
                <td>
                    <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kategori.destroy', $item->id) }}" class="d-inline" method="POST">
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
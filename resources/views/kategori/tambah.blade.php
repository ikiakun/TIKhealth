@extends('layouts.app')

@section('content')
    <h2>Tambah Kategori</h2>
    
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Masukkan nama kategori</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
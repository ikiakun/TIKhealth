@extends('layouts.app')

@section('content')
    <h2>Tambah Artikel</h2>
    
    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul">
        </div>
        <div class="mb-3">
          <label class="form-label">Kategori</label>
          <select class="form-control" name="kategori_id">
                <option value="">Pilih Kategori</option>
            @foreach($data2 as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Isi</label>
          <textarea class="form-control" name="isi" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Foto</label>
          <input type="file" class="form-control" name="foto">
          @auth
            <input class="form-control"  type="hidden" value="{{ Auth::user()->id }}" name="user_id">
          @endauth
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
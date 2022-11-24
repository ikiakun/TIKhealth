@extends('layouts.app')

@section('content')
    <h2>Edit Artikel</h2>
    
    <form action="{{ route('artikel.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
          <label class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul" value="{{ $data->judul }}">
        </div>
        <div class="mb-3">
          <label class="form-label">Kategori</label>
          <select name="kategori_id" class="form-control">
            @foreach($data2 as $item)
                <option value="{{ $item->id }}" @selected($data->kategori_id==$item->id)>{{ $item->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Isi</label>
          <textarea class="form-control" name="isi" cols="30" rows="10">{{ $data->isi }}</textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Foto</label>
          <img src="{{ asset('storage/', $item->foto) }}" alt="" width="50px" height="50px">
          <input type="file" class="form-control" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
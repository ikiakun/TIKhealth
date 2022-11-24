@extends('layouts.app')

@section('content')
    <h2>Edit Kategori</h2>
    
    <form action="{{ route('kategori.update', $data->id) }}" method="POST">
      @csrf
      @method('put')
        <div class="mb-3">
          <label class="form-label">Edit nama kategori</label>
          <input type="text" class="form-control" value="{{ $data->nama }}" name="nama">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
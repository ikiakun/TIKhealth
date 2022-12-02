@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">{{ __('Input Karakter') }}</div>

                    <div class="card-body">
                        <form action="{{ route('nilai') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label class="form-label">Nama</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">NIS</label>
                              <input type="number" class="form-control" name="nis">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Nilai Tugas</label>
                              <input type="number" class="form-control" name="tugas">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nilai Quiz</label>
                                <input type="number" class="form-control" name="quiz">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nilai UTS</label>
                                <input type="number" class="form-control" name="uts">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nilai UAS</label>
                                <input type="number" class="form-control" name="uas">
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">{{ __('Hasil Perhitungan') }}</div>

                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label">NIS</label>
                        <input type="text" class="form-control" name="hasNis" readonly>
                      </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="hasNama" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Nilai Akhir</label>
                            <input type="text" class="form-control" name="hasNilai" readonly>
                          </div>
                    </div>
                </div>
            </div>
    </div>
</div>


@endsection

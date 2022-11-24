@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">{{ __('Input Karakter') }}</div>

                    <div class="card-body">
                        {{-- <form action="{{ route('BMIController.store') }}" method="POST"> --}}
                            @csrf
                            <div class="mb-3">
                              <label class="form-label">Nama</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Tinggi Badan (cm)</label>
                              <input type="number" class="form-control" name="tinggi">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Berat Badan (kg)</label>
                              <input type="number" class="form-control" name="berat">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tahun Lahir:</label>
                                <input type="number" max="9999" class="form-control" name="tahun">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Hobi</label>
                                <input type="text" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="gas()">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">{{ __('Hasil Perhitungan') }}</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">BMI :</label>
                            <input type="text" class="form-control" name="hasilBMI" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Status Berat Badan :</label>
                            <input type="text" class="form-control" name="statusBB" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Hobi :</label>
                            <input type="text" class="form-control" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Umur :</label>
                            <input type="number" class="form-control" name="umur" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Konsultasi Gratis :</label>
                            <input type="text" class="form-control" name="ketKonsul" readonly>
                          </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<script>
    public function gas(){

    }
</script>
@endsection

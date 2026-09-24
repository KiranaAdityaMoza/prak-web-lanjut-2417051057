@extends('layouts.app')

@section('content')
<div class="row justify-content-center my-4">
    <div class="col-md-5">
        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
            <div class="text-center mb-4">
                <h3>
                    Tambah User
                </h3>
            </div>

            <form action="{{ url('/user') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold text-secondary small">Nama Lengkap</label>
                    <input type="text" class="form-control bg-light border-0 py-2 px-3 rounded-3" id="nama" name="nama" placeholder="Masukkan nama" required>
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold text-secondary small">NPM / NIM</label>
                    <input type="text" class="form-control bg-light border-0 py-2 px-3 rounded-3" id="npm" name="npm" placeholder="Masukkan NPM" required>
                </div>

                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold text-secondary small">Kelas</label>
                    <select class="form-select bg-light border-0 py-2 px-3 rounded-3" id="kelas_id" name="kelas_id" required>
                        <option value="" selected disabled>Pilih Kelas</option>
                        @foreach ($kelas as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-siakad w-100 py-2 rounded-3 fw-semibold">
                    Simpan Data
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
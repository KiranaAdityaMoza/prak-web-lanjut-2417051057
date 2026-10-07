@extends('layouts.app')

@section('content')
<div class="card border-0 shadow-sm rounded-3 p-4 bg-white">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-dark mb-1">Data Mahasiswa</h3>
            <p class="text-muted small mb-0">Daftar seluruh mahasiswa yang terdaftar dalam sistem.</p>
        </div>
        <a href="{{ url('/user/create') }}" class="btn btn-siakad rounded-2 px-3 py-2 fw-medium">
            + Tambah User
        </a>
    </div>

    {{-- Alert Notifikasi --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
            ✓ {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <x-table :users="$users" />
</div>
@endsection
@extends('layouts.app')

@section('content')
<div style="min-height: 80vh; display: flex; justify-content: center; align-items: center; padding: 40px 20px;">
    <div style="background: #ffffff; width: 100%; max-width: 420px; padding: 35px 30px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);">
        
        <h2 style="text-align: center; margin-top: 0; margin-bottom: 28px; color: #1e293b; font-size: 26px; font-weight: 700;">Tambah Mata Kuliah</h2>

        @if ($errors->any())
            <div style="background-color: #fef2f2; color: #991b1b; border: 1px solid #fecaca; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 13px;">
                <ul style="margin: 0; padding-left: 18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 20px;">
                <label for="nama_mk" style="display: block; margin-bottom: 8px; color: #64748b; font-size: 14px; font-weight: 500;">Nama Mata Kuliah</label>
                <input type="text" id="nama_mk" name="nama_mk" placeholder="Masukkan nama mata kuliah" value="{{ old('nama_mk') }}" required style="width: 100%; padding: 12px 14px; background-color: #f8fafc; border: 1px solid transparent; border-radius: 8px; font-size: 14px; color: #334155; box-sizing: border-box; outline: none;">
            </div>

            <div style="margin-bottom: 28px;">
                <label for="sks" style="display: block; margin-bottom: 8px; color: #64748b; font-size: 14px; font-weight: 500;">SKS</label>
                <input type="number" id="sks" name="sks" placeholder="Masukkan jumlah SKS" value="{{ old('sks') }}" required style="width: 100%; padding: 12px 14px; background-color: #f8fafc; border: 1px solid transparent; border-radius: 8px; font-size: 14px; color: #334155; box-sizing: border-box; outline: none;">
            </div>

            <button type="submit" style="width: 100%; background-color: #1d4ed8; color: #ffffff; border: none; padding: 12px; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer;">Simpan Data</button>
        </form>
        
    </div>
</div>
@endsection
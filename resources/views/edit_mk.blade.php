@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 40px auto; padding: 0 20px; font-family: sans-serif;">
    <div style="background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); padding: 28px; border: 1px solid #e5e7eb;">
        <h2 style="margin-top: 0; margin-bottom: 24px; color: #1e3a8a; font-size: 22px; font-weight: bold; border-bottom: 2px solid #f1f5f9; padding-bottom: 12px;">Edit Mata Kuliah</h2>

        @if ($errors->any())
            <div style="background-color: #fef2f2; color: #991b1b; border: 1px solid #fecaca; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px; font-size: 14px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 18px;">
                <label for="nama_mk" style="display: block; margin-bottom: 6px; color: #334155; font-weight: 500; font-size: 14px;">Nama Mata Kuliah</label>
                <input type="text" id="nama_mk" name="nama_mk" value="{{ old('nama_mk', $mk->nama_mk) }}" required style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; box-sizing: border-box; outline: none;">
            </div>

            <div style="margin-bottom: 24px;">
                <label for="sks" style="display: block; margin-bottom: 6px; color: #334155; font-weight: 500; font-size: 14px;">SKS</label>
                <input type="number" id="sks" name="sks" value="{{ old('sks', $mk->sks) }}" required style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; box-sizing: border-box; outline: none;">
            </div>

            <div style="display: flex; gap: 10px; align-items: center;">
                <button type="submit" style="background-color: #1e40af; color: white; border: none; padding: 10px 20px; border-radius: 6px; font-size: 14px; font-weight: 500; cursor: pointer;">Simpan Perubahan</button>
                <a href="{{ url('/matakuliah') }}" style="background-color: #f1f5f9; color: #475569; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-size: 14px; font-weight: 500;">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
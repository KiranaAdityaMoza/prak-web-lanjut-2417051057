@extends('layouts.app')

@section('content')
<div style="min-height: 80vh; display: flex; justify-content: center; align-items: center; padding: 40px 20px;">
    <div style="background: #ffffff; width: 100%; max-width: 420px; padding: 35px 30px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);">
        
        <h2 style="text-align: center; margin-top: 0; margin-bottom: 28px; color: #1e293b; font-size: 26px; font-weight: 700;">Edit User</h2>

        @if ($errors->any())
            <div style="background-color: #fef2f2; color: #991b1b; border: 1px solid #fecaca; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 13px;">
                <ul style="margin: 0; padding-left: 18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 20px;">
                <label for="nama" style="display: block; margin-bottom: 8px; color: #64748b; font-size: 14px; font-weight: 500;">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" required style="width: 100%; padding: 12px 14px; background-color: #f8fafc; border: 1px solid transparent; border-radius: 8px; font-size: 14px; color: #334155; box-sizing: border-box; outline: none;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="npm" style="display: block; margin-bottom: 8px; color: #64748b; font-size: 14px; font-weight: 500;">NPM / NIM</label>
                <input type="text" id="npm" name="npm" value="{{ old('npm', $user->nim) }}" required style="width: 100%; padding: 12px 14px; background-color: #f8fafc; border: 1px solid transparent; border-radius: 8px; font-size: 14px; color: #334155; box-sizing: border-box; outline: none;">
            </div>

            <div style="margin-bottom: 28px;">
                <label for="kelas_id" style="display: block; margin-bottom: 8px; color: #64748b; font-size: 14px; font-weight: 500;">Kelas</label>
                <select id="kelas_id" name="kelas_id" required style="width: 100%; padding: 12px 14px; background-color: #f8fafc; border: 1px solid transparent; border-radius: 8px; font-size: 14px; color: #334155; box-sizing: border-box; outline: none;">
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $item)
                        <option value="{{ $item->id }}" {{ (old('kelas_id', $user->kelas_id) == $item->id) ? 'selected' : '' }}>
                            Kelas {{ $item->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div style="display: flex; gap: 10px;">
                <button type="submit" style="flex: 1; background-color: #1d4ed8; color: #ffffff; border: none; padding: 12px; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer;">Simpan Perubahan</button>
                <a href="{{ url('/user') }}" style="padding: 12px 18px; background-color: #f1f5f9; color: #475569; text-decoration: none; border-radius: 8px; font-size: 14px; font-weight: 500; text-align: center;">Batal</a>
            </div>
        </form>
        
    </div>
</div>
@endsection
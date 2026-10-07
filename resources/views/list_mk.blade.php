@extends('layouts.app')

@section('content')
<div style="max-width: 1000px; margin: 30px auto; padding: 0 20px; font-family: sans-serif;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="margin: 0; color: #1e3a8a; font-size: 28px; font-weight: bold;">Daftar Mata Kuliah</h2>
        <a href="{{ route('matakuliah.create') }}" style="background-color: #1e40af; color: white; padding: 10px 18px; text-decoration: none; border-radius: 6px; font-size: 14px; font-weight: 500; display: inline-block;">+ Tambah Mata Kuliah</a>
    </div>

    @if (session('success'))
        <div style="background-color: #dcfce7; color: #15803d; border: 1px solid #bbf7d0; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px; font-size: 14px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="background: white; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; border: 1px solid #e5e7eb;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
            <thead>
                <tr style="background-color: #f8fafc; border-bottom: 2px solid #e2e8f0; color: #334155;">
                    <th style="padding: 14px 16px; font-weight: 600;">ID</th>
                    <th style="padding: 14px 16px; font-weight: 600;">Nama Mata Kuliah</th>
                    <th style="padding: 14px 16px; font-weight: 600; text-align: center;">SKS</th>
                    <th style="padding: 14px 16px; font-weight: 600; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $mk)
                    <tr style="border-bottom: 1px solid #f1f5f9;">
                        <td style="padding: 14px 16px; color: #64748b; font-family: monospace; font-size: 13px;">{{ $mk->id }}</td>
                        <td style="padding: 14px 16px; color: #1e293b; font-weight: 500;">{{ $mk->nama_mk }}</td>
                        <td style="padding: 14px 16px; color: #334155; text-align: center;">{{ $mk->sks }}</td>
                        <td style="padding: 14px 16px; text-align: center;">
                            <div style="display: flex; gap: 8px; justify-content: center; align-items: center;">
                                <a href="{{ route('matakuliah.edit', $mk->id) }}" style="background-color: #e0f2fe; color: #0369a1; padding: 6px 12px; text-decoration: none; border-radius: 4px; font-size: 13px; font-weight: 500;">Edit</a>

                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="margin: 0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" style="background-color: #fee2e2; color: #dc2626; border: none; padding: 6px 12px; border-radius: 4px; font-size: 13px; font-weight: 500; cursor: pointer;">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="padding: 20px; text-align: center; color: #94a3b8;">Belum ada data mata kuliah.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
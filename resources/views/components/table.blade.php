<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>ID / UUID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td class="text-muted small">{{ $user->id }}</td>
                    <td class="fw-medium text-dark">{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->nama_kelas ?? $user->kelas->nama_kelas ?? '-' }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            {{-- Tombol Edit --}}
                            <a href="{{ url('/user/' . $user->id . '/edit') }}" class="btn btn-sm btn-outline-primary rounded-2 px-3">
                                Edit
                            </a>

                            {{-- Tombol Hapus --}}
                            <form action="{{ url('/user/' . $user->id) }}" method="POST" class="d-inline m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-2 px-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">Belum ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
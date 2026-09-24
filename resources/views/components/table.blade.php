@props(['users'])

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle mb-0 table-siakad table-siakad-bordered">
        <thead>
            <tr class="text-center">
                <th class="py-3" style="width: 70px;">No</th>
                <th class="py-3">Nama Mahasiswa</th>
                <th class="py-3">NPM / NIM</th>
                <th class="py-3">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $index => $user)
            <tr>
                <td class="text-center text-secondary py-3">{{ $index + 1 }}</td>
                <td class="fw-semibold text-dark py-3 px-3">{{ $user->nama }}</td>
                <td class="text-center font-monospace text-dark py-3">{{ $user->nim }}</td>
                <td class="text-center text-dark py-3">{{ $user->nama_kelas }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center py-5 text-muted">
                    Belum ada data mahasiswa terdaftar.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
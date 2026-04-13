@extends('layout.dashboard')

@section('content')
@include('components.topbar')

<!-- BOOTSTRAP CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

            <h2 class="text-center fw-bold mb-3">Daftar Pengguna</h2>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <p class="text-success fw-semibold mb-1">Login berhasil</p>
                    <p class="text-muted">
                        Selamat datang, <span class="fw-bold">{{ session('user') }}</span>
                    </p>
                </div>
                <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah Pengguna</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- TABEL DATA -->
            <div class="table-responsive">
                <table class="table table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pengguna as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at ?? '-' }}</td>
                            <td>
                                <a href="{{ route('pengguna.show', $user->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('pengguna.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('pengguna.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-muted">Tidak ada data pengguna.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- LOGOUT -->
            <form action="/logout" method="POST" class="mt-4">
                @csrf
                <div class="d-grid">
                    <button type="submit" class="btn btn-danger fw-semibold">
                        Logout
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
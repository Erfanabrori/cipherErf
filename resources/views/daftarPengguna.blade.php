@extends('layout.dashboard')

@section('content')
@include('components.topbar')

<!-- BOOTSTRAP CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

            <h2 class="text-center fw-bold mb-3">Daftar Pengguna</h2>

            <div class="text-center mb-4">
                <p class="text-success fw-semibold mb-1">Login berhasil</p>
                <p class="text-muted">
                    Selamat datang, <span class="fw-bold">{{ session('user') }}</span>
                </p>
            </div>

            <!-- TABEL DATA -->
            <div class="table-responsive">
                <table class="table table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pengguna as $user)
                        <tr>
                            <td>{{ $user->id_pengguna ?? $user->id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at ?? '-' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-muted">Tidak ada data pengguna.</td>
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
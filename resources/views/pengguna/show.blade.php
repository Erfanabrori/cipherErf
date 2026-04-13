@extends('layout.dashboard')

@section('content')
@include('components.topbar')

<!-- BOOTSTRAP CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
            <h2 class="text-center fw-bold mb-4">Detail Pengguna</h2>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>ID:</strong> {{ $pengguna->id }}</p>
                    <p><strong>Nama:</strong> {{ $pengguna->nama }}</p>
                    <p><strong>Email:</strong> {{ $pengguna->email }}</p>
                    <p><strong>Created At:</strong> {{ $pengguna->created_at }}</p>
                    <p><strong>Updated At:</strong> {{ $pengguna->updated_at }}</p>
                </div>
            </div>

            <a href="{{ route('users') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

@endsection
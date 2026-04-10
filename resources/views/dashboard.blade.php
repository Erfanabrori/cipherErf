@extends('layout.dashboard')

@section('content')
@include('components.topbar')

<div class="hero-cards">
    <div class="cards">
        <a href="{{ route('dashboard') }}" class="card card-link">
            <h3><i class="fa-solid fa-gauge-high"></i> Dashboard</h3>
            <div class="small">Ringkasan aktivitas dan navigasi utama.</div>
        </a>

        <a href="{{ route('profil') }}" class="card card-link">
            <h3><i class="fa-solid fa-user"></i> Profil</h3>
            <div class="small">Lihat dan kelola informasi akun Anda.</div>
        </a>

        <a href="{{ route('users') }}" class="card card-link">
            <h3><i class="fa-solid fa-users"></i> Daftar Pengguna</h3>
            <div class="small">Kelola daftar pengguna dan akses data user.</div>
        </a>

        <a href="{{ route('caesar') }}" class="card card-link">
            <h3><i class="fa-solid fa-key"></i> Caesar Cipher</h3>
            <div class="small">Enkripsi dan dekripsi menggunakan Caesar cipher.</div>
        </a>

        <a href="{{ route('hill') }}" class="card card-link">
            <h3><i class="fa-solid fa-table-cells"></i> Hill Cipher</h3>
            <div class="small">Eksperimen dengan enkripsi Hill matrix.</div>
        </a>

        <a href="{{ route('vigenere') }}" class="card card-link">
            <h3><i class="fa-solid fa-lock"></i> Vigenère Cipher</h3>
            <div class="small">Gunakan cipher Vigenère untuk pesan rahasia.</div>
        </a>
    </div>
</div>

@endsection

<style>
.hero-cards {
    margin-top: 20px;
}

.dashboard-intro {
    background: #111316;
    color: #e2e8f0;
    border-radius: 18px;
    padding: 28px;
    margin-bottom: 28px;
    box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
}

.dashboard-intro h2 {
    margin-bottom: 10px;
    font-size: 30px;
}

.dashboard-intro p {
    color: #94a3b8;
    line-height: 1.75;
    max-width: 720px;
}

.cards {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 20px;
}

.card-link {
    display: block;
    text-decoration: none;
    color: inherit;
}

.card {
    background: #0f172a;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 20px;
    padding: 24px;
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    min-height: 150px;
}

.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 32px 64px rgba(15, 23, 42, 0.22);
    border-color: rgba(56, 189, 248, 0.35);
}

.card h3 {
    font-size: 20px;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.card .small {
    color: #94a3b8;
    font-size: 14px;
    line-height: 1.75;
}

@media (max-width: 980px) {
    .cards {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 620px) {
    .cards {
        grid-template-columns: 1fr;
    }
}
</style>
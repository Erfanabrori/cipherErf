@extends('layout.dashboard')

@section('content')
@include('components.topbar')

<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Dashboard</h2>

        <p class="text-green-600 font-semibold mb-2">Login berhasil</p>
        <p class="text-gray-700 mb-6">
            Selamat datang, <span class="font-semibold">{{ session('user') }}</span>
        </p>

        <form action="/logout" method="POST">
            @csrf
            <button 
                type="submit" 
                class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200"
            >
                Logout
            </button>
        </form>
    </div>
</div>

@endsection

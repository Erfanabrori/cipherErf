@extends('layout.dashboard')

@section('content')
@include('components.topbar')

<div class="min-h-screen bg-gray-100 p-6">
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Daftar Pengguna</h2>

        <p class="text-green-600 font-semibold mb-2 text-center">Login berhasil</p>
        <p class="text-gray-700 mb-6 text-center">
            Selamat datang, <span class="font-semibold">{{ session('user') }}</span>
        </p>

        <!-- TABEL DATA -->
        <div class="overflow-x-auto rounded-lg border border-gray-300 shadow-sm">
            <table class="min-w-full border-collapse text-sm text-left">
                <thead class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-4 py-3 border-b border-gray-200">ID</th>
                        <th class="px-4 py-3 border-b border-gray-200">Email</th>
                        <th class="px-4 py-3 border-b border-gray-200">Created At</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse($pengguna as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 border-b border-gray-200">{{ $user->id_pengguna ?? $user->id }}</td>
                        <td class="px-4 py-3 border-b border-gray-200">{{ $user->email }}</td>
                        <td class="px-4 py-3 border-b border-gray-200">{{ $user->created_at ?? '-' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td class="px-4 py-4 text-center text-gray-500" colspan="3">Tidak ada data pengguna.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- LOGOUT -->
        <form action="/logout" method="POST" class="mt-6">
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
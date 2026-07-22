@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Selamat datang di Panel Administrasi SIMBA')

@section('content')

{{-- Stats Cards --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-8">

    {{-- Total Berita --}}
    <div class="bg-white rounded-2xl p-6 flex items-center gap-5" style="box-shadow: 0 1px 3px rgba(0,0,0,0.06), 0 4px 16px rgba(0,0,0,0.06);">
        <div class="w-14 h-14 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, #148F9A20, #148F9A10);">
            <svg class="w-7 h-7" style="color: #148F9A;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
            </svg>
        </div>
        <div>
            <p class="text-sm text-gray-500 font-medium">Total Berita</p>
            <p class="text-3xl font-bold text-gray-800 mt-0.5">{{ number_format($totalBerita) }}</p>
        </div>
    </div>

    {{-- Total Pengguna --}}
    <div class="bg-white rounded-2xl p-6 flex items-center gap-5" style="box-shadow: 0 1px 3px rgba(0,0,0,0.06), 0 4px 16px rgba(0,0,0,0.06);">
        <div class="w-14 h-14 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, #6366f120, #6366f110);">
            <svg class="w-7 h-7 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
            </svg>
        </div>
        <div>
            <p class="text-sm text-gray-500 font-medium">Total Pengguna</p>
            <p class="text-3xl font-bold text-gray-800 mt-0.5">{{ number_format($totalUser) }}</p>
        </div>
    </div>

    {{-- Quick Add --}}
    <div class="bg-white rounded-2xl p-6 flex items-center gap-5" style="box-shadow: 0 1px 3px rgba(0,0,0,0.06), 0 4px 16px rgba(0,0,0,0.06);">
        <div class="w-14 h-14 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, #f59e0b20, #f59e0b10);">
            <svg class="w-7 h-7 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4v16m8-8H4"/>
            </svg>
        </div>
        <div>
            <p class="text-sm text-gray-500 font-medium">Aksi Cepat</p>
            <a href="{{ route('berita.create') }}" class="text-sm font-semibold mt-0.5 block" style="color: #148F9A;">+ Tambah Berita Baru</a>
        </div>
    </div>

</div>

{{-- Recent News Table --}}
<div class="bg-white rounded-2xl overflow-hidden" style="box-shadow: 0 1px 3px rgba(0,0,0,0.06), 0 4px 16px rgba(0,0,0,0.06);">
    <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
        <div>
            <h3 class="text-base font-semibold text-gray-800">Berita Terbaru</h3>
            <p class="text-xs text-gray-400 mt-0.5">5 berita paling baru yang ditambahkan</p>
        </div>
        <a href="{{ route('berita.index') }}" class="text-sm font-medium" style="color: #148F9A;">Lihat Semua →</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full data-table">
            <thead>
                <tr>
                    <th class="text-left">Judul</th>
                    <th class="text-left">Penulis</th>
                    <th class="text-left">Tanggal</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($beritaTerbaru as $item)
                <tr>
                    <td>
                        <p class="font-medium text-gray-800 max-w-xs truncate">{{ $item->judul }}</p>
                        <p class="text-xs text-gray-400 mt-0.5">{{ Str::limit(strip_tags($item->konten), 60) }}</p>
                    </td>
                    <td>
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full flex items-center justify-center text-xs font-semibold text-white" style="background: #148F9A;">
                                {{ strtoupper(substr($item->user->name ?? 'U', 0, 1)) }}
                            </div>
                            <span class="text-sm text-gray-600">{{ $item->user->name ?? '-' }}</span>
                        </div>
                    </td>
                    <td class="text-sm text-gray-500">{{ $item->created_at->format('d M Y') }}</td>
                    <td class="text-center">
                        @if($item->gambar)
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-50 text-green-700">Ada</span>
                        @else
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-500">Tidak Ada</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ route('berita.edit', $item) }}" class="btn-edit text-xs">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-10 text-gray-400">
                        <svg class="w-10 h-10 mx-auto mb-2 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <p class="text-sm">Belum ada berita. <a href="{{ route('berita.create') }}" style="color:#148F9A;" class="font-medium">Tambah sekarang</a></p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection

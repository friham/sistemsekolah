@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="py-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="card-header bg-gray-200 py-3 px-4">Tambah Jurusan</div>
            <div class="card-body">
                <form method="POST" action="{{ route('jurusan.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="nama_jurusan" class="block text-gray-700 text-sm font-bold mb-2">Nama Jurusan</label>
                        <input id="nama_jurusan" type="text" class="form-input rounded-md shadow-sm w-full @error('nama_jurusan') border-red-500 @enderror" name="nama_jurusan" value="{{ old('nama_jurusan') }}" required autocomplete="nama_jurusan" autofocus>
                        @error('nama_jurusan')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="kode_jurusan" class="block text-gray-700 text-sm font-bold mb-2">Kode Jurusan</label>
                        <input id="kode_jurusan" type="text" class="form-input rounded-md shadow-sm w-full @error('kode_jurusan') border-red-500 @enderror" name="kode_jurusan" value="{{ old('kode_jurusan') }}" required autocomplete="kode_jurusan">
                        @error('kode_jurusan')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="kapasitas_jurusan" class="block text-gray-700 text-sm font-bold mb-2">Kapasitas</label>
                        <input id="kapasitas_jurusan" type="number" class="form-input rounded-md shadow-sm w-full @error('kapasitas_jurusan') border-red-500 @enderror" name="kapasitas_jurusan" value="{{ old('kapasitas_jurusan') }}" required autocomplete="kapasitas_jurusan">
                        @error('kapasitas_jurusan')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                        <a href="{{ route('jurusan.index') }}" class="ml-2 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
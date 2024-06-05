@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="py-8">
        <a href="{{ route('jurusan.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Jurusan</a>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama Jurusan</th>
                    <th class="px-4 py-2">Kode Jurusan</th>
                    <th class="px-4 py-2">Kapasitas</th>
                    <th class="px-4 py-2">Opsi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($jurusans as $index => $jurusan)
                <tr>
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $jurusan->nama_jurusan }}</td>
                    <td class="border px-4 py-2">{{ $jurusan->kode_jurusan }}</td>
                    <td class="border px-4 py-2">{{ $jurusan->kapasitas_jurusan }} Siswa</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Update</a>
                        <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
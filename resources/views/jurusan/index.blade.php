@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="mb-4">
        <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah Jurusan</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-secondary">
                        <th>No</th>
                        <th>Nama Jurusan</th>
                        <th>Kode Jurusan</th>
                        <th>Kapasitas</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($jurusans as $index => $jurusan)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $jurusan->nama_jurusan }}</td>
                        <td>{{ $jurusan->kode_jurusan }}</td>
                        <td>{{ $jurusan->kapasitas_jurusan }} Siswa</td>
                        <td>
                            <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-warning btn-sm mr-2">Update</a>
                            <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

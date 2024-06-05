@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-secondary text-white">Edit Jurusan</div>
        <div class="card-body">
            <form method="POST" action="{{ route('jurusan.update', $jurusan->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                    <input id="nama_jurusan" type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" name="nama_jurusan" value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}" required autofocus>
                    @error('nama_jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kode_jurusan" class="form-label">Kode Jurusan</label>
                    <input id="kode_jurusan" type="text" class="form-control @error('kode_jurusan') is-invalid @enderror" name="kode_jurusan" value="{{ old('kode_jurusan', $jurusan->kode_jurusan) }}" required>
                    @error('kode_jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kapasitas_jurusan" class="form-label">Kapasitas</label>
                    <input id="kapasitas_jurusan" type="number" class="form-control @error('kapasitas_jurusan') is-invalid @enderror" name="kapasitas_jurusan" value="{{ old('kapasitas_jurusan', $jurusan->kapasitas_jurusan) }}" required>
                    @error('kapasitas_jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('jurusan.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
  <div class="container mt-5 d-flex justify-content-center">

    <div class="card w-75 shadow-sm">
      <div class="card-header bg-primary text-white text-center">
        <h1 class="h3 mb-0">Form Pendaftaran <span class="text-uppercase">Siswa</span></h1>
      </div>
      <div class="card-body">
        <!-- Success Message -->
        @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form action="{{ route('pendaftaran.store') }}" method="POST" class="w-100 mt-4">
          @csrf()

          <div class="mb-3 row">
            <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" placeholder="Nama lengkap" value="{{ old('nama_lengkap') }}">
              @error('nama_lengkap')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="sekolah_asal" class="col-sm-3 col-form-label">Sekolah Asal</label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('sekolah_asal') is-invalid @enderror" name="sekolah_asal" id="sekolah_asal" placeholder="Sekolah asal" value="{{ old('sekolah_asal') }}">
              @error('sekolah_asal')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" placeholder="Alamat lengkap">{{ old('alamat') }}</textarea>
              @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
            <div class="col-sm-9">
              <select name="jurusan" id="jurusan" class="form-select @error('jurusan') is-invalid @enderror">
                <option value="">Pilih Jurusan</option>
                @foreach ($jurusans as $jurusan)
                  <option value="{{ $jurusan->nama_jurusan }}">{{ $jurusan->nama_jurusan }}</option>
                @endforeach
              </select>
              @error('jurusan')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>

  </div>
@endsection

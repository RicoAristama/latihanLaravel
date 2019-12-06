@extends('layout/main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
                <div class="col-8">
                    <h1 class="mt-3 ">Form Ubah Data Mahasiswa</h1>
                    <form method="POST" action="/students/{{$student->id}}">
                        @method('patch')
                        @csrf

                        <!-- Nama -->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
                            @error('nama')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <!-- NRP -->
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ $student->nrp }}">
                            @error('nrp')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
                        </div>

                        <!-- Jurusan -->
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                        </div>

                        <!-- button -->
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>
        </div>
    </div>
@endsection
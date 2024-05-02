@extends('layouts.admin')

@section('judul', 'Tambah Gejala')

@section('content')
<form action="/gejala" method="POST">
    @csrf
    <div class="form-group p-3">
        <label>Nama Lengkap </label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Gejala</label>
        <input type="text" name="gejala" class="form-control" placeholder="Masukkan Gejala">
        @error('gejala')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Penyakit</label>
        <input type="text" name="penyakit" class="form-control" placeholder="Masukkan Penyakit">
        @error('penyakit')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="p-3">
        <button type="submit" class="btn btn-primary ">Submit</button>
    </div>

</form>
@endsection
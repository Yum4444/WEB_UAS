@extends('layouts.admin')

@section('judul')
  
@endsection

@section('content')
<div class="p-3">
    <h2>Edit Data Profile Pelanggan {{$gejala->id}} </h2>
        <form action="/gejala/{{$gejala->id}}" method="POST">
            @csrf
           @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" value="{{$gejala->nama_lengkap}}" id="nama" placeholder="Masukkan Nama Lengkap">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gejala">Gejala</label>
                <input type="text" class="form-control" name="gejala" value="{{$gejala->gejala}}" id="gejala" placeholder="Masukkan Gejala">
                @error('gejala')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="penyakit">Penyakit</label>
                <input type="text" class="form-control" name="penyakit" value="{{$gejala->penyakit}}" id="gejala" placeholder="Masukkan Penyakit">
                @error('penyakit')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/gejala" class="btn btn-success my-3">Kembali</a>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
</div>

 
@endsection
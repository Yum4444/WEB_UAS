@extends('layouts.admin')

@section('judul')
Detai Profil Pelanggan

@endsection

@section('content')

<div class="p-3">
    <div class="card" style="width: 24rem;" >
    <div class="card-body ">
        <h5 class="card-tittle">Detail Data Profil Pelanggan ke {{ $gejala->id }}</h5>
        <h6>{{ $gejala->nama_lengkap}}</h6>
        <h6>{{ $gejala->gejala}}</h6>
        <h6>{{ $gejala->penyakit}}</h6>
    </div>
    </div>

    <a href="/gejala" class="btn btn-primary my-3">Kembali</a>
</div>

@endsection
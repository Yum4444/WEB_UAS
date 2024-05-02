@extends('layouts.admin')
@section('judul', 'Data Pelanggan')

@section('tabel')

<div class="p-3">
<a href="/tambahgejala" class="btn btn-primary my-3">Tambah Data Gejala</a>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Gejala</th>
                <th scope="col">Penyakit</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($gejala as $key => $value )
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$value->nama_lengkap}}</td>
                <td>{{$value->gejala}}</td>
                <td>{{$value->penyakit}}</td>
                <td class="mr-3">
                    <a href="/gejala/{{$value->id}}" class="btn btn-info" >Show </a>
                    <a href="/gejala/{{$value->id}}/edit" class="btn btn-primary" >Edit </a>
                    <a href="/gejala/{{$value->id}}" class="btn btn-danger" data-confirm-delete="true" >Delete </a>
                </td>
            </tr>
            @empty
                <tr colspan="6">
                    <td>No data</td>
                </tr>
            @endforelse
        </tbody>
        </table>
</div>
@endsection


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" 
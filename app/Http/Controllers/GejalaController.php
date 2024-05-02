<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\confirm;

class GejalaController extends Controller
{
    public function index()
    {
        $title = 'Peringatan!';
        $text = 'Apakah Anda yakin ingin menghapus?';
        $icon = 'Question';
        confirmDelete($title, $text);
        $gejala = DB::table('gejala')->get();
        return view('gejala.indexgejala', compact('gejala'));
    }
    public function tambahgejala()
    {
        return view('gejala.tambahgejala');
    }
    public function gejala(Request $request){
        
        $request->validate([
            'nama' => 'required|',
            'gejala' => 'required|',
            'penyakit' => 'required|',
        ]);

        DB::table('gejala')-> insert([
            'nama_lengkap' => $request->nama,
            'gejala' => $request->gejala,
            'penyakit' => $request->penyakit,
        ]);

        Alert::success('Success', 'Data Berhasil');


        return redirect('/gejala');
    }

    public function show($id){
        $gejala = DB::table('gejala')->find($id);
        return view('gejala.detailgejala', compact('gejala'));
    }

    public function edit($id) {
        $gejala = DB::table('gejala')->find($id);
        return view('gejala.editpelanggan', compact('gejala'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gejala' => 'required|',
            'penyakit' => 'required|',
        ]);

        $request = DB::table('gejala')
        ->where('id', $id)
        ->update([
            'nama_lengkap' => $request->nama,
            'gejala' => $request->gejala,
            'penyakit' => $request->penyakit,
        ]);

        Alert::success('Success', 'Data Berhasil di Update');


        return redirect('/gejala');
    }

    public function destroy($id) {
        $gejala = DB::table('gejala')->where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil Di Hapus');
        return redirect('/gejala');
    }

}

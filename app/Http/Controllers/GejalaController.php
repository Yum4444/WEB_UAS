<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class GejalaController extends Controller
{

    public function index()
    {
        $gejala = DB::table('gejala')->get();
        $showmenu = auth()->user()->isAdmin(); // Pastikan fungsi isAdmin() tersedia di model User Anda
        return view('gejala.indexgejala', compact('gejala', 'showmenu'));
    }

    public function tambahgejala()
    {
        $showmenu = auth()->user()->isAdmin(); // Pastikan fungsi isAdmin() tersedia di model User Anda
        return view('gejala.tambahgejala', compact('showmenu'));
    }

    public function gejala(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gejala' => 'required',
            'penyakit' => 'required',
        ]);

        DB::table('gejala')->insert([
            'nama_lengkap' => $request->nama,
            'gejala' => $request->gejala,
            'penyakit' => $request->penyakit,
        ]);

        Alert::success('Success', 'Data Berhasil Disimpan');

        return redirect('/gejala');
    }

    public function show($id)
    {
        $gejala = DB::table('gejala')->find($id);
        $showmenu = auth()->user()->isAdmin(); // Pastikan fungsi isAdmin() tersedia di model User Anda
        return view('gejala.detailgejala', compact('gejala', 'showmenu'));
    }

    public function edit($id)
    {
        $gejala = DB::table('gejala')->find($id);
        $showmenu = auth()->user()->isAdmin(); // Pastikan fungsi isAdmin() tersedia di model User Anda
        return view('gejala.editgejala', compact('gejala', 'showmenu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gejala' => 'required',
            'penyakit' => 'required',
        ]);

        DB::table('gejala')->where('id', $id)->update([
            'nama_lengkap' => $request->nama,
            'gejala' => $request->gejala,
            'penyakit' => $request->penyakit,
        ]);

        Alert::success('Success', 'Data Berhasil di Update');

        return redirect('/gejala');
    }

    public function destroy($id)
    {
        DB::table('gejala')->where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect('/gejala');
    }
}

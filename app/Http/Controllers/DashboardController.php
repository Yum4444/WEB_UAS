<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //ISI CONTROLLER
    public function index()
    {
        // variabel showmenu untuk mempersingkat pemanggilan role admin
        $showmenu = auth()->user()->isAdmin(); // nanti di masing" setiap menu ditambahkan perintah script code iini
        return view('pages.dashboard', ['showmenu' => $showmenu]);
    }
}

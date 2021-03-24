<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function home(){
		return view('home');
	}

    public function pegawai(){
		return view('pegawai');
	}

    public function agenda(){
		return view('agenda');
	}
}

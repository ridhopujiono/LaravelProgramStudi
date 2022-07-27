<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use App\Models\pengajar;
use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function index()
    {
        $pengajar = pengajar::all();
        $fasilitas = fasilitas::all();
        return view('utama.index', [
            "pengajar" => $pengajar,
            "fasilitas" => $fasilitas,
        ]);
    }

    public function about()
    {
        return view('utama.about');
    }
    public function contact()
    {
        return view('utama.contact');
    }
    public function teacher()
    {
        $teacher = pengajar::all();
        return view('utama.pengajar', ["data" => $teacher]);
    }
    public function facility()
    {
        $facility = fasilitas::all();
        return view('utama.fasilitas', ["data" => $facility]);
    }
}

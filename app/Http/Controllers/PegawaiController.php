<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function getDashboard(){
        return view('pegawai.dashboard.index');
    }
    public function getPresensi(){
        return view('pegawai.presensi.index');
    }
    public function getCuti(){
        return view('pegawai.cuti.index');
    }
    public function getLembur(){
        return view('pegawai.lembur.index');
    }
    public function getSanksi(){
        return view('pegawai.sanksi.index');
    }

}

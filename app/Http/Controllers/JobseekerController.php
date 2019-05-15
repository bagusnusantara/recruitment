<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
class JobseekerController extends Controller
{
    public function getDashboard(){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('jobseeker.dashboard.index');
    }

    public function getNotifikasi(){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('jobseeker.notifikasi.index');
    }

    public function getTentangsaya(){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('jobseeker.profil.tentangsaya.index');
    }
}

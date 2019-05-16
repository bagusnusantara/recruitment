<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
class AdminController extends Controller
{
    public function getDashboard(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.dashboard.index');
    }

    public function getNotifikasi(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.notifikasi.index');
    }

    public function createNotifikasi(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.notifikasi.create');
    }

    public function getLowongan(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.lowongan.index');
    }

    public function createLowongan(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.lowongan.create');
    }

}

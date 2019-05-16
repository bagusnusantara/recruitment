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

    public function getKlien(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.klien.index');
    }

    public function createKlien(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.klien.create');
    }

    public function getSdm(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.sdm.index');
    }

    public function createSdm(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.sdm.create');
    }

    public function getManajemenuser(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.manajemenuser.index');
    }

    public function createManajemenuser(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.manajemenuser.create');
    }

}

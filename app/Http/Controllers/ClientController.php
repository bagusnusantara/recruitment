<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
class ClientController extends Controller
{
    public function getDashboard(){
      if(!Gate::allows('isClient')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('client.dashboard.index');
    }

    public function getNotifikasi(){
      if(!Gate::allows('isClient')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('client.notifikasi.index');
    }

    public function getOrderlayanan(){
      if(!Gate::allows('isClient')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('client.orderlayanan.index');
    }

    public function createOrderlayanan(){
      if(!Gate::allows('isClient')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('client.orderlayanan.create');
    }

    public function getDatakaryawan(){
      if(!Gate::allows('isClient')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('client.datakaryawan.index');
    }
}

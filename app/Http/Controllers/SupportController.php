<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\st_Provinsi;
use App\st_Kecamatan;
use App\st_Kabkota;

class SupportController extends Controller
{
    public function getSt(Request $request){

        if($request->st_category==  "Negara"){
          $response = st_Provinsi::where('country_id',$request->st_id)->get();
          return response()->json(['data'=>$response]);
        }
        else if($request->st_category==  "Provinsi"){
          $response = st_Kabkota::where('province_id',$request->st_id)->get();
          return response()->json(['data'=>$response]);
        }
        else if($request->st_category==  "Kota"){
          $response = st_Kecamatan::where('regency_id',$request->st_id)->get();
          return response()->json(['data'=>$response]);
        }
      }
}

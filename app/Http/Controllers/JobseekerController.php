<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobseekerController extends Controller
{
    public function getDashboard(){
      return view ('jobseeker.dashboard.index');
    }

    public function getTentangsaya(){
      return view ('jobseeker.dashboard.index');
    }
}

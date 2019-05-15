<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      if('isJobseeker'){
          return redirect('jobseeker/dashboard');
      }
      else if('isClient'){
          return redirect('client/dashboard');
      }
      else if('isAdmin'){
          return redirect('admin/dashboard');
      }

    }
}

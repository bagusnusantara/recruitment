<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    use AuthenticatesUsers;

    protected function authenticated($request, $user)
      {
     if($user->roles=='admin'){
          return redirect('admin/dashboard');
       }
    elseif($user->roles=='client'){
          return redirect('client/dashboard') ;
       }
    elseif($user->roles=='jobseeker'){
     
         return redirect()->route('JobseekerDatadiri');
       }
    elseif($user->roles=='hrd'){
          return redirect('hrd/dashboard') ;
       }
    elseif($user->roles=='accessor'){
         return redirect('accessor/lowongan') ;
       }
      }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

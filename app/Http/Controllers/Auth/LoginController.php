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
         $status = DB::table('md_jobseeker')->select('status_umum','status_pendidikan','status_pengalamankerja','status_aktivitas','status_riwayatpenyakit','status_minatkerja')->where('users_id',\Auth::user()->id)->first();
         if($status->status_pendidikan=1 and $status->status_minatkerja==1 and $status->status_umum==1)
         {
            return   redirect('jobseeker/dashboard');
         }
         return redirect()->route('JobseekerDatadiri');
       }
    elseif($user->roles=='hrd'){
          return redirect('hrd/dashboard') ;
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

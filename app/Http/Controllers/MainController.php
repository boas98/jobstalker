<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            if (Auth::user()->role=='1') {
              return view('user.dashboard');
            }
        }

        return view('main.home');
    }

    public function verifyAccount($username, $token)
    {
    	$user = DB::table('users')->where('username',$username)->first();
    	$verify = DB::table('verify')->where('id_user',$user->id)->where('str',$token)->first();

    	if (count($verify)==0) {
    		return redirect('error');
    	}

    	DB::table('users')->where('id',$user->id)->update(['verify'=>'1']);
    	return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BoasController extends Controller
{
  public function verifyAccount($username, $token)
  {
    $user = DB::table('users')->where('username',$username)->first();
    $verify = DB::table('verify')->where('id_user',$user->id)->where('str',$token)->first();

    if (count($verify)==0) {
        return redirect('error');
    }

    DB::table('users')->where('id',$user->id)->update(['verify'=>'1']);
    return redirect('/');
    $user = DB::table('users')->where('username',$username)->first();
    $verify = DB::table('verify')->where('id_user',$user->id)->where('str',$token)->first();

    if (count($verify)==0) {
      return redirect('error');
    }

    DB::table('users')->where('id',$user->id)->update(['verify'=>'1']);
    return redirect('/');
  }
}

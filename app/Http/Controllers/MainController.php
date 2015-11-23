<?php

namespace App\Http\Controllers;

use Auth;
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
}

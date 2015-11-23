<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function category()
    {
      return view('admin.category');
    }

    public function postCategory()
    {

    }

    public function user()
    {
      return view('admin.user');
    }

    public function admin()
    {
      return view('admin.admin');
    }
}

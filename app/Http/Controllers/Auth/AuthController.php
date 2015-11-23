<?php

namespace App\Http\Controllers\Auth;

use Auth;
use DB;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function getLogin()
    {
        return view('main.login');
    }

    public function postLogin(Request $r)
    {
        $username = $r->input('username');
        $password = $r->input('password');

        if (Auth::attempt(['username'=>$username,'password'=>$password])) {
            return redirect('/');
        }

        return redirect('login')->withErrors('Invalid username or password')->withInput();
    }

    public function getSignUp()
    {
        return view('main.signup');
    }

    public function postSignUp(Request $r)
    {
        $name = $r->input('name');
        $email = $r->input('email');
        $username = $r->input('username');
        $password = $r->input('password');

        $validator = Validator::make($r->all(),[
            'name'  =>  'required|max:255',
            'email' =>  'required|max:255|email|unique:users,email',
            'username'  =>  'required|min:5|max:255|unique:users,username',
            'password'  =>  'required',
            'agreement' =>  'accepted',
        ]);

        if ($validator->fails()) {
            return redirect('signup')->withErrors($validator)->withInput();
        }

        DB::table('users')->insert(['name'=>$name,'email'=>$email,'username'=>$username,'password'=>bcrypt($password),'role'=>'1','verify'=>'2','photo'=>'default.jpg']);
        return redirect('/');
    }
}

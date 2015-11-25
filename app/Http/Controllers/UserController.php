<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getMyProjects()
    {
        return view('user.myprojects');
    }

    public function getPostProject()
    {
        return view('user.postproject');
    }

    public function postProject(Request $r)
    {
        $category = $r->input('category');
        $title = $r->input('title');
        $desc = $r->input('description');
        $skill = $r->input('skill');
        $budget = $r->input('budget');
        $deadline = $r->input('deadline');

        $validator = Validator::make($r->all(),[
            'category'  =>  'required',
            'title' =>  'required|max:255',
            'description' =>  'required',
            'skill' =>  'required|max:255',
            'budget'  =>  'required',
            'deadline'  =>  'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/project')->withErrors($validator)->withInput();
        }

        DB::table('project')->insert(['id_user'=>Auth::user()->id,'title'=>$title,'desc'=>$desc,'skill'=>$skill,'budget'=>$budget,'deadline'=>$deadline,'category'=>$category]);
        return redirect('projects');
    }
}

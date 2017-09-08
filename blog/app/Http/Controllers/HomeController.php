<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class HomeController extends BaseController
{
    function index(){
        //get all items from database
        $tasks_todo = DB::table('tasks')->where('completed', false)->get();
        $tasks_done = DB::table('tasks')->where('completed', true)->get();

        return view('welcome', ['tasks_todo'=>$tasks_todo, 'tasks_done'=>$tasks_done]);
    }
}

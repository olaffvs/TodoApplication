<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req) {
         $title = $req->input('titleframe');
         $body = $req->input('descframe');

         $data = array('title'=>$title,'body'=>$body);

         DB::table('tasks')->insert($data); 
         return redirect('/'); 
    }

    function update(Request $req) {

        $data = array('completed'=>'1');
        $id = $req->input('id');

        DB::table('tasks')->where('id', $id)->update($data); 
        return redirect('/'); 
   }

   function update_reset(Request $req) {
    
            $data = array('completed'=>'0');
            $id = $req->input('id');
    
            DB::table('tasks')->where('id', $id)->update($data); 
            return redirect('/'); 
    }

    function delete(Request $req) {
        
                $id = $req->input('id');
        
                DB::table('tasks')->where('id', $id)->delete(); 
                return redirect('/'); 
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB, Input;
use Session, Redirect;

class AdminController extends Controller
{
 


    public function index()
    {

       $userdb="admin";
       $passdb="admin";

      $username = Input::get('username');
      $password = Input::get('password');

      if($username != $userdb or $password != $passdb){

         
           return view('login');
      }else{

          
           Session::put('username', $userdb);
           Session::get('username');

           return redirect('/edit');  
       
      }

    
       return view('edit');  
    }



    public function edit()

    {
        


     $list = DB::table('content')->orderBy('id', 'desc')->paginate(10);
     return view('edit')->with('list',$list);  

    }


   public function out()

    {
        

    Session::flush();

    return redirect('/index.html');  

    }


}

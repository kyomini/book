<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
//use Illuminate\Pagination\LengthAwarePaginator;
//use Illuminate\Support\Facades\Validator;
use Validator;
use DB, Input;
use Session, Redirect, Captcha;


class HomeController extends Controller
{
  




    public function index()
    {

        $content = DB::table('content')->orderBy('id', 'desc')->paginate(10);
        return view('home')->with('content',$content);

    }



    public function store(Request $request)
    {

 
        $title = Input::get('title');
        $name = Input::get('name');
        $content = Input::get('content');
        $code = Input::get('code');

    

  
    $rules = [
      "code" => 'required|captcha',
      'title' => 'required',
      'content' => 'required',
      'name' => 'required',
    ];
    $messages = [
      'code.required' => '请输入验证码',
      'code.captcha' => '验证码错误，请重试',
      'title.required' => '标题输入不能为空',
      'content.required' => '内容输入不能为空',
      'name.required' => '姓名输入不能为空',
    ];




   $validator = Validator::make(Input::all(),$rules, $messages);
    if($validator->fails()) {
      return Redirect::back()->withErrors($validator);
      exit;

    } else {

          DB::table('content')->insert([
            'title' => $title,
            'name' => $name,
            'remember_token'=>null,
            'content' => $content, 
            'created_at'=>time(),
            'updated_at'=>time(),
        ]);
      return redirect('/index.html');  
    }



     


       

 







         
 }
       
     public function show()
    {
        $c_id = Input::get('id');
        $content = DB::table('content')->find($c_id);
        return view('content')->with('content',$content);
    }
  









}
        //ontent = DB::table('content')->where('id',$c_id)->get();

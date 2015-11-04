@extends('app')
@section('content')

 <!-- BOOK 内容 -->

 <div id="banner">
 </div>
  <div class="container ">
    <div class="row">
      <div class="col-lg-12">
            <a href="{{ URL('/index.html') }}" class="btn btn-primary">返回首页</a>
      <hr>
      </div>

    <div class="col-lg-5">
 
@if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

 

    <form class="form-signin" action="{{ URL('/admin') }}" method="POST" >
        <h2 class="form-signin-heading">登录</h2>

        <input type="name" id="inputEmail" class="form-control"  placeholder="用户名"  required name="username"><br>

        <input type="password" id="inputPassword" class="form-control" placeholder="密码" required name="password"><br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
     </form>






     </div>
    </div> 
  </div>

@stop
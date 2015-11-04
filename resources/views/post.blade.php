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

    <div class="col-lg-12">
 
@if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

 

<form class="form-horizontal" action="{{ URL('/post') }}" method="POST" >
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" name="title">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" name="content"></textarea>
    </div>
  </div>
  <div class="form-group">

    <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name">
    </div>
  </div>




  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">验证码</label>
    <div class="col-sm-8">
  <img src="{{ url('captcha/mews') }}" onclick="this.src='{{ url('captcha/mews') }}?r='+Math.random();" alt="">
   <div class="col-sm-3 col-left">   
    <input type="text" class=" form-control" name="code">
  </div>
    </div>
  </div>






  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger">提交</button>
    </div>
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form> 







     </div>
    </div> 
  </div>

@stop
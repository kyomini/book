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

 

<br>
  <table class="table table-bordered">

  <tbody>
    <tr>
      <td width="7%"><b>标题:</b></td>
      <td width="91%">{{ $content->title }}</td>
      </tr>
    <tr>
      <td><b>撰写:</b></td>
      <td>{{ $content->name }}</td>
      </tr>
    <tr>
      <td><b>内容:</b></td>
      <td>{{ $content->content }}</td>
      </tr>

  </tbody>
</table> 




     </div>
    </div> 
  </div>

@stop
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book</title>

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/book.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



<link rel="stylesheet" href="{{ asset('/pjax/css/nprogress.css') }}">







  </head>
  <body>
    <!-- BOOK 页头 -->



    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">Book Laravel</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
    @if(URL::current() == URL::route('index.html'))
        <li class="active">
    @else
        <li>
    @endif
        <a href="{{ URL('/index.html') }}">首页</a>
        </li> 

    @if(URL::current()  == URL::route('post.html'))
        <li class="active">
    @else
        <li>
    @endif
        <a href="{{ URL('/post.html') }}">提交</a>
        </li> 
          </ul>


          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">




@if(Session::get('username') != empty($admin_db))
    <a class="dropdown-toggle"  href="/admin" >登录</span></a>
@else
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">{{ Session::get('username') }} <span class="caret"></span></a>
@endif


              <ul class="dropdown-menu" aria-labelledby="themes">
              <li><a href="{{ URl('edit') }}">BOOK管理</a></li>
                <li><a href="{{ URl('out') }}">安全退出</a></li>

              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>


    <!-- BOOK 内容 -->

    @yield('content')

    <!-- BOOK 页脚 -->


    

  <div class="container ">
    <div class="row">
        <div class="col-lg-12">
         <hr>
         <p> Book Laravel By www.Kyomini.com </p>
        </div>
    </div>
 </div>
<script src="http://libs.useso.com/js/jquery/2.1.1-rc2/jquery.min.js"></script>
<!--
<script type="text/javascript" src="{{ asset('/pjax/js/jquery.pjax.js') }}"></script>
<script type="text/javascript" src="{{ asset('/pjax/js/nprogress.js') }}"></script>
<script>
    $(document).ready(function()
    {
        $(document).pjax('a', 'body');

        $(document).on('pjax:start', function() {
            NProgress.start();
        });
        $(document).on('pjax:end', function() {
            NProgress.done();
            //self.siteBootUp();
        });
    });
</script>


    -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>
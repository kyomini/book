@extends('app')


@section('content')

 <!-- BOOK 内容 -->




@include('pjax')

 <div id="banner">
 </div>
  <div class="container ">
    <div class="row">
      <div class="col-lg-12">
            <a href="{{ URL('/post.html') }}" class="btn btn-primary">我要留言</a>
      <hr>
      </div>

    <div class="col-lg-12">
      <table class="table table-striped">
          <thead>
            <tr>
              <th>时间</th>
              <th>留言标题</th>
              <th>撰写</th>
              <th>功能</th>
            </tr>
          </thead>
                <tbody>
                 @foreach ($content as $v)
                <tr>

 
                
                <td>{{ date('Y-m-d',$v->updated_at) }} </td>
                <td>{{ $v->title }}</td>
                <td>{{ $v->name }}</td>
                 <!--<td><a href="{{ URL('/content_'.$v->id.'.html') }}">查看此留言</a></td>-->
   
                 <td><a href="{{ URL('/content?id='.$v->id) }}">查看此留言</a></td>

                </tr>
              @endforeach  
                </tbody>
          </table> 

        
          <hr>
          
    <?php echo $content->render() ?>

     </div>
    </div> 
  </div>







@stop
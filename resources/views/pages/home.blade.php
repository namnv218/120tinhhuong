@extends('layouts.app')
@section('content')  
<div class="container">
    <div class="justify-content-center">
        <div class="row">
          <div class="col-xs-12" >
            <button id='play-icon'  title='SPACE' style="margin-top: 15%; position: absolute; z-index: 30301; align-items: center; cursor: pointer; left: 45%;" onclick='xxx();'><img src="http://localhost/laravel/120tinhhuong/public/images/play.png" alt="play" width="80" height="80" ></button>


              <video id="video"  width="100%" height="auto" >
                <source src="http://localhost/laravel/120tinhhuong/public/video/th1.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              
              <progress id='progress-bar' min='0' max='100' value='0'>0% played</progress>
              <div id="flag" style="margin-top: -77px; position: absolute; display: none;z-index:200;margin-left: 1.2%;margin-right: 1.2%;">
                <img src="http://localhost/laravel/120tinhhuong/public/images/flag.png" alt="Flag" width="20" height="20" style="float:left;">
              </div>
              <div  id="diem" style="margin-top: -48px; margin-left: 708px; position: absolute; display: none;z-index:100;">
                    <span class="diem d5" style="width: 18.9489px;height:10px;float:left;background:green;">&nbsp;</span>
                    <span class="diem d4" style="width: 18.9489px;height:10px;float:left;background:rgb(4, 211, 238);;">&nbsp;</span>
                    <span class="diem d3" style="width: 18.9489px;height:10px;float:left;background:rgb(245, 241, 10);">&nbsp;</span>
                    <span class="diem d2" style="width: 18.9489px;height:10px;float:left;background:rgb(216, 160, 6);">&nbsp;</span>
                    <span class="diem d1" style="width: 18.9489px;height:10px;float:left;background:rgb(247, 17, 9);">&nbsp;</span>
              </div>
          </div>
          <br>
        </div>

        <div class="row">
            <div class="col-xs-12" >
              <button id='btnSpace' class="col-5 btn btn-primary px-auto" title='SPACE' onclick='spaceClick();'>SPACE</button>
              <button id='current' title='current' >0.000</button>
            </div>
        </div>
    </div>

  <div class="row">
      @if(Auth::check())
          @if(!empty($user))
              @foreach($user as $u)
                  <div class="col-sm-1">                      
                      <p >{{$u->id}}</p> 
                  </div>
                  <div class="col-sm-3">                      
                      <a href="{{ route('getdetail', ['id' => $u->id]) }}"><p>{{$u->name}}</p></a>
                  </div>
                  <div class="col-sm-3">                      
                      <p >{{$u->email}}</p> 
                  </div>
                  <div class="col-sm-3">    
                      <a href="{{ route('getedit', ['id' => $u->id]) }}">Edit</a>
                  </div>
                  <div class="col-sm-2">    
                      <form role="form" action="{{ route('postuserdel', ['id' => $u->id]) }}" method="post">
                          @csrf
                          <button type="submit" class="btn btn-primary"><i class="fa fa-times"></i> Delete</button>
                      </form>   
                  </div>
              @endforeach

              {{ $user->links() }}

          @endif
      @endif
    </div> 

</div> 
@endsection
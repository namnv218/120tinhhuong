@extends('layouts.app')
@section('content')  
<div class="container"> 

    <div class="d-flex gap-5 justify-content-center">
      Test
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
</div> 
@endsection
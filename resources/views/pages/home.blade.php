@extends('layouts.app')
@section('content')  
<div class="container"> 

    <div class="d-flex gap-5 justify-content-center">
        <div class="list-group mx-0">
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
            <span>
              First checkbox hello
              <small class="d-block text-muted">With support text underneath to add more detail</small>
            </span>
          </label>
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="checkbox" value="">
            <span>
              Second checkbox
              <small class="d-block text-muted">Some other text goes here</small>
            </span>
          </label>
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="checkbox" value="">
            <span>
              Third checkbox
              <small class="d-block text-muted">And we end with another snippet of text</small>
            </span>
          </label>
        </div>
      

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
        <br><br><br>
        </div> <!-- #main-content --> 
    </div> <!-- #content --> 
</div> 
@endsection
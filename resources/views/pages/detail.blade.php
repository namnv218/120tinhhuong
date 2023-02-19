@extends('layouts.app')
@section('content')  
<div class="container"> 
    <div class="main-content"> 
        <div class="row">
            <div class="col-sm-12"><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Admin dashboard</a></div>
        </div>
        <div class="row">
        @if(Auth::check())
            @if(!empty($user))
                <div class="form-group mb-3">
                    <label for="">ID:</label>
                    <p>{{$user->id}}</p>
                </div>
                <div class="form-group mb-3">
                    <label for="">User Name:</label>
                    <p>{{$user->name}}</p>
                </div>
                <div class="form-group mb-3">
                    <label for="">User Email:</label>
                    <p>{{$user->email}}</p>
                </div>
                <div class="form-group mb-3">
                    <label for="">Updated at:</label>
                    <p>{{$user->updated_at}}</p>
                </div>
            </form>
            @endif
        @endif
        </div> <!-- #main-content --> 
    </div> <!-- #content --> 
</div> 
@endsection 
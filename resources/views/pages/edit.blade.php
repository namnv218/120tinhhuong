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
            <form action="{{ url('postuserupdate/'.$user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                <div class="form-group mb-3">
                    <label for="">User Name</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">User Email</label>
                    <input type="text" name="email" value="{{$user->email}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Update User</button>
                </div>
            </form>
            @endif
        @endif
        </div> <!-- #main-content --> 
    </div> <!-- #content --> 
</div> 
@endsection 
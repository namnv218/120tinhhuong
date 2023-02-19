@extends('layouts.app')
@section('content')  
<div class="container"> 
    <div class="main-content"> 
        <div class="row">
            <div class="col-sm-12"><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Admin dashboard</a></div>
        </div>
        <div class="row">
        @if(Auth::check())
            <div class="col-sm-3"></div>
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}
                        @endforeach
                    </div>
                @endif
                @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                @endif
            <form action="{{ url('postadduser') }}" method="POST">
                @csrf
                @method('POST')

                <div class="form-block mb-3">
                    <label for="">User Name*</label>
                    <input type="text" name="name" value="" required >
                </div>
                <div class="form-block mb-3">
                    <label for="">User Email*</label>
                    <input type="text" name="email" value="" required >
                </div>
                <div class="form-block mb-3">
                    <label for="phone">Password*</label>
                    <input type="password" name="password" required>
                </div>
                <div class="form-block mb-3"> 
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Default checkbox
                    </label> 
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Checked checkbox
                    </label> 
                </div>
                
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>
        @endif
        </div> <!-- #main-content --> 
    </div> <!-- #content --> 
</div> 
@endsection 
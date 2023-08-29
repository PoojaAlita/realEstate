@extends('layouts.master2')
@section('title','Login')
@section('content')
<div class="card-body p-4">
    <div class="p-3">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
        <form class="mt-4" method="POST" action="{{ route('signIn')}}" id="form_login">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="mb-3 row">
                <div class="col-sm-6">
                   {{--  <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="customControlInline">
                        <label class="form-check-label" for="customControlInline">Remember me</label>
                    {{-- </div> --}} 
                </div>
                <div class="col-sm-6 text-end">
                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                </div>
            </div>

            <div class="mt-2 mb-0 row">
                <div class="col-12 mt-4">
                    <a href="{{ route('password.request') }}"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection
@section('custome-script')
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/login_validation.js')}}"></script>
@endsection    

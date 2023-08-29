@extends('layouts.master2')
@section('title',"Forgot Password")
@section('content')

                <div class="card-body p-4">
                    <div class="p-3">
                        <div class="alert alert-success mt-5" role="alert">
                            Enter your Email and instructions will be sent to you!
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                       @endif
                        <form method="POST" class="mt-4 forgot_password" action="{{ route('password.email') }}">
                                @csrf
                            <div class="mb-3">
                                <label class="form-label" for="useremail">Email</label>
                                <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter email">
                            </div>
    
                            <div class="row  mb-0">
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="mt-5 text-center">
                    <p>Remember It ? <a href="{{route('login')}}" class="fw-medium text-primary"> Sign In here </a> </p>
                    {{-- <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p> --}}
                </div>

        
@endsection
@section('custome-script')
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/login_validation.js')}}"></script>
@endsection    


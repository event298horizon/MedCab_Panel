@extends('layouts.admin_layout')

@section('main')

<div class="login d-flex">
    <div class="image-part w-50">

    </div>
    <div class="form-part w-50 text-center d-flex flex-column justify-content-center">
        <div>
            <img src="{{asset('assets/images/login-ambu.png')}}" alt="">
        </div>
        <label for="" class="fs-title fw-bold d-block text-start">Lab Owner Login</label>
        <form action="{{ route('get_otp') }}" method="post">
            @csrf
            <div class="mb-3">
                <input type="number" class="form-control" name ="mobile" id="exampleInputEmail1" placeholder="Enter Your Number" aria-describedby="emailHelp">
                <input type="hidden" class="form-control form-control-lg" autocomplete="off"  name="auth_key" value="dsdsdsdsd" required/>
            </div>
           
            
            <button type="submit" class="btn btn-danger w-100 fw-bold">Login<span><img src="{{asset('assets/images/icons/right-arrow.svg')}}" alt=""></span></button>

            <center><label for="" class="register-label">Don't have an account?</label></center>
            <a href="{{route('register')}}" class="btn border-danger primary-clr w-100 fw-bold">Register<span><img src="{{asset('assets/images/icons/red-right-arrow.svg')}}" alt=""></span>
            </a>
        </form>
    </div>
</div>

@endsection
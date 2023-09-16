@extends('layouts.adminlayout')


@section('main')

<div class="login d-flex">
    <div class="image-part w-50">

    </div>
    <div class="form-part w-50 text-center d-flex flex-column justify-content-center">
        <div>
            <img src="{{asset('assets/images/login-ambu.png')}}" alt="">
        </div>
        <label for="" class="fs-title fw-bold d-block text-start">Login</label>
        <form>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="User Name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check d-flex justify-content-between">
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <label for="" class="primary-clr">Forgot Password?</label>
            </div>
            <button type="submit" class="btn btn-danger w-100 fw-bold">Login<span><img src="{{asset('assets/images/icons/right-arrow.svg')}}" alt=""></span></button>

            <center><label for="" class="register-label">Don't have an account?</label></center>
            <button type="submit" class="btn border-danger primary-clr w-100 fw-bold">Register<span><img src="{{asset('assets/images/icons/red-right-arrow.svg')}}" alt=""></span></button>
        </form>
    </div>
</div>

@endsection
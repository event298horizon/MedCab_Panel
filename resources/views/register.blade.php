@extends('layouts.adminlayout')


@section('main')

<div class="login d-flex">
    <div class="image-part w-50">

    </div>
    <div class="form-part w-50 text-center d-flex flex-column justify-content-center">
        <div>
            <img src="{{asset('assets/images/login-ambu.png')}}" alt="">
        </div>
        <label for="" class="fs-title fw-bold d-block text-start">Register</label>
        <form>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email ID" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Phone Number" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 d-flex align-items-center border rounded">
                <input type="password" class="form-control border-0" placeholder="Password" id="exampleInputPassword1">
                <img src="{{asset('assets/images/icons/eye.png')}}" alt="" class="">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Confirm Password" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-danger w-100 fw-bold">Register<span><img src="{{asset('assets/images/icons/right-arrow.svg')}}" alt=""></span></button>

            <center><label for="" class="register-label">Already have an account?</label></center>

                <a href="{{route('login')}}" class="btn border-danger primary-clr w-100 fw-bold">Login<span><img src="{{asset('assets/images/icons/red-right-arrow.svg')}}" alt=""></span></a>

            </form>
    </div>
</div>

@endsection
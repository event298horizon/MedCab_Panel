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
        <form action="{{route('login.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="number" class="form-control" 	placeholder="Enter Your OTP No." name="lab_owner_email" maxlength="4"  placeholder="Enter Otp  Number......">
                <input type="hidden" class="form-control" name="lab_owner_id" value="{{$lab_owner_id}}" maxlength="4" >
            </div>
           
            
            <button type="submit" class="btn btn-danger w-100 fw-bold">Login<span><img src="{{asset('assets/images/icons/right-arrow.svg')}}" alt=""></span></button>
            </form>
            <form action="{{route('resend_otp')}}" method="post">
            @csrf
            <input type="hidden" class="form-control form-control-lg" placeholder="Enter Your Otp No. " autocomplete="off"  name="lab_owner_id" value="{{$lab_owner_id}}" required />
            <input type="hidden" class="form-control form-control-lg" autocomplete="off"  name="lab_owner_mobile" value="{{$lab_owner_mobile}}" required/>
            <button class="btn border-danger primary-clr w-100 fw-bold">Resend Otp<span><img src="{{asset('assets/images/icons/red-right-arrow.svg')}}" alt=""></span>
            </button>
            </form>
    </div>
</div>

@endsection
@extends('layouts.adminlayout')

@section('main')

<section class="d-flex">

    @include('include.sidebar')

    <section class="section pathology recommend hospital-details">
        <div class="left-section w-100">
            <div class="search-bar recommend-heading d-flex">

                <p class="fs-title text-clr fw-bold">About Hospital</p>
                <div class="btns">
                    <button class="btn btn-danger">Add Hospital</button>
                </div>
            </div>

            <div class="main-content d-flex flex-row fs-primary">
                <div class="test-card d-flex flex-column border bg-white">
                    <div class="card-header w-100 d-flex border-0 bg-white">
                        <div class="card-img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <div class="card-btns fs-primary">
                            <div class="btn border primary-clr fs-secondary">Copy Details</div>
                            <div class="btn border primary-clr fs-secondary">Share</div>
                            <div class="btn border primary-clr fs-secondary">Edit Details</div>
                        </div>
                    </div>
                    <div class="card-content d-flex flex-column bg-white border-0">
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Hospital Name</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Address</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">PIN Code</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Contact Number</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Alternate Contact Number</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item last-item">
                            <p class="text-clr-light fs-secondary">Links</p>
                            <div class="d-flex flex-column gap-2">
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex flex-column border bg-white">
                    <div class="card-header w-100 d-flex border-0 bg-white">
                        <div class="card-img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <div class="card-btns fs-primary">
                            <div class="btn border primary-clr fs-secondary">Copy Details</div>
                            <div class="btn border primary-clr fs-secondary">Share</div>
                            <div class="btn border primary-clr fs-secondary">Edit Details</div>
                        </div>
                    </div>
                    <div class="card-content d-flex flex-column bg-white border-0">
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Hospital Name</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Address</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">PIN Code</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Contact Number</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Alternate Contact Number</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item last-item">
                            <p class="text-clr-light fs-secondary">Links</p>
                            <div class="d-flex flex-column gap-2">
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex flex-column border bg-white">
                    <div class="card-header w-100 d-flex border-0 bg-white">
                        <div class="card-img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <div class="card-btns fs-primary">
                            <div class="btn border primary-clr fs-secondary">Copy Details</div>
                            <div class="btn border primary-clr fs-secondary">Share</div>
                            <div class="btn border primary-clr fs-secondary">Edit Details</div>
                        </div>
                    </div>
                    <div class="card-content d-flex flex-column bg-white border-0">
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Hospital Name</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Address</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">PIN Code</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Contact Number</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Alternate Contact Number</p>
                            <p class="text-clr fs-secondary">Sahara Hospital</p>
                        </div>
                        <div class="content-item last-item">
                            <p class="text-clr-light fs-secondary">Links</p>
                            <div class="d-flex flex-column gap-2">
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="web-link d-flex">
                                    <img src="{{asset('assets/images/icons/facebook.png')}}" alt="">
                                    <p class="text-clr fs-secondary">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</section>

@endsection
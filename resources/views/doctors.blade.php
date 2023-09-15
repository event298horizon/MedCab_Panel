@extends('layouts.adminlayout')


<!-- doctors section start -->
@section('main')

<section class="d-flex">

    @include('include.sidebar')

    <section class="section pathology doctors bg-light">
        <div class="left-section">
            
            <!-- search bar and button -->
            <div class="search-bar d-flex">
                <div class="search d-flex align-items-center bg-white">
                    <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search" class="me-2 ms-2">
                    <input class="" type="text" placeholder="Search test, packages here">
                </div>
                <div class="btns">
                    <button class="btn btn-danger"><span class="plus">+</span> Add Doctor</button>
                </div>
            </div>
            <!-- search bar and button end -->

            <div class="main-content">
                <!-- doctor cards -->
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex">
                        <div class="test-details">
                            <p class="fs-title">Doctor Name</p>
                            <p class="fs-primary text-clr-light">Specialist Area</p>
                            <p class="test-desc fs-primary">Monday to Saturday available</p>
                            <p class="fs-primary">09:00 AM - 01:00 PM, 05:00 PM - 08:00 PM</p>
                        </div>

                        <div class="test-btns border-start">
                            <button class="btn border text-clr-light">More</button>
                            <button class="btn border text-clr-light">Edit Details</button>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex">
                        <div class="test-details">
                            <p class="fs-title">Doctor Name</p>
                            <p class="fs-primary text-clr-light">Specialist Area</p>
                            <p class="test-desc fs-primary">Monday to Saturday available</p>
                            <p class="fs-primary">09:00 AM - 01:00 PM, 05:00 PM - 08:00 PM</p>
                        </div>

                        <div class="test-btns border-start">
                            <button class="btn border text-clr-light">More</button>
                            <button class="btn border text-clr-light">Edit Details</button>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex">
                        <div class="test-details">
                            <p class="fs-title">Doctor Name</p>
                            <p class="fs-primary text-clr-light">Specialist Area</p>
                            <p class="test-desc fs-primary">Monday to Saturday available</p>
                            <p class="fs-primary">09:00 AM - 01:00 PM, 05:00 PM - 08:00 PM</p>
                        </div>

                        <div class="test-btns border-start">
                            <button class="btn border text-clr-light">More</button>
                            <button class="btn border text-clr-light">Edit Details</button>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex">
                        <div class="test-details">
                            <p class="fs-title">Doctor Name</p>
                            <p class="fs-primary text-clr-light">Specialist Area</p>
                            <p class="test-desc fs-primary">Monday to Saturday available</p>
                            <p class="fs-primary">09:00 AM - 01:00 PM, 05:00 PM - 08:00 PM</p>
                        </div>

                        <div class="test-btns border-start">
                            <button class="btn border text-clr-light">More</button>
                            <button class="btn border text-clr-light">Edit Details</button>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex">
                        <div class="test-details">
                            <p class="fs-title">Doctor Name</p>
                            <p class="fs-primary text-clr-light">Specialist Area</p>
                            <p class="test-desc fs-primary">Monday to Saturday available</p>
                            <p class="fs-primary">09:00 AM - 01:00 PM, 05:00 PM - 08:00 PM</p>
                        </div>

                        <div class="test-btns border-start">
                            <button class="btn border text-clr-light">More</button>
                            <button class="btn border text-clr-light">Edit Details</button>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex">
                        <div class="test-details">
                            <p class="fs-title">Doctor Name</p>
                            <p class="fs-primary text-clr-light">Specialist Area</p>
                            <p class="test-desc fs-primary">Monday to Saturday available</p>
                            <p class="fs-primary">09:00 AM - 01:00 PM, 05:00 PM - 08:00 PM</p>
                        </div>

                        <div class="test-btns border-start">
                            <button class="btn border text-clr-light">More</button>
                            <button class="btn border text-clr-light">Edit Details</button>
                        </div>
                    </div>
                </div>
                <!-- doctor cards end -->
            </div>
        </div>
    </section>
</section>

@endsection

<!-- doctors section end -->
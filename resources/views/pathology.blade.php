@extends('layouts.adminlayout')


@section('main')
<!-- pathology start -->

<section class="d-flex">

    @include('include.sidebar')

    <section class="section pathology">
        <div class="left-section bg-light">
            <div class="search-bar d-flex">
                <div class="search d-flex align-items-center bg-white">
                    <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search" class="me-2 ms-2">
                    <input class="" type="text" placeholder="Search test, packages here">
                </div>
                <div class="btns">
                    <button class="btn btn-dark">Drafts (4)</button>
                    <button class="btn btn-danger"><span class="plus">+</span> Test Package</button>
                </div>
            </div>

            <div class="filter border bg-white">
                <button class="btn">Show:</button>
                <button class="btn">All</button>
                <button class="btn">Individual Test</button>
                <button class="btn">Test Packages</button>
                <button class="btn">Active</button>
                <button class="btn">Unactive</button>
            </div>

            <div class="main-content">
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex flex-column">
                        <div class="test-details">
                            <p class="fs-title">Test Name</p>
                            <div>
                                <p class="test-desc fs-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, delectus? Quae exercitationem</p>
                                <a href="" class="primary-clr text-decoration-none fs-primary">Read More...</a>
                            </div>
                        </div>

                        <div class="test-btns">
                            <button class="btn btn-success">Active</button>
                            <button class="btn border">More</button>
                            <button class="btn border">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex flex-column">
                        <div class="test-details">
                            <p class="fs-title">Test Name</p>
                            <div>
                                <p class="test-desc fs-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, delectus? Quae exercitationem</p>
                                <a href="" class="primary-clr text-decoration-none fs-primary">Read More...</a>
                            </div>
                        </div>

                        <div class="test-btns">
                            <button class="btn btn-success">Active</button>
                            <button class="btn border">More</button>
                            <button class="btn border">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex flex-column">
                        <div class="test-details">
                            <p class="fs-title">Test Name</p>
                            <div>
                                <p class="test-desc fs-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, delectus? Quae exercitationem</p>
                                <a href="" class="primary-clr text-decoration-none fs-primary">Read More...</a>
                            </div>
                        </div>

                        <div class="test-btns">
                            <button class="btn btn-success">Active</button>
                            <button class="btn border">More</button>
                            <button class="btn border">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex flex-column">
                        <div class="test-details">
                            <p class="fs-title">Test Name</p>
                            <div>
                                <p class="test-desc fs-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, delectus? Quae exercitationem</p>
                                <a href="" class="primary-clr text-decoration-none fs-primary">Read More...</a>
                            </div>
                        </div>

                        <div class="test-btns">
                            <button class="btn btn-success">Active</button>
                            <button class="btn border">More</button>
                            <button class="btn border">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex flex-column">
                        <div class="test-details">
                            <p class="fs-title">Test Name</p>
                            <div>
                                <p class="test-desc fs-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, delectus? Quae exercitationem</p>
                                <a href="" class="primary-clr text-decoration-none fs-primary">Read More...</a>
                            </div>
                        </div>

                        <div class="test-btns">
                            <button class="btn btn-success">Active</button>
                            <button class="btn border">More</button>
                            <button class="btn border">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-center border bg-white">
                    <div class="image">
                        <img src="{{asset('assets/images/doctor.png')}}" alt="">
                    </div>
                    <div class="text d-flex flex-column">
                        <div class="test-details">
                            <p class="fs-title">Test Name</p>
                            <div>
                                <p class="test-desc fs-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, delectus? Quae exercitationem</p>
                                <a href="" class="primary-clr text-decoration-none fs-primary">Read More...</a>
                            </div>
                        </div>

                        <div class="test-btns">
                            <button class="btn btn-success">Active</button>
                            <button class="btn border">More</button>
                            <button class="btn border">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-section">
            <div class="title">
                <p class="primary-heading fw-bold text-clr">Bookings</p>
            </div>
            <div class="test-type-cards">
                <div class="test-type-card border fs-primary">
                    <div class="time">
                        <p class="text-clr-light">02:45 PM</p>
                    </div>
                    <div class="details text-clr fs-primary">
                        <p class="test-label">Booking Test Type</p>
                        <p>Customer: Customer Name</p>
                        <p>Address: Customer</p>
                        <p>Contact Number: Customer</p>
                    </div>
                    <div class="btns d-flex gap-3">
                        <button class="btn border text-clr-light">Directions</button>
                        <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                    </div>
                </div>
                <div class="test-type-card border fs-primary">
                    <div class="time">
                        <p class="text-clr-light">02:45 PM</p>
                    </div>
                    <div class="details text-clr fs-primary">
                        <p class="test-label">Booking Test Type</p>
                        <p>Customer: Customer Name</p>
                        <p>Address: Customer</p>
                        <p>Contact Number: Customer</p>
                    </div>
                    <div class="btns d-flex gap-3">
                        <button class="btn border text-clr-light">Directions</button>
                        <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                    </div>
                </div>
                <div class="test-type-card border fs-primary">
                    <div class="time">
                        <p class="text-clr-light">02:45 PM</p>
                    </div>
                    <div class="details text-clr fs-primary">
                        <p class="test-label">Booking Test Type</p>
                        <p>Customer: Customer Name</p>
                        <p>Address: Customer</p>
                        <p>Contact Number: Customer</p>
                    </div>
                    <div class="btns d-flex gap-3">
                        <button class="btn border text-clr-light">Directions</button>
                        <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                    </div>
                </div>
                <div class="test-type-card border fs-primary">
                    <div class="time">
                        <p class="text-clr-light">02:45 PM</p>
                    </div>
                    <div class="details text-clr fs-primary">
                        <p class="test-label">Booking Test Type</p>
                        <p>Customer: Customer Name</p>
                        <p>Address: Customer</p>
                        <p>Contact Number: Customer</p>
                    </div>
                    <div class="btns d-flex gap-3">
                        <button class="btn border text-clr-light">Directions</button>
                        <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                    </div>
                </div>
                <div class="test-type-card border fs-primary">
                    <div class="time">
                        <p class="text-clr-light">02:45 PM</p>
                    </div>
                    <div class="details text-clr fs-primary">
                        <p class="test-label">Booking Test Type</p>
                        <p>Customer: Customer Name</p>
                        <p>Address: Customer</p>
                        <p>Contact Number: Customer</p>
                    </div>
                    <div class="btns d-flex gap-3">
                        <button class="btn border text-clr-light">Directions</button>
                        <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                    </div>
                </div>
                <div class="test-type-card border fs-primary">
                    <div class="time">
                        <p class="text-clr-light">02:45 PM</p>
                    </div>
                    <div class="details text-clr fs-primary">
                        <p class="test-label">Booking Test Type</p>
                        <p>Customer: Customer Name</p>
                        <p>Address: Customer</p>
                        <p>Contact Number: Customer</p>
                    </div>
                    <div class="btns d-flex gap-3">
                        <button class="btn border text-clr-light">Directions</button>
                        <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                    </div>
                </div>
            </div>

        </div>
    </section>
</section>

<!-- pathology end -->
@endsection

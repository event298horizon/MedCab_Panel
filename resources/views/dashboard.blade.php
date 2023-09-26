@extends('layouts.adminlayout')

@section('main')
<div class="d-flex">
    @include('include.sidebar')
    <section class="section pathology doctors facilities main-dashboard bg-light px-0 text-clr">

        <!-- left section -->
        <div class="left-dash d-flex flex-column gap-3 ">

            <!-- top -->
            <div class="sec top-left-sec left left-section px-0 bg-white w-100 h-50">

                <!-- search bar and button -->
                <div class="search-bar d-flex flex-column gap-3">
                    <label for="" class="fs-title fw-bold">Active Facilities Last Updated</label>

                </div>
                <!-- search bar and button end -->

                <div class="main-content h-100">
                    <!-- availability cards -->
                    <div class="test-card d-flex flex-column border bg-white">
                        <div class="upper-section d-flex">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                            <div class="d-flex justify-content-between w-100">
                                <div class="d-flex flex-column">

                                    <p class="fs-primary">ISU bed with ventilator</p>
                                    <p class="text-clr-light fs-primary">Updated 16 Sep, 12:00 PM</p>
                                </div>
                                <div class="value-container border rounded">
                                    <button class="btn value-button border-end rounded-0 rounded-start" id="decrement"><img src="{{asset('assets/images/icons/minus.png')}}" alt=""></button>
                                    <input type="number" id="value" value="0" min="0" class="border-0">
                                    <button class="btn value-button border-start rounded-0 rounded-end" id="increment"><img src="{{asset('assets/images/icons/plus.png')}}" alt=""></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="test-card d-flex flex-column border bg-white">
                        <div class="upper-section d-flex">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                            <div class="d-flex justify-content-between w-100">
                                <div class="d-flex flex-column">

                                    <p class="fs-primary">ISU bed with ventilator</p>
                                    <p class="text-clr-light fs-primary">Updated 16 Sep, 12:00 PM</p>
                                </div>
                                <div class="value-container border rounded">
                                    <button class="btn value-button border-end rounded-0 rounded-start" id="decrement"><img src="{{asset('assets/images/icons/minus.png')}}" alt=""></button>
                                    <input type="number" id="value" value="0" min="0" class="border-0">
                                    <button class="btn value-button border-start rounded-0 rounded-end" id="increment"><img src="{{asset('assets/images/icons/plus.png')}}" alt=""></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="test-card d-flex flex-column border bg-white">
                        <div class="upper-section d-flex">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                            <div class="d-flex justify-content-between w-100">
                                <div class="d-flex flex-column">

                                    <p class="fs-primary">ISU bed with ventilator</p>
                                    <p class="text-clr-light fs-primary">Updated 16 Sep, 12:00 PM</p>
                                </div>
                                <div class="value-container border rounded">
                                    <button class="btn value-button border-end rounded-0 rounded-start" id="decrement"><img src="{{asset('assets/images/icons/minus.png')}}" alt=""></button>
                                    <input type="number" id="value" value="0" min="0" class="border-0">
                                    <button class="btn value-button border-start rounded-0 rounded-end" id="increment"><img src="{{asset('assets/images/icons/plus.png')}}" alt=""></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="test-card d-flex flex-column border bg-white">
                        <div class="upper-section d-flex">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                            <div class="d-flex justify-content-between w-100">
                                <div class="d-flex flex-column">

                                    <p class="fs-primary">ISU bed with ventilator</p>
                                    <p class="text-clr-light fs-primary">Updated 16 Sep, 12:00 PM</p>
                                </div>
                                <div class="value-container border rounded">
                                    <button class="btn value-button border-end rounded-0 rounded-start" id="decrement"><img src="{{asset('assets/images/icons/minus.png')}}" alt=""></button>
                                    <input type="number" id="value" value="0" min="0" class="border-0">
                                    <button class="btn value-button border-start rounded-0 rounded-end" id="increment"><img src="{{asset('assets/images/icons/plus.png')}}" alt=""></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="test-card d-flex flex-column border bg-white">
                        <div class="upper-section d-flex">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                            <div class="d-flex justify-content-between w-100">
                                <div class="d-flex flex-column">

                                    <p class="fs-primary">ISU bed with ventilator</p>
                                    <p class="text-clr-light fs-primary">Updated 16 Sep, 12:00 PM</p>
                                </div>
                                <div class="value-container border rounded">
                                    <button class="btn value-button border-end rounded-0 rounded-start" id="decrement"><img src="{{asset('assets/images/icons/minus.png')}}" alt=""></button>
                                    <input type="number" id="value" value="0" min="0" class="border-0">
                                    <button class="btn value-button border-start rounded-0 rounded-end" id="increment"><img src="{{asset('assets/images/icons/plus.png')}}" alt=""></button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- availability cards end -->
                </div>
            </div>
            <!-- top end -->
            <!-- bottom -->
            <div class="sec bottom-left-sec right-section bg-white w-100 h-50">
                <div class="title">
                    <p class="primary-heading fw-bold text-clr">Pathology Test Bookings</p>
                </div>
                <div class="test-type-cards">
                    <div class="test-type-card border fs-primary d-flex flex-row justify-content-between">
                        <div class="details text-clr fs-primary d-flex flex-column gap-2">
                            <p class="test-label">Booking Test Type</p>
                            <div class="d-flex gap-3">
                                <div class="d-flex flex-column gap-1">
                                    <p>Customer:</p>
                                    <p>Address:</p>
                                    <p>Contact Number:</p>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <p>Customer Name</p>
                                    <p>Customer Address</p>
                                    <p>Customer Phone</p>
                                </div>
                            </div>
                        </div>
                        <div class="btns d-flex flex-column justify-content-between align-items-end">
                            <div class="d-flex gap-3">
                                <button class="btn border text-clr-light">Directions</button>
                                <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                            </div>
                            <div class="time">
                                <p class="text-clr-light">02:45 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="test-type-card border fs-primary d-flex flex-row justify-content-between">
                        <div class="details text-clr fs-primary d-flex flex-column gap-2">
                            <p class="test-label">Booking Test Type</p>
                            <div class="d-flex gap-3">
                                <div class="d-flex flex-column gap-1">
                                    <p>Customer:</p>
                                    <p>Address:</p>
                                    <p>Contact Number:</p>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <p>Customer Name</p>
                                    <p>Customer Address</p>
                                    <p>Customer Phone</p>
                                </div>
                            </div>
                        </div>
                        <div class="btns d-flex flex-column justify-content-between align-items-end">
                            <div class="d-flex gap-3">
                                <button class="btn border text-clr-light">Directions</button>
                                <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                            </div>
                            <div class="time">
                                <p class="text-clr-light">02:45 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="test-type-card border fs-primary d-flex flex-row justify-content-between">
                        <div class="details text-clr fs-primary d-flex flex-column gap-2">
                            <p class="test-label">Booking Test Type</p>
                            <div class="d-flex gap-3">
                                <div class="d-flex flex-column gap-1">
                                    <p>Customer:</p>
                                    <p>Address:</p>
                                    <p>Contact Number:</p>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <p>Customer Name</p>
                                    <p>Customer Address</p>
                                    <p>Customer Phone</p>
                                </div>
                            </div>
                        </div>
                        <div class="btns d-flex flex-column justify-content-between align-items-end">
                            <div class="d-flex gap-3">
                                <button class="btn border text-clr-light">Directions</button>
                                <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                            </div>
                            <div class="time">
                                <p class="text-clr-light">02:45 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="test-type-card border fs-primary d-flex flex-row justify-content-between">
                        <div class="details text-clr fs-primary d-flex flex-column gap-2">
                            <p class="test-label">Booking Test Type</p>
                            <div class="d-flex gap-3">
                                <div class="d-flex flex-column gap-1">
                                    <p>Customer:</p>
                                    <p>Address:</p>
                                    <p>Contact Number:</p>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <p>Customer Name</p>
                                    <p>Customer Address</p>
                                    <p>Customer Phone</p>
                                </div>
                            </div>
                        </div>
                        <div class="btns d-flex flex-column justify-content-between align-items-end">
                            <div class="d-flex gap-3">
                                <button class="btn border text-clr-light">Directions</button>
                                <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                            </div>
                            <div class="time">
                                <p class="text-clr-light">02:45 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bottom end -->
        </div>
        <!-- right section -->
        <div class="right-dash">
            <div class="sec bottom-left-sec right-section w-100 h-100 px-0 py-0 gap-0">
                <div class="title bg-white px-3 py-3">
                    <div class="search-bar d-flex flex-column gap-3">
                        <div class="d-flex justify-content-between">

                            <p class="primary-heading fw-bold text-clr">Booking Requests <span class="text-clr-light">(31 Ongoing)</span></p>
                            <a href="" class="text-decoration-none primary-clr">View All</a>
                        </div>
                        <div class="search d-flex align-items-center py-2 px-2 rounded-pill gap-2 w-100">
                            <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search" class="">
                            <input class="" type="text" placeholder="Search here">
                        </div>

                    </div>
                </div>
                <div class="test-type-cards px-3 py-3">
                    <div class="test-type-card border fs-primary bg-white">
                        <div class="d-flex justify-content-between py-2 border-bottom w-100">
                            <p>ID: 1268211234</p>
                            <p>Abhishek Kapoor</p>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <p class="text-clr-light">Tests:</p>
                            <p>Test Name, Test Name, Test Name</p>
                            <p class="text-clr-light">Location:</p>
                            <p>Dadabari, Near Gurudwara, Punjab</p>
                        </div>
                        <div class="btns d-flex flex-column justify-content-between">
                            <div class="d-flex justify-content-between gap-3">
                                <div class="d-flex gap-3">
                                    <button class="btn border primary-clr px-4">Accept</button>
                                    <button class="btn border text-clr-light px-4">Reject </button>
                                </div>
                                <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                            </div>
                        </div>
                    </div>
                    <div class="test-type-card border fs-primary bg-white">
                        <div class="d-flex justify-content-between py-2 border-bottom w-100">
                            <p>ID: 1268211234</p>
                            <p>Abhishek Kapoor</p>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <p class="text-clr-light">Tests:</p>
                            <p>Test Name, Test Name, Test Name</p>
                            <p class="text-clr-light">Location:</p>
                            <p>Dadabari, Near Gurudwara, Punjab</p>
                        </div>
                        <div class="btns d-flex flex-column justify-content-between">
                            <div class="d-flex justify-content-between gap-3">
                                <div class="d-flex gap-3">
                                    <button class="btn border primary-clr px-4">Accept</button>
                                    <button class="btn border text-clr-light px-4">Reject </button>
                                </div>
                                <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                            </div>
                        </div>
                    </div>
                    <div class="test-type-card border fs-primary bg-white">
                        <div class="d-flex justify-content-between py-2 border-bottom w-100">
                            <p>ID: 1268211234</p>
                            <p>Abhishek Kapoor</p>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <p class="text-clr-light">Tests:</p>
                            <p>Test Name, Test Name, Test Name</p>
                            <p class="text-clr-light">Location:</p>
                            <p>Dadabari, Near Gurudwara, Punjab</p>
                        </div>
                        <div class="btns d-flex flex-column justify-content-between">
                            <div class="d-flex justify-content-between gap-3">
                                <div class="d-flex gap-3">
                                    <button class="btn border primary-clr px-4">Accept</button>
                                    <button class="btn border text-clr-light px-4">Reject </button>
                                </div>
                                <button class="rounded-circle border border-none"><img src="{{asset('assets/images/icons/call.png')}}" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection
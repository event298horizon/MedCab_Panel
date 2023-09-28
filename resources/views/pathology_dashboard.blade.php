@extends('layouts.adminlayout')


<!-- doctors section start -->
@section('main')

<section class="d-flex">

    <!-- Sidebar Pathology -->
    @include('include.sidebar_pathology')
    <!-- Sidebar Pathology -->

    <section class="section pathology doctors facilities main-dashboard path-dashboard bg-light px-0 text-clr">
        <!-- left section -->
        <div class="left-dash px-3 py-3 d-flex flex-column gap-3">
            <div class="top-section">
                @include('include.booking_charts')
            </div>
            <div class="bottom-section bg-white px-3 py-3 d-flex flex-column gap-3">
                <div class="search-bar d-flex align-items-center gap-3 fs-secondary">
                    <div class="d-flex justify-content-between">

                        <p class="primary-heading fw-bold text-clr">ONGOING BOOKINGS <span class="text-clr-light">(31 Ongoing)</span></p>

                    </div>
                    <div class="search d-flex align-items-center py-1 px-2 rounded-pill gap-2">
                        <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search" class="">
                        <input class="" type="text" placeholder="Search here">
                    </div>

                </div>
                <div class="bookings_table h-100">
                    <table class="w-100">
                        <tr class="text-clr-light border-bottom">
                            <td>BOOKING ID</td>
                            <td>PATIENT NAME</td>
                            <td>SAMPLE DATE & TIME</td>
                            <td>PAYMENT</td>
                            <td>TEST STATUS</td>
                        </tr>
                        <tr>
                            <td class=" ">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1211515615
                                    </label>
                                </div>
                            </td>
                            <td>Shubham Soni<br>+91 9845151551</td>
                            <td>24 Mar, 23<br>(01:35 PM - 02:35 PM)</td>
                            <td>₹4000<br>Full Payment Done</td>
                            <td>Last: Sample Collected<br>
                                <select class="form-select rounded-pill py-0 shadow-none" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">E-Report Pending</option>
                                    <option value="2">Test Pending</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=" ">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1211515615
                                    </label>
                                </div>
                            </td>
                            <td>Shubham Soni<br>+91 9845151551</td>
                            <td>24 Mar, 23<br>(01:35 PM - 02:35 PM)</td>
                            <td>₹4000<br>Full Payment Done</td>
                            <td>Last: Sample Collected<br>
                                <select class="form-select rounded-pill py-0 shadow-none" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">E-Report Pending</option>
                                    <option value="2">Test Pending</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=" ">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1211515615
                                    </label>
                                </div>
                            </td>
                            <td>Shubham Soni<br>+91 9845151551</td>
                            <td>24 Mar, 23<br>(01:35 PM - 02:35 PM)</td>
                            <td>₹4000<br>Full Payment Done</td>
                            <td>Last: Sample Collected<br>
                                <select class="form-select rounded-pill py-0 shadow-none" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">E-Report Pending</option>
                                    <option value="2">Test Pending</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=" ">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1211515615
                                    </label>
                                </div>
                            </td>
                            <td>Shubham Soni<br>+91 9845151551</td>
                            <td>24 Mar, 23<br>(01:35 PM - 02:35 PM)</td>
                            <td>₹4000<br>Full Payment Done</td>
                            <td>Last: Sample Collected<br>
                                <select class="form-select rounded-pill py-0 shadow-none" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">E-Report Pending</option>
                                    <option value="2">Test Pending</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=" ">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1211515615
                                    </label>
                                </div>
                            </td>
                            <td>Shubham Soni<br>+91 9845151551</td>
                            <td>24 Mar, 23<br>(01:35 PM - 02:35 PM)</td>
                            <td>₹4000<br>Full Payment Done</td>
                            <td>Last: Sample Collected<br>
                                <select class="form-select rounded-pill py-0 shadow-none" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">E-Report Pending</option>
                                    <option value="2">Test Pending</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=" ">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1211515615
                                    </label>
                                </div>
                            </td>
                            <td>Shubham Soni<br>+91 9845151551</td>
                            <td>24 Mar, 23<br>(01:35 PM - 02:35 PM)</td>
                            <td>₹4000<br>Full Payment Done</td>
                            <td>Last: Sample Collected<br>
                                <select class="form-select rounded-pill py-0 shadow-none" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">E-Report Pending</option>
                                    <option value="2">Test Pending</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=" ">
                                <div class="form-check">
                                    <input class="form-check-input rounded-circle shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        1211515615
                                    </label>
                                </div>
                            </td>
                            <td>Shubham Soni<br>+91 9845151551</td>
                            <td>24 Mar, 23<br>(01:35 PM - 02:35 PM)</td>
                            <td>₹4000<br>Full Payment Done</td>
                            <td>Last: Sample Collected<br>
                                <select class="form-select rounded-pill py-0 shadow-none" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">E-Report Pending</option>
                                    <option value="2">Test Pending</option>
                                </select>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>
        <!-- left section end -->

        <!-- right section -->
        <div class="right-dash">
            <div class="sec bottom-left-sec right-section w-100 h-100 px-0 py-0 gap-0 border-start">
                <div class="title bg-white px-3 py-3 border-bottom">
                    <div class="search-bar d-flex flex-column gap-3">
                        <div class="req-status d-flex justify-content-between">

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
                                    <button class="btn border primary-clr px-4 shadow-none">Accept</button>
                                    <button class="btn border text-clr-light px-4 shadow-none">Reject </button>
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
        <!-- right section end -->
    </section>
</section>

@endsection

<!-- doctors section end -->
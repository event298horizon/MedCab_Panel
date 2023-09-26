@extends('layouts.adminlayout')


@section('main')
<!-- pathology start -->

<section class="d-flex">

    @include('include.sidebar')

    <section class="section pathology">

        <!-- add test package pop-up form -->
        <div class="pop_up_form text-clr bg-white border" id="add_test_package">
            <div class="d-flex align-items-center justify-content-between fs-title">
                <p class="fw-bold">New Test Package</p>
                <i id="" class="crossBtn fa-solid fa-xmark"></i>
            </div>
            <form class="fs-secondary">
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Test Package Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here">
                </div>
                <div class="addTest-cards">
                    <div class="addTest-card d-flex flex-column border">
                        <label for="">Add Test 1</label>
                        <select class="form-select fs-secondary text-clr-light" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
                    </div>
                    <div class="addTest-card d-flex flex-column border">
                        <label for="">Add Test 2</label>
                        <select class="form-select fs-secondary text-clr-light" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
                    </div>
                </div>

                <div class="btns">
                    <button class="btn border border-danger text-danger"><span class="plus">+</span> Test</button>
                </div>

                <div class="doneBtn">
                    <button type="submit" class="btn btn-danger w-100">Done</button>
                </div>
            </form>
        </div>
        <!-- add test package pop-up form end -->

        <!-- edit test details pop-up form -->
        <div class="pop_up_form text-clr bg-white border" id="edit_test_details">
            <div class="d-flex align-items-center justify-content-between fs-title">
                <p class="fw-bold">Edit Details</p>
                <i id="" class="crossBtn fa-solid fa-xmark"></i>
            </div>
            <form class="fs-secondary">
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Test Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here">
                </div>
                <div class="addTest-cards">
                    <div class="addTest-card d-flex flex-column border">
                        <label for="">Add Description</label>
                        <textarea class="form-control fs-secondary" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                    </div>
                </div>

                <div class="doneBtn">
                    <button type="submit" class="btn btn-danger w-100">Done</button>
                </div>
            </form>
        </div>
        <!-- edit test details pop-up form end -->

        <!-- drafts pop-up form -->
        <div class="pop_up_form text-clr bg-white border" id="drafts">
            <div class="d-flex align-items-center justify-content-between fs-title">
                <p class="fw-bold">Drafts</p>
                <i id="" class="crossBtn fa-solid fa-xmark"></i>
            </div>
            <form class="fs-secondary d-flex flex-column justify-content-end">
                

                <div class="doneBtn">
                    <button type="submit" class="btn btn-danger w-100">Done</button>
                </div>
            </form>
        </div>
        <!-- drafts pop-up form end -->

        <div class="left-section bg-light">
            <div class="search-bar d-flex">
                <div class="search d-flex align-items-center bg-white">
                    <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search" class="me-2 ms-2">
                    <input class="" type="text" placeholder="Search test, packages here">
                </div>
                <div class="btns">
                    <button onclick="drafts()" class="btn btn-dark">Drafts (4)</button>
                    <button onclick="addTestPackage()" class="btn btn-danger"><span class="plus">+</span> Test Package</button>
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
                            <button onclick="editTestDetails()" class="btn border">Edit</button>
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

<script>
    const addTestPackage = () => {
        const newTest = document.querySelector('#add_test_package');
        newTest.style = "display:flex";
    }

    const editTestDetails = () => {
        const editDetails = document.querySelector('#edit_test_details');
        editDetails.style = "display:flex";
    }

    const drafts = () => {
        const editDetails = document.querySelector('#drafts');
        editDetails.style = "display:flex";
    }

</script>

<!-- pathology end -->
@endsection
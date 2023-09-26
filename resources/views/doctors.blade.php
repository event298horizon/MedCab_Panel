@extends('layouts.adminlayout')


<!-- doctors section start -->
@section('main')

<section class="d-flex">

    @include('include.sidebar')

    <section class="section pathology doctors bg-light">

        <!-- add doctor pop-up form -->
        <div class="pop_up_form text-clr bg-white border" id="add_doctor">
            <div class="d-flex align-items-center justify-content-between fs-title">
                <p class="fw-bold">Add Doctor</p>
                <i id="" class="crossBtn fa-solid fa-xmark"></i>
            </div>
            <form class="fs-secondary">
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Doctor's Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Specialist Area</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Hospital</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Time and Availability</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-danger w-100">Done</button>
            </form>
        </div>
        <!-- add doctor pop-up form end -->

        <!-- edit doctor details pop-up form -->
        <div class="pop_up_form text-clr bg-white border" id="edit_doctor">
            <div class="d-flex align-items-center justify-content-between fs-title">
                <p class="fw-bold">Edit Doctor's Details</p>
                <i id="" class="crossBtn fa-solid fa-xmark"></i>
            </div>
            <form class="fs-secondary">
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Doctor's Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Specialist Area</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Hospital</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Time and Availability</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-danger w-100">Done</button>
            </form>
        </div>
        <!-- edit doctor details pop-up form end -->

        <div class="left-section">

            <!-- search bar and button -->
            <div class="search-bar d-flex">
                <div class="search d-flex align-items-center bg-white">
                    <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search" class="me-2 ms-2">
                    <input class="" type="text" placeholder="Search test, packages here">
                </div>
                <div class="btns">
                    <button id="addDoctor" class="btn btn-danger"><span class="plus">+</span> Add Doctor</button>
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
                            <button id="editDoctor" class="btn border text-clr-light">Edit Details</button>
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

<script>
    // doctor page -> add doctor
    const addDoctor = document.querySelector("#addDoctor");
    addDoctor.addEventListener("click", () => {
        const doctor_form = document.querySelector("#add_doctor");
        doctor_form.style = "display:flex;";
    });

    // doctor page -> edit doctor details
    const editDoctor = document.querySelector("#editDoctor");
    editDoctor.addEventListener("click", () => {
        const doctor_form = document.querySelector("#edit_doctor");
        doctor_form.style = "display:flex;";
    });
</script>

@endsection

<!-- doctors section end -->
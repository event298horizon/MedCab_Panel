@extends('layouts.adminlayout')

@section('main')

<section class="d-flex">

    @include('include.sidebar')

    <section class="section pathology recommend hospital-details">
        
        <!-- add hospital pop-up form -->
        <div class="pop_up_form text-clr bg-white border" id="add_hospital">
            <div class="d-flex align-items-center justify-content-between fs-title">
                <p class="fw-bold">Add Hospital</p>
                <i id="" class="crossBtn fa-solid fa-xmark"></i>
            </div>
            <form class="fs-secondary">
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Hospital Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Pin Code</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Alternate Contact Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-danger w-100">Done</button>
            </form>
        </div>
        <!-- add hospital pop-up form end -->

        <!-- edit hospital pop-up form -->
        <div class="pop_up_form text-clr bg-white border" id="edit_hospital">
            <div class="d-flex align-items-center justify-content-between fs-title">
                <p class="fw-bold">Edit Hospital Details</p>
                <i id="" class="crossBtn fa-solid fa-xmark"></i>
            </div>
            <form class="fs-secondary">
            <div class="">
                    <label for="exampleInputEmail1" class="form-label">Hospital Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Pin Code</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="exampleInputEmail1" class="form-label">Alternate Contact Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-danger w-100">Done</button>
            </form>
        </div>
        <!-- edit hospital pop-up form end -->

        <div class="left-section w-100">
            <div class="search-bar recommend-heading d-flex">

                <p class="fs-title text-clr fw-bold">About Hospital</p>
                <div class="btns">
                    <button onclick="addHospital()" id="addHospital" class="btn btn-danger">Add Hospital</button>
                </div>
            </div>

            <div class="main-content d-flex flex-row fs-primary">
                @foreach ($hospital_data as $key)
                <div class="test-card d-flex flex-column border bg-white">
                    <div class="card-header w-100 d-flex border-0 bg-white">
                        <div class="card-img">
                            <img src="{{ env('DYNAMIC_IMAGE_URL') . '/' . $key->hospital_logo}}" alt="img">
                        </div>
                        <div class="card-btns fs-primary">
                            <div class="btn border primary-clr fs-secondary">Copy Details</div>
                            <div class="btn border primary-clr fs-secondary">Share</div>
                            <div id="edithospital" class="btn border primary-clr fs-secondary">Edit Details</div>
                        </div>
                    </div>
                    <div class="card-content d-flex flex-column bg-white border-0">
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Hospital Name</p>
                            <p class="text-clr fs-secondary">{{$key->hospital_name}}</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Address</p>
                            <p class="text-clr fs-secondary">{{$key->hospital_address}}</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">PIN Code</p>
                            <p class="text-clr fs-secondary">{{$key->hospital_pincode}}</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Contact Number</p>
                            <p class="text-clr fs-secondary">{{$key->hospital_contact_no}}</p>
                        </div>
                        <div class="content-item">
                            <p class="text-clr-light fs-secondary">Alternate Contact Number</p>
                            <p class="text-clr fs-secondary">{{$key->hospital_alt_contact_no}}</p>
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
                @endforeach

            </div>
        </div>

    </section>
</section>

<script>
    // hospital page -> add hospital
    const addHospital = () => {
        const hospital_form = document.querySelector("#add_hospital");
        hospital_form.style = "display:flex;";
    };

    const editHospital = document.querySelector('#edithospital');
    editHospital.addEventListener('click', () => {
        const edit_hospital = document.querySelector('#edit_hospital');
        edit_hospital.style = "display:flex";
    })
</script>

@endsection
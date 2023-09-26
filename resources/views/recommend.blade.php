@extends('layouts.adminlayout')

@section('main')

<section class="d-flex">

    @include('include.sidebar')

    <section class="section pathology recommend">

        <!-- send request pop-up form -->
        <div class="pop_up_form text-clr bg-white border" id="send_requests">
            <div class="d-flex align-items-center justify-content-between fs-title">
                <p class="fw-bold">Send Requests</p>
                <i id="" class="crossBtn fa-solid fa-xmark"></i>
            </div>
            <form class="fs-secondary">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">To Hospital</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Situation</label>
                    <div class="d-flex flex-column flex-sm-row w-100 justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Emergency
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Non Emergency
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Patient Type</label>
                    <div class="d-flex flex-column flex-sm-row w-100 justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefaultSecond" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Accidental
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefaultSecond" id="flexRadioDefault4" checked>
                            <label class="form-check-label" for="flexRadioDefault4">
                                Non Accidental
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Disease</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Age</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea class="form-control fs-secondary" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                </div>

                <div class="doneBtn">
                    <button type="submit" class="btn btn-danger w-100">Done</button>
                </div>
            </form>
        </div>
        <!-- send request pop-up form end -->

        <div class="left-section bg-light w-100">
            <div class="recommend-heading">
                <p class="fs-title text-clr fw-bold">Recommend</p>
            </div>
            <div class="search-bar d-flex">
                <div class="filter border bg-white">
                    <button class="btn">Show:</button>
                    <button class="btn">Requests Received (3)</button>
                    <button class="btn">Sent Requests</button>
                    <button class="btn">Accepted</button>
                    <button class="btn">Rejected</button>
                </div>
                <div class="btns">
                    <button onclick="sendRequest()" class="btn btn-danger">Send Requests</button>
                </div>
            </div>

            <div class="main-content fs-primary">
                <div class="test-card d-flex align-items-start border bg-white">
                    <div class="left image">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="">
                    </div>
                    <div class="right d-flex flex-column">
                        <div class="grid-container-box grid-container-box-1">

                            <div class="grid-container row mb-1">
                                <div class="item col-2">
                                    <p class="text-clr-light">Request from</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Patient Issue/Disease</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Patient Name</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Situation & Patient Type</p>
                                </div>
                                <div class="item col-3">
                                    <p class="text-clr-light">Contact</p>
                                </div>
                            </div>
                            <div class="grid-container row">
                                <div class="item col-2">
                                    <p>Hospital Name</p>
                                </div>
                                <div class="item col-2">
                                    <p>Kidney Transplant</p>
                                </div>
                                <div class="item col-2">
                                    <p>Jay Kumar Verma</p>
                                    <p>(Age-61)</p>
                                </div>
                                <div class="item col-2">
                                    <p>Emergency Situation, Non-Accidental</p>
                                </div>
                                <div class="item last-item col-lg-3 col-4">
                                    <div class="contacts d-flex justify-content-between">
                                        <div class="key">
                                            <p>Patient: </p>
                                            <p>Hospital: </p>
                                        </div>
                                        <div class="value">
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-container-box grid-container-box-2">

                            <div class="grid-container">
                                <div class="item">
                                    <p class="text-clr-light">Request from</p>

                                    <p>Hospital Name</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Patient Issue/Disease</p>

                                    <p>Kidney Transplant</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Patient Name</p>

                                    <p>Jay Kumar Verma</p>
                                    <p>(Age-61)</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Situation & Patient Type</p>

                                    <p>Emergency Situation, Non-Accidental</p>
                                </div>
                                <div class="item last-item">
                                    <p class="text-clr-light">Contact</p>

                                    <div class="contacts d-flex justify-content-between">
                                        <div class="key">
                                            <p>Patient: </p>
                                            <p>Hospital: </p>
                                        </div>
                                        <div class="value">
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <p class="text-clr-light">Description</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus provident nam fuga, nisi asperiores, itaque deserunt molestias impedit omnis tempore amet architecto aspernatur laudantium non iusto possimus vel dolorem optio maxime doloribus sit. Quaerat magni repudiandae ut tempora. Ipsum, assumenda officia porro animi in libero natus sit ipsa odio fugiat!</p>
                        </div>
                        <div class="btns d-flex align-items-end">
                            <button class="btn border text-clr-light">Reject</button>
                            <button class="btn border-danger primary-clr">Accept</button>
                            <p class="text-clr-light">12 July, 10:45 AM</p>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-start border bg-white">
                    <div class="left image">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="">
                    </div>
                    <div class="right d-flex flex-column">
                        <div class="grid-container-box grid-container-box-1">

                            <div class="grid-container row mb-1">
                                <div class="item col-2">
                                    <p class="text-clr-light">Request from</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Patient Issue/Disease</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Patient Name</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Situation & Patient Type</p>
                                </div>
                                <div class="item col-3">
                                    <p class="text-clr-light">Contact</p>
                                </div>
                            </div>
                            <div class="grid-container row">
                                <div class="item col-2">
                                    <p>Hospital Name</p>
                                </div>
                                <div class="item col-2">
                                    <p>Kidney Transplant</p>
                                </div>
                                <div class="item col-2">
                                    <p>Jay Kumar Verma</p>
                                    <p>(Age-61)</p>
                                </div>
                                <div class="item col-2">
                                    <p>Emergency Situation, Non-Accidental</p>
                                </div>
                                <div class="item last-item col-lg-3 col-4">
                                    <div class="contacts d-flex justify-content-between">
                                        <div class="key">
                                            <p>Patient: </p>
                                            <p>Hospital: </p>
                                        </div>
                                        <div class="value">
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-container-box grid-container-box-2">

                            <div class="grid-container">
                                <div class="item">
                                    <p class="text-clr-light">Request from</p>

                                    <p>Hospital Name</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Patient Issue/Disease</p>

                                    <p>Kidney Transplant</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Patient Name</p>

                                    <p>Jay Kumar Verma</p>
                                    <p>(Age-61)</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Situation & Patient Type</p>

                                    <p>Emergency Situation, Non-Accidental</p>
                                </div>
                                <div class="item last-item">
                                    <p class="text-clr-light">Contact</p>

                                    <div class="contacts d-flex justify-content-between">
                                        <div class="key">
                                            <p>Patient: </p>
                                            <p>Hospital: </p>
                                        </div>
                                        <div class="value">
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <p class="text-clr-light">Description</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus provident nam fuga, nisi asperiores, itaque deserunt molestias impedit omnis tempore amet architecto aspernatur laudantium non iusto possimus vel dolorem optio maxime doloribus sit. Quaerat magni repudiandae ut tempora. Ipsum, assumenda officia porro animi in libero natus sit ipsa odio fugiat!</p>
                        </div>
                        <div class="btns d-flex align-items-end">
                            <button class="btn border text-clr-light">Reject</button>
                            <button class="btn border-danger primary-clr">Accept</button>
                            <p class="text-clr-light">12 July, 10:45 AM</p>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-start border bg-white">
                    <div class="left image">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="">
                    </div>
                    <div class="right d-flex flex-column">
                        <div class="grid-container-box grid-container-box-1">

                            <div class="grid-container row mb-1">
                                <div class="item col-2">
                                    <p class="text-clr-light">Request from</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Patient Issue/Disease</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Patient Name</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Situation & Patient Type</p>
                                </div>
                                <div class="item col-3">
                                    <p class="text-clr-light">Contact</p>
                                </div>
                            </div>
                            <div class="grid-container row">
                                <div class="item col-2">
                                    <p>Hospital Name</p>
                                </div>
                                <div class="item col-2">
                                    <p>Kidney Transplant</p>
                                </div>
                                <div class="item col-2">
                                    <p>Jay Kumar Verma</p>
                                    <p>(Age-61)</p>
                                </div>
                                <div class="item col-2">
                                    <p>Emergency Situation, Non-Accidental</p>
                                </div>
                                <div class="item last-item col-lg-3 col-4">
                                    <div class="contacts d-flex justify-content-between">
                                        <div class="key">
                                            <p>Patient: </p>
                                            <p>Hospital: </p>
                                        </div>
                                        <div class="value">
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-container-box grid-container-box-2">

                            <div class="grid-container">
                                <div class="item">
                                    <p class="text-clr-light">Request from</p>

                                    <p>Hospital Name</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Patient Issue/Disease</p>

                                    <p>Kidney Transplant</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Patient Name</p>

                                    <p>Jay Kumar Verma</p>
                                    <p>(Age-61)</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Situation & Patient Type</p>

                                    <p>Emergency Situation, Non-Accidental</p>
                                </div>
                                <div class="item last-item">
                                    <p class="text-clr-light">Contact</p>

                                    <div class="contacts d-flex justify-content-between">
                                        <div class="key">
                                            <p>Patient: </p>
                                            <p>Hospital: </p>
                                        </div>
                                        <div class="value">
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <p class="text-clr-light">Description</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus provident nam fuga, nisi asperiores, itaque deserunt molestias impedit omnis tempore amet architecto aspernatur laudantium non iusto possimus vel dolorem optio maxime doloribus sit. Quaerat magni repudiandae ut tempora. Ipsum, assumenda officia porro animi in libero natus sit ipsa odio fugiat!</p>
                        </div>
                        <div class="btns d-flex align-items-end">
                            <button class="btn border text-clr-light">Reject</button>
                            <button class="btn border-danger primary-clr">Accept</button>
                            <p class="text-clr-light">12 July, 10:45 AM</p>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-start border bg-white">
                    <div class="left image">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="">
                    </div>
                    <div class="right d-flex flex-column">
                        <div class="grid-container-box grid-container-box-1">

                            <div class="grid-container row mb-1">
                                <div class="item col-2">
                                    <p class="text-clr-light">Request from</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Patient Issue/Disease</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Patient Name</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Situation & Patient Type</p>
                                </div>
                                <div class="item col-3">
                                    <p class="text-clr-light">Contact</p>
                                </div>
                            </div>
                            <div class="grid-container row">
                                <div class="item col-2">
                                    <p>Hospital Name</p>
                                </div>
                                <div class="item col-2">
                                    <p>Kidney Transplant</p>
                                </div>
                                <div class="item col-2">
                                    <p>Jay Kumar Verma</p>
                                    <p>(Age-61)</p>
                                </div>
                                <div class="item col-2">
                                    <p>Emergency Situation, Non-Accidental</p>
                                </div>
                                <div class="item last-item col-lg-3 col-4">
                                    <div class="contacts d-flex justify-content-between">
                                        <div class="key">
                                            <p>Patient: </p>
                                            <p>Hospital: </p>
                                        </div>
                                        <div class="value">
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-container-box grid-container-box-2">

                            <div class="grid-container">
                                <div class="item">
                                    <p class="text-clr-light">Request from</p>

                                    <p>Hospital Name</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Patient Issue/Disease</p>

                                    <p>Kidney Transplant</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Patient Name</p>

                                    <p>Jay Kumar Verma</p>
                                    <p>(Age-61)</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Situation & Patient Type</p>

                                    <p>Emergency Situation, Non-Accidental</p>
                                </div>
                                <div class="item last-item">
                                    <p class="text-clr-light">Contact</p>

                                    <div class="contacts d-flex justify-content-between">
                                        <div class="key">
                                            <p>Patient: </p>
                                            <p>Hospital: </p>
                                        </div>
                                        <div class="value">
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <p class="text-clr-light">Description</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus provident nam fuga, nisi asperiores, itaque deserunt molestias impedit omnis tempore amet architecto aspernatur laudantium non iusto possimus vel dolorem optio maxime doloribus sit. Quaerat magni repudiandae ut tempora. Ipsum, assumenda officia porro animi in libero natus sit ipsa odio fugiat!</p>
                        </div>
                        <div class="btns d-flex align-items-end">
                            <button class="btn border text-clr-light">Reject</button>
                            <button class="btn border-danger primary-clr">Accept</button>
                            <p class="text-clr-light">12 July, 10:45 AM</p>
                        </div>
                    </div>
                </div>
                <div class="test-card d-flex align-items-start border bg-white">
                    <div class="left image">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="">
                    </div>
                    <div class="right d-flex flex-column">
                        <div class="grid-container-box grid-container-box-1">

                            <div class="grid-container row mb-1">
                                <div class="item col-2">
                                    <p class="text-clr-light">Request from</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Patient Issue/Disease</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Patient Name</p>
                                </div>
                                <div class="item col-2">
                                    <p class="text-clr-light">Situation & Patient Type</p>
                                </div>
                                <div class="item col-3">
                                    <p class="text-clr-light">Contact</p>
                                </div>
                            </div>
                            <div class="grid-container row">
                                <div class="item col-2">
                                    <p>Hospital Name</p>
                                </div>
                                <div class="item col-2">
                                    <p>Kidney Transplant</p>
                                </div>
                                <div class="item col-2">
                                    <p>Jay Kumar Verma</p>
                                    <p>(Age-61)</p>
                                </div>
                                <div class="item col-2">
                                    <p>Emergency Situation, Non-Accidental</p>
                                </div>
                                <div class="item last-item col-lg-3 col-4">
                                    <div class="contacts d-flex justify-content-between">
                                        <div class="key">
                                            <p>Patient: </p>
                                            <p>Hospital: </p>
                                        </div>
                                        <div class="value">
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-container-box grid-container-box-2">

                            <div class="grid-container">
                                <div class="item">
                                    <p class="text-clr-light">Request from</p>

                                    <p>Hospital Name</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Patient Issue/Disease</p>

                                    <p>Kidney Transplant</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Patient Name</p>

                                    <p>Jay Kumar Verma</p>
                                    <p>(Age-61)</p>
                                </div>
                                <div class="item">
                                    <p class="text-clr-light">Situation & Patient Type</p>

                                    <p>Emergency Situation, Non-Accidental</p>
                                </div>
                                <div class="item last-item">
                                    <p class="text-clr-light">Contact</p>

                                    <div class="contacts d-flex justify-content-between">
                                        <div class="key">
                                            <p>Patient: </p>
                                            <p>Hospital: </p>
                                        </div>
                                        <div class="value">
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                            <p>+91 9876789765 <span><img src="{{asset('assets/images/icons/little-call.png')}}" alt=""></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <p class="text-clr-light">Description</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus provident nam fuga, nisi asperiores, itaque deserunt molestias impedit omnis tempore amet architecto aspernatur laudantium non iusto possimus vel dolorem optio maxime doloribus sit. Quaerat magni repudiandae ut tempora. Ipsum, assumenda officia porro animi in libero natus sit ipsa odio fugiat!</p>
                        </div>
                        <div class="btns d-flex align-items-end">
                            <button class="btn border text-clr-light">Reject</button>
                            <button class="btn border-danger primary-clr">Accept</button>
                            <p class="text-clr-light">12 July, 10:45 AM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</section>

<script>
    const sendRequest = () => {
        const send_requests = document.querySelector('#send_requests');
        send_requests.style = "display:flex";
    }
</script>

@endsection
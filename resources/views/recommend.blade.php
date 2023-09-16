@extends('layouts.adminlayout')

@section('main')

<section class="d-flex">

    @include('include.sidebar')

    <section class="section pathology recommend">
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
                    <button class="btn btn-danger">Send Requests</button>
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

@endsection
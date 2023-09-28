@extends('layouts.adminlayout')
@section('main')

<div class="d-flex">
    @include('include.sidebar')
    <section class="section pathology doctors facilities bg-light px-0 text-clr">
        <div class="left left-section px-0 bg-white">

            <!-- search bar and button -->
            <div class="search-bar d-flex flex-column gap-3">
                <label for="" class="fs-title fw-bold">Active Facilities Status</label>
                <div class="search d-flex align-items-center py-2 px-2 rounded-pill gap-2">
                    <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search" class="">
                    <input class="" type="text" placeholder="Search by doctor's name, specialist type">
                </div>

            </div>
            <!-- search bar and button end -->

            <div class="main-content">
                <!-- availability cards -->
                @foreach ($get_data as $key)
                <div class="test-card d-flex flex-column border bg-white">
                    <div class="upper-section d-flex">
                        <img src="{{ env('DYNAMIC_IMAGE_URL') . '/' . $key->hospital_serv_cat_icon }}" alt="img">
                        <div class="d-flex">

                            <p class="fs-primary">{{$key->hospital_serv_cat_name}}</p>
                            <div class="value-container border rounded">
                                <button class="btn value-button border-end rounded-0 rounded-start shadow-none" id="decrement"><img src="{{asset('assets/images/icons/minus.png')}}" alt=""></button>
                                <input type="number" id="value" value="0" min="0" class="border-0">
                                <button class="btn value-button border-start rounded-0 rounded-end shadow-none" id="increment"><img src="{{asset('assets/images/icons/plus.png')}}" alt=""></button>
                            </div>
                        </div>

                    </div>
                    <p class="text-clr-light fs-primary">Updated 16 Sep, 12:00 PM</p>
                </div>
                @endforeach
                <!-- availability cards end -->
            </div>
        </div>
        <div class="right right-section py-0">
            <div class="left-section bg-light w-100">
                <div class="recommend-heading">
                    <p class="fs-title fw-bold text-clr-light">Facilities</p>
                </div>
                <div class="search-bar d-flex">
                    <div class="filter border bg-white">
                        <button class="btn">Show:</button>
                        <button class="btn">All</button>
                        <button class="btn">Active</button>
                        <button class="btn">Unactive</button>
                    </div>
                </div>

                <div class="main-content fs-primary">
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <div class="toggler btn border px-0 py-0 rounded-pill d-inline-block">
                            <div class="slider"></div>
                            <button id="active" class="btn shadow-none rounded-pill">Active</button>
                            <button id="unactive" class="btn shadow-none rounded-pill">Unactive</button>
                        </div>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <div class="toggler btn border px-0 py-0 rounded-pill d-inline-block">
                            <div class="slider"></div>
                            <button id="active" class="btn shadow-none rounded-pill">Active</button>
                            <button id="unactive" class="btn shadow-none rounded-pill">Unactive</button>
                        </div>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <div class="toggler btn border px-0 py-0 rounded-pill d-inline-block">
                            <div class="slider"></div>
                            <button id="active" class="btn shadow-none rounded-pill">Active</button>
                            <button id="unactive" class="btn shadow-none rounded-pill">Unactive</button>
                        </div>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <div class="toggler btn border px-0 py-0 rounded-pill d-inline-block">
                            <div class="slider"></div>
                            <button id="active" class="btn shadow-none rounded-pill">Active</button>
                            <button id="unactive" class="btn shadow-none rounded-pill">Unactive</button>
                        </div>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <div class="toggler btn border px-0 py-0 rounded-pill d-inline-block">
                            <div class="slider"></div>
                            <button id="active" class="btn shadow-none rounded-pill">Active</button>
                            <button id="unactive" class="btn shadow-none rounded-pill">Unactive</button>
                        </div>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <div class="toggler btn border px-0 py-0 rounded-pill d-inline-block">
                            <div class="slider"></div>
                            <button id="active" class="btn shadow-none rounded-pill">Active</button>
                            <button id="unactive" class="btn shadow-none rounded-pill">Unactive</button>
                        </div>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <div class="toggler btn border px-0 py-0 rounded-pill d-inline-block">
                            <div class="slider"></div>
                            <button id="active" class="btn shadow-none rounded-pill">Active</button>
                            <button id="unactive" class="btn shadow-none rounded-pill">Unactive</button>
                        </div>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <div class="toggler btn border px-0 py-0 rounded-pill d-inline-block">
                            <div class="slider"></div>
                            <button id="active" class="btn shadow-none rounded-pill">Active</button>
                            <button id="unactive" class="btn shadow-none rounded-pill">Unactive</button>
                        </div>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <div class="toggler btn border px-0 py-0 rounded-pill d-inline-block">
                            <div class="slider"></div>
                            <button id="active" class="btn shadow-none rounded-pill">Active</button>
                            <button id="unactive" class="btn shadow-none rounded-pill">Unactive</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
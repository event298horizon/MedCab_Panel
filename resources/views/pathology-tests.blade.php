@extends('layouts.adminlayout')


@section('main')

<section class="d-flex">
    @include('include.sidebar_pathology')

    <section class="section pathology doctors facilities pathology-tests bg-light px-0 text-clr">

        <div class="right right-section py-0">
            <div class="left-section bg-light w-100">
                <div class="recommend-heading">
                    <p class="fs-title fw-bold text-clr-light">Pathology Tests Available</p>
                </div>
                <div class="search-bar d-flex">
                    <div class="filter border bg-white">
                        <button class="btn">Show:</button>
                        <button class="btn">All</button>
                        <button class="btn">Active</button>
                        <button class="btn">Unactive</button>
                    </div>
                    <div class="search d-flex align-items-center bg-white rounded-pill">
                        <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search" class="me-2 ms-2">
                        <input class="rounded-pill" type="text" placeholder="Search by doctor's name, specialist type">
                    </div>
                </div>

                <div class="main-content fs-primary">
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                    <div class="test-card d-flex flex-column align-items-center border bg-white">
                        <div class="img">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="">
                        </div>
                        <p class="text-center">ISU bed with ventilator</p>
                        <button class="btn btn-success">Active</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>


@endsection
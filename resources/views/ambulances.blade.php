@extends('layouts.adminlayout')

@section('main')
<!-- ambulances section start -->

<div class="d-flex">
    @include('include.sidebar')

    <div class="section ambulances background-light w-100">
        <div class="top-section">
            <div class="section-title">
                <p class="fs-title fw-bold">Ambulances Onway to Hospital</p>
            </div>
            <div class="detail-cards d-flex fs-title">
                <div class="detail-card bg-white">
                    <p>Total Onway</p>
                    <p class="fw-bold">4</p>
                </div>
                <div class="detail-card bg-white">
                    <p>View History</p>
                    <p class="fw-bold">12</p>
                </div>
                <div class="detail-card bg-white">
                    <p>Active Facilities</p>
                    <p class="fw-bold">13</p>
                </div>
            </div>
        </div>
        <div class="bottom-section d-flex">
            <div class="bottom-card bg-white d-flex fs-primary">
                <div class="sub-card patient-details d-flex">
                    <div class="text patient-text d-flex">
                        <div class="patient-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="patient">
                        </div>
                        <div class="key patient-key me-4">
                            <p>Patient</p>
                            <p>Need</p>
                            <p>Contact</p>
                        </div>
                        <div class="patient-value">
                            <p>Anjali bhardwaj</p>
                            <p>ICU with Ventilator</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
                <div class="sub-card driver-details d-flex border-start">
                    <div class="text driver-text d-flex">
                        <div class="driver-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="driver">
                        </div>
                        <div class="key driver-key me-4">
                            <p>Driver</p>
                            <p>Contact</p>
                        </div>
                        <div class="driver-value">
                            <p>Shubham Singh</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
            </div>
            <div class="bottom-card bg-white d-flex fs-primary">
                <div class="sub-card patient-details d-flex">
                    <div class="text patient-text d-flex">
                        <div class="patient-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="patient">
                        </div>
                        <div class="key patient-key me-4">
                            <p>Patient</p>
                            <p>Need</p>
                            <p>Contact</p>
                        </div>
                        <div class="patient-value">
                            <p>Anjali bhardwaj</p>
                            <p>ICU with Ventilator</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
                <div class="sub-card driver-details d-flex border-start">
                    <div class="text driver-text d-flex">
                        <div class="driver-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="driver">
                        </div>
                        <div class="key driver-key me-4">
                            <p>Driver</p>
                            <p>Contact</p>
                        </div>
                        <div class="driver-value">
                            <p>Shubham Singh</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
            </div>
            <div class="bottom-card bg-white d-flex fs-primary">
                <div class="sub-card patient-details d-flex">
                    <div class="text patient-text d-flex">
                        <div class="patient-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="patient">
                        </div>
                        <div class="key patient-key me-4">
                            <p>Patient</p>
                            <p>Need</p>
                            <p>Contact</p>
                        </div>
                        <div class="patient-value">
                            <p>Anjali bhardwaj</p>
                            <p>ICU with Ventilator</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
                <div class="sub-card driver-details d-flex border-start">
                    <div class="text driver-text d-flex">
                        <div class="driver-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="driver">
                        </div>
                        <div class="key driver-key me-4">
                            <p>Driver</p>
                            <p>Contact</p>
                        </div>
                        <div class="driver-value">
                            <p>Shubham Singh</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
            </div>
            <div class="bottom-card bg-white d-flex fs-primary">
                <div class="sub-card patient-details d-flex">
                    <div class="text patient-text d-flex">
                        <div class="patient-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="patient">
                        </div>
                        <div class="key patient-key me-4">
                            <p>Patient</p>
                            <p>Need</p>
                            <p>Contact</p>
                        </div>
                        <div class="patient-value">
                            <p>Anjali bhardwaj</p>
                            <p>ICU with Ventilator</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
                <div class="sub-card driver-details d-flex border-start">
                    <div class="text driver-text d-flex">
                        <div class="driver-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="driver">
                        </div>
                        <div class="key driver-key me-4">
                            <p>Driver</p>
                            <p>Contact</p>
                        </div>
                        <div class="driver-value">
                            <p>Shubham Singh</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
            </div>
            <div class="bottom-card bg-white d-flex fs-primary">
                <div class="sub-card patient-details d-flex">
                    <div class="text patient-text d-flex">
                        <div class="patient-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="patient">
                        </div>
                        <div class="key patient-key me-4">
                            <p>Patient</p>
                            <p>Need</p>
                            <p>Contact</p>
                        </div>
                        <div class="patient-value">
                            <p>Anjali bhardwaj</p>
                            <p>ICU with Ventilator</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
                <div class="sub-card driver-details d-flex border-start">
                    <div class="text driver-text d-flex">
                        <div class="driver-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="driver">
                        </div>
                        <div class="key driver-key me-4">
                            <p>Driver</p>
                            <p>Contact</p>
                        </div>
                        <div class="driver-value">
                            <p>Shubham Singh</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
            </div>
            <div class="bottom-card bg-white d-flex fs-primary">
                <div class="sub-card patient-details d-flex">
                    <div class="text patient-text d-flex">
                        <div class="patient-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="patient">
                        </div>
                        <div class="key patient-key me-4">
                            <p>Patient</p>
                            <p>Need</p>
                            <p>Contact</p>
                        </div>
                        <div class="patient-value">
                            <p>Anjali bhardwaj</p>
                            <p>ICU with Ventilator</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
                <div class="sub-card driver-details d-flex border-start">
                    <div class="text driver-text d-flex">
                        <div class="driver-image">
                            <img src="{{asset('assets/images/doctor.png')}}" alt="driver">
                        </div>
                        <div class="key driver-key me-4">
                            <p>Driver</p>
                            <p>Contact</p>
                        </div>
                        <div class="driver-value">
                            <p>Shubham Singh</p>
                            <p>+91 9965784329</p>
                        </div>
                    </div>
                    <button class="call-button rounded-circle border-0">
                        <img src="{{asset('assets/images/icons/call.png')}}" alt="call">
                    </button>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- ambulances section end -->
@endsection
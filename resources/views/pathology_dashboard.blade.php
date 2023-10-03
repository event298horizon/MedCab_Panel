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

                        <p class="primary-heading fw-bold text-clr">ONGOING BOOKINGS <span class="text-clr-light">({{count($patient_name)}} Ongoing)</span></p>

                    </div>
                    <div class="search d-flex align-items-center py-1 px-2 rounded-pill gap-2">
                        <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search" class="">
                        <input class="" type="text" placeholder="Search here">
                    </div>

                </div>
                <div class="bookings_table h-100 d-flex flex-column justify-content-between align-items-center">
                    <table class="w-100">
                        <tr class="text-clr-light border-bottom">
                            <td>BOOKING ID</td>
                            <td>PATIENT NAME</td>
                            <td>SAMPLE DATE & TIME</td>
                            <td>PAYMENT</td>
                            <td>TEST STATUS</td>
                        </tr>
                        @foreach ($patient_name as $key)
                
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input rounded-circle shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{ $key->clot_order_id }}
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    {{ $key->clp_patient_name }}<br>
                                    +91{{ $key->clo_contact_no }}
                                </td>
                                <td>
                                    {{ $key->clots_selected_date }}<br>
                                    ({{ $key->clots_slot_from }}-{{ $key->clots_slot_to }}) ({{ $key->clots_day }})
                                </td>
                                <td>
                                    ₹{{ $key->clo_final_price }}<br>
                                    @if($key->clo_payment_status == '0')
                                    Payment Pending
                                    @elseif($key->clo_payment_status == '1')
                                    Payment Done
                                    @endif
                                </td>
                                <td>
                                    Last: Sample Collected<br>
                                    <select class="form-select rounded-pill py-0 shadow-none" name="clo_sample_collection_status" aria-label="Default select example">
                                        <option value="0" @if($key->clo_sample_collection_status == '0') selected @endif>Sample Collection Pending</option>
                                        <option value="1" @if($key->clo_sample_collection_status == '1') selected @endif>Sample Collection Done</option>
                                    </select>
                                </td>
                            </tr>
                            @endforeach
                        
                    </table>
                    <div>
                        {{$patient_name->onEachSide(1)->links()}}
                    </div>
                    
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

                            <p class="primary-heading fw-bold text-clr">Booking Requests <span class="text-clr-light">({{count($patient_name)}} Ongoing)</span></p>
                            <a href="" class="text-decoration-none primary-clr">View All</a>
                        </div>
                        <div class="search d-flex align-items-center py-2 px-2 rounded-pill gap-2 w-100">
                            <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search" class="">
                            <input class="" type="text" placeholder="Search here">
                        </div>

                    </div>
                </div>
                <div class="test-type-cards px-3 py-3">
                    @foreach($customer_lab_order as $key)
                    <div class="test-type-card border fs-primary bg-white">
                        <div class="d-flex justify-content-between py-2 border-bottom w-100">
                            <p>{{$key->customer_lab_order_id}}</p>
                            <p>{{$key->clo_customer_name}}</p>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <p class="text-clr-light">Tests:</p>
                            <p>{{$key->lt_test_name}}</p>
                            <p class="text-clr-light">Location:</p>
                            <p>{{$key->lab_address.' ,'.$key->lab_pincode}}</p>
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
                    @endforeach

                </div>
            </div>
        </div>
        <!-- right section end -->
    </section>
</section>

@endsection

<!-- doctors section end -->
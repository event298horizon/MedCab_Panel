@extends('layouts.adminlayout')


@section('main')
<!-- pathology start -->

<section class="d-flex">

    @include('include.sidebar')

    <section class="section pathology settings background-light">
        <div class="settings-block text-clr d-flex flex-column gap-3">
            <div class="settings-card bg-white d-flex flex-column gap-3 px-4 py-3 rounded">
                <p class="fs-title fw-bold">Settings</p>
                <div class="d-flex flex-column border-top gap-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <p>Notification</p>
                        <button class="btn rounded-pill border">ON/OFF</button>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p>Mode</p>
                        <button class="btn rounded-pill border">Dark/Light</button>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p>Language</p>
                        <button class="btn rounded-pill border">English</button>
                    </div>
                </div>
            </div>
            <button class="btn primary-clr border bg-white">Log out</button>
        </div>
    </section>
</section>

<!-- pathology end -->
@endsection

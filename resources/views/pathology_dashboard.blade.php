@extends('layouts.adminlayout')


<!-- doctors section start -->
@section('main')

<section class="d-flex">

    <!-- Sidebar Pathology -->
    @include('include.sidebar_pathology')
    <!-- Sidebar Pathology -->

    <section class="bg-light p-3">
        @include('include.booking_charts')
    </section>
</section>

@endsection

<!-- doctors section end -->
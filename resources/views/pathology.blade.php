@extends('layouts.adminlayout')


@section('main')

<section class="d-flex">

    @include('include.sidebar')

    <section class="pathology">
        <div class="left-section">
            <div class="search-bar">
                <div class="search">
                    <img src="{{asset('assets/images/icons/search-icon.png')}}" alt="search">
                    <input type="text" placeholder="Search test, packages here">
                </div>
            </div>
            <div class="filter">

            </div>
            <div class="main-content">

            </div>
        </div>
        <div class="right-section">
            
        </div>
    </section>
</section>

@endsection
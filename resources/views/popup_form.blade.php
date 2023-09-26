@extends('layouts.adminlayout')

@section('main')

<div class="pop_up_form text-clr border" id="add_doctor">
    <div class="d-flex align-items-center justify-content-between fs-title">
        <p class="fw-bold">Add Doctor</p>
        <i id="crossBtn" class="fa-solid fa-xmark"></i>
    </div>
    <form class="fs-secondary">
        <div class="">
            <label for="exampleInputEmail1" class="form-label">Doctor's Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="">
            <label for="exampleInputEmail1" class="form-label">Specialist Area</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="">
            <label for="exampleInputEmail1" class="form-label">Hospital</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="">
            <label for="exampleInputEmail1" class="form-label">Time and Availability</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="">
            <label for="exampleInputEmail1" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-danger w-100">Done</button>
    </form>
</div>

@endsection
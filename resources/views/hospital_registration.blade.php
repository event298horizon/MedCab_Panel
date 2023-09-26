@extends('layouts.adminlayout')

@section('main')

<div class="login hospital_onboard d-flex justify-content-center">

    <!-- step 1 -->
    <div class="form-part form-part-1 text-center d-flex flex-column justify-content-between bg-white">

        <label for="" class="fs-title fw-bold d-block">Onboard Hospital</label>
        <form class="d-flex flex-column gap-2">
            <div class="hospital-image">

            </div>
            <button id="nextStep" type="submit" class="btn btn-danger w-100 fw-bold">Start<span><img src="{{asset('assets/images/icons/right-arrow.svg')}}" alt=""></span>
            </button>

        </form>
    </div>

    <!-- step 2 -->
    <div class="form-part form-part-2 text-center d-flex flex-column justify-content-center bg-white d-none">
        <label for="" class="fs-title fw-bold d-block">Onboard Hospital</label>
        <div class="steps d-flex justify-content-between gap-3">
            <div id="step-1" class="rounded-pill w-50 py-1 active">
                <p>Step 1</p>
            </div>
            <div onclick="toStep2()" id="step-2" class="rounded-pill w-50 py-1 bg-light">
                <p>Step 2</p>
            </div>
        </div>
        <div id="stepOneContent" class="mt-3">
            <label for="" class="fs-title fw-bold d-block text-start fs-primary mb-3">Hospital Details</label>
            <form class="">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Hospital Name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Address" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Pin Code" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 d-flex align-items-center border rounded">
                    <input type="password" class="form-control border-0" placeholder="Contact Number" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Alternate Contact Number" id="exampleInputPassword1">
                </div>
                <a href="#" onclick="toStep2()" type="submit" class="btn btn-danger w-100 fw-bold">Save & Next<span><img src="{{asset('assets/images/icons/right-arrow.svg')}}" alt=""></span></a>


            </form>
        </div>
        <div id="stepTwoContent" class="mt-3 d-none">
            <div class="d-flex justify-content-between fs-secondary">
                <label for="" class="fs-title fw-bold d-block text-start fs-primary mb-3">Hospital Facilities</label>
                <p class="primary-clr">Skip >></p>
            </div>
            <form class="text-clr">
                <div class="facilities-check">
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ICU with Ventilator
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ICU without Ventilator
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger w-100 fw-bold">Done<span><img src="{{asset('assets/images/icons/right-arrow.svg')}}" alt=""></span></button>


            </form>
        </div>

    </div>
</div>

<script>
    const step1 = document.querySelector('#step-1');
    const step2 = document.querySelector('#step-2');

    const stepOneContent = document.querySelector('#stepOneContent');
    const stepTwoContent = document.querySelector('#stepTwoContent');

    step1.addEventListener('click', () => {
        console.log('hey saurabh')
        step1.classList.add('active');
        step1.classList.remove('bg-light');
        step2.classList.remove('active');

        stepOneContent.classList.remove('d-none');
        stepTwoContent.classList.add('d-none');
    })

    

    const toStep2 = () => {
        step1.classList.remove('active');
        step1.classList.add('bg-light');
        step2.classList.add('active');
        step2.classList.remove('bg-light');

        stepOneContent.classList.add('d-none');
        stepTwoContent.classList.remove('d-none');

    }

    const next = document.querySelector('#nextStep');
    next.addEventListener('click', (e) => {
        e.preventDefault();
        const formPart1 = document.querySelector('.form-part-1');
        const formPart2 = document.querySelector('.form-part-2');

        formPart1.classList.add('d-none');
        formPart2.classList.remove('d-none');
    })
</script>

@endsection
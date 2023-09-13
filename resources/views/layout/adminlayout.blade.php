<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
    <!-- google fonts -->

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap css -->

    <!-- custom css -->
    <link rel="stylesheet" href="{{ url('css/reset.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/nav.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/sidebar.css') }}?<?php echo time(); ?>">
    <!-- custom css -->

    <title>MEDCAB PANEL</title>
</head>

<body>

    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span>
                    <img src="{{ asset('/assets/images/logo.png') }}" class="mb-1" alt="logo" />
                    <!-- <img src="../images/logo.png" class="mb-1" alt="" /> -->
                </span>
                MedCab
            </a>

            <div class="hospital-name input-bg text-clr rounded-pill d-flex align-items-center gap-2">
                <span class="hospital-img">
                    <img src="{{asset('assets/images/dummy.png')}}" alt="" class="rounded-circle">
                </span>
                Hospital Name
            </div>
        </div>
    </nav>
    <!-- NavBar -->

    <!-- SideBar -->
    <section class="sidebar d-flex flex-column gap-5">
        <div class="tabs upper-tabs d-flex flex-column gap-2 secondary-heading">
            <div class="tab">
                <span>
                    <img src="{{asset('assets/images/dummy.png')}}" alt="">
                </span>
                Dashboard
            </div>
            <div class="tab">
                <span>
                    <img src="{{asset('assets/images/dummy.png')}}" alt="">
                </span>
                Facilities
            </div>
            <div class="tab">
                <span>
                    <img src="{{asset('assets/images/dummy.png')}}" alt="">
                </span>
                Ambulances Onway
            </div>
            <div class="tab">
                <span>
                    <img src="{{asset('assets/images/dummy.png')}}" alt="">
                </span>
                Pathology Tests
            </div>
            <div class="tab">
                <span>
                    <img src="{{asset('assets/images/dummy.png')}}" alt="">
                </span>
                Recommend
            </div>
            <div class="tab">
                <span>
                    <img src="{{asset('assets/images/dummy.png')}}" alt="">
                </span>
                Doctors
            </div>
            <div class="tab">
                <span>
                    <img src="{{asset('assets/images/dummy.png')}}" alt="">
                </span>
                Hospital
            </div>
        </div>
        <div class="tabs lower-tabs d-flex flex-column gap-2 secondary-heading">
            <div class="tab">
                <span>
                    <img src="{{asset('assets/images/dummy.png')}}" alt="">
                </span>
                Customize
            </div>
            <div class="tab">
                <span>
                    <img src="{{asset('assets/images/dummy.png')}}" alt="">
                </span>
                Settings
            </div>
        </div>
    </section>
    <!-- SideBar -->


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
</body>

</html>
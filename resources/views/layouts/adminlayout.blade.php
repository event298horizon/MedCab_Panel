<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
    <!-- favicon -->

    <!-- google fonts start -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
    <!-- google fonts end -->

    <!-- bootstrap css start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap css end -->

    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" referrerpolicy="no-referrer" />
    <!-- font awesome end -->

    <!-- custom css start -->
    <link rel="stylesheet" href="{{ url('css/reset.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/nav.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/sidebar.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/pathology.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/doctors.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/ambulances.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/recommend.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/login.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/facilities.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/hospital_details.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/settings.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/pathology-tests.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/hospital_registration.css') }}?<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url('css/pathology_dashboard.css') }}?<?php echo time(); ?>">
    <!-- popup form -->
    <link rel="stylesheet" href="{{ url('css/popup_form.css') }}?<?php echo time(); ?>">

    <!-- @Uttam -->
    <link rel="stylesheet" href="{{ url('css/booking_charts.css') }}?<?php echo time(); ?>">

    <!-- custom css end -->

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- jquery end -->

    <title>MEDCAB PANEL</title>
</head>

<body>
    <!-- HTML start -->
    <!-- NavBar start -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <img src="{{ asset('/assets/images/ham.png')}}" id="ham-menu" class="mb-1 me-3" alt="">
                <a class="navbar-brand" href="#">
                    <span>
                        <img src="{{ asset('/assets/images/logo.png')}}" class="mb-1" alt="logo" />
                        <!-- <img src="../images/logo.png" class="mb-1" alt="" /> -->
                    </span>
                    <span id="medcab">
                        MedCab
                    </span>
                </a>
            </div>

            <div class="hospital-name input-bg text-clr rounded-pill d-flex align-items-center gap-2">
                <span class="hospital-img">
                    <img src="{{asset('assets/images/hospital.png')}}" alt="" class="rounded-circle">
                </span>
                Hospital Name
            </div>
        </div>
    </nav>
    <!-- NavBar end -->


    <!-- main section start -->
    @yield('main')
    <!-- main section end -->


    <!-- HTML end -->

    <!-- custom scripts start -->
    <!-- toggler button script -->
    <script>
        const toggler = document.querySelector('.toggler');
        const slider = document.querySelector('.slider');
        const toggler_button = Array.from(document.querySelectorAll('.toggler button'));
        let translated = false;

        toggler_button[0].style.color = "white"
        toggler_button[1].style.color = "black"

        toggler.addEventListener('click', () => {
            if (translated) {
                slider.style.transform = 'translateX(0)';
                slider.style.width = '70px';

                toggler_button[0].style.color = "white"
                toggler_button[1].style.color = "black"

                translated = false
            } else {
                slider.style.transform = 'translateX(74px)';
                slider.style.width = '88px';

                toggler_button[0].style.color = "black"
                toggler_button[1].style.color = "white"

                translated = true
            }
        })
    </script>
    <!-- toggler button script end -->
    <!-- custom scripts end -->

    <!-- custom js start -->
    <script src="{{url('js/custom.js')}}?<?php echo time(); ?>"></script>
    <script src="{{url('js/popup_form.js')}}?<?php echo time(); ?>"></script>
    <!-- custom js end -->

    <!-- bootstrap js start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- bootstrap js end -->
</body>

</html>
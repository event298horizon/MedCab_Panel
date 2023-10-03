@extends('layouts.admin_layout')

@section('main')

<div class="login d-flex">
    <div class="image-part w-50">

    </div>
    <div class="form-part w-50 text-center d-flex flex-column justify-content-center">
        <div>
            <img src="{{ asset('assets/images/login-ambu.png') }}" alt="">
        </div>
        <label for="" class="fs-title fw-bold d-block text-start">Lab Owner Dashboard</label>      
        <a href="{{ route('lab.edit_lab', $lab_data->lab_id) }}" class="btn btn-danger w-100 fw-bold">Go to Edit Documents<span><img src="{{ asset('assets/images/icons/right-arrow.svg') }}" alt=""></span></a>
        @if($lab_data->lab_owner_status == '5')
        <button id="verificationButton" class="btn border-danger w-100 fw-bold" data-owner-id="{{ $lab_data->lab_owner_id }}">Applied For Verification<span><img src="{{ asset('assets/images/icons/red-right-arrow.svg') }}" alt=""></span></button>
        @elseif($lab_data->lab_owner_status=='6')
        <button class="btn border-danger  w-100 fw-bold">Your Applied For Verification Submit Successfully<span><img src="{{ asset('assets/images/icons/red-right-arrow.svg') }}" alt=""></span></button>
        @elseif($lab_data->lab_owner_status=='7')
        <a href="{{ route('pathology_dashboard') }}" class="btn btn-danger w-100 fw-bold">Go to Your Dashboard<span><img src="{{ asset('assets/images/icons/right-arrow.svg') }}" alt=""></span></a>
        @else
        @endif
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Get a reference to the button element
    var verificationButton = $('#verificationButton');

    // Add a click event listener to the button
    verificationButton.click(function() {
        // Get the owner ID from the data attribute
        var ownerId = verificationButton.data('owner-id');

        // Perform the AJAX call when the button is clicked
        $.ajax({
            type: 'POST',
            url: '{{ route('verify.lab') }}',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'), // Include the CSRF token in the data
                owner_id: ownerId // Replace with your data
            },
            success: function(response) {
                // Handle the response from the server here
                console.log(response); // You can display the response data in the console
                // You can also update the UI based on the response if needed

                // Show a toaster notification
                toastr.success(response.message);

                // Reload the page after a delay (e.g., 2 seconds)
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(error) {
                // Handle errors here
                console.error(error);
            }
        });
    });
</script>



@endsection

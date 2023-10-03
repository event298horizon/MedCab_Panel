@extends('layouts.adminlayout')

@section('main')

<div class="login d-flex">
    <div class="image-part w-50">

    </div>
    <div class="form-part w-50 text-center d-flex flex-column justify-content-center">
        <div>
            <img src="{{ asset('assets/images/login-ambu.png') }}" alt="">
        </div>
        <label for="" class="fs-title fw-bold d-block text-start">Add Your Lab Registration</label>
        <form action="{{ route('lab.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" autocomplete="off" class="form-control" name="lab_name" required id="lab_name" placeholder="Your Lab Name ......">
            </div>
            <div class="mb-3">
                <input type="text" autocomplete="off" name="lab_details" class="form-control" required placeholder="Enter Your Lab Details...">
            </div>
            <div class="mb-3">
                <input type="email" autocomplete="off" name="lab_email" class="form-control" id="lab_email" placeholder="Enter Your Email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="number" autocomplete="off" name="lab_contact_no" class="form-control" required id="lab_contact_no" placeholder="Enter Contact Number">
            </div>
            <div class="mb-3">
                <input type="text" autocomplete="off" name="lab_city" class="form-control" required id="search" placeholder="Enter Your Lab City..." >
            </div>
            <div class="mb-3">
                <input type="file" name="lab_image" accept="image/*" class="form-control" required id="lab_owner_profile" onchange="previewImage()">
            </div>
            <div>
                <img id="preview" src="#" alt="Preview Image" style="display: none; max-width: 17%; max-height: 86px;">
            </div><br>
            <div class="mb-3">
                <input type="text" name="lab_address" id="autocomplete" class="form-control" placeholder="Enter Your Lab Address..." >
                <input type="text" name="lab_lat" id="latitude"  hidden>
                <input type="text" name="lab_long" id="longitude" hidden>
                <input type="hidden" name="lab_owner_id" id="lab_owner_id" value="{{ session('user_id') }}" hidden>
            </div>
            <div class="mb-3">
                <input type="text" autocomplete="off" name="lab_pincode" class="form-control" required  placeholder="Enter Your Pincode..." >
            </div>
            <div class="mb-3">
                <select name="lab_type" id="lab_added_refferal_id" required class="form-control">
                    <option value="">Choose Your Lab Type</option>
                    <option value="pathology">Pathology</option>
                    <option value="radiology">Radiology</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="mb-3">
                <select name="lab_service_status" id="lab_service_status" required class="form-control">
                    <option value="">Enter Available 24/7 Service</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <button type="submit" class="btn btn-danger w-100 fw-bold">Next <span><img src="{{ asset('assets/images/icons/right-arrow.svg') }}" alt=""></span></button>
        </form>
    </div>
</div>

<script>
    function previewImage() {
        var input = document.getElementById('lab_owner_profile');
        var preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.style.display = 'none';
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<script type="text/javascript">
    var path = "{{ route('auto.complete') }}";

    $('#search').typeahead({
        source: function (query, process) {
            return $.get(path, {
                query: query
            }, function (data) {
                return process(data);
            });
        },
        updater: function (item) {
            var cityInfo = item.split(' (');
            var cityID = cityInfo[1].slice(0, -1);
            
            $('#search').val(cityInfo[0].trim());
            $('#city_id').val(cityID);
            
            // Additional code to handle selection if needed
            return cityInfo[0].trim();
        }
    });
</script>

<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=AIzaSyCx0Z4yauzBpfz1F6avmCDriDHhoMChbuw&libraries=places" ></script><script>
    $(document).ready(function () {
        $("#latitudeArea").addClass("d-none");
        $("#longitudeArea").addClass("d-none");
    });

    google.maps.event.addDomListener(window, 'load', initialize);
  
    function initialize() {
        var input = document.getElementById('autocomplete');
        var autocomplete = new google.maps.places.Autocomplete(input);
  
        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            $('#latitude').val(place.geometry['location'].lat());
            $('#longitude').val(place.geometry['location'].lng());
  
            $("#latitudeArea").removeClass("d-none");
            $("#longitudeArea").removeClass("d-none");
        });
    }
</script>
@endsection

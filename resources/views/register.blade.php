@extends('layouts.adminlayout')


@section('main')

<div class="login d-flex">
    <div class="image-part w-50">

    </div>
    <div class="form-part w-50 text-center d-flex flex-column justify-content-center">
        <div>
            <img src="{{asset('assets/images/login-ambu.png')}}" alt="">
        </div>
        <label for="" class="fs-title fw-bold d-block text-start">Lab Owner Registeration</label>
        <form action="{{route('register.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" autocomplete="off" class="form-control" name="lab_owner_name" required id="lab_owner_name" placeholder="User Name">
            </div>
            <div class="mb-3">
                <input type="email" autocomplete="off"  name="lab_owner_email" class="form-control"  id="lab_owner_email" placeholder="Email ID" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="number" autocomplete="off" name="lab_owner_mobile_number" class="form-control" required id="lab_owner_mobile_number" placeholder="Phone Number" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <input type="text" autocomplete="off" name="lab_owner_city_name" class="form-control" required id="search" placeholder="Enter your City..." aria-describedby="emailHelp">
        </div>

            <div class="mb-3">
                <input type="file" name="lab_owener_profile" accept="image/*" class="form-control" required id="lab_owener_profile" onchange="previewImage()">
            </div>
            <div>
                <img id="preview" src="#" alt="Preview Image" style="display: none;max-width: 17%;max-height: 86px;;">
            </div><br>

            <div class="mb-3">
                <input type="text" name="lab_added_refferal_id"  class="form-control" placeholder="Enter Refferal Codes..." >
            </div>
            <button type="submit" class="btn btn-danger w-100 fw-bold">Register<span><img src="{{asset('assets/images/icons/right-arrow.svg')}}" alt=""></span></button>

            <center><label for="" class="register-label">Already have an account?</label></center>

                <a href="{{route('login')}}" class="btn border-danger primary-clr w-100 fw-bold">Login<span><img src="{{asset('assets/images/icons/red-right-arrow.svg')}}" alt=""></span></a>

            </form>
    </div>
</div>



<!------------ Js Section Starts ------------>


<!------------ Js Section For the Preview Images section ------------>

<script>
function previewImage() {
    var input = document.getElementById('lab_owener_profile');
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
<!------------ Js Section For the Preview Images section ------------>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI (Autocomplete) -->
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

<!-------------- Toaster Notification ---------->
<!-- Toastr CSS CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!-- Include Toastr library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- Toastr Configuration -->
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right"
    };
</script>

<!-- Check for session flash messages and display them -->
<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif

    @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif

    @if(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif

    @if(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
    @endif
</script>

@endsection
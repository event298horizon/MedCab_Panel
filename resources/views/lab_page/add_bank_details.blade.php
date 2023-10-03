@extends('layouts.adminlayout')

@section('main')

<div class="login d-flex">
    <div class="image-part w-50">

    </div>
    <div class="form-part w-50 text-center d-flex flex-column justify-content-center">
        <div>
            <img src="{{ asset('assets/images/login-ambu.png') }}" alt="">
        </div>
        <label for="" class="fs-title fw-bold d-block text-start">Add Your Bank Details</label>
        <form action="{{ route('lab.bank_store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" autocomplete="off" class="form-control" name="account_holder_name" required id="account_holder_name" placeholder=" Account Holder Name......">
            </div>
            <div class="mb-3">
                <input type="number" name="account_no"  class="form-control"  value="{{ 'Dr. ' . old('account_no') }}" placeholder=" Account Number..." >
                <input type="hidden" name="lab_owner_id" id="lab_owner_id" value="{{ session('user_id') }}" hidden>
            </div>
     
            <div class="mb-3">
                <input type="file" name="cancel_check_image" accept="image/*" class="form-control" required id="lab_licence_certificate_photo" onchange="previewLicenceImage()">
            </div>
            <div>
                <img id="licence_preview" src="#" alt="Preview Image" style="display: none; max-width: 17%; max-height: 86px;">
            </div><br>
         
            
           
            <button type="submit" class="btn btn-danger w-100 fw-bold">Next <span><img src="{{ asset('assets/images/icons/right-arrow.svg') }}" alt=""></span></button>
        </form>
    </div>
</div>


<!-------- JS Section ---------->

<script>
    function previewLicenceImage() {
        var input = document.getElementById('lab_licence_certificate_photo');
        var preview = document.getElementById('licence_preview');

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


@endsection

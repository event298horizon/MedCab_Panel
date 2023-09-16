<!-- SideBar -->
<section id="sidebar">
    <section class=" sidebar border-top border-4 shadow d-flex flex-column gap-5">
        <div class="tabs upper-tabs d-flex flex-column fs-title">
            <a href="">
                <div class="tab d-flex align-items-center">
                    <div>
                        <img src="{{asset('assets/images/dummy.png')}}" alt="">
                    </div>
                    <div>
                        <p>
                            Dashboard
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{Route('facilities')}}">
                <div class="tab d-flex align-items-center">
                    <div>
                        <img src="{{asset('assets/images/dummy.png')}}" alt="">
                    </div>
                    <div>
                        <p>
                            Facilities
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{Route('ambulances')}}">
                <div class="tab d-flex align-items-center">
                    <div>
                        <img src="{{asset('assets/images/dummy.png')}}" alt="">
                    </div>
                    <div>
                        <p>
                            Ambulances Onway
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{Route('pathology')}}">
                <div class="tab d-flex align-items-center">
                    <div>
                        <img src="{{asset('assets/images/dummy.png')}}" alt="">
                    </div>
                    <div>
                        <p>
                            Pathology Tests
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{Route('recommend')}}">
                <div class="tab d-flex align-items-center">
                    <div>
                        <img src="{{asset('assets/images/dummy.png')}}" alt="">
                    </div>
                    <div>
                        <p>
                            Recommend
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{Route('doctors')}}">
                <div class="tab d-flex align-items-center">
                    <div>
                        <img src="{{asset('assets/images/dummy.png')}}" alt="">
                    </div>
                    <div>
                        <p>
                            Doctors
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{Route('hospital_details')}}">
                <div class="tab d-flex align-items-center">
                    <div>
                        <img src="{{asset('assets/images/dummy.png')}}" alt="">
                    </div>
                    <div>
                        <p>
                            Hospitals
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="tabs lower-tabs d-flex flex-column fs-title">
            <a href="">
                <div class="tab d-flex align-items-center">
                    <div>
                        <img src="{{asset('assets/images/dummy.png')}}" alt="">
                    </div>
                    <div>
                        <p>
                            Customize
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{Route('settings')}}">
                <div class="tab d-flex align-items-center">
                    <div>
                        <img src="{{asset('assets/images/dummy.png')}}" alt="">
                    </div>
                    <div>
                        <p>
                            Settings
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </section>
</section>
<!-- SideBar -->
@extends('layouts.main')

@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- Content --}}
    <section class="py-5">
        <div class="container-xl">
            <h2 class="section-title pb-5">
                Wingers Unlimited
            </h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt="" srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt="" srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt="" srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt="" srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt="" srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt="" srcset="">
                </div>
            </div>

        </div>
    </section>

    <section class="py-5">
        <div class="container-xl">
            <h2 class="section-title pb-5">
                NY Buffalo Brads Hot Wings
            </h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt="" srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt="" srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt="" srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt="" srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
            </div>

        </div>
    </section>

    <section class="py-5">
        <div class="container-xl">
            <h2 class="section-title pb-5">
                NY Buffalo Brads Sports Lounge
            </h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/images/img4.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="">
                </div>
            </div>

        </div>
    </section>

    {{-- Contact Us --}}
    <livewire:contact-us />

    {{-- Footer --}}
    <livewire:footer />
@endsection

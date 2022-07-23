@extends('layouts.main')

@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- Content --}}
    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    Wingers Unlimited
                </h2>
            </div>
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
            <div class="pb-5">
                <h2 class="section-title">
                    NY Buffalo Brads Hot Wings
                </h2>
            </div>
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
            <div class="pb-5">
                <h2 class="section-title">
                    NY Buffalo Brads Sports Lounge
                </h2>
            </div>
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

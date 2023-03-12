@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:sports-navbar />

    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h1 class="section-title">
                    Branches
                </h1>
            </div>
            {{-- <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tempore ipsa minima, expedita provident
                quod repellat labore nihil, quam velit sint harum ab asperiores? Vitae, reprehenderit architecto aspernatur
                dolor dolorem odit maiores, minima suscipit laboriosam eligendi numquam enim est eum, eius iste molestias
                accusantium! Et repudiandae laboriosam molestiae delectus pariatur.
            </p> --}}

        </div>
    </section>
    <section class="pb-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-4 col-sm-6 p-3">
                    <img src="{{ asset('assets/stores2/sl/ayala.jpg') }}" class="img-fluid py-3"
                        style="object-fit: cover;height: 100%;" alt=""
                        data-lightbox="{{ asset('assets/stores2/sl/ayala.jpg') }}" srcset="">
                    <h6 class="fw-bold">
                        NY Buffalo Brads Sports Lounge - Ayala Central Bloc
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 p-3">
                    <img src="{{ asset('assets/stores/sl/store2.jpg') }}" class="img-fluid py-3"
                        style="object-fit: cover;height: 100%;" alt=""
                        data-lightbox="{{ asset('assets/stores/sl/store2.jpg') }}" srcset="">
                    <h6 class="fw-bold">
                        NY Buffalo Brads Sports Lounge - Ayala Central Bloc (Inside)
                    </h6>
                </div>
            </div>
        </div>
    </section>


    {{-- Map Section --}}

    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h1 class="section-title">
                    We are located at
                </h1>
            </div>
            <div class="row">
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.136520405561!2d123.90683179999999!3d10.3309579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999a971029177%3A0x58a4dddf099d8ef8!2sNew%20York%20Buffalo%20Brad&#39;s%20Sports%20Lounge!5e0!3m2!1sen!2sph!4v1672388060560!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <livewire:contact-us />
    <livewire:footer />
@endsection

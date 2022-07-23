@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:wingers-navbar />

    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h1 class="section-title">
                    Store
                </h1>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tempore ipsa minima, expedita provident
                quod repellat labore nihil, quam velit sint harum ab asperiores? Vitae, reprehenderit architecto aspernatur
                dolor dolorem odit maiores, minima suscipit laboriosam eligendi numquam enim est eum, eius iste molestias
                accusantium! Et repudiandae laboriosam molestiae delectus pariatur.
            </p>

        </div>
    </section>
    <section class="pb-5">
        <div class="container-xl">
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


    {{-- Map Section --}}

    <section class="py-5">
      <div class="container-xl">
        <div class="pb-5">
          <h1 class="section-title">
            We are located at
          </h1>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125585.22372709139!2d123.77625413271971!3d10.378756863745503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999258dcd2dfd%3A0x4c34030cdbd33507!2sCebu%20City%2C%20Cebu!5e0!3m2!1sen!2sph!4v1658551944259!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>

    <livewire:contact-us />
    <livewire:footer />
@endsection

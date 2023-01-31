@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:hot-navbar />

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
                    <img src="{{ asset('assets/stores/bb/store1.jpg') }}" class="img-fluid py-3" alt="" srcset=""
                        data-lightbox="{{ asset('assets/stores/bb/store1.jpg') }}">
                    <h6 class="fw-bold">
                        NY Hotwings - Mango
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 p-3">
                    <img src="{{ asset('assets/stores/bb/store2.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="" data-lightbox="{{ asset('assets/stores/bb/store2.jpg') }}">
                    <h6 class="fw-bold">
                        NY Hotwings - Mactan
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 p-3">
                    <img src="{{ asset('assets/stores/bb/naga.jpg') }}" class="img-fluid py-3" alt="" srcset=""
                        data-lightbox="{{ asset('assets/stores/bb/naga.jpg') }}">
                    <h6 class="fw-bold">

                        NY Hotwings - Naga
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 p-3">
                    <img src="{{ asset('assets/stores/bb/gardenbloc.jpg') }}" class="img-fluid py-3" alt=""
                        srcset="" data-lightbox="{{ asset('assets/stores/bb/gardenbloc.jpg') }}">
                    <h6 class="fw-bold">
                        NY Hotwings - Garden Bloc
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
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3925.1332984636465!2d123.9036793!3d10.3312159!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9992199fabe57%3A0x94cbaf5a633fe0ca!2sNew%20York%20Buffalo%20Brad&#39;s%20Hot%20Wings!5e0!3m2!1sen!2sph!4v1672385632587!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1962.696684896647!2d123.8958759!3d10.3103699!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9992be2e2a41b%3A0xc8a144ecd054c344!2sNew%20York%20Buffalo%20Brad&#39;s%20Hot%20Wings%20-%20Gen%20Max%20Mango!5e0!3m2!1sen!2sph!4v1672385661067!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7851.164849637053!2d123.9593251!3d10.29519!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999d8cab00899%3A0x6c3980db676ec0c6!2sNew%20York%20Buffalo%20Brad%E2%80%99s%20Hot%20Wings%20-%20Lapu%20Lapu!5e0!3m2!1sen!2sph!4v1672386963059!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1962.4372084233971!2d123.9487381!3d10.3519253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999dd8cc1c9c5%3A0xa52115d4babf2ed7!2sNew%20York%20Buffalo%20Brads%20Hot%20Wings!5e0!3m2!1sen!2sph!4v1672386988550!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <livewire:contact-us />
    <livewire:footer />
@endsection

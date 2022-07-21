@extends('layouts.main')

@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- Content --}}
    <section>
        <img class="img-fluid" style="object-fit: contain" src="{{ asset('assets/images/img5.jpg') }}" alt="">
    </section>
    <section class="py-5">
        <div class="container-xl">

            <h1 class="pb-5 section-title text-center">
                OUR GROUP
            </h1>

            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A iusto recusandae eius eligendi aperiam,
                reprehenderit
                pariatur doloremque accusamus dolorem? Quidem unde cupiditate suscipit! Assumenda illum ea sed laboriosam
                quam
                voluptas.
            </p>
        </div>
    </section>

    <section class="py-5">
        <div class="bg-dark">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center py-3">
                        <img src="{{ asset('assets/images/ceo.png') }}" class="rounded w-100" alt="">
                    </div>
                    {{-- <div class="col-md-6 d-none py-2 d-md-flex align-items-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" class="rounded" alt="">
                    </div> --}}
                    <div class="col-md-6 py-2 text-white d-flex justify-content-center flex-column">
                        <h2>
                            John Doe
                        </h2>
                        <small><i>
                                CEO
                            </i></small>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sapiente voluptatem magni
                            necessitatibus
                            fugit autem animi nihil ut perferendis accusamus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-xl pb-5">
            <h2 class="section-title pb-3">
                Mission
            </h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto dolore aperiam officiis consequatur aut
                necessitatibus facilis nemo. Odit, reprehenderit sequi.

            </p>
        </div>
        <div class="container-xl pb-5">
            <h2 class="section-title pb-3">
                Vision
            </h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum blanditiis sed labore, dolorum voluptates
                dignissimos est! Beatae perferendis laboriosam tenetur!
            </p>
        </div>
        <div class="container-xl pb-5">
            <h2 class="section-title pb-3">
                Core Values
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error magnam corporis perferendis? Perspiciatis,
                modi totam itaque nulla non sed adipisci?
            </p>
        </div>
    </section>
    <section class="py-5">
        <div class="container-xl">
            <h2 class="section-title text-center fs-1 pb-5">
                OUR TEAM
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" alt="" class="img-fluid rounded">
                        <h3 class="mt-3 fw-bold">
                            John Doe
                        </h3>
                        <p>
                            Position
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" alt="" class="img-fluid rounded">
                        <h3 class="mt-3 fw-bold">
                            John Doe
                        </h3>
                        <p>
                            Position
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" alt="" class="img-fluid rounded">
                        <h3 class="mt-3 fw-bold">
                            John Doe
                        </h3>
                        <p>
                            Position
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" alt="" class="img-fluid rounded">
                        <h3 class="mt-3 fw-bold">
                            John Doe
                        </h3>
                        <p>
                            Position
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" alt="" class="img-fluid rounded">
                        <h3 class="mt-3 fw-bold">
                            John Doe
                        </h3>
                        <p>
                            Position
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    {{-- Contact Details --}}
    <section class="py-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-4">
                    {{-- circle map icon orange bg --}}
                    <div class="text-center">
                        <div
                            class="rounded-circle bg-orange circler mx-auto d-flex justify-content-center align-items-center">
                            <i class="bi bi-geo-alt text-white fs-1 "></i>
                        </div>
                        <h3 class="mt-3 fw-bold">
                            Address
                        </h3>
                        <p>
                            A108 Adam Street, New York, NY 535022
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    {{-- circle map icon orange bg --}}
                    <div class="text-center">
                        <div
                            class="rounded-circle bg-orange circler mx-auto d-flex justify-content-center align-items-center">
                            <i class="bi bi-envelope text-white fs-1 "></i>
                        </div>
                        <h3 class="mt-3 fw-bold">
                            Email
                        </h3>
                        <p>
                            contact@example.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    {{-- circle map icon orange bg --}}
                    <div class="text-center">
                        <div
                            class="rounded-circle bg-orange circler mx-auto d-flex justify-content-center align-items-center">
                            <i class="bi bi-telephone text-white fs-1 "></i>
                        </div>
                        <h3 class="mt-3 fw-bold">
                            Call Us
                        </h3>
                        <p>
                            +1 (234) 567-890-1234
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Footer --}}
    <livewire:footer />
@endsection

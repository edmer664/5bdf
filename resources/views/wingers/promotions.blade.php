@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:wingers-navbar />

    {{-- Carousel --}}
    {{-- TODO:Add Connection to Admin Panel Replace Static Image --}}
    <div class="w-100 ">
        <div id="hero" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#hero" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#hero" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/images/img3.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/images/img3.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/images/img3.jpg') }}" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <section class="py-5">
        <div class="container-xl">

            <h2 class="section-title text-center pb-5">
                Promotions
            </h2>
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt minima nostrum animi odit architecto minus
                exercitationem sint excepturi facilis similique esse perferendis, hic cumque, ea totam nisi dolore atque
                reiciendis.

            </p>
        </div>

    </section>

    <section class="py-5">
        <div class="container-xl">
            <h2 class="section-title pb-5">
                Category 1
            </h2>
            <section class="py-5">
                <div class="bg-green mb-3">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center py-3">
                                <img src="{{ asset('assets/images/img5.jpg') }}" class="rounded w-100" alt="">
                            </div>
                            {{-- <div class="col-md-6 d-none py-2 d-md-flex align-items-center">
                          <img src="{{ asset('assets/images/ceo.png') }}" class="rounded" alt="">
                      </div> --}}
                            <div class="col-md-6 py-2 text-white d-flex justify-content-center flex-column">
                                <h2>
                                    <u>
                                        Lorem Ipsum
                                    </u>
                                </h2>

                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sapiente voluptatem magni
                                    necessitatibus
                                    fugit autem animi nihil ut perferendis accusamus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-green mb-3">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center py-3">
                                <img src="{{ asset('assets/images/img5.jpg') }}" class="rounded w-100" alt="">
                            </div>
                            {{-- <div class="col-md-6 d-none py-2 d-md-flex align-items-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" class="rounded" alt="">
                    </div> --}}
                            <div class="col-md-6 py-2 text-white d-flex justify-content-center flex-column">
                                <h2>
                                    <u>
                                        Lorem Ipsum
                                    </u>
                                </h2>

                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sapiente voluptatem magni
                                    necessitatibus
                                    fugit autem animi nihil ut perferendis accusamus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-green mb-3">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center py-3">
                                <img src="{{ asset('assets/images/img5.jpg') }}" class="rounded w-100" alt="">
                            </div>
                            {{-- <div class="col-md-6 d-none py-2 d-md-flex align-items-center">
                      <img src="{{ asset('assets/images/ceo.png') }}" class="rounded" alt="">
                  </div> --}}
                            <div class="col-md-6 py-2 text-white d-flex justify-content-center flex-column">
                                <h2>
                                    <u>
                                        Lorem Ipsum
                                    </u>
                                </h2>

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
        </div>
    </section>
@endsection

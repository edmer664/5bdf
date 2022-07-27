@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:hot-navbar />

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

            <div class="pb-5 text-center">
                <h2 class="section-title">
                    Promotions
                </h2>
            </div>
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt minima nostrum animi odit architecto minus
                exercitationem sint excepturi facilis similique esse perferendis, hic cumque, ea totam nisi dolore atque
                reiciendis.

            </p>
        </div>

    </section>

    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    Category 1
                </h2>
            </div>
            <div class="">
                <div class="bg-orange mb-3">
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
                <div class="bg-orange mb-3">
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
                <div class="bg-orange mb-3">
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
            </div>
            {{-- green view more btn --}}
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                    <a href="#" class="btn bg-orange text-white">
                        View More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-xl">
            <p class="text-center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus asperiores cupiditate tempora
                perspiciatis sequi! Minus atque accusamus vitae illo fugit! Tempore quae repudiandae velit neque eos, quam
                aperiam quibusdam alias perspiciatis corrupti, sit voluptatibus, nobis quis mollitia et itaque. Neque
                voluptatibus vitae ad cum obcaecati et consequuntur recusandae ut expedita.

            </p>
        </div>
    </section>

    <livewire:contact-us />
    <livewire:footer />
    
@endsection

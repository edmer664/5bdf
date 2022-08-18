@extends('layouts.main')

@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- Content --}}
    <section>
        <img class=""  style="object-fit: cover;height: 50vh;width: 100%;" src="{{ asset('assets/images/img5.jpg') }}" alt="">
    </section>
    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5 text-center">
                <h1 class="section-title">
                    OUR GROUP
                </h1>
            </div>

            <p class="text-center">
                The business idea was created in 2015 by five young and enthusiastic businessmen in Cebu. Established in the
                year 2016 after pursuing a whole year of research and development, finally the idea then came into reality.
                Registered in the Philippines Securities and Exchange Commission (SEC) in April 25, 2016, known as 5 Brad’s
                Dragon Food Corporation (5BDF Corporation) doing business as New York Buffalo Brad’s Hot Wings and Wingers
                Unlimited Flavored Wings.
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
                            ROBIN G. ROBINS III
                        </h2>
                        <small><i>
                            Chief Executive Officer
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
            <div class="pb-5">
                <h2 class="section-title">
                    Mission
                </h2>
            </div>

            <p>
                To bring the internationally acclaimed Flavored Chicken Buffalo Wings in the Philippine market by innovating
                and introducing an array of sauces that is perfect for the Filipino taste.

            </p>
        </div>
        <div class="container-xl pb-5">
            <div class="pb-5">

                <h2 class="section-title">
                    Vision
                </h2>
            </div>
            <p>
                To be the country’s leading fast food chain built with a solid business partnership recognized by its
                distinct taste of Flavored Chicken Wings, efficient service, and dynamic people.
            </p>
        </div>
        <div class="container-xl pb-5">
            <div class="pb-5">
                <h2 class="section-title">
                    Core Values
                </h2>
            </div>
            <p>
                We are committed in treating our customers with respect, friendly and family oriented service.
            <ul>
                <li>
                    We continually grow with creativity and innovation.
                </li>
                <li>
                    We integrate honesty, integrity and business ethics into all aspects of our operation.
                </li>
            </ul>
            </p>
        </div>
    </section>
    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5 text-center">
                <h2 class="section-title">
                    OUR TEAM
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" alt="" class="img-fluid rounded">
                        <h3 class="mt-3 fw-bold">
                            HARLOW GAYLE Z. FACTURAN
                        </h3>
                        <p>
                            Chief Operating Officer
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" alt="" class="img-fluid rounded">
                        <h3 class="mt-3 fw-bold">
                            ROBERT R. CO
                        </h3>
                        <p>
                            Chief Finance Officer
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" alt="" class="img-fluid rounded">
                        <h3 class="mt-3 fw-bold">
                            JEFFREY T. LINGAD
                        </h3>
                        <p>
                            Chief of Production
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" alt="" class="img-fluid rounded">
                        <h3 class="mt-3 fw-bold">
                            FULBERT NEWTON B. LEE
                        </h3>
                        <p>
                            Chief of Architecture & Design
                        </p>
                    </div>
                </div>
                

            </div>
        </div>

    </section>

    {{-- Contact Details --}}
    <livewire:contact-details />


    {{-- Footer --}}
    <livewire:footer />
@endsection

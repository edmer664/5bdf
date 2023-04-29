@extends('layouts.main')

@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- Content --}}
    <section>
        <img class="" style="object-fit: cover;height: 50vh;width: 100%;" src="{{ asset('assets/images/img5.jpg') }}"
            alt="">
    </section>
    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5 text-center">
                <h1 class="section-title">
                    OUR GROUP
                </h1>
            </div>

            <p class="text-center">
                The business idea was created in 2015 by five young and enthusiastic businessmen in Cebu. Established in
                the
                year 2016 after pursuing a whole year of research and development, finally the idea then came into
                reality.
                Registered in the Philippines Securities and Exchange Commission (SEC) in April 25, 2016, known as 5
                Brad’s
                Dragon Food Corporation (5BDF Corporation) doing business as New York Buffalo Brad’s Hot Wings and
                Wingers
                Unlimited Flavored Wings.
            </p>
        </div>
    </section>

    <section class="py-5">
        <div class="bg-dark">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center py-3">
                        <img src="{{ asset('assets/ceo_hero.jpg') }}" class="rounded w-100" alt="">
                    </div>
                    {{-- <div class="col-md-6 d-none py-2 d-md-flex align-items-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" class="rounded" alt="">
                    </div> --}}
                    <div class="col-md-6 py-2 text-white d-flex justify-content-center flex-column"
                        style="text-align: justify">
                        <h2>
                            ROBIN G. ROBINS III
                        </h2>
                        <small class="pb-5"><i>
                                Chief Executive Officer
                            </i></small>
                        <p>
                            Coming from a family of businessmen, Mr. Robin G. Robins III started his humble beginnings
                            when
                            he had his first training during his teenage years. Learning the ins and outs of business
                            and
                            placing value in his name in order to be a trusted business member in the community. As a
                            leader, he also learned to work hard and to know everybody&apos;s job in the business so he
                            can
                            manage the challenges and overcome the obstacles in the business&apos; daily life. During
                            his early
                            years of leadership, he learned that the harder mistakes he made, the more learning he
                            gained.
                        </p>
                        <p>


                            As Mr. Robin G. Robins III once quoted, <i>“There are multiple pages on how to run a
                                business.
                                First is to know how the business works to be able to reach out to the team, second is
                                to
                                manage your people well, and third is to market your business as much as you can.” </i>Mr.
                            Robin
                            G. Robins III also follows a humble leadership by respecting each employee no matter what
                            position you have in the organization. Balance, Dedication, & Family are our company core
                            values. In order to bring life to the organization there must be,

                        </p>
                        <p>

                            For Balance: equality, mutual respect, work/life balance, & be believer of faith; For
                        </p>
                        <p>
                            Dedication: hard work, result oriented, career growth & work invested;
                        </p>
                        <p>
                            For Family: empathy,
                            team
                            work, open communication, & customer centric.
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
                To bring the internationally acclaimed Flavored Chicken Buffalo Wings in the Philippine market by
                innovating
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

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center">
                                <b>BALANCE</b>
                            </h3>
                            <ul class="card-text">
                                <li>Equality</li>
                                <li>Work-Life Balance</li>
                                <li>Respect</li>
                                <li>Believer of Faith</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center">
                                <b>DEDICATION</b>
                            </h3>
                            <ul class="card-text">
                                <li>Hard Work</li>
                                <li>Work Investment</li>
                                <li>Career Growth</li>
                                <li>Result Oriented</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center">
                                <b>FAMILY ORIENTED</b>
                            </h3>
                            <ul class="card-text">
                                <li>Customer Centric</li>
                                <li>Team work</li>
                                <li>Empathy</li>
                                <li>Open Communication</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="py-5">
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

    </section> --}}

    {{-- Contact Details --}}
    <livewire:contact-details />


    {{-- Footer --}}
    <livewire:footer />
@endsection

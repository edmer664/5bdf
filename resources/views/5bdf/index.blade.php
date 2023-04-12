@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- Carousel --}}
    <livewire:carousel :carousels="$carousels" />
    {{-- Content --}}
    {{-- ? What if Change This to Livewire component --}}
    <section>

        <div class="bg-orange text-white">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h2 style="font-size: 5rem">
                            NY Hot Wings Flagship
                        </h2>
                        <p>
                            New York Buffalo Brad&#x27;s Hot Wings offers ala carte Flavored Chicken Wings, Hotdogs, New
                            York
                            Burgers, Fries, Ribs, Pasta, and more.
                        </p>
                    </div>
                    <div class="col-sm-6" data-aos="fade-left">
                        <img src="{{ asset('assets/images/hotwings_hero.jpg') }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h2 style="font-size: 5rem">
                            NY Sports Lounge Flagship
                        </h2>
                        <p>
                            New York Buffalo Brad&#x27;s Sports Lounge is a combination of fine dining restaurant and a bar
                            where
                            it offers Flavored Chicken Wings, Ribs, Pasta, Pinoy dishes, and Appetizers perfect to pair with
                            Liquors and Spirits .
                        </p>
                    </div>
                    <div class="col-sm-6" data-aos="fade-left">
                        <img src="{{ asset('assets/images/sports_hero.jpg') }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-green text-white">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h2 style="font-size: 5rem">
                            Wingers Flagship
                        </h2>
                        <p>
                            Wingers Unlimited is a restaurant where it serves unlimited dine-in experience and offers
                            Flavored Chicken Wings in five different sauces, rice, flavored Fries, bottomless softdrinks,
                            juices, and soft served ice cream all at an affordable price per head.
                        </p>
                    </div>
                    <div class="col-sm-6" data-aos="fade-left">
                        <img src="{{ asset('assets/images/wingers_hero.jpg') }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Brands Section --}}
    <section class="py-5">
        <div class="container-xl pb-5">

            <h2 class="section-title" data-aos="fade-right">
                Our Brands
            </h2>
        </div>
        <div class="container-xl">

            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-right" data-aos-delay="300">
                    <a href="{{ route('5bdf.hot-wings.index') }}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge">
                            <img class="img-fluid" src="{{ asset('assets/images/hotWingsLogo.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('5bdf.wingers.index') }}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge">
                            <img class="img-fluid" src="{{ asset('assets/images/wingersLogo.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-left" data-aos-delay="300">
                    <a href="{{ route('5bdf.sports.index') }}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge">
                            <img class="img-fluid" src="{{ asset('assets/images/sportsLoungeLogo.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- CEO Section --}}
    <section class="py-5">
        <div class="bg-orange">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12 d-md-none d-flex justify-content-center py-3">
                        <img src="{{ asset('assets/ceo_homepage.jpg') }}" class="rounded w-50" alt="">
                    </div>
                    <div class="col-md-6 py-5 text-white d-flex justify-content-center flex-column">
                        <h2 data-aos="fade-up">
                            ROBIN G. ROBINS III
                        </h2>
                        <small class="mb-3" data-aos="fade-up"><i>
                                CEO
                            </i></small>
                        <p data-aos="fade-up">
                            Coming from a family of businessmen, Mr. Robin G. Robins III started his humble beginnings when
                            he had his first training during his teenage years. Learning the ins & outs of business and
                            placing value in his name in order to be a trusted business member in the community. As a
                            leader, he also learned to work hard and to know everybody&apos;s job in the business so he can
                            manage the challenges and overcome the obstacles in the business&apos; daily life. During his
                            early
                            years of leadership, he learned that the harder mistakes he made, the more learning he gained.
                        </p>
                        <p data-aos="fade-up">
                            As Mr. Robin G. Robins III once quoted, “There are multiple pages on how to run a business.
                            First is to know how the business works to be able to reach out to the team, second is to manage
                            your people well, and third is to market your business as much as you can.” Mr. Robin G. Robins
                            III also follows a humble leadership by respecting each employee no matter what position you
                            have in the organization. Balance, Dedication, & Family are our company core values. In order to
                            bring life to the organization there must be,
                        </p>
                        <p data-aos="fade-up">
                            For Balance: equality, mutual respect, work/life balance, & be believer of faith; For
                            Dedication: hard work, result oriented, career growth & work invested; For Family: empathy, team
                            work, open communication, & customer centric.
                        </p>

                    </div>
                    <div class="col-md-6 d-none py-2 d-md-flex align-items-center">
                        <div>

                            <img src="{{ asset('assets/ceo_homepage.jpg') }}" data-aos="flip-right"
                                class="rounded d-block mx-auto" width="70%" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--     Franchise Section --}}
    <section class="py-5" id="franchise">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    Franchise
                </h2>
            </div>
            <p>
                Grow your business with us through our Franchise package

            </p>


        </div>
        <div class="container-xl">

            <div class="row justify-content-evenly">
                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-right" data-aos-delay="300">
                    <a href="{{ route('5bdf.hot-wings.franchise') }}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge">
                            <img class="img-fluid" src="{{ asset('assets/images/hotWingsLogo.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('5bdf.wingers.franchise') }}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge">
                            <img class="img-fluid" src="{{ asset('assets/images/wingersLogo.png') }}" alt="">
                        </div>
                    </a>
                </div>
                {{--                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-left" data-aos-delay="300"> --}}
                {{--                    <a href="{{ route('5bdf.sports.franchise') }}"> --}}
                {{--                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge"> --}}
                {{--                            <img class="img-fluid" src="{{ asset('assets/images/sportsLoungeLogo.png') }}" --}}
                {{--                                alt=""> --}}
                {{--                        </div> --}}
                {{--                    </a> --}}
                {{--                </div> --}}
            </div>
        </div>
    </section>


    {{-- Franchise Form --}}
    {{-- <livewire:franchise-form /> --}}

    {{-- Contact Us --}}
    <livewire:contact-us />

    <livewire:footer />
@endsection

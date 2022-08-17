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
                        <h2>
                            NY Hot Wings Flagship
                        </h2>
                        <p>
                            New York Buffalo Brad&#x27;s Hot Wings offers ala carte Flavored Chicken Wings, Hotdogs, New
                            York
                            Burgers, Fries, Ribs, Pasta, and more.
                        </p>
                    </div>
                    <div class="col-sm-6" data-aos="fade-left">
                        <img src="{{ asset('assets/images/img1.png') }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h2>
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
                        <img src="{{ asset('assets/images/img1.png') }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-green text-white">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h2>
                            Wingers Flagship
                        </h2>
                        <p>
                            Wingers Unlimited is a restaurant where it serves unlimited dine-in experience and offers
                            Flavored Chicken Wings in five different sauces, rice, flavored Fries, bottomless softdrinks,
                            juices, and soft served ice cream all at an affordable price per head.
                        </p>
                    </div>
                    <div class="col-sm-6" data-aos="fade-left">
                        <img src="{{ asset('assets/images/img1.png') }}" class="img-fluid rounded" alt="">
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
                            <img class="img-fluid" src="{{ asset('assets/images/HotWingsLogo.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('5bdf.wingers.index') }}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge">
                            <img class="img-fluid" src="{{ asset('assets/images/WingersLogo.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-left" data-aos-delay="300">
                    <a href="{{ route('5bdf.sports.index') }}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge">
                            <img class="img-fluid" src="{{ asset('assets/images/SportsLoungeLogo.png') }}" alt="">
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
                        <img src="{{ asset('assets/images/ceo.jpg') }}" class="rounded w-100" alt="">
                    </div>
                    <div class="col-md-6 py-5 text-white d-flex justify-content-center flex-column">
                        <h2 data-aos="fade-up">
                            ROBIN G. ROBINS III
                        </h2>
                        <small class="mb-3" data-aos="fade-up"><i>
                                CEO
                            </i></small>
                        <p data-aos="fade-up">
                            Coming from a family of businessmen, Mr. Robin G. Robins III started
                            his humble beginnings when he had his first training during his teenage
                            years. He was given tasks to do and taught to learn by himself. He
                            learned to put value in his name in order to be a trusted business
                            member in the community. As a leader, he also learned to work hard
                            and know everybody&#x27;s job in the business so he&#x27;ll be much wiser than
                            anybody else. During his early years of leadership, he learned that the
                            harder mistakes he made, the more learnings he gained. He always
                            brings his generals with him, ready to conquer the demands of the
                            business.
                        </p>
                        <p data-aos="fade-up">
                            <i>
                                As Mr. Robin G. Robins III quoted, “There are multiple pages on how to
                                run a business. First is by knowing everyone&#x27;s job, second is actually
                                reaching out and marketing your business as much as you can, and
                                third is managing your people well.”
                            </i>
                        </p>
                        <p data-aos="fade-up">

                            Mr. Robin G. Robins III follows a humble leadership by respecting each
                            employees no matter what position you have in the organization. He
                            believes that it is also a way of lifting everyone&#x27;s morale.
                            Lastly, Mr. Robin G. Robins III shared that during the trying times, he
                            always sees to it to keep his team who have contributed something for
                            the success of the company. As Mr. Robins III quotes, “It takes sacrifice
                            to keep everyone in the organization but it pays off as we&#x27;ve retained
                            most of the people despite the circumstances.”

                        </p>
                    </div>
                    <div class="col-md-6 d-none py-2 d-md-flex align-items-center">
                        <img src="{{ asset('assets/images/ceo.jpg') }}" data-aos="flip-right" class="rounded"
                            height="115%" width="100%" style="object-fit: cover" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Franchise Section --}}
    <section class="py-5" id="franchise">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    Franchise
                </h2>
            </div>
            <p>
                Grow your business with us thru our Franchise package

            </p>


        </div>
        <div class="container-xl">

            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-right" data-aos-delay="300">
                    <a href="{{ route('5bdf.hot-wings.franchise') }}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge">
                            <img class="img-fluid" src="{{ asset('assets/images/HotWingsLogo.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('5bdf.wingers.franchise') }}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge">
                            <img class="img-fluid" src="{{ asset('assets/images/WingersLogo.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 p-3" data-aos="fade-left" data-aos-delay="300">
                    <a href="{{ route('5bdf.sports.franchise') }}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100 h-enlarge">
                            <img class="img-fluid" src="{{ asset('assets/images/SportsLoungeLogo.png') }}"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- Franchise Form --}}
    <livewire:franchise-form />

    {{-- Contact Us --}}
    <livewire:contact-us />

    <livewire:footer />
@endsection

@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:wingers-navbar />

    {{-- Carousel --}}
    <livewire:carousel :carousels="$carousels" />
    {{-- Content --}}
    {{-- ? What if Change This to Livewire component --}}
    <section class="d-md-none">


        <div class="bg-green text-white">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center">
                        <h2>
                            Wingers Unlimited
                        </h2>
                        <p>
                            Wingers Unlimited is a restaurant where it serves unlimited dine-in experience and offers
                            Flavored Chicken Wings in five different sauces, rice, flavored Fries, bottomless softdrinks,
                            juices, and soft served ice cream all at an affordable price per head.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/images/img1.png') }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .main {
            padding: 60px 60px 0px 60px;
            height: 100vh;
            position: relative;
            width: 100%;
        }



        .filled-text {
            position: absolute;
            top: 200px;
            left: 100px;
            z-index: 1;
            font-size: 100px;
            font-weight: 600;

        }

        .outline-text {
            position: absolute;
            top: 200px;
            left: 100px;
            z-index: 3;
            font-size: 100px;
            font-weight: 600;
            -webkit-text-stroke-width: 4px;
            -webkit-text-stroke-color: ghostwhite;
            color: transparent;

        }

        .hero {
            position: absolute;
            top: 50px;
            left: 600px;
            z-index: 2;
            height: 400px;
            width: auto;
        }
    </style>
    <section class="bg-green d-none d-md-block">
        <section id="rollTrigger" class="text-white">
            <div class="items">

                <h1 style="width: 5000px; font-weight: bold;z-index: 300; font-size: 4rem" class="py-4 roll">
                    WINGERS UNLIMITED | WINGERS UNLIMITED | WINGERS UNLIMITED |
                    WINGERS
                    UNLIMITED | WINGERS UNLIMITED | WINGERS
                </h1>
                <div class="container-xl ">
                    <div class="text-white fs-2 text-center" style="z-index: 300;">
                        Wingers Unlimited is a restaurant where it serves unlimited dine-in experience and offers
                        Flavored Chicken Wings in five different sauces, rice, flavored Fries, bottomless softdrinks,
                        juices, and soft served ice cream all at an affordable price per head.
                    </div>
                </div>
            </div>
        </section>

    </section>
    <section class="main d-none d-md-block">
        <div class="container">
            <h2 class="filled-text">WINGERS UNLIMITED</h2>
            <h2 class="outline-text">WINGERS UNLIMITED</h2>
            <img class="image hero" src="{{ asset('assets/images/img1.png') }}">
        </div>
    </section>



    {{-- Partners --}}
    <section class="pb-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-6 col-md-3 px-5 d-flex align-items-center">
                    <img src="{{ asset('assets/images/lalamove.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-3 px-5 d-flex align-items-center">
                    <img src="{{ asset('assets/images/eatigo.svg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-3 px-5 d-flex align-items-center">
                    <img src="{{ asset('assets/images/grab.svg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-3 px-5 d-flex align-items-center">
                    <img src="{{ asset('assets/images/foodpanda.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    {{-- Our Products --}}
    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    Our Products
                </h2>
            </div>
            <div class="row">
                @if (count($products) > 0)
                    @foreach ($products as $product)
                        <div class="col-md-4 col-sm-6 p-2" data-aos="fade-up">
                            <div class="card shadow">
                                <div class="card-body">
                                    <img src="{{ asset('storage/products/' . $product->image) }}"
                                        style="height: 300px;width: 100%;object-fit: cover" class="img-fluid py-3"
                                        alt="">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12">
                        <h3 class="text-center py-5">
                            No Products
                        </h3>
                    </div>
                @endif

            </div>
            @if (request()->all != 1)
                @if (count($products) == 6)
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <div class="text-center">
                                <a href="{{ route('5bdf.hot-wings.index', ['all' => true]) }}"
                                    class="btn bg-greeb text-white">
                                    View More
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </section>

    <livewire:contact-form />

    {{-- Contact section --}}
    <livewire:contact-details />





    {{-- Footer --}}

    <livewire:footer />
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
    <script>
        rellax = new Rellax('.rellax');

        gsap.registerPlugin(ScrollTrigger);
        // roll text .roll
        gsap.to('.roll', {
            scrollTrigger: {
                trigger: '#rollTrigger',
                start: 'top 20%',
                end: 'bottom 10%',
                scrub: true,

                pin: ".items",
            },
            x: -1000,
            ease: 'power2'
        });


        gsap.to(".filled-text, .outline-text", {
            scrollTrigger: {
                trigger: ".filled-text, .outline-text",
                start: "top bottom",
                end: "bottom top",
                scrub: 1
            },
            x: 200
        })

        gsap.to(".image", {
            scrollTrigger: {
                trigger: ".image",
                start: "top bottom",
                end: "bottom top",
                scrub: 1,

            },
            x: -250,

        })
    </script>
@endpush

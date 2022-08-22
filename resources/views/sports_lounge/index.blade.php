@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:sports-navbar />
    {{-- Carousel --}}
    <livewire:carousel :carousels="$carousels" />
    <section>


        <div class="bg-red text-white d-none">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center">
                        <h2>
                            NY Buffalo Brads Hot Wings
                        </h2>
                        <p>
                            New York Buffalo Brad’s Sports Lounge is a combination of fine dining restaurant and a bar where
                            it offers Flavored Chicken Wings, Ribs, Pasta, Pinoy dishes, and Appetizers perfect to pair with
                            Liquors and Spirits .
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
        .circle-red{
            background-color: #d10000;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: 200px;
            left: 100px;
            z-index: 1;
        }

        .title{
            font-size: 3rem;
        }
        .text{
            font-size: 1.5rem;
        }
    </style>

    <section>
        <div style="height: 100vh;position: relative;">
            <div class="circle-red">
            </div>
        </div>
        <div class="bg-red py-5">
            <div class="container-xl">
                <div class="content">

                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title">
                                NY Buffalo Brads Sports Lounge
                            </h2>
    
                            <p class="text">
                                New York Buffalo Brad’s Sports Lounge is a combination of fine dining restaurant and a bar where
                                it offers Flavored Chicken Wings, Ribs, Pasta, Pinoy dishes, and Appetizers perfect to pair with
                                Liquors and Spirits .
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/sl.png') }}" class="img-fluid rounded" id="hero" alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="color-change">

                </div>
            </div>
        </div>


    </section>

    {{-- Partners --}}
    <section id="partners" class="py-5">
        <div class="container-xl">
            <div class="row">
                <div class="col px-5 d-flex align-items-center">
                    <img src="{{ asset('assets/images/lalamove.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col px-5 d-flex align-items-center">
                    <img src="{{ asset('assets/images/eatigo.svg') }}" alt="" class="img-fluid">
                </div>
                <div class="col px-5 d-flex align-items-center">
                    <img src="{{ asset('assets/images/grab.svg') }}" alt="" class="img-fluid">
                </div>
                <div class="col px-5 d-flex align-items-center">
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


    <livewire:contact-details />
    {{-- Footer --}}

    <livewire:footer />
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>

    {{-- onscroll .circle-red cover entire div --}}
    <script>
        gsap.registerPlugin(ScrollTrigger);
        gsap.to('.circle-red', {
            scrollTrigger: {
                trigger: '.circle-red',
             
                start: 'bottom 80%',
                end: 'top 50%',
                scrub: true,
            },
            width: '100%',
            height: '100%',
            borderRadius: '0%',
            top: '0',
            left: '0',
            zIndex: '0',
            duration: 2,
            ease: 'SlowMo.ease',
        });

        gsap.from('.title',{
            scrollTrigger: {
                trigger: '.title',
                
                start: 'top bottom',
                end: 'bottom 50%',
                scrub: true,
            },
            x: '-100%',
            duration: 1,
            ease: 'SlowMo.ease',
        })

        gsap.from('.text',{
            scrollTrigger: {
                trigger: '.text',
                
                start: 'top bottom',
                end: 'bottom 50%',
                scrub: true,
            },
            y: '100%',
            duration: 1,
            ease: 'SlowMo.ease',
        })
        

        gsap.to('.title',{
            scrollTrigger: {
                trigger: '.color-change',
                
                start: 'top bottom',
                end: 'bottom 50%',
                pin:".content",
                scrub: true,
            },
            color: '#fff',
            delay: 1,
            duration: 1,
            ease: 'SlowMo.ease',
        })

        gsap.to('.text',{
            scrollTrigger: {
                trigger: '.color-change',
                
                start: 'top bottom',
                end: 'bottom 50%',
                pin:".content",
                scrub: true,
            },
            color: '#fff',
            delay: 1,
            duration: 1,
            ease: 'SlowMo.ease',
        })

        gsap.to('#hero',{
            scrollTrigger: {
                trigger: '#partners',
                
                start: 'top bottom',
                end: 'bottom 50%',
                scrub: true,
            },
            x:100,
            y:-100
        })

    </script>
@endpush

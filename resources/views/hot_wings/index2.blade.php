@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:hot-navbar />
    {{-- Carousel --}}
    <livewire:carousel :carousels="$carousels" />
    <section class="bg-orange text-white">

        <div class="container-xl">
            <div class=" py-5" style="">
                <div class="rellax col-md-6 d-flex flex-column justify-content-center" data-rellax-speed="-5">
                    <h2 style="font-size: 4.5rem;" class="fsw-black">
                        NY Buffalo Brads Hot Wings
                    </h2>
                    <p style="font-size: 1.5rem">
                        New York Buffalo Brad’s Hot Wings offers ala carte Flavored Chicken Wings, Hotdogs, New York
                        Burgers, Fries, Ribs, Pasta, and more.
                    </p>
                </div>
            </div>



            <div class="row justify-content-center">
                <div class="d-none d-md-block col-sm-6">

                </div>
                <div class="rellax col-sm-6 floating" data-rellax-speed="6">

                    <img src="{{ asset('parallax/burger.png') }}" class="img-fluid rounded" alt="">
                </div>
            </div>


        </div>
        <div class="d-none d-md-block" style="height: 100vh">

        </div>
    </section>
    {{-- section with fixed bg parallax --}}
    <section class="hw-banner" style="background-image: url('{{ asset('parallax/banner2.jpg') }}')">

    </section>

    {{-- Partners --}}
    <section class="py-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-sm-3 col-6 px-5 d-flex align-items-center">
                    <img src="{{ asset('assets/images/lalamove.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-3 col-6 px-5 d-flex align-items-center">
                    <img src="{{ asset('assets/images/eatigo.svg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-3 col-6 px-5 d-flex align-items-center">
                    <img src="{{ asset('assets/images/grab.svg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-3 col-6 px-5 d-flex align-items-center">
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
            <div class="row justify-content-evenly">
                @if (count($products) > 0)
                    @foreach ($products as $product)
                        <div class="col-md-4 col-sm-6 p-2" data-aos="fade-up" style="width: max-content">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="mx-auto" style="width: max-content">
                                        <img src="{{ asset('storage/products/' . $product->image) }}"
                                            style="height: 300px;width: 300px;object-fit: cover" class="img-fluid py-3"
                                            alt="">
                                        <h5 class="card-title">{{ $product->name }}</h5>

                                    </div>
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
                                    class="btn bg-orange text-white">
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
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>

    <script>
        var rellax = new Rellax('.rellax');


        // disable rellax on mobile
        // on screen size change
        window.addEventListener('resize', function() {
            if (window.innerWidth < 768) {
                rellax.destroy();
            } else {
                rellax.refresh();
            }
        });
        // on initial load
        if (window.innerWidth < 768) {
            rellax.destroy();
        } else {
            rellax.refresh();
        }
    </script>
@endpush

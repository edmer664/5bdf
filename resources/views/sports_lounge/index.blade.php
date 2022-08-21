@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:sports-navbar />
    {{-- Carousel --}}
    <livewire:carousel :carousels="$carousels" />
    <section>


        <div class="bg-red text-white">
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

    {{-- Partners --}}
    <section class="py-5">
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
                        <div class="col-md-4 col-sm-6">
                            <img src="{{ asset('storage/products/' . $product->image) }}" class="img-fluid py-3"
                                alt="">
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
            @if (count($products) == 6)
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="text-center">
                            <a href="{{ route('5bdf.wingers.index', ['all' => true]) }}" class="btn bg-red text-white">
                                View More
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <livewire:contact-form />


    <livewire:contact-details />
    {{-- Footer --}}

    <livewire:footer />
@endsection

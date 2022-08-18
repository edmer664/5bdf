@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:hot-navbar />
    {{-- Carousel --}}
    <livewire:carousel :carousels="$carousels" />
    <section>


        <div class="bg-orange text-white">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center" data-aos="fade-right">
                        <h2>
                            NY Buffalo Brads Hot Wings
                        </h2>
                        <p>
                            New York Buffalo Brad’s Hot Wings offers ala carte Flavored Chicken Wings, Hotdogs, New York
                            Burgers, Fries, Ribs, Pasta, and more.
                        </p>
                    </div>
                    <div class="col-sm-6" data-aos="fade-left">
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
                            <a href="{{ route('5bdf.wingers.index', ['all' => true]) }}" class="btn bg-orange text-white">
                                View More
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    {{-- Franchise Form --}}
    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    Let us know what you think
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6 py-2">
                    <form action="">
                        <div class="mb-3">
                            <label for="type" class="form-label">Lorem Ipsum</label>
                            <select class="form-control" name="type" id="type">
                                <option>Lorem</option>
                                <option>Ipsum</option>
                                <option>Dolor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="" id=""
                                aria-describedby="emailHelpId" placeholder="">
                            <small id="emailHelpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Message</label>
                            <textarea class="form-control" name="" id="" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn bg-green text-white">Submit</button>
                    </form>
                </div>
                <div class="col-md-6 py-2">
                    <div class="card bg-orange text-white py-5">
                        <p class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque quam reprehenderit
                            distinctio officiis, voluptatem quod voluptate autem eveniet, inventore, explicabo consequuntur
                            repellat odit sint dolores! Aperiam numquam ad magni. At sed cum error provident, quas
                            perferendis rem voluptates molestiae.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <livewire:contact-details />
    {{-- Footer --}}

    <livewire:footer />
@endsection

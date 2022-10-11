@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:wingers-navbar />

    {{-- Carousel --}}
    <livewire:carousel :carousels="$carousels" />

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
            {{-- <div class="pb-5">
                <h2 class="section-title">
                    Category 1
                </h2>
            </div> --}}
            <div class="" id="promotion-section">
                @if (count($promotions) > 0)
                    @foreach ($promotions as $promotion)
                        <div class="bg-green mb-3" data-aos="fade-up"  style="border-radius: 20px">
                            <div class="container-xl">
                                <div class="row">
                                    <div class="col-md-6 d-flex py-3">
                                        <div class="w-75 d-none d-md-block">
                                            <img src="{{ asset('storage/promotions/' . $promotion->image) }}"
                                                class="img-fluid" alt="" style="border-radius: 20px; scale: 95%">
                                        </div>
                                        <div class="d-md-none mx-auto">
                                            <img src="{{ asset('storage/promotions/' . $promotion->image) }}"
                                                class="img-fluid" alt="" style="border-radius: 20px">
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6 d-none py-2 d-md-flex align-items-center">
                                <img src="{{ asset('assets/images/ceo.png') }}" class="rounded" alt="">
                            </div> --}}
                                    <div class="col-md-6 py-2 text-white d-flex justify-content-center flex-column">
                                        <h2>
                                            <u>
                                                {{ $promotion->title }}
                                            </u>
                                        </h2>

                                        <p>
                                            {{ $promotion->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center">
                        <h2>
                            No Promotions at the moment
                        </h2>
                    </div>
                @endif

            </div>

            @if (count($promotions) > 0)
                @if ($all == true)
                    {{-- green view more btn --}}
                    <div class="row justify-content-center">
                        <div class="col-4 text-center">
                            <a href="{{route('5bdf.wingers.promotions',['all' => 'true'])}}" class="btn bg-green text-white">
                                View More
                            </a>
                        </div>
                    </div>
                @endif
            @endif
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

@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:wingers-navbar />

    {{-- Carousel --}}
    <livewire:carousel :carousels="$carousels" />

    <section class="py-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center flex-column">
                    <div class="pb-5">
                        <h2 class="section-title">
                            Franchise With Us
                        </h2>
                    </div>
                    <p class="fs-5">
                        Unlimited happiness? We got you!
                        Take your business to the next level.
                        Franchise with Wingers Unlimited Flavored Wings.
                        Experience our concept of unlimited chicken & rice + fries.
                        <br>
                        <br>
                        Join our young, dynamic, and aggressive brand.
                        A crowd favorite, for the yourng and young at heart.
                        Sign up with us and start your franchise now!
                        <br>
                        <br>
                        Get started by filling in this <a href="https://forms.gle/X4Jo7NKoZuyDjor2A" >form</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" style="object-fit: contain" src="{{ asset('assets/images/img4.jpg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="row p-5">
        <div class="pb-5">
            <h2 class="section-title">
                Our Package
            </h2>
        </div>
        <div class="col-md-6 py-1">
            <img src="{{asset('assets/franchise/wu1.png')}}" alt="" class="img-fluid" data-lightbox="{{asset('assets/franchise/wu1.png')}}  ">
        </div>

        <div class="col-md-6 py-1">
            <img src="{{asset('assets/franchise/wu2.png')}}" alt="" class="img-fluid" data-lightbox="{{asset( 'assets/franchise/wu2.png')}}  ">
        </div>

        <div class="col-md-12 py-2 text-center">
            <a href="{{route('5bdf.wingers.downloadWUBrochure')}}" class="btn bg-green text-white">
                Download Brochure
            </a>
        </div>

    </div>

    {{-- Inclusions --}}
{{--    <section class="py-5">--}}
{{--        <div class="container-xl">--}}
{{--            <div class="row">--}}
{{--                @if ($inclusions->count() > 0)--}}
{{--                    @foreach ($inclusions as $inclusion)--}}
{{--                        <div class="col-md-4">--}}
{{--                            <livewire:inclusion-card :inclusion="$inclusion" />--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                @else--}}
{{--                    --}}{{-- render 6 times --}}
{{--                    @for ($i = 0; $i < 6; $i++)--}}
{{--                        <div class="col-md-4 p-3">--}}
{{--                            <div class="card bg-green text-white">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h3 class="card-title">--}}
{{--                                        Inclusion #--}}
{{--                                    </h3>--}}
{{--                                    <p class="card-text">--}}
{{--                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A iusto recusandae eius--}}
{{--                                        eligendi--}}
{{--                                        aperiam,--}}
{{--                                        reprehenderit--}}
{{--                                        pariatur doloremque accusamus dolorem? Quidem unde cupiditate suscipit! Assumenda--}}
{{--                                        illum ea--}}
{{--                                        sed laboriosam--}}
{{--                                        quam--}}
{{--                                        voluptas.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endfor--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <livewire:franchise-form :brand="'Wingers Unlimited'" />--}}
    <livewire:contact-us />
    <livewire:footer />
@endsection

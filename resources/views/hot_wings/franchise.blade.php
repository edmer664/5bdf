@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:hot-navbar />
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
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A iusto recusandae eius eligendi aperiam,
                        reprehenderit
                        pariatur doloremque accusamus dolorem? Quidem unde cupiditate suscipit! Assumenda illum ea sed
                        laboriosam
                        quam
                        voluptas.
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" style="object-fit: contain" src="{{ asset('assets/images/img4.jpg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Inclusions --}}
    <section class="py-5">
        <div class="container-xl">
            <div class="row">
                @if ($inclusions->count() > 0)
                    @foreach ($inclusions as $inclusion)
                        <div class="col-md-4">
                            <livewire:inclusion-card :inclusion="$inclusion" />
                        </div>
                    @endforeach
                @else
                    {{-- render 6 times --}}
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-md-4 p-3">
                            <div class="card bg-orange text-white">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Inclusion #
                                    </h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A iusto recusandae eius
                                        eligendi
                                        aperiam,
                                        reprehenderit
                                        pariatur doloremque accusamus dolorem? Quidem unde cupiditate suscipit! Assumenda
                                        illum ea
                                        sed laboriosam
                                        quam
                                        voluptas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endfor
                @endif
            </div>
        </div>
    </section>

    <livewire:franchise-form :brand="'NY Buffalo Brads Hot Wings'" />

    <livewire:contact-us />
    <livewire:footer :fb="'https://www.facebook.com/nybuffalobrads/'" />
@endsection

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
                <div class="col-md-4 p-3">
                    <div class="card bg-green text-white">
                        <div class="card-body">
                            <h3 class="card-title">
                                Inclusion #
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A iusto recusandae eius eligendi
                                aperiam,
                                reprehenderit
                                pariatur doloremque accusamus dolorem? Quidem unde cupiditate suscipit! Assumenda illum ea
                                sed laboriosam
                                quam
                                voluptas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card bg-green text-white">
                        <div class="card-body">
                            <h3 class="card-title">
                                Inclusion #
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A iusto recusandae eius eligendi
                                aperiam,
                                reprehenderit
                                pariatur doloremque accusamus dolorem? Quidem unde cupiditate suscipit! Assumenda illum ea
                                sed laboriosam
                                quam
                                voluptas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card bg-green text-white">
                        <div class="card-body">
                            <h3 class="card-title">
                                Inclusion #
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A iusto recusandae eius eligendi
                                aperiam,
                                reprehenderit
                                pariatur doloremque accusamus dolorem? Quidem unde cupiditate suscipit! Assumenda illum ea
                                sed laboriosam
                                quam
                                voluptas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card bg-green text-white">
                        <div class="card-body">
                            <h3 class="card-title">
                                Inclusion #
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A iusto recusandae eius eligendi
                                aperiam,
                                reprehenderit
                                pariatur doloremque accusamus dolorem? Quidem unde cupiditate suscipit! Assumenda illum ea
                                sed laboriosam
                                quam
                                voluptas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card bg-green text-white">
                        <div class="card-body">
                            <h3 class="card-title">
                                Inclusion #
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A iusto recusandae eius eligendi
                                aperiam,
                                reprehenderit
                                pariatur doloremque accusamus dolorem? Quidem unde cupiditate suscipit! Assumenda illum ea
                                sed laboriosam
                                quam
                                voluptas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card bg-green text-white">
                        <div class="card-body">
                            <h3 class="card-title">
                                Inclusion #
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A iusto recusandae eius eligendi
                                aperiam,
                                reprehenderit
                                pariatur doloremque accusamus dolorem? Quidem unde cupiditate suscipit! Assumenda illum ea
                                sed laboriosam
                                quam
                                voluptas.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <livewire:franchise-form :brand="'Wingers Unlimited'" />
    <livewire:contact-us />
    <livewire:footer />
@endsection

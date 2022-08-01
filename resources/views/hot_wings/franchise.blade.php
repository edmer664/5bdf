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
                <div class="col-md-4 p-3">
                    <div class="card bg-orange text-white">
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
                    <div class="card bg-orange text-white">
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
                    <div class="card bg-orange text-white">
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
                    <div class="card bg-orange text-white">
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
                    <div class="card bg-orange text-white">
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
                    <div class="card bg-orange text-white">
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

    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    Franchise Form
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

    <livewire:contact-us />
    <livewire:footer />
@endsection

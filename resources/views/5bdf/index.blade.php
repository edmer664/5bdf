@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- Carousel --}}
    {{-- TODO:Add Connection to Admin Panel Replace Static Image --}}
    <div class="w-100 ">
        <div id="hero" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#hero" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#hero" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/images/img3.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/images/img3.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/images/img3.jpg') }}" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- Content --}}
    {{-- ? What if Change This to Livewire component --}}
    <section>

        <div class="bg-orange text-white">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center">
                        <h2>
                            NY Hot Wings Flagship
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sapiente voluptatem magni
                            necessitatibus
                            fugit autem animi nihil ut perferendis accusamus.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/images/img1.png') }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center">
                        <h2>
                            NY Hot Wings Flagship
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sapiente voluptatem magni
                            necessitatibus
                            fugit autem animi nihil ut perferendis accusamus.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/images/img1.png') }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-green text-white">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-sm-6 d-flex flex-column justify-content-center">
                        <h2>
                            NY Hot Wings Flagship
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sapiente voluptatem magni
                            necessitatibus
                            fugit autem animi nihil ut perferendis accusamus.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/images/img1.png') }}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Brands Section --}}
    <section class="py-5">
        <h2 class="section-title container-xl pb-5">
            Our Brands
        </h2>
        <div class="container-xl">

            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 p-3">
                    <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100">
                        <img class="img-fluid" src="{{ asset('assets/images/HotWingsLogo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 p-3">
                    <a href="{{route('5bdf.wingers.index')}}">
                        <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100">
                            <img class="img-fluid" src="{{ asset('assets/images/WingersLogo.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 p-3">
                    <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100">
                        <img class="img-fluid" src="{{ asset('assets/images/SportsLoungeLogo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CEO Section --}}
    <section class="py-5">
        <div class="bg-orange">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12 d-md-none d-flex justify-content-center py-3">
                        <img src="{{ asset('assets/images/ceo.png') }}" class="rounded w-100" alt="">
                    </div>
                    <div class="col-md-6 py-2 text-white d-flex justify-content-center flex-column">
                        <h2>
                            John Doe
                        </h2>
                        <small><i>
                            CEO
                        </i></small>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sapiente voluptatem magni
                            necessitatibus
                            fugit autem animi nihil ut perferendis accusamus.
                        </p>
                    </div>
                    <div class="col-md-6 d-none py-2 d-md-flex align-items-center">
                        <img src="{{ asset('assets/images/ceo.png') }}" class="rounded" height="120%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Franchise Section --}}
    <section class="py-5">
        <div class="container-xl">
            <h2 class="section-title pb-5">
                Franchise
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, molestias dolorem. Blanditiis laborum ab
                distinctio. Deserunt quaerat nemo laudantium quasi eius doloribus, aperiam dignissimos itaque recusandae
                enim similique commodi asperiores id ipsum pariatur velit, voluptatum maiores deleniti natus ducimus!
                Necessitatibus ducimus, at totam fugiat maxime numquam modi delectus assumenda porro?

            </p>


        </div>
        <div class="container-xl">

            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 p-3">
                    <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100">
                        <img class="img-fluid" src="{{ asset('assets/images/HotWingsLogo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 p-3">
                    <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100">
                        <img class="img-fluid" src="{{ asset('assets/images/WingersLogo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 p-3">
                    <div class="card shadow justify-content-center d-flex align-items-center w-100 h-100">
                        <img class="img-fluid" src="{{ asset('assets/images/SportsLoungeLogo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Franchise Form --}}
    <section class="py-5">
        <div class="container-xl">
            <h2 class="section-title pb-5">
                Franchise Form
            </h2>
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

    {{-- Contact Us --}}
    <livewire:contact-us />

    <livewire:footer />
@endsection

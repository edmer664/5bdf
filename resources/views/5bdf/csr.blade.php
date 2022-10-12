@extends('layouts.main')

@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- Content --}}
    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    Wingers Unlimited
                </h2>
            </div>
            @if (count($wingers) > 0)
                <div class="row">
                    @foreach ($wingers as $winger)
                        <div class="col-md-4 col-sm-6">
                            <img src="{{ asset('storage/csr/' . $winger->path) }}"
                                class="rounded img-fluid mx-auto d-block my-3" alt=""
                                style="height: 300px; width: 300px; object-fit: cover; object-position: center">
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-md-4 col-sm-6">
                            <img src="{{ asset('assets/images/img4.jpg') }}" class="rounded img-fluid mx-auto d-block my-3"
                                alt="" style="height: 300px; width: 300px; object-fit: cover; object-position: center">
                        </div>
                    @endfor

                </div>
            @endif

        </div>
    </section>

    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    NY Buffalo Brads Hot Wings
                </h2>
            </div>
            @if (count($hot_wings) > 0)
                <div class="row">
                    @foreach ($hot_wings as $hot_wing)
                        <div class="col-md-4 col-sm-6">
                            <img src="{{ asset('storage/csr/' . $hot_wing->path) }}"
                                class="rounded img-fluid mx-auto d-block my-3" alt=""
                                style="height: 300px; width: 300px; object-fit: cover; object-position: center" srcset="">
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-md-4 col-sm-6">
                            <img src="{{ asset('assets/images/img4.jpg') }}" c
                                class="rounded img-fluid mx-auto d-block my-3" alt=""
                                style="height: 300px; width: 300px; object-fit: cover; object-position: center">
                        </div>
                    @endfor

                </div>
            @endif

        </div>
    </section>

    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h2 class="section-title">
                    NY Buffalo Brads Sports Lounge
                </h2>
            </div>
            @if (count($sports) > 0)
                <div class="row">
                    @foreach ($sports as $sports_lounge)
                        <div class="col-md-4 col-sm-6">
                            <img src="{{ asset('storage/csr/' . $sports_lounge->path) }}"
                                class="rounded img-fluid mx-auto d-block my-3" alt=""
                                style="height: 300px; width: 300px; object-fit: cover; object-position: center">
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-md-4 col-sm-6">
                            <img src="{{ asset('assets/images/img4.jpg') }}" class="rounded img-fluid mx-auto d-block my-3"
                                alt="" style="height: 300px; width: 300px; object-fit: cover; object-position: center">
                        </div>
                    @endfor

                </div>
            @endif

        </div>
    </section>

    {{-- Contact Us --}}
    <livewire:contact-us />

    {{-- Footer --}}
    <livewire:footer />
@endsection

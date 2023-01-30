@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />
    <livewire:wingers-navbar />

    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h1 class="section-title">
                    Branches
                </h1>
            </div>
            {{-- <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tempore ipsa minima, expedita provident
                quod repellat labore nihil, quam velit sint harum ab asperiores? Vitae, reprehenderit architecto aspernatur
                dolor dolorem odit maiores, minima suscipit laboriosam eligendi numquam enim est eum, eius iste molestias
                accusantium! Et repudiandae laboriosam molestiae delectus pariatur.
            </p> --}}

        </div>
    </section>
    <section class="pb-5">
        <div class="container-xl">
            <div class="row ">
                <div class="col-md-4 col-sm-6 p-3">

                    <img src="{{ asset('assets/stores/wu/store1.jpg') }}" class="img-fluid py-3" alt="" data-lightbox="{{asset('assets/stores/wu/store1.jpg')}}"
                        srcset="">
                    <h6 class="fw-bold">
                        Wingers Unlimited - Ayala Central Bloc
                    </h6>

                </div>
                <div class="col-md-4 col-sm-6 p-3">

                    <img src="{{ asset('assets/stores/wu/store2.jpg') }}" class="img-fluid py-3" alt="" data-lightbox="{{asset('assets/stores/wu/store2.jpg')}}"
                        srcset="">
                    <h6 class="fw-bold">
                        Wingers Unlimited - Robinsons Galleria
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 p-3">


                    <img src="{{ asset('assets/stores/wu/store3.jpg') }}" class="img-fluid py-3" alt="" data-lightbox="{{asset('assets/stores/wu/store3.jpg')}}"
                        srcset="">
                    <h6 class="fw-bold">
                        Wingers Unlimited - Mactan Town Center
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 p-3">

                    <img src="{{ asset('assets/stores/wu/store4.jpg') }}" class="img-fluid py-3" alt="" data-lightbox="{{asset('assets/stores/wu/store4.jpg')}}"
                        srcset="">
                    <h6 class="fw-bold">
                        Wingers Unlimited - Mango
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 p-3">

                    <img src="{{ asset('assets/stores/wu/store5.jpg') }}" class="img-fluid py-3" alt="" data-lightbox="{{asset('assets/stores/wu/store5.jpg')}}"
                        srcset="">
                    <h6 class="fw-bold">
                        Wingers Unlimited - Parkmall
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 p-3">

                    <img src="{{ asset('assets/stores/wu/store6.jpg') }}" class="img-fluid py-3" alt="" data-lightbox="{{asset('assets/stores/wu/store6.jpg')}}"
                        srcset="">
                    <h6 class="fw-bold">
                        Wingers Unlimited - Talamban
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 p-3">

                    <img src="{{ asset('assets/stores/wu/ormoc.jpg') }}" class="img-fluid py-3" alt="" data-lightbox="{{asset('assets/stores/wu/ormoc.jpg')}}"
                         srcset="">
                    <h6 class="fw-bold">
                        Wingers Unlimited - Ormoc
                    </h6>
                </div>
            </div>
        </div>
    </section>


    {{-- Map Section --}}

    <section class="py-5">
        <div class="container-xl">
            <div class="pb-5">
                <h1 class="section-title">
                    We are located at
                </h1>
            </div>
            <div class="row">
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.1355038789925!2d123.90744199999999!3d10.331039299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999ac3bd3fe19%3A0xc4b18ef6edec2055!2sWingers%20Unlimited!5e0!3m2!1sen!2sph!4v1672387772248!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.3916498360813!2d123.8957555!3d10.310507900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9994f6b9af3a7%3A0x49e6efa4ee720763!2sWingers%20Unlimited%20-%20Gen%20Max%20Mango!5e0!3m2!1sen!2sph!4v1672387833467!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3925.4676688884892!2d123.909497!3d10.3044068!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9994a97adb687%3A0x1613417b8541121d!2sWingers%20Unlimited!5e0!3m2!1sen!2sph!4v1672387850212!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3924.916004910312!2d123.9126817!3d10.3486012!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99957ed8a82ed%3A0x97d3e134d75a57d9!2sWingers%20Unlimited%20Chicken!5e0!3m2!1sen!2sph!4v1672387878010!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.56556293181!2d123.96584209999999!3d10.2965448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9991ceca88e97%3A0xf8cf1afd00df6bc2!2sUnlimited%20Wings%20%26%20Rice%20%2B%20Rice%20(Wingers%20Unlimited)!5e0!3m2!1sen!2sph!4v1672387891852!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d490.65089369912073!2d123.9347886!3d10.3253006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999bbe92c6a8f%3A0xb24b106e26e855fc!2sWingers%20Unlimited!5e0!3m2!1sen!2sph!4v1672387907389!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col m-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3916.380368000821!2d124.6077187!3d11.0100618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3307f1720241dd1f%3A0x564d9854ccbaef12!2sWingers%20Unlimited%20-%20SM%20Center%20Ormoc!5e0!3m2!1sen!2sph!4v1672387922840!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <livewire:contact-us />
    <livewire:footer />
@endsection

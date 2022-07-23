<div>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-xl">
            <div class="row justify-content-between w-100 g-0">
                <div class="col">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('assets/images/Logo5BDF.png')}}" alt="" class="n-logo-sizer">
                    </a>
                </div>
                <div class="col d-flex align-items-end justify-content-center flex-column">


                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mobile-collapse" aria-controls="mobile-collapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
                <div class="col-12 col-md-6">
                    <div class="collapse navbar-collapse justify-content-end align-items-center h-100" id="mobile-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('5bdf.index')}}">Brands</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('5bdf.careers') }}">Careers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('5bdf.events') }}">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('5bdf.csr')}}">CSR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('5bdf.our-group')}}">Our Group</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</div>

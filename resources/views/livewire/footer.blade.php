<div class="py-5 border-top">
    <div class="container-xl">
        <div class="row ">
            <div class="col-md-6">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/images/5bdfLogo.png') }}" alt="" class="n-logo-sizer">
                </a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <u>Brands</u>
                        <small>

                            <ul>
                                <li>
                                    <a href="{{ route('5bdf.hot-wings.index') }}" class="text-dark no-decor">
                                        NYBB Hot Wings
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('5bdf.sports.index') }}" class="text-dark no-decor">
                                        NYBB Sports Lounge
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('5bdf.wingers.index') }}" class="text-dark no-decor">
                                        Wingers Unlimited
                                    </a>
                                </li>

                            </ul>
                        </small>





                    </div>
                    <div class="col-sm-6">
                        <u>Quicklinks</u>
                        <small>
                            <ul>
                                <li>
                                    <a href="{{ route('5bdf.our-group') }}" class="text-dark no-decor">Our Group</a>
                                </li>
                                <li>
                                    <a href="{{ route('5bdf.events') }}" class="text-dark no-decor">Events</a>
                                </li>
                                <li>
                                    <a href="
                                    {{-- check if route name has 5bdf.hot-wings --}}
                                    @if (request()->routeIs('5bdf.hot-wings.*')) {{ route('5bdf.hot-wings.careers') }}
                                    @elseif(request()->routeIs('5bdf.sports.*'))
                                        {{ route('5bdf.sports.careers') }}
                                    @elseif(request()->routeIs('5bdf.wingers.*'))
                                        {{ route('5bdf.wingers.careers') }}
                                    @else
                                        {{ route('5bdf.careers') }} @endif
                                    "
                                        class="text-dark no-decor">Careers</a>
                                </li>
                            </ul>
                        </small>
                    </div>

                </div>
            </div>
        </div>
        <hr class="">
        <div class="row">
            <div class="col">
                <small>
                    {{-- get year --}}
                    &copy; {{ date('Y') }} 5BDF. All rights reserved.
                </small>
            </div>
            <div class="col">
                @if (request()->routeIs('5bdf.hot-wings.*') ||
                    request()->routeIs('5bdf.sports.*') ||
                    request()->routeIs('5bdf.wingers.*'))
                    <div class="d-flex fs-3 justify-content-end">
                        <a href="
                        @if (request()->routeIs('5bdf.hot-wings.*')) https://www.facebook.com/nybuffalobrads/
                        @elseif(request()->routeIs('5bdf.sports.*'))
                        https://www.facebook.com/nysportslounge
                        @elseif(request()->routeIs('5bdf.wingers.*'))
                        https://www.facebook.com/wingersunlimited/ @endif
                        "
                            class="text-dark">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

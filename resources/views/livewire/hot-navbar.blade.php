<div id="wingers-navbar" class="bg-orange text-white">
    <div class="container-xl d-flex flex-column flex-sm-row justify-content-between align-items-lg-center py-4">
        <a href="{{ route('5bdf.hot-wings.index') }}" class="text-decoration-none text-white">
            <h4 class="fw-semibold m-lg-0 text-start">NY Buffalo Brads Hot Wings</h4>
        </a>
        <ul class=" list-unstyled d-flex gap-3 gap-md-5 align-items-lg-center  m-0">
            <li class="fw-5"><a class="text-decoration-none text-white" href="{{ route('5bdf.hot-wings.careers') }}">Careers</a></li>
            <li class="fw-5"><a class="text-decoration-none text-white" href="{{ route('5bdf.hot-wings.promotions') }}">Promotions</a></li>
             <li class="fw-5"><a class="text-decoration-none text-white" href="{{ route('5bdf.hot-wings.franchise') }}">Franchise</a></li>
            <li class="fw-5"><a class="text-decoration-none text-white" href="{{ route('5bdf.hot-wings.store') }}">Branches</a></li>
        </ul>
    </div>
</div>

@push('scripts')
    {{-- make nav sticky onscroll --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navbar = document.getElementById('wingers-navbar');
            var sticky = navbar.offsetTop;
            window.onscroll = function() {
                if (window.pageYOffset > sticky) {
                    navbar.classList.add('sticky');
                } else {
                    navbar.classList.remove('sticky');
                }
            };
        });
    </script>
@endpush

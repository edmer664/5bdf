<section id="contact" class="container-xl my-5">

    <div>
        <h4 id="contact-title" class="display-5 fw-bold">Contact Us</h4>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 col-12 pe-5">
            <form action="{{route('5bdf.career')}}" id="careerForm" method="post" enctype="multipart/form-data">
                @csrf
                <input placeholder="First Name" class="form-control mb-4" type="text" name="firstName" id="firstName">
                <input placeholder="Last Name" class="form-control mb-4" type="text" name="lastName" id="lastName">
                <input placeholder="Email Address" class="form-control mb-4" type="email" name="email"
                    id="email">
                <input placeholder="Position you want to apply" class="form-control mb-2" type="text" name="position"
                    id="position">
                {{-- multiple file upload --}}

                <label for="resume" class="">Resume & Cover Letter</label>
                <input class="form-control mb-4" type="file" id="docs" name="docs[]" multiple accept=".pdf">

                <div class="mb-2">
                    <div class="g-recaptcha" data-sitekey="6LeI6oIhAAAAAAuqq1iDsM-vESKjBWQaRrsUJi2a"></div>
                </div>

                <button type="submit"
                    class="btn text-white
                @if (request()->routeIs('5bdf.hot-wings.*')) bg-orange
                @elseif(request()->routeIs('5bdf.sports.*'))
                bg-red
                @elseif(request()->routeIs('5bdf.wingers.*'))
                bg-green
                @else
                bg-orange @endif
                py-1 px-3 fw-bold ">Submit</button>
            </form>
        </div>
        <div class="col-md-6 col-12">
            <div id="contact-content"
                class="text-white py-4 px-3 
            @if (request()->routeIs('5bdf.hot-wings.*')) bg-orange
            @elseif(request()->routeIs('5bdf.sports.*'))
            bg-red
            @elseif(request()->routeIs('5bdf.wingers.*'))
            bg-green
            @else
            bg-orange @endif
            h-100 d-flex align-items-center">
                <div class="container">
                    <h4 class="fw-bold text-center mb-5" style="font-size: 75px"><i class="bi bi-send"></i></h4>
                    <p class="text-center fs-4">If you are a goal seeker and a team player, then you are one that we are
                        looking for! <br>
                        <br>
                        <span class="fw-bold">
                            Apply now!
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('careerForm').addEventListener('submit', function(e) {
                var captcha = document.querySelector('#g-recaptcha-response');
                if (captcha.value == '') {
                    e.preventDefault();
                    alert('Please check the the captcha form');
                    return false;
                }

            });
        </script>
    @endpush
</section>

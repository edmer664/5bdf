<section class="py-5">
    <div class="container-xl">
        <div class="pb-5">
            <h2 class="section-title">
                Let us know what you think
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6 py-2">
                <form id="contactForm" action="{{route('5bdf.contact')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id=""
                            aria-describedby="emailHelpId" placeholder="" required>
          
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="g-recaptcha" data-sitekey="6LeI6oIhAAAAAAuqq1iDsM-vESKjBWQaRrsUJi2a"></div>
                    </div>
                    <button type="submit" class="btn bg-green text-white">Submit</button>
                </form>
            </div>
            <div class="col-md-6 py-2">
                <div class="card bg-red text-white py-5 text-center h-100 d-flex align-items-center">
                    <div>
                        <div style="font-size: 70px">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <p class="card-body fs-5">
                            Have some questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('contactForm').addEventListener('submit', function(e) {
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
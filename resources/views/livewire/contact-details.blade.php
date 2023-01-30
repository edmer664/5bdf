<section class="py-5" id="contact">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-4">
                {{-- circle map icon orange bg --}}
                <div class="text-center">
                    <div
                        class="rounded-circle bg-orange circler mx-auto d-flex justify-content-center align-items-center">
                        <i class="bi bi-geo-alt text-white fs-1 "></i>
                    </div>
                    <h3 class="mt-3 fw-bold">
                        Address
                    </h3>
                    <p>
                        20/F, Latitude Corporate Center, Mindanao Ave., Cebu City, Cebu 6000
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                {{-- circle map icon orange bg --}}
                <div class="text-center">
                    <div
                        class="rounded-circle bg-orange circler mx-auto d-flex justify-content-center align-items-center">
                        <i class="bi bi-envelope text-white fs-1 "></i>
                    </div>
                    <h3 class="mt-3 fw-bold">
                        Email
                    </h3>
                    <a href="mailto:{{$email ? $email : 'headoffice@5bdf.ph'}}" class="text-decoration-none text-dark">
                        <p> 
                            {{$email ? $email : 'headoffice@5bdf.ph'}}
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                {{-- circle map icon orange bg --}}
                <div class="text-center">
                    <div
                        class="rounded-circle bg-orange circler mx-auto d-flex justify-content-center align-items-center">
                        <i class="bi bi-telephone text-white fs-1 "></i>
                    </div>
                    <h3 class="mt-3 fw-bold">
                        Call Us
                    </h3>
                    {{-- <p>
                        <b>NY Hotwings</b> -  <small>520 4930 / 520 4931 / 520 4932 / 520 4933 / 520 4934 </small><br>
<b>NY Sports Lounge</b> -<small> 520 4930 / 520 4931 / 520 4932 / 520 4933 / 520 4934 <br></small>
<b>Wingers Unlimited</b> - <small> 520 4930 / 520 4931 / 520 4932 / 520 4933 / 520 4934 <br></small>
                    </p> --}}
                    (+63)32-5204930 to 34 <br>
                    (+63)917-7037372

                </div>
            </div>
        </div>
    </div>
</section>

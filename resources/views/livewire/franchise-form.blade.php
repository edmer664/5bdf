<section class="py-5">
    <div class="container-xl">
        <div class="pb-5" data-aos="fade-down-right">
            <h2 class="section-title">
                Franchise Form
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6 py-2">
                <form action="{{route('5bdf.email')}}" method="get" id="franchiseForm">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="firstName">First Name</label>
                            <input class="form-control" type="text" name="firstName" id="firstName" required>
                        </div>
                        <div class="col-6 mb-2">
                            <label for="lastName">Last Name</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-2">
                            <label for="homeAddress">Home Address</label>
                            <input class="form-control" type="text" name="homeAddress" id="homeAddress" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="telNumber">Tel. No.</label>
                            <input class="form-control" type="text" name="telNumber" id="telNumber">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="mobileNumber">Mobile No.</label>
                            <input class="form-control" type="text" name="mobileNumber" id="mobileNumber">
                        </div>
                    </div>
                    <div class="row">
                        {{-- company + position --}}
                        <div class="col-12 mb-2">
                            <label for="company">Company</label>
                            <input class="form-control" type="text" name="company" id="company">
                        </div>
                        <div class="col-12 mb-2">
                            <label for="position">Position</label>
                            <input class="form-control" type="text" name="position" id="position">
                        </div>
                        <div class="col-12 mb-2">
                            <label for="companyAddress">Company Address</label>
                            <input class="form-control" type="text" name="companyAddress" id="companyAddress">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="companyTelNumber">Tel. No.</label>
                            <input class="form-control" type="text" name="companyTelNumber" id="companyTelNumber">
                        </div>
                        {{-- email --}}
                        <div class="col-6 mb-2">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email">
                        </div>

                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-green text-white" data-bs-toggle="modal"
                        data-bs-target="#modelId">
                        Continue
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Additional Info</h5>
                                    {{-- close btn --}}
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        {{-- if brand is not defined then display dropdown --}}
                                        @if($brand == null)
                                        <div class="col-md-12 mb-2">
                                            <label for="brand">Brand</label>
                                            <select class="form-select" name="brand" id="brand">
                                                <option value="Wingers Unlimited">Wingers Unlimited</option>
                                                <option value="NY Buffalo Brads Hot Wings">NY Buffalo Brads Hot Wings</option>
                                                <option value="NY Buffalo Brads Sports Lounge">NY Buffalo Brads Sports Lounge</option>
                                            </select>
                                        </div>
                                        @else
                                        <input type="brand" value="{{$brand}}" class="d-none">
                                        @endif

                                        <div class="col-12 mb-2">
                                            <label for="area">Area/location proposed for franchised outlet: <span
                                                    class="text-secondary">(Please describe)</span></label>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="otherAreas">Will you consider other areas?</label>
                                            <select class="form-select" name="otherAreas" id="otherAreas">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8 mb-2">
                                            <label for="otherAreasDesc">Specify: </label>
                                            <input class="form-control" type="text" name="otherAreasDesc"
                                                id="otherAreasDesc">
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="capital">I can invest the total amount of:(in Pesos)</label>
                                            <input class="form-control" type="number" name="capital"
                                                id="capital">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="involvement">Will you be acitvely involved in the
                                                business?</label>
                                            <select class="form-select" name="involvement" id="involvement">
                                                <option value="individual">As an individual</option>
                                                <option value="partners">with partners</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="operation">I plan to operate the franchise:</label>
                                            <select class="form-select" name="operation" id="operation">
                                                <option value="individual">As an individual</option>
                                                <option value="partners">with partners</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="businessBackground">Business Background</label>
                                            <input class="form-control" type="text" name="businessBackground"
                                                id="businessBackground">

                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="similarBackround">Background in a similar business</label>
                                            <input class="form-control" type="text" name="similarBackround"
                                                id="similarBackround">
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="remarks">Other Plans/Remarks or Suggestions:</label>
                                            <input class="form-control" type="text" name="remarks"
                                                id="remarks">
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="source">How did you hear about us?</label>
                                            <select class="form-select" name="source" id="source">
                                                <option value="Trade show">Trade Show</option>
                                                <option value="Ad">Ad</option>
                                                <option value="Social media">Social Media</option>
                                                <option value="Referral">Referral</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>

                                        {{-- date picker --}}
                                        <div class="col-md-12 mb-2">
                                            <label for="date">Request for Presentation</label>
                                            <input class="form-control" type="datetime-local" name="date"
                                                id="date">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="g-recaptcha" data-sitekey="6LeI6oIhAAAAAAuqq1iDsM-vESKjBWQaRrsUJi2a"></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn bg-green text-white">Submit</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-6 py-2" data-aos="fade-left">
                <div class="card bg-orange text-white py-5 h-100">
                    <div class="card-body">
                        <div class="text-center" style="font-size: 8rem">
                            <i class="bi bi-shop"></i>
                        </div>
                        <div class="text-center fs-2">
                            Ready to start your own business?

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.getElementById('franchiseForm').addEventListener('submit', function (e) {
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


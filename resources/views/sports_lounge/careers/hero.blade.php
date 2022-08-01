<section class="container-xl py-5" id="careers">
    <div>
        <h4 id="careers-title" class="display-5 fw-bold"> Careers</h4>
    </div>
    @if (count($careers) > 0)
        <div class=" mt-5 gap-3 careers-grid">
            @foreach ($careers as $career)
                <livewire:career-item :career="$career" :border="'red'" />
            @endforeach
        </div>
    @else
        <div class="text-center py-5">
            <h5 class="fw-bold">Unfortunately, there are no careers available at the moment.</h5>
        </div>
    @endif




    </div>



</section>

<section class="py-5 
    @if (request()->routeIs('5bdf.hot-wings.*')) bg-orange
    @elseif(request()->routeIs('5bdf.sports.*'))
    bg-red
    @elseif(request()->routeIs('5bdf.wingers.*'))
    bg-green
    @else
    bg-orange @endif
text-white">
    <div class="container-xl text-center">
        <h2>
            Contact Us
        </h2>
        <p>
            Need to get in touch? We'd love to hear from you. Here's how you can reach us...
        </p>
        <a href="{{route('5bdf.our-group')}}#contact" class="btn bg-light text-dark">Get in touch!</a>

    </div>
</section>

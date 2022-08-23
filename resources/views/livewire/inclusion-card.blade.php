<div
    class="card @if (request()->routeIs('5bdf.hot-wings.*')) bg-orange
    @elseif(request()->routeIs('5bdf.sports.*'))
    bg-red
    @elseif(request()->routeIs('5bdf.wingers.*'))
    bg-green
    @else
    bg-orange @endif text-white">
    <div class="card-body">
        <h3 class="card-title">
            {{ $inclusion->title }}
        </h3>
        <p class="card-text">
            {{ $inclusion->description }}
        </p>
    </div>
</div>

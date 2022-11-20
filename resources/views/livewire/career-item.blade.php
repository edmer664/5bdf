<a href="{{ route('5bdf.career_view', $career->id) }}" class="text-decoration-none text-dark">
    <div
        class="careers-grid-items py-2 px-3 
    @if ($border == 'yellow') border-yellow
    @elseif($border == 'orange')
        border-orange
    @elseif($border == 'grey')
        border-grey 
    @elseif($border == 'red')
        border-red
    @endif
    ">
        <h5 class="fw-bold">{{ $career->title }}</h5>
        <p>
            @foreach (json_decode($career->description) as $e)
                {{ // first 200 characters
                    substr($e[0]->insert, 0, 150) . '...' }}
            @endforeach
        </p>
    </div>
</a>

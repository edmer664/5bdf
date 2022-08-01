
<a href="{{route('5bdf.career_view',$career->id)}}" class="text-decoration-none text-dark">
    <div class="careers-grid-items py-2 px-3 
    @if($border == 'yellow')
        border-yellow
    @elseif($border == 'orange')
        border-orange
    @elseif($border == 'grey')
        border-grey
    @endif
    ">
        <h5 class="fw-bold">{{ $career->title }}</h5>
        <p>{{ Str::limit($career->description, 100, '...') }}</p>
    </div>
</a>

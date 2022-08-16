@extends('layouts.main')

@section('content')
    <style>
        #viewer img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
    </style>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    {{-- header image --}}

    <section class="container-xl">
        <img src="{{ asset('storage/events/' . $event->image) }}" alt="" class="img-thumbnail mx-auto d-block"
            style="object-fit: contain;height: 500px;">
    </section>
    <section class="py-5 container-xl">
        {{-- title --}}
        <div class="">
            <div class="text-center pb-4">
                <h1 class="section-title mx-auto">{{ $event->title }}</h1>
            </div>

            <small class="text-center d-block">
                <i class="bi bi-calendar"></i>
                {{ Date::parse($event->date)->format('l, F j, Y') }}
                <br>
                <i class="bi bi-geo-alt"></i>
                @if($event->branch == 'main')
                    5BDF
                @elseif($event->branch == 'wingers')
                    Wingers Unlimited
                @elseif($event->branch == 'hot-wings')
                    Hot Wings
                @elseif($event->branch == 'sports')
                    Sports Lounge
                @endif


            </small>
        </div>
        {{-- description --}}
        <div class="py-5 fs-5" id="viewer">

        </div>

    </section>
@endsection

@push('scripts')
    {{-- quill js --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        // quill js
        var quill = new Quill('#viewer', {
            readOnly: true,
        });
        quill.setContents({!! $event->description !!});
    </script>
@endpush

@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- Navbar --}}
    <style>
      p{
        text-align: justify
      }
    </style>

    <livewire:navbar-wingers />

    <section class="py-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-1 fw-bolder">
                        {{ $career->title }}
                    </h1>
                </div>
                <div class="col-md-8 py-4">
                    <h2 class="fs-3">
                      <span class="text-orange">
                        <i class="bi bi-list"></i>
                      </span>
                      Description</h2>
                    {{-- render quill js data --}}
                    <div id="description">

                    </div>
                    <h2 class="fs-3 pt-5">
                      <span class="text-orange"><i class="bi bi-list-check"></i> </span>
                      Requirements</h2>
                    {{-- render quill js data --}}
                    <div id="requirements">
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="fs-3">
                        <span class="text-orange">
                          <i class="bi bi-geo-alt"></i>
                        </span>
                        Location

                    </h2>
                    <p>
                        {{ $career->location }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- quill js --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        // quill js
        var quill = new Quill('#description', {
            modules: {
                toolbar: false
            },
            theme: 'snow'
        });
        quill.setContents({!! $career->description !!});

        var quill = new Quill('#requirements', {
            modules: {
                toolbar: false
            },
            theme: 'snow'
        });
        quill.setContents({!! $career->requirements !!});
    </script>
@endpush

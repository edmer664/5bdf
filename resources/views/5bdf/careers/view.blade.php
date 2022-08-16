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
                    <p>
                        {{ $career->description }}
                    </p>
                    <h2 class="fs-3 pt-5">
                      <span class="text-orange"><i class="bi bi-list-check"></i> </span>
                      Requirements</h2>
                    <p>
                        {{ $career->requirements }}
                    </p>
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

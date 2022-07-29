@extends('layouts.main')
@section('content')
    {{-- Navbar --}}
    <livewire:navbar-wingers />

    <section class="py-5">
      <div class="container-xl">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">
                  {{$career->title}}
                </h1>
              </div>
              <div class="card-body">
                <h2 class="mb-5"> 
                  Description
                </h2>
                <p>
                  {{$career->description}}
                </p>
                <hr>
                <h2 class="mb-5"> 
                  Requirements
                </h2>
                <p>
                  {{$career->requirements}}
                </p>
                <hr>
                <h2 class="mb-2">
                  Location
                </h2>
                <p>
                  {{$career->location}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

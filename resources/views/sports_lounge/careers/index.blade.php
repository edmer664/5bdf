@extends('layouts.main')
@section('content')
<livewire:navbar-wingers />
<livewire:sports-navbar />
@include('sports_lounge.careers.hero')
<livewire:career-form />
<livewire:footer />
@endsection
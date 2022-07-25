@extends('layouts.main')
@section('content')
<livewire:navbar-wingers />
<livewire:sports-navbar />
@include('sports_lounge.careers.hero')
@include('sports_lounge.careers.contact')
<livewire:footer />

@extends('layouts.main')
@section('content')
    <livewire:navbar-wingers />

    <style>
        #careers-title {
            display: inline;
            border-bottom: 4px #FF500A solid;
        }
        .careers-grid{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .careers-grid-items {
            border-left: 7px #9F9F9F solid;
            border-radius: 0 6px 6px 0;
            box-shadow: 0px 5px 4px 0px rgba(0, 0, 0, 0.25);
            -webkit-box-shadow: 0px 5px 4px 0px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0px 5px 4px 0px rgba(0, 0, 0, 0.25);
        }
        @media(max-width: 992px){
            .careers-grid{
                grid-template-columns: repeat(2, 1fr)
            }
        }
        @media(max-width: 768px){
            .careers-grid{
                grid-template-columns: 1fr;
            }
        }
    </style>

    @include('wingers.careers.hero')

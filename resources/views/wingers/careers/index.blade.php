@extends('layouts.main')
@section('content')
    <livewire:navbar-wingers />

    <style>
        #careers-title , #contact-title {
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
        #contact input{
            background: #F8FAFC;
        }
        #contact input::placeholder{
            color: #B8BCCA;
        }
        #contact button{
            background: #0F381A;
        }
        #contact-content{
            background: #D76543;
            border-radius: 11px;
        }
        @media(max-width: 868px){
            .careers-grid{
                grid-template-columns: repeat(2, 1fr)
            }
        }
        @media(max-width: 540px){
            .careers-grid{
                grid-template-columns: 1fr;
            }
        }

    </style>

    @include('wingers.careers.hero')
    @include('wingers.careers.contact')

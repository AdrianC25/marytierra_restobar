@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.ofertaViews.servicios')
    @include('layouts.ofertaViews.menu')
    @include('layouts.footer')
@endsection

@section('css')
    @parent
    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;700&display=swap');

        html,
        body {
            font-family: 'EB Garamond', serif !important;
            font-weight: 700;
            background: url('/img/background.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        /* navbar styles */
        .bg-dark {
            background: #000 !important;
        }

        .btn-primary {
            background: yellow !important;
            border: none;
            color: black !important;
        }

        .btn-primary:hover {
            background: white !important;
            border: none;
            color: black !important;
        }

        /* card style */
        .btn-secondary {
            background: rgb(116, 116, 116) !important;
            border: none;
            color: rgb(255, 255, 255) !important;
        }

        .btn-secondary:hover {
            background: rgb(197, 246, 137) !important;
            border: none;
            color: black !important;
        }

        /* header */
        .servicios .row {
            --bs-gutter-x: 0;
        }

        .pt-6 {
            padding-top: 60px;
        }

    </style>
@endsection

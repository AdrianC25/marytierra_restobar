@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.welcomeViews.banner')
    @include('layouts.welcomeViews.galeria')
    @include('layouts.welcomeViews.testimonios')
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
            border:none;
            color: black !important;
        }

        /* banner styles */
        .banner {
            background: url('/img/banner1.webp');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        /* header */
        .header .row {
            --bs-gutter-x: 0;
        }

        .pt-6 {
            padding-top: 60px;
        }

        /* testomonios style */
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
@endsection

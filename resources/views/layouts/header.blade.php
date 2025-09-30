<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Budaya Indonesia</title>
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')



    {{-- hosting --}}
    <link rel="stylesheet" href="build/assets/app-0m8BpliZ.css">
    <script src="build/assets/app-C0G0cght.js"></script>
    {{--  --}}

    {{-- hosting --}}
    {{-- <link rel="stylesheet" href="/build/assets/app-BbQ6fXRL.css"> --}}
    {{-- <script src="/build/assets/app-C0G0cght.js"></script> --}}
    {{--  --}}

    {{-- hosting --}}
    {{-- <link rel="stylesheet" href="./build/assets/app-BbQ6fXRL.css"> --}}
    {{-- <script src="./build/assets/app-C0G0cght.js"></script> --}}
    {{--  --}}


    <!-- penanda meta -->
    <meta property="og:title"
        content="Web budaya Nusantara | Programmer Tim Sat Set | Follow @zzls_ and @haiban13 on Instagram" />
    <meta property="og:url" content="https://budayanusantara.wanns.site/" />
    <meta property="og:image"
        content="https://drive.google.com/file/d/1uoEBb9dxc7Xqu5cTHvq2JNrvzMJw1AeE/view?usp=sharing" />
    <meta property="og:description" content="Berisi Berbagai Acara Dan Artikel berita Di Indoensia" />



    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    {{-- animasi aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
    <!-- Alpine.js for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    {{-- search jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    {{-- animasi teks --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- font  --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Noto+Sans+Batak&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">

    <style>
        nav {
            background: rgba(255, 224, 198, 0.164);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 208, 167, 0.3);
        }


        body {
            background: #FFF7E6
        }

        .card-bg {
            background: #fffaef
        }



        .text-focus-in {
            -webkit-animation: text-focus-in 10s cubic-bezier(0.55, 0.085, 0.68, 0.53) both;
            animation: text-focus-in 10s cubic-bezier(0.55, 0.085, 0.68, 0.53) both;
        }

        @-webkit-keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }

            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }

        @keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }

            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }
        

        .hero-bg {
            background-image: url('assets/074573700_1732950232-ciri-ciri-tari-kecak.jpg');
            background-size: cover;
            background-position: center;
        }

        .cta-bg {
            background-image: url('./assets/759-shutterstock_708676618.jpg');
            background-size: cover;
            background-position: center;
        }

        .text-gradasi {
            background: #F1910B;
            background: linear-gradient(to bottom right, #F1910B 37%, #BC4F01 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }
    </style>
</head>

<body id="top">
    @php use Carbon\Carbon; @endphp

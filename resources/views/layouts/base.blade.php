<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css') }}" rel="stylesheet" />
    <title> Argon Dashboard</title>
</head>
@if (request()->routeIs('students'))
    <body class="">
        <!-- Sidebar -->
        <x-frontend.sidebar></x-frontend.sidebar>

        <!-- Student View Section -->
        <main class="main-content position-relative border-radius-lg ">
            @yield('content')
        </main>
@elseif (request()->routeIs('studentcreate'))
    <body class="">
        <!-- Sidebar -->
        <x-frontend.sidebar></x-frontend.sidebar>

        <!-- Student View Section -->
        <main class="main-content position-relative border-radius-lg ">
            @yield('content')
        </main>
@elseif (request()->routeIs('students.edit'))
    <body class="">
        <!-- Sidebar -->
        <x-frontend.sidebar></x-frontend.sidebar>

        <!-- Student View Section -->
        <main class="main-content position-relative border-radius-lg ">
            @yield('content')
        </main>
@else
    <body class="g-sidenav-show   bg-gray-100">
        <!-- Sidebar -->
        <x-frontend.sidebar></x-frontend.sidebar>

        <!-- Main Section -->
        <x-frontend.dashboardMainSection></x-frontend.dashboardMainSection>

@endif

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>

    <!-- Others JS Files -->
    <script src="{{ asset('assets/js/salesOverviewChart.js') }}"></script>
    </body>
</html>

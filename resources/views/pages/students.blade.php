@extends('layouts.base')
@section('content')

    <!-- Navbar -->
    <x-frontend.navbar></x-frontend.navbar>

    <!--Tables-->
    <x-frontend.studentsSection :students="$students" />

@endsection

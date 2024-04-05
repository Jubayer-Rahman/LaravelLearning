@extends('layouts.base')
@section('content')

    <!-- Navbar -->
    <x-frontend.navbar></x-frontend.navbar>

    <!--Student Create Form-->
    <x-frontend.studentUpdateForm :student="$student" />

@endsection

@extends('layouts.appHead')

@section('title', 'Register / Sign Up')

@section('header')
    @include('inc.header')
@endsection

<!-- Begin Wrapper -->
<div id="wrapper">

    @section('menubar')
        @include('inc.navbarLogout')
    @endsection

    @section('registerContent')
        @include('inc.register')
        @endsection


</div>
<!-- End Wrapper -->

@section('footer')
    @include('inc.footer')
@endsection

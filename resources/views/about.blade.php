@extends('layouts.appHead')

@section('title', 'About')

@section('header')
    @include('inc.header')
@endsection

<!-- Begin Wrapper -->
<div id="wrapper">

@section('menubar')
    @guest()
        @include('inc.navbarLogout')
    @else
        @include('inc.navbarLogin')
    @endguest
@endsection

@section('aboutContent')
    @include('inc.aboutUs')
    @endsection

</div>
<!-- End Wrapper -->

@section('footer')
    @include('inc.footer')
@endsection

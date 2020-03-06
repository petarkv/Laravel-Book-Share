@extends('layouts.appHead')

@section('title', 'Welcome')

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

@section('sidebar')
    @guest()
        @include('inc.sidebarLogout')
        @else
        @include('inc.sidebarLogin')
    @endguest
    @endsection

@section('newsletter')
    @include('inc.newsletter')
    @endsection

</div>
<!-- End Wrapper -->

@section('footer')
    @include('inc.footer')
    @endsection

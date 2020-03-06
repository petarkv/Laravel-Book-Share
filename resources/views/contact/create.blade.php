@extends('layouts.appHead')

@section('title', 'Contact')

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

    @section('contactContent')
        @include('inc.contactUs')
        @endsection

</div>
<!-- End Wrapper -->

@section('footer')
    @include('inc.footer')
@endsection

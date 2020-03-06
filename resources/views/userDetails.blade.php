@extends('layouts.appHead')

@section('title', 'User Details')

@section('header')
    @include('inc.header')
@endsection

<!-- Begin Wrapper -->
<div id="wrapper">

    @section('menubar')
        @include('inc.navbarLogin')
    @endsection

    @section('userDetails')
        @include('includesUser.profile')
    @endsection

</div>
<!-- End Wrapper -->

@section('footer')
    @include('inc.footer')
@endsection

@extends('layouts.appHead')

@section('title', 'Reset Password')

@section('header')
    @include('inc.header')
@endsection

@section('menubar')
    @include('inc.navbarLogout')
@endsection

<!-- Begin Wrapper -->
<div id="wrapper">
@section('resetpass')
    @include('inc.newpassword')
@endsection
</div>
<!-- End Wrapper -->

@section('footer')
    @include('inc.footer')
@endsection
@extends('backend.master')
@section('content')
    @include('profile::partials.profile.header')
    @yield('profile::content')
@endsection

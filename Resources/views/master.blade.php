@extends('backend.master')
@section('content')
@include('profile::partials.profile.header')
<div class="card">
    <div class="card-header">
        <h3>Personal Details</h3>
    </div>
    <div class="card-body">
        @include('profile::partials.profile.personal-details-menu')
        @include('profile::partials.profile.personal-details-content')
    </div>
</div>
@endsection

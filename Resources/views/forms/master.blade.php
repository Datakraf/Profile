@extends('profile::master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Personal Details</h3>
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-primary">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="">Personal Information</a>
            </li>
            <li><a class="nav-link" data-toggle="tab" href="">Family Information</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="">
                @yield('form-content')
            </div>
        </div>
    </div>
</div>

@endsection

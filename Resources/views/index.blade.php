@extends('profile::master')
@section('profile::content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            {{ucwords(__('profile::profile.personal-details'))}}
        </h3>
    </div>
    <div class="card-body">
        @include('profile::forms.personal-information',
        [
        'actionUrl'=> route('home'),
        'method' => 'POST'
        ])
    </div>
</div>
@endsection

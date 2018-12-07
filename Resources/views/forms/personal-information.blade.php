<form action="{{$actionUrl}}" method="{{$method}}">
    <ul class="nav nav-tabs nav-tabs-primary">
        <li class="nav-item">
            <a class="nav-link active show" data-toggle="tab" href="#personal-detail">Personal Information</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="personal-detail">
            @include('profile::forms.personal-detail')
        </div>
        <div class="tab-pane fade">

        </div>
    </div>
</form>

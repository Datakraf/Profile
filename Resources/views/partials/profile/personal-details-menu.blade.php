<ul class="nav nav-tabs nav-tabs-primary">
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'profile.index' ? 'active':''}}" href="{{route('profile.index')}}">Personal
            Information</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'profile.family'  ? 'active':''}}" href="{{route('profile.family')}}">Family
            Information</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'profile.academic-records'  ? 'active':''}}" href="{{route('profile.academic-records')}}">Academic
            Records</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'profile.experience'  ? 'active':''}}" href="{{route('profile.experience')}}">Employment
            History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'profile.skills'  ? 'active':''}}" href="{{route('profile.skills')}}">Skills</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'profile.awards'  ? 'active':''}}" href="{{route('profile.awards')}}">Awards</a>
    </li>
</ul>

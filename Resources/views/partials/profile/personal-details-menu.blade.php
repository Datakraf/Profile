<ul class="nav nav-tabs nav-tabs-primary">
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'personal.index' ? 'active':''}}" href="{{route('personal.index')}}">Personal
            Information</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'family.index'  ? 'active':''}}" href="{{route('family.index')}}">Family
            Information</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'academic.index'  ? 'active':''}}" href="{{route('academic.index')}}">Academic
            Records</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'experience.index'  ? 'active':''}}" href="{{route('experience.index')}}">Employment
            History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'profile.skills'  ? 'active':''}}" href="{{route('profile.skills')}}">Skills</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'profile.awards'  ? 'active':''}}" href="{{route('profile.awards')}}">Awards</a>
    </li>
</ul>

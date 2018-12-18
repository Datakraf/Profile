<ul class="nav nav-tabs nav-tabs-primary">
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'personal.index' ? 'active':''}}" href="#}">Personal
            Information</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'family.index'  ? 'active':''}}" href="#">Family
            Information</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'academic.index'  ? 'active':''}}" href="#">Academic
            Records</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'experience.index'  ? 'active':''}}" href="#">Employment
            History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'skill.index'  ? 'active':''}}" href="#">Skills</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() == 'award.index'  ? 'active':''}}" href="#">Awards</a>
    </li>
</ul>

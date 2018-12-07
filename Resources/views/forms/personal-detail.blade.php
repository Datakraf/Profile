<form action="{{$actionUrl}}" method="{{$method}}">
    <div class="row">
        <div class="col">
            <h5>{{ucwords(__('profile::personal-detail.identity'))}}</h5>
            <p class="help-text">
                Your identity
            </p>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">{{ucwords(__('profile::personal-detail.name'))}}</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">{{ucwords(__('profile::personal-detail.ic-number'))}}</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">{{ucwords(__('profile::personal-detail.staff-no'))}}</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">{{ucwords(__('profile::personal-detail.staff-no'))}}</label>
                <input type="text" name="" id="" class="form-control">
            </div>

        </div>
    </div>


</form>

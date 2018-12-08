@extends('profile::personal-details-master')
@section('form-content')
<form action="{{$actionUrl}}" method="{{$method}}">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h3>{{ucwords(__('profile::personal-detail.identity'))}}</h3>
                    <p class="help-text">
                        Personal information
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
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.gender'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.date-of-birth'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.phone-number'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.mobile-number'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.email'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.alternative-email'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <h3>{{ucwords(__('profile::personal-detail.living-place'))}}</h3>
                    <p class="help-text">
                        Personal information
                    </p>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">{{ucwords(__('profile::personal-detail.address-one'))}}</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">{{ucwords(__('profile::personal-detail.address-two'))}}</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.city'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.postcode'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.state'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.country'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <h3>{{ucwords(__('profile::personal-detail.vehicle-information'))}}</h3>
                    <p class="help-text">
                        Vehicle information (leave it blank if it is not available)
                    </p>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.motorcycle-reg-number'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.car-reg-number'))}}</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">{{ucwords('update')}}</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection
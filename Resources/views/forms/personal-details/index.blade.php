@extends('profile::personal-details-master')
@section('form-content')
<form action="{{route('profile.store')}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <h3>{{ucwords(__('profile::personal-detail.identity'))}}</h3>
                    <p class="help-text">
                        Personal information
                    </p>
                </div>
                <div class="col-8">
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                    <div class="form-group">
                        <label for="">{{ucwords(__('profile::personal-detail.name'))}}</label>
                        <input type="text" name="name" id="" class="form-control" value="{{ old('name',  isset($personalDetail->name) ? $personalDetail->name : null) }}">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.ic-number'))}}</label>
                                <input type="text" name="ic_number" id="" class="form-control" value="{{old('ic_number',isset($personalDetail->ic_number)?:null)}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.staff-no'))}}</label>
                                <input type="text" name="staff_number" id="" class="form-control" value="{{old('staff_number',isset($personalDetail->staff_number)?:null)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.gender'))}}</label>
                                <input type="text" name="gender" value="{{old('gender',isset($personalDetail->gender)?:null)}}" id=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.date-of-birth'))}}</label>
                                <input type="text" name="date_of_birth" id="" class="form-control" value="{{old('date_of_birth',isset($personalDetail->date_of_birth)?:null)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.phone-number'))}}</label>
                                <input type="text" name="phone_number" id="" class="form-control" value="
                                {{old('phone-number',isset($personalDetail->phone_number)?:null)}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.mobile-number'))}}</label>
                                <input type="text" name="mobile_number" id="" class="form-control" value="{{old('mobile_number',isset($personalDetail->mobile_number)?:null)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">                    
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.alternative-email'))}}</label>
                                <input type="text" name="alternative_email" id="" class="form-control" value="{{old('email',isset($personalDetail->alternative_email)?:null)}}">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h3>{{ucwords(__('profile::personal-detail.living-place'))}}</h3>
                    <p class="help-text">
                        Personal information
                    </p>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <label for="">{{ucwords(__('profile::personal-detail.address-one'))}}</label>
                        <input type="text" name="address_one" id="" class="form-control" value="{{old('address_one',isset($personalDetail->address_one)?:null)}}">
                    </div>
                    <div class="form-group">
                        <label for="">{{ucwords(__('profile::personal-detail.address-two'))}}</label>
                        <input type="text" name="address_two" id="" class="form-control" value="{{old('address_two',isset($personalDetail->address_two)?:null)}}">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.city'))}}</label>
                                <input type="text" name="city" id="" class="form-control" value="{{old('city',isset($personalDetail->city)?:null)}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.postcode'))}}</label>
                                <input type="text" name="postcode" id="" class="form-control" value="{{old('postcode',isset($personalDetail->postcode)?:null)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.state'))}}</label>
                                <input type="text" name="state" id="" class="form-control" value="{{old('state',isset($personalDetail->state)?:null)}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.country'))}}</label>
                                <input type="text" name="country" id="" class="form-control" value="{{old('country',isset($personalDetail->country)?:null)}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h3>{{ucwords(__('profile::personal-detail.vehicle-information'))}}</h3>
                    <p class="help-text">
                        Vehicle information (leave it blank if it is not available)
                    </p>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.motorcycle-reg-number'))}}</label>
                                <input type="text" name="motorcycle_reg_number" id="" class="form-control" value="{{old('motorcycle_reg_number',isset($personalDetail->motorcycle_reg_number)?:null)}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ucwords(__('profile::personal-detail.car-reg-number'))}}</label>
                                <input type="text" name="car_reg_number" id="" class="form-control" value="{{old('car_reg_number',isset($personalDetail->car_reg_number)?:null)}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

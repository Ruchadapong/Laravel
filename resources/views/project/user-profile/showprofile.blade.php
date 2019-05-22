@extends('Project.master')

@section('title',"Health Land | Edit-Profile")

@section('content')
<div style="background-image: url('project/img/bg.png'); background-repeat: no-repeat; background-size: cover;">

    {{-- style="padding-top: 8rem;" --}}
    <div class="container emp-profile wow fadeIn Slow" style="padding-top: 8rem;">

        <h2 style="margin-bottom: 3rem;">Your Profile</h2>

                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img ">
                                @if(!empty($userDetails->ac_image))
                                <img src="{{asset('/project/backend/img/User/large/'.$userDetails->ac_image)}}" >
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-left: 2rem;">
                        <div class="profile-head">
                                    <h5>
                                         ID : {{$userDetails->id}}
                                    </h5>
                                    <h6>First Name : {{$userDetails->ac_fname}}</h6>
                                    <h6>Last Name : {{$userDetails->ac_lname}}</h6>
                                    <h6>E-mail : {{$userDetails->ac_email}}</h6>
                                    <h6>Birthday : {{$userDetails->ac_birthday}}</h6>
                                    <h6>Address : {{$userDetails->ac_address}}</h6>
                                    <h6>Sex : {{$userDetails->ac_sex}}</h6>
                                    <h6>Tel. : {{$userDetails->ac_tel}}</h6>

                        </div>
                        <div style="margin-top:2rem;">
                                <a href="{{url('/editprofile')}}" class="profile-edit-btn" name="btnAddMore"> Edit Profile</a>
                        </div>

                    </div>

                </div>

        </div>

</div>

@endsection

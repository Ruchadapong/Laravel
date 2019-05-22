@extends('Project.master')

@section('title',"Health Land | Edit-Profile")

@section('content')
<div style="background-image: url('project/img/bg.png'); background-repeat: no-repeat; background-size: cover;">
    <div class="container wow fadeIn Slow" style="padding-top:8rem; padding-bottom:5rem;">
            @if(Session::has('flash_message_success'))
            <div class="row">
                    <div class="col-md-12">
                            <div class="alert alert-success">
                                {{ Session::get('flash_message_success') }}
                            </div>
                    </div>
            </div>
        @endif
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('editprofile/') }}" name="editprofile" id="editprofile">{{ csrf_field() }}
            <div class="row">

                    <div class="col-md-4 ">
                            <img src=" {{ asset('/project/backend/img/User/large/'.$editDetails->ac_image) }}" style="width: 100%;">
                            <input type="file" name="ac_image" class="form-control-file" id="ac_image" style="padding-top:20px; margin-bottom:20px;">
                            <input type="hidden" name="current_image" value="{{ $editDetails->ac_image }}">

                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Edit Profile</h4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="name" class="col-4 col-form-label">First Name</label>
                                            <div class="col-8">
                                                    <input type="text" name="ac_fname" class="form-control" id="ac_fname" title="Enter First name" value="{{ $editDetails->ac_fname}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lastname" class="col-4 col-form-label">Last Name</label>
                                            <div class="col-8">
                                                    <input type="text" name="ac_lname" class="form-control" id="ac_lname" title="Enter Last name" value="{{ $editDetails->ac_lname}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label">Birthday</label>
                                            <div class="col-8">
                                                    <input type="text" class="form-control date-inputmask" id="ac_birthday" name="ac_birthday" value="{{ $editDetails->ac_birthday}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="email" class="col-4 col-form-label">Address</label>
                                                <div class="col-8">
                                                    <textarea class="form-control" name="ac_address" id="ac_address">{{ $editDetails->ac_address}}</textarea>
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-4 col-form-label">Sex</label>
                                            <div class="col-8">
                                                    <input type="radio" id="ac_sex" name="ac_sex" value="male" style="margin: 10px;" required/>Male
                                                    <input type="radio" id="ac_sex" name="ac_sex" value="female" style="margin: 10px;" required/>Female
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="select" class="col-4 col-form-label">Telephone</label>
                                                <div class="col-8">
                                                        <input type="text" name="ac_tel" class="form-control" id="ac_tel" title="Enter Telephone" maxlength="10" value="{{ $editDetails->ac_tel}}">
                                                </div>
                                            </div>
                                            @if(Session::has('flash_message_success'))
                                            <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                    <a href="{{url('/showprofile')}}" class="btn btn-md btn-success">Go My Profile</a>
                                                </div>
                                            </div>
                                        @else
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                            <button  type="submit" class="btn btn-success">Update My Profile</button>
                                            </div>

                                        </div>
                                        @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

        </div>
    </form>
    </div>
</div>
@endsection

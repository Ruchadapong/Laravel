@extends('backend.dashboard')
@section('content')

<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">User</h4>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('edit_user/'.$userDetails->id) }}" name="edit_user" id="edit_user">{{ csrf_field() }}
                            <div class="card-body">
                                <h4 class="card-title">Edit User</h4>
                                @if(Session::has('flash_message_success'))
                                <div class="row">
                                        <div class="col-md-12">
                                                <div class="alert alert-success">
                                                    {{ Session::get('flash_message_success') }}
                                                </div>
                                        </div>
                                </div>
                            @endif
                            @if(Session::has('flash_message_error'))
                                <div class="row">
                                        <div class="col-md-12">
                                                <div class="alert alert-danger">
                                                    {{ Session::get('flash_message_error') }}
                                                </div>
                                        </div>
                                </div>
                            @endif
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="ac_fname" class="form-control" id="ac_fname" title="Enter First name" value="{{ $userDetails->ac_fname}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                    <div class="col-sm-6">
                                            <input type="text" name="ac_lname" class="form-control" id="ac_lname" title="Enter Last name" value="{{ $userDetails->ac_lname}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label class=" col-sm-3 text-right control-label col-form-label">Birthday</label>
                                        <div class=" col-md-6">
                                        <input type="text" class="form-control date-inputmask" id="ac_birthday" name="ac_birthday" value="{{ $userDetails->ac_birthday}}">
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Telephone</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="ac_tel" class="form-control" id="ac_tel" title="Enter Telephone" maxlength="10" value="{{ $userDetails->ac_tel}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Sex</label>
                                        <div class="col-sm-6 ">
                                                <input type="radio" id="ac_sex" name="ac_sex" value="male" style="margin: 10px;" required/>Male
                                                <input type="radio" id="ac_sex" name="ac_sex" value="female" style="margin: 10px;" required/>Female
                                            </div>

                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="ac_address" id="ac_address">{{ $userDetails->ac_address}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Role</label>
                                        <div class="col-sm-6 ">
                                                <input type="radio" id="role" name="role" value="user" style="margin: 10px;"required/>User
                                                <input type="radio" id="role" name="role" value="emp" style="margin: 10px;"required/>Employee
                                                <input type="radio" id="role" name="role" value="admin" style="margin: 10px;"required/>Admin
                                            </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Image</label>
                                    <div class="col-sm-6">
                                            <div class="form-group">

                                                    <input type="file" name="ac_image" class="form-control-file" id="ac_image">
                                                    <input type="hidden" name="current_image" value="{{ $userDetails->ac_image }}">
                                                    <img src=" {{ asset('/project/backend/img/User/small/'.$userDetails->ac_image) }}" style="width: 80px; margin-top: 10px;">
                                            </div>
                                    </div>
                             </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Edit User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
         <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                    All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->

    </div>






@endsection

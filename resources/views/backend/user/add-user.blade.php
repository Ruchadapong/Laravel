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
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('add_user') }}" name="add_user" id="add_user">{{ csrf_field() }}
                            <div class="card-body">
                                <h4 class="card-title">Add User</h4>
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
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">E-mail</label>
                                    <div class="col-sm-6">
                                            <input type="email" name="ac_email" class="form-control" id="ac_email" title="Enter E-mail" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-6">
                                            <input type="password" name="password" class="form-control" id="password" title="Password" required>
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="ac_fname" class="form-control" id="ac_fname" title="Enter First name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                    <div class="col-sm-6">
                                            <input type="text" name="ac_lname" class="form-control" id="ac_lname" title="Enter Last name" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label class=" col-sm-3 text-right control-label col-form-label">Birthday</label>
                                        <div class=" col-md-6">
                                        <input type="text" class="form-control date-inputmask" id="ac_birthday" name="ac_birthday">
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Telephone</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="ac_tel" class="form-control" id="ac_tel" title="Enter Telephone" maxlength="10">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Sex</label>
                                        <div class="col-sm-6 ">
                                                <input type="radio" id="ac_sex" name="ac_sex" value="male" style="margin: 10px;"/>Male
                                                <input type="radio" id="ac_sex" name="ac_sex" value="female" style="margin: 10px;"/>Female
                                            </div>

                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="ac_address" id="ac_address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Role</label>
                                        <div class="col-sm-6 ">
                                                <input type="radio" id="role" name="role" value="user" style="margin: 10px;"/>User
                                                <input type="radio" id="role" name="role" value="emp" style="margin: 10px;"/>Employee
                                                <input type="radio" id="role" name="role" value="admin" style="margin: 10px;"/>Admin
                                            </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Image</label>
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                    <input type="file" name="ac_image" class="form-control-file" id="ac_image">
                                            </div>
                                    </div>
                             </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Add Employee</button>
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

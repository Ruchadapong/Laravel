@extends('backend.dashboard')
@section('content')

<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Employee</h4>
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
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('add_employee') }}" name="add_employee" id="add_employee">{{ csrf_field() }}
                            <div class="card-body">
                                <h4 class="card-title">Add Employee</h4>
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
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Employee Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="emp_name" class="form-control" id="emp_name" title="Enter Employee name" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Employee Time</label>
                                    <div class=" col-md-3">
                                        <input type="text" name="emp_time_start" class="form-control mydatepicker" id="emp_time_start" title="Enter Employee time start">
                                    </div>
                                      <span style="padding-top: 6px;"> - </span>
                                      <div class=" col-sm-3">
                                        <input type="text" name="emp_time_end" class="form-control mydatepicker" id="emp_time_end" title="Enter Employee time end">
                                      </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Employee E-mail</label>
                                    <div class="col-sm-6">
                                            <input type="email" name="emp_email" class="form-control" id="emp_email" title="Enter Employee E-mail">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Employee Fackbook</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="emp_facebook" class="form-control" id="emp_facebook" title="Enter Employee Facebook" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Employee Line</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="emp_line" class="form-control" id="emp_line" title="Enter Employee Line" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Employee Telephone</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="emp_tel" class="form-control" id="emp_tel" title="Enter Employee name" maxlength="10">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Employee Description</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="emp_description" id="emp_description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Employee Image</label>
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                    <input type="file" name="emp_image" class="form-control-file" id="emp_image">
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

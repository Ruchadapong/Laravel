@extends('backend.dashboard')
@section('content')

<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Treatment</h4>
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
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('add_treatment') }}" name="add_treatment" id="add_treatment">{{ csrf_field() }}
                            <div class="card-body">
                                <h4 class="card-title">Add Treatment</h4>
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
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Treatment Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="treat_name" class="form-control" id="treat_name" title="Enter treatment name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Treatment Time</label>
                                    <div class="col-sm-6">
                                            <input type="text" name="treat_time" class="form-control" id="treat_time" title="Enter treatment time" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Treatment Cost</label>
                                    <div class="col-sm-6">
                                            <input type="text" name="treat_cost" class="form-control" id="treat_cost" title="Enter treatment cost" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Treatment Description</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="treat_description" id="treat_description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Treatment Image</label>
                                    <div class="col-sm-6">
                                            <div class="form-group">

                                                    <input type="file" name="treat_image" class="form-control-file" id="treat_image">
                                            </div>
                                    </div>
                             </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Add Treatment</button>
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

@extends('backend.dashboard')
@section('content')

<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Package</h4>
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
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('edit_package/'.$productDetails->id) }}" name="edit_package" id="edit_package">{{ csrf_field() }}
                            <div class="card-body">
                                <h4 class="card-title">Edit Package</h4>
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
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Package Name</label>
                                    <div class="col-sm-6">
                                    <input type="text" name="pack_name" class="form-control" id="pack_name" title="Enter package name" value="{{ $productDetails->pack_name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Package Time</label>
                                    <div class="col-sm-6">
                                            <input type="text" name="pack_time" class="form-control" id="pack_time" title="Enter package time" value="{{ $productDetails->pack_time}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Package Cost</label>
                                    <div class="col-sm-6">
                                            <input type="text" name="pack_cost" class="form-control" id="pack_cost" title="Enter package cost" value="{{ $productDetails->pack_cost}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Package Description</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="pack_description" id="pack_description" >{{ $productDetails->pack_description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Package Image</label>
                                        <div class="col-sm-6">
                                                <div class="form-group">

                                                        <input type="file" name="pack_image" class="form-control-file" id="pack_image">
                                                <input type="hidden" name="current_image" value="{{ $productDetails->pack_image }}">
                                                <img src=" {{ asset('/project/backend/img/Package/small/'.$productDetails->pack_image) }}" style="width: 80px; margin-top: 10px;">
                                                </div>
                                        </div>
                                 </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Edit Package</button>
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

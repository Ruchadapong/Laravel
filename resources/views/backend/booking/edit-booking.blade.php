@extends('backend.dashboard')

@section('content')


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Booking</h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('edit-booking/'.$bookingDetails->id) }}" name="edit_booking" id="edit_booking">{{ csrf_field() }}
                        <div class="card-body">
                            <h4 class="card-title">Edit Booking</h4>
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
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">User ID</label>
                                <div class="col-sm-6">
                                <input type="text" name="user_id" class="form-control" id="user_id" title="Enter User ID" value="{{$bookingDetails->user_id}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">User Email</label>
                                <div class="col-sm-6">
                                        <input type="email" name="booking_email" class="form-control" id="booking_email" title="Enter User Email" value="{{$bookingDetails->booking_email}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">User Name</label>
                                <div class="col-sm-6">
                                        <input type="text" name="booking_name" class="form-control" id="booking_name" title="Enter User Name" value="{{$bookingDetails->booking_name}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">User Telephone</label>
                                <div class="col-sm-6">
                                        <input type="text" name="booking_tel" class="form-control" id="booking_tel" title="Enter User Telephone" value="{{$bookingDetails->booking_tel}}" maxlength="10" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Booking Time</label>
                                    <div class="col-sm-6">
                                        <select name="booking_time" class="f1-email form-control" id="booking_time">
                                            <option value="{{$bookingDetails->booking_time}}" selected>{{$bookingDetails->booking_time}}</option>
                                            <option value="9.00">9.00</option>
                                            <option value="10.00">10.00</option>
                                            <option value="11.00">11.00</option>
                                            <option value="12.00">12.00</option>
                                            <option value="13.00">13.00</option>
                                            <option value="14.00">14.00</option>
                                            <option value="15.00">15.00</option>
                                            <option value="16.00">16.00</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Room ID</label>
                                <div class="col-sm-6">
                                    <select name="room_id" class="f1-email form-control" id="room_id">
                                        <option value="{{$bookingDetails->room_id}}" selected>{{$bookingDetails->room_id}}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Treatment ID</label>
                                <div class="col-sm-6">
                                    <select name="treat_id" class="f1-email form-control" id="treat_id">
                                        <option value="{{$bookingDetails->treat_id}}" selected>{{$bookingDetails->treat_id}}</option>
                                        <option value="1" >1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Package ID</label>
                                <div class="col-sm-6">
                                    <select name="package_id" class="f1-email form-control" id="package_id">
                                        <option value="{{$bookingDetails->package_id}}" selected>{{$bookingDetails->package_id}}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Employee ID</label>
                                <div class="col-sm-6">
                                    <select name="emp_id" class="f1-email form-control" id="emp_id">
                                        <option value="{{$bookingDetails->emp_id}}" selected>{{$bookingDetails->emp_id}}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                <div class="col-sm-6">

                                    <select type="text" name="status" class="f1-email form-control" id="status">
                                        <option value="{{$bookingDetails->status}}" selected>{{$bookingDetails->status}}</option>
                                        <option value="รอหลักฐานการโอน">รอหลักฐานการโอน</option>
                                        <option value="ตรวจสอบหลักฐานการโอน">ตรวจสอบหลักฐานการโอน</option>
                                        <option value="ยืนยันการโอน">ยืนยันการโอน</option>


                                    </select>
                                </div>
                            </div>


                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Edit Booking</button>
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
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->


</div>

@endsection

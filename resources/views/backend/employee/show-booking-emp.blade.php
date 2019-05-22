@extends('backend.employee.role-employee')
@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">View Booking</h4>
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
            @foreach ($showBookings as $showBooking)
            <div class="card mb-3 ">
                    <div class="row no-gutters ml-3 mt-3">
                      <div class="col-md-6">
                        <h5 class="card-title">ID : {{$showBooking->id}}</h5>
                        <p>User Email : {{$showBooking->booking_email}}</p>
                        <p>User Name : {{$showBooking->booking_name}}</p>
                        <p>User Telephon : {{$showBooking->booking_tel}}</p>
                        <p>Booking Time : {{$showBooking->booking_time}}.00 น.</p>
                        <p>Room ID : {{$showBooking->room_id}}</p>
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                                <p>Treatment ID : {{$showBooking->treat_id}}</p>
                                <p>Package ID : {{$showBooking->package_id}}</p>
                                <p>Employee ID : {{$showBooking->emp_id}}</p>

                                <p>Status : {{$showBooking->status}}<p/>

                        </div>
                      </div>
                      <span class="mx-auto pb-2"><small class="text-muted">Created_at : {{$showBooking->created_at}}</small>&nbsp;&nbsp;&nbsp;<small class="text-muted">Update : {{$showBooking->updated_at}}</small></span>
                    </div>
            </div>
            @endforeach

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
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->

@endsection

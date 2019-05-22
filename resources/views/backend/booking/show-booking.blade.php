@extends('backend.dashboard')

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


    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
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
        @foreach ($bookings as $booking)
        <div class="card mb-3 ">
                <div class="row no-gutters ml-3 mt-3">
                  <div class="col-md-6">
                    <h5 class="card-title">ID : {{$booking->id}}</h5>
                    <p>User Email : {{$booking->booking_email}}</p>
                    <p>User Name : {{$booking->booking_name}}</p>
                    <p>User Telephon : {{$booking->booking_tel}}</p>
                    <p>Booking Time : {{$booking->booking_time}}.00 น.</p>
                    <p>Room ID : {{$booking->room_id}}</p>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                            <p>Treatment ID : {{$booking->treat_id}}</p>
                            <p>Package ID : {{$booking->package_id}}</p>
                            <p>Employee ID : {{$booking->emp_id}}</p>

                            <p>Status : {{$booking->status}}<p/>

                    </div>
                  </div>
                  <span class="mx-auto pb-2"><small class="text-muted">Created_at : {{$booking->created_at}}</small>&nbsp;&nbsp;&nbsp;<a href="{{ url('/edit-booking'.'/'.$booking->id) }}" class="btn btn-cyan btn-sm">Edit</a> | <a rel="{{ $booking->id }}" rel1="delete_booking" <?php /*href="{{ url('/delete_booking'.'/'.$booking->id) }}" */?> href="javascript:" class="btn btn-danger btn-sm deleteRecord">Delete</a>&nbsp;&nbsp;&nbsp;<small class="text-muted">Update : {{$booking->updated_at}}</small></span>
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

    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->


</div>


@endsection

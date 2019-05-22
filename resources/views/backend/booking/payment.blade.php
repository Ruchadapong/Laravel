@extends('backend.dashboard')

@section('content')




        <!-- Modal -->
        @foreach ($payments as $payment)
        <div class="modal fade" id="Modal{{$payment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Image Slip</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <img src="{{asset('/project/backend/img/Payment/large/'.$payment->payment_slip)}}" style="width: 100%;">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('payment') }}" name="payment" id="payment">{{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$payment->id}}" class="f1-first-name form-control" id="id">
                            <input type="hidden" name="booking_id" value="{{$payment->booking_id}}" class="f1-first-name form-control" id="booking_id">
                            <input type="hidden" name="payment_name" value="{{$payment->payment_name}}" class="f1-first-name form-control" id="payment_name">
                            <input type="hidden" name="payment_email" value="{{$payment->payment_email}}" class="f1-first-name form-control" id="payment_email">
                            <input type="hidden" name="payment_bank" value="{{$payment->payment_bank}}" class="f1-first-name form-control" id="payment_bank">
                            <input type="hidden" name="payment_total" value="{{$payment->payment_total}}" class="f1-first-name form-control" id="payment_total">

                            <button type="submit" class="btn btn-primary">Confirm</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Payment</h4>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Payment Datatable</h5>
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
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Bank</th>
                                        <th>Total</th>
                                        <th>Image Slip</th>
                                        <th>Status</th>
                                        <th>Transfer Date:Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $payment)
                                    <tr>

                                        <td>{{$payment->booking_id}}</td>
                                        <td>{{$payment->payment_name}}</td>
                                        <td>{{$payment->payment_email}}</td>
                                        <td>{{$payment->payment_bank}}</td>
                                        <td>{{$payment->payment_total}}</td>
                                        <td>{{$payment->payment_slip}}</td>
                                        <td>{{$payment->status}}</td>
                                        <td>{{$payment->created_at}}</td>
                                        {{-- <td>
                                            @if(!empty($user->ac_image))
                                                <img src="{{asset('/project/backend/img/User/small/'.$user->ac_image)}}" style="width: 60px;">
                                            @endif
                                        </td> --}}
                                    <td ><center><a  data-toggle="modal" data-target="#Modal{{$payment->id}}" class="btn btn-cyan btn-sm">Check Slip</a> <a rel="{{ $payment->id }}" rel1="delete_payment" <?php /*href="{{ url('/delete_payment'.'/'.$payment->id) }}" */?> href="javascript:" class="btn btn-danger btn-sm deleteRecord">Delete</a></center></td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                    </div>
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

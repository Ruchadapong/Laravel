@extends('backend.dashboard')
@section('content')


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Rooms</h4>
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
                        <h5 class="card-title">Room Datatable</h5>
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
                                        <th>ID</th>
                                        <th>Time Start</th>
                                        <th>Time End</th>
                                        <th>Status</th>
                                        <th>Update</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $room)
                                    <tr>

                                        <td>{{$room->id}}</td>
                                        <td>{{$room->room_time_start}}</td>
                                        <td>{{$room->room_time_end}}</td>
                                        <td>{{$room->status}}</td>
                                        <td>{{$room->updated_at}}</td>

                                    <td ><center><a href="{{ url('/edit_room'.'/'.$room->id) }}" class="btn btn-cyan btn-sm">Edit</a> <a rel="{{ $room->id }}" rel1="delete_room" <?php /*href="{{ url('/delete_room'.'/'.$room->id) }}" */?> href="javascript:" class="btn btn-danger btn-sm deleteRecord">Delete</a></center></td>
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

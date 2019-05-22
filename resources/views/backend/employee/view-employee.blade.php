@extends('backend.dashboard')
@section('content')


<div class="page-wrapper">

        <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Employee</h4>
                    </div>
                </div>
            </div>
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

                        @foreach ($employees as $employee)

                            <div class="col-md-3">
                            <div class="card">
                                    @if(!empty($employee->emp_image))
                                    <img src="{{asset('/project/backend/img/Employee/medium/'.$employee->emp_image)}}" class="card-img-top" style="height: 325px;">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">ID : {{$employee->id}}</h5> <h5 class="card-title">Name : {{$employee->emp_name}}</h5>
                                    <p class="card-text">เวลาทำงาน : {{$employee->emp_time_start}} - {{$employee->emp_time_end}}</p>
                                    <p class="card-text">E-mail : {{$employee->emp_email}}</p>
                                    <p class="card-text">Facebook : {{$employee->emp_facebook}}</p>
                                    <p class="card-text">Line : {{$employee->emp_line}}</p>
                                    <p class="card-text">Tel. : {{$employee->emp_tel}}</p>
                                    <p class="card-text">รายละเอียด : {{$employee->emp_description}}</p>
                                    <center><a href="{{ url('/edit_employee'.'/'.$employee->id) }}" class="btn btn-cyan btn-sm">Edit</a> | <a rel="{{ $employee->id }}" rel1="delete_employee" <?php /*href="{{ url('/delete_employee'.'/'.$employee->id) }}" */?> href="javascript:" class="btn btn-danger btn-sm deleteRecord">Delete</a></center>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Update :{{$employee->updated_at}}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
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

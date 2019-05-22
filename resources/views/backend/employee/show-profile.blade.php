@extends('backend.employee.role-employee')
@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">My Profile</h4>
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
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        @if(!empty($empDetails->ac_image))
                        <img src="{{asset('/project/backend/img/User/large/'.$empDetails->ac_image)}}" style="width: 100%;">
                    @endif
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            ID : {{$empDetails->id}}
                       </h3>
                       <h4>First Name : {{$empDetails->ac_fname}}</h4>
                       <h4>Last Name : {{$empDetails->ac_lname}}</h4>
                       <h4>E-mail : {{$empDetails->ac_email}}</h4>
                       <h4>Birthday : {{$empDetails->ac_birthday}}</h4>
                       <h4>Address : {{$empDetails->ac_address}}</h4>
                       <h4>Sex : {{$empDetails->ac_sex}}</h4>
                       <h4>Tel. : {{$empDetails->ac_tel}}</h4>


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
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->

@endsection

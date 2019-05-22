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
    <div class="container-fluid " >
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            @foreach ($packages as $package)
            @if($package->id == 7)
        @continue
        @endif
            <div class="card mb-3">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                            @if(!empty($package->pack_image))
                            <img src="{{asset('/project/backend/img/Package/large/'.$package->pack_image)}}" style="width: 100%; height: 100%;">
                        @endif
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">ID : {{$package->id}} &nbsp;&nbsp;&nbsp; Name : {{$package->pack_name}} </h5>
                          <p class="card-text">รายละเอียด : {{$package->pack_description}}</p>
                          <p class="card-text">ระยะเวลา : {{$package->pack_time}}</p>
                          <p class="card-text">ราคา : {{$package->pack_cost}}</p>
                          <center><a href="{{ url('/edit_package'.'/'.$package->id) }}" class="btn btn-cyan btn-sm">Edit</a> | <a rel="{{ $package->id}}" rel1="delete_package" <?php /*href="{{ url('/delete_package'.'/'.$package->id) }}" */?> href="javascript:" class="btn btn-danger btn-sm deleteRecord">Delete</a>&nbsp;&nbsp;&nbsp;<small class="text-muted">Update : {{$package->updated_at}}</small></center>

                        </div>
                      </div>
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


@endsection

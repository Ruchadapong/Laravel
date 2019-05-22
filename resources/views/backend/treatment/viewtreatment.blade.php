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
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        @foreach ($treatments as $treatment)
        @if($treatment->id == 11)
        @continue
        @endif
        <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                        @if(!empty($treatment->treat_image))
                        <img src="{{asset('/project/backend/img/Treatment/large/'.$treatment->treat_image)}}" style="width: 100%; height: 100%;">
                    @endif
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">ID : {{$treatment->id}} &nbsp;&nbsp;&nbsp; Name : {{$treatment->treat_name}} </h5>
                      <p class="card-text">รายละเอียด : {{$treatment->treat_description}}</p>
                      <p class="card-text">ระยะเวลา : {{$treatment->treat_time}}</p>
                      <p class="card-text">ราคา : {{$treatment->treat_cost}}</p>
                      <center><a href="{{ url('/edit_treatment'.'/'.$treatment->id) }}" class="btn btn-cyan btn-sm">Edit</a> | <a rel="{{ $treatment->id }}" rel1="delete_treatment" <?php /*href="{{ url('/delete_treatment'.'/'.$treatment->id) }}" */?> href="javascript:" class="btn btn-danger btn-sm deleteRecord">Delete</a>&nbsp;&nbsp;&nbsp;<small class="text-muted">Update : {{$treatment->updated_at}}</small></center>

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



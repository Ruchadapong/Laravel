@extends('backend.dashboard')
@section('content')


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">User</h4>
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
                        <h5 class="card-title">User Datatable</h5>
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
                                        <th>E-mail</th>
                                        <th>Name</th>
                                        <th>Birthday</th>
                                        <th>Address</th>
                                        <th>Sex</th>
                                        <th>Role</th>
                                        <th>Telephone</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    @if($user->id == 1)
                                            @continue
                                        @endif
                                    <tr>

                                        <td>{{$user->id}}</td>
                                        <td>{{$user->ac_email}}</td>
                                        <td>{{$user->ac_fname}} {{$user->ac_lname}} </td>
                                        <td>{{$user->ac_birthday}}</td>
                                        <td>{{$user->ac_address}}</td>
                                        <td>{{$user->ac_sex}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>{{$user->ac_tel}}</td>
                                        <td>
                                            @if(!empty($user->ac_image))
                                                <img src="{{asset('/project/backend/img/User/small/'.$user->ac_image)}}" style="width: 60px;">
                                            @endif
                                        </td>
                                    <td ><center><a href="{{ url('/edit_user'.'/'.$user->id) }}" class="btn btn-cyan btn-sm">Edit</a> <a rel="{{ $user->id }}" rel1="delete_user" <?php /*href="{{ url('/delete_user'.'/'.$user->ac_id) }}" */?> href="javascript:" class="btn btn-danger btn-sm deleteRecord">Delete</a></center></td>
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

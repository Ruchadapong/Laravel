<!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-calendar"></i><span class="hide-menu">Bookings</span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="{{url('/add-booking')}}" class="sidebar-link"><i class=" mdi mdi-calendar-plus"></i><span class="hide-menu">Add Bookings </span></a></li>
                                    <li class="sidebar-item"><a href="{{url('/show-booking')}}" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> View Bookings </span></a></li>
                                    <li class="sidebar-item"><a href="{{url('/payment')}}" class="sidebar-link"><i class="mdi mdi-cash"></i><span class="hide-menu"> Payments </span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Users</span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="{{url('/add_user')}}" class="sidebar-link"><i class=" mdi mdi-account-edit"></i><span class="hide-menu">Add User </span></a></li>
                                    <li class="sidebar-item"><a href="{{url('/view_user')}}" class="sidebar-link"><i class="mdi mdi-account-multiple-outline"></i><span class="hide-menu"> View User </span></a></li>
                                </ul>
                            </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Employees</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{url('/add_employee')}}" class="sidebar-link"><i class=" fas fa-user-plus"></i><span class="hide-menu">Add Employee </span></a></li>
                                <li class="sidebar-item"><a href="{{url('/view_employee')}}" class="sidebar-link"><i class="fas fa-users"></i><span class="hide-menu"> View Employee </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-note-multiple"></i><span class="hide-menu">Treatments </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{url('/add_treatment')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Add Treatments </span></a></li>
                                <li class="sidebar-item"><a href="{{url('/view_treatment')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> View Treatments </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Packages</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{url('/add_package')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Add Package </span></a></li>
                                <li class="sidebar-item"><a href="{{url('/view_package')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> View Package </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-scale-bathroom"></i><span class="hide-menu">Rooms</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{url('/add_room')}}" class="sidebar-link"><i class="mdi mdi-animation"></i><span class="hide-menu">Add Room</span></a></li>
                                <li class="sidebar-item"><a href="{{url('/view_room')}}" class="sidebar-link"><i class="mdi mdi-arrange-bring-forward"></i><span class="hide-menu"> View Room </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

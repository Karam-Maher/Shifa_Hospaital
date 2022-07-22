<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin-assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Shifa-Hospaital</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin-assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">

            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('homee')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-alt"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="fa fa-user-md" aria-hidden="true"></i>
                        <p>
                            Doctors
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('doctor.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Doctors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('doctor.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Doctor</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <p>
                            Appointment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('show_appointment') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>showappointment</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="fas fa-newspaper" aria-hidden="true"></i>
                        <p>
                            New
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('posts.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All News</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('posts.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>




<style>
   .nav .nav-item a{
        color: #2f2f2f;
    }
</style>




<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-danger navbar-dark bg-transparent"  style=" background-image: linear-gradient(to right,#bedfff,  #1565c0,   #dc4451, #dc3545);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-blue"></i></a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

        <!-- User Account: style can be found in dropdown.less -->
        <li class="nav-item dropdown">
            <a class="nav-link pt-2" data-toggle="dropdown" href="#">
{{--                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">--}}
                <span class="hidden-xs">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header text-center">
{{--                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
                    <h5 class="pt-2">
                        {{\Illuminate\Support\Facades\Auth::user()->name}}
                    </h5>
                </li>
                <!-- Menu Body -->
                <li class="user-body pb-2">
                    <div class="col-xs-4 text-center">
                        <p>{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                    </div>
                </li>
                <div class="dropdown-divider"></div>
                <!-- Menu Footer-->
                <li class="user-footer p-2">
                    <div class="float-left mb-2">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"  >
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->








{{--style="background-image: url({{asset('public/img/logo.png')}}) ; background-repeat: no-repeat; position:center;"--}}

<!-- Main Sidebar Container -->
<div >
    <aside class="main-sidebar sidebar-light elevation-1" style="background-image: linear-gradient(to right,white, #bcdcfe); ">

            <a href="{{url('/home')}}" class="brand-link">
                <img src="{{asset('img/logo.png')}}" alt="WAH Logo" class="brand-image img-circle">
                <span class="brand-text font-weight-light text-dark">Share Project</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
          

            <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                         
                            <li class="nav-item">
                                <a href="{{url('home')}}" class="nav-link @if(request()->segment(2)=="7") active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home</p>
                                </a>
                            </li>
{{--                            
                            <li class="nav-item">
                                <a href="{{url('createTeam')}}" class="nav-link @if(request()->segment(2)=="6") active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Team</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('create-project')}}" class="nav-link @if(request()->segment(2)=="5") active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Project</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('usernameAndPassword')}}" class="nav-link @if(request()->segment(2)=="4") active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add items in Project</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="{{url('share-project')}}" class="nav-link @if(request()->segment(2)=="3") active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Share Project with Team</p>
                                </a>
                            </li> 

                            <li class="nav-item">
                                <a href="{{url('shareProjectUser')}}" class="nav-link @if(request()->segment(2)=="2") active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Share Project with User</p>
                                </a>
                            </li>  

                            <li class="nav-item">
                                <a href="{{url('allsharedProject')}}" class="nav-link @if(request()->segment(2)=="1") active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Shared Projects by Other</p>
                                </a>
                            </li>        --}}

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>

        <!-- Brand Logo -->

        <!-- /.sidebar -->
    </aside>

</div>

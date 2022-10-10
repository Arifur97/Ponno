<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        {{--<div class="user-panel">--}}
            {{--<div class="pull-left image">--}}
                {{--<br/>--}}
{{--                <img src="{{asset('adminStyle')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />--}}
            {{--</div>--}}
            {{--<div class="pull-left info">--}}
                {{--<p>{{ Auth::user()->name }}</p>--}}
                {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="{{ url('/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>User Module</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/add-user') }}"><i class="fa fa-edit"></i>Add User</a></li>
                    <li><a href="{{ url('/manage-user') }}"><i class="fa fa-edit"></i>Manage User</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Slider Module</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-slider')}}"><i class="fa fa-edit"></i>Add Slider</a></li>
                    <li><a href="{{url('/manage-slider')}}"><i class="fa fa-edit"></i>Manage Slider</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Category Module</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/add-category') }}"><i class="fa fa-edit"></i>Add Category</a></li>
                    <li><a href="{{ url('/manage-category') }}"><i class="fa fa-edit"></i>Manage Category</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Sub Category Module</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/add-sub-category') }}"><i class="fa fa-edit"></i>Add Sub Category</a></li>
                    <li><a href="{{ url('/manage-sub-category') }}"><i class="fa fa-edit"></i>Manage Sub Category</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Brand Module</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-brand')}}"><i class="fa fa-edit"></i>Add Brand</a></li>
                    <li><a href="{{url('/manage-brand')}}"><i class="fa fa-edit"></i>Manage Brand</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Size/Weight Module</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/add-size-width') }}"><i class="fa fa-edit"></i>Add Size/Weight</a></li>
                    <li><a href="{{ url('/manage-size-width') }}"><i class="fa fa-edit"></i>Manage Size/Weight</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Product Module</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-product')}}"><i class="fa fa-edit"></i>Add Product</a></li>
                    <li><a href="{{url('/manage-product')}}"><i class="fa fa-edit"></i>Manage Product</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>About Module</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-about')}}"><i class="fa fa-edit"></i>Add About</a></li>
                    <li><a href="{{url('/manage-about')}}"><i class="fa fa-edit"></i>Manage About</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{url('/manage-order')}}"><i class="fa fa-files-o"></i> <span>Order Module</span></a>
            </li>
            <li class="treeview">
                <a href="{{url('/view-direct-order')}}"><i class="fa fa-files-o"></i> <span>Direct Order</span></a>
            </li>
            <li class="treeview">
                <a href="{{url('/manage-customer')}}"><i class="fa fa-files-o"></i> <span>Customer Module</span></a>
            </li>
            <li class="treeview">
                <a href="{{url('/manage-review')}}"><i class="fa fa-files-o"></i> <span>Review Module</span></a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
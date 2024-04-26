<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('home') }}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('categories.index') }}">
                        <i class="mdi mdi-calendar-month"></i>
                        <span> Category </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}">
                        <i class="mdi mdi-calendar-month"></i>
                        <span> Products </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="mdi mdi-calendar-month"></i>
                        <span> Users </span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header text-center">              
        <a href="dashboard.php">
            <img src="{{ asset('adminAsset/images/logo.jpg') }}" alt="" style="width:96px;height:96px;">
        </a>        
    </div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{ url('/admin') }}">
                <i class="fas fa-th-large"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('admin.users.create') }}">
                <i class="fas fa-chart-pie"></i>
                New User
            </a>
        </li>
        <li>
            <a href="{{ route('admin.users.index') }}">
                <i class="fas fa-chart-pie"></i>
                Users List
            </a>
        </li>
        <!-- <li>
            <a href="{{ route('admin.course-fee.index') }}">
                <i class="fas fa-chart-pie"></i>
                Course Fee
            </a>
        </li> -->
        
        <li>
            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-users"></i>
                Admin-Approval
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu4">
                <li>
                    <a href="{{ route('admin.ca-final-new-course-payment') }}">CA Final (New Course)</a>
                </li>
                <li>
                    <a href="{{ route('admin.ca-final-old-course-payment') }}">CA Final (Old Course)</a>
                </li>
                <li>
                    <a href="{{ route('admin.ca-intermediate-payment') }}">CA Intermediate</a>
                </li>
                <li>
                    <a href="{{ route('admin.ca-ipcc-payment') }}">CA IPCC</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.upload-paper') }}">
                <i class="fas fa-users"></i>
                Upload Paper
            </a>
        </li>
    </ul>
</nav>
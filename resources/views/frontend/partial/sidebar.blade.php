<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
      
     
        @if (Auth::user()->user_type == 1)
            <li class="nav-item">
                <a class="nav-link " href="{{route('user.list')}}">
                <i class="fa-duotone fa-user-hair-mullet"></i>  <span>User List</span>
                </a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link " href="{{route('user.edit')}}">
                <i class="fa-duotone fa-user-hair-mullet"></i>  <span>Edit Info</span>
                </a>
            </li>
        @endif
      
    </ul>

</aside><!-- End Sidebar-->

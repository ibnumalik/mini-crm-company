<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    {{-- <img src="../../assets/images/faces/face4.jpg" alt="image" /> --}}
                    <span class="online-status online"></span>
                </div>
                <div class="profile-name">
                    <p class="name">{{ Auth::user()->name }}</p>
                    {{-- <p class="designation">Manager</p> --}}
                    {{-- <div class="badge badge-teal mx-auto mt-3">Online</div> --}}
                </div>
            </div>
        </li>
        <b-nav-item href="{{route('home')}}">
            <view-dashboard-icon class="menu-icon"></view-dashboard-icon>
            <span class="menu-title">Dashboard</span>
        </b-nav-item>
        <b-nav-item href="{{route('companies.index')}}">
            <domain-icon class="menu-icon"></domain-icon>
            <span class="menu-title">Companies</span>
        </b-nav-item>
        <b-nav-item href="{{route('employees.index')}}">
            <account-multiple-icon class="menu-icon"></account-multiple-icon>
            <span class="menu-title">Employees</span>
        </b-nav-item>
        <b-nav-item href="{{route('employees.index')}}" class="mt-auto bg-secondary">
            <account-multiple-icon class="menu-icon text-white hover-secondary"></account-multiple-icon>
            <span class="menu-title text-white">Profile</span>
        </b-nav-item>
    </ul>
</nav>

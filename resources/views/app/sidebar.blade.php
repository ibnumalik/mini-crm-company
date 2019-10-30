<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image"> <img src="../../assets/images/faces/face4.jpg" alt="image" /> <span
                        class="online-status online"></span> </div>
                <div class="profile-name">
                    <p class="name">Richard V.Welsh</p>
                    <p class="designation">Manager</p>
                    <div class="badge badge-teal mx-auto mt-3">Online</div>
                </div>
            </div>
        </li>
        <b-nav-item href="{{route('home')}}">
            <img src="{{asset('images/menu_icons/01.png')}}" alt="menu icon" class="menu-icon">
            <span class="menu-title">Dashboard</span>
        </b-nav-item>
        <b-nav-item href="{{route('companies.index')}}">
            <img class="menu-icon" src="{{asset('images/menu_icons/company.png')}}" alt="menu icon">
            <span class="menu-title">Companies</span>
        </b-nav-item>
        <b-nav-item href="{{route('employees.index')}}">
            <img class="menu-icon" src="{{asset('images/menu_icons/employee.png')}}" alt="menu icon">
            <span class="menu-title">Employees</span>
        </b-nav-item>
    </ul>
</nav>

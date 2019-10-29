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
        <li class="nav-item">
            <a href="/" class="nav-link">
                <img
                    class="menu-icon"
                    src="{{asset('images/menu_icons/01.png')}}"
                    alt="menu icon">
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/" class="nav-link">
                <img
                    class="menu-icon"
                    src="{{asset('images/menu_icons/02.png')}}"
                    alt="menu icon">
                <span class="menu-title">Widgets</span>
            </a>
        </li>
        <li class="nav-item">
            <span class="nav-link" v-b-toggle="'sample-pages'">
                <img class="menu-icon" src="{{asset('images/menu_icons/08.png')}}" alt="menu icon">
                <span class="menu-title">Sample Pages</span><i class="menu-arrow"></i>
            </span>
            <b-collapse id="sample-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a href="login" class="nav-link">
                            login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="register" class="nav-link">register</a>
                    </li>
                    <li class="nav-item">
                        <a href="404" class="nav-link">404</a>
                    </li>
                    <li class="nav-item">
                        <a href="500" class="nav-link">500</a>
                    </li>
                </ul>
            </b-collapse>
        </li>
        <li class="nav-item">
            <span class="nav-link" v-b-toggle="'ui-components'">
                <img class="menu-icon" src="{{asset('images/menu_icons/03.png')}}" alt="menu icon"><span
                    class="menu-title">UI Components</span><i class="menu-arrow"></i>
            </span>
            <b-collapse id="ui-components">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a href="" class="nav-link">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Button</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Badges</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Breadcrumbs</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Carousel</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Dropdowns</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Typography</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Paginations</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Tooltips</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Progress</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Tabs</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Modals</a>
                    </li>
                </ul>
            </b-collapse>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <img
                    class="menu-icon"
                    src="{{asset('images/menu_icons/06.png')}}"
                    alt="menu icon">
                    <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <img
                    class="menu-icon"
                    src="{{asset('images/menu_icons/07.png')}}"
                    alt="menu icon">
                    <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <img
                    class="menu-icon"
                    src="{{asset('images/menu_icons/04.png')}}"
                    alt="menu icon">
                <span class="menu-title">Forms</span>
            </a>
        </li>
    </ul>
</nav>

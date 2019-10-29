<b-navbar class="fixed-top" toggleable="md" type="dark" variant="info">
    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <b-navbar-brand href="{{url('/')}}"> crm </b-navbar-brand>
    </div>
    <b-collapse is-nav id="nav_collapse">
        @guest
        <b-nav-item href="{{ route('login') }}">{{ __('Login') }}</b-nav-item>
        @else

        <b-navbar-nav class="header-links">
            <b-nav-item href="#"><i class="mdi mdi-image-filter"></i>Gallery</b-nav-item>
            <b-nav-item href="#" active><i class="mdi mdi-email-outline"></i>Inbox</b-nav-item>
            <b-nav-item href="#"><i class="mdi mdi-calendar"></i>Calendar</b-nav-item>
        </b-navbar-nav>
        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
            <b-nav-item-dropdown right class="preview-list">
                <template slot="button-content">
                    <div class="count-indicator">
                        <i class="icon mdi mdi-email-variant"></i>
                        <span class="count">7</span>
                    </div>
                </template>
                <b-dropdown-item class="preview-item" href="#">
                    <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                    </p>
                    <span class="badge badge-pill badge-warning float-right">View all</span>
                </b-dropdown-item>
                <b-dropdown-item class="preview-item" href="#">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                            <i class="mdi mdi-alert-circle-outline mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-medium">Application Error</h6>
                        <p class="font-weight-light small-text">
                            Just now
                        </p>
                    </div>
                </b-dropdown-item>
                <b-dropdown-item class="preview-item" href="#">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-warning">
                            <i class="mdi mdi-comment-text-outline mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-medium">Settings</h6>
                        <p class="font-weight-light small-text">
                            Private message
                        </p>
                    </div>
                </b-dropdown-item>
                <b-dropdown-item class="preview-item" href="#">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                            <i class="mdi mdi-email-outline mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-medium">New user registration</h6>
                        <p class="font-weight-light small-text">
                            2 days ago
                        </p>
                    </div>
                </b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown right>
                <template slot="button-content">
                    <div class="count-indicator">
                        <i class="icon mdi mdi-bell-ring"></i>
                        <span class="count">4</span>
                    </div>
                </template>
                <b-dropdown-item href="#">Profile</b-dropdown-item>
                <b-dropdown-item v-on:click="logout">Signout</b-dropdown-item>
                <form ref="logoutForm" class="d-none" action="{{route('logout')}}" method="post">
                    @csrf
                </form>
            </b-nav-item-dropdown>
            <b-nav-item href="#"><img class="img-xs rounded-circle" src="../../assets/images/faces/face4.jpg"
                    alt="profile image"></b-nav-item>
        </b-navbar-nav>
        @endguest
    </b-collapse>
</b-navbar>

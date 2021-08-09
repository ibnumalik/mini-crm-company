<template>
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <!-- <img src="../../assets/images/faces/face4.jpg" alt="image" /> -->
            <span class="online-status online"></span>
          </div>
          <div class="profile-name">
            <p class="name">{{ user.name }}</p>
            <!-- <p class="designation">Manager</p>  -->
            <!-- <div class="badge badge-teal mx-auto mt-3">Online</div> -->
          </div>
        </div>
      </li>

      <b-list-group flush>
        <!-- Dashboard Item -->
        <Link
          class="list-group-item list-group-item-action"
          :href="$route('home')"
          :class="{ active: $page.url === 'employees' }"
        >
          <div class="sidebar-item">
            <view-dashboard-icon class="menu-icon"></view-dashboard-icon>
            <span class="menu-title">Dashboard</span>
          </div>
        </Link>

        <!-- Companies -->
        <b-list-group-item>
          <div class="sidebar-item" v-b-toggle.company>
            <domain-icon class="menu-icon"></domain-icon>
            <span class="menu-title">Companies</span>
          </div>
          <b-collapse id="company">
            <b-list-group class="sub-menu">
              <Link
                class="list-group-item list-group-item-action"
                :href="$route('companies.index')"
                :class="{ active: $page.url === 'companies' }"
              >
                List Companies
              </Link>
              <Link
                class="list-group-item list-group-item-action"
                :href="$route('companies.create')"
                :class="{ active: $page.url === 'companies/create' }"
              >
                Add Company
              </Link>
            </b-list-group>
          </b-collapse>
        </b-list-group-item>

        <!-- Employees -->
        <b-list-group-item>
          <div class="sidebar-item" v-b-toggle.employees>
            <account-multiple-icon class="menu-icon"></account-multiple-icon>
            <span class="menu-title">Employees</span>
          </div>

          <b-collapse id="employees">
            <b-list-group class="sub-menu">
              <Link
                class="list-group-item list-group-item-action"
                :href="$route('employees.index')"
                :class="{ active: $page.url === 'employees' }"
              >
                List Employees
              </Link>
              <Link
                class="list-group-item list-group-item-action"
                :href="$route('employees.create')"
              >
                Add Employee
              </Link>
            </b-list-group>
          </b-collapse>
        </b-list-group-item>
      </b-list-group>

      <b-nav-item :href="$route('employees.index')" class="mt-auto">
        <account-multiple-icon
          class="menu-icon hover-secondary"
        ></account-multiple-icon>
        <span class="menu-title">Profile</span>
      </b-nav-item>
    </ul>
  </nav>
</template>

<script>
import { VBToggle } from 'bootstrap-vue';

export default {
  directives: { BToggle: VBToggle },
  computed: {
    user() {
      return this.$page.props.auth.user;
    },
  },
};
</script>

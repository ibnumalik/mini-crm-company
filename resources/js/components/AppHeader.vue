<template>
  <b-navbar class="fixed-top" toggleable="md" type="dark" variant="info">
    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      <Link class="navbar-brand" :href="$route('home')">crm</Link>
    </div>
    <b-collapse is-nav id="nav_collapse">
      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-nav-item-dropdown right class="preview-list">
          <template slot="button-content">
            <div class="count-indicator">
              <email-variant-icon></email-variant-icon>
              <!-- <span class="count">7</span> -->
            </div>
          </template>
        </b-nav-item-dropdown>
        <b-nav-item-dropdown right>
          <template slot="button-content">
            <div class="count-indicator">
              <bell-ring-icon></bell-ring-icon>
              <span class="count">4</span>
            </div>
          </template>
          <b-dropdown-item class="preview-item" href="#">
            <p class="mb-0 font-weight-normal float-left">
              You have 4 new notifications
            </p>
            <span class="badge badge-pill badge-warning float-right">View all</span>
          </b-dropdown-item>
          <b-dropdown-item class="preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <alert-circle-outline-icon class="mx-0"></alert-circle-outline-icon>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-medium">
                Application Error
              </h6>
              <p class="font-weight-light small-text">
                Just now
              </p>
            </div>
          </b-dropdown-item>
          <b-dropdown-item class="preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <comment-text-outline-icon fill-color="#fff"></comment-text-outline-icon>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-medium">Settings</h6>
              <p class="font-weight-light small-text">
                Private message
              </p>
            </div>
          </b-dropdown-item>
          <b-dropdown-item class="preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <email-outline-icon></email-outline-icon>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-medium">
                New user registration
              </h6>
              <p class="font-weight-light small-text">
                2 days ago
              </p>
            </div>
          </b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item-dropdown right>
          <template slot="button-content">
            <img class="avatar" src="" />
          </template>
          <b-dropdown-item router-component-name="router-link" :to="$route('profile')">
            Profile
          </b-dropdown-item>
          <b-dropdown-item-button v-on:click="logout">Signout</b-dropdown-item-button>
          <form ref="logoutForm" class="d-none" :action="$route('logout')" method="post">
            <input type="hidden" name="_token" :value="csrf" />
          </form>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>

<script>
export default {
  name: 'AppHeader',
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute('content'),
    };
  },
  methods: {
    logout(event) {
      event.preventDefault();
      this.$refs.logoutForm.submit();
    },
  },
};
</script>

<style scoped>
.avatar {
  display: inline-block;
  font-family: Arial, sans-serif;
  font-weight: 300;
  line-height: 2;
  text-align: center;
  background: #ccc;
  border-radius: 999px;

  min-width: 37px;
  min-height: 37px;
  position: relative;
}
</style>

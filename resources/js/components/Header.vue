<template>
  <header class="site-header">
    <div class="container">
      <div class="site-header-inner">
        <div class="brand header-brand">
          <h1 class="m-0">
            <a href="#">
              <img
                class="header-logo-image asset-light"
                src="images/logo-light.svg"
                alt="Logo"
              />
              <img
                class="header-logo-image asset-dark"
                src="images/logo-dark.svg"
                alt="Logo"
              />
            </a>
          </h1>
        </div>
        <ul class="nav-header-right">
          <template v-if="guest">
            <li>
              <Link class="nav-link" href="/login">Login</Link>
            </li>
          </template>

          <template v-else>
              <Link class="nav-link" href="/home">Dashboard</Link>
          </template>
        </ul>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  computed: {
    guest() {
      return !this.$page.props.auth.user;
    },
  },
};
</script>

<style scoped>
.nav-header-right {
  list-style-type: none;
  padding-left: 0;
}

.site-header {
  padding: 0;
}

.site-header-inner {
  /* padding-top: 24px; */
}

.nav-link {
  text-decoration: none;
}
</style>

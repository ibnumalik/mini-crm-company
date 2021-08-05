<template>
  <div id="app">
    <main class="main-app">
      <AppHeader />

      <b-container fluid class="page-body-wrapper">
        <Sidebar></Sidebar>

        <slot />
      </b-container>
    </main>
  </div>
</template>

<script>
import AppHeader from '../components/AppHeader.vue';
import Sidebar from '../components/Sidebar.vue';

export default {
  components: {
    AppHeader,
    Sidebar,
  },
};
</script>

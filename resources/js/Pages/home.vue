<template>
  <div class="main-panel">
    <div class="content-wrapper">
      <section class="dashboard">
        <b-row>
          <b-col cols="6" md="3" class="grid-margin">
            <a :href="$route('companies.index')" class="card-link">
              <b-card>
                <b-card-group class="justify-content-between">
                  <cube-icon class="text-danger icon-lg mb-auto"></cube-icon>

                  <b-card-group class="d-flex flex-column">
                    <b-card-text class="mb-0"> Total Company </b-card-text>
                    <b-card-title
                      title-tag="h3"
                      class="font-weight-bold text-right mb-0"
                    >
                      {{ total_companies }}
                    </b-card-title>
                  </b-card-group>
                </b-card-group>

                <p class="text-muted mb-0 mt-3">
                  <alert-octagon-icon></alert-octagon-icon>
                  65% lower growth
                </p>
              </b-card>
            </a>
          </b-col>
          <b-col cols="6" md="3" class="grid-margin">
            <a :href="$route('employees.index')" class="card-link">
              <b-card>
                <b-card-group class="justify-content-between">
                  <account-group-icon
                    class="text-primary icon-lg"
                  ></account-group-icon>

                  <b-card-group class="d-flex flex-column">
                    <b-card-text class="mb-0"> Total Employee </b-card-text>
                    <b-card-title
                      title-tag="h3"
                      class="font-weight-bold text-right mb-0"
                    >
                      {{ total_employees }}
                    </b-card-title>
                  </b-card-group>
                </b-card-group>

                <p class="text-muted mb-0 mt-3">
                  <alert-octagon-icon></alert-octagon-icon>
                  65% lower growth
                </p>
              </b-card>
            </a>
          </b-col>
        </b-row>
      </section>
    </div>
  </div>
</template>

<script>
import Layout from '../layouts/dashboard.vue';

export default {
  name: 'Home',
  props: ['total_companies', 'total_employees'],
  layout: Layout,
};
</script>

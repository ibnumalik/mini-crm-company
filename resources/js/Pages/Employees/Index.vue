<template>
  <div class="main-panel">
    <div class="content-wrapper">
      <b-container fluid>
        <b-row>
          <b-col cols="12" lg="4">
            <b-alert
              v-if="$page.props.flash.message"
              variant="success"
              show
              dismissible
              fade
            >
              {{ $page.props.flash.message }}
            </b-alert>

            <b-card title="Employee List">
              <ol>
                <li v-for="employee in employees.data" :key="employee.id">
                  <a :href="$route('employees.show', [employee.id])">
                    {{ employee.first_name + ' ' + employee.last_name }}
                  </a>
                </li>
              </ol>
              <b-pagination-nav
                :link-gen="linkGen"
                :number-of-pages="employees.last_page"
              ></b-pagination-nav>
            </b-card>
          </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>

<script>
import Layout from '../../layouts/dashboard.vue';
import { BPaginationNav } from 'bootstrap-vue';

export default {
  layout: Layout,
  components: { BPaginationNav },
  props: ['employees'],
  mounted() {
    console.log(this.employees);
  },
  methods: {
    linkGen(pageNum) {
      return pageNum === 1 ? '?' : `?page=${pageNum}`;
    },
  },
};
</script>

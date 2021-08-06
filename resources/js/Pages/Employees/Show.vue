<template>
  <div class="main-panel">
    <div class="content-wrapper">
      <b-container fluid>
        <b-row>
          <b-col cols="12" lg="4">
            <b-card :title="employee.first_name + ' ' + employee.last_name">
              <div class="employee-item">
                <p class="mb-0">
                  Phone
                </p>
                <p>{{ employee.phone }}</p>
              </div>

              <div class="employee-item">
                <p class="mb-0">
                  Email
                </p>
                <p>
                  <a :href="'mailto:' + employee.email">
                    {{ employee.email }}
                  </a>
                </p>
              </div>

              <div class="employee-item">
                <p class="mb-0">Employer</p>
                <p>
                  <Link :href="$route('companies.show', employee.company.id)">
                    {{ employee.company.name }}
                  </Link>
                </p>
              </div>

              <div class="action d-flex">
                <Link
                  :href="$route('employees.edit', employee.id)"
                  class="btn btn-info text-white mr-3"
                >
                  Edit
                </Link>

                <form @submit.prevent="deleteEmployee">
                  <button type="submit" class="btn btn-danger text-white">
                    Delete
                  </button>
                </form>
              </div>
            </b-card>
          </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>

<script>
import Layout from '../../layouts/dashboard.vue';

export default {
  props: ['employee'],
  layout: Layout,
  methods: {
    deleteEmployee() {
      this.$inertia.delete(this.$route('employees.destroy', this.employee.id));
    },
  },
};
</script>

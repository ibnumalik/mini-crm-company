<template>
  <div class="main-panel">
    <div class="content-wrapper">
      <b-container fluid>
        <b-row>
          <b-col cols="12" xl="4">
            <b-card :title="company.name">
              <div
                class="d-flex align-items-center mb-4"
                v-if="company.logo_path"
              >
                <img
                  width="25"
                  class="mr-2"
                  :src="url(`storage/images/${company.logo_path}`)"
                  :alt="company.name"
                />
              </div>

              <div class="company-item">
                <p class="mb-0 font-weight-bold">Website</p>
                <p>
                  <a :href="company.website">
                    {{ company.website }}
                  </a>
                </p>
              </div>

              <div class="company-item">
                <p class="mb-0 font-weight-bold">Email</p>
                <p>
                  <a :href="`mailto:${company.email}`">
                    {{ company.email }}
                  </a>
                </p>
              </div>

              <div class="company-item">
                <p class="mb-0 font-weight-bold">Employees</p>
                <ol>
                  <li v-for="employee in company.employees" :key="employee.id">
                    <Link :href="$route('employees.show', employee.id)">
                      {{ employee.first_name }}
                    </Link>
                  </li>
                </ol>
              </div>

              <div class="action d-flex">
                <Link
                  :href="$route('companies.edit', company.id)"
                  class="btn btn-info text-white mr-3"
                >
                  Edit
                </Link>

                <form @submit.prevent="deleteCompany">
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
import Layout from '../../layouts/dashboard';

export default {
  props: ['company'],
  layout: Layout,
  mounted() {
      console.log(this.company);
  },
  methods: {
    deleteCompany() {
      this.$inertia.delete(`/companies/${this.company.id}`);
    },
  },
};
</script>

<template>
  <div class="main-panel">
    <div class="content-wrapper">
      <b-container fluid>
        <b-row>
          <b-col cols="12" md="8" xl="4">
            <b-card :title="title">
              <form @submit.prevent="submit">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="first_name">First Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="first_name"
                      name="first_name"
                      placeholder="First Name"
                      v-model="form.first_name"
                    />
                    <div v-if="form.errors.first_name" class="invalid-feedback">
                      {{ form.errors.first_name }}
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="last_name">Last Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="last_name"
                      name="last_name"
                      placeholder="Last name"
                      v-model="form.last_name"
                    />
                    <div v-if="form.errors.last_name" class="invalid-feedback">
                      {{ form.errors.last_name }}
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Email address"
                    v-model="form.email"
                  />
                  <div v-if="form.errors.email" class="invalid-feedback">
                    {{ form.errors.email }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    name="phone"
                    placeholder="Phone Number"
                    v-model="form.phone"
                  />
                  <div v-if="form.errors.phone" class="invalid-feedback">
                    {{ form.errors.phone }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="company_id">Company</label>
                  <select
                    name="company_id"
                    id="company_id"
                    class="form-control"
                    v-model="form.company.id"
                  >
                    <option
                      v-for="company in companies"
                      :key="company.id"
                      :value="company.id"
                    >
                      {{ company.name }}
                    </option>
                  </select>
                  <div v-if="form.errors.company_id" class="invalid-feedback">
                    {{ form.errors.company_id }}
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
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
  layout: Layout,
  props: ['employee', 'companies'],
  data() {
    return {
      form: this.$inertia.form({
        first_name: null,
        last_name: null,
        email: null,
        phone: null,
        company_id: null,
        company: {},
      }),
    };
  },
  computed: {
    isEdit() {
      return !!this.employee;
    },
    title() {
      return this.employee
        ? `Edit  ${this.employee.first_name} ${this.employee.last_name}`
        : 'Create new employee';
    },
  },
  mounted() {
    if (this.employee) {
      this.form = this.$inertia.form({
        ...this.employee,
      });
    }
  },
  methods: {
    submit() {
      //   console.log(this.form);

      const form = this.form.transform(data => {
        console.log(data);
        return {
          first_name: data.first_name,
          last_name: data.last_name,
          email: data.email,
          phone: data.phone,
          company_id: data.company.id,
        };
      });

      this.isEdit
        ? form.put(`/employees/${this.employee.id}`)
        : form.post('/employees');
    },
  },
};
</script>

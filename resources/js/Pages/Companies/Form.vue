<template>
  <div class="main-panel">
    <div class="content-wrapper">
      <b-container fluid>
        <b-row>
          <b-col cols="12" md="8" xl="4">
            <b-card :title="title">
              <div
                class="alert alert-danger"
                role="alert"
                v-if="$page.props.flash.message"
              >
                <!-- {{session('invalid_file_error')}} -->
                {{ $page.props.flash.message }}
              </div>
              <form @submit.prevent="submit">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter company name"
                    v-model="form.name"
                  />
                  <div v-if="form.errors.name" class="invalid-feedback">
                    {{ form.errors.name }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter company email address"
                    v-model="form.email"
                  />
                  <div v-if="form.errors.email" class="invalid-feedback">
                    {{ form.errors.email }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="website">Website</label>
                  <input
                    type="text"
                    class="form-control"
                    id="website"
                    name="website"
                    placeholder="Enter company website"
                    v-model="form.website"
                  />
                  <div v-if="form.errors.website" class="invalid-feedback">
                    {{ form.errors.website }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="logo">Logo</label>
                  <input
                    class="form-control-file"
                    type="file"
                    name="logo"
                    id="logo"
                    @change="companyLogoFileChanged"
                    @input="form.logo = $event.target.files[0]"
                  />
                  <img
                    class="mt-2 w-25"
                    v-bind:src="companyLogoPreview"
                    alt="Logo Preview"
                  />
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
  props: ['company'],
  data() {
    return {
      form: this.$inertia.form({
        name: null,
        email: null,
        website: null,
        logo: null,
      }),
      companyLogoPreview: null,
    };
  },
  mounted() {
    if (this.company) {
      this.form = this.$inertia.form({ ...this.company });
    }
  },
  computed: {
    isEdit() {
      return !!this.company;
    },
    title() {
      return this.company
        ? `Edit  ${this.company.name} ${this.company.last_name}`
        : 'Create new company';
    },
  },
  methods: {
    companyLogoFileChanged(event) {
      const logo = event.target.files;

      if (logo && logo[0]) {
        let reader = new FileReader();

        reader.onload = (e) => (this.companyLogoPreview = e.target.result);

        reader.readAsDataURL(logo[0]);
      }
    },
    submit() {
      this.isEdit
        ? this.form.put(`/companies/${this.company.id}`)
        : this.form.post('/companies');
    },
  },
};
</script>
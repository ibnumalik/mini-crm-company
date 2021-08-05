<template>
  <section class="login">
    <div class="wrapper d-flex align-items-center auth login-full-bg">
      <div class="row w-100 vh-100">
        <div class="mx-auto my-auto">
          <div class="auth-form-dark text-left p-5">
            <h2>Login</h2>
            <h4 class="font-weight-light">Hello! let's get started</h4>
            <form class="pt-5" @submit.prevent="submit">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  v-model="form.email"
                />
                <i class="mdi mdi-account"></i>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  v-model="form.password"
                />
                <i class="mdi mdi-eye"></i>
              </div>
              <div class="mt-5">
                <button
                  type="submit"
                  class="btn btn-block btn-warning btn-lg font-weight-medium"
                  href="../../index.html"
                >
                  Login
                </button>
              </div>
              <div class="mt-3 text-center">
                <a href="#" class="auth-link text-white">Forgot password?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'login',
  data() {
    return {
      form: {
        email: null,
        password: null,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.post('/login', this.form);
    },
  },
};
</script>

<style scoped lang="scss">
.login {
  // background: #000;
}
</style>

<script setup>
import { router } from "@inertiajs/vue3";
const toRegister = () => {
  router.get(route("auth.register"));
};
</script>
<template>
  <div class="auth_left">
    <div class="card">
      <div class="text-center mb-5">
        <a class="header-brand" href="index.html"
          ><i class="fa fa-dashboard brand-logo"></i
        ></a>
      </div>
      <div class="card-body">
        <div class="card-title">Login to your account</div>
        <div class="form-group">
          <label class="form-label">Email address</label>
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            placeholder="Enter email"
          />
        </div>
        <div class="form-group">
          <label class="form-label"
            >Password<a href="forgot-password.html" class="float-right small"
              >I forgot password</a
            ></label
          >
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="Password"
          />
        </div>
        <div class="form-group">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" />
            <span class="custom-control-label">Remember me</span>
          </label>
        </div>
        <div class="form-footer">
          <a href="index.html" class="btn btn-primary btn-block" title=""
            >Sign in</a
          >
        </div>
      </div>
      <div class="text-center text-muted">
        Don't have account yet?
        <a href="javascript:void(0)" @click="toRegister">Sign up</a>
      </div>
    </div>
  </div>
</template>

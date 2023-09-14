<script setup></script>
<template>
  <div id="left-sidebar" class="sidebar">
    <div class="container">
      <h5 class="brand-name">
        Crush On
        <a href="javascript:void(0)" class="menu_option float-right"
          ><i
            class="icon-grid font-16"
            data-toggle="tooltip"
            data-placement="left"
            title="Grid & List Toggle"
          ></i
        ></a>
      </h5>
      <nav id="left-sidebar-nav" class="sidebar-nav">
        <ul class="metismenu">
          <li class="g_heading">Directories</li>
          <li>
            <a href="index.html"
              ><i class="icon-home"></i><span>Dashboard</span></a
            >
          </li>
          <li>
            <a href="javascript:void(0)" class="has-arrow arrow-c"
              ><i class="icon-lock"></i><span>Authentication</span></a
            >
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="register.html">Register</a></li>
              <li>
                <a href="forgot-password.html">Forgot password</a>
              </li>
              <li><a href="404.html">404 error</a></li>
              <li><a href="500.html">500 error</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</template>

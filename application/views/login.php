<style>@charset "UTF-8";
.authentication-wrapper {
  display: flex;
  flex-basis: 100%;
  min-height: 100vh;
  width: 100%;
}
.authentication-wrapper .authentication-inner {
  width: 100%;
}
.authentication-wrapper.authentication-basic {
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.authentication-wrapper.authentication-cover {
  align-items: flex-start;
}
.authentication-wrapper.authentication-cover .authentication-inner {
  height: 100vh;
}
.authentication-wrapper.authentication-basic .authentication-inner {
  max-width: 400px;
  position: relative;
}

.authentication-wrapper.authentication-basic .authentication-inner:after {
  width: 243px;
  height: 240px;
  content: " ";
  position: absolute;
  bottom: -68px;
  left: -46px;
}
.authentication-wrapper.authentication-basic .authentication-inner .card {
  z-index: 1;
}
.authentication-wrapper.authentication-basic .authentication-inner .card .app-brand {
  margin-bottom: 2.5rem;
}
.authentication-wrapper .auth-input-wrapper .auth-input {
  max-width: 50px;
  padding-left: 0.4rem;
  padding-right: 0.4rem;
  font-size: 150%;
}

@media (max-width: 575.98px) {
  .authentication-wrapper .auth-input-wrapper .auth-input {
    font-size: 1.125rem;
  }
}
.light-style .authentication-wrapper .authentication-bg {
  background-color: #fff;
}</style>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?php echo base_url() ?>/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login Ticket</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>/assets/img/favicon/under-maintenance.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo base_url() ?>/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url() ?>/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html">
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Ticket Maintenance!</h4>
              <p class="mb-4"></p>

              <form id="formAuthentication" class="mb-3" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Employee Id</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your Employee Id"
                    autofocus id="username"
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Employee Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"                   
                      class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" id="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit" id="btnLogin">Log in</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo base_url() ?>/assets/vendor/js/menu.js"></script>

    <script src="<?php echo base_url() ?>/assets/js/login.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?php echo base_url() ?>/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>


    function base_url(url) {
        return '<?php echo $base_url; ?>' + url;
    }

    </script>
  </body>
</html>
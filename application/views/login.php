<style>
  * {
    padding: 0;
    margin: 0;
    color: #1a1f36;
    box-sizing: border-box;
    word-wrap: break-word;
    font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Ubuntu, sans-serif;
  }

  body {
    min-height: 100%;
    background-color: #ffffff;
    
  }

  h1 {
    letter-spacing: -1px;
  }

  a {
    color: #075759;
    text-decoration: unset;
  }

  .login-root {
    background: #fff;
    display: flex;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
  }

  .loginbackground {
    min-height: 692px;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    z-index: 0;
    overflow: hidden;
  }

  .flex-flex {
    display: flex;
  }

  .align-center {
    align-items: center;
  }

  .center-center {
    align-items: center;
    justify-content: center;
  }

  .box-root {
    box-sizing: border-box;
  }

  .flex-direction--column {
    -ms-flex-direction: column;
    flex-direction: column;
  }

  .loginbackground-gridContainer {
    display: grid;
    grid-template-columns: [start] 1fr [left-gutter] repeat(16, 86.6px) [left-gutter] 1fr [end];
    grid-template-rows: [top] 1fr [top-gutter] repeat(8, 64px) [bottom-gutter] 1fr [bottom];
    justify-content: center;
    margin: 0 -2%;
    transform: rotate(-12deg) skew(-12deg);
  }

  .box-divider--light-all-2 {
    box-shadow: inset 0 0 0 2px #e3e8ee;
  }

  .box-background--blue {
    background-color: #075959;
  }

  .box-background--white {
    background-color: #ffffff;
  }

  .box-background--blue800 {
    background-color: #064255;
  }

  .box-background--gray100 {
    background-color: #e3e8ee;
  }

  .box-background--cyan200 {
    background-color: #79a7a5;
  }

  .padding-top--64 {
    padding-top: 64px;
  }

  .padding-top--24 {
    padding-top: 24px;
  }

  .padding-top--48 {
    padding-top: 48px;
  }

  .padding-bottom--24 {
    padding-bottom: 24px;
  }

  .padding-horizontal--48 {
    padding: 48px;
  }

  .padding-bottom--15 {
    padding-bottom: 15px;
  }


  .flex-justifyContent--center {
    -ms-flex-pack: center;
    justify-content: center;
  }

  .formbg {
    margin: 0px auto;
    width: 100%;
    max-width: 448px;
    background: white;
    border-radius: 4px;
    box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
  }

  span {
    display: block;
    font-size: 20px;
    line-height: 28px;
    color: #1a1f36;
  }

  label {
    margin-bottom: 10px;
  }

  .reset-pass a,
  label {
    font-size: 14px;
    font-weight: 600;
    display: block;
  }

  .reset-pass>a {
    text-align: right;
    margin-bottom: 10px;
  }

  .grid--50-50 {
    display: grid;
    grid-template-columns: 50% 50%;
    align-items: center;
  }

  .field input {
    font-size: 16px;
    line-height: 28px;
    padding: 8px 16px;
    width: 100%;
    min-height: 44px;
    border: unset;
    border-radius: 4px;
    outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px,
      rgba(0, 0, 0, 0) 0px 0px 0px 0px,
      rgba(0, 0, 0, 0) 0px 0px 0px 0px,
      rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
      rgba(0, 0, 0, 0) 0px 0px 0px 0px,
      rgba(0, 0, 0, 0) 0px 0px 0px 0px,
      rgba(0, 0, 0, 0) 0px 0px 0px 0px;
  }

  input[type="submit"] {
    background-color: #065258;
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px,
      rgba(0, 0, 0, 0) 0px 0px 0px 0px,
      rgba(0, 0, 0, 0.12) 0px 1px 1px 0px,
      #e0eaea 0px 0px 0px 1px,
      rgba(0, 0, 0, 0) 0px 0px 0px 0px,
      rgba(0, 0, 0, 0) 0px 0px 0px 0px,
      rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
  }

  .field-checkbox input {
    width: 20px;
    height: 15px;
    margin-right: 5px;
    box-shadow: unset;
    min-height: unset;
  }

  .field-checkbox label {
    display: flex;
    align-items: center;
    margin: 0;
  }

  a.ssolink {
    display: block;
    text-align: center;
    font-weight: 600;
  }

  .footer-link span {
    font-size: 14px;
    text-align: center;
  }

  .listing a {
    color: #697386;
    font-weight: 600;
    margin: 0 10px;
  }

  .animationRightLeft {
    animation: animationRightLeft 2s ease-in-out infinite;
  }

  .animationLeftRight {
    animation: animationLeftRight 2s ease-in-out infinite;
  }

  .tans3s {
    animation: animationLeftRight 3s ease-in-out infinite;
  }

  .tans4s {
    animation: animationLeftRight 4s ease-in-out infinite;
  }

  @keyframes animationLeftRight {
    0% {
      transform: translateX(0px);
    }

    50% {
      transform: translateX(1000px);
    }

    100% {
      transform: translateX(0px);
    }
  }

  @keyframes animationRightLeft {
    0% {
      transform: translateX(0px);
    }

    50% {
      transform: translateX(-1000px);
    }

    100% {
      transform: translateX(0px);
    }
  }
</style>
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?php echo base_url() ?>/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login Ticket</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>/assets/img/favicon/icon_mn.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

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
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <!-- <h1><a href="" rel="dofollow">Ticket Maintenance</a></h1> -->
        </div>
        <div class="formbg-outer">
          <div class="formbg">
          <div class="formbg-inner padding-horizontal--48">
                        <div class="container">
                            <!-- Center the logo image -->
                            <img src="<?php echo base_url() ?>/assets/img/favicon/icon_mn.png" alt="Logo Image" style="width: 165px; height: 165px; display: block; margin: 0 auto;">
                        </div>

              <form id="stripe-login">
                <div class="field padding-bottom--24">
                  <label for="empcode">Emp Code</label>
                  <input type="text" name="empcode" id="username">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>

                  </div>
                  <input type="password" name="password" id="password">
                </div>

                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Continue" id="btnLogin">
                </div>
                <div class="container">
                  <div class="mb-2 mb-md-0 fw-bold" style="font-size: 8px;">
                    © 2024 TBK Technology (Thailand) Company Limited. All rights reserved.
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
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
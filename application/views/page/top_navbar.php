<!-- Layout container -->
<div class="layout-page">
  <!-- Navbar -->

  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Place this tag where you want the button to render. -->

        <li class="nav-item lh-1 me-3">
            <span><?php echo $this->session->userdata('perMissionGroupName'); ?></span>
          </li>
        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/<?php echo $this->session->userdata('userName'); ?>.jpg" alt="Avatar" class="rounded-circle" onerror="this.onerror=null; this.src='<?php echo base_url() ?>/assets/img/avatars/no-avatar.png'">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/<?php echo $this->session->userdata('userName'); ?>.jpg" alt="Avatar" class="rounded-circle" onerror="this.onerror=null; this.src='<?php echo base_url() ?>/assets/img/avatars/no-avatar.png'">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block">
                      <?php echo $this->session->userdata('firstname'); ?>
                    </span>
                    <small class="text-muted"><?php echo $this->session->userdata('perMissionGroupName'); ?></small>
                  </div>
                </div>
              </a>
            <li>
              <a class="dropdown-item" href="../EditAccount/editaccount">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">Settings</span>
              </a>
            </li>
        </li>
        <div class="dropdown-divider"></div>
        </li>
        <li>
          <a class="dropdown-item" href="#" id="btnLogout">
            <i class="bx bx-power-off me-2"></i>
            <span class="align-middle">Log Out</span>
          </a>
        </li>
      </ul>
      </li>
      <!--/ User -->
      </ul>
    </div>
  </nav>

  <!-- / Navbar -->
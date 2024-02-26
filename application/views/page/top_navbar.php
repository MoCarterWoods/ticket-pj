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




        <!-- Notification -->
        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class="bx bx-bell bx-sm"></i>
            <span class="badge bg-danger rounded-pill badge-notifications">5</span>
          </a>
          
          <ul class="dropdown-menu dropdown-menu-end py-0">
            <li class="dropdown-menu-header border-bottom">
              <div class="dropdown-header d-flex align-items-center py-3">
                <h5 class="text-body mb-0 me-auto">Notification</h5>
                <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
              </div>
            </li>

            <li class="dropdown-notifications-list scrollable-container">
              <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                      <p class="mb-0">Won the monthly best seller gold badge</p>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>


            <li class="dropdown-menu-footer border-top p-3">
              <button class="btn btn-primary text-uppercase w-100">view all notifications</button>
            </li>
          </ul>
        </li>
        <!--/ Notification -->




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
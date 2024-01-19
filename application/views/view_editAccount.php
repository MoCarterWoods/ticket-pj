<div class="container-xxl flex-grow-1 container-p-y">

  <h5 class="fw-bold py-3 mb-4" align="right"><span class="text-muted fw-light">Account Settings /</span> Account</h5>

  <div class="card mb-4">
    <h5 class="card-header text-center">Profile Details</h5>

    <!-- Account -->
    <div class="card-body d-flex justify-content-center">
      <div class="d-flex align-items-start align-items-sm-center gap-4">
        <img src="<?php echo base_url() ?>/assets/img/avatars/no-avatar.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
      </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
      <form id="formAccountSettings" method="POST" onsubmit="return false">
        <div class="row">
          <div class="mb-3 col-md-3 text-start">
            <label for="empCode" class="form-label">empcode</label>
            <input type="text" class="form-control text-center" id="empCode" name="empCode" value="" placeholder="" readonly />
          </div>
        </div>

        <div class="row">
          <!-- <div class="mb-3 col-md-6">
                            <label for="edtPass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="edtPass" name="edtPass" value="" />
                          </div> -->

          <div class="mb-3 col-md-6">
            <label for="edtfName" class="form-label">First Name</label>
            <input class="form-control" type="text" name="edtfName" id="edtfName" value="" />
          </div>
          <div class="mb-3 col-md-6">
            <label for="edtlName" class="form-label">Last Name</label>
            <input class="form-control" type="text" id="edtlName" name="edtlName" value="" />
          </div>
          <div class="mb-3 col-md-6">
            <label for="edtEmail" class="form-label">E-mail</label>
            <input class="form-control" type="text" id="edtEmail" name="edtEmail" value="" />
          </div>

          <div class="mt-2">
            <div class="mt-2 d-flex justify-content-start">
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#mdlEdit">Changes Password</button>
              <button type="submit" class="btn btn-primary me-2" id="btnSaveEdit">Save changes</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
</div>





<!-- Modal Edit Pass-->
<div class="modal fade" id="mdlEdit" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="edtMainMenu" class="form-label">Current Password</label>
            <input type="password" id="edtMainMenu" class="form-control" placeholder="Enter Your Current Password">
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="edtMainIcon" class="form-label">New Password</label>
            <input type="password" id="edtMainIcon" class="form-control" placeholder="Enter Your New Password">
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSaveEdit">Save changes</button>
      </div>
    </div>
  </div>
</div>
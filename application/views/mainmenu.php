<style>
  .page-loader {
   display: none;
   position: fixed;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background-color: rgba(255, 255, 255, 0.8);
   z-index: 1000;
}

.loader {
   border: 16px solid #f3f3f3;
   border-top: 16px solid #3498db;
   border-radius: 50%;
   width: 80px;
   height: 80px;
   animation: spin 1s linear infinite;
   position: absolute;
   top: 50%;
   left: 50%;
   margin: -40px 0 0 -40px;
}

@keyframes spin {
   0% { transform: rotate(0deg); }
   100% { transform: rotate(360deg); }
}

</style>

<div id="pageLoader" class="page-loader">
   <div class="loader"></div>
</div>

<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Bordered Table -->
    <h5 class="fw-bold py-3 mb-4" align="right">
      <span class="text-muted fw-light">Administrator /</span> Manage Account
    </h5>

    <div class="card">
      <div class="card-body">
        <div class="row py-2 mt-2">
          <div>
            <span class="fs-5 fw-bold text-primary-emphasis">Register Main Menu</span>
            <div class="row">
              <div class="mb-3 col-md-5">
                <span>Main Menu</span><span class="red-text">*</span>
                <input class="form-control" type="text" id="inpMainMenuName" oninput="InputAdd(this)" value="" />
              </div>
              <div class="mb-3 col-md-3">
                <span>Main Menu Icon</span><span class="red-text">*</span>
                <input class="form-control mdl-textfield__input" type="text" id="inpMainMenuIcon" oninput="InputAdd(this)" value="" />
              </div>
              <div class="col-md-3">
                <button class="btn btn-outline-primary" type="button" id="button-addon2" data-bs-toggle="modal" data-bs-target="#mdlIcon">Find ICON</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md col-sm-12 col-12">
            <button type="button" class="btn btn-circle btn-primary" id="btnSaveAdd">Submit</button>
          </div>
          <div class="col justify-content-start ms-1 mt-2">
            <div id="errMegadd" style="color: red; display: none;">Please enter in English only.</div>
          </div>
        </div>


        <h5 class="card-header mt-4">SYS_Account</h5>
        <div class="table-responsive text-nowrap">
          <div class="card-datatable table-responsive pt-0">
            <table class="table card-table table-striped table-bordered table-hover table-checkable order-column w-100" id="tblMainMenu">
              <thead>
                <tr>
                  <th class="text-center">No.</th>
                  <th class="text-center">Main Menu Name</th>
                  <th class="text-center">Main Menu Icon</th>
                  <th class="text-center">Order No.</th>
                  <th class="text-center">Update Date</th>
                  <th class="text-center">Update By</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0" id="tbody">
                <!-- Table body content goes here -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Bordered Table -->


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="mdlEdit" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="edtMainMenu" class="form-label">Main Menu</label>
            <input type="text" id="edtMainMenu" class="form-control" placeholder="Enter Main Menu">
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="edtMainIcon" class="form-label">Main Menu Icon</label>
            <input type="text" id="edtMainIcon" class="form-control" placeholder="Enter Main Menu Icon">
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="edtOrderNo" class="form-label">Order No.</label>
            <input type="text" id="edtOrderNo" class="form-control" placeholder="Enter Order No.">
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


<!-- Modal Icon -->
<div class="modal fade" id="mdlIcon" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Icon container -->
        <div class="row row-cols-3 g-4" id="icons-container">


          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class='bx bx-home mb-2'></i>
                <p class="icon-name text-truncate mb-0">bx-home</p>
              </div>
            </div>
          </div>


          <!-- เพิ่มไอคอนเพิ่มเติมตามต้องการ -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
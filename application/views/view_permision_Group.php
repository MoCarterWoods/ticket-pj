<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Bordered Table -->
    <h5 class="fw-bold py-3 mb-4" align="right"><span class="text-muted fw-light">Administrator /</span> Manage Permission Group</h5>

    <div class="card">      
      <div class="card-body">
      <div class="row py-2 mt-2">


        <span class="fs-5 fw-bold text-primary-emphasis">Add Permission Group</span>
            <div class="row">
            <div class="mb-3 col-md-5 mt-4">
            <span>Permission Group Name</span><span class="red-text">*</span>
            <input class="form-control" type="text" id="inpPermisGroup" oninput="InputAdd(this)" placeholder="Enter Permission Group">
            </div>

            <div class="mb-3 col-md-5  mt-5">
          <button type="button" class="btn btn-circle btn-primary" id="btnSaveAdd">Submit</button>
        </div>
        </div>
        
        
        <div class="col justify-content-start ms-1">
          <div id="errMegadd" style="color: red; display: none;">Please enter in English only.</div>
        </div>
      </div>
      <h5 class="card-header">Permission Group</h5>
        <div class="table-responsive text-nowrap">
          <div class="card-datatable table-responsive pt-0">
            <table class="table card-table table-bordered order-column w-100" id="tblPermisGP">
              <thead>
                <tr>
                  <th class="text-center">No.</th>
                  <th class="text-center">Permission Group Name</th>
                  <th class="text-center">Update Date</th>
                  <th class="text-center">Update By</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0" id="tbody">

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
            <h5 class="modal-title" id="exampleModalLabel1">Edit Permission Group</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col mb-3">
                <label for="edtGroup" class="form-label">Permission Group Name</label>
                <input type="text" id="edtGroup" class="form-control" placeholder="Enter Permission Group Name">
              </div>
            </div></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btnSaveEdit">Save changes</button>
          </div>
        </div>
      </div>
    </div>




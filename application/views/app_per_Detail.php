<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->


  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Bordered Table -->
    <h5 class="fw-bold py-3 mb-4" align="right"><span class="text-muted fw-light">Administrator /</span>App. Manage Sub Menu</h5>
    <div class="row py-1">
      <div class="col-1">
        Premission Group
      </div>
      <div class="col">
        <select class="form-control selGroup form-select" id="selGroup">
          <option value="">Choose Gropp Name</option>
        </select>
      </div>
      <div class="col">
        <button type="button" class="btn btn-circle btn-primary" id="btnSerchMain">Search</button>
      </div>
    </div>
    <br>


    <div class="card" style="display: none;" id="content">
      <div class="card-body">
        <div class="row py-2 mt-2">
          <div>
            <span class="fs-5 fw-bold text-primary-emphasis">Add Permission</span>
            <div class="row ">


              <div class="mb-3 col-md-5">
                <span>Menu Group Name</span><span class="red-text">*</span>
                <div class="col-lg">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                    <select class="form-control selMenuGroupName form-select" id="selMenuGroupName">
                      <!-- <option value="">Choose Main menu</option> -->
                    </select>
                  </div>
                </div>
              </div>


             


              <div class="col-md-2 col-md-2-main col-md-2-add mt-4">
                <button type="button" class="btn btn-circle btn-primary btn-edt-add" id="btnSaveAddPer">Add</button>

              </div>

            </div>
          </div>




          <h5 class="card-header">Permission_Detail</h5>

          <div class="table-responsive text-nowrap">
            <div class="card-datatable table-responsive pt-0">
              <table class="table card-table table-bordered order-column w-100" id="tblPermis">
                <thead>
                  <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Main Menu</th>
                    <th class="text-center">Update Date</th>
                    <th class="text-center">Update By</th>
                    <th class="text-center">Stasus</th>

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
        <h5 class="modal-title" id="staticBackdropEdit">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label class="form-label">Main menu</label>
            <select id="edtMainmenu" class="edtMainmenu select2 form-select" data-allow-clear="true">
              <option value="">Choose Main menu</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <label class="form-label">Sub Menu</label>
            <select id="edtSubEdit" class="edtSubEdit select2 form-select" data-allow-clear="true">
              <option value="">Choose Sub Menu</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="btnSaveEdit">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
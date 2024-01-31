<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Bordered Table -->
        <h5 class="fw-bold py-3 mb-4" align="right">
            <span class="text-muted fw-light">Administrator /</span>App. Manage Account
        </h5>

        <div class="card">
            <div class="d-flex justify-content-end mt-2 pr-2">
                <button type="button" class="btn btn-circle btn-primary" id="btnAddMenuApp" data-bs-toggle="modal"
                    data-bs-target="#mdlAdd">Add Menu <i class="fa fa-plus"></i></button>
            </div>
            <h5 class="card-header">App_Menu</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <!-- Removed scrollBody -->
                    <div class="card-datatable table-responsive pt-0">
                        <table class="table card-table table-bordered table-hover table-checkable order-column w-100" id="tblManageMenu">
                            <thead style="background-color: #afdbff;">
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Main Menu Name</th>
                                    <th class="text-center">CREATE DATE</th>
                                    <th class="text-center">CREATE BY</th>
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


    <!-- Modal Add-->
    <div class="modal fade" id="mdlAdd" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Add Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="row">
          <div class="col mb-3">
            <label for="addMenuName" class="form-label">Menu name</label>
            <input type="text" id="addMenuName" class="form-control" placeholder="Enter Menu Name">
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="addMenuPic" class="form-label">Menu Pic</label>
            <input type="text" id="addMenuPic" class="form-control" placeholder="Enter Menu Pic">
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="addMenuPart" class="form-label">Menu Part</label>
            <input type="text" id="addMenuPart" class="form-control"  value="http://192.168.161.219/apiMainternanceSystem/assets/Imgs/" readonly>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="addMenuRout" class="form-label">Menu Route</label>
            <input type="text" id="addMenuRout" class="form-control" placeholder="Enter Menu Route">
          </div>
        </div>
          </div>
          <div class="modal-footer">
            <div class="container col justify-content-start">
              <div id="errMegadd" style="display: none; color: red; ">Please enter in English only.</div>
              <div id="errAddempcode" style="display: none; color: red; ">Please enter Employee Code as (a-z ,A-Z ,0-9) only.</div>
              <div id="errAddpersonal" style="display: none; color: red; ">Please enter Firstname or Lastname as (a-z ,A-Z) only.</div>
            </div>
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" id="btnBack">Back</button>
            <button type="button" class="btn btn-primary" id="btnSaveAdd">Add</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal Add-->



    <!-- Modal Edit-->
    <div class="modal fade" id="mdlEdit" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Edit Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="row">
          <div class="col mb-3">
            <label for="edtMenuName" class="form-label">Menu name</label>
            <input type="text" id="edtMenuName" class="form-control" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="edtMenuPic" class="form-label">Menu Pic</label>
            <input type="text" id="edtMenuPic" class="form-control" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="edtMenuPart" class="form-label">Menu Part</label>
            <input type="text" id="edtMenuPart" class="form-control"  value="http://192.168.161.219/apiMainternanceSystem/assets/Imgs/" readonly>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="edtMenuRout" class="form-label">Menu Route</label>
            <input type="text" id="edtMenuRout" class="form-control" placeholder="">
          </div>
        </div>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" id="btnBack">Back</button>
            <button type="button" class="btn btn-primary" id="btnSaveEdit">Save</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Edit Modal -->



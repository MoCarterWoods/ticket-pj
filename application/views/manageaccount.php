<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Bordered Table -->
        <h5 class="fw-bold py-3 mb-4" align="right">
            <span class="text-muted fw-light">Administrator /</span> Manage Account
        </h5>

        <div class="card">
            <div class="d-flex justify-content-end mt-2 pr-2">
                <button type="button" class="btn btn-circle btn-primary" id="callmodelAdd" data-bs-toggle="modal"
                    data-bs-target="#mdlAdd">Add Account <i class="fa fa-plus"></i></button>
            </div>
            <h5 class="card-header">SYS_Account</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <!-- Removed scrollBody -->
                    <div class="card-datatable table-responsive pt-0">
                        <table class="table card-table table-striped table-bordered table-hover table-checkable order-column w-100" id="tblManageAccount">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Employee Details</th>
                                    <th class="text-center">Permis Group</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">CREATE DATE</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Edit</th>
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
            <h5 class="modal-title" id="exampleModalLabel1">Add Account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" id="add">
              <div class="row g-2">
                <div class="col mb-0">
                  <label class="form-label">Employee Code</label>
                  <input type="text" id="inpEmpCode" class="form-control" placeholder="Emp Code" oninput="InputAddEmpcode(this)">
                </div>
                <div class="col mb-0">
                  <label class="form-label">Employee Password</label>
                  <input type="password" id="inpEmpPassword" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label class="form-label">First name</label>
                  <input type="text" id="inpFirstName" class="form-control" placeholder="FirstName" oninput="InputAddpersonal(this)">
                </div>
                <div class="col mb-0">
                  <label class="form-label">Last name</label>
                  <input type="text" id="inpLastName" class="form-control" placeholder="LastName" oninput="InputAddpersonal(this)">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" id="inpEmail" class="form-control" placeholder="xxxx@xxx.xx" oninput="InputAdd(this)">
                </div>
              </div>



              <div class="row">
                <div class="col mb-3">
                  <label class="form-label">Permission group</label>
                  <select id="selPermissionAdd" class="selPermissionAdd select2 form-select" data-allow-clear="true">
                    <option value="">Choose Permission Group</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col mb-3">
                  <label class="form-label">Plant</label>
                  <select id="selPlantAdd" class="selPlantAdd select2 form-select" data-allow-clear="true">
                    <option value="">Choose Plant</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="container col justify-content-start">
              <div id="errMegadd" style="display: none; color: red; ">Please enter in English only.</div>
              <div id="errAddempcode" style="display: none; color: red; ">Please enter Employee Code as (a-z ,A-Z ,0-9) only.</div>
              <div id="errAddpersonal" style="display: none; color: red; ">Please enter Firstname or Lastname as (a-z ,A-Z) only.</div>
            </div>
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" id="btnBack">Back</button>
            <button type="button" class="btn btn-primary" id="btnSaveAdd">Save</button>
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
            <h5 class="modal-title" id="exampleModalLabel1">Add Account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row g-2">
              <div class="col mb-0">
                <label class="form-label">Employee Code</label>
                <input type="text" id="edtEmpCode" class="form-control" placeholder="Emp Code" oninput="InputAddEmpcode(this)" readonly>
              </div>
              <div class="col mb-0">
                <label class="form-label">Employee Password</label>
                <input type="password" id="edtEmpPassword" class="form-control" placeholder="Password" >
              </div>
            </div>
            <div class="row g-2">
              <div class="col mb-0">
                <label class="form-label">First name</label>
                <input type="text" id="edtFirstName" class="form-control" placeholder="FirstName" oninput="InputAddpersonal(this)">
              </div>
              <div class="col mb-0">
                <label class="form-label">Last name</label>
                <input type="text" id="edtLastName" class="form-control" placeholder="LastName" oninput="InputAddpersonal(this)">
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" id="edtEmail" class="form-control" placeholder="xxxx@xxx.xx" oninput="InputAdd(this)">
              </div>
            </div>



            <div class="row">
              <div class="col mb-3">
                <label class="form-label">Permission group</label>
                <select id="edtPermission" class="edtPermission select2 form-select" data-allow-clear="true">
                  <option value="">Choose Permission Group</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col mb-3">
                <label class="form-label">Plant</label>
                <select id="edtPlantEdit" class="edtPlantEdit select2 form-select" data-allow-clear="true">
                  <option value="">Choose Plant</option>
                </select>
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
            <button type="button" class="btn btn-primary" id="btnSaveEdit">Save</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Edit Modal -->



<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Bordered Table -->
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Administrator /</span> Manage Account</h4>

    <div class="d-flex justify-content-end mt-3 py-2">
      <button type="button" class="btn btn-circle btn-primary" id="callmodelAdd" data-bs-toggle="modal" data-bs-target="#mdlAdd">Add Account <i class="fa fa-plus"></i></button>
    </div>
    <div class="card">
      <h5 class="card-header">SYS_Account</h5>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table border-top" id="tblManageAccount">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Employee Details</th>
                  <th>Permis Group</th>
                  <th>Email</th>
                  <th>CREATE DATE</th>
                  <th>Status</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0" id="tbody">
                <!-- <tr>
                  <td><i></i> <strong>1</strong></td>
                  <td>
                    <div class="d-flex justify-content-start align-items-center">
                      <div class="avatar-wrapper">
                        <div class="avatar me-2"><img src="<?php echo base_url() ?>assets/assets/img/avatars/sek.jpg" alt="Avatar" class="rounded-circle"></div>
                      </div>
                      <div class="d-flex flex-column">
                        <span class="emp_name text-truncate">Carter Woods</span><small class="emp_post text-truncate text-muted">SD525</small>
                      </div>
                    </div>
                  </td>
                  <td><i></i> <strong>Admin</strong></td>
                  <td><i></i>carter@gmail.com</td>
                  <td><span class="badge bg-label-success me-1">Enable</span></td>
                  <td class="">
                    <div class="d-inline-block"><a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a href="javascript:;" class="dropdown-item">Details</a>
                        </li>
                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                        </li>
                      </ul>
                    </div><a href="" class="btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#mdlEdit" id="btnEdit">
                      <i class="bx bxs-edit"></i>
                    </a>
                  </td>
                </tr> -->
              </tbody>
            </table>
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
                <input type="text" id="edtEmpCode" class="form-control" placeholder="Emp Code" oninput="InputAddEmpcode(this)">
              </div>
              <div class="col mb-0">
                <label class="form-label">Employee Password</label>
                <input type="password" id="edtEmpPassword" class="form-control" placeholder="Password">
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
                <select id="edtPermissionEdit" class="edtPermission select2 form-select" data-allow-clear="true">
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



    <button type="button" class="btn btn-circle btn-primary" id="callmodelAdd" data-bs-toggle="modal" data-bs-target="#mdlAdd22">Add Account <i class="fa fa-plus"></i></button>
    <!-- Add Modal -->
    <div class="modal fade" id="mdlAdd22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content modal-addAcc">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ">
            <p class="fs-3 text-center text-uppercase fw-bold head-modal">Add Account</p>
            <form>
              <div class="row container">
                <div class="col">
                  <div class="row ">
                    <div class="col-lg-5 p-t-20">
                      <span>Employee Code</span><span class="red-text">*</span>
                    </div>
                    <div class="col-lg-7">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="inpEmpCode" oninput="InputAddEmpcode(this)">
                        <label class="mdl-textfield__label">Employee Code</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-5 p-t-20">
                      <span class="text-middle">First name</span><span class="red-text">*</span>
                    </div>
                    <div class="col-lg-7">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="inpFirstName" oninput="InputAddpersonal(this)">
                        <label class="mdl-textfield__label">First name</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="row">
                    <div class="col-lg-4 p-t-20">
                      <span>Password</span><span class="red-text">*</span>
                    </div>
                    <div class="col-lg-8">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="password" id="inpEmpPassword">
                        <label class="mdl-textfield__label">Password</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 p-t-20">
                      <span>Last name</span><span class="red-text">*</span>
                    </div>
                    <div class="col-lg-8">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="inpLastName" oninput="InputAddpersonal(this)">
                        <label class="mdl-textfield__label">Last name</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2 p-t-20">
                    <span>Email</span><span class="red-text">*</span>
                  </div>
                  <div class="col-lg-10">
                    <div class="row">
                      <div class="col-lg">

                      </div>
                      <div class="col-lg-11">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                          <input class="mdl-textfield__input" type="text" id="inpEmail" oninput="InputAdd(this)">
                          <label class="mdl-textfield__label">Email</label>
                          <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 p-t-20">
                    <span>Permission Group</span><span class="red-text">*</span>
                  </div>
                  <div class="col-lg-8">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                      <select class="form-control selPermission" name="selPermission" id="selPermissionAdd">
                        <option value="">Choose Permission Group</option>
                      </select>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <span>Plant</span><span class="red-text">*</span>
                  </div>
                  <div class="col-lg-8">
                    <select class="form-control selPlant" name="selPlant" id="selPlantAdd">
                      <option value="">Choose Plant</option>
                    </select>

                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <div class="container col justify-content-start">
              <div id="errMegadd" style="display: none; color: red; ">Please enter in English only.</div>
              <div id="errAddempcode" style="display: none; color: red; ">Please enter Employee Code as (a-z ,A-Z ,0-9) only.</div>
              <div id="errAddpersonal" style="display: none; color: red; ">Please enter Firstname or Lastname as (a-z ,A-Z) only.</div>
            </div>
            <button type="button" class="btn btn-circle btn-primary" id="btnSaveAdd">Submit</button>
            <button type="button" class="btn btn-circle btn-danger" id="btnBackAdd" data-bs-dismiss="modal">Cancel</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End Add Modal -->



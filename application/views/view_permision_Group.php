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
            <div class="mb-3 col-md-5">
            <span>Permission Group Name</span><span class="red-text">*</span>
            <input class="form-control" type="text" id="inpPermisGroup" oninput="InputAdd(this)">
            </div>

            <div class="col-md col-sm-2 col-2 p-t-20">
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
                <!-- <tr>
                  <td><i></i> <strong>1</strong></td>
                  <td><i></i> <strong>Dash</strong></td>

                  <td class="">02/13/2021</td>
                  <td class="">SD525</td>
                  <td><span class="badge bg-label-success me-1">Enable</span></td>
                  <td class="">
                    </li>
                    </ul>
          </div><a href="" class="btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#basicModal">
            <i class="bx bxs-edit"></i>
          </a></td>
          </tr> -->
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




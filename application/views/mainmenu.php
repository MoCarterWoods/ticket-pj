<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Bordered Table -->
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Administrator /</span> Manage Account</h4>

    <div class="card">
      <h5 class="card-header">SYS_Account</h5>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table border-top" id="tblMainMenu">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Main Menu Name</th>
                  <th>Main Menu Icon</th>
                  <th>Order No.</th>
                  <th>Update Date</th>
                  <th>Update By</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td><i></i> <strong>1</strong></td>
                  <td><i></i> <strong>Dash</strong></td>
                  <td>
                  <i class='bx bx-dock-top' ></i>
                    <p class="icon-name text-capitalize text-truncate mb-0"></p>
                  </td>
                  <td><i></i>1</td>
                  <td class="">02/13/2021</td>
                  <td class="">SD525</td>
                  <td><span class="badge bg-label-success me-1">Enable</span></td>
                  <td class="">
                    </li>
                    </ul>
          </div><a href="" class="btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#basicModal">
            <i class="bx bxs-edit"></i>
          </a></td>
          </tr>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ Bordered Table -->



  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <label for="nameBasic" class="form-label">Name</label>
              <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name">
            </div>
          </div>
          <div class="row g-2">
            <div class="col mb-0">
              <label for="emailBasic" class="form-label">Email</label>
              <input type="email" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx">
            </div>
            <div class="col mb-0">
              <label for="dobBasic" class="form-label">DOB</label>
              <input type="date" id="dobBasic" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->


  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Bordered Table -->
    <h5 class="fw-bold py-3 mb-4" align="right"><span class="text-muted fw-light">Administrator /</span> Manage Sub Menu</h5>
    <div class="row py-1">
      <div class="col-1">
        Main Menu
      </div>
      <div class="col">
        <select class="form-control selMainMenu" id="selMainMenu">
          <option value="">Choose main menu</option>
        </select>
      </div>
      <div class="col">
        <button type="button" class="btn btn-circle btn-primary" id="btnSerchMain">Search</button>
      </div>
    </div>
    <br>


    <div class="card" style="display: none;" id="content">
      <h5 class="card-header">SYS_Account</h5>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table border-top" id="tblSubMenu">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Sub Menu</th>
                  <th>Menu Controller</th>
                  <th>Update Date</th>
                  <th>Update By</th>
                  <th>Stasus</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0" id="tbody">
                <!-- <tr>
                  <td><i></i> <strong>1</strong></td>
                  <td><i></i> <strong>Dashboard</strong></td>
                  <td><i></i> <strong>Admin</strong></td>
                  <td class="">2024-01-10 14:45:04</td>
                  <td class="">SD525</td>
                  <td><span class="badge bg-label-success me-1">Enable</span></td>
                  <td class="">
                    </div><a href="" class="btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#basicModal">
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
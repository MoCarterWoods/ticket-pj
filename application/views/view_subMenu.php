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

        <select class="form-control selMainMenu form-select" id="selMainMenu">
          <option value="">Choose main menu</option>
        </select>

      </div>
      <div class="col">
        <button type="button" class="btn btn-circle btn-primary" id="btnSerchMain">Search</button>
      </div>
    </div>
    <br>

    
    <div class="card" style="display: none;" id="content">


<!--  -->
<div class="card-body">
        <div class="row py-2 mt-2">
          <div>
          <span class="fs-5 fw-bold text-primary-emphasis">Register Sub Menu</span>
            <div class="row">
              <div class="mb-3 col-md-4 col-md-1888">
              <span>Sub Menu</span><span class="red-text">*</span>
                <input class="form-control" type="text" id="inpSubMenuName" oninput="InputAdd(this)" value="" />
              </div>
              <div class="mb-3 col-md-5">
              <span>Sub Menu controller</span><span class="red-text">*</span>
                <input class="form-control mdl-textfield__input" type="text" id="inpSubMenuCon" oninput="InputAdd(this)" value="" />
              </div>
              <div class="col-md-3 col-md-3-main">

                <button type="button" class="btn btn-circle btn-primary" id="btnSaveAdd">Add</button>

              </div>
            </div>
          </div>
        </div>

<!--  -->

                <div class="col-12 col-sm-12 justify-content-start">
                  <div id="errMegadd" style="color: red; display: none;">Please enter in English only.</div>
                </div>


                <h5 class="card-header">Table_Submenu</h5>
                
                  <div class="table-responsive text-nowrap">
                    <div class="card-datatable table-responsive pt-0">
                      <table class="datatables-basic table table-striped table-bordered table-hover table-checkable order-column border-top " id="tblSubMenu">
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
                          <!-- Table body content goes here -->
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
            <label for="edtSubMenu" class="form-label">Main Menu</label>
            <input type="text" id="edtSubMenu" class="form-control" placeholder="Enter Main Menu">
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="edtController" class="form-label">Main Menu Icon</label>
            <input type="text" id="edtController" class="form-control" placeholder="Enter Main Menu Icon">
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
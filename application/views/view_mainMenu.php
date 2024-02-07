<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Bordered Table -->
    <h5 class="fw-bold py-3 mb-4" align="right">
      <span class="text-muted fw-light">Administrator /</span> Manage Main Menu
    </h5>



    <div class="card">
      <div class="card-body">
        <div class="row py-2 ">
          <div>
            <span class="fs-5 fw-bold text-primary-emphasis">Register Main Menu</span>
            <div class="row">
              <div class="mb-3 col-md-5">
                <label for="inpMainMenuName" class="form-label">Main Menu Name <span class="red-text">*</span></label>
                <input class="form-control" type="text" id="inpMainMenuName" oninput="InputAdd(this)" value="" placeholder="Enter main menu" />
              </div>
              <div class="mb-3 col-md-3">
                <label for="inpMainMenuIcon" class="form-label">Main Menu Icon <span class="red-text">*</span></label>
                <input class="form-control mdl-textfield__input" type="text" id="inpMainMenuIcon" oninput="InputAdd(this)" value="" placeholder="Enter menu icon" />
              </div>
              <div class="col-md-3 col-md-3-main">

                <button type="button" id="button-addon2" data-bs-toggle="modal" data-bs-target="#mdlIcon" class="btn btn-outline-primary">
                  <span class="tf-icons bx bx-file-find me-1"></span>Icon
                </button>
                <button type="button" class="btn btn-circle btn-primary" id="btnSaveAdd">Add</button>

              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col justify-content-start ms-1 ">
            <div id="errMegadd" style="color: red; display: none;">Please enter in English only.</div>
          </div>
        </div>



      </div>
    </div>
    <div class="card mt-3">
    <h5 class="card-header">Table Main Menu</h5>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <div class="card-datatable table-responsive pt-0">
            <table class="table card-table table-bordered order-column w-100" id="tblMainMenu">
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
        <h5 class="modal-title" id="exampleModalLabel1">Modal Icon</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Icon container -->
        <div class="row row-cols-6 g-4" id="icons-container">


          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-home mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-home</p>
              </div>
            </div>
          </div>


          <!-- เพิ่มไอคอนเพิ่มเติมตามต้องการ -->

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-accessibility mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-accessibility</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-add-to-queue mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-add-to-queue</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-adjust mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-adjust</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-alarm-add mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-alarm-add</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-alarm-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-alarm-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-alarm mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-alarm</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-album mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-album</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-align-justify mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-align-justify</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-align-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-align-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-align-middle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-align-middle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-align-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-align-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-ambulance mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-ambulance</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-analyse mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-analyse</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-anchor mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-anchor</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-aperture mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-aperture</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-archive-in mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-archive-in</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-archive-out mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-archive-out</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-archive mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-archive</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-area mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-area</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-arrow-back mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-arrow-back</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-at mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-at</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-award mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-award</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-badge-check mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-badge-check</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-badge mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-badge</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-ball mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-ball</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-band-aid mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-band-aid</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bar-chart-alt-2 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bar-chart-alt-2</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bar-chart-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bar-chart-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bar-chart-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bar-chart-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bar-chart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bar-chart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-barcode mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-barcode</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-basket mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-basket</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-basketball mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-basketball</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bath mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bath</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-battery mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-battery</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bed mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bed</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bell-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bell-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bell-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bell-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bell-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bell-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bell mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bell</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bicycle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bicycle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-block mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-block</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bluetooth mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bluetooth</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-body mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-body</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bold mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bold</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bolt-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bolt-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-book-bookmark mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-book-bookmark</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-book-content mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-book-content</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-book-open mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-book-open</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-book mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-book</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bookmark-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bookmark-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bookmark-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bookmark-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bookmark mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bookmark</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bookmarks mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bookmarks</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-border-all mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-border-all</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-border-bottom mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-border-bottom</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-border-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-border-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-border-radius mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-border-radius</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-border-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-border-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-border-top mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-border-top</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bot mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bot</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bowling-ball mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bowling-ball</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-box mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-box</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-briefcase-alt-2 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-briefcase-alt-2</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-briefcase-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-briefcase-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-briefcase mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-briefcase</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-brightness-half mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-brightness-half</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-brightness mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-brightness</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-broadcast mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-broadcast</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-brush-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-brush-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-brush mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-brush</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bug-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bug-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bug mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bug</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-building-house mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-building-house</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-building mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-building</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-buildings mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-buildings</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bulb mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bulb</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bullseye mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bullseye</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-buoy mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-buoy</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-bus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-bus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cake mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cake</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-calculator mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-calculator</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-calendar-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-calendar-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-calendar-check mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-calendar-check</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-calendar-event mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-calendar-event</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-calendar-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-calendar-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-calendar-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-calendar-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-calendar-x mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-calendar-x</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-calendar mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-calendar</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-camera-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-camera-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-camera mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-camera</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-captions mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-captions</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-car mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-car</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-card mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-card</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-caret-down mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-caret-down</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-caret-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-caret-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-caret-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-caret-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-caret-up mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-caret-up</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-carousel mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-carousel</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cart-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cart-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cast mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cast</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-certification mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-certification</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chalkboard mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chalkboard</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chat mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chat</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-check-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-check-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-check-double mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-check-double</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-check-shield mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-check-shield</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-check-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-check-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-check mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-check</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-checkbox-checked mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-checkbox-checked</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-checkbox-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-checkbox-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-checkbox mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-checkbox</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chevron-down mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chevron-down</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chevron-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chevron-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chevron-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chevron-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chevron-up mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chevron-up</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chevrons-down mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chevrons-down</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chevrons-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chevrons-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chevrons-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chevrons-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chevrons-up mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chevrons-up</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-chip mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-chip</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-clipboard mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-clipboard</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-closet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-closet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cloud-download mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cloud-download</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cloud-drizzle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cloud-drizzle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cloud-light-rain mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cloud-light-rain</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cloud-lightning mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cloud-lightning</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cloud-rain mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cloud-rain</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cloud-snow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cloud-snow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cloud-upload mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cloud-upload</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cloud mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cloud</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-code-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-code-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-code-block mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-code-block</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-code-curly mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-code-curly</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-code mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-code</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-coffee mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-coffee</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cog mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cog</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-collapse mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-collapse</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-collection mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-collection</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-columns mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-columns</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-command mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-command</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-comment-dots mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-comment-dots</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-comment mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-comment</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-compass mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-compass</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-conversation mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-conversation</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-copy-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-copy-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-copy mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-copy</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-copyright mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-copyright</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-credit-card-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-credit-card-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-credit-card mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-credit-card</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-crop mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-crop</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-crosshair mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-crosshair</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-crown mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-crown</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cube-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cube-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cube mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cube</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cuboid mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cuboid</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-customize mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-customize</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cut mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cut</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cycling mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cycling</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-cylinder mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-cylinder</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dashboard mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dashboard</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-data mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-data</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-desktop mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-desktop</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-detail mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-detail</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-devices mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-devices</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dialpad-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dialpad-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dialpad mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dialpad</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-diamond mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-diamond</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-directions mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-directions</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-disc mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-disc</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dish mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dish</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dislike mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dislike</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dna mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dna</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dock-bottom mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dock-bottom</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dock-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dock-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dock-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dock-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dock-top mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dock-top</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dollar-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dollar-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dollar mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dollar</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dots-horizontal-rounded mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dots-horizontal-rounded</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dots-horizontal mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dots-horizontal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dots-vertical-rounded mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dots-vertical-rounded</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dots-vertical mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dots-vertical</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-doughnut-chart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-doughnut-chart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-down-arrow-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-down-arrow-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-down-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-down-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-down-arrow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-down-arrow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-download mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-download</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-downvote mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-downvote</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-droplet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-droplet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-dumbbell mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-dumbbell</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-duplicate mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-duplicate</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-edit-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-edit-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-edit mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-edit</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-envelope mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-envelope</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-equalizer mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-equalizer</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-error-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-error-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-error-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-error-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-error mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-error</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-exit-fullscreen mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-exit-fullscreen</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-exit mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-exit</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-expand mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-expand</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-export mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-export</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-extension mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-extension</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-face mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-face</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-fast-forward-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-fast-forward-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-fast-forward mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-fast-forward</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-female mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-female</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-file-blank mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-file-blank</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-file-find mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-file-find</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-file mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-file</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-film mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-film</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-filter-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-filter-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-filter mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-filter</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-fingerprint mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-fingerprint</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-first-aid mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-first-aid</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-first-page mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-first-page</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-flag mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-flag</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-folder-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-folder-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-folder-open mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-folder-open</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-folder-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-folder-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-folder mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-folder</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-font-color mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-font-color</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-font-family mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-font-family</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-font-size mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-font-size</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-font mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-font</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-football mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-football</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-fridge mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-fridge</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-fullscreen mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-fullscreen</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-gas-pump mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-gas-pump</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-ghost mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-ghost</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-gift mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-gift</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-git-branch mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-git-branch</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-git-commit mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-git-commit</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-git-compare mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-git-compare</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-git-merge mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-git-merge</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-git-pull-request mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-git-pull-request</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-git-repo-forked mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-git-repo-forked</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-globe-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-globe-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-globe mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-globe</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-grid-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-grid-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-grid-horizontal mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-grid-horizontal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-grid-small mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-grid-small</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-grid-vertical mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-grid-vertical</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-grid mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-grid</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-group mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-group</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-handicap mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-handicap</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-hash mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-hash</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-hdd mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-hdd</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-heading mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-heading</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-headphone mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-headphone</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-heart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-heart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-help-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-help-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-hide mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-hide</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-highlight mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-highlight</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-history mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-history</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-hive mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-hive</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-home-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-home-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-home-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-home-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-home mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-home</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-horizontal-center mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-horizontal-center</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-hotel mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-hotel</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-hourglass mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-hourglass</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-id-card mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-id-card</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-image-add mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-image-add</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-image-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-image-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-image mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-image</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-images mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-images</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-import mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-import</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-infinite mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-infinite</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-info-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-info-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-italic mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-italic</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-joystick-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-joystick-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-joystick-button mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-joystick-button</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-joystick mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-joystick</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-key mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-key</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-label mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-label</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-landscape mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-landscape</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-laptop mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-laptop</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-last-page mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-last-page</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-layer mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-layer</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-layout mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-layout</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-left-arrow-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-left-arrow-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-left-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-left-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-left-arrow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-left-arrow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-left-down-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-left-down-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-left-indent mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-left-indent</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-left-top-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-left-top-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-like mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-like</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-line-chart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-line-chart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-link-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-link-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-link-external mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-link-external</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-link mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-link</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-list-check mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-list-check</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-list-ol mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-list-ol</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-list-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-list-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-list-ul mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-list-ul</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-list-x mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-list-x</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-loader-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-loader-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-loader-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-loader-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-loader mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-loader</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-lock-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-lock-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-lock-open-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-lock-open-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-lock-open mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-lock-open</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-lock mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-lock</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-log-in-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-log-in-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-log-in mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-log-in</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-log-out-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-log-out-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-log-out mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-log-out</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-magnet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-magnet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-mail-send mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-mail-send</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-male mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-male</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-map-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-map-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-map-pin mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-map-pin</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-map mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-map</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-memory-card mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-memory-card</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-menu-alt-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-menu-alt-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-menu-alt-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-menu-alt-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-menu mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-menu</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-message-alt-dots mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-message-alt-dots</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-message-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-message-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-message-dots mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-message-dots</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-message-rounded-dots mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-message-rounded-dots</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-message-rounded mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-message-rounded</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-message-square-dots mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-message-square-dots</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-message-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-message-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-message mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-message</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-microphone-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-microphone-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-microphone mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-microphone</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-minus-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-minus-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-mobile-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-mobile-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-mobile-landscape mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-mobile-landscape</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-mobile-vibration mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-mobile-vibration</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-mobile mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-mobile</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-money mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-money</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-moon mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-moon</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-mouse-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-mouse-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-mouse mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-mouse</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-move-horizontal mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-move-horizontal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-move-vertical mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-move-vertical</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-move mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-move</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-movie mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-movie</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-music mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-music</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-navigation mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-navigation</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-news mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-news</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-no-entry mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-no-entry</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-note mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-note</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-notepad mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-notepad</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-notification-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-notification-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-notification mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-notification</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-package mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-package</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-paint-roll mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-paint-roll</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-paint mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-paint</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-palette mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-palette</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-paper-plane mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-paper-plane</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-paperclip mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-paperclip</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-paragraph mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-paragraph</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-paste mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-paste</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-pause-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-pause-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-pause mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-pause</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-pen mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-pen</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-pencil mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-pencil</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-phone-call mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-phone-call</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-phone-incoming mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-phone-incoming</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-phone-outgoing mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-phone-outgoing</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-phone mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-phone</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-photo-album mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-photo-album</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-pie-chart-alt-2 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-pie-chart-alt-2</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-pie-chart-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-pie-chart-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-pie-chart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-pie-chart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-pin mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-pin</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-planet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-planet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-play-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-play-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-play mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-play</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-plug mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-plug</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-plus-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-plus-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-plus-medical mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-plus-medical</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-poll mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-poll</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-polygon mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-polygon</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-power-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-power-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-printer mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-printer</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-pulse mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-pulse</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-purchase-tag-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-purchase-tag-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-purchase-tag mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-purchase-tag</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-pyramid mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-pyramid</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-question-mark mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-question-mark</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-radar mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-radar</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-radio-circle-marked mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-radio-circle-marked</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-radio-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-radio-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-radio mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-radio</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-receipt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-receipt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-rectangle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-rectangle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-redo mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-redo</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-rename mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-rename</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-repeat mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-repeat</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-reply-all mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-reply-all</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-reply mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-reply</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-repost mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-repost</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-reset mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-reset</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-restaurant mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-restaurant</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-revision mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-revision</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-rewind-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-rewind-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-rewind mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-rewind</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-right-arrow-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-right-arrow-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-right-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-right-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-right-arrow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-right-arrow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-right-down-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-right-down-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-right-indent mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-right-indent</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-right-top-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-right-top-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-rocket mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-rocket</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-rotate-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-rotate-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-rotate-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-rotate-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-rss mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-rss</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-ruler mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-ruler</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-run mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-run</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-save mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-save</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-screenshot mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-screenshot</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-search-alt-2 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-search-alt-2</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-search-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-search-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-search mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-search</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-select-multiple mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-select-multiple</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-selection mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-selection</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-send mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-send</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-server mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-server</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-shape-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-shape-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-shape-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-shape-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-shape-triangle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-shape-triangle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-share-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-share-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-share mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-share</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-shield-alt-2 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-shield-alt-2</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-shield-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-shield-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-shield mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-shield</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-shopping-bag mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-shopping-bag</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-show-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-show-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-show mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-show</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-shuffle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-shuffle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-sidebar mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-sidebar</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-sitemap mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-sitemap</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-skip-next-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-skip-next-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-skip-next mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-skip-next</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-skip-previous-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-skip-previous-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-skip-previous mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-skip-previous</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-slider-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-slider-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-slider mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-slider</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-slideshow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-slideshow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-sort-a-z mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-sort-a-z</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-sort-down mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-sort-down</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-sort-up mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-sort-up</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-sort-z-a mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-sort-z-a</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-sort mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-sort</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-spa mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-spa</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-space-bar mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-space-bar</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-spreadsheet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-spreadsheet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-square-rounded mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-square-rounded</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-star mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-star</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-station mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-station</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-stats mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-stats</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-stop-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-stop-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-stop mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-stop</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-stopwatch mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-stopwatch</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-store-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-store-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-store mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-store</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-street-view mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-street-view</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-strikethrough mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-strikethrough</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-subdirectory-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-subdirectory-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-subdirectory-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-subdirectory-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-sun mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-sun</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-support mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-support</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-swim mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-swim</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-sync mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-sync</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-tab mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-tab</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-table mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-table</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-tag mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-tag</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-target-lock mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-target-lock</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-task mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-task</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-taxi mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-taxi</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-tennis-ball mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-tennis-ball</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-terminal mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-terminal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-test-tube mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-test-tube</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-text mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-text</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-time-five mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-time-five</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-time mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-time</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-timer mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-timer</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-toggle-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-toggle-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-toggle-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-toggle-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-tone mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-tone</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-traffic-barrier mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-traffic-barrier</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-train mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-train</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-transfer-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-transfer-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-transfer mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-transfer</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-trash-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-trash-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-trash mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-trash</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-trending-down mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-trending-down</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-trending-up mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-trending-up</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-trophy mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-trophy</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-truck mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-truck</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-tv mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-tv</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-underline mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-underline</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-undo mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-undo</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-unlink mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-unlink</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-up-arrow-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-up-arrow-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-up-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-up-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-up-arrow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-up-arrow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-upload mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-upload</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-upvote mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-upvote</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-usb mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-usb</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-user-check mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-user-check</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-user-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-user-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-user-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-user-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-user-pin mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-user-pin</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-user-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-user-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-user-voice mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-user-voice</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-user-x mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-user-x</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-user mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-user</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-vertical-center mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-vertical-center</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-video-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-video-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-video-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-video-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-video-recording mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-video-recording</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-video mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-video</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-voicemail mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-voicemail</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-volume-full mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-volume-full</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-volume-low mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-volume-low</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-volume-mute mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-volume-mute</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-volume mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-volume</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-walk mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-walk</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-wallet-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-wallet-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-wallet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-wallet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-water mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-water</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-wifi-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-wifi-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-wifi mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-wifi</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-wind mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-wind</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-window-close mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-window-close</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-window-open mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-window-open</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-window mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-window</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-windows mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-windows</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-world mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-world</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-wrench mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-wrench</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-x-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-x-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-x mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-x</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-zoom-in mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-zoom-in</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bx-zoom-out mb-2"></i>
                <p class="icon-name text-truncate mb-0">bx-zoom-out</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-500px mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-500px</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-airbnb mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-airbnb</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-amazon mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-amazon</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-android mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-android</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-angular mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-angular</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-apple mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-apple</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-baidu mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-baidu</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-behance mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-behance</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-bing mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-bing</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-bitcoin mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-bitcoin</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-blogger mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-blogger</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-bootstrap mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-bootstrap</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-chrome mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-chrome</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-codepen mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-codepen</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-creative-commons mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-creative-commons</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-css3 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-css3</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-dailymotion mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-dailymotion</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-deviantart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-deviantart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-digg mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-digg</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-digitalocean mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-digitalocean</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-discord mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-discord</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-discourse mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-discourse</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-dribbble mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-dribbble</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-dropbox mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-dropbox</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-drupal mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-drupal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-ebay mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-ebay</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-edge mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-edge</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-facebook-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-facebook-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-facebook mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-facebook</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-firefox mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-firefox</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-flickr-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-flickr-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-flickr mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-flickr</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-foursquare mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-foursquare</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-git mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-git</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-github mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-github</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-google-plus-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-google-plus-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-google-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-google-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-google mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-google</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-html5 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-html5</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-instagram-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-instagram-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-instagram mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-instagram</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-internet-explorer mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-internet-explorer</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-invision mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-invision</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-javascript mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-javascript</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-joomla mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-joomla</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-jsfiddle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-jsfiddle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-kickstarter mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-kickstarter</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-less mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-less</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-linkedin-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-linkedin-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-linkedin mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-linkedin</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-magento mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-magento</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-mailchimp mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-mailchimp</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-mastercard mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-mastercard</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-medium-old mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-medium-old</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-medium-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-medium-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-medium mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-medium</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-messenger mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-messenger</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-microsoft mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-microsoft</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-nodejs mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-nodejs</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-opera mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-opera</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-paypal mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-paypal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-periscope mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-periscope</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-pinterest mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-pinterest</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-play-store mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-play-store</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-pocket mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-pocket</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-product-hunt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-product-hunt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-quora mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-quora</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-react mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-react</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-reddit mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-reddit</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-redux mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-redux</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-sass mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-sass</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-shopify mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-shopify</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-skype mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-skype</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-slack-old mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-slack-old</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-slack mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-slack</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-snapchat mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-snapchat</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-soundcloud mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-soundcloud</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-spotify mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-spotify</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-squarespace mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-squarespace</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-stack-overflow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-stack-overflow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-stripe mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-stripe</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-telegram mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-telegram</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-trello mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-trello</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-tumblr mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-tumblr</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-twitch mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-twitch</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-twitter mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-twitter</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-unsplash mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-unsplash</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-vimeo mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-vimeo</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-visa mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-visa</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-vk mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-vk</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-vuejs mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-vuejs</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-whatsapp-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-whatsapp-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-whatsapp mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-whatsapp</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-wikipedia mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-wikipedia</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-windows mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-windows</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-wix mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-wix</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-wordpress mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-wordpress</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-yahoo mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-yahoo</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-yelp mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-yelp</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxl-youtube mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxl-youtube</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-add-to-queue mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-add-to-queue</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-adjust-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-adjust-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-adjust mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-adjust</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-alarm-add mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-alarm-add</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-alarm-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-alarm-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-alarm mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-alarm</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-album mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-album</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-ambulance mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-ambulance</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-analyse mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-analyse</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-archive-in mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-archive-in</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-archive-out mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-archive-out</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-archive mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-archive</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-area mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-area</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-award mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-award</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-badge-check mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-badge-check</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-badge mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-badge</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-ball mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-ball</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-band-aid mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-band-aid</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bank mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bank</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bar-chart-alt-2 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bar-chart-alt-2</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bar-chart-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bar-chart-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-barcode mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-barcode</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-basket mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-basket</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bath mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bath</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-battery-charging mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-battery-charging</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-battery-full mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-battery-full</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-battery-low mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-battery-low</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-battery mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-battery</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bed mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bed</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bell-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bell-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bell-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bell-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bell-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bell-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bell-ring mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bell-ring</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bell mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bell</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bolt-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bolt-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bolt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bolt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-book-bookmark mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-book-bookmark</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-book-content mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-book-content</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-book-open mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-book-open</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-book mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-book</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bookmark-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bookmark-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bookmark-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bookmark-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bookmark-star mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bookmark-star</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bookmark mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bookmark</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bookmarks mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bookmarks</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bot mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bot</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bowling-ball mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bowling-ball</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-box mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-box</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-briefcase-alt-2 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-briefcase-alt-2</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-briefcase-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-briefcase-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-briefcase mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-briefcase</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-brightness-half mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-brightness-half</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-brightness mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-brightness</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-brush-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-brush-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-brush mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-brush</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bug-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bug-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bug mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bug</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-building-house mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-building-house</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-building mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-building</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-buildings mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-buildings</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bulb mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bulb</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-buoy mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-buoy</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-bus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-bus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cake mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cake</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-calculator mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-calculator</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-calendar-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-calendar-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-calendar-check mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-calendar-check</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-calendar-event mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-calendar-event</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-calendar-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-calendar-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-calendar-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-calendar-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-calendar-x mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-calendar-x</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-calendar mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-calendar</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-camera-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-camera-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-camera mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-camera</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-capsule mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-capsule</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-captions mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-captions</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-car mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-car</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-card mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-card</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-carousel mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-carousel</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cart-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cart-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-categories mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-categories</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-certification mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-certification</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-chalkboard mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-chalkboard</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-chart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-chart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-chat mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-chat</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-check-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-check-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-check-shield mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-check-shield</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-check-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-check-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-checkbox-checked mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-checkbox-checked</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-checkbox mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-checkbox</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-chip mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-chip</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-city mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-city</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cloud-download mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cloud-download</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cloud-lightning mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cloud-lightning</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cloud-rain mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cloud-rain</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cloud-upload mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cloud-upload</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cloud mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cloud</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-coffee-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-coffee-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-coffee mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-coffee</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cog mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cog</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-collection mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-collection</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-color-fill mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-color-fill</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-comment-add mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-comment-add</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-comment-detail mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-comment-detail</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-comment-dots mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-comment-dots</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-comment-error mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-comment-error</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-comment mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-comment</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-compass mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-compass</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-component mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-component</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-contact mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-contact</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-conversation mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-conversation</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-copy-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-copy-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-copy mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-copy</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-coupon mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-coupon</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-credit-card-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-credit-card-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-credit-card mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-credit-card</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-crown mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-crown</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cube-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cube-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cube mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cube</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cuboid mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cuboid</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-customize mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-customize</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-cylinder mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-cylinder</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-dashboard mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-dashboard</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-data mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-data</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-detail mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-detail</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-devices mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-devices</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-direction-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-direction-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-direction-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-direction-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-directions mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-directions</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-disc mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-disc</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-discount mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-discount</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-dish mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-dish</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-dislike mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-dislike</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-dock-bottom mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-dock-bottom</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-dock-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-dock-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-dock-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-dock-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-dock-top mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-dock-top</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-dollar-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-dollar-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-doughnut-chart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-doughnut-chart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-down-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-down-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-down-arrow-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-down-arrow-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-down-arrow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-down-arrow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-download mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-download</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-downvote mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-downvote</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-drink mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-drink</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-droplet-half mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-droplet-half</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-droplet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-droplet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-duplicate mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-duplicate</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-edit-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-edit-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-edit mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-edit</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-eject mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-eject</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-envelope mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-envelope</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-eraser mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-eraser</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-error-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-error-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-error-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-error-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-error mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-error</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-exit mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-exit</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-extension mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-extension</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-eyedropper mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-eyedropper</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-face mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-face</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-factory mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-factory</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-fast-forward-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-fast-forward-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-blank mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-blank</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-css mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-css</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-doc mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-doc</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-find mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-find</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-gif mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-gif</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-html mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-html</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-image mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-image</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-jpg mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-jpg</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-js mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-js</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-json mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-json</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-md mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-md</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-pdf mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-pdf</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-png mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-png</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file-txt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file-txt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-file mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-file</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-film mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-film</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-filter-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-filter-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-first-aid mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-first-aid</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-flag-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-flag-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-flag mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-flag</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-flame mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-flame</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-flask mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-flask</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-folder-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-folder-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-folder-open mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-folder-open</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-folder-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-folder-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-folder mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-folder</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-fridge mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-fridge</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-gas-pump mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-gas-pump</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-ghost mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-ghost</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-gift mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-gift</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-graduation mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-graduation</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-grid-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-grid-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-grid mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-grid</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-group mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-group</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-hdd mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-hdd</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-heart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-heart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-help-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-help-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-hide mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-hide</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-home-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-home-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-home mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-home</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-hot mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-hot</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-hotel mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-hotel</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-hourglass-bottom mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-hourglass-bottom</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-hourglass-top mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-hourglass-top</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-hourglass mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-hourglass</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-id-card mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-id-card</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-image-add mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-image-add</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-image-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-image-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-image mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-image</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-inbox mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-inbox</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-info-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-info-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-institution mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-institution</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-joystick-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-joystick-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-joystick-button mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-joystick-button</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-joystick mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-joystick</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-key mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-key</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-keyboard mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-keyboard</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-label mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-label</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-landmark mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-landmark</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-landscape mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-landscape</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-layer mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-layer</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-layout mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-layout</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-left-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-left-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-left-arrow-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-left-arrow-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-left-arrow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-left-arrow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-left-down-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-left-down-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-left-top-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-left-top-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-like mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-like</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-lock-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-lock-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-lock-open-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-lock-open-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-lock-open mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-lock-open</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-lock mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-lock</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-log-in-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-log-in-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-log-in mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-log-in</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-log-out-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-log-out-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-log-out mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-log-out</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-magic-wand mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-magic-wand</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-magnet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-magnet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-map-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-map-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-map-pin mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-map-pin</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-map mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-map</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-megaphone mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-megaphone</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-memory-card mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-memory-card</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-message-alt-dots mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-message-alt-dots</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-message-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-message-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-message-dots mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-message-dots</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-message-rounded-dots mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-message-rounded-dots</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-message-rounded mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-message-rounded</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-message-square-dots mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-message-square-dots</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-message-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-message-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-message mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-message</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-microphone-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-microphone-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-microphone-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-microphone-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-microphone mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-microphone</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-minus-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-minus-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-minus-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-minus-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-mobile-vibration mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-mobile-vibration</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-mobile mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-mobile</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-moon mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-moon</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-mouse-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-mouse-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-mouse mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-mouse</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-movie mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-movie</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-music mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-music</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-navigation mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-navigation</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-news mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-news</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-no-entry mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-no-entry</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-note mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-note</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-notepad mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-notepad</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-notification-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-notification-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-notification mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-notification</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-package mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-package</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-paint-roll mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-paint-roll</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-paint mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-paint</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-palette mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-palette</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-paper-plane mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-paper-plane</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-parking mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-parking</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-paste mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-paste</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-pen mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-pen</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-pencil mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-pencil</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-phone-call mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-phone-call</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-phone-incoming mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-phone-incoming</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-phone-outgoing mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-phone-outgoing</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-phone mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-phone</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-photo-album mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-photo-album</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-pie-chart-alt-2 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-pie-chart-alt-2</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-pie-chart-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-pie-chart-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-pie-chart mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-pie-chart</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-pin mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-pin</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-plane-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-plane-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-plane-land mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-plane-land</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-plane-take-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-plane-take-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-plane mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-plane</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-planet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-planet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-playlist mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-playlist</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-plug mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-plug</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-plus-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-plus-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-plus-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-plus-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-polygon mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-polygon</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-printer mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-printer</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-purchase-tag-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-purchase-tag-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-purchase-tag mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-purchase-tag</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-pyramid mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-pyramid</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-quote-alt-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-quote-alt-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-quote-alt-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-quote-alt-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-quote-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-quote-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-quote-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-quote-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-quote-single-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-quote-single-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-quote-single-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-quote-single-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-radio mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-radio</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-receipt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-receipt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-rectangle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-rectangle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-rename mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-rename</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-report mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-report</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-rewind-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-rewind-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-right-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-right-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-right-arrow-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-right-arrow-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-right-arrow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-right-arrow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-right-down-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-right-down-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-right-top-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-right-top-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-rocket mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-rocket</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-ruler mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-ruler</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-save mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-save</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-school mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-school</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-search-alt-2 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-search-alt-2</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-search mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-search</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-select-multiple mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-select-multiple</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-send mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-send</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-server mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-server</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-share-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-share-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-share mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-share</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-shield-alt-2 mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-shield-alt-2</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-shield mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-shield</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-ship mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-ship</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-shopping-bag-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-shopping-bag-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-shopping-bag mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-shopping-bag</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-show mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-show</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-skip-next-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-skip-next-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-skip-previous-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-skip-previous-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-skull mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-skull</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-slideshow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-slideshow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-smiley-happy mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-smiley-happy</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-smiley-meh mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-smiley-meh</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-smiley-sad mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-smiley-sad</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-sort-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-sort-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-spa mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-spa</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-spreadsheet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-spreadsheet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-square-rounded mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-square-rounded</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-star-half mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-star-half</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-star mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-star</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-stopwatch mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-stopwatch</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-store-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-store-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-store mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-store</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-sun mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-sun</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-t-shirt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-t-shirt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-tag-x mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-tag-x</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-tag mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-tag</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-taxi mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-taxi</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-tennis-ball mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-tennis-ball</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-terminal mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-terminal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-thermometer mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-thermometer</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-time-five mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-time-five</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-time mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-time</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-timer mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-timer</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-to-top mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-to-top</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-toggle-left mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-toggle-left</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-toggle-right mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-toggle-right</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-torch mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-torch</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-traffic-barrier mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-traffic-barrier</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-traffic mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-traffic</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-train mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-train</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-trash-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-trash-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-trash mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-trash</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-tree mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-tree</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-trophy mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-trophy</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-truck mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-truck</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-up-arrow-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-up-arrow-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-up-arrow-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-up-arrow-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-up-arrow mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-up-arrow</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-upvote mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-upvote</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user-badge mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user-badge</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user-check mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user-check</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user-detail mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user-detail</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user-minus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user-minus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user-pin mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user-pin</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user-rectangle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user-rectangle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user-voice mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user-voice</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user-x mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user-x</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-user mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-user</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-vial mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-vial</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-video-off mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-video-off</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-video-plus mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-video-plus</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-video-recording mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-video-recording</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-video mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-video</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-videos mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-videos</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-volume-full mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-volume-full</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-volume-low mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-volume-low</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-volume-mute mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-volume-mute</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-volume mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-volume</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-wallet-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-wallet-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-wallet mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-wallet</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-watch-alt mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-watch-alt</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-watch mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-watch</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-widget mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-widget</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-wine mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-wine</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-wrench mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-wrench</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-x-circle mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-x-circle</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-x-square mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-x-square</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-yin-yang mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-yin-yang</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-zap mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-zap</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-zoom-in mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-zoom-in</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card icon-card cursor-pointer text-center mb-4">
              <div class="card-body">
                <i class="bx bxs-zoom-out mb-2"></i>
                <p class="icon-name text-truncate mb-0">bxs-zoom-out</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
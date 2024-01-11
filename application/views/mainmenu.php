<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Bordered Table -->
    <h5 class="fw-bold py-3 mb-4" align="right"><span class="text-muted fw-light">Administrator /</span> Manage Account</h5>

    <div class="card">
      <div class="row py-2 mt-2">
        <span class="fs-5 fw-bold text-primary-emphasis">Register Main Menu</span>
        <div class="col-md-6 col-sm-10 col-5">
          <div class="row ">
            <div class="col-lg-3 p-t-20">
              <span>Main Menu</span><span class="red-text">*</span>
            </div>
            <div class="col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                <input class="mdl-textfield__input" type="text" id="inpMainMenuName" oninput="InputAdd(this)">

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-2 col-5">
          <div class="row container">
            <div class="col-lg-5 p-t-20">
              <span>Main Menu Icon</span><span class="red-text">*</span>
            </div>
            <div class="col-lg-6" style="display: grid; grid-template-columns: auto auto;">
              <input class="mdl-textfield__input" type="text" id="inpMainMenuIcon" oninput="InputAdd(this)">
              <span style="margin-left: -30px;" data-bs-toggle="modal" data-bs-target="#mdlIcon">
                <i class='bx bx-filter'></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md col-sm-2 col-2 p-t-20">
          <button type="button" class="btn btn-circle btn-primary" id="btnSaveAdd">Submit</button>
        </div>
        <div class="col justify-content-start ms-1">
          <div id="errMegadd" style="color: red; display: none;">Please enter in English only.</div>
        </div>
      </div>
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
              <tbody class="table-border-bottom-0" id="tbody">
                <!-- <tr>
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




    <!-- Modal -->
    <div class="modal fade" id="mdlIcon" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Icon container -->
            <div class="d-flex flex-wrap" id="icons-container">
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-adobe mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">adobe</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-algolia mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">algolia</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-audible mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">audible</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-figma mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">figma</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-redbubble mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">redbubble</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-etsy mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">etsy</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-gitlab mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">gitlab</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-patreon mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">patreon</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-facebook-circle mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">facebook-circle</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-imdb mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">imdb</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-jquery mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">jquery</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-pinterest-alt mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">pinterest-alt</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-500px mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">500px</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-airbnb mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">airbnb</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-amazon mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">amazon</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-android mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">android</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-angular mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">angular</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-apple mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">apple</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-baidu mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">baidu</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-behance mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">behance</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-bing mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">bing</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-bitcoin mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">bitcoin</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-blogger mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">blogger</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class="bx bxl-bootstrap mb-2"></i>
                  <p class="icon-name text-capitalize text-truncate mb-0">bootstrap</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class='bx bx-menu'></i>
                  <p class="icon-name mb-0">bx bx-menu</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class='<i class="bx bx-child"></i>'></i>
                  <p class="icon-name mb-0">bx bx-menu</p>
                </div>
              </div>
              <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                <div class="card-body">
                  <i class='<i class="bx bxs-balloon"></i>'></i>
                  <p class="icon-name mb-0">bx bx-menu</p>
                </div>
              </div>
                
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
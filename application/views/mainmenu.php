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
                    <p class="icon-name text-truncate mb-0"></p>
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


    <!-- Modal Icon -->
    <div class="modal fade" id="mdlIcon" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Icon container -->
            <div class="row row-cols-3 g-4" id="icons-container">

            
              <div class="col">
                <div class="card icon-card cursor-pointer text-center mb-4">
                  <div class="card-body">
                  <i class='bx bx-home mb-2'></i>
                    <p class="icon-name text-truncate mb-0">bx-home</p>
                  </div>
                </div>
              </div>


              <!-- เพิ่มไอคอนเพิ่มเติมตามต้องการ -->
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btnSaveEdit">Save changes</button>
          </div>
        </div>
      </div>
    </div>



    <?php
$jsonPath = 'path/to/icons.json'; 
$json_url = 'https://example.com/path/to/your/json/file.json';

// อ่านเนื้อหาของไฟล์ JSON
$jsonContent = file_get_contents($jsonPath);

// แปลง JSON เป็น array
$iconsData = json_decode($jsonContent, true);

// ตรวจสอบว่ามีข้อมูลไอคอนหรือไม่
if (isset($iconsData['regularIcons'])) {
    // แสดงรายการไอคอน
    displayIconsInHTML($iconsData['regularIcons']);
} else {
    echo 'ไม่พบข้อมูลไอคอน';
}

// ฟังก์ชันสำหรับแสดงรายการไอคอนในรูปแบบ HTML
function displayIconsInHTML($icons) {
    foreach ($icons as $icon) {
        echo '<div class="col">
               <div class="card icon-card cursor-pointer text-center mb-4">
                 <div class="card-body">
                   <i class=\'bx ' . $icon . ' mb-2\'></i>
                   <p class="icon-name text-truncate mb-0">' . $icon . '</p>
                 </div>
               </div>
             </div>';
    }
}
?>




    
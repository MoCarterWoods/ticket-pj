<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Bordered Table -->
    <h5 class="fw-bold py-3 mb-4" align="right" id="lblTitle">
      <span class="text-muted fw-light">Ticket Maintenance /</span> Ticket Control
    </h5>


    <div class="card">
      <h5 class="card-header">Ticket Control</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-3 mb-2">
            <label for="selStartTime" class="form-label">Start Time</label>
            <input class="form-control" type="date" value="" id="selStartTime">
          </div>
          <div class="col-md-3 mb-2">
            <label for="selEndTime" class="form-label">End Time</label>
            <input class="form-control" type="date" value="" id="selEndTime">
          </div>
          <div class="col-md-3 mb-2">
            <label for="selStatus" class="form-label">Status</label>
            <select id="selStatus" class="form-select">
              <option>Default select</option>
              <option value="1">IN PROGRESS</option>
              <option value="2">CANCLE</option>
              <option value="3">APPROVAL</option>
            </select>
          </div>

        </div>
      </div>
    </div>



    <div class="card mt-3">
      <h5 class="card-header">Table Ticket Control</h5>

      <div class="card-body">

        <div class="table-responsive text-nowrap">
          <div class="card-datatable table-responsive pt-0">
            <table class="table card-table table-bordered order-column w-100" id="tblTicketControl">
              <thead>
                <tr>
                  <th class="text-center">No.</th>
                  <th class="text-center">Area</th>
                  <th class="text-center">Tool</th>
                  <th class="text-center">Process</th>
                  <th class="text-center">Job Type</th>
                  <th class="text-center">Requester</th>
                  <th class="text-center">Maintenance by</th>
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

<!-- Modal  Equipment -->
<div class="modal fade" id="mdlEditEquipment" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Equipment | jobtypr no.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="selArea" class="form-label">Area</label>
            <select class="form-select" id="selArea">
              <option value="">Choose...</option>
              <option value="1">Product Area</option>
              <option value="2">Other</option>
            </select>
          </div>
        </div>


        <div class="row" style="display: none;" id="selpd">
          <div class="col">
            <label for="selProduction" class="form-label selProduction">Production</label>
            <select class="form-select" id="selProduction">
            </select>
          </div>
          <div class="col ">
            <label for="selLine" class="form-label">Line</label>
            <select class="form-select" id="selLine">
            </select>
          </div>
        </div>

        <div class="col" style="display: none;" id="selother">
          <label for="inpOther" class="form-label">Area Other</label>
          <textarea class="form-control" id="inpOther" rows="2" placeholder="Enter area other"></textarea>
        </div>


        <div class="row mt-2">
          <div class="col mb-3">
            <label for="inpProcess" class="form-label">Process / Funtion</label>
            <textarea class="form-control" id="inpProcess" rows="2" placeholder="Enter process or function"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <label for="selTooling" class="form-label">Tooling System</label>
            <select class="form-select" id="selTooling">
              <option value="">Choose...</option>

            </select>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <label for="addMaker" class="form-label">Maker / Brand</label>
            <input type="text" id="addMaker" class="form-control" value="" readonly>
          </div>
          <div class="col">
            <label for="addModel" class="form-label">Model</label>
            <input type="text" id="addModel" class="form-control" value="" readonly>
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





<!-- Modal Cancle -->
<div class="modal fade" id="mdlCancle" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
        <div class="modal-body">

          <div class="row">
            <div class="col mb-3">
              <label for="CancleDetail" class="form-label">Detail cancle</label>
              <textarea class="form-control" name="" id="CancleDetail" cols="10" rows="3" maxlength="255" placeholder="Enter Detail"></textarea>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="btnSaveDetailCancle">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>






<!-- Modal Problem condition -->
<div class="modal fade" id="mdlProblemcon" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Problem Condition | jobtypr no.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="SelProblem" class="form-label">Problem Condition</label>
            <select class="form-select" id="SelProblem">

            </select>
          </div>
        </div>


        <div class="row">
          <div class="col mb-3">
            <label for="mdetailprdlm" class="form-label">More Detail</label>
            <textarea class="form-control" id="mdetailprdlm" rows="2" placeholder="Enter more detail"></textarea>
          </div>
        </div>

        <div class="row" id="checkboxPb">

        </div>


        <div class="row justify-content-center mt-3">
          <div class="col">
            <label for="dropzone-multi" class="form-label">Upload Images</label>

            <form action="/upload" id="myDropzone" class="dropzone needsclick myDropzone">
              <div class="dz-message needsclick" style="display: none;">
                Drop files here or click to upload
                <span class="note needsclick">(This is just a demo dropzone. Selected files are <span class="fw-medium">not</span> actually uploaded.)</span>
              </div>
              <div class="fallback">
                <input name="file" type="file" />
              </div>
            </form>

          </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSaveProblem">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Jobtype -->
<div class="modal fade" id="mdlJobtype" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Jobtype | jobtypr no.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modalBodyJobtype">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSaveJobtype">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Inspection -->
<div class="modal fade" id="mdlInspec" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Inspection | jobtypr no.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="row">
          <div class="col mb-3">
            <label for="SelInspec" class="form-label">Inspection Method</label>
            <select class="form-select" id="SelInspec">
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <label for="mdetailinsprc" class="form-label">More Detail</label>
            <textarea class="form-control" id="mdetailinsprc" rows="4" placeholder="Enter inspection detail"></textarea>
          </div>
        </div>

        <div class="row" id="checkboxInspec">


        </div>


        <div class="row justify-content-center mt-3">
          <div class="col">
            <label for="dropzone-multi-inspection" class="form-label">Upload Images</label>
            <form action="/upload" class="dropzone needsclick" id="dropzone-multi-inspection">
              <div class="dz-message needsclick">
                Drop files here or click to upload
                <span class="note needsclick">(This is just a demo dropzone. Selected files are <span class="fw-medium">not</span> actually uploaded.)</span>
              </div>
              <div class="fallback">
                <input name="file" type="file" />
              </div>

            </form>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSaveInspec">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Trobleshooting -->
<div class="modal fade" id="mdlTrobles" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Trobleshooting | jobtypr no.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="row">
          <div class="col mb-3">
            <label for="SelTbAc" class="form-label">Troubleshooting/Action</label>
            <select class="form-select" id="SelTbAc">
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <label for="mdetailtbac" class="form-label">More Detail</label>
            <textarea class="form-control" id="mdetailtbac" rows="4" placeholder="Enter troubleshooting"></textarea>
          </div>
        </div>

        <div class="row" id="checkboxTrob1">
          <label class="form-label">Check List</label>

        </div>

        <div class="row mt-2" id="checkboxTrob2">
          <label class="form-label">Check List</label>

        </div>


        <div class="row justify-content-center mt-3">
          <div class="col">
            <label for="dropzone-multi-inspection" class="form-label">Upload Images</label>
            <form action="/upload" class="dropzone needsclick" id="dropzone-multi-troubleshooting">
              <div class="dz-message needsclick">
                Drop files here or click to upload
                <span class="note needsclick">(This is just a demo dropzone. Selected files are <span class="fw-medium">not</span> actually uploaded.)</span>
              </div>
              <div class="fallback">
                <input name="file" type="file" />
              </div>
            </form>
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


<!-- Modal Required Parts -->
<div class="modal fade" id="mdlRequiredParts" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Required Parts | jobtypr no.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form class="form-repeater">
          <div data-repeater-list="group-a">
            <div data-repeater-item>
              <div class="row">
                <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                  <label class="form-label" for="inpSuggestions-1">ข้อเสนอแนะ</label>
                  <input type="text" id="inpSuggestions-1" class="form-control" placeholder="Enter suggestion" />
                </div>
                <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                  <label class="form-label" for="inpOperated-1">ดำเนินการโดย</label>
                  <input type="text" id="inpOperated-1" class="form-control" placeholder="Enter operator" />
                </div>
                <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                  <label class="form-label" for="inpSchedule-1">กำหนดการเสร็จ</label>
                  <input type="date" id="inpSchedule-1" class="form-control" />
                </div>
                <div class="mb-3 col-lg-12 col-xl-2 col-12 d-flex align-items-center mb-0">
                  <button class="btn btn-label-danger mt-4" data-repeater-delete>
                    <i class="bx bx-x me-1"></i>
                    <span class="align-middle">Delete</span>
                  </button>
                </div>
              </div>
              <hr>
            </div>
          </div>
          <div class="mb-0">
            <button class="btn btn-primary" data-repeater-create>
              <i class="bx bx-plus me-1"></i>
              <span class="align-middle">Add</span>
            </button>
          </div>

        </form>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="btnSaveEdit">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Modal Analyze -->
<div class="modal fade" id="mdlAnalyze" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Analyze | jobtypr no.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="row justify-content-center">
          <div class="col" id="checkAnalyze">
            <label for="" class="form-label">วิเคราะสาเหตุของปัญหา</label>

          </div>
        </div>


        <div class="row">
          <div class="col mb-3">
            <label for="mdetailAnalyz" class="form-label">More Detail</label>
            <textarea class="form-control" id="mdetailAnalyz" rows="2" placeholder="Enter more detail"></textarea>
          </div>
        </div>


        <div class="row justify-content-center mt-3">
          <div class="col">
            <label for="dropzone-multi-analyz" class="form-label">Upload Images</label>
            <form action="/upload" class="dropzone needsclick" id="dropzone-multi-analyz">
              <div class="dz-message needsclick">
                Drop files here or click to upload
                <span class="note needsclick">(This is just a demo dropzone. Selected files are <span class="fw-medium">not</span> actually uploaded.)</span>
              </div>
              <div class="fallback">
                <input name="file" type="file" />
              </div>
            </form>
          </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSaveAnalyz">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Prevention -->
<div class="modal fade" id="mdlPrevention" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Prevention | jobtypr no.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="row">
          <form class="form-repeater">
            <div data-repeater-list="group-a">
              <div data-repeater-item>
                <div class="row">
                  <div class="mb-3 col-lg-6 col-xl-3">
                    <label class="form-label" for="inpSuggestions-1">ข้อเสนอแนะ</label>
                    <input type="text" id="inpSuggestions-1" class="form-control" placeholder="Enter suggestion" />
                  </div>
                  <div class="mb-3 col-lg-6 col-xl-3">
                    <label class="form-label" for="inpOperated-1">ดำเนินการโดย</label>
                    <input type="text" id="inpOperated-1" class="form-control" placeholder="Enter operator" />
                  </div>
                  <div class="mb-3 col-lg-6 col-xl-3">
                    <label class="form-label" for="inpSchedule-1">กำหนดการเสร็จ</label>
                    <input type="date" id="inpSchedule-1" class="form-control" />
                  </div>
                  <div class="mb-3 col-lg-12 col-xl-3">
                    <button class="btn btn-label-danger mt-4" data-repeater-delete>
                      <i class="bx bx-x me-1"></i>
                      <span class="align-middle">Delete</span>
                    </button>
                  </div>
                </div>
                <hr>
              </div>
            </div>
            <div class="mb-0">
              <button class="btn btn-primary" data-repeater-create>
                <i class="bx bx-plus me-1"></i>
                <span class="align-middle">Add</span>
              </button>
            </div>
          </form>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSaveEdit">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Delivery -->
<div class="modal fade" id="mdlDelivery" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Delivery equipment | jobtypr no.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">

          <div class="col mb-3" id="checkDeliveryeq">
            
          </div>

        </div>
        <hr>
        <div class="row">
          <div class="mb-3 row">
            <label for="text-input" class="col-md-5 col-form-label" style="font-size: 16px;">ระยะเวลารอชิ้นส่วน</label>
            <div class="col-md-5">
              <input class="form-control text-center" type="text" value="" id="SumWait" readonly="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="text-input" class="col-md-5 col-form-label" style="font-size: 16px;">ระยะเวลาในการบำรุงรักษา</label>
            <div class="col-md-5">
              <input class="form-control text-center" type="text" value="" id="SumRepair" readonly="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="text-input" class="col-md-5 col-form-label" style="font-size: 16px;">เวลาเริ่มต้นการผลิต</label>
            <div class="col-md-5">
              <input class="form-control text-center" type="text" value="" id="SumStart" readonly="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="text-input" class="col-md-5 col-form-label" style="font-size: 16px;">รวมระยะเวลา Breakdown</label>
            <div class="col-md-5">
              <input class="form-control text-center" type="text" value="" id="SumBreak" readonly="">
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSaveDelivery">Save changes</button>
      </div>
    </div>
  </div>
</div>
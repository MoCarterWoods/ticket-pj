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

        <div class="row">
          <div class="col">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customCheckpb1">
                <input class="form-check-input" type="checkbox" value="7" id="customCheckpb1" />
                <span class="custom-option-header">
                  <span class="h6 mb-0">There is a barrier </span>
                </span>
                <span class="custom-option-body">
                  <small class="option-text"> มีการกั้นบริเวณ </small>
                </span>
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customCheckpb2">
                <input class="form-check-input" type="checkbox" value="8" id="customCheckpb2" />
                <span class="custom-option-header">
                  <span class="h6 mb-0">There is a repair sign</span>
                </span>
                <span class="custom-option-body">
                  <small> มีป้ายการซ่อม </small>
                </span>
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customCheckpb3">
                <input class="form-check-input" type="checkbox" value="9" id="customCheckpb3" />
                <span class="custom-option-header">
                  <span class="h6 mb-0">Organized</span>
                </span>
                <span class="custom-option-body">
                  <small> มีการจัดการชิ้นงานเรียบร้อย </small>
                </span>
              </label>
            </div>
          </div>
        </div>


        <div class="row justify-content-center mt-3">
          <div class="col">
            <label for="dropzone-multi" class="form-label">Upload Images</label>
            <form action="/upload" class="dropzone needsclick" id="dropzone-multi">
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
      <div class="modal-body">

        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioIcon1">
                <span class="custom-option-body">
                  <i class='bx bx-wrench'></i>
                  <span class="custom-option-title">ซ่อมแซม [BM]</span>
                  <small> Breakdown Maintenance </small>
                </span>
                <input name="customRadioIcon" class="form-check-input" type="radio" value="1" id="customRadioIcon1" />
              </label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioIcon2">
                <span class="custom-option-body">
                  <i class='bx bx-notepad'></i>
                  <span class="custom-option-title">บำรุงรักษาตามแผน [PM]</span>
                  <small> Planned Maintenance </small>
                </span>
                <input name="customRadioIcon" class="form-check-input" type="radio" value="2" id="customRadioIcon2" />
              </label>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-2">
          <div class="col-md-6">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioIcon3">
                <span class="custom-option-body">
                  <i class='bx bx-edit'></i>
                  <span class="custom-option-title">ปรับปรุง [KM]</span>
                  <small> Kaizen / improvement </small>
                </span>
                <input name="customRadioIcon" class="form-check-input" type="radio" value="3" id="customRadioIcon3" />
              </label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioIcon4">
                <span class="custom-option-body">
                  <i class='bx bx-download'></i>
                  <span class="custom-option-title">ติดตั้ง [IM]</span>
                  <small> Installation / Set Up </small>
                </span>
                <input name="customRadioIcon" class="form-check-input" type="radio" value="4" id="customRadioIcon4" />
              </label>
            </div>
          </div>
        </div>

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

        <div class="row">
          <div class="col">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="#ChkInspec1">
                <input class="form-check-input" type="checkbox" value="6" id="#ChkInspec1" />
                <span class="custom-option-header">
                  <span class="fw-medium">Found a damaged</span>
                </span>
                <span class="custom-option-body">
                  <small> พบสภาพชำรุดสอดคล้องกับปัญหา. </small>
                </span>
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="#ChkInspec2">
                <input class="form-check-input" type="checkbox" value="7" id="#ChkInspec2" />
                <span class="custom-option-header">
                  <span class="fw-medium">Abnormalities found</span>
                </span>
                <span class="custom-option-body">
                  <small> พบความผิดปกติเพิ่มเติม. </small>
                </span>
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="#ChkInspec3">
                <input class="form-check-input" type="checkbox" value="8" id="#ChkInspec3" />
                <span class="custom-option-header">
                  <span class="h6 mb-0">Not found with any equipment</span>
                </span>
                <span class="custom-option-body">
                  <small> ไม่พบความผิดปกติของอุปกรณ์ใดๆ. </small>
                </span>
              </label>
            </div>
          </div>
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
            <textarea class="form-control" id="mdetailtbac" rows="4"></textarea>
          </div>
        </div>

        <div class="row">
          <label class="form-label">Check List</label>


          <div class="col form-check custom-option custom-option-basic">
            <label class="form-check-label custom-option-content" for="#11">
              <input class="form-check-input" type="checkbox" value="" id="#11" />
              <span class="custom-option-header">
                <span class="fw-medium">ชั่วคราว</span>
              </span>
            </label>
          </div>


          <div class="col form-check custom-option custom-option-basic">
            <label class="form-check-label custom-option-content" for="#22">
              <input class="form-check-input" type="checkbox" value="" id="#22" />
              <span class="custom-option-header">
                <span class="fw-medium">ถาวร</span>
              </span>
            </label>
          </div>

        </div>

        <div class="row mt-2">
          <label class="form-label">Check List</label>


          <div class="col form-check custom-option custom-option-basic">
            <label class="form-check-label custom-option-content" for="#33">
              <input class="form-check-input" type="checkbox" value="" id="#33" />
              <span class="custom-option-header">
                <span class="fw-medium">ภายใน</span>
              </span>
              <span class="custom-option-body">
                <input type="text" class="form-control">
              </span>
            </label>
          </div>


          <div class="col form-check custom-option custom-option-basic">
            <label class="form-check-label custom-option-content" for="#44">
              <input class="form-check-input" type="checkbox" value="" id="#44" />
              <span class="custom-option-header">
                <span class="fw-medium">ภายนอก</span>
              </span>
              <span class="custom-option-body">
                <input type="text" class="form-control">
              </span>
            </label>
          </div>

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

          <div class="row mt-5">
            <div class="col-12 d-flex justify-content-between">
              <button class="btn btn-label-secondary btn-prev" disabled>
                <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                <span class="align-middle d-sm-inline-block d-none">Previous</span>
              </button>
              <button class="btn btn-primary btn-next">
                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
              </button>
            </div>
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
          <div class="col">

            <div class="form-check mt-3 checkbox-group" data-index="1">
              <input class="form-check-input" type="checkbox" value="1" id="Check1">
              <label class="form-check-label" for="Check1"> การออกแบบ </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="2" id="Check2">
              <label class="form-check-label" for="Check2"> การติดตั้ง / ชิ้นส่วน </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="3" id="Check3">
              <label class="form-check-label" for="Check3"> การดัดแปลง / ซ่อมแซม </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="4" id="Check4">
              <label class="form-check-label" for="Check4"> การใช้งาน / ผิดวิธี </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="5" id="Check5">
              <label class="form-check-label" for="Check5"> การบำรุงรักษาเบื้องต้น </label>
            </div>
            <div class="form-check mt-3" style="margin-left: 30px;">
              <input class="form-check-input" type="checkbox" value="6" id="Check6">
              <label class="form-check-label" for="Check6"> การขันยึดแน่น </label>
            </div>
            <div class="form-check mt-3" style="margin-left: 30px;">
              <input class="form-check-input" type="checkbox" value="7" id="Check7">
              <label class="form-check-label" for="Check7"> การหล่อลื่น </label>
            </div>
            <div class="form-check mt-3" style="margin-left: 30px;">
              <input class="form-check-input" type="checkbox" value="8" id="Check8">
              <label class="form-check-label" for="Check8"> การทำความสะอาด </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="9" id="Check9">
              <label class="form-check-label" for="Check9"> ปัจจัยภายนอก / ไฟฟ้า </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="10" id="Check10">
              <label class="form-check-label" for="Check10"> อายุการใช้งาน </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="11" id="Check11">
              <label class="form-check-label" for="Check11"> อื่นๆ </label>
              <input type="text" class="form-control" id="adddtInput" placeholder=" อื่นๆ (กอรกข้อมูล) " for="Check11" style="margin-left: -25px;padding: 10px;">
            </div>

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
          <div class="col mb-3">
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="1" id="Check-de1">
              <label class="form-check-label" for="Check-de1"> อุปกรณ์ / เครื่องจักร มีการแก้ไขแบบชั่วคราว ต้องมีการแก้ไขถาวรภายหลังกำหนดการแก้ไขถาวร โดยประมาณ </label>
              <input type="text" class="form-control" id="additionalInput" placeholder=" Enter detail " for="Check-de1">

            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="2" id="Check-de2">
              <label class="form-check-label" for="Check-de2"> อุปกรณ์ / เครื่องจักร มีการบำรุงรักษาเสร็จสิ้น / ครบถ้วน </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="3" id="Check-de3">
              <label class="form-check-label" for="Check-de3"> ตรวจสอบด้านคุณภาพ / จัดการงานเสีย </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="4" id="Check-de4">
              <label class="form-check-label" for="Check-de4"> บันทึกการเปลี่ยนแปลง 4M </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="5" id="Check-de5">
              <label class="form-check-label" for="Check-de5"> สภาพความปลอดภัย </label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="6" id="Check-de6">
              <label class="form-check-label" for="Check-de6"> สภาพ 5ส เรียบร้อย </label>
            </div>
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
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4" align="right">
            <span class="text-muted fw-light">Ticket Maintenance /</span> Issue Ticket
        </h5>
        <div class="card">
            <div class="tab-content doc-example-content">
                <div class="bs-stepper wizard-vertical vertical">
                    <div class="bs-stepper-header">
                        <div class="step active" data-target="#navs-pills-top-Equipment">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spaneq">1</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Equipment</span>
                                    <span class="bs-stepper-subtitle">อุปกรณ์ / เครื่องจักร</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-problem">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spanpb">2</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Problem Condition</span>
                                    <span class="bs-stepper-subtitle">สภาพปัญหา / แผน PM</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-jobtype">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spanjt">3</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Job Type</span>
                                    <span class="bs-stepper-subtitle">ประเภทงาน</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-inspection">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spaninspec">4</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Inspection Method</span>
                                    <span class="bs-stepper-subtitle">การตรวจสอบสภาพอุปกรณ์</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-troubleshooting">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spantbs">5</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Troubleshooting</span>
                                    <span class="bs-stepper-subtitle">การแก้ปัญหา / ดำเนินการ</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-required">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spanreq">6</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Required Parts</span>
                                    <span class="bs-stepper-subtitle">รายการชิ้นส่วนที่ต้องใช้</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-analyze">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spananly">7</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Analysis Problem</span>
                                    <span class="bs-stepper-subtitle">วิเคราะห์สาเหตุของปัญหา</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-prevention">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spanpreven">8</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Prevention</span>
                                    <span class="bs-stepper-subtitle">ป้องกันการเกิดซ้ำ</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-delivery">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spandelivery">9</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Delivery Part</span>
                                    <span class="bs-stepper-subtitle">การส่งมอบอุปกรณ์</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <!-- <form onSubmit="return false"> -->
                        <!-- Equipment -->
                        <div id="navs-pills-top-Equipment" class="content show active">
                            <div class="content-header mb-3">
                                <h6 class="mb-0">Equipment</h6>
                                <small>อุปกรณ์ / เครื่องจักร</small>
                            </div>
                            <div class="row g-3">

                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="selArea" class="form-label">Area</label>
                                                        <select class="form-select" id="selArea">
                                                            <option value="">Choose...</option>
                                                            <option value="1">Product Area</option>
                                                            <option value="2">Other</option>
                                                        </select>

                                                    </div>
                                                    <div class="row pd-line-sel col-8" style="display: none;" id="selpd">
                                                        <div class="col-4">
                                                            <label for="selProduction" class="form-label selProduction">Production</label>
                                                            <select class="form-select" id="selProduction">

                                                            </select>

                                                        </div>
                                                        <div class="col-4">
                                                            <label for="selLine" class="form-label">Line</label>
                                                            <select class="form-select" id="selLine">

                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="row other-sel col-8" style="display: none;" id="selother">
                                                        <div class="col-12">
                                                            <label for="inpOther" class="form-label">Other</label>
                                                            <textarea class="form-control" id="inpOther" rows="2" placeholder="Enter area other"></textarea>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <label for="selTooling" class="form-label">Tooling System</label>
                                                                <select class="form-select" id="selTooling">
                                                                    <option value="">Choose...</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class=" col-4">
                                                                <label for="addMaker" class="form-label">Maker / Brand</label>
                                                                <input type="text" id="addMaker" class="form-control" value="" readonly>

                                                                <label for="addModel" class="form-label">Model</label>
                                                                <input type="text" id="addModel" class="form-control" value="" readonly>
                                                            </div>


                                                            <div class="row other-sel col-8" id="selother">
                                                                <div class="col-12">
                                                                    <label for="inpProcess" class="form-label">Process / Funtion</label>
                                                                    <textarea class="form-control" id="inpProcess" rows="2" placeholder="Enter process or function"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev" disabled> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next1" id="next1"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                                </div>
                            </div>
                        </div>



                        <!-- Problem Con -->
                        <div id="navs-pills-top-problem" class="content">
                            <div class="content-header mb-3">
                                <h6 class="mb-0">Problem Condition</h6>
                                <small>สภาพปัญหา / แผน PM / สภาพปัญหาก่อนการปรับปรุง / Project</small>
                            </div>
                            <div class="row g-3">

                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="row ">
                                                    <div class="col-lg-4 area-mr">
                                                        <div>
                                                            <label for="SelProblem" class="form-label">Problem Condition</label>
                                                            <select class="form-select" id="SelProblem">
                                                                <option value="">Choose...</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label for="mdetailprdlm" class="form-label">More Detail</label>
                                                            <textarea class="form-control" id="mdetailprdlm" rows="4" placeholder="Enter more detail"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row" id="chkBoxProblem">

                                                            <div class="col-md">
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

                                                            <div class="col-md">
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
                                                            <div class="col-md">
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
                                                    </div>

                                                </div>

                                                <div class="row justify-content-center mt-3">
                                                    <div class="col">
                                                        <label for="dropzone-multi" class="form-label">Upload Images</label>
                                                        <form action="/upload" class="dropzone needsclick" id="dropzone-multi">
                                                            <div class="dz-message needsclick">
                                                                Drop files here or click to upload
                                                                <span class="note needsclick">(This is a dropzone. Selected files are maximum <span class="fw-medium">3 files.)
                                                            </div>
                                                            <div class="fallback">
                                                                <input name="file" type="file" />
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>

                            </div>
                            </td>
                            </tr>

                            </tbody>
                            </table>

                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev2" id="prev2"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>



                                <button class="btn btn-primary btn-next2" id="next2"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                            </div>
                        </div>
                    </div>


                    <!-- Job type -->
                    <div id="navs-pills-top-jobtype" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">Job Type</h6>
                            <small>ประเภทงาน</small>
                        </div>
                        <div class="row g-3">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>

                                            <div class="row">
                                                <div class="col-md mb-md-0 mb-2">
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
                                                <div class="col-md mb-md-0 mb-2">
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
                                                <div class="col-md">
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
                                                <div class="col-md">
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
                                        </td>

                                    </tr>


                                </tbody>
                            </table>
                            <div class="col-12 d-flex justify-content-between">

                                <button class="btn btn-primary btn-prev3" id="prev3"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next3" id="next3"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>

                            </div>
                        </div>
                    </div>


                    <!-- Inspection -->
                    <div id="navs-pills-top-inspection" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">Inspection Method</h6>
                            <small>การตรวจสอบสภาพอุปกรณ์ / ความผิดปกติ / ความเสียหาย</small>
                        </div>
                        <div class="row g-3">

                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td>
                                            <div class="row ">
                                                <div class="col-lg-4 area-mr">
                                                    <div>
                                                        <label for="SelInspec" class="form-label">Inspection Method</label>
                                                        <select class="form-select" id="SelInspec">
                                                            <option value="">Choose...</option>
                                                        </select>

                                                    </div>
                                                    <div>
                                                        <label for="mdetailinsprc" class="form-label">More Detail</label>
                                                        <textarea class="form-control" id="mdetailinsprc" rows="4" placeholder="Enter inspection detail"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row g-3 mt-3">


                                                        <div class="col-12">
                                                            <ul class="list-group">
                                                                <li class="list-group-item d-flex justify-content-between ">
                                                                    <div class="offer">

                                                                        <p class="mb-0"><span class="fw-medium">Found a damaged</span></p>
                                                                        <span>พบสภาพชำรุดสอดคล้องกับปัญหา.</span>
                                                                    </div>
                                                                    <div class="apply"> <input class="form-check-input" type="checkbox" value="6" id="customCheckins1" /></div>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between">
                                                                    <div class="offer">
                                                                        <p class="mb-0"><span class="fw-medium">Abnormalities found</span></p>
                                                                        <span>พบความผิดปกติเพิ่มเติม.</span>
                                                                    </div>
                                                                    <div class="apply"> <input class="form-check-input" type="checkbox" value="7" id="customCheckins2" /></div>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between">
                                                                    <div class="offer">
                                                                        <p class="mb-0"><span class="fw-medium">Not found with any equipment</span></p>
                                                                        <span>ไม่พบความผิดปกติของอุปกรณ์ใดๆ.</span>
                                                                    </div>
                                                                    <div class="apply"> <input class="form-check-input" type="checkbox" value="8" id="customCheckins3" /></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row justify-content-center mt-3">
                                                <div class="col">
                                                    <label for="dropzone-multi-inspection" class="form-label">Upload Images</label>
                                                    <form action="/upload" class="dropzone needsclick" id="dropzone-multi-inspection">
                                                        <div class="dz-message needsclick">
                                                            Drop files here or click to upload
                                                            <span class="note needsclick">(This is a dropzone. Selected files are maximum <span class="fw-medium">3 files.)
                                                        </div>
                                                        <div class="fallback">
                                                            <input name="file" type="file" />
                                                        </div>

                                                    </form>


                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev4" id="prev4"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next4" id="next4"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Troubleshooting -->
                    <div id="navs-pills-top-troubleshooting" class="content ">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">Troubleshooting</h6>
                            <small>การแก้ปัญหา / ดำเนินการ</small>
                        </div>
                        <div class="row g-3">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td>
                                            <div class="row ">
                                                <div class="col-lg-4 area-mr">

                                                    <div>
                                                        <label for="SelTbAc" class="form-label">Troubleshooting/Action</label>
                                                        <select class="form-select" id="SelTbAc">
                                                            <option value="">Choose...</option>
                                                        </select>

                                                    </div>
                                                    <div>
                                                        <label for="mdetailtbac" class="form-label">More Detail</label>
                                                        <textarea class="form-control" id="mdetailtbac" rows="4" placeholder="Enter more detail"></textarea>
                                                    </div>



                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Check List</label>


                                                    <div class="col form-check custom-option custom-option-basic">
                                                        <label class="form-check-label custom-option-content" for="troublecheck1">
                                                            <input name="troublecheck1" class="form-check-input" type="radio" value="10" id="troublecheck1" />
                                                            <span class="custom-option-header">
                                                                <span class="fw-medium">ชั่วคราว</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="col form-check custom-option custom-option-basic mt-3">
                                                        <label class="form-check-label custom-option-content" for="troublecheck3">
                                                            <input name="troublecheck2" class="form-check-input" type="radio" value="13" id="troublecheck3" />
                                                            <span class="custom-option-header">
                                                                <span class="fw-medium">ภายใน</span>
                                                            </span>
                                                            <span class="custom-option-body">
                                                                <input type="text" class="form-control" id="texttroublecheck3" placeholder="Enter detail">
                                                            </span>
                                                        </label>
                                                    </div>



                                                </div>

                                                <div class="col">


                                                    <label class="form-label">Check List</label>



                                                    <div class="col form-check custom-option custom-option-basic">
                                                        <label class="form-check-label custom-option-content" for="troublecheck2">
                                                            <input name="troublecheck1" class="form-check-input" type="radio" value="11" id="troublecheck2" />
                                                            <span class="custom-option-header">
                                                                <span class="fw-medium">ถาวร</span>
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="col form-check custom-option custom-option-basic mt-3">
                                                        <label class="form-check-label custom-option-content" for="troublecheck4">
                                                            <input name="troublecheck2" class="form-check-input" type="radio" value="14" id="troublecheck4" />
                                                            <span class="custom-option-header">
                                                                <span class="fw-medium">ภายนอก</span>
                                                            </span>
                                                            <span class="custom-option-body">
                                                                <input type="text" class="form-control" id="texttroublecheck4" placeholder="Enter detail" />
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row justify-content-center mt-3">
                                                <div class="col">
                                                    <form action="/upload" class="dropzone needsclick" id="dropzone-multi-troubleshooting">
                                                        <div class="dz-message needsclick">
                                                            Drop files here or click to upload
                                                            <span class="note needsclick">(This is a dropzone. Selected files are maximum <span class="fw-medium">3 files.)
                                                        </div>
                                                        <div class="fallback">
                                                            <input name="file" type="file" />
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev5" id="prev5"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next5" id="next5"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Required Parts -->
                    <div id="navs-pills-top-required" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">Required Parts</h6>
                            <small>รายการชิ้นส่วนที่ต้องใช้</small>
                        </div>
                        <div class="row g-3">


                            <div class="row mt-3">
                                <table class="table" id="mytable" style="width: 100%;">

                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary " onclick="checkAndOpenModal()"> <i class="bx bx-plus bx-xl"></i> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Add</span> </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                                <div class="modal-dialog">
                                    <form class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="backDropModalTitle">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">

                                                    <label for="selToolingrq" class="form-label">Tooling System</label>
                                                    <select class="form-select" id="selToolingrq">
                                                        <option value="">Choose...</option>

                                                    </select>

                                                    <label for="namerq" class="form-label">Name</label>
                                                    <input type="text" id="namerq" class="form-control" placeholder="Enter Name">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="makerrq" class="form-label">MAKER</label>
                                                    <input type="text" id="makerrq" class="form-control" placeholder="Enter MAKER">
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="modelrq" class="form-label">MODEL</label>
                                                    <input type="text" id="modelrq" class="form-control" placeholder="Enter MODEL">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="inpQTY" class="form-label">QTY</label>
                                                    <input type="number" id="inpQTY" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="inpStock" class="form-label">เบิกจาก Stock</label>
                                                    <input type="date" id="inpStock" class="form-control">
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="inpStockqty" class="form-label">จำนวน</label>
                                                    <input type="number" id="inpStockqty" class="form-control" placeholder="0">
                                                </div>

                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="inpOrder" class="form-label">สั่งซื้อ / เรียกเข้า</label>
                                                    <input type="date" id="inpOrder" class="form-control">
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="inpOrderqty" class="form-label">จำนวน</label>
                                                    <input type="number" id="inpOrderqty" class="form-control" placeholder="0">
                                                </div>

                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="inpReceived" class="form-label">ได้รับของ / เข้าซ่อม</label>
                                                    <input type="date" id="inpReceived" class="form-control">
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="inpReceivedqty" class="form-label">จำนวน</label>
                                                    <input type="number" id="inpReceivedqty" class="form-control" placeholder="0">

                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="submit" data-bs-dismiss="modal">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="modal fade" id="editbackDropModal" data-bs-backdrop="static" tabindex="-1">
                                <div class="modal-dialog">
                                    <form class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="backDropModalTitle">Edit Modal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="editNamerq" class="form-label">Name</label>
                                                    <input type="text" id="editNamerq" class="form-control" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="editMakerrq" class="form-label">MAKER</label>
                                                    <input type="text" id="editMakerrq" class="form-control" placeholder="Enter MAKER">
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="editModelrq" class="form-label">MODEL</label>
                                                    <input type="text" id="editModelrq" class="form-control" placeholder="Enter MODEL">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="editInpQTY" class="form-label">QTY</label>
                                                    <input type="number" id="editInpQTY" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="editInpStock" class="form-label">เบิกจาก Stock</label>
                                                    <input type="date" id="editInpStock" class="form-control">
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="editInpStockqty" class="form-label">จำนวน</label>
                                                    <input type="number" id="editInpStockqty" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="editInpOrder" class="form-label">สั่งซื้อ / เรียกเข้า</label>
                                                    <input type="date" id="editInpOrder" class="form-control">
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="editInpOrderqty" class="form-label">จำนวน</label>
                                                    <input type="number" id="editInpOrderqty" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="editInpReceived" class="form-label">ได้รับของ / เข้าซ่อม</label>
                                                    <input type="date" id="editInpReceived" class="form-control">
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="editInpReceivedqty" class="form-label">จำนวน</label>
                                                    <input type="number" id="editInpReceivedqty" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" onclick="saveEdit()">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev6" id="prev6"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next6" id="next6"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Analysis -->
                    <div id="navs-pills-top-analyze" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">Analysis Problem</h6>
                            <small>วิเคราะห์สาเหตุของปัญหา</small>
                        </div>
                        <div class="row g-3">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td>
                                            <div class="row ">

                                                <div class="col-lg-6">

                                                    <div>
                                                        <label for="mdetailAnalyz" class="">More Detail</label>
                                                        <textarea class="form-control" id="mdetailAnalyz" rows="4" placeholder="Enter more detail"></textarea>
                                                    </div>


                                                </div>
                                                <div class="col-lg-2">
                                                    <p>วิเคราะสาเหตุของปัญหา :</p>

                                                </div>
                                                <div class="col-lg-4">

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
                                                        <input type="text" class="form-control" id="adddtInput" placeholder=" . . . . . . . . . " for="Check11" style="margin-left: -25px;padding: 10px;">
                                                    </div>


                                                </div>

                                            </div>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="row justify-content-center">
                                                <form action="/upload" class="dropzone needsclick" id="dropzone-multi-analyz">
                                                    <div class="dz-message needsclick">
                                                        Drop files here or click to upload
                                                        <span class="note needsclick">(This is a dropzone. Selected files are maximum <span class="fw-medium">3 files.)
                                                    </div>
                                                    <div class="fallback">
                                                        <input name="file" type="file" />
                                                    </div>
                                                </form>

                                            </div>



                                        </td>
                                    </tr>

                                </tbody>
                            </table>


                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev7" id="prev7"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next7" id="next7"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Prevention -->
                    <div id="navs-pills-top-prevention" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">Prevention</h6>
                            <small>ป้องกันการเกิดซ้ำ</small>
                        </div>
                        <div class="row g-3">

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

                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev8" id="prev8"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next8" id="next8"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                            </div>
                        </div>
                    </div>



                    <!-- Delivery -->
                    <div id="navs-pills-top-delivery" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">Delivery Part</h6>
                            <small>การส่งมอบอุปกรณ์ / เครื่องจักร</small>
                        </div>
                        <div class="row g-3">


                            <div class="row" style="margin-top: 15px;">
                                <div class="col-md-12">
                                    <div class="card mb-4">

                                        <div class="card-body demo-vertical-spacing demo-only-element">
                                            <div class="form-check mt-3">
                                                <input class="form-check-input" type="checkbox" value="1" id="Check-de1">
                                                <label class="form-check-label" for="Check-de1"> อุปกรณ์ / เครื่องจักร มีการแก้ไขแบบชั่วคราว ต้องมีการแก้ไขถาวรภายหลังกำหนดการแก้ไขถาวร โดยประมาณ </label>
                                                <input type="text" class="form-control" id="additionalInput" placeholder=" . . . . . . . . . " for="Check-de1">

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
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card mb-4">
                                    <h5 class="card-header">สรุปงานซ่อมบำรุง</h5>
                                    <div class="card-body demo-vertical-spacing demo-only-element">

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

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev9" id="prev9"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-success btn-submit" id="btnSave">Submit</button>
                                </div>
                            </div>
                        </div>

                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>




        <div class="card mt-3">
            <!-- <div class="nav-align-top container card mt-3">




                <ul class="nav nav-pills mb-3 mt-3" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-Equipment" aria-controls="navs-pills-top-equipment" aria-selected="true">Equipment</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-problem" aria-controls="navs-pills-top-problem" aria-selected="false">Problem Condition</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-jobtype" aria-controls="navs-pills-top-jobtype" aria-selected="false">Job Type</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-inspection" aria-controls="navs-pills-top-inspection" aria-selected="false">Inspection</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-troubleshooting" aria-controls="navs-pills-top-troubleshooting" aria-selected="false">Troubleshooting</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-required" aria-controls="navs-pills-top-required" aria-selected="false">Required Parts</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-analyze" aria-controls="navs-pills-top-analyze" aria-selected="false">Analyze</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-prevention" aria-controls="navs-pills-top-prevention" aria-selected="false">Prevention</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-delivery" aria-controls="navs-pills-top-delivery" aria-selected="false">Delivery</button>
                    </li>
                </ul>
            </div> -->
            <div class="">
                <div class="">
                    <!-- <div class="tab-pane fade show active" id="navs-pills-top-Equipment" role="tabpanel">

                        <h3>อุปกรณ์ / เครื่องจักร</h3>
                        <table class="table">
                            <tbody>

                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="selArea" class="form-label">Area</label>
                                                <select class="form-select" id="selArea">
                                                    <option value="">Choose...</option>
                                                    <option value="1">Product Area</option>
                                                    <option value="2">Other</option>
                                                </select>

                                            </div>
                                            <div class="row pd-line-sel col-8" style="display: none;" id="selpd">
                                                <div class="col-4">
                                                    <label for="selProduction" class="form-label selProduction">Production</label>
                                                    <select class="form-select" id="selProduction">

                                                    </select>

                                                </div>
                                                <div class="col-4">
                                                    <label for="selLine" class="form-label">Line</label>
                                                    <select class="form-select" id="selLine">

                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row other-sel col-8" style="display: none;" id="selother">
                                                <div class="col-12">
                                                    <label for="inpOther" class="form-label">Other</label>
                                                    <textarea class="form-control" id="inpOther" rows="2" placeholder="Enter area other"></textarea>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="selTooling" class="form-label">Tooling System</label>
                                                        <select class="form-select" id="selTooling">
                                                            <option value="">Choose...</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class=" col-4">
                                                        <label for="addMaker" class="form-label">Maker / Brand</label>
                                                        <input type="text" id="addMaker" class="form-control" value="" readonly>

                                                        <label for="addModel" class="form-label">Model</label>
                                                        <input type="text" id="addModel" class="form-control" value="" readonly>
                                                    </div>


                                                    <div class="row other-sel col-8" id="selother">
                                                        <div class="col-12">
                                                            <label for="inpProcess" class="form-label">Process / Funtion</label>
                                                            <textarea class="form-control" id="inpProcess" rows="2" placeholder="Enter process or function"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-12 d-flex justify-content-end">

                                                <button class="btn btn-primary btn-next1" type="button" id="next1" data-bs-toggle="tab" data-bs-target="#navs-pills-top-problem">
                                                    <span class="d-sm-inline-block d-none me-1">Next</span>
                                                    <i class="bx bx-chevron-right"></i>
                                                </button>


                                            </div>
                                        </div>

                                    </td>

                                </tr>


                            </tbody>
                        </table>


                    </div> -->


                    <!-- <div class="tab-pane fade" id="navs-pills-top-problem" role="tabpanel">
                    <h3>สภาพปัญหา / แผน PM / สภาพปัญหาก่อนการปรับปรุง / Project</h3>

                    <table class="table">
                        <tbody>

                            <tr>
                                <td>
                                    <div class="row ">
                                        <div class="col-lg-4 area-mr">
                                            <div>
                                                <label for="SelProblem" class="form-label">Problem Condition</label>
                                                <select class="form-select" id="SelProblem">
                                                    <option value="">Choose...</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="mdetailprdlm" class="form-label">More Detail</label>
                                                <textarea class="form-control" id="mdetailprdlm" rows="4" placeholder="Enter more detail"></textarea>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row" id="chkBoxProblem">

                                                <div class="col-md">
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

                                                <div class="col-md">
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
                                                <div class="col-md">
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
                                            <div class="row mt-5">
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-label-secondary btn-prev" id="prev2">
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button class="btn btn-primary btn-next2" id="next2">
                                                        <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                </div> -->
                    </td>
                    </tr>

                    </tbody>
                    </table>

                    <!-- End Problem Con -->

                </div>

                <!-- 
            <div class="tab-pane fade" id="navs-pills-top-jobtype" role="tabpanel">
                <h3>Job Type : ประเภทงาน</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>

                                <div class="row">
                                    <div class="col-md mb-md-0 mb-2">
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
                                    <div class="col-md mb-md-0 mb-2">
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
                                    <div class="col-md">
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
                                    <div class="col-md">
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
                                <div class="row mt-5">
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" id="prev3">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next3" id="next3">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>

                        </tr>


                    </tbody>
                </table>


            </div> -->


                <!-- <div class="tab-pane fade" id="navs-pills-top-inspection" role="tabpanel">
                <h3>การตรวจสอบสภาพอุปกรณ์ / ความผิดปกติ / ความเสียหาย</h3>

                <table class="table">
                    <tbody>

                        <tr>
                            <td>
                                <div class="row ">
                                    <div class="col-lg-4 area-mr">
                                        <div>
                                            <label for="SelInspec" class="form-label">Inspection Method</label>
                                            <select class="form-select" id="SelInspec">
                                                <option value="">Choose...</option>
                                            </select>

                                        </div>
                                        <div>
                                            <label for="mdetailinsprc" class="form-label">More Detail</label>
                                            <textarea class="form-control" id="mdetailinsprc" rows="4" placeholder="Enter inspection detail"></textarea>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row g-3 mt-3">


                                            <div class="col-12">
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between ">
                                                        <div class="offer">

                                                            <p class="mb-0"><span class="fw-medium">Found a damaged</span></p>
                                                            <span>พบสภาพชำรุดสอดคล้องกับปัญหา.</span>
                                                        </div>
                                                        <div class="apply"> <input class="form-check-input" type="checkbox" value="6" id="customCheckins1" /></div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <div class="offer">
                                                            <p class="mb-0"><span class="fw-medium">Abnormalities found</span></p>
                                                            <span>พบความผิดปกติเพิ่มเติม.</span>
                                                        </div>
                                                        <div class="apply"> <input class="form-check-input" type="checkbox" value="7" id="customCheckins2" /></div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <div class="offer">
                                                            <p class="mb-0"><span class="fw-medium">Not found with any equipment</span></p>
                                                            <span>ไม่พบความผิดปกติของอุปกรณ์ใดๆ.</span>
                                                        </div>
                                                        <div class="apply"> <input class="form-check-input" type="checkbox" value="8" id="customCheckins3" /></div>
                                                    </li>
                                                </ul>
                                            </div>
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
                                        <div class="row mt-5">
                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-label-secondary btn-prev" id="prev4">
                                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-primary btn-next4" id="next4">
                                                    <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div> -->

                <!-- <div class="tab-pane fade" id="navs-pills-top-troubleshooting" role="tabpanel">
                <h3>การแก้ไขปัญหา / การดำเนินการ</h3>


                <table class="table">
                    <tbody>

                        <tr>
                            <td>
                                <div class="row ">
                                    <div class="col-lg-4 area-mr">

                                        <div>
                                            <label for="SelTbAc" class="form-label">Troubleshooting/Action</label>
                                            <select class="form-select" id="SelTbAc">
                                                <option value="">Choose...</option>
                                            </select>

                                        </div>
                                        <div>
                                            <label for="mdetailtbac" class="form-label">More Detail</label>
                                            <textarea class="form-control" id="mdetailtbac" rows="4"></textarea>
                                        </div>



                                    </div>
                                    <div class="col">
                                        <label class="form-label">Check List</label>


                                        <div class="col form-check custom-option custom-option-basic">
                                            <label class="form-check-label custom-option-content" for="troublecheck1">
                                                <input name="troublecheck1" class="form-check-input" type="radio" value="10" id="troublecheck1" />
                                                <span class="custom-option-header">
                                                    <span class="fw-medium">ชั่วคราว</span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col form-check custom-option custom-option-basic">
                                            <label class="form-check-label custom-option-content" for="troublecheck2">
                                                <input name="troublecheck1" class="form-check-input" type="radio" value="11" id="troublecheck2" />
                                                <span class="custom-option-header">
                                                    <span class="fw-medium">ถาวร</span>
                                                </span>
                                            </label>
                                        </div>


                                    </div>

                                    <div class="col">


                                        <label class="form-label">Check List</label>

                                        <div class="col form-check custom-option custom-option-basic">
                                            <label class="form-check-label custom-option-content" for="troublecheck3">
                                                <input name="troublecheck2" class="form-check-input" type="radio" value="13" id="troublecheck3" />
                                                <span class="custom-option-header">
                                                    <span class="fw-medium">ภายใน</span>
                                                </span>
                                                <span class="custom-option-body">
                                                    <input type="text" class="form-control" id="texttroublecheck3">
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col form-check custom-option custom-option-basic">
                                            <label class="form-check-label custom-option-content" for="troublecheck4">
                                                <input name="troublecheck2" class="form-check-input" type="radio" value="14" id="troublecheck4" />
                                                <span class="custom-option-header">
                                                    <span class="fw-medium">ภายนอก</span>
                                                </span>
                                                <span class="custom-option-body">
                                                    <input type="text" class="form-control" id="texttroublecheck4">
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-center mt-3">
                                    <div class="col">
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
                                <div class="row mt-5">
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" id="prev5">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next5" id="next5">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div> -->

                <!-- <div class="tab-pane fade " id="navs-pills-top-required" role="tabpanel">

                <button type="button" class="btn btn-primary" onclick="checkAndOpenModal()">
                    Launch modal
                </button>



                <div class="row mt-3">
                    <table class="table" id="mytable" style="width: 100%;">

                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-label-secondary btn-prev" id="prev6">
                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next6" id="next6">
                            <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                        </button>
                    </div>
                </div>

                




            </div> -->

                <!-- <div class="tab-pane fade" id="navs-pills-top-analyze" role="tabpanel">
                <h3>การวิเคราะห์สาเหตุของปัญหา</h3>
                <table border="1" class="table">
                    <tbody>
                        <tr>
                            <td>Problem Analysis <span style="color:red">*</span></td>


                        </tr>
                        <tr>
                            <td>
                                <div class="row ">

                                    <div class="col-lg-6">

                                        <div>
                                            <label for="mdetailAnalyz" class="">More Detail</label>
                                            <textarea class="form-control" id="mdetailAnalyz" rows="4"></textarea>
                                        </div>


                                    </div>
                                    <div class="col-lg-2">
                                        <p>วิเคราะสาเหตุของปัญหา :</p>

                                    </div>
                                    <div class="col-lg-4">

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
                                            <input type="text" class="form-control" id="adddtInput" placeholder=" . . . . . . . . . " for="Check11" style="margin-left: -25px;padding: 10px;">
                                        </div>


                                    </div>

                                </div>
                            </td>

                        </tr>


                        <tr>
                            <td>
                                <div class="row justify-content-center">
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


                                <div class="row mt-5">
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" id="prev7">
                                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next7" id="next7">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div> -->

                <!-- <div class="tab-pane fade" id="navs-pills-top-prevention" role="tabpanel">

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
                            <button class="btn btn-label-secondary btn-prev" id="prev8">
                                <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button class="btn btn-primary btn-next8" id="next8">
                                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div> -->

                <!-- <div class="tab-pane fade" id="navs-pills-top-delivery" role="tabpanel">
                <h3>การส่งมอบอุปกรณ์ / เครื่องจักร</h3>

                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-12">
                        <div class="card mb-4">

                            <div class="card-body demo-vertical-spacing demo-only-element">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="Check-de1">
                                    <label class="form-check-label" for="Check-de1"> อุปกรณ์ / เครื่องจักร มีการแก้ไขแบบชั่วคราว ต้องมีการแก้ไขถาวรภายหลังกำหนดการแก้ไขถาวร โดยประมาณ </label>
                                    <input type="text" class="form-control" id="additionalInput" placeholder=" . . . . . . . . . " for="Check-de1">

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
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mb-4">
                        <h5 class="card-header">สรุปงานซ่อมบำรุง</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element">

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
                </div>

                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-label-secondary btn-prev" id="prev9">
                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary mx-2 my-2 mr-2" id="btnReset" onclick="confirmReset()">Reset</button>
                            <button type="button" class="btn btn-success mx-2 my-2" id="btnSave">Save</button>


                            <button type="button" class="btn btn-success mx-2 my-2" id="btnSave2">Savsssse</button>
                        </div>
                    </div>
                </div>




            </div> -->



            </div>
        </div>
    </div>
</div>



<script>
    var namerq, makerrq, modelrq, inpQTY, inpStock, inpStockqty, inpOrder, inpOrderqty, inpReceived, inpReceivedqty, submit;
    namerq = document.getElementById('namerq');
    makerrq = document.getElementById('makerrq');
    modelrq = document.getElementById('modelrq');
    inpQTY = document.getElementById('inpQTY');
    inpStock = document.getElementById('inpStock');
    inpStockqty = document.getElementById('inpStockqty');
    inpOrder = document.getElementById('inpOrder');
    inpOrderqty = document.getElementById('inpOrderqty');
    inpReceived = document.getElementById('inpReceived');
    inpReceivedqty = document.getElementById('inpReceivedqty');
    submit = document.getElementById('submit');
    submit.addEventListener("click", addData);

    var rowCount = 0;

    function addData() {
        var table = document.getElementById('mytable').getElementsByTagName("tbody")[0];
        if (rowCount >= 5) { // เช็คว่าถ้าจำนวนแถวมากกว่าหรือเท่ากับ 5 แถวแล้ว
            alert("Maximum row limit reached!"); // แสดงแจ้งเตือนว่าเกินจำนวนแถวสูงสุดแล้ว
        } else if (makerrq.value == "" & namerq.value == "") {
            namerq.focus();
        } else {
            var row = table.insertRow(0);
            var col1 = row.insertCell(0);
            var col2 = row.insertCell(1);
            var col3 = row.insertCell(2);
            var col4 = row.insertCell(3);
            var col5 = row.insertCell(4);
            var col6 = row.insertCell(5);
            var col7 = row.insertCell(6);
            var col8 = row.insertCell(7);
            var col9 = row.insertCell(8);
            var col10 = row.insertCell(9);
            var col11 = row.insertCell(10);

            col1.innerHTML = `<label class="form-label">Name</label><input type="text" class="form-control" value="${namerq.value}" >`;
            col2.innerHTML = `<label class="form-label">Maker</label><input type="text" class="form-control" value="${makerrq.value}" >`;
            col3.innerHTML = `<label class="form-label">Model</label><input type="text" class="form-control" value="${modelrq.value}" >`;
            col4.innerHTML = `<label class="form-label">Qty</label><input type="number" class="form-control" value="${inpQTY.value}" >`;
            col5.innerHTML = `<input type="date" class="form-control" value="${inpStock.value}" id="tdinpStock">`;
            col6.innerHTML = `<input type="number" class="form-control" value="${inpStockqty.value}">`;
            col7.innerHTML = `<input type="date" class="form-control" value="${inpOrder.value}">`;
            col8.innerHTML = `<input type="number" class="form-control" value="${inpOrderqty.value}">`;
            col9.innerHTML = `<input type="date" class="form-control" value="${inpReceived.value}">`;
            col10.innerHTML = `<input type="number" class="form-control" value="${inpReceivedqty.value}">`;
            col11.innerHTML = `<button class="btn btn-label-success mt-4" data-repeater-delete onclick="openEditModal(this)">
        <i class="bx bx-edit me-1"></i>
        <span class="align-middle">Edit</span>
        </button>
                    <button class="btn btn-label-danger mt-4" data-repeater-delete onclick="deleted(this)">
                      <i class="bx bx-x me-1"></i>
                      <span class="align-middle">Delete</span>
                    </button>`;

            col5.style.display = "none";
            col6.style.display = "none";
            col7.style.display = "none";
            col8.style.display = "none";
            col9.style.display = "none";
            col10.style.display = "none";
            rowCount++;
        }
        namerq.value = "";
        makerrq.value = "";
        modelrq.value = "";
        inpQTY.value = "";
        inpStock.value = "";
        inpStockqty.value = "";
        inpOrder.value = "";
        inpOrderqty.value = "";
        inpReceived.value = "";
        inpReceivedqty.value = "";
        namerq.focus();
    }


    function checkAndOpenModal() {
        var rowCount = document.getElementById('mytable').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
        if (rowCount >= 5) {
            alert('สามารถเพิ่มข้อมูลได้ไม่เกิน 5 แถว!');
            $('#backDropModal').modal('hide');
        } else {
            $('#backDropModal').modal('show');
        }
    }


    function deleted(r) {
        var result = confirm("Want to delete?");
        if (result) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("mytable").deleteRow(i);
        }
    }

    var row_id

    function openEditModal(button) {

        row_id = button.parentNode.parentNode.rowIndex;
        var row = button.closest("tr");

        if (row) {
            var editedNamerq = row.cells[0].getElementsByTagName('input')[0].value;
            var editedMakerrq = row.cells[1].getElementsByTagName('input')[0].value;
            var editedModelrq = row.cells[2].getElementsByTagName('input')[0].value;
            var editedInpQTY = row.cells[3].getElementsByTagName('input')[0].value;
            var editedInpStock = row.cells[4].getElementsByTagName('input')[0].value;
            var editedInpStockqty = row.cells[5].getElementsByTagName('input')[0].value;
            var editedInpOrder = row.cells[6].getElementsByTagName('input')[0].value;
            var editedInpOrderqty = row.cells[7].getElementsByTagName('input')[0].value;
            var editedInpReceived = row.cells[8].getElementsByTagName('input')[0].value;
            var editedInpReceivedqty = row.cells[9].getElementsByTagName('input')[0].value;

            // เปิด modal
            var editModal = new bootstrap.Modal(document.getElementById('editbackDropModal'));
            editModal.show();

            // ดึงข้อมูลจากแถวและใส่ใน modal
            document.getElementById("editNamerq").value = editedNamerq;
            document.getElementById("editMakerrq").value = editedMakerrq;
            document.getElementById("editModelrq").value = editedModelrq;
            document.getElementById("editInpQTY").value = editedInpQTY;
            document.getElementById("editInpStock").value = editedInpStock;
            document.getElementById("editInpStockqty").value = editedInpStockqty;
            document.getElementById("editInpOrder").value = editedInpOrder;
            document.getElementById("editInpOrderqty").value = editedInpOrderqty;
            document.getElementById("editInpReceived").value = editedInpReceived;
            document.getElementById("editInpReceivedqty").value = editedInpReceivedqty;


        } else {
            console.error("Unable to find row.");
        }
    }



    function saveEdit() {

        document.getElementById("mytable").deleteRow(row_id);
        // หาแถวที่มีการแก้ไขข้อมูล
        var editedRow = document.querySelector('#mytable tbody tr.editing');

        // ตรวจสอบว่ามีแถวที่ถูกกำหนดเป็นการแก้ไขหรือไม่
        // if (editedRow) {
        // ดึงค่าข้อมูลที่แก้ไขแล้วจากฟอร์มใน modal edit
        var editedNamerq = document.getElementById('editNamerq').value;
        var editedMakerrq = document.getElementById('editMakerrq').value;
        var editedModelrq = document.getElementById('editModelrq').value;
        var editedInpQTY = document.getElementById('editInpQTY').value;
        var editedInpStock = document.getElementById('editInpStock').value;
        var editedInpStockqty = document.getElementById('editInpStockqty').value;
        var editedInpOrder = document.getElementById('editInpOrder').value;
        var editedInpOrderqty = document.getElementById('editInpOrderqty').value;
        var editedInpReceived = document.getElementById('editInpReceived').value;
        var editedInpReceivedqty = document.getElementById('editInpReceivedqty').value;


        var table = document.getElementById('mytable').getElementsByTagName("tbody")[0];
        // if (editedMakerrq.value == "" & editedNamerq.value == "") {
        //     editedNamerq.focus();
        // } else {
        var row = table.insertRow(0);
        var col1 = row.insertCell(0);
        var col2 = row.insertCell(1);
        var col3 = row.insertCell(2);
        var col4 = row.insertCell(3);
        var col5 = row.insertCell(4);
        var col6 = row.insertCell(5);
        var col7 = row.insertCell(6);
        var col8 = row.insertCell(7);
        var col9 = row.insertCell(8);
        var col10 = row.insertCell(9);
        var col11 = row.insertCell(10);
        col1.innerHTML = `<label class="form-label">Name</label><input type="text" class="form-control" value="${editedNamerq}" >`;
        col2.innerHTML = `<label class="form-label">Maker</label><input type="text" class="form-control" value="${editedMakerrq}" >`;
        col3.innerHTML = `<label class="form-label">Model</label><input type="text" class="form-control" value="${editedModelrq}" >`;
        col4.innerHTML = `<label class="form-label">Qty</label><input type="number" class="form-control" value="${editedInpQTY}" >`;
        col5.innerHTML = `<input type="date" class="form-control" value="${editedInpStock}" style="display:none">`;
        col6.innerHTML = `<input type="number" class="form-control" value="${editedInpStockqty}" style="display:none">`;
        col7.innerHTML = `<input type="date" class="form-control" value="${editedInpOrder}" style="display:none">`;
        col8.innerHTML = `<input type="number" class="form-control" value="${editedInpOrderqty}" style="display:none">`;
        col9.innerHTML = `<input type="date" class="form-control" value="${editedInpReceived}" style="display:none">`;
        col10.innerHTML = `<input type="number" class="form-control" value="${editedInpReceivedqty}" style="display:none">`;
        col11.innerHTML = `<button class="btn btn-label-success mt-4" data-repeater-delete onclick="openEditModal(this)">
                                    <i class="bx bx-edit me-1"></i>
                                    <span class="align-middle">Edit</span>
                                    </button>

                                    
                                    <button class="btn btn-label-danger mt-4" data-repeater-delete onclick="deleted(this)">
                          <i class="bx bx-x me-1"></i>
                          <span class="align-middle">Delete</span>
                                </button>`;
        col5.style.display = "none";
        col6.style.display = "none";
        col7.style.display = "none";
        col8.style.display = "none";
        col9.style.display = "none";
        col10.style.display = "none";
        // }
        editedNamerq.value = "";
        editedMakerrq.value = "";
        editedModelrq.value = "";
        editedInpQTY.value = "";
        editedInpStock.value = "";
        editedInpStockqty.value = "";
        editedInpOrder.value = "";
        editedInpOrderqty.value = "";
        editedInpReceived.value = "";
        editedInpReceivedqty.value = "";


        // ปิด modal edit
        var editModal = bootstrap.Modal.getInstance(document.getElementById('editbackDropModal'));
        editModal.hide();
        // } else {
        //     console.error("Unable to find row.");
        // }
    }
</script>

<!-- <script>
    $(document).ready(function() {
        $('.list-group-item').on('click', function() {
            // $('.list-group-item').removeClass('active');
            $(this).find('li').addClass('active');
        })
    })
</script> -->

<!-- <div id="personal-info-1" class="content">
    <div class="content-header mb-3">
        <h6 class="mb-0">Personal Info</h6>
        <small>Enter Your Personal Info.</small>
    </div>
    <div class="row g-3">
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

        <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
        </div>
    </div>
</div> -->
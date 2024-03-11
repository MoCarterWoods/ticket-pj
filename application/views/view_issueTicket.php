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
                        <div class="step" data-target="#navs-pills-top-jobtype">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spanjt">2</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Job Type</span>
                                    <span class="bs-stepper-subtitle">ประเภทงาน</span>
                                </span>
                            </button>
                        </div>

                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-problem">
                            <button type="button" class="step-trigger" disabled>
                                <span class="bs-stepper-circle" id="spanpb">3</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Problem Condition</span>
                                    <span class="bs-stepper-subtitle">สภาพปัญหา / แผน PM</span>
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
                                                <div class="row mt-3">
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


                                                <div class="row ">
                                                    <div class="col">

                                                        <div class="row mt-3">
                                                            <div class="row other-sel col-8" id="selother">
                                                                <div class="col-12">
                                                                    <label for="inpProcess" class="form-label">Process / Funtion</label>
                                                                    <textarea class="form-control" id="inpProcess" rows="2" placeholder="Enter process or function"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <label for="selTooling" class="form-label">Tooling System</label>
                                                                <select class="form-select" id="selTooling">
                                                                    <option value="">Choose...</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class=" col-4">
                                                                <label for="addMaker" class="form-label">Maker / Brand</label>
                                                                <input type="text" id="addMaker" class="form-control" value="" readonly>

                                                                <label for="addModel" class="form-label">Model</label>
                                                                <input type="text" id="addModel" class="form-control" value="" readonly>
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
                                            <div class="col-md-12">
                                                <div class="row mt-5" id="chkBoxJob">


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

                    <!-- Problem Con -->
                    <div id="navs-pills-top-problem" class="content show active">
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
                                                    <div class="mt-3">
                                                        <label for="mdetailprdlm" class="form-label">More Detail</label>
                                                        <textarea class="form-control" id="mdetailprdlm" rows="4" placeholder="Enter more detail"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <label for="chkBoxProblem" class="form-label"></label>
                                                    <div class="row" id="chkBoxProblem">



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

                                            <div class="row mt-3">

                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                            <label for="inpDate" class="form-label">เวลาเริ่มหยุดผลิต</label>
                                                                <input type="date" id="inpDate" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class=" col">
                                                                <label for="inpTimeStop" class="form-label">Time</label>
                                                                <input type="time" id="inpTimeStop" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                            <label for="inpRequester" class="form-label">ผู้ร้องขอการบำรุงรักษา</label>
                                                                <input type="date" id="inpRequester" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class=" col">
                                                                <label for="inpTimeRequester" class="form-label">Time</label>
                                                                <input type="time" id="inpTimeRequester" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                            <label for="inpApprove" class="form-label">อนุมัติการเข้าบำรุงรักษา</label>
                                                                <input type="date" id="inpApprove" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class=" col">
                                                                <label for="inpTimeApprove" class="form-label">Time</label>
                                                                <input type="time" id="inpTimeApprove" class="form-control" value="">
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
                                                <div class="mt-3">
                                                    <label for="mdetailinsprc" class="form-label">More Detail</label>
                                                    <textarea class="form-control" id="mdetailinsprc" rows="4" placeholder="Enter inspection detail"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="mdetailinsprc" class="form-label">Inspection Checklist</label>

                                                <div class="row" id="chkBoxInspec">


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
                <div id="navs-pills-top-troubleshooting" class="content">
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
                                                <div class="mt-3">
                                                    <label for="mdetailtbac" class="form-label">More Detail</label>
                                                    <textarea class="form-control" id="mdetailtbac" rows="4" placeholder="Enter more detail"></textarea>
                                                </div>



                                            </div>
                                            <div class="col" id="chkBoxTrouble1">
                                                <label class="form-label">Check List</label>
                                            </div>


                                            <div class="col" id="chkBoxTrouble2">
                                                <label class="form-label">Check List</label>
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


                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="addMakerrq" class="form-label">Maker / Brand</label>
                                                <input type="text" id="addMakerrq" class="form-control" value="" readonly>
                                            </div>
                                            <div class="col mb-3">
                                                <label for="addModelrq" class="form-label">Model</label>
                                                <input type="text" id="addModelrq" class="form-control" value="" readonly>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="selTyperq" class="form-label">Type</label>
                                                <select class="form-select" id="selTyperq">
                                                    <option value="">Choose...</option>
                                                </select>
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
                                                <label for="editselToolingrq" class="form-label">Tooling System</label>
                                                <select class="form-select" id="editselToolingrq">
                                                    <option value="">Choose...</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="editaddMakerrq" class="form-label">Maker / Brand</label>
                                                <input type="text" id="editaddMakerrq" class="form-control" value="" readonly>
                                            </div>
                                            <div class="col mb-3">
                                                <label for="editaddModelrq" class="form-label">Model</label>
                                                <input type="text" id="editaddModelrq" class="form-control" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="editselTyperq" class="form-label">Type</label>
                                                <select class="form-select" id="editselTyperq">

                                                </select>
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

                                            <div class="col-5">

                                                <div>
                                                    <label for="mdetailAnalyz" class="">More Detail</label>
                                                    <textarea class="form-control" id="mdetailAnalyz" rows="4" placeholder="Enter more detail"></textarea>
                                                </div>


                                            </div>


                                            <div class="col">
                                                <label for="form-label">วิเคราะสาเหตุของปัญหา</label>

                                                <div class="row" id="checkboxanalyz" style="padding-left: 1rem;">

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

                        <!-- <form class="form-repeater">
                            <div data-repeater-list="group-a">
                                <div data-repeater-item>
                                    <div class="row">
                                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                            <label class="form-label" for="form-repeater-1-1">Username</label>
                                            <input type="text" id="form-repeater-1-1" class="form-control" placeholder="john.doe" />
                                        </div>
                                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                            <label class="form-label" for="form-repeater-1-2">Password</label>
                                            <input type="password" id="form-repeater-1-2" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        </div>
                                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                            <label class="form-label" for="form-repeater-1-3">Gender</label>
                                            <select id="form-repeater-1-3" class="form-select">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                            <label class="form-label" for="form-repeater-1-4">Profession</label>
                                            <select id="form-repeater-1-4" class="form-select">
                                                <option value="Designer">Designer</option>
                                                <option value="Developer">Developer</option>
                                                <option value="Tester">Tester</option>
                                                <option value="Manager">Manager</option>
                                            </select>
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
                        </form> -->

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





</div>
</div>



<script>
    var selToolingrq, addMakerrq, addModelrq, inpQTY, inpStock, inpStockqty, inpOrder, inpOrderqty, inpReceived, inpReceivedqty, submit;
    selToolingrq = document.getElementById('selToolingrq');
    addMakerrq = document.getElementById('addMakerrq');
    addModelrq = document.getElementById('addModelrq');
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
        } else if (addMakerrq.value == "" & selToolingrq.value == "") {
            selToolingrq.focus();
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
            var col12 = row.insertCell(11);
            var col13 = row.insertCell(12);


            col1.innerHTML = `<label class="form-label">Name</label><input class="form-select" value="${selToolingrq.value}" disabled>`;
            col2.innerHTML = `<label class="form-label">Maker</label><input type="text" class="form-control" value="${addMakerrq.value}" disabled>`;
            col3.innerHTML = `<label class="form-label">Model</label><input type="text" class="form-control" value="${addModelrq.value}" disabled>`;
            col4.innerHTML = `<label class="form-label">Type</label><input class="form-select" value="${selTyperq.value}" disabled>`;
            col5.innerHTML = `<label class="form-label">Qty</label><input type="number" class="form-control" value="${inpQTY.value}" disabled>`;
            col6.innerHTML = `<input type="date" class="form-control" value="${inpStock.value}" id="tdinpStock">`;
            col7.innerHTML = `<input type="number" class="form-control" value="${inpStockqty.value}">`;
            col8.innerHTML = `<input type="date" class="form-control" value="${inpOrder.value}">`;
            col9.innerHTML = `<input type="number" class="form-control" value="${inpOrderqty.value}">`;
            col10.innerHTML = `<input type="date" class="form-control" value="${inpReceived.value}">`;
            col11.innerHTML = `<input type="number" class="form-control" value="${inpReceivedqty.value}">`;
            col12.innerHTML = '<button class="btn btn-label-success mt-4" data-repeater-delete="" onclick="openEditModal(this)"></i><span class="align-middle"><i class="bx bx-edit-alt me-1" style="font-size: 25px;"></i></span></button>';
              col13.innerHTML = '<button class="btn btn-label-danger mt-4" data-repeater-delete="" onclick="deleted(this)"><span class="align-middle"><i class="bx bx-trash me-1" style="font-size: 25px;"></i></span></button>';

            col6.style.display = "none";
            col7.style.display = "none";
            col8.style.display = "none";
            col9.style.display = "none";
            col10.style.display = "none";
            col11.style.display = "none";
            rowCount++;
        }
        selToolingrq.value = "";
        addMakerrq.value = "";
        addModelrq.value = "";
        selTyperq.value = "";
        inpQTY.value = "";
        inpStock.value = "";
        inpStockqty.value = "";
        inpOrder.value = "";
        inpOrderqty.value = "";
        inpReceived.value = "";
        inpReceivedqty.value = "";
        selToolingrq.focus();
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
            var editedselToolingrq = row.cells[0].getElementsByTagName('input')[0].value;
            var editedaddMakerrq = row.cells[1].getElementsByTagName('input')[0].value;
            var editedaddModelrq = row.cells[2].getElementsByTagName('input')[0].value;
            var editedselTyperq = row.cells[3].getElementsByTagName('input')[0].value;
            var editedInpQTY = row.cells[4].getElementsByTagName('input')[0].value;
            var editedInpStock = row.cells[5].getElementsByTagName('input')[0].value;
            var editedInpStockqty = row.cells[6].getElementsByTagName('input')[0].value;
            var editedInpOrder = row.cells[7].getElementsByTagName('input')[0].value;
            var editedInpOrderqty = row.cells[8].getElementsByTagName('input')[0].value;
            var editedInpReceived = row.cells[9].getElementsByTagName('input')[0].value;
            var editedInpReceivedqty = row.cells[10].getElementsByTagName('input')[0].value;

            // เปิด modal
            var editModal = new bootstrap.Modal(document.getElementById('editbackDropModal'));
            editModal.show();

            // ดึงข้อมูลจากแถวและใส่ใน modal
            document.getElementById("editselToolingrq").value = editedselToolingrq;
            document.getElementById("editaddMakerrq").value = editedaddMakerrq;
            document.getElementById("editaddModelrq").value = editedaddModelrq;
            document.getElementById("editselTyperq").value = editedselTyperq;
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
        var editedselToolingrq = document.getElementById('editselToolingrq').value;
        var editedaddMakerrq = document.getElementById('editaddMakerrq').value;
        var editedaddModelrq = document.getElementById('editaddModelrq').value;
        var editedselTyperq = document.getElementById('editselTyperq').value;
        var editedInpQTY = document.getElementById('editInpQTY').value;
        var editedInpStock = document.getElementById('editInpStock').value;
        var editedInpStockqty = document.getElementById('editInpStockqty').value;
        var editedInpOrder = document.getElementById('editInpOrder').value;
        var editedInpOrderqty = document.getElementById('editInpOrderqty').value;
        var editedInpReceived = document.getElementById('editInpReceived').value;
        var editedInpReceivedqty = document.getElementById('editInpReceivedqty').value;


        var table = document.getElementById('mytable').getElementsByTagName("tbody")[0];
        // if (editedaddMakerrq.value == "" & editedselToolingrq.value == "") {
        //     editedselToolingrq.focus();
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
        var col12 = row.insertCell(11);
        var col13 = row.insertCell(12);
        col1.innerHTML = `<label class="form-label">Name</label><input type="text" class="form-control" value="${editedselToolingrq}" disabled>`;
        col2.innerHTML = `<label class="form-label">Maker</label><input type="text" class="form-control" value="${editedaddMakerrq}" disabled>`;
        col3.innerHTML = `<label class="form-label">Model</label><input type="text" class="form-control" value="${editedaddModelrq}" disabled>`;
        col4.innerHTML = `<label class="form-label">Type</label><input class="form-select" value="${editselTyperq.value}" disabled>`;
        col5.innerHTML = `<label class="form-label">Qty</label><input type="number" class="form-control" value="${editedInpQTY}" disabled>`;
        col6.innerHTML = `<input type="date" class="form-control" value="${editedInpStock}" style="display:none">`;
        col7.innerHTML = `<input type="number" class="form-control" value="${editedInpStockqty}" style="display:none">`;
        col8.innerHTML = `<input type="date" class="form-control" value="${editedInpOrder}" style="display:none">`;
        col9.innerHTML = `<input type="number" class="form-control" value="${editedInpOrderqty}" style="display:none">`;
        col10.innerHTML = `<input type="date" class="form-control" value="${editedInpReceived}" style="display:none">`;
        col11.innerHTML = `<input type="number" class="form-control" value="${editedInpReceivedqty}" style="display:none">`;
        col12.innerHTML = '<button class="btn btn-label-success mt-4" data-repeater-delete="" onclick="openEditModal(this)"></i><span class="align-middle"><i class="bx bx-edit-alt me-1" style="font-size: 25px;"></i></span></button>';
              col13.innerHTML = '<button class="btn btn-label-danger mt-4" data-repeater-delete="" onclick="deleted(this)"><span class="align-middle"><i class="bx bx-trash me-1" style="font-size: 25px;"></i></span></button>';

        col6.style.display = "none";
        col7.style.display = "none";
        col8.style.display = "none";
        col9.style.display = "none";
        col10.style.display = "none";
        col11.style.display = "none";
        // }
        editedselToolingrq.value = "";
        editedaddMakerrq.value = "";
        editedaddModelrq.value = "";
        editselTyperq.value = "";
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
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4" align="right">
            <span class="text-muted fw-light">Ticket Maintenance /</span> Issue Ticket
        </h5>
        <!-- <div class="container">
                <h2>Maintenance Worksheet (ใบงานบำรุงรักษา)</h2>
            </div> -->
        <div class="card">
            <div class="tab-content doc-example-content">
                <div class="bs-stepper wizard-vertical vertical">
                    <div class="bs-stepper-header">
                        <div class="step" data-target="#navs-pills-top-Equipment">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Equipment</span>
                                    <span class="bs-stepper-subtitle">อุปกรณ์ / เครื่องจักร</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-problem">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Problem Condition</span>
                                    <span class="bs-stepper-subtitle">สภาพปัญหา / แผน PM</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-jobtype">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Job Type</span>
                                    <span class="bs-stepper-subtitle">ประเภทงาน</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-inspection">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Inspection Method</span>
                                    <span class="bs-stepper-subtitle">การตรวจสอบสภาพอุปกรณ์</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-troubleshooting">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">5</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Troubleshooting</span>
                                    <span class="bs-stepper-subtitle">การแก้ปัญหา / ดำเนินการ</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-required">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">6</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Required Parts</span>
                                    <span class="bs-stepper-subtitle">รายการชิ้นส่วนที่ต้องใช้</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-analyze">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">7</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Analysis Problem</span>
                                    <span class="bs-stepper-subtitle">วิเคราะห์สาเหตุของปัญหา</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-prevention">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">8</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Prevention</span>
                                    <span class="bs-stepper-subtitle">ป้องกันการเกิดซ้ำ</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#navs-pills-top-delivery">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle">9</span>
                                <span class="bs-stepper-label mt-1">
                                    <span class="bs-stepper-title">Delivery Part</span>
                                    <span class="bs-stepper-subtitle">การส่งมอบอุปกรณ์</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form onSubmit="return false">


                            <!-- Equipment -->
                            <div id="navs-pills-top-Equipment" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Equipment</h6>
                                    <small>อุปกรณ์ / เครื่องจักร.</small>
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

                                                    <div class="row mt-5">

                                                    </div>

                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>

                                    <div class="col-12 d-flex justify-content-end">

                                        <button class="btn btn-primary btn-next1" type="button" id="next1" data-bs-toggle="tab" data-bs-target="#navs-pills-top-problem">
                                            <span class="d-sm-inline-block d-none me-1">Next</span>
                                            <i class="bx bx-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <!-- Problem-->

                            <div id="navs-pills-top-problem" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
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
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>

                                    <div class="row justify-content-center">
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
                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Jobtype -->
                            <div id="navs-pills-top-jobtype" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
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
                                        <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                                    </div>
                                </div>
                            </div>


                            <!-- Social Links -->
                            <div id="navs-pills-top-inspection" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">

                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div id="navs-pills-top-troubleshooting" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">

                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div id="navs-pills-top-required" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">

                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div id="navs-pills-top-analyze" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">

                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div id="navs-pills-top-prevention" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">

                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div id="navs-pills-top-delivery" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Social Links</h6>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row g-3">

                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <script>
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
            col5.innerHTML = `<input type="date" class="form-control" value="${inpStock.value}" style="display:none">`;
            col6.innerHTML = `<input type="number" class="form-control" value="${inpStockqty.value}" style="display:none">`;
            col7.innerHTML = `<input type="date" class="form-control" value="${inpOrder.value}" style="display:none">`;
            col8.innerHTML = `<input type="number" class="form-control" value="${inpOrderqty.value}" style="display:none">`;
            col9.innerHTML = `<input type="date" class="form-control" value="${inpReceived.value}" style="display:none">`;
            col10.innerHTML = `<input type="number" class="form-control" value="${inpReceivedqty.value}" style="display:none">`;
            col11.innerHTML = `<button class="btn btn-label-success mt-4" data-repeater-delete onclick="openEditModal(this)">
        <i class="bx bx-edit me-1"></i>
        <span class="align-middle">Edit</span>
        </button>
                    <button class="btn btn-label-danger mt-4" data-repeater-delete onclick="deleted(this)">
                      <i class="bx bx-x me-1"></i>
                      <span class="align-middle">Delete</span>
                    </button>`;

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
        col11.innerHTML = `<button class="btn btn-secondary mt-4" data-repeater-delete onclick="openEditModal(this)">
                                    <i class="bx bx-edit me-1"></i>
                                    <span class="align-middle">Edit</span>
                                    </button>
                                    
                                    <button class="btn btn-label-danger mt-4" data-repeater-delete onclick="deleted(this)">
                          <i class="bx bx-x me-1"></i>
                          <span class="align-middle">Delete</span>
                                </button>`;
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

<script>
    $(document).ready(function() {
        $('.list-group-item').on('click', function() {
            // $('.list-group-item').removeClass('active');
            $(this).find('li').addClass('active');
        })
    })
</script> -->
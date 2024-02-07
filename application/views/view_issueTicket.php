<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
<!-- 
<style>
    #exTab1 .tab-content {
        color: white;
        background-color: #428bca;
        padding: 5px 15px;
    }

    #exTab2 h3 {
        color: white;
        background-color: #428bca;
        padding: 5px 15px;
    }

    /* remove border radius for the tab */

    #exTab1 .nav-pills>li>a {
        border-radius: 0;
    }

    /* change border radius for the tab , apply corners on top*/

    #exTab3 .nav-pills>li>a {
        border-radius: 4px 4px 0 0;
    }

    #exTab3 .tab-content {
        color: white;
        background-color: #428bca;
        padding: 5px 15px;
    }

    .process-step .btn:focus {
        outline: none;
    }

    .process {
        display: table;
        width: 100%;
        position: relative;

        padding: 15px;
        border-radius: 10px;
    }

    .process-row {
        display: table-row;
    }

    .process-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .process-row:before {
        top: 40px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;

    }

    .process-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .process-step p {
        margin-top: 4px;
    }

    .btn-circle {
        width: 80px;
        height: 80px;
        text-align: center;
        font-size: 12px;
        border-radius: 50%;
    }

    a:hover,
    a:focus {
        text-decoration: none;
    }
</style> -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4" align="right">
            <span class="text-muted fw-light">Ticket Maintenance /</span> Issue Ticket
        </h5>
        <!-- <div class="container">
                <h2>Maintenance Worksheet (ใบงานบำรุงรักษา)</h2>
            </div> -->
        <div class="nav-align-top container card ">
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
        </div>
        <div class="card mt-3">








            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-pills-top-Equipment" role="tabpanel">

                    <h3>อุปกรณ์ / เครื่องจักร</h3>
                    <table border="1" class="table">
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
                                                <label for="selProduction" class="form-label">Production</label>
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
                                                <label for="textother" class="form-label">Other</label>
                                                <textarea class="form-control" id="textother" rows="2" placeholder="Enter area other"></textarea>
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
                                                        <label for="textother" class="form-label">Process / Funtion</label>
                                                        <textarea class="form-control" id="textother" rows="2" placeholder="Enter process or function"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-12 d-flex justify-content-end">

                                            <button class="btn btn-primary btn-next1" type="button" data-bs-toggle="tab" data-bs-target="#yourTabId">
                                                <span class="d-sm-inline-block d-none me-1">Next</span>
                                                <i class="bx bx-chevron-right"></i>
                                            </button>

                                        </div>
                                    </div>

                                </td>

                            </tr>


                        </tbody>
                    </table>


                </div>


                <div class="tab-pane fade" id="navs-pills-top-problem" role="tabpanel">
                    <h3>สภาพปัญหา / แผน PM / สภาพปัญหาก่อนการปรับปรุง / Project</h3>

                    <table border="1" class="table">
                        <tbody>

                            <tr>
                                <td>
                                    <div class="row ">
                                        <div class="col-lg-4 area-mr">
                                            <div>
                                                <label for="SelProblem" class="form-label">Problem Condition</label>
                                                <!-- <span class="red-text">*</span> -->
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
                                            <div class="row">
                                                <div class="col-md">
                                                    <div class="form-check custom-option custom-option-basic">
                                                        <label class="form-check-label custom-option-content" for="customCheckpb1">
                                                            <input class="form-check-input" type="checkbox" value="" id="customCheckpb1" />
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
                                                            <input class="form-check-input" type="checkbox" value="" id="customCheckpb2" />
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
                                                            <input class="form-check-input" type="checkbox" value="" id="customCheckpb3" />
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
                                            <label for="dropzone-multi-problem" class="form-label">Upload Images</label>
                                            <form action="/upload" class="dropzone needsclick" id="dropzone-multi-problem">
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
                                        </div>
                                    </div>

                </div>
                </td>
                </tr>

                </tbody>
                </table>

                <!-- End Problem Con -->

            </div>


            <div class="tab-pane fade" id="navs-pills-top-jobtype" role="tabpanel">
                <h3>Job Type : ประเภทงาน</h3>
                <table border="1" class="table">
                    <tbody>
                        <tr>
                            <td>

                                <!-- <div class="row">
                                    <div class="col-4">
                                        <label for="SelJobtype" class="form-label">Job Type</label>
                                        <select class="form-select" id="SelJobtype">
                                            <option value="">Choose job type...</option>

                                        </select>
                                    </div>


                                </div> -->

                                <div class="row">
                                    <div class="col-md mb-md-0 mb-2">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="customRadioIcon1">
                                                <span class="custom-option-body">
                                                <i class='bx bx-wrench'></i>
                                                    <span class="custom-option-title">ซ่อมแซม [BM]</span>
                                                    <small> Breakdown Maintenance </small>
                                                </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon1" />
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
                                                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon2" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="customRadioIcon3">
                                                <span class="custom-option-body">
                                                <i class='bx bx-edit'></i>
                                                    <span class="custom-option-title">ปรับปรุง [ KM]</span>
                                                    <small> Kaizen / improvement </small>
                                                </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon3" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="customRadioIcon3">
                                                <span class="custom-option-body">
                                                <i class='bx bx-download'></i>
                                                    <span class="custom-option-title">ติดตั้ง [IM]</span>
                                                    <small> Installation / Set Up </small>
                                                </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon3" />
                                            </label>
                                        </div>
                                    </div>
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
                            </td>

                        </tr>


                    </tbody>
                </table>


            </div>


            <div class="tab-pane fade" id="navs-pills-top-inspection" role="tabpanel">
                <h3>การตรวจสอบสภาพอุปกรณ์ / ความผิดปกติ / ความเสียหาย</h3>

                <table border="1" class="table">
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
                                                        <div class="apply"> <input class="form-check-input" type="checkbox" value="" id="customCheckpb1" /></div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <div class="offer">
                                                            <p class="mb-0"><span class="fw-medium">Abnormalities found</span></p>
                                                            <span>พบความผิดปกติเพิ่มเติม.</span>
                                                        </div>
                                                        <div class="apply"> <input class="form-check-input" type="checkbox" value="" id="customCheckpb2" /></div>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <div class="offer">
                                                            <p class="mb-0"><span class="fw-medium">Not found with any equipment</span></p>
                                                            <span>ไม่พบความผิดปกติของอุปกรณ์ใดๆ.</span>
                                                        </div>
                                                        <div class="apply"> <input class="form-check-input" type="checkbox" value="" id="customCheckpb3" /></div>
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

                                    </div>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="navs-pills-top-troubleshooting" role="tabpanel">
                <h3>การแก้ไขปัญหา / การดำเนินการ</h3>


                <table border="1" class="table">
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
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade " id="navs-pills-top-required" role="tabpanel">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                    Launch modal
                </button>
                <div class="row mt-3">
                    <table class="table table-bordered" id="mytable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>MAKER</th>
                                <th>MODEL</th>
                                <th>จำนวน</th>
                                <th>เบิกจาก STOCK</th>
                                <th></th>
                                <th>สั่งซื้อ / เรียกเข้า</th>
                                <th></th>
                                <th>ได้รับของ / เข้าซ่อม</th>
                                <th>MODEL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
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
                                        <label for="inpReceived" class="form-label">เได้รับของ / เข้าซ่อม</label>
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
                <!-- Modal -->
            </div>

            <div class="tab-pane fade" id="navs-pills-top-analyze" role="tabpanel">
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
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="navs-pills-top-prevention" role="tabpanel">
                <h3>Prevention of recurrence : การป้องกันการเกิดซ้ำ</h3>
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
            </div>

            <div class="tab-pane fade" id="navs-pills-top-delivery" role="tabpanel">
                <h3>การส่งมอบอุปกรณ์ / เครื่องจักร</h3>

                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-6">
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
                <div class="col-6">
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


                <!-- ปุ่มนอก -->
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-secondary">Reset</button>
                    <button type="button" class="btn btn-success ml-2" id="btnSave">Save</button>
                </div>
            </div>



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

    function addData() {
        var table = document.getElementById('mytable').getElementsByTagName("tbody")[0];
        if (makerrq.value == "" & namerq.value == "") {
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
            col1.innerHTML = `<input type="text" class="form-control" value="${namerq.value}" >`;
            col2.innerHTML = `<input type="text" class="form-control" value="${makerrq.value}" >`;
            col3.innerHTML = `<input type="text" class="form-control" value="${modelrq.value}" >`;
            col4.innerHTML = `<input type="number" class="form-control" value="${inpQTY.value}" >`;
            col5.innerHTML = `<input type="date" class="form-control" value="${inpStock.value}" >`;
            col6.innerHTML = `<input type="number" class="form-control" value="${inpStockqty.value}" >`;
            col7.innerHTML = `<input type="date" class="form-control" value="${inpOrder.value}" >`;
            col8.innerHTML = `<input type="number" class="form-control" value="${inpOrderqty.value}" >`;
            col9.innerHTML = `<input type="date" class="form-control" value="${inpReceived.value}" >`;
            col10.innerHTML = `<input type="number" class="form-control" value="${inpReceivedqty.value}" >`;
            col11.innerHTML = `<button class="btn btn-label-danger mt-4" data-repeater-delete onclick="deleted(this)">
                          <i class="bx bx-x me-1"></i>
                          <span class="align-middle">Delete</span>
                        </button>`;
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

    function deleted(r) {
        var result = confirm("Want to delete?");
        if (result) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("mytable").deleteRow(i);
        }
    }
</script>

<script>
    $(document).ready(function() {
        $('.list-group-item').on('click', function() {
            // $('.list-group-item').removeClass('active');
            $(this).find('li').addClass('active');
        })
    })
</script>
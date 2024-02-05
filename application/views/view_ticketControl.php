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
        <div class="card">





            <div class="container">
                <h2>Maintenance Worksheet (ใบงานบำรุงรักษา)</h2>
            </div>

            <div class="nav-align-top">
                <ul class="nav nav-pills mb-3" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-Equipment" aria-controls="navs-pills-top-equipment" aria-selected="true">Equipment</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-problem" aria-controls="navs-pills-top-problem" aria-selected="false">Problem Condition</button>
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
                <div class="tab-content">


                    <div class="tab-pane fade show active" id="navs-pills-top-Equipment" role="tabpanel">
                        <h3>อุปกรณ์ / เครื่องจักร</h3>
                        <table border="1" class="table">
                            <tbody>
                                <tr style="background-color: cornsilk;">
                                    <td>Area <span style="color:red">*</span></td>



                                    <td class="dt" style="display:none;">Launch Date</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option value="">Choose...</option>
                                            <option value="1">Product Area</option>
                                            <option value="2">Other</option>
                                        </select>


                                        <div class="row pd-line-sel" style="display: none;" id="selpd">
                                            <label for="droppd">PD :
                                                <select class="form-select" id="droppd">

                                                </select>

                                            </label>
                                            <label for="dropline">Line :
                                                <select class="form-select" id="dropline">
                                                    <option value="">Choose Line Code</option>
                                                </select></label>
                                        </div>


                                        <div class="row other-sel" style="display: none;" id="selother">
                                            <label for="textother" class="form-label">Other</label>
                                            <textarea class="form-control" id="textother" rows="3"></textarea>
                                        </div>
                                    </td>

                                </tr>


                            </tbody>
                        </table>

                        <table border="1" class="table">
                            <tbody>
                                <tr style="background-color: cornsilk;">
                                    <td>Job Type <span style="color:red">*</span></td>
                                    <td>Process / Function <span style="color:red">*</span></td>
                                    <td>Tooling System <span style="color:red">*</span></td>


                                </tr>
                                <tr>
                                    <td>

                                        <select class="form-select" id="SelJobtype">
                                            <option value="">Choose...</option>

                                        </select>




                                    </td>


                                    <td>

                                        <textarea class="form-control" id="processf" rows="2"></textarea>

                                    </td>

                                    <td>

                                        <select class="form-select" id="SelTool">
                                            <option value="">Choose...</option>

                                        </select>

                                        <div class="row" style="    margin-left: -10px;margin-top: -10px;padding: 25px;">
                                            <label for="addMaker" class="form">Maker/Brand</label>
                                            <input type="text" id="addMaker" class="form-control" value="" readonly>

                                            <label for="addModel" class="form">Model</label>
                                            <input type="text" id="addModel" class="form-control" value="" readonly>
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
                                <tr style="background-color: cornsilk;">
                                    <td>Problem Condition <span style="color:red">*</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row ">
                                            <div class="col-lg-4 area-mr">
                                                <div class="row ">
                                                    <label for="SelProblem">Problem Condition<span class="red-text">*</span>
                                                        <select class="form-select" id="SelProblem">
                                                            <option value="">Choose...</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label for="mdetailprdlm" class="">More Detail</label>
                                                    <textarea class="form-control" id="mdetailprdlm" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div id="col-lg-8" class="col-lg-8 sh-im">
                                                <div>
                                                    <label for="file-input1-problm">Pic 1</label>
                                                    <input type="file" id="file-input1-problm" class="file-input form-control" accept="image/*" onchange="previewImagepb('file-input1-problm', 'previewpb1', 1)">

                                                    <label for="file-input2-problm">Pic 2</label>
                                                    <input type="file" id="file-input2-problm" class="file-input form-control" accept="image/*" onchange="previewImagepb('file-input2-problm', 'previewpb2', 2)">

                                                    <label for="file-input3-problm">Pic 3</label>
                                                    <input type="file" id="file-input3-problm" class="file-input form-control" accept="image/*" onchange="previewImagepb('file-input3-problm', 'previewpb3', 3)">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-12 sh-im text-center" style="padding-top: 25px;">
                                                <button onclick="deleteImagepb(1)" style="display:none;" class="btn btn-danger new-delete-button">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="previewpb1" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImagepb(2)" style="display:none;" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="previewpb2" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImagepb(3)" style="display:none;" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="previewpb3" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- End Problem Con -->
                        <script>
                            function previewImagepb(inputId, imgId, order) {
                                var input = document.getElementById(inputId);
                                var img = document.getElementById(imgId);
                                var deleteButton = document.querySelector(`button[onclick="deleteImagepb(${order})"]`);
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    img.src = e.target.result;
                                    img.style.display = 'inline-block';
                                    deleteButton.style.display = 'inline-block';
                                };

                                if (input.files[0]) {
                                    reader.readAsDataURL(input.files[0]);
                                }

                                // เพิ่มลำดับลงใน alt เพื่อให้สามารถจัดเรียงตามลำดับ
                                img.alt = "Preview " + order;

                                // ซ่อน label และ input ที่เคยถูกแสดง
                                for (var i = 1; i <= 3; i++) {
                                    var label = document.querySelector(`label[for=file-input${i}-problm]`);
                                    var input = document.getElementById(`file-input${i}-problm`);

                                    if (i === order) {

                                    } else {

                                    }
                                }

                                // แสดง label และ input ของอันถัดไป (ถ้ามี)
                                if (order < 3) {
                                    var nextOrder = order + 1;
                                    var nextLabel = document.querySelector(`label[for=file-input${nextOrder}-problm]`);
                                    var nextInput = document.getElementById(`file-input${nextOrder}-problm`);
                                    nextLabel.style.display = 'inline-block';
                                    nextInput.style.display = 'inline-block';
                                    // ทำให้รูปถัดไปซ่อนเริ่มต้น
                                    var nextImg = document.getElementById(`previewpb${nextOrder}`);
                                    nextImg.style.display = 'none';
                                }
                            }

                            function deleteImagepb(order) {
                                var currentImg = document.getElementById(`previewpb${order}`);
                                var currentInput = document.getElementById(`file-input${order}-problm`);
                                var currentLabel = document.querySelector(`label[for=file-input${order}-problm`);
                                var currentDeleteButton = document.querySelector(`button[onclick="deleteImagepb(${order})"]`);

                                currentImg.src = '#';
                                currentImg.style.display = 'none';
                                currentInput.value = '';
                                currentDeleteButton.style.display = 'none';
                            }
                        </script>
                    </div>

                    <div class="tab-pane fade" id="navs-pills-top-inspection" role="tabpanel">
                        <h3>การตรวจสอบสภาพอุปกรณ์ / ความผิดปกติ / ความเสียหาย</h3>

                        <table border="1" class="table">
                            <tbody>
                                <tr style="background-color: cornsilk;">
                                    <td>Inspection Method <span style="color:red">*</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row ">
                                            <div class="col-lg-4 area-mr">
                                                <div class="row ">
                                                    <label for="SelInspec">Inspection Method<span class="red-text">*</span>
                                                        <select class="form-select" id="SelInspec">
                                                            <option value="">Choose...</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label for="mdetailinsprc" class="">More Detail</label>
                                                    <textarea class="form-control" id="mdetailinsprc" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div id="col-lg-8" class="col-lg-8 sh-im">
                                                <div>
                                                    <label for="file-input1-isp">Pic 1</label>
                                                    <input type="file" id="file-input1-isp" class="file-input form-control" accept="image/*" onchange="previewImageinsm('file-input1-isp', 'previewins1', 1)">

                                                    <label for="file-input2-isp">Pic 2</label>
                                                    <input type="file" id="file-input2-isp" class="file-input form-control" accept="image/*" onchange="previewImageinsm('file-input2-isp', 'previewins2', 2)">

                                                    <label for="file-input3-isp">Pic 3</label>
                                                    <input type="file" id="file-input3-isp" class="file-input form-control" accept="image/*" onchange="previewImageinsm('file-input3-isp', 'previewins3', 3)">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-12 text-center sh-im" style="padding-top: 25px;">
                                                <button onclick="deleteImageinsm(1)" style="display:none;" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="previewins1" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImageinsm(2)" style="display:none;" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="previewins2" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImageinsm(3)" style="display:none;" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="previewins3" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    function previewImageinsm(inputId, imgId, order) {
                                        var input = document.getElementById(inputId);
                                        var img = document.getElementById(imgId);
                                        var deleteButton = document.querySelector(`button[onclick="deleteImageinsm(${order})"]`);
                                        var reader = new FileReader();

                                        reader.onload = function(e) {
                                            img.src = e.target.result;
                                            img.style.display = 'inline-block';
                                            deleteButton.style.display = 'inline-block';
                                        };

                                        if (input.files[0]) {
                                            reader.readAsDataURL(input.files[0]);
                                        }

                                        // เพิ่มลำดับลงใน alt เพื่อให้สามารถจัดเรียงตามลำดับ
                                        img.alt = "Preview " + order;

                                        // ซ่อน label และ input ที่เคยถูกแสดง
                                        for (var i = 1; i <= 3; i++) {
                                            var label = document.querySelector(`label[for=file-input${i}-isp]`);
                                            var input = document.getElementById(`file-input${i}-isp`);

                                            if (i === order) {

                                            } else {

                                            }
                                        }

                                        // แสดง label และ input ของอันถัดไป (ถ้ามี)
                                        if (order < 3) {
                                            var nextOrder = order + 1;
                                            var nextLabel = document.querySelector(`label[for=file-input${nextOrder}-isp]`);
                                            var nextInput = document.getElementById(`file-input${nextOrder}-isp`);
                                            nextLabel.style.display = 'inline-block';
                                            nextInput.style.display = 'inline-block';
                                            // ทำให้รูปถัดไปซ่อนเริ่มต้น
                                            var nextImg = document.getElementById(`previewins${nextOrder}`);
                                            nextImg.style.display = 'none';
                                        }
                                    }

                                    function deleteImageinsm(order) {
                                        var currentImg = document.getElementById(`previewins${order}`);
                                        var currentInput = document.getElementById(`file-input${order}-isp`);
                                        var currentLabel = document.querySelector(`label[for=file-input${order}-isp`);
                                        var currentDeleteButton = document.querySelector(`button[onclick="deleteImageinsm(${order})"]`);

                                        currentImg.src = '#';
                                        currentImg.style.display = 'none';
                                        currentInput.value = '';
                                        currentDeleteButton.style.display = 'none';
                                    }
                                </script>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="navs-pills-top-troubleshooting" role="tabpanel">
                        <h3>การแก้ไขปัญหา / การดำเนินการ</h3>


                        <table border="1" class="table">
                            <tbody>
                                <tr style="background-color: cornsilk;">
                                    <td>Troubleshooting Action <span style="color:red">*</span></td>


                                </tr>
                                <tr>
                                    <td>
                                        <div class="row ">
                                            <div class="col-lg-4 area-mr">

                                                <div class="row ">
                                                    <label for="SelTbAc">Troubleshooting/Action<span class="red-text">*</span>
                                                        <select class="form-select" id="SelTbAc">
                                                            <option value="">Choose...</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label for="mdetailtbac" class="">More Detail</label>
                                                    <textarea class="form-control" id="mdetailtbac" rows="4"></textarea>
                                                </div>



                                            </div>


                                            <div id="col-lg-8" class="col-lg-8 sh-im">
                                                <div>
                                                    <label for="file-input1-tbac">Pic 1</label>
                                                    <input type="file" id="file-input1-tbac" class="file-input form-control" accept="image/*" onchange="previewImagetb('file-input1-tbac', 'previewtbac1', 1)">

                                                    <label for="file-input2-tbac">Pic 2</label>
                                                    <input type="file" id="file-input2-tbac" class="file-input form-control" accept="image/*" onchange="previewImagetb('file-input2-tbac', 'previewtbac2', 2)">

                                                    <label for="file-input3-tbac">Pic 3</label>
                                                    <input type="file" id="file-input3-tbac" class="file-input form-control" accept="image/*" onchange="previewImagetb('file-input3-tbac', 'previewtbac3', 3)">

                                                </div>

                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-12 text-center sh-im" style="padding-top: 25px;">
                                                <button onclick="deleteImagetb(1)" style="display:none;" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="previewtbac1" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImagetb(2)" style="display:none;" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="previewtbac2" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImagetb(3)" style="display:none;" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="previewtbac3" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    function previewImagetb(inputId, imgId, order) {
                                        var input = document.getElementById(inputId);
                                        var img = document.getElementById(imgId);
                                        var deleteButton = document.querySelector(`button[onclick="deleteImagetb(${order})"]`);
                                        var reader = new FileReader();

                                        reader.onload = function(e) {
                                            img.src = e.target.result;
                                            img.style.display = 'inline-block';
                                            deleteButton.style.display = 'inline-block';
                                        };

                                        if (input.files[0]) {
                                            reader.readAsDataURL(input.files[0]);
                                        }

                                        // เพิ่มลำดับลงใน alt เพื่อให้สามารถจัดเรียงตามลำดับ
                                        img.alt = "Preview " + order;

                                        // ซ่อน label และ input ที่เคยถูกแสดง
                                        for (var i = 1; i <= 3; i++) {
                                            var label = document.querySelector(`label[for=file-input${i}-tbac]`);
                                            var input = document.getElementById(`file-input${i}-tbac`);

                                            if (i === order) {

                                            } else {

                                            }
                                        }

                                        // แสดง label และ input ของอันถัดไป (ถ้ามี)
                                        if (order < 3) {
                                            var nextOrder = order + 1;
                                            var nextLabel = document.querySelector(`label[for=file-input${nextOrder}-tbac]`);
                                            var nextInput = document.getElementById(`file-input${nextOrder}-tbac`);
                                            nextLabel.style.display = 'inline-block';
                                            nextInput.style.display = 'inline-block';
                                            // ทำให้รูปถัดไปซ่อนเริ่มต้น
                                            var nextImg = document.getElementById(`previewtbac${nextOrder}`);
                                            nextImg.style.display = 'none';
                                        }
                                    }

                                    function deleteImagetb(order) {
                                        var currentImg = document.getElementById(`previewtbac${order}`);
                                        var currentInput = document.getElementById(`file-input${order}-tbac`);
                                        var currentLabel = document.querySelector(`label[for=file-input${order}-tbac`);
                                        var currentDeleteButton = document.querySelector(`button[onclick="deleteImagetb(${order})"]`);

                                        currentImg.src = '#';
                                        currentImg.style.display = 'none';
                                        currentInput.value = '';
                                        currentDeleteButton.style.display = 'none';
                                    }
                                </script>
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
                                                <label for="nameBackdrop" class="form-label">MODEL</label>
                                                <input type="text" id="nameBackdrop" class="form-control" placeholder="Enter MODEL">
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                        <div class="col mb-0">
                                                <label for="inpStock" class="form-label">เบิกจาก Stock</label>
                                                <input type="date" id="inpStock" class="form-control">
                                            </div>
                                            <div class="col mb-0">
                                                <label for="inpStockqty" class="form-label">จำนวน</label>
                                                <input type="email" id="inpStockqty" class="form-control" placeholder="xxx">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save</button>
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
                                <tr style="background-color: cornsilk;">
                                    <td>Problem Analysis <span style="color:red">*</span></td>


                                </tr>
                                <tr>
                                    <td>
                                        <div class="row ">
                                            <div class="col-lg-12 area-mr">
                                                <div class="col-lg-4">

                                                    <div>
                                                        <label for="mdetailAnalyz" class="">More Detail</label>
                                                        <textarea class="form-control" id="mdetailAnalyz" rows="4"></textarea>
                                                    </div>





                                                    <div>
                                                        <label for="file-input1-Analyz">Pic 1</label>
                                                        <input type="file" id="file-input1-Analyz" class="file-input form-control" accept="image/*" onchange="previewImageanalyz('file-input1-Analyz', 'preview1', 1)">

                                                        <label for="file-input2-Analyz">Pic 2</label>
                                                        <input type="file" id="file-input2-Analyz" class="file-input form-control" accept="image/*" onchange="previewImageanalyz('file-input2-Analyz', 'preview2', 2)">

                                                        <label for="file-input3-Analyz">Pic 3</label>
                                                        <input type="file" id="file-input3-Analyz" class="file-input form-control" accept="image/*" onchange="previewImageanalyz('file-input3-Analyz', 'preview3', 3)">
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
                                        </div>
                                    </td>

                                </tr>


                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-12 text-center sh-im" style="padding-top: 25px;">
                                                <button onclick="deleteImageanalyz(1)" style="display:none;" class="btn btn-danger new-delete-button">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="preview1" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">

                                                <button onclick="deleteImageanalyz(2)" style="display:none;" class="btn btn-danger new-delete-button">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="preview2" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">

                                                <button onclick="deleteImageanalyz(3)" style="display:none;" class="btn btn-danger new-delete-button">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <img id="preview3" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    function previewImageanalyz(inputId, imgId, order) {
                                        var input = document.getElementById(inputId);
                                        var img = document.getElementById(imgId);
                                        var deleteButton = document.querySelector(`button[onclick="deleteImageanalyz(${order})"]`);
                                        var reader = new FileReader();

                                        reader.onload = function(e) {
                                            img.src = e.target.result;
                                            img.style.display = 'inline-block';
                                            deleteButton.style.display = 'inline-block';
                                        };

                                        if (input.files[0]) {
                                            reader.readAsDataURL(input.files[0]);
                                        }

                                        // เพิ่มลำดับลงใน alt เพื่อให้สามารถจัดเรียงตามลำดับ
                                        img.alt = "Preview " + order;

                                        // ซ่อน label และ input ที่เคยถูกแสดง
                                        for (var i = 1; i <= 3; i++) {
                                            var label = document.querySelector(`label[for=file-input${i}-Analyz]`);
                                            var input = document.getElementById(`file-input${i}-Analyz`);

                                            if (i === order) {

                                            } else {

                                            }
                                        }

                                        // แสดง label และ input ของอันถัดไป (ถ้ามี)
                                        if (order < 3) {
                                            var nextOrder = order + 1;
                                            var nextLabel = document.querySelector(`label[for=file-input${nextOrder}-Analyz]`);
                                            var nextInput = document.getElementById(`file-input${nextOrder}-Analyz`);
                                            nextLabel.style.display = 'inline-block';
                                            nextInput.style.display = 'inline-block';
                                            // ทำให้รูปถัดไปซ่อนเริ่มต้น
                                            var nextImg = document.getElementById(`preview${nextOrder}`);
                                            nextImg.style.display = 'none';
                                        }
                                    }

                                    function deleteImageanalyz(order) {
                                        var currentImg = document.getElementById(`preview${order}`);
                                        var currentInput = document.getElementById(`file-input${order}-Analyz`);
                                        var currentLabel = document.querySelector(`label[for=file-input${order}-Analyz`);
                                        var currentDeleteButton = document.querySelector(`button[onclick="deleteImageanalyz(${order})"]`);

                                        currentImg.src = '#';
                                        currentImg.style.display = 'none';
                                        currentInput.value = '';
                                        currentDeleteButton.style.display = 'none';
                                    }
                                </script>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="navs-pills-top-prevention" role="tabpanel">
                        <p>
                            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
                            bears
                            cake chocolate.
                        </p>
                        <p class="mb-0">
                            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
                            sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
                            jelly.
                        </p>
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
        var firstName, lastName, submit;
        firstName = document.getElementById('firstName');
        lastName = document.getElementById('lastName');
        submit = document.getElementById('submit');
        submit.addEventListener("click", addData);

        function addData() {
            var table = document.getElementById('mytable').getElementsByTagName("tbody")[0];
            if (lastName.value == "" & firstName.value == "") {
                alert("Nothing to add")
                firstName.focus();
            } else {
                var row = table.insertRow(0);
                var col1 = row.insertCell(0);
                var col2 = row.insertCell(1);
                var col3 = row.insertCell(2);
                var col4 = row.insertCell(2);
                var col5 = row.insertCell(2);
                col1.innerHTML = firstName.value;
                col2.innerHTML = lastName.value;
                col3.innerHTML = test.value;
                col3.innerHTML = "<span onclick='deleted(this)'><i class='fa fa-trash'></i></span></td>";
            }
            firstName.value = "";
            lastName.value = "";
            firstName.focus();
        }

        function deleted(r) {
            var result = confirm("Want to delete?");
            if (result) {
                var i = r.parentNode.parentNode.rowIndex;
                document.getElementById("mytable").deleteRow(i);
            }
        }
    </script>
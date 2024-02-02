<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
</style>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">





            <div class="container">
                <h2>Maintenance Worksheet (ใบงานบำรุงรักษา)</h2>
            </div>

            <div id="exTab2" class="container">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#1" data-toggle="tab">Process 1</a>
                    </li>
                    <li><a href="#2" data-toggle="tab">Problem Con</a>
                    </li>
                    <li><a href="#3" data-toggle="tab">Inspection</a>
                    </li>
                    <li><a href="#4" data-toggle="tab">Troubleshooting</a>
                    </li>
                    <li><a href="#5" data-toggle="tab">Required Parts</a>
                    </li>
                    <li><a href="#6" data-toggle="tab">Analyze</a>
                    </li>
                    <li><a href="#7" data-toggle="tab">Prevention</a>
                    </li>
                    <li><a href="#8" data-toggle="tab">Delivery</a>
                    </li>
                </ul>

                <div class="tab-content ">


                    <!-- Process 1 -->

                    <div class="tab-pane active" id="1">
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
                    <!-- End Process 1 -->


                    <!-- Start Problem Con -->

                    <div class="tab-pane" id="2">
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
                                                    <input type="file" id="file-input1-problm" class="file-input form-control" accept="image/*" onchange="previewImage('file-input1-problm', 'previewpb1', 1)">

                                                    <label for="file-input2-problm">Pic 2</label>
                                                    <input type="file" id="file-input2-problm" class="file-input form-control" accept="image/*" onchange="previewImage('file-input2-problm', 'previewpb2', 2)">

                                                    <label for="file-input3-problm">Pic 3</label>
                                                    <input type="file" id="file-input3-problm" class="file-input form-control" accept="image/*" onchange="previewImage('file-input3-problm', 'previewpb3', 3)">

                                                </div>

                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-4 sh-im" style="padding-top: 25px;padding-left: 100px;">
                                                <button onclick="deleteImage(1)" style="display:none;">Delete Pic 1</button>
                                                <img id="previewpb1" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImage(2)" style="display:none;">Delete Pic 2</button>
                                                <img id="previewpb2" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImage(3)" style="display:none;">Delete Pic 3</button>
                                                <img id="previewpb3" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    function previewImage(inputId, imgId, order) {
                                        var input = document.getElementById(inputId);
                                        var img = document.getElementById(imgId);
                                        var deleteButton = document.querySelector(`button[onclick="deleteImage(${order})"]`);
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
                                            var nextImg = document.getElementById(`previewpb${nextOrder}`);
                                            nextImg.style.display = 'none';
                                        }
                                    }

                                    function deleteImage(order) {
                                        for (var i = order; i < 3; i++) {
                                            var currentImg = document.getElementById(`previewpb${i}`);
                                            var nextImg = document.getElementById(`previewpb${i + 1}`);
                                            var currentInput = document.getElementById(`file-input${i}-Analyz`);
                                            var nextInput = document.getElementById(`file-input${i + 1}-Analyz`);
                                            var currentLabel = document.querySelector(`label[for=file-input${i}-Analyz]`);
                                            var nextLabel = document.querySelector(`label[for=file-input${i + 1}-Analyz]`);
                                            var currentDeleteButton = document.querySelector(`button[onclick="deleteImage(${i})"]`);
                                            var nextDeleteButton = document.querySelector(`button[onclick="deleteImage(${i + 1})"]`);

                                            currentImg.src = nextImg.src;
                                            currentInput.value = nextInput.value;
                                            currentLabel.innerHTML = nextLabel.innerHTML;
                                            currentDeleteButton.style.display = nextDeleteButton.style.display;
                                        }

                                        // ลบข้อมูลของรูปที่สุดท้าย
                                        var lastImg = document.getElementById(`previewpb3`);
                                        var lastInput = document.getElementById(`file-input3-Analyz`);
                                        var lastLabel = document.querySelector(`label[for=file-input3-Analyz]`);
                                        var lastDeleteButton = document.querySelector(`button[onclick="deleteImage(3)"]`);

                                        lastImg.src = '#';
                                        lastImg.style.display = 'none';
                                        lastInput.value = '';
                                        lastLabel.style.display = 'none';
                                        lastDeleteButton.style.display = 'none';
                                    }
                                </script>
                            </tbody>
                        </table>

                        <!-- End Problem Con -->

                    </div>
                    <div class="tab-pane" id="3">
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
                                                    <input type="file" id="file-input1-isp" class="file-input form-control" accept="image/*" onchange="previewImage('file-input1-isp', 'previewins1', 1)">

                                                    <label for="file-input2-isp">Pic 2</label>
                                                    <input type="file" id="file-input2-isp" class="file-input form-control" accept="image/*" onchange="previewImage('file-input2-isp', 'previewins2', 2)">

                                                    <label for="file-input3-isp">Pic 3</label>
                                                    <input type="file" id="file-input3-isp" class="file-input form-control" accept="image/*" onchange="previewImage('file-input3-isp', 'previewins3', 3)">

                                                </div>

                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-4 sh-im" style="padding-top: 25px;padding-left: 100px;">
                                                <button onclick="deleteImage(1)" style="display:none;">Delete Pic 1</button>
                                                <img id="previewins1" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImage(2)" style="display:none;">Delete Pic 2</button>
                                                <img id="previewins2" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImage(3)" style="display:none;">Delete Pic 3</button>
                                                <img id="previewins3" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    function previewImage(inputId, imgId, order) {
                                        var input = document.getElementById(inputId);
                                        var img = document.getElementById(imgId);
                                        var deleteButton = document.querySelector(`button[onclick="deleteImage(${order})"]`);
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

                                    function deleteImage(order) {
                                        for (var i = order; i < 3; i++) {
                                            var currentImg = document.getElementById(`previewins${i}`);
                                            var nextImg = document.getElementById(`previewins${i + 1}`);
                                            var currentInput = document.getElementById(`file-input${i}-isp`);
                                            var nextInput = document.getElementById(`file-input${i + 1}-isp`);
                                            var currentLabel = document.querySelector(`label[for=file-input${i}-isp]`);
                                            var nextLabel = document.querySelector(`label[for=file-input${i + 1}-isp]`);
                                            var currentDeleteButton = document.querySelector(`button[onclick="deleteImage(${i})"]`);
                                            var nextDeleteButton = document.querySelector(`button[onclick="deleteImage(${i + 1})"]`);

                                            currentImg.src = nextImg.src;
                                            currentInput.value = nextInput.value;
                                            currentLabel.innerHTML = nextLabel.innerHTML;
                                            currentDeleteButton.style.display = nextDeleteButton.style.display;
                                        }

                                        // ลบข้อมูลของรูปที่สุดท้าย
                                        var lastImg = document.getElementById(`previewins3`);
                                        var lastInput = document.getElementById(`file-input3-isp`);
                                        var lastLabel = document.querySelector(`label[for=file-input3-isp]`);
                                        var lastDeleteButton = document.querySelector(`button[onclick="deleteImage(3)"]`);

                                        lastImg.src = '#';
                                        lastImg.style.display = 'none';
                                        lastInput.value = '';
                                        lastLabel.style.display = 'none';
                                        lastDeleteButton.style.display = 'none';
                                    }
                                </script>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane" id="4">
                        <h3>การแก้ไขปัญหา / การดำเนินการ</h3>


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
                                                    <input type="file" id="file-input1-tbac" class="file-input form-control" accept="image/*" onchange="previewImage('file-input1-tbac', 'previewtbac1', 1)">

                                                    <label for="file-input2-tbac">Pic 2</label>
                                                    <input type="file" id="file-input2-tbac" class="file-input form-control" accept="image/*" onchange="previewImage('file-input2-tbac', 'previewtbac2', 2)">

                                                    <label for="file-input3-tbac">Pic 3</label>
                                                    <input type="file" id="file-input3-tbac" class="file-input form-control" accept="image/*" onchange="previewImage('file-input3-tbac', 'previewtbac3', 3)">

                                                </div>

                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-4 sh-im" style="padding-top: 25px;padding-left: 100px;">
                                                <button onclick="deleteImage(1)" style="display:none;">Delete Pic 1</button>
                                                <img id="previewtbac1" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImage(2)" style="display:none;">Delete Pic 2</button>
                                                <img id="previewtbac2" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImage(3)" style="display:none;">Delete Pic 3</button>
                                                <img id="previewtbac3" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    function previewImage(inputId, imgId, order) {
                                        var input = document.getElementById(inputId);
                                        var img = document.getElementById(imgId);
                                        var deleteButton = document.querySelector(`button[onclick="deleteImage(${order})"]`);
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
                                            var nextImg = document.getElementById(`previewins${nextOrder}`);
                                            nextImg.style.display = 'none';
                                        }
                                    }

                                    function deleteImage(order) {
                                        for (var i = order; i < 3; i++) {
                                            var currentImg = document.getElementById(`previewins${i}`);
                                            var nextImg = document.getElementById(`previewins${i + 1}`);
                                            var currentInput = document.getElementById(`file-input${i}-tbac`);
                                            var nextInput = document.getElementById(`file-input${i + 1}-tbac`);
                                            var currentLabel = document.querySelector(`label[for=file-input${i}-tbac]`);
                                            var nextLabel = document.querySelector(`label[for=file-input${i + 1}-tbac]`);
                                            var currentDeleteButton = document.querySelector(`button[onclick="deleteImage(${i})"]`);
                                            var nextDeleteButton = document.querySelector(`button[onclick="deleteImage(${i + 1})"]`);

                                            currentImg.src = nextImg.src;
                                            currentInput.value = nextInput.value;
                                            currentLabel.innerHTML = nextLabel.innerHTML;
                                            currentDeleteButton.style.display = nextDeleteButton.style.display;
                                        }

                                        // ลบข้อมูลของรูปที่สุดท้าย
                                        var lastImg = document.getElementById(`previewins3`);
                                        var lastInput = document.getElementById(`file-input3-tbac`);
                                        var lastLabel = document.querySelector(`label[for=file-input3-tbac]`);
                                        var lastDeleteButton = document.querySelector(`button[onclick="deleteImage(3)"]`);

                                        lastImg.src = '#';
                                        lastImg.style.display = 'none';
                                        lastInput.value = '';
                                        lastLabel.style.display = 'none';
                                        lastDeleteButton.style.display = 'none';
                                    }
                                </script>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="5">
                        <h3>รายงาน ชิ้นส่วนที่ต้องใช้ (ทดแทน ติดตั้ง ปรับปรุง)</h3>




                        <div class="container" id="container1">
                            <div class="col-12">
                                <div class="card mb-6">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h4>No.1</h4>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="name1">Name</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="name1">
                                                </div>
                                            </div>

                                            <!-- เปลี่ยน ID ที่ซ้ำกันในฟอร์มทั้งหมด -->

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="maker1">MAKER</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="maker1">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="model1">MODEL</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="model1" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="quantity1">จำนวน</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="quantity1" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="quantity1">
                                                    <div class="form-text">You can use letters, numbers &amp; periods</div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="stockDate1">เบิกจาก STOCK</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" type="date" value="" id="stockDate1">
                                                    <br>
                                                    <input type="text" id="stockQuantity1" class="form-control" placeholder="จำนวนเบิกจาก Stock">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="orderDate1">สั่งซื้อ / เรียกเข้า</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" type="date" value="" id="orderDate1">
                                                    <br>
                                                    <input type="text" id="orderQuantity1" class="form-control" placeholder="จำนวนเบิกจาก สั่งซื้อ / เรียกเข้า">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="receivedDate1">ได้รับของ / เข้าซ่อม</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" type="date" value="" id="receivedDate1">
                                                    <br>
                                                    <input type="text" id="receivedQuantity1" class="form-control" placeholder="จำนวนเบิกจาก ได้รับของ / เข้าซ่อม">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls" onclick="addNewForm()">
                                <i class="glyphicon glyphicon-plus-sign"></i>&nbsp; Add&nbsp;
                            </button>
                        </div>

                        <script>
                            var containerCounter = 2; // เริ่มต้นที่ 1

                            function addNewForm() {
                                if (containerCounter <= 5) { // ไม่เพิ่มเกิน 5 ฟอร์ม
                                    var newContainer = document.createElement("div");
                                    newContainer.className = "container";
                                    newContainer.id = "container" + containerCounter;

                                    newContainer.innerHTML = `
                <div class="col-xxl">
                    <div class="card mb-12">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4>No.${containerCounter}</h4>
                            <button type="button" class="btn btn-danger" onclick="removeForm(${containerCounter})">Delete</button>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="name${containerCounter}">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="name${containerCounter}">
                                    </div>
                                </div>
                                <!-- เปลี่ยน ID ที่ซ้ำกันในฟอร์มทั้งหมด -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="maker${containerCounter}">MAKER</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="maker${containerCounter}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="model${containerCounter}">MODEL</label>
                                    <div class="col-md-6">
                                        <input type="text" id="model${containerCounter}" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="quantity${containerCounter}">จำนวน</label>
                                    <div class="col-md-6">
                                        <input type="text" id="quantity${containerCounter}" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="quantity${containerCounter}">
                                        <div class="form-text">You can use letters, numbers &amp; periods</div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="stockDate${containerCounter}">เบิกจาก STOCK</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" value="" id="stockDate${containerCounter}">
                                        <br>
                                        <input type="text" id="stockQuantity${containerCounter}" class="form-control" placeholder="จำนวนเบิกจาก Stock">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="orderDate${containerCounter}">สั่งซื้อ / เรียกเข้า</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" value="" id="orderDate${containerCounter}">
                                        <br>
                                        <input type="text" id="orderQuantity${containerCounter}" class="form-control" placeholder="จำนวนเบิกจาก สั่งซื้อ / เรียกเข้า">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="receivedDate${containerCounter}">ได้รับของ / เข้าซ่อม</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" value="" id="receivedDate${containerCounter}">
                                        <br>
                                        <input type="text" id="receivedQuantity${containerCounter}" class="form-control" placeholder="จำนวนเบิกจาก ได้รับของ / เข้าซ่อม">
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            `;

                                    var existingContainer = document.getElementById("container1");
                                    existingContainer.appendChild(newContainer);

                                    containerCounter++;
                                } else {
                                    alert("ไม่สามารถเพิ่มฟอร์มเพิ่มได้เกิน 5 ฟอร์ม");
                                }
                            }

                            function removeForm(containerId) {
                                var containerToRemove = document.getElementById("container" + containerId);
                                containerToRemove.remove();

                                containerCounter--;
                            }
                        </script>







                    </div>
                    <div class="tab-pane" id="6">
                        <h3>การวิเคราะห์สาเหตุของปัญหา</h3>
                        <table border="1" class="table">
                            <tbody>
                                <tr style="background-color: cornsilk;">
                                    <td>Inspection Method <span style="color:red">*</span></td>


                                </tr>
                                <tr>
                                    <td>
                                        <div class="row ">
                                            <div class="col-lg-12 area-mr">

                                                <div class="col-lg-12">

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
                                                    <div class="form-check mt-3" style="margin-left: 30px;">
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
                                        <div id="col-lg-12" class="col-lg-12 sh-im">
                                            <div>
                                                <label for="mdetailAnalyz" class="">More Detail</label>
                                                <textarea class="form-control" id="mdetailAnalyz" rows="4"></textarea>

                                                <label for="file-input1-Analyz">Pic 1</label>
                                                <input type="file" id="file-input1-Analyz" class="file-input form-control" accept="image/*" onchange="previewImage('file-input1-Analyz', 'previewAnalyz1', 1)">

                                                <label for="file-input2-Analyz">Pic 2</label>
                                                <input type="file" id="file-input2-Analyz" class="file-input form-control" accept="image/*" onchange="previewImage('file-input2-Analyz', 'previewAnalyz2', 2)">

                                                <label for="file-input3-Analyz">Pic 3</label>
                                                <input type="file" id="file-input3-Analyz" class="file-input form-control" accept="image/*" onchange="previewImage('file-input3-Analyz', 'previewAnalyz3', 3)">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 sh-im" style="padding-top: 25px;padding-left: 100px;">
                                                <button onclick="deleteImage(1)" style="display:none;">Delete Pic 1</button>
                                                <img id="previewAnalyz1" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImage(2)" style="display:none;">Delete Pic 2</button>
                                                <img id="previewAnalyz2" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                                <button onclick="deleteImage(3)" style="display:none;">Delete Pic 3</button>
                                                <img id="previewAnalyz3" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    function previewImage(inputId, imgId, order) {
                                        var input = document.getElementById(inputId);
                                        var img = document.getElementById(imgId);
                                        var deleteButton = document.querySelector(`button[onclick="deleteImage(${order})"]`);
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
                                            var nextImg = document.getElementById(`previewAnalyz${nextOrder}`);
                                            nextImg.style.display = 'none';
                                        }
                                    }

                                    function deleteImage(order) {
                                        for (var i = order; i < 3; i++) {
                                            var currentImg = document.getElementById(`previewAnalyz${i}`);
                                            var nextImg = document.getElementById(`previewAnalyz${i + 1}`);
                                            var currentInput = document.getElementById(`file-input${i}-Analyz`);
                                            var nextInput = document.getElementById(`file-input${i + 1}-Analyz`);
                                            var currentLabel = document.querySelector(`label[for=file-input${i}-Analyz]`);
                                            var nextLabel = document.querySelector(`label[for=file-input${i + 1}-Analyz]`);
                                            var currentDeleteButton = document.querySelector(`button[onclick="deleteImage(${i})"]`);
                                            var nextDeleteButton = document.querySelector(`button[onclick="deleteImage(${i + 1})"]`);

                                            currentImg.src = nextImg.src;
                                            currentInput.value = nextInput.value;
                                            currentLabel.innerHTML = nextLabel.innerHTML;
                                            currentDeleteButton.style.display = nextDeleteButton.style.display;
                                        }

                                        // ลบข้อมูลของรูปที่สุดท้าย
                                        var lastImg = document.getElementById(`previewAnalyz3`);
                                        var lastInput = document.getElementById(`file-input3-Analyz`);
                                        var lastLabel = document.querySelector(`label[for=file-input3-Analyz]`);
                                        var lastDeleteButton = document.querySelector(`button[onclick="deleteImage(3)"]`);

                                        lastImg.src = '#';
                                        lastImg.style.display = 'none';
                                        lastInput.value = '';
                                        lastLabel.style.display = 'none';
                                        lastDeleteButton.style.display = 'none';
                                    }
                                </script>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="7">
                        <h3>การป้องกันการเกิดซ้ำ</h3>
                    </div>
                    <div class="tab-pane" id="8">
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



                        <!-- ปุ่มนอก -->
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-secondary">Reset</button>
                            <button type="button" class="btn btn-success ml-2" id="btnSave">Save</button>
                        </div>


                    </div>
                </div>

                <hr>
                </hr>


                <!-- Bootstrap core JavaScript
    ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->





            </div>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
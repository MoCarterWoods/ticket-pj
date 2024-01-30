<style>
    @charset "UTF-8";

    html * {
        box-sizing: border-box;
    }

    p {
        margin: 0;
    }

    .upload__box {
        padding: 40px;
    }

    .upload__inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .upload__btn {
        display: inline-block;
        font-weight: 600;
        color: #fff;
        text-align: center;
        min-width: 116px;
        padding: 5px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid;
        background-color: #4045ba;
        border-color: #4045ba;
        border-radius: 10px;
        line-height: 26px;
        font-size: 14px;
    }

    .upload__btn:hover {
        background-color: unset;
        color: #4045ba;
        transition: all 0.3s ease;
    }

    .upload__btn-box {
        margin-bottom: 10px;
    }

    .upload__img-wrap {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
    }

    .upload__img-box {
        width: 200px;
        padding: 0 10px;
        margin-bottom: 12px;
    }

    .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
    }

    .upload__img-close:after {
        content: "✖";
        font-size: 14px;
        color: white;
    }

    .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        padding-bottom: 100%;
    }

    .auto-style1 {
        height: 50px;
        width: 235px;

    }

    .img-logo {
        height: 105px;
        width: 175px;
        margin-bottom: -30px;
        margin-left: 40px;

    }

    .p-1 {
        margin-bottom: 0px;
        margin-left: 50px;
    }

    .h3-top {
        margin-bottom: 0px;
    }

    .div-h3 {
        margin-top: 30px;
    }

    .ch-left-mr {
        margin-left: 20px;
    }

    .form-a {
        width: 80%;
        padding: 0.4375rem 0.875rem;
        font-size: 0.9375rem;
        font-weight: 400;
        line-height: 1.53;
        color: #697a8d;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #d9dee3;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.375rem;
    }

    .col-lg-4-a label {
        font-size: 18px;
        font-weight: bold;
    }

    .pd-line-sel {
        margin-left: 50px;
        margin-right: -13px;
        margin-top: 10px;
    }

    .other-sel {
        margin: auto;
        margin-top: 15px;
    }

    .area-mr {
        margin-left: 15px;
        margin-right: -15px;

    }

    .tool-mr {
        margin-left: -15px;
    }

    #image-preview1 {
        max-width: 100%;
        max-height: 100%;
    }

    #image-preview2 {
        max-width: 70%;
        max-height: 70%;
    }

    #image-preview3 {
        max-width: 100%;
        max-height: 100%;
    }

    .col-pro-f {
        padding: 30px;
        margin-top: -25px;
    }

    .sh-im {
        padding: 65px;
        margin-left: -40px;
        margin-top: -50px;
    }
</style>


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">


            <div class="row align-items-center ">
                <div class="col-lg-4">

                    <div class="row">
                        <img class="img-logo" id="ContentPlaceHolder1_Image1" src="<?php echo base_url() ?>/assets/img/elements/tbklogo.png">
                    </div>

                    <div class="row">
                        <p class="p-1">บริษัท ทีบีเคเค (ประเทศไทย) จำกัด</p>
                        <p class="p-1">TBKK (THAILAND) CO., LTD.</p>
                    </div>

                </div>

                <div class="col-lg text-center div-h3" style="margin-left: -190px;">
                    <div style="display: inline-block;">
                        <p class="fs-3 fw-bold h3-top">MAINTENANCE WORKSHEET</p>
                        <p class="fs-3 fw-bold h3-top">ใบงานบำรุงรักษา</p>
                    </div>
                </div>


            </div>
            <hr style="border: 1px solid #ccc; margin: 20px 0; ">



            <div class="row ">
                <div class="col-lg-4 area-mr">

                    <div class="row ">
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Area</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option value="">Choose...</option>
                                <option value="1">Product Area</option>
                                <option value="2">Other</option>
                            </select>
                        </div>
                    </div>

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

                </div>


                <div class="col-lg-4 col-pro-f">
                    <div>
                        <label for="processf" class="">Process / Function</label><span class="red-text">*</span>
                        <textarea class="form-control" id="processf" rows="2"></textarea>


                    </div>

                    <div>
                        <label for="SelJobtype">Job Type<span class="red-text">*</span>
                            <select class="form-select" id="SelJobtype">
                                <option value="">Choose...</option>

                            </select>
                        </label>
                    </div>

                </div>




                <div class="col-lg-4 tool-mr">
                    <div class="row ">
                        <div>
                            <label for="SelTool">Tooling System<span class="red-text">*</span>
                                <select class="form-select" id="SelTool">
                                    <option value="">Choose...</option>

                                </select>
                            </label>
                        </div>
                        <div class="row" style="    margin-left: -10px;margin-top: -10px;padding: 25px;">
                            <label for="addMaker" class="form">Maker/Brand</label>
                            <input type="text" id="addMaker" class="form-control" value="" readonly>


                            <label for="addModel" class="form">Model</label>
                            <input type="text" id="addModel" class="form-control" value="" readonly>
                        </div>

                    </div>
                </div>






            </div>
            <!-- -------------End------------ -->


        </div>
    </div>
</div>


<!--------------------------------------------------------------- Problem Condition ------------------------------------------------------------------------- -->

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y" style="
margin-top: -45px;">
        <div class="card">


            <!-- ----------------------------- -->
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

                    <div>
                        <label for="file-input1-problm">Pic 1</label>
                        <input type="file" id="file-input1-problm" class="file-input form-control" accept="image/*" onchange="previewImage('file-input1-problm', 'preview1', 1)">

                        <label for="file-input2-problm">Pic 2</label>
                        <input type="file" id="file-input2-problm" class="file-input form-control" accept="image/*" onchange="previewImage('file-input2-problm', 'preview2', 2)">

                        <label for="file-input3-problm">Pic 3</label>
                        <input type="file" id="file-input3-problm" class="file-input form-control" accept="image/*" onchange="previewImage('file-input3-problm', 'preview3', 3)">

                    </div>

                </div>


                <div id="col-lg-8" class="col-lg-8 sh-im">
                    <div id="upload-box1" class="upload__box">
                        <div id="upload-btn-box1" class="upload__btn-box">
                            <label id="upload-btn1" class="upload__btn">
                                <p>Upload images</p>
                                <input type="file" multiple="" accept="image/*" data-max_length="3" class="upload__inputfile">
                            </label>
                        </div>
                        <div id="upload-img-wrap1" class="upload__img-wrap"></div>
                    </div>





                </div>




                <!-- --------------------------------------- -->




            </div>

        </div>
    </div>




    <!--------------------------------------------------------------- Inspec Method ------------------------------------------------------------------------- -->

    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y" style="
margin-top: -45px;">
            <div class="card">


                <!-- ----------------------------- -->
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

                        <div>
                            <label for="file-input1-isp">Pic 1</label>
                            <input type="file" id="file-input1-isp" class="file-input form-control" accept="image/*" onchange="previewImage('file-input1-isp', 'preview1', 1)">

                            <label for="file-input2-isp">Pic 2</label>
                            <input type="file" id="file-input2-isp" class="file-input form-control" accept="image/*" onchange="previewImage('file-input2-isp', 'preview2', 2)">

                            <label for="file-input3-isp">Pic 3</label>
                            <input type="file" id="file-input3-isp" class="file-input form-control" accept="image/*" onchange="previewImage('file-input3-isp', 'preview3', 3)">

                        </div>

                    </div>


                    <div id="col-lg-8" class="col-lg-8 sh-im">
                        <div id="upload-box2" class="upload__box">
                            <div id="upload-btn-box2" class="upload__btn-box">
                                <label id="upload-btn2" class="upload__btn">
                                    <p>Upload images</p>
                                    <input type="file" multiple="" accept="image/*" data-max_length="3" class="upload__inputfile">
                                </label>
                            </div>
                            <div id="upload-img-wrap2" class="upload__img-wrap"></div>
                        </div>
                    </div>






                </div>
                <!-- --------------------------------------- -->




            </div>

        </div>
    </div>


    <!--------------------------------------------------------------- new col------------------------------------------------------------------------- -->

    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y" style="
margin-top: -45px;">
            <div class="card">


                <!-- ----------------------------- -->
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
                        <div id="upload-box3" class="upload__box">
                            <div id="upload-btn-box3" class="upload__btn-box">
                                <label id="upload-btn3" class="upload__btn">
                                    <p>Upload images</p>
                                    <input type="file" multiple="" accept="image/*" data-max_length="3" class="upload__inputfile">
                                </label>
                            </div>
                            <div id="upload-img-wrap3" class="upload__img-wrap"></div>

                        </div>
                    </div>


                    <div class="col-lg-3 sh-im">
                        putenv
                    </div>
                    <div class="col-lg-5 sh-im">

                        <div>
                            <label for="file-input1-tbac">Pic 1</label>
                            <input type="file" id="file-input1-tbac" class="file-input form-control" accept="image/*">

                            <label for="file-input2-tbac">Pic 2</label>
                            <input type="file" id="file-input2-tbac" class="file-input form-control" accept="image/*">

                            <label for="file-input3-tbac">Pic 3</label>
                            <input type="file" id="file-input3-tbac" class="file-input form-control" accept="image/*">

                        </div>
                    </div>

                </div>
                <!-- --------------------------------------- -->




            </div>

        </div>
    </div>



    <!-- --------------------------------------------- รายการ ชิ้นส่วนที่ต้องใช้(ทดแทน ติดตั้ง ปรับปรุง) ----------------------------------------------------- -->


    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y" style="margin-top: -45px;">
            <div class="card">

                <script src="https://code.jquery.com/jquery-latest.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <p>&nbsp;</p>
                <h5 class="text-center">รายการ ชิ้นส่วนที่ต้องใช้(ทดแทน ติดตั้ง ปรับปรุง)</h5>
                <section class="container">
                    <div class="table table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Maker</th>
                                    <th>Model</th>
                                    <th>จำนวน</th>
                                    <th>เบิกจาก Stock</th>
                                    <th></th>
                                    <th>สั่งซื้อ / เรียกเข้า</th>
                                    <th></th>
                                    <th>ได้รับของ / เข้าซ่อม</th>
                                    <th></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="TextBoxContainer">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="12">
                                        <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;
                                            Add&nbsp;</button>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </section>


            </div>

        </div>
    </div>
    <script>
    $(function () {
        var maxItems = 5;

        $("#btnAdd").bind("click", function () {
            if ($("#TextBoxContainer tr").length < maxItems) {
                var rowCount = $("#TextBoxContainer tr").length;
                var div = GetDynamicTextBox(rowCount + 1);
                $("#TextBoxContainer").append(div);
            } else {
                alert("Cannot add more than " + maxItems + " items");
            }
        });

        $("body").on("click", ".remove", function () {
            $(this).closest("tr").remove();
            updateRowNumbers();
        });
    });

    function updateRowNumbers() {
        $("#TextBoxContainer tr").each(function (index) {
            $(this).find("td:first").html('<i></i> <strong>' + (index + 1) + '</strong>');
            // ดึงค่าของ ID ของแต่ละ input
            var idPrefix = $(this).find("td:eq(1) input").attr("id").split("-")[0];
            // อัพเดท ID ของแต่ละ input
            $(this).find("td:eq(1) input").attr("id", idPrefix + "-name-input-" + (index + 1));
            $(this).find("td:eq(2) input").attr("id", idPrefix + "-maker-input-" + (index + 1));
            $(this).find("td:eq(3) input").attr("id", idPrefix + "-model-input-" + (index + 1));
            $(this).find("td:eq(4) input").attr("id", idPrefix + "-qty-input-" + (index + 1));
            $(this).find("td:eq(5) input").attr("id", idPrefix + "-stock-date-input-" + (index + 1));
            $(this).find("td:eq(6) input").attr("id", idPrefix + "-stock-input-" + (index + 1));
            $(this).find("td:eq(7) input").attr("id", idPrefix + "-input-date-input-" + (index + 1));
            $(this).find("td:eq(8) input").attr("id", idPrefix + "-input-input-" + (index + 1));
            $(this).find("td:eq(9) input").attr("id", idPrefix + "-mainten-date-input-" + (index + 1));
            $(this).find("td:eq(10) input").attr("id", idPrefix + "-mainten-input-" + (index + 1));
        });
    }

    function GetDynamicTextBox(rowNumber) {
        return '<tr>' +
            '<td class="text-center"><i></i> <strong>' + rowNumber + '</strong></td>' +
            '<td><input type="text" value="" id="name-input-' + rowNumber + '" class="form-control" /></td>' +
            '<td><input type="text" value="" id="maker-input-' + rowNumber + '" class="form-control" /></td>' +
            '<td><input type="text" value="" id="model-input-' + rowNumber + '" class="form-control" /></td>' +
            '<td><input type="text" value="" id="qty-input-' + rowNumber + '" class="form-control" /></td>' +
            '<td><input class="form-control" type="date" value="" id="stock-date-input-' + rowNumber + '"></td>' +
            '<td><input type="text" value="" id="stock-input-' + rowNumber + '" class="form-control" /></td>' +
            '<td><input class="form-control" type="date" value="" id="input-date-input-' + rowNumber + '"></td>' +
            '<td><input type="text" value="" id="input-input-' + rowNumber + '" class="form-control" /></td>' +
            '<td><input class="form-control" type="date" value="" id="mainten-date-input-' + rowNumber + '"></td>' +
            '<td><input type="text" value="" id="mainten-input-' + rowNumber + '" class="form-control" /></td>' +
            '<td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td>' +
            '</tr>';
    }
</script>




    <!--------------------------------------------------------------- วิเคราะสาเหตุของปัญหา ------------------------------------------------------------------------- -->

    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y" style="margin-top: -45px;">
            <div class="card">

                <div class="row ">
                    <div class="col-lg-4 area-mr">

                        <div>
                            <label for="mdetailAnalyz" class="">More Detail</label>
                            <textarea class="form-control" id="mdetailAnalyz" rows="4"></textarea>
                        </div>



                        <div>
                            <label for="file-input1-Analyz">Pic 1</label>
                            <input type="file" id="file-input1-Analyz" class="file-input form-control" accept="image/*" onchange="previewImage('file-input1-Analyz', 'preview1', 1)">

                            <label for="file-input2-Analyz">Pic 2</label>
                            <input type="file" id="file-input2-Analyz" class="file-input form-control" accept="image/*" onchange="previewImage('file-input2-Analyz', 'preview2', 2)">

                            <label for="file-input3-Analyz">Pic 3</label>
                            <input type="file" id="file-input3-Analyz" class="file-input form-control" accept="image/*" onchange="previewImage('file-input3-Analyz', 'preview3', 3)">

                        </div>

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
                                    var nextImg = document.getElementById(`preview${nextOrder}`);
                                    nextImg.style.display = 'none';
                                }
                            }

                            function deleteImage(order) {
                                for (var i = order; i < 3; i++) {
                                    var currentImg = document.getElementById(`preview${i}`);
                                    var nextImg = document.getElementById(`preview${i + 1}`);
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
                                var lastImg = document.getElementById(`preview3`);
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








                    </div>


                    <div class="col-lg-4 sh-im" style="padding-top: 25px;padding-left: 100px;">
                        <div id="upload-box4" class="upload__box">
                            <div id="upload-btn-box4" class="upload__btn-box">
                                <label id="upload-btn4" class="upload__btn">
                                    <p>Upload images</p>
                                    <input type="file" multiple="" accept="image/*" data-max_length="3" class="upload__inputfile">
                                </label>
                            </div>
                            <div id="upload-img-wrap4" class="upload__img-wrap"></div>

                        </div>
                        <button onclick="deleteImage(1)" style="display:none;">Delete Pic 1</button>
                        <img id="preview1" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                        <button onclick="deleteImage(2)" style="display:none;">Delete Pic 2</button>
                        <img id="preview2" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                        <button onclick="deleteImage(3)" style="display:none;">Delete Pic 3</button>
                        <img id="preview3" src="#" alt="Preview" style="display:none; width: 180px; height: 180px;">
                    </div>


                    <div class="col-lg-3">

                        <div class="form-check mt-3">
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




            <!-- -------------------------------------------- การส่งมอบอุปกรณ์ / เครื่องจักร ---------------------------------------  -->

            <div class="row" style="margin-top: 15px;">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">การส่งมอบอุปกรณ์ / เครื่องจักร</h5>
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







                <div class="col-md-6">
                    <!-- สรุปงานซ่อมบำรุง -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <h5 class="card-header">สรุปงานซ่อมบำรุง</h5>
                                <div class="card-body demo-vertical-spacing demo-only-element">

                                    <div class="mb-3 row">
                                        <label for="text-input" class="col-md-5 col-form-label" style="font-size: 16px;">ระยะเวลารอชิ้นส่วน</label>
                                        <div class="col-md-5">
                                            <input class="form-control text-center" type="text" value="" id="SumWait" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="text-input" class="col-md-5 col-form-label" style="font-size: 16px;">ระยะเวลาในการบำรุงรักษา</label>
                                        <div class="col-md-5">
                                            <input class="form-control text-center" type="text" value="" id="SumRepair" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="text-input" class="col-md-5 col-form-label" style="font-size: 16px;">เวลาเริ่มต้นการผลิต</label>
                                        <div class="col-md-5">
                                            <input class="form-control text-center" type="text" value="" id="SumStart" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="text-input" class="col-md-5 col-form-label" style="font-size: 16px;">รวมระยะเวลา Breakdown</label>
                                        <div class="col-md-5">
                                            <input class="form-control text-center" type="text" value="" id="SumBreak" readonly>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



            <!-- ปุ่มนอก -->

            <button type="button" class="btn btn-outline-secondary">Reset</button>
            <button type="button" class="btn btn-success" id="btnSave">Save</button>
        </div>














    </div>
</div>
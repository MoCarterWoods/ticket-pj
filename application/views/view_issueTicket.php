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

                <div class="col-lg text-center div-h3">
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
                                <option value="pdarea">Product Area</option>
                                <option value="other">Other</option>
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
                        <label for="processf" class="">Process / Function</label>
                        <textarea class="form-control" id="processf" rows="2"></textarea>


                    </div>

                    <div>
                        <label for="SelJobtype">Job Type
                            <select class="form-select" id="SelJobtype">
                                <option value="">Choose...</option>

                            </select>
                        </label>
                    </div>

                </div>




                <div class="col-lg-4 tool-mr">
                    <div class="row ">
                        <div>
                            <label for="SelTool">Tooling System
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
                        <label for="SelProblem">Problem Condition
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


                <div class="col-lg-8 sh-im">
                    <div class="upload__box">
                        <div class="upload__btn-box">
                            <label class="upload__btn">
                                <p>Upload images</p>
                                <input type="file" multiple="" accept="image/*" data-max_length="3" class="upload__inputfile">
                            </label>
                        </div>
                        <div class="upload__img-wrap"></div>
                    </div>


                    <div>
                        <label for="file-input1-problm">Pic 1</label>
                        <input type="file" id="file-input1-problm" class="file-input form-control" accept="image/*">

                        <label for="file-input2-problm">Pic 2</label>
                        <input type="file" id="file-input2-problm" class="file-input form-control" accept="image/*">

                        <label for="file-input3-problm">Pic 3</label>
                        <input type="file" id="file-input3-problm" class="file-input form-control" accept="image/*">

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
                            <label for="SelInspec">Inspection Method
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


                    <div class="col-lg-3 sh-im">
                        <div>
                            <label for="file-input1-isp">Pic 1</label>
                            <input type="file" id="file-input1-isp" class="file-input form-control" accept="image/*">

                            <label for="file-input2-isp">Pic 2</label>
                            <input type="file" id="file-input2-isp" class="file-input form-control" accept="image/*">

                            <label for="file-input3-isp">Pic 3</label>
                            <input type="file" id="file-input3-isp" class="file-input form-control" accept="image/*">

                        </div>

                    </div>
                    <div class="col-lg-5 sh-im">
                        <div>
                            <img id="image-preview1" class="preview" src="#" alt="Image Preview 1"><br>
                            <img id="image-preview2" class="preview" src="#" alt="Image Preview 2"><br>
                            <img id="image-preview3" class="preview" src="#" alt="Image Preview 3">

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
                            <label for="SelTbAc">Troubleshooting/Action
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


                    <div class="col-lg-3 sh-im">
                        <div>
                            <label for="file-input1-tbac">Pic 1</label>
                            <input type="file" id="file-input1-tbac" class="file-input form-control" accept="image/*">

                            <label for="file-input2-tbac">Pic 2</label>
                            <input type="file" id="file-input2-tbac" class="file-input form-control" accept="image/*">

                            <label for="file-input3-tbac">Pic 3</label>
                            <input type="file" id="file-input3-tbac" class="file-input form-control" accept="image/*">

                        </div>

                    </div>
                    <div class="col-lg-5 sh-im">
                        <div>
                            <img id="image-preview1" class="preview" src="#" alt="Image Preview 1"><br>
                            <img id="image-preview2" class="preview" src="#" alt="Image Preview 2"><br>
                            <img id="image-preview3" class="preview" src="#" alt="Image Preview 3">

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
        <div class="container-xxl flex-grow-1 container-p-y" style="margin-top: -45px;">
            <div class="card">

            <div class="row ">
                <div class="col-lg-4 area-mr">

                    <div class="row ">
                        <label for="SelAnalyz">การวิเคราะสาเหตุของปัญหา
                            <select class="form-select" id="SelAnalyz">
                                <option value="">Choose...</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label for="mdetailAnalyz" class="">More Detail</label>
                        <textarea class="form-control" id="mdetailAnalyz" rows="4"></textarea>
                    </div>

                    <div>
                        <label for="file-input1-Analyz">Pic 1</label>
                        <input type="file" id="file-input1-Analyz" class="file-input form-control" accept="image/*">

                        <label for="file-input2-Analyz">Pic 2</label>
                        <input type="file" id="file-input2-Analyz" class="file-input form-control" accept="image/*">

                        <label for="file-input3-Analyz">Pic 3</label>
                        <input type="file" id="file-input3-Analyz" class="file-input form-control" accept="image/*">

                    </div>
                </div>


                <div class="col-lg-3 sh-im">

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
                            <label class="form-check-label" for="Check11"> อื่นๆ </label><span class="additional-info"> (รายละเอียดเพิ่มเติม)</span>
                        </div>

                        </div>
                        </div>



                </div>
                <button type="button" class="btn btn-outline-secondary">Reset</button>
                <button type="button" class="btn btn-success" id="btnSave">Success</button>
            </div>



                
            </div>
        </div>
    


















                    
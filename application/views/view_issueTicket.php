<style>
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

    #image-preview {
        max-width: 100%;
        max-height: 300px;
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

                <div class="col">
                    <p>Jod No. <input name="sub" type="text" value="Auto Generate" id="datesub" disabled="disabled" class="text-center" autocomplete style="width:150px;"></p>
                    <p>Date : <input name="datesub" type="text" value="" id="ContentPlaceHolder1_txtDateSubject" disabled="disabled" class="text-center" autocomplete style="width:150px;"></p>

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
                                <option value="1">Product Area</option>
                                <option value="2">Other Area</option>
                            </select></label>
                    </div>


                    <div class="row other-sel" style="display: none;" id="selother">
                        <label for="textother" class="form-label">Other</label>
                        <textarea class="form-control" id="textother" rows="3"></textarea>
                    </div>

                </div>


                <div class="col-lg-4">
                    <div>
                        <label for="processf" class="">Process / Function</label>
                        <textarea class="form-control" id="processf" rows="2"></textarea>

                        <div>
                            <label for="inputGroupSelect01">Tooling System
                                <select class="form-select" id="inputGroupSelect01">
                                    <option value="">Choose...</option>
                                    <option value="pdarea">Product Area</option>
                                    <option value="other">Other</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <div class="row" style="margin-left: 25px;margin-right: 40px;">
                        <label for="addMenuPart" class="form">Maker/Brand</label>
                        <input type="text" id="addMenuPart" class="form-control" value="Woods1" readonly>


                        <label for="addMenuPart" class="form">Model</label>
                        <input type="text" id="addMenuPart" class="form-control" value="Woods2" readonly>
                    </div>

                </div>




                <div class="col-lg-4 tool-mr">
                    <div class="row ">
                        <div style="margin-left: 20px;">
                            <label class="">Job Type</label>
                            <div class="form-check mt-3">
                                <input name="default-radio-1" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"> ซ่อมแซม [BM] Breakdown Maintenance</label>
                            </div>
                            <div class="form-check mt-3">
                                <input name="default-radio-1" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-label" for="defaultRadio2"> บำรุงรักษาตามแผน [PM] Planned Maintenance</label>
                            </div>
                            <div class="form-check mt-3">
                                <input name="default-radio-1" class="form-check-input" type="radio" value="3" id="defaultRadio3">
                                <label class="form-check-label" for="defaultRadio3"> ปรับปรุง [KM] Kaizen / Improvement</label>
                            </div>
                            <div class="form-check mt-3">
                                <input name="default-radio-1" class="form-check-input" type="radio" value="4" id="defaultRadio4">
                                <label class="form-check-label" for="defaultRadio4"> ติดตั้ง [IM] Installation / Set Up</label>
                            </div>
                        </div>

                    </div>
                </div>






            </div>
            <hr>

            <!-- ----------------------------- -->
            <div class="row ">
                <div class="col-lg-3 area-mr">

                    <div class="row ">
                        <label for="SelProblem">Problem Condition
                            <select class="form-select" id="SelProblem">
                                <option value="">Choose...</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label for="processf" class="form-label">Process / Function</label>
                        <textarea class="form-control" id="processf" rows="4"></textarea>
                    </div>

                </div>


                <div class="col-lg-3">
                    <div>
                    <input type="file" id="file-input1" class="file-input" accept="image/*">
                        <br>
                        <img id="image-preview1" class="preview" src="#" alt="Image Preview 1">
                    </div>

                </div>
                <div class="col-lg-3">
                    <div>
                    <input type="file" id="file-input2" class="file-input" accept="image/*">
                        <br>
                        <img id="image-preview2" class="preview" src="#" alt="Image Preview 2">
                    </div>

                </div>
                <div class="col-lg-3">
                    <div>
                    <input type="file" id="file-input3" class="file-input" accept="image/*">
            <br>
            <img id="image-preview3" class="preview" src="#" alt="Image Preview 3">
                    </div>

                </div>




            </div>
            <!-- --------------------------------------- -->






            <div class="col-lg-4 ">
                <p>ประเภทงาน</p>
                <div>
                    <input id="" type="checkbox" name="">
                    <label for="">การออกแบบ</label>
                </div>
                <div>
                    <input id="" type="checkbox" name="">
                    <label for="">การติดตั้ง / ชิ้นส่วน</label>
                </div>
                <div>
                    <input id="" type="checkbox" name="">
                    <label for="">การดัดแปลง / ซ่อมแซม</label>
                </div>
                <div>
                    <input id="" type="checkbox" name="">
                    <label for="">การใช้งาน / ผิดวิธี</label>
                </div>
                <div>
                    <input id="" type="checkbox" name="">
                    <label for="">การบำรุงรักษาเบื้องต้น</label>
                </div>
                <div class="ch-left-mr">
                    <input id="" type="checkbox" name="">
                    <label for="">การขันยึดแน่น</label>
                </div>
                <div class="ch-left-mr">
                    <input id="" type="checkbox" name="">
                    <label for="">การหล่อลื่น</label>
                </div>
                <div class="ch-left-mr">
                    <input id="" type="checkbox" name="">
                    <label for="">การทำความสะอาด</label>
                </div>
                <div>
                    <input id="" type="checkbox" name="">
                    <label for="">ปัจจัยภายนอก / ไฟฟ้า</label>
                </div>
                <div>
                    <input id="" type="checkbox" name="">
                    <label for="">อายุการใช้งาน</label>
                </div>
                <div>
                    <input type="checkbox" id="yourCheckboxId" name="yourCheckboxName">
                    <label for="yourCheckboxId">อื่นๆ</label>
                    <input class="form-a" type="text" id="yourTextInputId" name="yourTextInputName" placeholder="กรอกข้อความ">
                </div>


            </div>11111111111111111111111111111111111111111111112222222222222







            <div class="col-lg-5">

                <div class="row ">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Area</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected="">Choose...</option>
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
                            <option value="1">Product Area</option>
                            <option value="2">Other Area</option>
                        </select></label>
                </div>


                <div class="row other-sel" style="display: none;" id="selother">
                    <label for="textother" class="form-label">Other</label>
                    <textarea class="form-control" id="textother" rows="3"></textarea>
                </div>

            </div>







            <div class="row align-items-center ">
                <div class="col-lg-6 ">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>









            <table>
                <tbody>
                    <tr>
                        <td class="auto-style1" colspan="2">

                        </td>
                        <td colspan="3">

                        </td>
                        <td class="jod-no" colspan="3">

                        </td>

                    </tr>









                    <tr style="border-top: 2px solid #000">
                        <td colspan="4" class="auto-style12">&nbsp;&nbsp;&nbsp;&nbsp; เรื่อง (Subject) :
                            <input name="ctl00$ContentPlaceHolder1$txtSubject" type="text" id="ContentPlaceHolder1_txtSubject" autocomplete="off" style="width:480px;">
                        </td>
                        <td colspan="2">ว-ด-ป ที่เขียน (Issued D-M-Y):
                            <script>
                                $('#ContentPlaceHolder1_txtDateSubject').change(function() {


                                    var TodayDate = new Date();
                                    TodayDate.setDate(TodayDate.getDate() + 2);
                                    var txtDate = $(this).val().split('/');
                                    var endDate = new Date(Date.parse(txtDate[2] + '-' + txtDate[1] + '-' + txtDate[0]));

                                    if (endDate < TodayDate) {
                                        alert('การุณาเลือกวัน Kaizen ล่วงหน้า  : 2 วัน');
                                        $(this).val(TodayDate.format("dd/MM/yyyy"));
                                    }
                                });
                            </script><input name="ctl00$ContentPlaceHolder1$txtDateSubject" type="text" value="19/01/2024" id="ContentPlaceHolder1_txtDateSubject" disabled="disabled" class="aspNetDisabled text-center" autocomplete="off" style="width:105px;">
                        </td>
                    </tr>




                    <tr>
                        <td colspan="8">&nbsp;&nbsp;&nbsp;&nbsp; No:<span id="ContentPlaceHolder1_txtDocNo">KZN-TBKT-24010017</span>
                        </td>
                    </tr>




                    <tr>
                        <td colspan="3" class="auto-style12">&nbsp;&nbsp;&nbsp;&nbsp;
                            <span id="ContentPlaceHolder1_TextBox1" style="display:inline-block;width:101px;">รหัสพนักงาน( ID ):</span>
                            <input name="ctl00$ContentPlaceHolder1$txtEmpCode" type="text" value="SD525" id="ContentPlaceHolder1_txtEmpCode" disabled="disabled" class="aspNetDisabled" style="width:192px;">
                        </td>

                        <td class="auto-style15">ประเภท Kaizen :</td>
                        <td colspan="3" class="auto-style12">
                            <select name="ctl00$ContentPlaceHolder1$ddlKaizen" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlKaizen\',\'\')', 0)" id="ContentPlaceHolder1_ddlKaizen" style="height:18px;width:158px;">
                                <option value="1">Cal Money</option>
                                <option selected="selected" value="2">No Cal Money</option>

                            </select>
                        </td>
                        <td class="auto-style12">ตำแหน่ง(Position):<input name="ctl00$ContentPlaceHolder1$txtPosition" type="text" value="นักศึกษา (INTERNSHIP)" id="ContentPlaceHolder1_txtPosition" disabled="disabled" class="aspNetDisabled" style="width:100px;"><input name="ctl00$ContentPlaceHolder1$lblPosID" type="text" value="2" id="ContentPlaceHolder1_lblPosID" class="hide" style="width:100px;">
                        </td>
                    </tr>





                    <tr>
                        <td colspan="3" class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;
                            ชื่อ-สกุล(Name):<input name="ctl00$ContentPlaceHolder1$txtName" type="text" value="กันตพงศ์ แก้วเวหา" id="ContentPlaceHolder1_txtName" disabled="disabled" class="aspNetDisabled" style="width:220px;">

                        </td>

                        <td class="auto-style8"></td>
                        <td colspan="3" class="auto-style8"></td>
                        <td class="auto-style8">แผนก(Dept.):<select name="ctl00$ContentPlaceHolder1$ddlDept" id="ContentPlaceHolder1_ddlDept" style="height:16px;width:154px;">
                                <option value="T1AM00">ADM</option>
                                <option value="T1BP00">BPD</option>
                                <option value="T1EN00">ENS</option>
                                <option value="T1EX00">EXE</option>
                                <option value="T1IT00">ICT</option>
                                <option value="T1JI00">JIG</option>
                                <option value="T1MA00">MAD</option>
                                <option value="T1GK00">PD7</option>
                                <option value="T1PE00">PED</option>
                                <option value="T1SM00">SNM</option>
                                <option selected="selected" value="T1SS00">SYS</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">


                        </td>

                        <td colspan="2">

                        </td>
                        <td colspan="2">&nbsp;</td>
                        <td>ไลน์/ส่วนงาน(Line/Section):<input name="ctl00$ContentPlaceHolder1$txtSection" type="text" id="ContentPlaceHolder1_txtSection" style="width:100px;">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="auto-style5" align="center">
                            <span style="display:inline-block;width:120px;"><input id="ContentPlaceHolder1_cbxQuality" type="checkbox" name="ctl00$ContentPlaceHolder1$cbxQuality"><label for="ContentPlaceHolder1_cbxQuality">Quality </label></span>
                            <span style="display:inline-block;width:120px;"><input id="ContentPlaceHolder1_cbxDelivery" type="checkbox" name="ctl00$ContentPlaceHolder1$cbxDelivery"><label for="ContentPlaceHolder1_cbxDelivery">Delivery</label></span>
                            <span style="display:inline-block;width:98px;"><input id="ContentPlaceHolder1_cbxSafety" type="checkbox" name="ctl00$ContentPlaceHolder1$cbxSafety"><label for="ContentPlaceHolder1_cbxSafety">Safety</label></span>
                            <span style="display:inline-block;width:120px;"><input id="ContentPlaceHolder1_cbx5S" type="checkbox" name="ctl00$ContentPlaceHolder1$cbx5S"><label for="ContentPlaceHolder1_cbx5S">5S and other</label></span>
                        </td>

                        <td class="auto-style14" colspan="3">
                            <span style="display:inline-block;width:118px;"><input id="ContentPlaceHolder1_cbxKaizen" type="radio" name="ctl00$ContentPlaceHolder1$W" value="cbxKaizen" checked="checked"><label for="ContentPlaceHolder1_cbxKaizen">Kaizen แก้ไขแล้ว</label></span>
                            &nbsp;
                        </td>
                        <td class="auto-style5">
                            <span style="display:inline-block;width:165px;"><input id="ContentPlaceHolder1_cbxSuggestion" type="radio" name="ctl00$ContentPlaceHolder1$W" value="cbxSuggestion"><label for="ContentPlaceHolder1_cbxSuggestion">Suggestion ข้อเสนอแนะ</label></span>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$hfiUpload11" id="ContentPlaceHolder1_hfiUpload11">
                        </td>
                        <td class="auto-style5">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$hfiUpload12" id="ContentPlaceHolder1_hfiUpload12">
                        </td>
                        <td class="auto-style5">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$HiddenFieldB1" id="ContentPlaceHolder1_HiddenFieldB1">
                        </td>
                        <td class="auto-style5" colspan="3">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$HiddenFieldX" id="ContentPlaceHolder1_HiddenFieldX">
                        </td>
                        <td class="auto-style5">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$HiddenFieldTotal" id="ContentPlaceHolder1_HiddenFieldTotal">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$HiddenFieldD" id="ContentPlaceHolder1_HiddenFieldD">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$HiddenFieldsPrize" id="ContentPlaceHolder1_HiddenFieldsPrize">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$HiddenFieldsLevel" id="ContentPlaceHolder1_HiddenFieldsLevel">


                        </td>
                    </tr>
                    <tr>
                        <td colspan="8" class="auto-style5">
                            <table class="tb2" style="width: 100%; border: 1px solid #000; border-left: none; border-right: none">
                                <tbody>
                                    <tr>
                                        <td style="border-left: none; border-right: none">1.สภาพปัจจุบันและปัญหา (Current status and Problem)lem))</td>

                                        <td>2.รายละเอียดการแก้ไขปรับปรุง (Improvement details)</td>
                                    </tr>
                                    <tr>
                                        <td style="border-left: none; border-right: none">

                                            <textarea name="ctl00$ContentPlaceHolder1$txtCurrentProblem" rows="10" cols="20" id="ContentPlaceHolder1_txtCurrentProblem" style="font-size:8.8pt;width:541px;"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="ctl00$ContentPlaceHolder1$txtImprove" rows="10" cols="20" id="ContentPlaceHolder1_txtImprove" style="font-size:8.8pt;width:541px;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-left: none; border-right: none">3.รูปวาดหรือภาพถ่ายก่อนการปรับปรุง (Drawing or photo before kaizen)</td>
                                        <td>4.รูปวาดหรือภาพถ่ายหลังการปรับปรุง (Drawing or photo after kaizen)</td>
                                    </tr>
                                    <tr align="center">
                                        <td style="border-left: none; border-right: none">
                                            <img id="ContentPlaceHolder1_imgShow11" alt="" style="max-height: 171px; margin: 2px;" class="imgShow11">


                                        </td>
                                        <td align="center" class="auto-style9">
                                            <img id="ContentPlaceHolder1_imgShow12" alt="" style="max-height: 171px; margin: 2px;" class="imgShow12">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="border-left: none; border-right: none">
                                            <input type="file" name="ctl00$ContentPlaceHolder1$fiUpload11" id="ContentPlaceHolder1_fiUpload11">
                                            <input type="submit" name="ctl00$ContentPlaceHolder1$btnClear1" value="Remove Image" id="ContentPlaceHolder1_btnClear1" style="width:91px;">
                                        </td>
                                        <td>
                                            <input type="file" name="ctl00$ContentPlaceHolder1$fiUpload12" id="ContentPlaceHolder1_fiUpload12">
                                            <input type="submit" name="ctl00$ContentPlaceHolder1$btnClear2" value="Remove Image" id="ContentPlaceHolder1_btnClear2" style="width:91px;">
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8" class="auto-style5 tb2">
                            <table style="width: 100%; border-left: none; border-right: none">


                                <tbody>
                                    <tr>
                                        <td style="border-left: none; border-right: none" class="auto-style27">&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="auto-style27" style="border-left: none; border-right: none">
                                            <table class="auto-style30" style="border: none;">
                                                <tbody>
                                                    <tr align="center">
                                                        <td><strong>รายละเอียด</strong></td>
                                                        <td>การดำเนินการ</td>
                                                        <td>หน่วย</td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td>ค่าใช้จ่ายในการ Kaizen(Expense)</td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtKaizenExpense1" type="text" id="ContentPlaceHolder1_txtKaizenExpense1" autocomplete="off" style="width:192px;text-align: center">
                                                        </td>

                                                        <td>บาท (Baht)</td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td>วัน เดือน ปี ที่ปฎิบัติ (Actual Kaizen)</td>
                                                        <td align="center">
                                                            <input name="ctl00$ContentPlaceHolder1$txtActualKaizen1" type="text" id="ContentPlaceHolder1_txtActualKaizen1" class="dateInput" autocomplete="off" style="width:192px;">
                                                        </td>

                                                        <td>วันที่</td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td>เวลาที่ลงมือทำจนเสร็จ(Actual period)</td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtActualperiod1" type="text" id="ContentPlaceHolder1_txtActualperiod1" class="text-center" autocomplete="off" style="width:192px;">
                                                        </td>

                                                        <td>วัน/ชม</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                        <td align="center" class="tb">
                                            <table class="auto-style7" style="border: none;" width="100%" height="100%">
                                                <tbody>
                                                    <tr>
                                                        <td class="auto-style20"><strong>หัวหน้างานขึ้นไป
                                                                <br>
                                                                ( Supervisor level up )</strong></td>
                                                        <td class="auto-style20"><strong>ผู้จัดการขึ้นไป
                                                                <br>
                                                                ( Manager level up )</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" class="auto-style19">Checked</td>
                                                        <td align="center" class="auto-style19">Approved</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" class="auto-style21">


                                                        </td>
                                                        <td align="center" class="auto-style21">


                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">
                                                            <input name="ctl00$ContentPlaceHolder1$txtDateAppv1" type="text" id="ContentPlaceHolder1_txtDateAppv1" style="width:192px;text-align: center">
                                                        </td>
                                                        <td align="center">
                                                            <input name="ctl00$ContentPlaceHolder1$txtDateAppv2" type="text" id="ContentPlaceHolder1_txtDateAppv2" style="width:192px;text-align: center">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" colspan="2">




                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-left: none; border-right: none" class="auto-style27">
                                            <table id="ContentPlaceHolder1_tbNotCal" class="nav-justified" style="border-left: none; border-right: none">
                                                <tbody>
                                                    <tr>
                                                        <td class="auto-style25" colspan="5"><strong>Monthly Award/strong&gt;<div class="auto-style18" style="float: right"><strong>P.2</strong></div></strong></td>
                                                    </tr>
                                                    <tr align="Center">
                                                        <td class="auto-style32"><strong>คะแนน(Score)</strong></td>
                                                        <td class="auto-style23"><strong>ระดับชั้น<br>
                                                                (Level)</strong></td>
                                                        <td class="auto-style32"><strong>ค่ามาตรฐานBath)</strong></td>
                                                        <td class="auto-style32"><strong>ข้อเสนอแนะ<br>
                                                                Suggestion<br>
                                                                X 0.2</strong></td>
                                                        <td class="auto-style32"><strong>แก้ไขแล้ว<br>
                                                                Kaizen<br>
                                                                X 1.5</strong></td>
                                                    </tr>
                                                    <tr align="Center">
                                                        <td class="auto-style22"><strong>1</strong></td>
                                                        <td class="auto-style24"><strong>12</strong></td>
                                                        <td class="auto-style22"><strong>10</strong></td>
                                                        <td class="auto-style22"><strong>10</strong></td>
                                                        <td class="auto-style22"><strong>15</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="auto-style18" colspan="5"><strong>ตัวอย่างเช่น</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="auto-style18" colspan="5"><strong>1. การทาสีเส้น ติดป้ายบ่งชี้ ติดสัญลักษณ์ ต่างๆ</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>






                </tbody>

            </table>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Initialize the date picker
        $('#datesub').datepicker({
            dateFormat: 'dd/mm/yy', // Set the date format
            showButtonPanel: true, // Show the button panel for today and done buttons
            beforeShow: function(input, inst) {
                // Disable the input field if it's disabled
                if ($(input).prop('disabled')) {
                    inst.dpDiv.find('.ui-datepicker-current').hide(); // Hide today button
                    inst.dpDiv.find('.ui-datepicker-close').hide(); // Hide done button
                }
            }
        });
    });
</script>
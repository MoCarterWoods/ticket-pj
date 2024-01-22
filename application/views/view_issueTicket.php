<style>
    .auto-style1 {
        height: 50px;
        width: 235px;

    }

    .img-logo {
        height: 105px;
        width: 175px;
        margin-bottom: -30px;

    }

    .p-1 {
        margin-bottom: 0px;
        margin-left: 20px;
    }

    .h3-top {
        width: 500px;
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
                <div class="col-lg text-center">
                    <div style="display: inline-block;">
                        <p class="fs-3 fw-bold">MAINTENANCE WORKSHEET</p>
                        <p class="fs-3 fw-bold">ใบงานบำรุงรักษา</p>
                    </div>
                </div>

                <div class="col">
                    <p>Jod No.</p>
                    <p>Date :</p>
                    <p>MN รับเรื่องโดย</p>
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
                        <td colspan="2">ว-ด-ป ที่เขียน (Issued D-M-Y):<script>
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
$(document).ready(function () {
    var dropdown = $('#inputGroupSelect01');
    var droppd = $('#droppd');
    var dropline = $('#dropline'); // เพิ่มตัวแปร dropline
    var textother = $('#textother');

    var selpdDiv = $('#selpd');
    var selotherDiv = $('#selother');

    function resetUI() {
        droppd.empty().val('');
        dropline.empty().val('');
        textother.val('');
    }

    dropdown.change(function () {
        var selectedValue = dropdown.val();
    
        if (selectedValue === "1") {
            selpdDiv.show();
            selotherDiv.hide();
            resetUI();
            populateDropdown();
        } else if (selectedValue === "2") {
            selpdDiv.hide();
            selotherDiv.show();
            droppd.empty().val(' ');
            dropline.empty().val(' ');
            textother.val('');

            console.log(droppd.val()); // ตรวจสอบค่าที่ได้หลังจาก .val('')
            console.log(dropline.val()); // ตรวจสอบค่าที่ได้หลังจาก .val('')
        } else {
            selpdDiv.hide();
            selotherDiv.hide();
            resetUI();
        }
    });
    

    populateDropdown();

    function populateDropdown() {
        const apiUrlDroppd = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineMst';
        
        $.ajax({
            url: apiUrlDroppd,
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                droppd.empty();
                droppd.append('<option value="">Choose Production Code</option>');
                dropline.append('<option value=" ">Choose Line Code</option>');
                for (let i = 0; i < response.lineMaster.length; i++) {
                    const data = response.lineMaster[i];
                    droppd.append(`<option value="${data.dep_cd}">${data.dep_cd}</option>`);
                }
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });
    }
    
    $('#droppd').on('change', function () {
        let getPD = $('#droppd').val();
        const apiUrlDropline = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineFormPD';
    
        $.ajax({
            method: "POST",
            url: base_url("IssueTicket/callApiSearchLineCd?url=" + apiUrlDropline),
            dataType: 'Json',
            data: {
                getPD: getPD,
            },
            success: function (response) {
                dropline.empty();
                dropline.append('<option value="">Choose Line Code</option>');
                
                for (let i = 0; i < response.lineMaster.length; i++) {
                    const data = response.lineMaster[i];
                    dropline.append(`<option value="${data.line_cd}">${data.line_cd}</option>`);
                }
            }
        });
    });
});


     // ------------------------------------------- Job Type ----------------------------------------

     $(document).ready(function () {
        // สร้างตัวแปร response ในขอบเขตของ document.ready
        let response;
    
       JobtypeDropdown();
    
        function JobtypeDropdown() {
            const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_job_type';
    
            $.ajax({
                url: apiUrl,
                type: 'GET',
                dataType: 'json',
                success: function (res) {
                    // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                    response = res;
    
                    // Clear existing options in the dropdown
                    $('#SelJobtype').empty();
    
                    // Add a default option
                    $('#SelJobtype').append('<option value="">Choose...</option>');
    
                    // Loop through the API response and add options to the dropdown
                    for (let i = 0; i < response.length; i++) {
                        const jobtypeData = response[i];
                        $('#SelJobtype').append(`<option value="${jobtypeData.mjt_id}">${jobtypeData.mjt_name_eng} / ${jobtypeData.mjt_name_thai}</option>`);
                    }
                },
                error: function (error) {
                    console.error('Error fetching data from the API:', error);
                }
            });
        }
    
       
    });



// ------------------------------------------- ToolSystem ----------------------------------------

$(document).ready(function () {
    // สร้างตัวแปร response ในขอบเขตของ document.ready
    let response;

    populateToolDropdown();

    function populateToolDropdown() {
        const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_tool';

        $.ajax({
            url: apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                response = res;

                // Clear existing options in the dropdown
                $('#SelTool').empty();

                // Add a default option
                $('#SelTool').append('<option value="">Choose...</option>');

                // Loop through the API response and add options to the dropdown
                for (let i = 0; i < response.length; i++) {
                    const toolData = response[i];
                    $('#SelTool').append(`<option value="${toolData.mts_id}">${toolData.mts_name}</option>`);
                }
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });
    }

    // Add event listener for the change event on SelTool dropdown
    $('#SelTool').on('change', function () {
        // Get the selected value from the dropdown
        const selectedValue = $(this).val();

        // Find the corresponding toolData in the response array
        const selectedTool = response.find(tool => tool.mts_id === selectedValue);

        // Update addMaker and addModel inputs with selected tool data
        $('#addMaker').val(selectedTool ? selectedTool.mts_maker : '');
        $('#addModel').val(selectedTool ? selectedTool.mts_model : '');
    });
});

$(function() {
    $('.btn-circle').on('click', function() {
        $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
        $(this).addClass('btn-info').removeClass('btn-default').blur();
    });

    $('.next-step, .prev-step').on('click', function(e) {
        var $activeTab = $('.tab-pane.active');

        $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

        if ($(e.target).hasClass('next-step')) {
            var nextTab = $activeTab.next('.tab-pane').attr('id');
            $('[href="#' + nextTab + '"]').addClass('btn-info').removeClass('btn-default');
            $('[href="#' + nextTab + '"]').tab('show');
        } else {
            var prevTab = $activeTab.prev('.tab-pane').attr('id');
            $('[href="#' + prevTab + '"]').addClass('btn-info').removeClass('btn-default');
            $('[href="#' + prevTab + '"]').tab('show');
        }
    });
});

// -------------------------------- Problem Con -------------------------------
$(document).ready(function () {
    ProbConDropdown();

    function ProbConDropdown() {
        const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_problem';

    $.ajax({
        url: apiUrl,
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
            response = res;

            // Clear existing options in the dropdown
            $('#SelProblem').empty();

            // Add a default option
            $('#SelProblem').append('<option value="">Choose...</option>');

            // Loop through the API response and add options to the dropdown
            for (let i = 0; i < response.length; i++) {
                const problemData = response[i];
                $('#SelProblem').append(`<option value="${problemData.mpc_id}">${problemData.mpc_name_eng} / ${problemData.mpc_name_thai}</option>`);
            }
        },
        error: function (error) {
            console.error('Error fetching data from the API:', error);
        }
    });
}

});

        // -------------------------------- Inspec Method -------------------------------
        $(document).ready(function () {
            InMeDropdown();
        
            function InMeDropdown() {
                const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_inspec_method';
    
            $.ajax({
                url: apiUrl,
                type: 'GET',
                dataType: 'json',
                success: function (res) {
                    // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                    response = res;
    
                    // Clear existing options in the dropdown
                    $('#SelInspec').empty();
    
                    // Add a default option
                    $('#SelInspec').append('<option value="">Choose...</option>');
    
                    // Loop through the API response and add options to the dropdown
                    for (let i = 0; i < response.length; i++) {
                        const inspecData = response[i];
                        $('#SelInspec').append(`<option value="${inspecData.mim_id}">${inspecData.mim_name_eng} / ${inspecData.mim_name_thai}</option>`);
                    }
                },
                error: function (error) {
                    console.error('Error fetching data from the API:', error);
                }
            });
        }
    
        });

             // -------------------------------- Trouble -------------------------------
             $(document).ready(function () {
                TroubleDropdown();
            
                function TroubleDropdown() {
                    const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_trouble';
        
                $.ajax({
                    url: apiUrl,
                    type: 'GET',
                    dataType: 'json',
                    success: function (res) {
                        // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                        response = res;
        
                        // Clear existing options in the dropdown
                        $('#SelTbAc').empty();
        
                        // Add a default option
                        $('#SelTbAc').append('<option value="">Choose...</option>');
        
                        // Loop through the API response and add options to the dropdown
                        for (let i = 0; i < response.length; i++) {
                            const troubleData = response[i];
                            $('#SelTbAc').append(`<option value="${troubleData.mt_id}">${troubleData.mt_name_eng} / ${troubleData.mt_name_thai}</option>`);
                        }
                    },
                    error: function (error) {
                        console.error('Error fetching data from the API:', error);
                    }
                });
            }
        
        });

        

// // ---------------------- 1 - 2 ------------------------

// function setupTabClickHandler1_2() {
//     document.querySelectorAll('.nav-tabs li').forEach(function(tabLink) {
//         tabLink.addEventListener('click', function(event) {
//             var targetTab = this.querySelector('a').getAttribute('href');
            
//             // ตรวจสอบว่าคลิกที่แท็บ "#2" และเงื่อนไขตรวจสอบข้อมูลผ่าน
//             if (targetTab === "#2" && !checkFormData1_2()) {
//                 event.stopPropagation();
//                 event.preventDefault(); // เรียก preventDefault

//             }
//         });
//     });
// }



// function checkFormData1_2() {
//     var Area = $('#inputGroupSelect01').val();
//     var AreaPd = '';
//     var AreaLine = '';
//     var AreaOther = '';
    
//     // เพิ่มเงื่อนไขตรวจสอบค่าของ Area
//     if (Area === '1') {
//         AreaPd = $('#droppd').val();
//         AreaLine = $('#dropline').val();

//     } else if (Area === '2') {
//         AreaOther = $('#textother').val();

//     }

//     var ProcFunc = $('#processf').val();
//     var ToolSys = $('#SelTool').val();
//     var JobType = $('#SelJobtype').val();

//     if (Area == '') {
//         Swal.fire({
//             icon: 'warning',
//             title: 'Oops...',
//             text: 'Please Select Area.',
//         });
//     } else if (Area === '1' && AreaPd === '') {
//         Swal.fire({
//             icon: 'warning',
//             title: 'Oops...',
//             text: 'Please fill in all fields in Area PD.',
//         });
//     } else if (Area === '1' && AreaLine === '') {
//         Swal.fire({
//             icon: 'warning',
//             title: 'Oops...',
//             text: 'Please fill in all fields in Area Line.',
//         });
//     } else if (Area === '2' && AreaOther === '') {
//         Swal.fire({
//             icon: 'warning',
//             title: 'Oops...',
//             text: 'Please fill in all fields in Area Other.',
//         });
//     } else if (JobType == '') {
//         Swal.fire({
//             icon: 'warning',
//             title: 'Oops...',
//             text: 'Please Select Jobtype.',
//         }); 
//     } else if (ProcFunc == '') {
//         Swal.fire({
//             icon: 'warning',
//             title: 'Oops...',
//             text: 'Please enter Process / Function.',
//         }); 
//     } else if (ToolSys == '') {
//         Swal.fire({
//             icon: 'warning',
//             title: 'Oops...',
//             text: 'Please Select Tooling System.',
//         });
//     } else {
//         return true;
//     }
// }




// // เรียกใช้ฟังก์ชันเมื่อหน้าเว็บโหลดเสร็จ
// document.addEventListener('DOMContentLoaded', function() {
//     setupTabClickHandler2_3();
// });

// // ---------------------- 2 - 3 ------------------------

// function setupTabClickHandler2_3() {
//     document.querySelectorAll('.nav-tabs li').forEach(function(tabLink) {
//         tabLink.addEventListener('click', function(event) {
//             var targetTab = this.querySelector('a').getAttribute('href');
            
//             // ตรวจสอบว่าคลิกที่แท็บ "#3" และเงื่อนไขตรวจสอบข้อมูลผ่าน
//             if (targetTab === "#3" && !checkFormData2_3()) {
//                 event.stopPropagation();
//                 event.preventDefault(); // เรียก preventDefault

//             }
//         });
//     });
// }



// function checkFormData2_3() {
//     var ProbCon = $('#SelProblem').val();

//         if (ProbCon == '') {
//             Swal.fire({
//                 icon: 'warning',
//                 title: 'Oops...',
//                 text: 'Please Select ProbCon.',
//             });
//         }  else {
//             return true;
//         }

// }



// // เรียกใช้ฟังก์ชันเมื่อหน้าเว็บโหลดเสร็จ
// document.addEventListener('DOMContentLoaded', function() {
//     setupTabClickHandler1_2();
// });




    var globalArrayNewStep = [];

    // วนลูปตรวจสอบ checkbox ทุกตัว
    $('.form-check-input').each(function () {
        var checkbox = $(this);

        // ถ้า checkbox ถูกติ๊กให้เก็บค่า
        if (checkbox.is(":checked")) {
            var checkboxValue = checkbox.val();
            var labelText = checkbox.next('.form-check-label').text();

            globalArrayNewStep.push({
                value: checkboxValue,
                label: labelText
            });
        }
    });



    




//-------------------------- Save ----------------------------------

$(document).ready(function () {
    $('#btnSave').on('click', function () {

        var Area = $('#inputGroupSelect01').val();
        var AreaPd = '';
        var AreaLine = '';
        var AreaOther = '';
        
        // เพิ่มเงื่อนไขตรวจสอบค่าของ Area
        if (Area === '1') {
            AreaPd = $('#droppd').val();
            AreaLine = $('#dropline').val();
            // รีเซ็ทค่าใน #droppd และ #dropline

        } else if (Area === '2') {
            AreaOther = $('#textother').val();
            // รีเซ็ทค่าใน #droppd และ #dropline
            $('#droppd').val(''); 
            $('#dropline').val('');
        }

        var ProcFunc = $('#processf').val();
        var ToolSys = $('#SelTool').val();
        var Maker = $('#addMaker').val();
        var Model = $('#addModel').val();
        var JobType = $('#SelJobtype').val();

        // ------------ Problem Con ---------------
        var ProbCon = $('#SelProblem').val();
        var ProbConDetail = $('#mdetailprdlm').val();

        // var pic1 = $('.upload__img-box:eq(0) .file-name').text();
        // var pic2 = $('.upload__img-box:eq(1) .file-name').text();
        // var pic3 = $('.upload__img-box:eq(2) .file-name').text();

        var pbpic1 = $('#file-input1-problm').val(); 
        var ProbConPic1 = pbpic1.replace(/^.*[\\\/]/, ''); 
        var pbpic2 = $('#file-input2-problm').val(); 
        var ProbConPic2 = pbpic2.replace(/^.*[\\\/]/, ''); 
        var pbpic3 = $('#file-input3-problm').val(); 
        var ProbConPic3 = pbpic3.replace(/^.*[\\\/]/, ''); 
        // ------------ End Problem Con ---------------

        // ------------ Inspec Method ---------------
        var InspecMethod = $('#SelInspec').val();
        var InspecDetail = $('#mdetailinsprc').val();

        var ismpic1 = $('#file-input1-isp').val(); 
        var InspecPic1 = ismpic1.replace(/^.*[\\\/]/, ''); 
        var ismpic2 = $('#file-input2-isp').val(); 
        var InspecPic2 = ismpic2.replace(/^.*[\\\/]/, ''); 
        var ismpic3 = $('#file-input3-isp').val(); 
        var InspecPic3 = ismpic3.replace(/^.*[\\\/]/, ''); 
        // ------------ End Inspec Method ---------------

        // ------------ Trouble Shooting ---------------
        var Trouble = $('#SelTbAc').val();
        var TroubleDetail = $('#mdetailtbac').val();

        var troubpic1 = $('#file-input1-tbac').val(); 
        var TroublePic1 = troubpic1.replace(/^.*[\\\/]/, ''); 
        var troubpic2 = $('#file-input2-tbac').val(); 
        var TroublePic2 = troubpic2.replace(/^.*[\\\/]/, ''); 
        var troubpic3 = $('#file-input3-tbac').val(); 
        var TroublePic3 = troubpic3.replace(/^.*[\\\/]/, ''); 
        // ------------ End Trouble Shooting ---------------

        // ------------ Required Parts ---------------
        var requiredParts = [];
        for (var i = 1; i <= 5; i++) {
            var rqName = $('#name' + i).val();
            var rqMaker = $('#maker' + i).val();
            var rqModel = $('#model' + i).val();
            var rqQty = $('#quantity' + i).val();
            var rqStockDate = $('#stockDate' + i).val();
            var rqStockQuantity = $('#stockQuantity' + i).val();
            var rqOrderDate = $('#orderDate' + i).val();
            var rqOrderQuantity = $('#orderQuantity' + i).val();
            var rqReceivedDate = $('#receivedDate' + i).val();
            var rqReceivedQuantity = $('#receivedQuantity' + i).val();

            requiredParts.push({
                rqName: rqName,
                rqMaker: rqMaker,
                rqModel: rqModel,
                rqQty: rqQty,
                rqStockDate: rqStockDate,
                rqStockQuantity: rqStockQuantity,
                rqOrderDate: rqOrderDate,
                rqOrderQuantity: rqOrderQuantity,
                rqReceivedDate: rqReceivedDate,
                rqReceivedQuantity: rqReceivedQuantity
            });

        }


        

        // ------------ End Required Parts ---------------

        // ------------ Analyze problem -----------------
        var AnalyzDetail = $('#mdetailAnalyz').val();

        var anallyzpic1 = $('#file-input1-Analyz').val(); 
        var AnalyzPic1 = anallyzpic1.replace(/^.*[\\\/]/, ''); 
        var anallyzpic2 = $('#file-input2-Analyz').val(); 
        var AnalyzPic2 = anallyzpic2.replace(/^.*[\\\/]/, ''); 
        var anallyzpic3 = $('#file-input3-Analyz').val(); 
        var AnalyzPic3 = anallyzpic3.replace(/^.*[\\\/]/, ''); 

        var Checked1 = $('#Check1').prop('checked');
        var Checked2 = $('#Check2').prop('checked');
        var Checked3 = $('#Check3').prop('checked');
        var Checked4 = $('#Check4').prop('checked');
        var Checked5 = $('#Check5').prop('checked');
        var Checked6 = $('#Check6').prop('checked');
        var Checked7 = $('#Check7').prop('checked');
        var Checked8 = $('#Check8').prop('checked');
        var Checked9 = $('#Check9').prop('checked');
        var Checked10 = $('#Check10').prop('checked');
        var Checked11 = $('#Check11').prop('checked');
        var Detailcheck11 = $('#adddtInput').val();

        var Checkval1 = Checked1 ? $('#Check1').val() : '';
        var Checkval2 = Checked2 ? $('#Check2').val() : '';
        var Checkval3 = Checked3 ? $('#Check3').val() : '';
        var Checkval4 = Checked4 ? $('#Check4').val() : '';
        var Checkval5 = Checked5 ? $('#Check5').val() : '';
        var Checkval6 = Checked6 ? $('#Check6').val() : '';
        var Checkval7 = Checked7 ? $('#Check7').val() : '';
        var Checkval8 = Checked8 ? $('#Check8').val() : '';
        var Checkval9 = Checked9 ? $('#Check9').val() : '';
        var Checkval10 = Checked10 ? $('#Check10').val() : '';
        var Checkval11 = Checked11 ? $('#Check11').val() : '';
        // ------------ End Analyze Problem -----------------

        // ------------ Delivery Equipment -----------------
        var Detaildelivery = $('#additionalInput').val();
        var deliveryChecked1 = $('#Check-de1').prop('checked');
        var deliveryChecked2 = $('#Check-de2').prop('checked');
        var deliveryChecked3 = $('#Check-de3').prop('checked');
        var deliveryChecked4 = $('#Check-de4').prop('checked');
        var deliveryChecked5 = $('#Check-de5').prop('checked');
        var deliveryChecked6 = $('#Check-de6').prop('checked');

        var deliveryCheckval1 = deliveryChecked1 ? $('#Check-de1').val() : '';
        var deliveryCheckval2 = deliveryChecked2 ? $('#Check-de2').val() : '';
        var deliveryCheckval3 = deliveryChecked3 ? $('#Check-de3').val() : '';
        var deliveryCheckval4 = deliveryChecked4 ? $('#Check-de4').val() : '';
        var deliveryCheckval5 = deliveryChecked5 ? $('#Check-de5').val() : '';
        var deliveryCheckval6 = deliveryChecked6 ? $('#Check-de6').val() : '';

        // ------------ End Delivery Equipment -----------------

        // สำหรับรูปที่ 1


        // แสดงผลลัพธ์ใน cons11



        console.log("Area: " + Area);
        console.log("AreaPd: " + AreaPd);
        console.log("AreaLine: " + AreaLine);
        console.log("AreaOther: " + AreaOther);
        console.log("ProcFunc: " + ProcFunc);
        console.log("ToolSys: " + ToolSys);
        console.log("Maker: " + Maker);
        console.log("Model: " + Model);
        console.log("JobType: " + JobType);
        console.log("ProbCon: " + ProbCon);
        console.log("ProbConDetail: " + ProbConDetail);
        console.log("ProbConPic1: " + ProbConPic1);
        console.log("ProbConPic2: " + ProbConPic2);
        console.log("ProbConPic3: " + ProbConPic3);
        console.log("InspecMethod: " + InspecMethod);
        console.log("InspecDetail: " + InspecDetail);
        console.log("InspecPic1: " + InspecPic1);
        console.log("InspecPic2: " + InspecPic2);
        console.log("InspecPic3: " + InspecPic3);
        console.log("Trouble: " + Trouble);
        console.log("TroubleDetail: " + TroubleDetail);
        console.log("TroublePic1: " + TroublePic1);
        console.log("TroublePic2: " + TroublePic2);
        console.log("TroublePic3: " + TroublePic3);

        console.log('AnalyzDetail :', AnalyzDetail);
        console.log('AnalyzPic1 :', AnalyzPic1);
        console.log('AnalyzPic2 :', AnalyzPic2);
        console.log('AnalyzPic3 :', AnalyzPic3);

        console.log('Checkval1 :', Checkval1);
        console.log('Checkval2 :', Checkval2);
        console.log('Checkval3 :', Checkval3);
        console.log('Checkval4 :', Checkval4);
        console.log('Checkval5 :', Checkval5);
        console.log('Checkval6 :', Checkval6);
        console.log('Checkval7 :', Checkval7);
        console.log('Checkval8 :', Checkval8);
        console.log('Checkval9 :', Checkval9);
        console.log('Checkval10 :', Checkval10);
        console.log('Checkval11 :', Checkval11);
        console.log('Detailcheck11 :', Detailcheck11);

        console.log('Detaildelivery :', Detaildelivery);
        console.log('deliveryCheckval1 :', deliveryCheckval1);
        console.log('deliveryCheckval2 :', deliveryCheckval2);
        console.log('deliveryCheckval3 :', deliveryCheckval3);
        console.log('deliveryCheckval4 :', deliveryCheckval4);
        console.log('deliveryCheckval5 :', deliveryCheckval5);
        console.log('deliveryCheckval6 :', deliveryCheckval6);



        if (Area == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please Select Area.',
            });
        } else if (ProcFunc == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter Process / Function.',
            }); 
        } 
        else if (ToolSys == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please Select Tooling System.',
            }); 
        } 
        else if (JobType == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please Select Jobtype.',
            }); 
        } 
        else if (ProbCon == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please Select Problem Condition.',
            }); 
        } 
        else if (InspecMethod == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please Select Inspection Method.',
            }); 
        } 
        else if (Trouble == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please Select Troubleshooting/Action.',
            }); 
        }  else {
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to save Ticket?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, save!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = API_URL + 'Issue_Ticket/save_issue';
                    const formData = new FormData()
                    formData.append('AreaPd', AreaPd);
                    formData.append('AreaLine', AreaLine);
                    formData.append('AreaOther', AreaOther);
                    formData.append('ProcFunc', ProcFunc);
                    formData.append('ToolSys', ToolSys);
                    formData.append('Maker', Maker);
                    formData.append('Model', Model);
                    formData.append('JobType', JobType);
                    formData.append('ProbCon', ProbCon);
                    formData.append('ProbConDetail', ProbConDetail);
                    formData.append('ProbConPic1', ProbConPic1);
                    formData.append('ProbConPic2', ProbConPic2);
                    formData.append('ProbConPic3', ProbConPic3);
                    formData.append('InspecMethod', InspecMethod);
                    formData.append('InspecDetail', InspecDetail);
                    formData.append('InspecPic1', InspecPic1);
                    formData.append('InspecPic2', InspecPic2);
                    formData.append('InspecPic3', InspecPic3);
                    formData.append('Trouble', Trouble);
                    formData.append('TroubleDetail', TroubleDetail);
                    formData.append('TroublePic1', TroublePic1);
                    formData.append('TroublePic2', TroublePic2);
                    formData.append('TroublePic3', TroublePic3);

                    for (var j = 0; j < requiredParts.length; j++) {
                        var part = requiredParts[j];
                        for (var key in part) {
                            formData.append('Rq' + key + (j + 1), part[key]);
                            
                        }
                    }

                    formData.append('Detaildelivery', Detaildelivery);
                    formData.append('deliveryCheckval1', deliveryCheckval1);
                    formData.append('deliveryCheckval2', deliveryCheckval2);
                    formData.append('deliveryCheckval3', deliveryCheckval3);
                    formData.append('deliveryCheckval4', deliveryCheckval4);
                    formData.append('deliveryCheckval5', deliveryCheckval5);
                    formData.append('deliveryCheckval6', deliveryCheckval6);

                    formData.append('AnalyzDetail', AnalyzDetail);
                    formData.append('AnalyzPic1', AnalyzPic1);
                    formData.append('AnalyzPic2', AnalyzPic2);
                    formData.append('AnalyzPic3', AnalyzPic3);
                    formData.append('Checkval1', Checkval1);
                    formData.append('Checkval2', Checkval2);
                    formData.append('Checkval3', Checkval3);
                    formData.append('Checkval4', Checkval4);
                    formData.append('Checkval5', Checkval5);
                    formData.append('Checkval6', Checkval6);
                    formData.append('Checkval7', Checkval7);
                    formData.append('Checkval8', Checkval8);
                    formData.append('Checkval9', Checkval9);
                    formData.append('Checkval10', Checkval10);
                    formData.append('Checkval11', Checkval11);
                    formData.append('Detailcheck11', Detailcheck11);

                    $.ajax({
                        url: base_url('IssueTicket/callApiSaveTicket'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: 'json',
                        success: function (res) {
                            
                            if (res.result == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    html: 'Save Ticket success',
                                    timer: 2500,
                                }).then(() => {
                                    $('#mdlEdit').modal('hide');

                                });
                            } else if (res.result == 2) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Oops...',
                                    text: 'Add Fail!!',
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    html: 'A system error has occurred.',
                                });
                            }
                        }
                    });
                }
            });
        }
    });
});

$(document).ready(function () {
    
    var dropdown = $('#selArea');
    var selProduction = $('#selProduction');
    var selLine = $('#selLine'); // เพิ่มตัวแปร selLine
    var textother = $('#inpOther');

    var selpdDiv = $('#selpd');
    var selotherDiv = $('#selother');

    function resetUI() {
        selProduction.empty().val('');
        selLine.empty().val('');
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
            selProduction.empty().val(' ');
            selLine.empty().val(' ');
            textother.val('');

            console.log(selProduction.val()); // ตรวจสอบค่าที่ได้หลังจาก .val('')
            console.log(selLine.val()); // ตรวจสอบค่าที่ได้หลังจาก .val('')
        } else {
            selpdDiv.hide();
            selotherDiv.hide();
            resetUI();
        }
    });
    

    populateDropdown();

    function populateDropdown() {
        const apiUrlselProduction = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineMst';
        
        $.ajax({
            url: apiUrlselProduction,
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                selProduction.empty();
                selProduction.append('<option value="">Choose Production Code</option>');
                selLine.append('<option value=" ">Choose Line Code</option>');
                for (let i = 0; i < response.lineMaster.length; i++) {
                    const data = response.lineMaster[i];
                    selProduction.append(`<option value="${data.dep_cd}">${data.dep_cd}</option>`);
                }
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });
    }
    
    $('#selProduction').on('change', function () {
        let getPD = $('#selProduction').val();
        const apiUrlselLine = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineFormPD';
    
        $.ajax({
            method: "POST",
            url: base_url("IssueTicket/callApiSearchLineCd?url=" + apiUrlselLine),
            dataType: 'Json',
            data: {
                getPD: getPD,
            },
            success: function (response) {
                selLine.empty();
                selLine.append('<option value="">Choose Line Code</option>');
                
                for (let i = 0; i < response.lineMaster.length; i++) {
                    const data = response.lineMaster[i];
                    selLine.append(`<option value="${data.line_cd}">${data.line_cd}</option>`);
                }
            }
        });
    });
});

var fileNamesPb;
var fileNamesIns;
var fileNamesTroub;
var fileNamesAnalz;

function uploadImage() {
    var formData = new FormData();
    $.each($('#dropzone-multi').get(0).dropzone.files, function(key, el) {
        formData.append('images[]', el);
    });
    $.ajax({
        url: base_url('IssueTicket/imgUpload'),
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            fileNamesPb = response.split('"').filter(function(item) {
                return item.trim() !== ''; // กรองสตริงว่างที่เกิดขึ้นจากการแยก
            });
            console.log('ProblemPic :', fileNamesPb);
        },
        error: function(xhr, status, error) {
            console.error('Error during image upload. Status: ' + status + ', Error: ' + error);
        }
    });
}

function uploadImage2() {
    var formData = new FormData();
    $.each($('#dropzone-multi-inspection').get(0).dropzone.files, function(key, el1) {
        formData.append('images[]', el1);
    });
    $.ajax({
        url: base_url('IssueTicket/imgUpload2'),
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            fileNamesIns = response.split('"').filter(function(item) {
                return item.trim() !== '';
            });
            console.log('InspecPic :', fileNamesIns);
        },
        error: function(xhr, status, error) {
            console.error('Error during image upload. Status: ' + status + ', Error: ' + error);
        }
    });
}


function uploadImage3() {
    var formData = new FormData();
    $.each($('#dropzone-multi-troubleshooting').get(0).dropzone.files, function(key, el2) {
        formData.append('images[]', el2);
    });
    $.ajax({
        url: base_url('IssueTicket/imgUpload3'),
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            fileNamesTroub = response.split('"').filter(function(item) {
                return item.trim() !== ''; // กรองสตริงว่างที่เกิดขึ้นจากการแยก
            });
            console.log('TroublePic :', fileNamesTroub);
        },
        error: function(xhr, status, error) {
            console.error('Error during image upload. Status: ' + status + ', Error: ' + error);
        }
    });
}


function uploadImage4() {
    var formData = new FormData();
    $.each($('#dropzone-multi-analyz').get(0).dropzone.files, function(key, el3) {
        formData.append('images[]', el3);
    });
    $.ajax({
        url: base_url('IssueTicket/imgUpload4'),
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            fileNamesAnalz = response.split('"').filter(function(item) {
                return item.trim() !== ''; // กรองสตริงว่างที่เกิดขึ้นจากการแยก
            });
            console.log('AnalyzPic :', fileNamesAnalz);
        },
        error: function(xhr, status, error) {
            console.error('Error during image upload. Status: ' + status + ', Error: ' + error);
        }
    });
}






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
                $('#selTooling').empty();

                // Add a default option
                $('#selTooling').append('<option value="">Choose...</option>');

                // Loop through the API response and add options to the dropdown
                for (let i = 0; i < response.length; i++) {
                    const toolData = response[i];
                    $('#selTooling').append(`<option value="${toolData.mts_id}">${toolData.mts_name}</option>`);
                }
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });
    }

    

    // Add event listener for the change event on selTooling dropdown
    $('#selTooling').on('change', function () {
        // Get the selected value from the dropdown
        const selectedValue = $(this).val();

        // Find the corresponding toolData in the response array
        const selectedTool = response.find(tool => tool.mts_id === selectedValue);

        // Update addMaker and addModel inputs with selected tool data
        $('#addMaker').val(selectedTool ? selectedTool.mts_maker : '');
        $('#addModel').val(selectedTool ? selectedTool.mts_model : '');
    });
});


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
                $('#selToolingrq').empty();

                // Add a default option
                $('#selToolingrq').append('<option value="">Choose...</option>');

                // Loop through the API response and add options to the dropdown
                for (let i = 0; i < response.length; i++) {
                    const toolData = response[i];
                    $('#selToolingrq').append(`<option value="${toolData.mts_id}">${toolData.mts_name}</option>`);
                }
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });

    }
        $('#selToolingrq').on('change', function () {

            const selectedValue = $(this).val();
    

            const selectedTool = response.find(tool => tool.mts_id === selectedValue);
    
            // Update addMaker and addModel inputs with selected tool data
            $('#addMaker').val(selectedTool ? selectedTool.mts_maker : '');
            $('#addModel').val(selectedTool ? selectedTool.mts_model : '');
        });
})

    


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

        

        $(function() {
            $(".btn-next").click(function() {
                // แสดงแท็บ Problem Condition
                $("#navs-pills-top-problem").tab("show");
            });
        });
        
        
// ---------------------- 1 - 2 ------------------------


function checkFormData1_2() {
    var Area = $('#selArea').val();
    var AreaPd = '';
    var AreaLine = '';
    var AreaOther = '';
    
    // เพิ่มเงื่อนไขตรวจสอบค่าของ Area
    if (Area === '1') {
        AreaPd = $('#selProduction').val();
        AreaLine = $('#selLine').val();
    } else if (Area === '2') {
        AreaOther = $('#inpOther').val();
    }

    var ProcFunc = $('#inpProcess').val();
    var ToolSys = $('#selTooling').val();

    if (Area == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Please Select Area.',
        });
    } else if (Area === '1' && (AreaPd === '' || AreaLine === '')) {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Please fill in all fields in Area PD and Line.',
        });
    } else if (Area === '2' && AreaOther === '') {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Please fill in all fields in Area Other.',
        });
    } else if (ProcFunc == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Please enter Process / Function.',
        }); 
    } else if (ToolSys == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Please Select Tooling System.',
        });
    } else {
        // เพิ่มคำสั่งเพื่อเปลี่ยนแท็บ
        $('#navs-pills-top-problem').addClass('show active');
        $('#navs-pills-top-Equipment').removeClass('show active');
        $('button[data-bs-target="#navs-pills-top-problem"]').parent().addClass('active');
        $('button[data-bs-target="#navs-pills-top-Equipment"]').parent().removeClass('active');
        return true;
    }
}





// ---------------------- 2 - 3 ------------------------

function checkFormData2_3() {
    var ProbCon = $('#SelProblem').val();

        if (ProbCon == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please Select ProbCon.',
            });
        }  else {
            return true;
        }

}

// ---------------------- 3 - 4 ------------------------

function checkFormData3_4() {
    var Jtradio1 = $('#customRadioIcon1').prop('checked');
    var Jtradio2 = $('#customRadioIcon2').prop('checked');
    var Jtradio3 = $('#customRadioIcon3').prop('checked');
    var Jtradio4 = $('#customRadioIcon4').prop('checked');

    if (!(Jtradio1 || Jtradio2 || Jtradio3 || Jtradio4)) {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Please Select Job Type.',
        });
        return false; // ถ้าไม่มีรายการไหนถูกเลือกให้คืนค่า false
    } else {
        return true; // ถ้ามีรายการที่ถูกเลือกอย่างน้อยหนึ่งรายการให้คืนค่า true
    }
}    

// ---------------------- 4 - 5 ------------------------

function checkFormData4_5() {
    var ProbCon = $('#SelInspec').val();

        if (ProbCon == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please Select Inspec.',
            });
        }  else {
            return true;
        }

}


// ---------------------- 5 - 6 ------------------------

function checkFormData5_6() {
    var ProbCon = $('#SelTbAc').val();

        if (ProbCon == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please Select Troubleshooting.',
            });
        }  else {
            return true;
        }

}
// ----------------------- Button Next ------------------------
$(document).ready(function() {
    function handleNextClick(checkFunction, nextId, targetShowId, targetHideId, spanId, uploadImageFunction) {
        $('#' + nextId).click(function() {
            if (checkFunction()) {
                $('#' + targetShowId).addClass('show active');
                $('#' + targetHideId).removeClass('show active');

                $('[data-target="#' + targetShowId + '"]').addClass('active');
                $('[data-target="#' + targetHideId + '"]').removeClass('active');
                $('#' + spanId).addClass('mowoods');
                if (uploadImageFunction) {
                    uploadImageFunction(); 
                }
            }
        });
    }

    handleNextClick(checkFormData1_2, 'next1', 'navs-pills-top-problem', 'navs-pills-top-Equipment', 'spaneq');
    handleNextClick(checkFormData2_3, 'next2', 'navs-pills-top-jobtype', 'navs-pills-top-problem', 'spanpb', uploadImage);
    handleNextClick(checkFormData3_4, 'next3', 'navs-pills-top-inspection', 'navs-pills-top-jobtype', 'spanjt');
    handleNextClick(checkFormData4_5, 'next4', 'navs-pills-top-troubleshooting', 'navs-pills-top-inspection', 'spaninspec', uploadImage2);
    handleNextClick(checkFormData5_6, 'next5', 'navs-pills-top-required', 'navs-pills-top-troubleshooting', 'spantbs', uploadImage3);
    handleNextClick(function() { return true; }, 'next6', 'navs-pills-top-analyze', 'navs-pills-top-required', 'spanreq');
    handleNextClick(function() { return true; }, 'next7', 'navs-pills-top-prevention', 'navs-pills-top-analyze', 'spananly', uploadImage4);
    handleNextClick(function() { return true; }, 'next8', 'navs-pills-top-delivery', 'navs-pills-top-prevention', 'spanpreven');
    
});




// ------------------------------------------------------------------------------------

// ----------------------- Previos Button -----------------------

$(document).ready(function() {
    function handlePrevClick(prevId, nextId, thisId, spanId) {
        $('#' + prevId).click(function() {
            $('#' + nextId).addClass('show active');
            $('#' + thisId).removeClass('show active');

            $('[data-target="#' + nextId + '"]').addClass('active');
            $('[data-target="#' + thisId + '"]').removeClass('active');
            $('#' + spanId).removeClass('mowoods');
        });
    }

    handlePrevClick('prev2', 'navs-pills-top-Equipment', 'navs-pills-top-problem', 'spaneq');
    handlePrevClick('prev3', 'navs-pills-top-problem', 'navs-pills-top-jobtype', 'spanpb');
    handlePrevClick('prev4', 'navs-pills-top-jobtype', 'navs-pills-top-inspection', 'spanjt');
    handlePrevClick('prev5', 'navs-pills-top-inspection', 'navs-pills-top-troubleshooting', 'spaninspec');
    handlePrevClick('prev6', 'navs-pills-top-troubleshooting', 'navs-pills-top-required', 'spantbs');
    handlePrevClick('prev7', 'navs-pills-top-required', 'navs-pills-top-analyze', 'spanreq');
    handlePrevClick('prev8', 'navs-pills-top-analyze', 'navs-pills-top-prevention', 'spananly');
    handlePrevClick('prev9', 'navs-pills-top-prevention', 'navs-pills-top-delivery', 'spanpreven');
});



// --------------------------------------------------

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



    
// -------------------- Reset --------------------
function confirmReset() {
    // เรียกใช้ SweetAlert เพื่อสร้างการเตือน
    Swal.fire({
        title: 'คุณแน่ใจหรือไม่?',
        text: "การกระทำนี้จะรีเฟรชหน้าเพื่อ Reset!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ใช่, Reset!'
    }).then((result) => {
        // ถ้าผู้ใช้กดยอมรับ
        if (result.isConfirmed) {
            // แสดง SweetAlert ว่า Reset สำเร็จ
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                html: 'Reset Success!'
            });

            // รอ 2.5 วินาที (2500 มิลลิวินาที) ก่อนที่จะ reload
            setTimeout(function(){
                // รีเฟรชหน้าเพื่อทำการ Reset
                location.reload();
            }, 1500); 
        }
    });
}




//-------------------------- Save ----------------------------------

$(document).ready(function () {
    $('#btnSave').on('click', function () {
        
        
        // -------------- Equipment ---------------
        var Area = $('#selArea').val();
        var AreaPd = '';
        var AreaLine = '';
        var AreaOther = '';
        

        if (Area === '1') {
            AreaPd = $('#selProduction').val();
            AreaLine = $('#selLine').val();


        } else if (Area === '2') {
            AreaOther = $('#inpOther').val();
            $('#selProduction').val(''); 
            $('#selLine').val('');
        }

        var ProcFunc = $('#inpProcess').val();
        var ToolSys = $('#selTooling').val();
        var Maker = $('#addMaker').val();
        var Model = $('#addModel').val();



        // ------------ Problem Con ---------------
        var ProbCon = $('#SelProblem').val();
        var ProbConDetail = $('#mdetailprdlm').val();
        
        var PbCheck1 = $('#customCheckpb1').prop('checked');
        var PbCheck2 = $('#customCheckpb2').prop('checked');
        var PbCheck3 = $('#customCheckpb3').prop('checked');

        var PbCheckval1 = PbCheck1 ? $('#customCheckpb1').val() : '';
        var PbCheckval2 = PbCheck2 ? $('#customCheckpb2').val() : '';
        var PbCheckval3 = PbCheck3 ? $('#customCheckpb3').val() : '';




        // ------------ Job Type ---------------
        var JobtypeRadioVal = $('input[name="customRadioIcon"]:checked').val();



        // ------------ Inspec Method ---------------
        var InspecMethod = $('#SelInspec').val();
        var InspecDetail = $('#mdetailinsprc').val();

        var InsCheck1 = $('#customCheckins1').prop('checked');
        var InsCheck2 = $('#customCheckins2').prop('checked');
        var InsCheck3 = $('#customCheckins3').prop('checked');

        var InsCheckval1 = InsCheck1 ? $('#customCheckins1').val() : '';
        var InsCheckval2 = InsCheck2 ? $('#customCheckins2').val() : '';
        var InsCheckval3 = InsCheck3 ? $('#customCheckins3').val() : '';


        // ------------ Trouble Shooting ---------------
        var Trouble = $('#SelTbAc').val();
        var TroubleDetail = $('#mdetailtbac').val();
        var TroubleDetail3 = $('#texttroublecheck3').val();
        var TroubleDetail4 = $('#texttroublecheck4').val();


        var TbCheck1 = $('#troublecheck1').prop('checked');
        var TbCheck2 = $('#troublecheck2').prop('checked');
        var TbCheck3 = $('#troublecheck3').prop('checked');
        var TbCheck4 = $('#troublecheck4').prop('checked');

        var TroubleCheckval1 = TbCheck1 ? $('#troublecheck1').val() : '';
        var TroubleCheckval2 = TbCheck2 ? $('#troublecheck2').val() : '';
        var TroubleCheckval3 = TbCheck3 ? $('#troublecheck3').val() : '';
        var TroubleCheckval4 = TbCheck4 ? $('#troublecheck4').val() : '';

        // ------------ Required Parts ---------------

        var rqName1 = $('#name1').val();
        var rqMaker1 = $('#maker1').val();
        var rqModel1 = $('#model1').val();
        var rqQty1 = $('#quantity1').val();
        var rqStockDate1 = $('#stockDate1').val();
        var rqStockQuantity1 = $('#stockQuantity1').val();
        var rqOrderDate1 = $('#orderDate1').val();
        var rqOrderQuantity1 = $('#orderQuantity1').val();
        var rqReceivedDate1 = $('#receivedDate1').val();
        var rqReceivedQuantity1 = $('#receivedQuantity1').val();

        var rqName2 = $('#name2').val() || '';
        var rqMaker2 = $('#maker2').val() || '';
        var rqModel2 = $('#model2').val() || '';
        var rqQty2 = $('#quantity2').val() || '';
        var rqStockDate2 = $('#stockDate2').val() || '';
        var rqStockQuantity2 = $('#stockQuantity2').val() || '';
        var rqOrderDate2 = $('#orderDate2').val() || '';
        var rqOrderQuantity2 = $('#orderQuantity2').val() || '';
        var rqReceivedDate2 = $('#receivedDate2').val() || '';
        var rqReceivedQuantity2 = $('#receivedQuantity2').val() || '';

        var rqName3 = $('#name3').val() || '';
        var rqMaker3 = $('#maker3').val() || '';
        var rqModel3 = $('#model3').val() || '';
        var rqQty3 = $('#quantity3').val() || '';
        var rqStockDate3 = $('#stockDate3').val() || '';
        var rqStockQuantity3 = $('#stockQuantity3').val() || '';
        var rqOrderDate3 = $('#orderDate3').val() || '';
        var rqOrderQuantity3 = $('#orderQuantity3').val() || '';
        var rqReceivedDate3 = $('#receivedDate3').val() || '';
        var rqReceivedQuantity3 = $('#receivedQuantity3').val() || '';

        var rqName4 = $('#name4').val() || '';
        var rqMaker4 = $('#maker4').val() || '';
        var rqModel4 = $('#model4').val() || '';
        var rqQty4 = $('#quantity4').val() || '';
        var rqStockDate4 = $('#stockDate4').val() || '';
        var rqStockQuantity4 = $('#stockQuantity4').val() || '';
        var rqOrderDate4 = $('#orderDate4').val() || '';
        var rqOrderQuantity4 = $('#orderQuantity4').val() || '';
        var rqReceivedDate4 = $('#receivedDate4').val() || '';
        var rqReceivedQuantity4 = $('#receivedQuantity4').val() || '';

        var rqName5 = $('#name5').val() || '';
        var rqMaker5 = $('#maker5').val() || '';
        var rqModel5 = $('#model5').val() || '';
        var rqQty5 = $('#quantity5').val() || '';
        var rqStockDate5 = $('#stockDate5').val() || '';
        var rqStockQuantity5 = $('#stockQuantity5').val() || '';
        var rqOrderDate5 = $('#orderDate5').val() || '';
        var rqOrderQuantity5 = $('#orderQuantity5').val() || '';
        var rqReceivedDate5 = $('#receivedDate5').val() || '';
        var rqReceivedQuantity5 = $('#receivedQuantity5').val() || '';
        
        

        // ------------ End Required Parts ---------------

        // ------------ Analyze problem -----------------
        var AnalyzDetail = $('#mdetailAnalyz').val();

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

        console.log("JobType: " + JobtypeRadioVal);

    
        console.log("ProbCon: " + ProbCon);
        console.log("ProbConDetail: " + ProbConDetail);
        console.log("PbCheckval1: " + PbCheckval1);
        console.log("PbCheckval2: " + PbCheckval2);
        console.log("PbCheckval3: " + PbCheckval3);
        console.log("fileNamesPb: " + fileNamesPb);


        console.log("InspecMethod: " + InspecMethod);
        console.log("InspecDetail: " + InspecDetail);
        console.log("InsCheckval1: " + InsCheckval1);
        console.log("InsCheckval2: " + InsCheckval2);
        console.log("InsCheckval3: " + InsCheckval3);
        console.log("fileNamesIns: " + fileNamesIns);

        console.log("Trouble: " + Trouble);
        console.log("TroubleDetail: " + TroubleDetail);
        console.log("fileNamesTroub: " + fileNamesTroub);


        console.log('AnalyzDetail :', AnalyzDetail);


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
        console.log('fileNamesAnalz :', fileNamesAnalz);

        console.log('Detaildelivery :', Detaildelivery);
        console.log('deliveryCheckval1 :', deliveryCheckval1);
        console.log('deliveryCheckval2 :', deliveryCheckval2);
        console.log('deliveryCheckval3 :', deliveryCheckval3);
        console.log('deliveryCheckval4 :', deliveryCheckval4);
        console.log('deliveryCheckval5 :', deliveryCheckval5);
        console.log('deliveryCheckval6 :', deliveryCheckval6);


       
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
                    formData.append('ProbCon', ProbCon);
                    formData.append('ProbConDetail', ProbConDetail);
                    formData.append('PbCheckval1', PbCheckval1);
                    formData.append('PbCheckval2', PbCheckval2);
                    formData.append('PbCheckval3', PbCheckval3);
                    formData.append('fileNamesPb', fileNamesPb);


                    formData.append('JobtypeRadioVal', JobtypeRadioVal);

                    formData.append('InspecMethod', InspecMethod);
                    formData.append('InspecDetail', InspecDetail);
                    formData.append('InsCheckval1', InsCheckval1);
                    formData.append('InsCheckval2', InsCheckval2);
                    formData.append('InsCheckval3', InsCheckval3);
                    formData.append('fileNamesIns', fileNamesIns);



                    formData.append('Trouble', Trouble);
                    formData.append('TroubleDetail', TroubleDetail);
                    formData.append('fileNamesTroub', fileNamesTroub);

                    formData.append('TroubleCheckval1', TroubleCheckval1);
                    formData.append('TroubleCheckval2', TroubleCheckval2);
                    formData.append('TroubleCheckval3', TroubleCheckval3);
                    formData.append('TroubleCheckval4', TroubleCheckval4);
                    formData.append('TroubleDetail3', TroubleDetail3);
                    formData.append('TroubleDetail4', TroubleDetail4);


                    formData.append('rqName1', rqName1);
                    formData.append('rqMaker1', rqMaker1);
                    formData.append('rqModel1', rqModel1);
                    formData.append('rqQty1', rqQty1);
                    formData.append('rqStockDate1', rqStockDate1);
                    formData.append('rqStockQuantity1', rqStockQuantity1);
                    formData.append('rqOrderDate1', rqOrderDate1);
                    formData.append('rqOrderQuantity1', rqOrderQuantity1);
                    formData.append('rqReceivedDate1', rqReceivedDate1);
                    formData.append('rqReceivedQuantity1', rqReceivedQuantity1);

                    formData.append('rqName2', rqName2);
                    formData.append('rqMaker2', rqMaker2);
                    formData.append('rqModel2', rqModel2);
                    formData.append('rqQty2', rqQty2);
                    formData.append('rqStockDate2', rqStockDate2);
                    formData.append('rqStockQuantity2', rqStockQuantity2);
                    formData.append('rqOrderDate2', rqOrderDate2);
                    formData.append('rqOrderQuantity2', rqOrderQuantity2);
                    formData.append('rqReceivedDate2', rqReceivedDate2);
                    formData.append('rqReceivedQuantity2', rqReceivedQuantity2);

                    formData.append('rqName3', rqName3);
                    formData.append('rqMaker3', rqMaker3);
                    formData.append('rqModel3', rqModel3);
                    formData.append('rqQty3', rqQty3);
                    formData.append('rqStockDate3', rqStockDate3);
                    formData.append('rqStockQuantity3', rqStockQuantity3);
                    formData.append('rqOrderDate3', rqOrderDate3);
                    formData.append('rqOrderQuantity3', rqOrderQuantity3);
                    formData.append('rqReceivedDate3', rqReceivedDate3);
                    formData.append('rqReceivedQuantity3', rqReceivedQuantity3);

                    formData.append('rqName4', rqName4);
                    formData.append('rqMaker4', rqMaker4);
                    formData.append('rqModel4', rqModel4);
                    formData.append('rqQty4', rqQty4);
                    formData.append('rqStockDate4', rqStockDate4);
                    formData.append('rqStockQuantity4', rqStockQuantity4);
                    formData.append('rqOrderDate4', rqOrderDate4);
                    formData.append('rqOrderQuantity4', rqOrderQuantity4);
                    formData.append('rqReceivedDate4', rqReceivedDate4);
                    formData.append('rqReceivedQuantity4', rqReceivedQuantity4);

                    formData.append('rqName5', rqName5);
                    formData.append('rqMaker5', rqMaker5);
                    formData.append('rqModel5', rqModel5);
                    formData.append('rqQty5', rqQty5);
                    formData.append('rqStockDate5', rqStockDate5);
                    formData.append('rqStockQuantity5', rqStockQuantity5);
                    formData.append('rqOrderDate5', rqOrderDate5);
                    formData.append('rqOrderQuantity5', rqOrderQuantity5);
                    formData.append('rqReceivedDate5', rqReceivedDate5);
                    formData.append('rqReceivedQuantity5', rqReceivedQuantity5);

                    formData.append('Detaildelivery', Detaildelivery);
                    formData.append('deliveryCheckval1', deliveryCheckval1);
                    formData.append('deliveryCheckval2', deliveryCheckval2);
                    formData.append('deliveryCheckval3', deliveryCheckval3);
                    formData.append('deliveryCheckval4', deliveryCheckval4);
                    formData.append('deliveryCheckval5', deliveryCheckval5);
                    formData.append('deliveryCheckval6', deliveryCheckval6);

                    formData.append('AnalyzDetail', AnalyzDetail);
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
                    formData.append('fileNamesAnalz', fileNamesAnalz);


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
        
    });

});

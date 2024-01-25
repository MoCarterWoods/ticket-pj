$(document).ready(function () {
    var dropdown = $('#inputGroupSelect01');
    var droppd = $('#droppd');

    var selpdDiv = $('#selpd');
    var selotherDiv = $('#selother');

    dropdown.change(function () {
        var selectedValue = dropdown.val();

        if (selectedValue === "pdarea") {
            selpdDiv.show();
            selotherDiv.hide();
            populateDropdown();
        } else if (selectedValue === "other") {
            selpdDiv.hide();
            selotherDiv.show();
        } else {
            selpdDiv.hide();
            selotherDiv.hide();
        }
    });


    // ----------------------------------- PD & LINE -----------------------------------------
    populateDropdown();

    function populateDropdown() {
        const apiUrlDroppd = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineMst';
        const droppd = $('#droppd');
    
        $.ajax({
            url: apiUrlDroppd,
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                // Clear all existing options in the droppd dropdown
                droppd.empty();
    
                // Add a default option
                droppd.append('<option value="">Choose Production Code</option>');
    
                // Loop through the response and add new options
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
        const dropline = $('#dropline');
        dropline.empty();
        let getPD = $('#droppd').val();
        const apiUrlDropline = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineFormPD';
    
        $.ajax({
            method: "POST",
            url: base_url("IssueTicket/callApiSearchLineCd?url=" + apiUrlDropline),
            dataType: 'Json',
            data: {
                getPD: getPD,
            },
            success: (response) => {
                dropline.empty();
                dropline.append('<option value="">Choose Line Code</option>');
                for (let i = 0; i < response.lineMaster.length; i++) {
                    const data = response.lineMaster[i];
                    dropline.append(`<option value="${data.line_cd}">${data.line_cd}</option>`);
                }
            }
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
            










    function JobTypeDropdown() {
        var url = API_URL + "Manage_permis_detail/show_group";
        $.ajax({
            method: "get",
            url: base_url("ManagePermission/callApiShowData?url=" + url),
            dataType: 'Json',
            success: (response) => {
                for (let i = 0; i < response.length; i++) {
                    const data = response[i];
                    $('.jodtypsel').append(`<option value="${data.spg_id}">${data.spg_name}</option>`);
                }
            },
            error: (err) => {
                console.log(err);
            },
        });
    }

    const fileInputs = document.getElementsByClassName('file-input');

    // Loop through each file input and add event listener
    for (let i = 0; i < fileInputs.length; i++) {
        fileInputs[i].addEventListener('change', function (event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    // Use template literals to dynamically select the image preview elements
                    document.getElementById(`image-preview${i + 1}`).src = e.target.result;
                };

                reader.readAsDataURL(file);
            }
        });
    }
});




// ------------------------ Image Uoload ---------------------

jQuery(document).ready(function () {
    ImgUpload();
});

function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];

    $('.upload__inputfile').each(function () {
        $(this).on('change', function (e) {
            imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
            var maxLength = 3; // กำหนดจำนวนไฟล์สูงสุดที่ต้องการ

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            var iterator = 0;

            filesArr.forEach(function (f, index) {
                if (!f.type.match('image.*')) {
                    return;
                }
            
                if (imgArray.length >= maxLength) {
                    return false;
                } else {
                    imgArray.push(f);
            
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var imgId = "img-" + (iterator + 1); // สร้าง ID โดยใช้ iterator
                        var html = "<div class='upload__img-box' id='" + imgId + "'><div class='file-name img-" + (iterator + 1) + "'>" + f.name + "</div><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                        imgWrap.append(html);
                        iterator++;
                    }
                    reader.readAsDataURL(f);
                }
            });
        });
    });

    $('body').on('click', ".upload__img-close", function (e) {
        var file = $(this).parent().data("file");
        for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i].name === file) {
                imgArray.splice(i, 1);
                break;
            }
        }
        $(this).parent().parent().remove();
    });
}





//-------------------------- Save ----------------------------------

$(document).ready(function () {
    $('#btnSave').on('click', function () {
        var Area = $('#inputGroupSelect01').val();
        var AreaPd = $('#droppd').val();
        var AreaLine = $('#dropline').val();
        var AreaOther = $('#textother').val();
        var ProcFunc = $('#processf').val();
        var ToolSys = $('#SelTool').val();
        var Maker = $('#addMaker').val();
        var Model = $('#addModel').val();
        var JobType = $('#SelJobtype').val();
        var ProbCon = $('#SelProblem').val();
        var ProbConDetail = $('#mdetailprdlm').val();

        var pbpic1 = $('#file-input1-problm').val(); 
        var ProbConPic1 = pbpic1.replace(/^.*[\\\/]/, ''); // เอาเฉพาะชื่อไฟล์
        var pbpic2 = $('#file-input2-problm').val(); 
        var ProbConPic2 = pbpic2.replace(/^.*[\\\/]/, ''); // เอาเฉพาะชื่อไฟล์
        var pbpic3 = $('#file-input3-problm').val(); 
        var ProbConPic3 = pbpic3.replace(/^.*[\\\/]/, ''); // เอาเฉพาะชื่อไฟล์


        // var ProbConPic2 = $('#edtSubMenu').val();
        // var ProbConPic3 = $('#edtSubMenu').val();

        var InspecMethod = $('#SelInspec').val();
        var InspecDetail = $('#mdetailinsprc').val();

        // var InspecPic1 = $('#edtSubMenu').val();
        // var InspecPic2 = $('#edtSubMenu').val();
        // var InspecPic3 = $('#edtSubMenu').val();

        var Trouble = $('#SelTbAc').val();
        var TroubleDetail = $('#mdetailtbac').val();

        // var TroublePic1 = $('#edtSubMenu').val();
        // var TroublePic2 = $('#edtSubMenu').val();
        // var TroublePic3 = $('#edtSubMenu').val();
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
        console.log("Trouble: " + Trouble);
        console.log("TroubleDetail: " + TroubleDetail);

        console.log('Check1 :', Checkval1);
        console.log('Check2 :', Checkval2);
        console.log('Check3 :', Checkval3);
        console.log('Check4 :', Checkval4);
        console.log('Check5 :', Checkval5);
        console.log('Check6 :', Checkval6);
        console.log('Check7 :', Checkval7);
        console.log('Check8 :', Checkval8);
        console.log('Check9 :', Checkval9);
        console.log('Check10 :', Checkval10);
        console.log('Check11 :', Checkval11);

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
        } 
        
        else if (!isThaiLanguage(SubName) || !isThaiLanguage(SubCon) || !isThaiLanguage(OrderNo)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter in English only.',
            });
        } else {
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to save edit?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, save!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = API_URL + 'Manage_submenu/edit_sub_menu';
                    const formData = new FormData()
                    formData.append('SubName', SubName);
                    formData.append('SubCon', SubCon);
                    formData.append('OrderNo', OrderNo);
                    formData.append('subId', subId);

                    $.ajax({
                        url: base_url('SubMenu/callApiSaveEdit'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: 'json',
                        success: function (res) {
                            console.log("sssssjd=>>", res);
                            if (res.result == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    html: 'Edit main menu success',
                                    timer: 2500,
                                }).then(() => {
                                    $('#mdlEdit').modal('hide');
                                    shDataTable();
                                });
                            } else if (res.result == 2) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Oops...',
                                    text: 'Duplicate value!!',
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
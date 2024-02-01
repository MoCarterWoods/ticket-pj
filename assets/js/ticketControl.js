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
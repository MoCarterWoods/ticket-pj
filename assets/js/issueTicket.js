$(document).ready(function () {
    $("#loadingPage").attr("style", "display: none;");
});
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
                $('#selTooling').append('<option value="">Choose tooling system</option>');

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

    populateToolDropdownrq();

    function populateToolDropdownrq() {
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
                $('#selToolingrq').append('<option value="">Choose tooling system</option>');

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
            $('#addMakerrq').val(selectedTool ? selectedTool.mts_maker : '');
            $('#addModelrq').val(selectedTool ? selectedTool.mts_model : '');
        });
})


$(document).ready(function () {
    // สร้างตัวแปร response ในขอบเขตของ document.ready
    let response;

    populateEditToolDropdownrq();

    function populateEditToolDropdownrq() {
        const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_tool';

        $.ajax({
            url: apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                response = res;

                // Clear existing options in the dropdown
                $('#editselToolingrq').empty();

                // Add a default option
                $('#editselToolingrq').append('<option value="">Choose tooling system</option>');

                // Loop through the API response and add options to the dropdown
                for (let i = 0; i < response.length; i++) {
                    const toolData = response[i];
                    $('#editselToolingrq').append(`<option value="${toolData.mts_id}">${toolData.mts_name}</option>`);
                }
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });

    }
        $('#editselToolingrq').on('change', function () {

            const selectedValue = $(this).val();
    

            const selectedTool = response.find(tool => tool.mts_id === selectedValue);
    
            // Update addMaker and addModel inputs with selected tool data
            $('#editaddMakerrq').val(selectedTool ? selectedTool.mts_maker : '');
            $('#editaddModelrq').val(selectedTool ? selectedTool.mts_model : '');
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



// ------------------------------------------- Type Request ----------------------------------------

$(document).ready(function () {
    // สร้างตัวแปร response ในขอบเขตของ document.ready
    let response;

    populateTypeDropdown();

    function populateTypeDropdown() {
        const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_type';

        $.ajax({
            url: apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                response = res;

                // Clear existing options in the dropdown
                $('#selTyperq').empty();

                // Add a default option
                $('#selTyperq').append('<option value="">Choose type request</option>');

                // Loop through the API response and add options to the dropdown
                for (let i = 0; i < response.length; i++) {
                    const toolData = response[i];
                    $('#selTyperq').append(`<option value="${toolData.mtr_id}">${toolData.mtr_name}</option>`);
                }
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });
    }
});


$(document).ready(function () {
    // สร้างตัวแปร response ในขอบเขตของ document.ready
    let response;

    populateEditTypeDropdown();

    function populateEditTypeDropdown() {
        const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_type';

        $.ajax({
            url: apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                response = res;

                // Clear existing options in the dropdown
                $('#editselTyperq').empty();

                // Add a default option
                $('#editselTyperq').append('<option value="">Choose type request</option>');

                // Loop through the API response and add options to the dropdown
                for (let i = 0; i < response.length; i++) {
                    const toolData = response[i];
                    $('#editselTyperq').append(`<option value="${toolData.mtr_id}">${toolData.mtr_name}</option>`);
                }
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });
    }
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


document.addEventListener('DOMContentLoaded', function () {
    // เรียกใช้งาน API
    fetch('http://127.0.0.1/api/Issue_Ticket/chkBox_problem')
        .then(response => response.json()) // แปลงข้อมูลเป็น JSON
        .then(data => {
            // วนลูปผ่านข้อมูลและแสดงใน HTML
            const chkBoxProblemElement = document.getElementById('chkBoxProblem');
            let i = 1; // กำหนดค่าเริ่มต้นของตัวแปร i
            data.forEach(item => {
                // สร้าง element div ใหม่
                const div = document.createElement('div');
                div.classList.add('col-md-4');

                // สร้าง element checkbox
                const checkboxDiv = document.createElement('div');
                checkboxDiv.classList.add('form-check', 'custom-option', 'custom-option-basic');
                const checkboxLabel = document.createElement('label');
                checkboxLabel.classList.add('form-check-label', 'custom-option-content');
                checkboxLabel.setAttribute('for', `customCheckpb${i}`);
                checkboxLabel.innerHTML = `
                    <input class="form-check-input" type="checkbox" value="${item.mpc_id}" id="customCheckpb${i}" />
                    <span class="custom-option-header">
                        <span class="h5 mb-0">${item.mpc_name_eng}</span>
                    </span>
                    <span class="custom-option-body">
                        <small class="option-text">${item.mpc_name_thai}</small>
                    </span>
                `;
                checkboxDiv.appendChild(checkboxLabel);
                div.appendChild(checkboxDiv);
                chkBoxProblemElement.appendChild(div);
                i++; // เพิ่มค่าของตัวแปร i ให้เพิ่มขึ้นทีละหนึ่งหลังจากการใช้งาน
            });
        })
        .catch(error => {
            console.error('เกิดข้อผิดพลาดในการเรียก API:', error);
        });
        
});
document.addEventListener('DOMContentLoaded', function () {
    // เรียกใช้งาน API
    fetch('http://127.0.0.1/api/Issue_Ticket/radio_jobtype')
        .then(response => response.json()) // แปลงข้อมูลเป็น JSON
        .then(data => {
            // วนลูปผ่านข้อมูลและแสดงใน HTML
            const chkBoxJobElement = document.getElementById('chkBoxJob');
            data.forEach(item => {
                // สร้าง element div ใหม่
                const div = document.createElement('div');
                div.classList.add('col-3');

                // สร้าง element radio button
                const radioDiv = document.createElement('div');
                radioDiv.classList.add('form-check', 'custom-option', 'custom-option-icon');
                const radioLabel = document.createElement('label');
                radioLabel.classList.add('form-check-label', 'custom-option-content');
                radioLabel.setAttribute('for', `customRadioIcon${item.mjt_id}`);
                radioLabel.innerHTML = `
                    <span class="custom-option-body">
                        <i class='bx bx-wrench'></i>
                        <span class="custom-option-title " style="font-size: 1.2em;">${item.mjt_name_thai}</span>
                        <small>${item.mjt_name_eng}</small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="${item.mjt_id}" id="customRadioIcon${item.mjt_id}" />
                `;
                radioDiv.appendChild(radioLabel);
                div.appendChild(radioDiv);
                chkBoxJobElement.appendChild(div);
            });
        })
        .catch(error => {
            console.error('เกิดข้อผิดพลาดในการเรียก API:', error);
        });
});



document.addEventListener('DOMContentLoaded', function () {
    // เรียกใช้งาน API
    fetch('http://127.0.0.1/api/Issue_Ticket/chkBox_inspection')
        .then(response => response.json()) // แปลงข้อมูลเป็น JSON
        .then(data => {
            // วนลูปผ่านข้อมูลและแสดงใน HTML
            const chkBoxProblemElement = document.getElementById('chkBoxInspec');
            let i = 1; // กำหนดค่าเริ่มต้นของตัวแปร i
            data.forEach(item => {
                // สร้าง element div ใหม่
                const div = document.createElement('div');
                div.classList.add('col-md-6');

                // สร้าง element checkbox
                const checkboxDiv = document.createElement('div');
                checkboxDiv.classList.add('form-check', 'custom-option', 'custom-option-basic');
                const checkboxLabel = document.createElement('label');
                checkboxLabel.classList.add('form-check-label', 'custom-option-content');
                checkboxLabel.setAttribute('for', `customCheckins${i}`);
                checkboxLabel.innerHTML = `
                    <input class="form-check-input" type="checkbox" value="${item.mim_id}" id="customCheckins${i}" />
                    <span class="custom-option-header">
                        <span class="h5 mb-0">${item.mim_name_eng}</span>
                    </span>
                    <span class="custom-option-body">
                        <small class="option-text">${item.mim_name_thai}</small>
                    </span>
                `;
                checkboxDiv.appendChild(checkboxLabel);
                div.appendChild(checkboxDiv);
                chkBoxProblemElement.appendChild(div);
                i++; // เพิ่มค่าของตัวแปร i ให้เพิ่มขึ้นทีละหนึ่งหลังจากการใช้งาน
            });
        })
        .catch(error => {
            console.error('เกิดข้อผิดพลาดในการเรียก API:', error);
        });
        
});

document.addEventListener('DOMContentLoaded', function () {
    // เรียกใช้งาน API
    fetch('http://127.0.0.1/api/Issue_Ticket/chkBox_trouble1')
        .then(response => response.json()) // แปลงข้อมูลเป็น JSON
        .then(data => {
            // วนลูปผ่านข้อมูลและแสดงใน HTML
            const chkBoxTroubleElement = document.getElementById('chkBoxTrouble1');
            data.forEach(item => {
                // สร้าง element div ใหม่
                const div = document.createElement('div');
                div.classList.add('col');

                // สร้าง element radio button
                const radioDiv = document.createElement('div');
                radioDiv.classList.add('col', 'form-check', 'custom-option', 'custom-option-basic');
                const radioLabel = document.createElement('label');
                radioLabel.classList.add('form-check-label', 'custom-option-content');
                const radioId = `troublecheck${item.mt_id}`; // สร้าง id สำหรับ radio button
                radioLabel.setAttribute('for', radioId);
                radioLabel.innerHTML = `
                    <input name="troublecheck" class="form-check-input" type="radio" value="${item.mt_id}" id="${radioId}" />
                    <span class="custom-option-header">
                        <span class="fw-medium">${item.mt_name_thai}</span>
                    </span>
                `;
                radioDiv.appendChild(radioLabel);
                div.appendChild(radioDiv);
                chkBoxTroubleElement.appendChild(div);
            });
        })
        .catch(error => {
            console.error('เกิดข้อผิดพลาดในการเรียก API:', error);
        });
});

document.addEventListener('DOMContentLoaded', function () {
    // เรียกใช้งาน API
    fetch('http://127.0.0.1/api/Issue_Ticket/chkBox_trouble2')
        .then(response => response.json()) // แปลงข้อมูลเป็น JSON
        .then(data => {
            // วนลูปผ่านข้อมูลและแสดงใน HTML
            const chkBoxTroubleElement = document.getElementById('chkBoxTrouble2');
            data.forEach(item => {
                // สร้าง element div ใหม่
                const div = document.createElement('div');
                div.classList.add('col');

                // สร้าง element radio button
                const radioDiv = document.createElement('div');
                radioDiv.classList.add('col', 'form-check', 'custom-option', 'custom-option-basic');
                const radioLabel = document.createElement('label');
                radioLabel.classList.add('form-check-label', 'custom-option-content');
                const radioId = `troublecheck${item.mt_id}`; // สร้าง id สำหรับ radio button
                radioLabel.setAttribute('for', radioId);
                radioLabel.innerHTML = `
                    <input name="troublecheck2" class="form-check-input" type="radio" value="${item.mt_id}" id="${radioId}" />
                    <span class="custom-option-header">
                        <span class="fw-medium">${item.mt_name_thai}</span>
                    </span>
                    <span class="custom-option-body">
                        <input type="text" class="form-control" id="text${radioId}" placeholder="Enter detail" />
                    </span>
                `;
                radioDiv.appendChild(radioLabel);
                div.appendChild(radioDiv);
                chkBoxTroubleElement.appendChild(div);
            });
        })
        .catch(error => {
            console.error('เกิดข้อผิดพลาดในการเรียก API:', error);
        });
});


document.addEventListener('DOMContentLoaded', function () {
    // เรียกใช้งาน API
    fetch('http://127.0.0.1/api/Issue_Ticket/chkBox_analysis')
        .then(response => response.json()) // แปลงข้อมูลเป็น JSON
        .then(data => {
            // วนลูปผ่านข้อมูลและแสดงใน HTML
            const checkboxAnalyzElement = document.getElementById('checkboxanalyz');
            let divCount = 0; // เพิ่มตัวแปรนับจำนวน div ที่สร้างแล้ว

            data.forEach(item => {
                // สร้าง element div ใหม่
                const div = document.createElement('div');
                div.classList.add('form-check', 'col-lg-6' ,'mt-3');

                // สร้าง element checkbox
                const checkboxInput = document.createElement('input');
                checkboxInput.classList.add('form-check-input');
                checkboxInput.setAttribute('type', 'checkbox');
                checkboxInput.setAttribute('value', item.map_id);
                checkboxInput.setAttribute('id', `Check${item.map_id}`);

                // สร้าง label สำหรับ checkbox
                const checkboxLabel = document.createElement('label');
                checkboxLabel.classList.add('form-check-label');
                checkboxLabel.setAttribute('for', `Check${item.map_id}`);
                checkboxLabel.textContent = item.map_name;

                // เพิ่ม checkboxInput และ checkboxLabel เข้าไปใน div
                div.appendChild(checkboxInput);
                div.appendChild(checkboxLabel);

                // เพิ่ม div เข้าไปใน checkboxAnalyzElement
                checkboxAnalyzElement.appendChild(div);

                // เพิ่มจำนวน div ที่สร้างแล้ว
                divCount++;


            });

            // เพิ่ม input field สำหรับ "อื่นๆ"
            const otherInputDiv = document.createElement('div');
            otherInputDiv.classList.add('form-check');
            const otherInputLabel = document.createElement('label');
            otherInputLabel.classList.add('form-check-label');
            otherInputLabel.setAttribute('for', 'adddtInput');
            const otherInput = document.createElement('input');
            otherInput.classList.add('form-control');
            otherInput.setAttribute('type', 'text');
            otherInput.setAttribute('id', 'adddtInput');
            otherInput.setAttribute('placeholder', 'อื่นๆ กรุณากรอก');
            otherInputDiv.appendChild(otherInputLabel);
            otherInputDiv.appendChild(otherInput);
            checkboxAnalyzElement.appendChild(otherInputDiv);
        })
        .catch(error => {
            console.error('เกิดข้อผิดพลาดในการเรียก API:', error);
        });
});



document.addEventListener('DOMContentLoaded', function () {
    // เรียกใช้งาน API
    fetch('http://127.0.0.1/api/Issue_Ticket/chkBox_delivery')
        .then(response => response.json()) // แปลงข้อมูลเป็น JSON
        .then(data => {
            // วนลูปผ่านข้อมูลและสร้าง checkbox และ input field สำหรับข้อความเพิ่มเติม
            const checkboxDeliveryElement = document.querySelector('.card-body.demo-vertical-spacing.demo-only-element');
            data.forEach(item => {
                // สร้าง element div ใหม่
                const div = document.createElement('div');
                div.classList.add('form-check', 'mt-3');

                // สร้าง element checkbox
                const checkboxInput = document.createElement('input');
                checkboxInput.classList.add('form-check-input');
                checkboxInput.setAttribute('type', 'checkbox');
                checkboxInput.setAttribute('value', item.mde_id);
                checkboxInput.setAttribute('id', `Check-de${item.mde_id}`);

                // สร้าง label สำหรับ checkbox
                const checkboxLabel = document.createElement('label');
                checkboxLabel.classList.add('form-check-label');
                checkboxLabel.setAttribute('for', `Check-de${item.mde_id}`);
                checkboxLabel.textContent = item.mde_name;

                // เพิ่ม checkboxInput และ checkboxLabel เข้าไปใน div
                div.appendChild(checkboxInput);
                div.appendChild(checkboxLabel);

                // เพิ่ม div เข้าไปใน checkboxDeliveryElement
                checkboxDeliveryElement.appendChild(div);

                // หากเป็น checkbox "อุปกรณ์ / เครื่องจักร มีการแก้ไขแบบชั่วคราว ต้องมีการแก้ไขถาวรภายหลังกำหนดการแก้ไขถาวร โดยประมาณ" ให้เพิ่ม input field ด้วยการเช็คสถานะของ checkbox และเพิ่มหรือลบ input field ตามความเหมาะสม
                if (item.mde_id === '1') {
                    checkboxInput.addEventListener('change', function() {
                        const existingAdditionalInput = document.getElementById(`additionalInput${item.mde_id}`);
                        if (this.checked) {
                            if (!existingAdditionalInput) {
                                const additionalInput = document.createElement('input');
                                additionalInput.classList.add('form-control');
                                additionalInput.setAttribute('type', 'text');
                                additionalInput.setAttribute('placeholder', 'โปรดระบุ . . .');
                                additionalInput.setAttribute('id', `additionalInput${item.mde_id}`);
                                div.appendChild(additionalInput);
                            }
                        } else {
                            if (existingAdditionalInput) {
                                div.removeChild(existingAdditionalInput);
                            }
                        }
                    });
                }
            });
        })
        .catch(error => {
            console.error('เกิดข้อผิดพลาดในการเรียก API:', error);
        });
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
    handleNextClick(function() { return true; }, 'next6', 'navs-pills-top-analyze', 'navs-pills-top-required', 'spanreq', getAllRowData);
    handleNextClick(function() { return true; }, 'next7', 'navs-pills-top-prevention', 'navs-pills-top-analyze', 'spananly', uploadImage4);
    handleNextClick(function() { return true; }, 'next8', 'navs-pills-top-delivery', 'navs-pills-top-prevention', 'spanpreven', getAllRowDataPrevention);
    
});

var rowDataArray;

function getAllRowData() {
    var tableRows = document.getElementById('mytable').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    rowDataArray = []; // เก็บในตัวแปร global

    for (var i = 0; i < tableRows.length; i++) {
        var row = tableRows[i];
        var rowData = {};

        rowData['Name'] = row.cells[0].getElementsByTagName('input')[0].value;
        rowData['Maker'] = row.cells[1].getElementsByTagName('input')[0].value;
        rowData['Model'] = row.cells[2].getElementsByTagName('input')[0].value;
        rowData['Type'] = row.cells[3].getElementsByTagName('input')[0].value;
        rowData['Qty'] = row.cells[4].getElementsByTagName('input')[0].value;
        rowData['Stock'] = row.cells[5].getElementsByTagName('input')[0].value;
        rowData['StockQty'] = row.cells[6].getElementsByTagName('input')[0].value;
        rowData['Order'] = row.cells[7].getElementsByTagName('input')[0].value;
        rowData['OrderQty'] = row.cells[8].getElementsByTagName('input')[0].value;
        rowData['Received'] = row.cells[9].getElementsByTagName('input')[0].value;
        rowData['ReceivedQty'] = row.cells[10].getElementsByTagName('input')[0].value;

        rowDataArray.push(rowData);
    }

    console.log(rowDataArray);
    return rowDataArray;
}



var allValues;

function getAllRowDataPrevention()  {
    allValues = [];
  
    // Iterate through each repeated form element
    formRepeater.find("[data-repeater-list='group-a'] [data-repeater-item]").each(function() {
        var formValues = {};
  
        // Flag to determine if all input values are null or empty
        var allValuesNull = true;
  
        // Iterate through each text input field within the repeated form element
        $(this).find(".form-control").each(function() {
            var fieldName = $(this).attr("id");
            var fieldValue = $(this).val().trim(); // Remove leading and trailing whitespaces
  
            // Check if the value is not null or empty
            if (fieldValue !== null && fieldValue !== "") {
                allValuesNull = false;
            }
  
            formValues[fieldName] = fieldValue;
        });
  
        // If any input has a non-null or non-empty value, add the row's values to the array
        if (!allValuesNull) {
            allValues.push(formValues);
        }
    });
  
    // Log or do something with allValues
    console.log(allValues);
}



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
        var TroubleDetail3 = $('#texttroublecheck12').val();
        var TroubleDetail4 = $('#texttroublecheck13').val();


        var TbCheck1 = $('#troublecheck10').prop('checked');
        var TbCheck2 = $('#troublecheck11').prop('checked');
        var TbCheck3 = $('#troublecheck12').prop('checked');
        var TbCheck4 = $('#troublecheck13').prop('checked');

        var TroubleCheckval1 = TbCheck1 ? $('#troublecheck10').val() : '';
        var TroubleCheckval2 = TbCheck2 ? $('#troublecheck11').val() : '';
        var TroubleCheckval3 = TbCheck3 ? $('#troublecheck3').val() : '';
        var TroubleCheckval4 = TbCheck4 ? $('#troublecheck4').val() : '';

        // ------------ Required Parts ---------------
        
        var rowDataArrayString = JSON.stringify(rowDataArray);
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

        // ------------ Required Parts ---------------
        
        var PervenDataArrayString = JSON.stringify(allValues);

        // ------------ End Required Parts ---------------

        // ------------ Delivery Equipment -----------------
        var Detaildelivery = $('#additionalInput1').val();
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


        console.log('RequiredrowDataArray :', rowDataArray);


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

        console.log('PreventionallValues :', PervenDataArrayString);


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


                    formData.append('rowDataArray', rowDataArrayString);


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

                    formData.append('PreventionallValues', PervenDataArrayString);

                    formData.append('Detaildelivery', Detaildelivery);
                    formData.append('deliveryCheckval1', deliveryCheckval1);
                    formData.append('deliveryCheckval2', deliveryCheckval2);
                    formData.append('deliveryCheckval3', deliveryCheckval3);
                    formData.append('deliveryCheckval4', deliveryCheckval4);
                    formData.append('deliveryCheckval5', deliveryCheckval5);
                    formData.append('deliveryCheckval6', deliveryCheckval6);

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
                                    location.reload();

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

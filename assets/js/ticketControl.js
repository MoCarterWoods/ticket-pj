

$(document).ready(function() {
  shDataTable(); // เรียกใช้ฟังก์ชัน shDataTable เมื่อเอกสารพร้อม
});

function shDataTable() {
  // URL of the API
  var apiUrl = 'http://127.0.0.1/api/Ticket_control/show_data';

  // Perform Ajax request
  $.ajax({
    url: apiUrl,
    type: 'GET',
    dataType: 'json',
    success: function (data) {
      var html = "";
      // Loop through the data and append menu items
      for (var i = 0; i < data.length; i++) {
        html += `
          <tr>
            <td class="text-center">${i + 1}</td>
            <td class="text-center">${data[i].ist_line_cd == '' ? `${data[i].ist_area_other}` : `${data[i].ist_line_cd}`}</td>
            <td class="text-center">${data[i].mts_name === null ? '-' : data[i].mts_name}</td>
            <td class="text-center">${data[i].ist_process === null ? '-' : data[i].ist_process}</td>
            <td class="text-center">
              <div class="text-center">${data[i].mjt_name_thai === null ? '-' : data[i].mjt_name_thai}</div>
              <div class="text-center">${data[i].mjt_name_eng === null ? '-' : data[i].mjt_name_eng}</div>
            </td>
            <td class="text-center">
              <div class="text-center"><small class="emp_post text-truncate text-muted">${data[i].ist_request_by}</small></div>
              <div class="text-center">${data[i].ist_type == 1 ? 'APPLICATION' : 'WEBSITE'}</div>
            </td>
            <td class="text-center">
              <div class="d-flex flex-wrap align-items-center">
                <ul class="list-unstyled w-50 me-2 d-flex align-items-center avatar-group mb-0" id="avatarGroup_${i}">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="RATEEPAR" class="avatar pull-up">
                  <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/SST42.jpg" alt="Avatar" onerror="this.onerror=null; this.src='assets/img/avatars/no-avatar.png'">
                </li>
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="RATEEPAR" class="avatar pull-up">
                <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/K0089.jpg" alt="Avatar" onerror="this.onerror=null; this.src='assets/img/avatars/no-avatar.png'">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="RATEEPAR" class="avatar pull-up">
              <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/K0070.jpg" alt="Avatar" onerror="this.onerror=null; this.src='assets/img/avatars/no-avatar.png'">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="RATEEPAR" class="avatar pull-up">
              <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/K0070.jpg" alt="Avatar" onerror="this.onerror=null; this.src='assets/img/avatars/no-avatar.png'">
            </li>
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="RATEEPAR" class="avatar pull-up">
              <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/K0070.jpg" alt="Avatar" onerror="this.onerror=null; this.src='assets/img/avatars/no-avatar.png'">
            </li>
            
                </ul>
              </div>
            </td>
            <td class="text-center">
              <span class="badge bg-label-${data[i].ist_status_flg == 1 ? 'warning' : data[i].ist_status_flg == 3 ? 'info' : data[i].ist_status_flg == 5 ? 'primary' : data[i].ist_status_flg == 7 ? 'success' : data[i].ist_status_flg == 8 ? 'danger' : 'Unknown'}">
                ${data[i].ist_status_flg == 1 ? 'In Progress' : data[i].ist_status_flg == 3 ? 'Wait Accept' : data[i].ist_status_flg == 5 ? 'Wait Edit' : data[i].ist_status_flg == 7 ? 'Wait Approval' : data[i].ist_status_flg == 8 ? 'Approval Deny' : 'Unknown'}
              </span>
            </td>
            <td class="text-center">
            <button type="button" class="btnAccept btn rounded-pill btn-primary"" ${data[i].ist_status_flg == 3 ? '' : 'style="display: none;"'} data-ac-id="${data[i].ist_id}" value="${data[i].ist_status_flg}" id="btnAccept">Accept</button>
            <div class="btn-group">
            <button type="button" class="btn btn-label-danger btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true" ${data[i].ist_status_flg == 5 || data[i].ist_status_flg == 7 || data[i].ist_status_flg == 8 ? '' : 'style="display: none;"'}>Edit</button>
              <ul class="dropdown-menu" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);" data-popper-placement="bottom-start">
                <li><a class="dropdown-item d-flex justify-content-between align-items-center actEquipment" data-bs-toggle="modal" data-bs-target="#mdlEditEquipment" data-id="${data[i].ist_id}">Equipment ${data[i].equipment_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].equipment_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center actProblem" data-bs-toggle="modal" data-bs-target="#mdlProblemcon" data-id="${data[i].ist_id}">Problem Condition ${data[i].ploblem_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].ploblem_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center actJobtype" data-bs-toggle="modal" data-bs-target="#mdlJobtype" data-id="${data[i].ist_id}">Job Type ${data[i].jopType_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].jopType_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center actInspec" data-bs-toggle="modal" data-bs-target="#mdlInspec" data-id="${data[i].ist_id}">Inspection ${data[i].inspection_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].inspection_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li> 
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlTrobles" data-id="${data[i].ist_id}">Troubleshooting ${data[i].troubleshooting_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].troubleshooting_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlRequiredParts" data-id="${data[i].ist_id}">Required Parts ${data[i].rqPart_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].rqPart_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center actAnalyze" data-bs-toggle="modal" data-bs-target="#mdlAnalyze" data-id="${data[i].ist_id}">Analyze Problem ${data[i].analyze_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].analyze_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlPrevention" data-id="${data[i].ist_id}">Prevention ${data[i].prevention_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].prevention_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item  d-flex justify-content-between align-items-center actDelivery" data-bs-toggle="modal" data-bs-target="#mdlDelivery" data-id="${data[i].ist_id}">Delivery ${data[i].delivery_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].delivery_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item">Submit</a></li>
              </ul>
            </div>
            <button type="button" class="btnCancle btn rounded-pill btn-secondary" data-bs-toggle="modal" data-bs-target="#mdlCancle" ${data[i].ist_status_flg == 3 || data[i].ist_status_flg == 5 || data[i].ist_status_flg == 7 || data[i].ist_status_flg == 8 ? '' : 'style="display: none;"'} data-cc-id="${data[i].ist_id}" value="${data[i].ist_status_flg}" >Cancle</button>
          </td>
          
          </tr>
        `;

        var avatarHtml
        if (i == i) {
           avatarHtml += `
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="${data[i].swa_fristname} ${data[i].swa_lastname}" class="avatar pull-up">
            <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/${data[i].swa_emp_code}.jpg" alt="Avatar" onerror="this.onerror=null; this.src='assets/img/avatars/no-avatar.png'">
          </li>
        `;
        $(`#avatarGroup_${i}`).html(avatarHtml);
        
        }
      }

      // ทำลาย DataTable ที่มีอยู่ก่อนที่จะปรับปรุงเนื้อหาของตาราง
      $('#tblTicketControl').DataTable().destroy();

      // ปรับปรุงเนื้อหาของตารางและเริ่มใช้ DataTable ใหม่
      $("#tbody").html(html).promise().done(() => {
        $("#tblTicketControl").DataTable({ scrollX: true });
        $("#loadingPage").attr("style", "display: none;");
      });
    },
    error: function (xhr, status, error) {
      console.error('Error:', error);
    }
  });
}

function generateAvatarHTML(data, i) {
  var avatarHtml = "";

  // Check if 'avatar' data exists and has length greater than 0
  if (data[i].avatar && data[i].avatar.length > 0) {
    for (var j = 0; j < data[i].avatar.length; j++) {
     

      // Generate HTML for avatar
      avatarHtml += `
        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="${data[i].avatar[j].swa_fristname} ${data[i].avatar[j].swa_lastname}" class="avatar pull-up">
          <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/${data[i].avatar[j].swa_emp_code}.jpg" alt="Avatar" onerror="this.onerror=null; this.src='assets/img/avatars/no-avatar.png'">
        </li>
      `;
    }
  }
  return avatarHtml;
}




    //-------------------------- Accept ticket ----------------------------------

    $(document).on('click', '.btnAccept', function () {
      const acId = $(this).data('ac-id');
      var newStatus = $(this).closest('td').find('.btnAccept').val();
  
      if (newStatus == 3) {
          newStatus = 5
      Swal.fire({
          title: 'Are you Sure',
          text: "You want to Accept ?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Accept it!'
      }).then((result) => {
          if (result.isConfirmed) {
              var url = API_URL + "Ticket_control/accept_ticket";
              $.ajax({
                  url: base_url('TicketControl/callApiAccept?url=') + url,
                  type: 'POST',
                  data: {
                      acId: acId,
                      newStatus: newStatus,
                  },
                  dataType: 'json',
                  success: function (response) {
                      if (response === true) {                        
                          Swal.fire({
                              icon: 'success',
                              title: 'Success!',
                              html: 'Accept ticket Success!',
                              timer: 2500,
                          }).then(() => {
                              shDataTable();
                          });
                      } else if (response === false) {
                          Swal.fire({
                              icon: 'warning',
                              title: 'Warning!',
                              html: 'Accept ticket Fail',
                              timer: 2500,
                          });
                      }
                  },
                  error: function (error) {
                      // Handle error
                  }
              });
          }
      });
  }
  });
  


     //-------------------------- Cancle Details ----------------------------------
     $(document).on('click', '.btnCancle', function () {
      const ccID = $(this).data('cc-id');
  
      $('#mdlCancle').on('hidden.bs.modal', function () {
          $('#CancleDetail').val('');
      });
  
      $('#btnSaveDetailCancle').on('click', function () {
          var DetailCancle = $('#CancleDetail').val();
          var newStatus = 0;
  
          if (DetailCancle == '') {
              Swal.fire({
                  icon: 'warning',
                  title: 'Oops...!',
                  html: 'Please enter Detail.',
              });
          } else {
              Swal.fire({
                  title: 'Are you sure?',
                  text: 'Do you want to save Detail?',
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, save!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      var url = API_URL + 'Ticket_control/cancel_ticket';
                      const formData = new FormData()
                      formData.append('DetailCancle', DetailCancle);
                      formData.append('newStatus', newStatus);
                      formData.append('ccID', ccID);
  
                      $.ajax({
                          url: base_url('TicketControl/callApiCancel?url=') + url,
                          type: 'POST',
                          data: formData,
                          processData: false,
                          contentType: false,
                          cache: false,
                          dataType: 'json',
                          success: function (res) {
                              if (res == 1) {
                                  Swal.fire({
                                      icon: 'success',
                                      title: 'Success!',
                                      html: 'Cancel ticket success',
                                      timer: 2500,
                                  }).then(() => {
                                    $('#mdlCancle').modal('hide')
                                      shDataTable();
                                  });
                              } else if (res == 2) {
                                  Swal.fire({
                                      icon: 'warning',
                                      title: 'Oops...',
                                      text: 'Cancel ticket failed',
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
  
  
  var selpdDiv = $('#selpd');
  var selotherDiv = $('#selother');

//------------------------------ Show Equipment Edit -------------------------------

$(document).ready(function () {
    
  var dropdown = $('#selArea');
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
      } else {
          selpdDiv.hide();
          selotherDiv.hide();
          resetUI();
      }
  });
});


populateDropdown();

function populateDropdown() {
    const apiUrlselProduction = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineMst';
    var selProduction = $('#selProduction');
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
   getLine(pd,line)
});
function getLine(pd) {
  let getPD = pd
  const apiUrlselLine = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineFormPD';
  var selLine = $('#selLine');
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
}


// ----=- show Equipment --------
var data_ist_eq;
var ist_Id;

$(document).on('click', '.actEquipment', function () {


ist_Id = $(this).attr('data-id');

var url = API_URL + "Ticket_control/show_equipment";
$.ajax({
// url: base_url('ManageAccount/callApiEditAccount'),
url: API_URL + "Ticket_control/show_equipment",
type: 'POST',
data: {
  ist_Id: ist_Id,
},
dataType: 'json',
success: (response) => {
console.log(response);
  getLine(response.data.ist_pd)
    data_ist_eq = response.data
   if(response.data.ist_pd == ''){
      $('#selArea').val('2');
      selotherDiv.show();
      selpdDiv.hide();
      $('#inpOther').val(response.data.ist_area_other)
   }else{
      $('#selArea').val('1');
      selpdDiv.show();
      selotherDiv.hide();
      $('#selProduction').val(response.data.ist_pd)
      $('#selLine').val(response.data.ist_line_cd)

   }

 
 
      
        $('#inpProcess').val(response.data.ist_process)
        $('#selTooling').val(response.data.ist_tool)
        $('#addMaker').val(response.data.ist_maker)
        $('#addModel').val(response.data.ist_model)

}
});
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
          $('#SelProblem').append('<option value="">Choose problem condition</option>');

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


// ----=- show problem --------
$(document).on('click', '.actProblem', function () {
  // เคลียร์ Dropzone ก่อนที่จะดึงข้อมูลใหม่

  ist_Id = $(this).attr('data-id');

    // Initialize Dropzone
    e = `<div class="dz-preview dz-file-preview">
    <div class="dz-details">
      <div class="dz-thumbnail">
        <img data-dz-thumbnail>
        <span class="dz-nopreview">No preview</span>
        <div class="dz-success-mark"></div>
        <div class="dz-error-mark"></div>
        <div class="dz-error-message"><span data-dz-errormessage></span></div>
        <div class="progress">
          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
        </div>
      </div>
      <div class="dz-filename" data-dz-name></div>
      <div class="dz-size" data-dz-size></div>
    </div>
    </div>`
      var myDropzone = new Dropzone("#myDropzone", {
        previewTemplate: e,
        url: '/upload', // replace with your upload endpoint
        acceptedFiles: 'image/*',
        maxFiles: 3,
        init: function () {
          this.on("addedfile", function () {
            if (this.files.length > this.options.maxFiles) {
              this.removeFile(this.files[0]); // Remove the first file if more than maxFiles
            }
          });
        },
        addRemoveLinks: true,
        dictDefaultMessage: 'Drop your image here or click to upload',
        parallelUploads: 1,
      });
    
      fetchExistingImages();

      function fetchExistingImages() {

  var url = API_URL + "Ticket_control/show_problem";
  $.ajax({
      url: url,
      type: 'POST',
      data: {
          ist_Id: ist_Id,
      },
      dataType: 'json',
      success: (response) => {
          data_ist_pb = response.data;


          $('#SelProblem').val('');
          $('#mdetailprdlm').val('');
          $('#customCheckpb7').prop('checked', false);
          $('#customCheckpb8').prop('checked', false);
          $('#customCheckpb9').prop('checked', false);

          // Iterate through the data array
          response.data.forEach(problem => {
              // Check the checkbox based on mpc_id value
              if (problem.mpc_id === "7") {
                  $('#customCheckpb7').prop('checked', true);
              } else if (problem.mpc_id === "8") {
                  $('#customCheckpb8').prop('checked', true);
              } else if (problem.mpc_id === "9") {
                  $('#customCheckpb9').prop('checked', true);
              }
          });

          // Update dropdown and detail textarea if needed
          var validProblem = response.data.find(problem => parseInt(problem.mpc_id) >= 1 && parseInt(problem.mpc_id) <= 6);
          if (validProblem) {
              $('#SelProblem').val(validProblem.mpc_id);
              $('#mdetailprdlm').val(validProblem.ipc_detail);
          }
     
          data_image = response.data_image;
          for (let i = 1; i <= 3; i++) {
            var imageName = data_image[0]['ipc_pic_' + i];
             
                // console.log(data_image[0].imageName);
                // console.log(data_image[0].ipc_pic_1);
                if (imageName != '') {
                  console.log(imageName);
                  var imagePath = base_url(`${data_ist_pb[0].ipc_path}${imageName}`);
                  // console.log(imageUrl);
                  let mockFile = { name: `${imageName}`, size: 12345 };
                  let callback = null; // Optional callback when it's done
                  let crossOrigin = null; // Added to the img tag for crossOrigin handling
                  let resizeThumbnail = true; // Tells Dropzone whether it should resize the image first
                  myDropzone.displayExistingFile(mockFile, imagePath, callback, crossOrigin, resizeThumbnail);
                }

  
          }
     

        }
      
  });
}
});



//-------------------------- Save Problem ----------------------------

$('#btnSaveProblem').on('click', function () {

  var ProblemSel = $('#SelProblem').val();
  var ProblemDetail = $('#mdetailprdlm').val();

  var PbCheck1 = $('#customCheckpb7').prop('checked') ? $('#customCheckpb7').val() : '';
  var PbCheck2 = $('#customCheckpb8').prop('checked') ? $('#customCheckpb8').val() : '';
  var PbCheck3 = $('#customCheckpb9').prop('checked') ? $('#customCheckpb9').val() : '';


  if (ProblemSel == '') {
      Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Please select a problem!'
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
              var url = API_URL + 'Ticket_control/save_problem';
              const formData = new FormData()
              formData.append('ProblemSel', ProblemSel);
              formData.append('ProblemDetail', ProblemDetail);
              formData.append('PbCheck1', PbCheck1);
              formData.append('PbCheck2', PbCheck2);
              formData.append('PbCheck3', PbCheck3);
              formData.append('ist_Id', ist_Id);

              $.ajax({
                  url: base_url('TicketControl/callApiSaveProblem'),
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
                            html: 'Edit Problem success',
                            timer: 2500,
                        }).then(() => {
                            $('#mdlProblemcon').modal('hide');
                            shDataTable();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: 'A system error has occurred.',
                        });
                    }
                },
              });
          }
      });
  }
});




// ----=- show Jobtype --------
var data_ist_jt;
var ist_Id;
$(document).on('click', '.actJobtype', function () {
  ist_Id = $(this).attr('data-id');

  var url = API_URL + "Ticket_control/show_jobtype";
  $.ajax({
    url: url,
    type: 'POST',
    data: {
      ist_Id: ist_Id,
    },
    dataType: 'json',
    success: (response) => {
      data_ist_jt = response.data;

      // Clear previous selections
      $('input[name="customRadioIcon"]').prop('checked', false);

      // Check the radio button based on mjt_id
      if (response.data[0].mjt_id === '1') {
        $('#customRadioIcon1').prop('checked', true);
      } else if (response.data[0].mjt_id === '2') {
        $('#customRadioIcon2').prop('checked', true);
      } else if (response.data[0].mjt_id === '3') {
        $('#customRadioIcon3').prop('checked', true);
      } else if (response.data[0].mjt_id === '4') {
        $('#customRadioIcon4').prop('checked', true);
      }
    }
  });
});


//-------------------------- Save jobtype ----------------------------

$('#btnSaveJobtype').on('click', function () {
  // เก็บค่า radio ที่ถูกเลือก
  var Jtradio1 = $('#customRadioIcon1').prop('checked') ? $('#customRadioIcon1').val() : '';
  var Jtradio2 = $('#customRadioIcon2').prop('checked') ? $('#customRadioIcon2').val() : '';
  var Jtradio3 = $('#customRadioIcon3').prop('checked') ? $('#customRadioIcon3').val() : '';
  var Jtradio4 = $('#customRadioIcon4').prop('checked') ? $('#customRadioIcon4').val() : '';

  // ตรวจสอบค่าที่ได้
  console.log("Jtradio1: " + Jtradio1);
  console.log("Jtradio2: " + Jtradio2);
  console.log("Jtradio3: " + Jtradio3);
  console.log("Jtradio4: " + Jtradio4);
  console.log("ist_Id: " + ist_Id);

  // ตรวจสอบว่ามี radio ที่ถูกเลือกหรือไม่
  if (Jtradio1 || Jtradio2 || Jtradio3 || Jtradio4) {
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
              var url = API_URL + 'Ticket_control/save_jobtype';
              const formData = new FormData()
              formData.append('Jtradio1', Jtradio1);
              formData.append('Jtradio2', Jtradio2);
              formData.append('Jtradio3', Jtradio3);
              formData.append('Jtradio4', Jtradio4);
              formData.append('ist_Id', ist_Id);

              $.ajax({
                  url: base_url('TicketControl/callApiSaveJobtype'),
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
                            html: 'Edit jobtype success',
                            timer: 2500,
                        }).then(() => {
                            $('#mdlJobtype').modal('hide');
                            shDataTable();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: 'A system error has occurred.',
                        });
                    }
                },
              });
          }
      });
  }
});




// ----=- show Inspection --------
$(document).on('click', '.actInspec', function () {
  ist_Id = $(this).attr('data-id');

  var url = API_URL + "Ticket_control/show_inspection";
  $.ajax({
      url: url,
      type: 'POST',
      data: {
          ist_Id: ist_Id,
      },
      dataType: 'json',
      success: (response) => {
        data_ist_in = response.data;

          // Clear previous selections
          $('#SelInspec').val('');
          $('#mdetailinsprc').val('');
          $('#ChkInspec6').prop('checked', false);
          $('#ChkInspec7').prop('checked', false);
          $('#ChkInspec8').prop('checked', false);

          // Iterate through the data array
          response.data.forEach(Inspec => {
              // Check the checkbox based on mim_id value
              if (Inspec.mim_id === "6") {
                  $('#ChkInspec6').prop('checked', true);
              } else if (Inspec.mim_id === "7") {
                  $('#ChkInspec7').prop('checked', true);
              } else if (Inspec.mim_id === "8") {
                  $('#ChkInspec8').prop('checked', true);
              }
          });

          // Update dropdown and detail textarea if needed
          var validInspec = response.data.find(Inspec => parseInt(Inspec.mim_id) >= 1 && parseInt(Inspec.mim_id) <= 5);
          if (validInspec) {
              $('#SelInspec').val(validInspec.mim_id);
              $('#mdetailinsprc').val(validInspec.iim_detail);
          }
      }
  });
});

//-------------------------- Save Inspection ----------------------------

$('#btnSaveInspec').on('click', function () {

  var InspecSel = $('#SelInspec').val();
  var InspecDetail = $('#mdetailinsprc').val();

  var InsCheck1 = $('#ChkInspec6').prop('checked') ? $('#ChkInspec6').val() : '';
  var InsCheck2 = $('#ChkInspec7').prop('checked') ? $('#ChkInspec7').val() : '';
  var InsCheck3 = $('#ChkInspec8').prop('checked') ? $('#ChkInspec8').val() : '';


  if (InspecSel == '') {
      Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Please select a inspection!'
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
              var url = API_URL + 'Ticket_control/save_inspection';
              const formData = new FormData()
              formData.append('InspecSel', InspecSel);
              formData.append('InspecDetail', InspecDetail);
              formData.append('InsCheck1', InsCheck1);
              formData.append('InsCheck2', InsCheck2);
              formData.append('InsCheck3', InsCheck3);
              formData.append('ist_Id', ist_Id);

              $.ajax({
                  url: base_url('TicketControl/callApiSaveInspection'),
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
                            html: 'Edit Inspection success',
                            timer: 2500,
                        }).then(() => {
                            $('#mdlInspec').modal('hide');
                            shDataTable();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: 'A system error has occurred.',
                        });
                    }
                },
              });
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
          $('#SelInspec').append('<option value="">Choose Inspection Method</option>');

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


// ----=- show Analyze --------
$(document).on('click', '.actAnalyze', function () {
  ist_Id = $(this).attr('data-id');

  var url = API_URL + "Ticket_control/show_analyze";
  $.ajax({
    url: url,
    type: 'POST',
    data: {
      ist_Id: ist_Id,
    },
    dataType: 'json',
    success: (response) => {
      data_ist_anl = response.data;

      // Clear previous selections
      $('#mdetailAnalyz').val('');
      $('.form-check-input').prop('checked', false);
      $('#adddtInput').val('');

      // Iterate through the data array
      response.data.forEach(Analyze => {
        // Check if map_id is not null
        if (Analyze.map_id !== null) {
          // Check the checkbox based on map_id value
          switch (Analyze.map_id) {
            case "1":
              $('#Check1').prop('checked', true);
              break;
            case "2":
              $('#Check2').prop('checked', true);
              break;
            case "3":
              $('#Check3').prop('checked', true);
              break;
            case "4":
              $('#Check4').prop('checked', true);
              break;
            case "5":
              $('#Check5').prop('checked', true);
              break;
            case "6":
              $('#Check6').prop('checked', true);
              break;
            case "7":
              $('#Check7').prop('checked', true);
              break;
            case "8":
              $('#Check8').prop('checked', true);
              break;
            case "9":
              $('#Check9').prop('checked', true);
              break;
            case "10":
              $('#Check10').prop('checked', true);
              break;
            case "11":
              $('#Check11').prop('checked', true);
              // Check if iap_detail exists before setting the value
              if (Analyze.iap_detail !== null) {
                $('#adddtInput').val(Analyze.iap_detail);
              }
              break;
            default:
              break;
          }
        } else {
          // Set #mdetailAnalyz value if map_id is null
          $('#mdetailAnalyz').val(Analyze.iap_detail);
        }
      });
    }
  });
});




//-------------------------- Save Analyze ----------------------------

$('#btnSaveAnalyz').on('click', function () {

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
  var Mdetail = $('#mdetailAnalyz').val();


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



  if (!Checked1 && !Checked2 && !Checked3 && !Checked4 && !Checked5 && !Checked6 && !Checked7 && !Checked8 && !Checked9 && !Checked10 && !Checked11) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please select an analyze!'
    });
} else if (Checked5 && !Checked6 && !Checked7 && !Checked8) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please select at least one option from Checked6, Checked7, Checked8!'
    });
} else if (Checked11 && Detailcheck11.trim() === '') {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please enter detail for the last option!'
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
              var url = API_URL + 'Ticket_control/save_analyze';
              const formData = new FormData()
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
              formData.append('Mdetail', Mdetail);
              formData.append('ist_Id', ist_Id);

              $.ajax({
                  url: base_url('TicketControl/callApiSaveAnalyze'),
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
                            html: 'Edit Analyze success',
                            timer: 2500,
                        }).then(() => {
                            $('#mdlAnalyze').modal('hide');
                            shDataTable();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: 'A system error has occurred.',
                        });
                    }
                },
              });
          }
      });
  }
});


// ----=- show Delivery --------
var data_delivery = [];
var ist_Id;

$(document).on('click', '.actDelivery', function () {
  ist_Id = $(this).attr('data-id');

  var url = API_URL + "Ticket_control/show_delivery";
  $.ajax({
    url: url,
    type: 'POST',
    data: {
      ist_Id: ist_Id,
    },
    dataType: 'json',
    success: (response) => {
      data_delivery = response.data;

      // Clear previous selections
      $('.form-check-input').prop('checked', false);
      $('#additionalInput1').val('');

      response.data.forEach(Delivery => {

        if (Delivery.mde_id !== null) {

          switch (Delivery.mde_id) {
            case "1":
              $('#Check-de1').prop('checked', true);
              $('#additionalInput1').val(Delivery.ide_detail);
              break;
            case "2":
              $('#Check-de2').prop('checked', true);
              break;
            case "3":
              $('#Check-de3').prop('checked', true);
              break;
            case "4":
              $('#Check-de4').prop('checked', true);

              if (Delivery.ide_detail !== null) {
                $('#additionalInput1').val(Delivery.ide_detail);
              }
              break;
            case "5":
              $('#Check-de5').prop('checked', true);
              break;
            case "6":
              $('#Check-de6').prop('checked', true);
              break;
            default:
              break;
          }
        } else {

        }
      });
    }
  });
});

//-------------------------- Save Delivery ----------------------------

$('#btnSaveDelivery').on('click', function () {

  var Checked1 = $('#Check-de1').prop('checked');
  var Checked2 = $('#Check-de2').prop('checked');
  var Checked3 = $('#Check-de3').prop('checked');
  var Checked4 = $('#Check-de4').prop('checked');
  var Checked5 = $('#Check-de5').prop('checked');
  var Checked6 = $('#Check-de6').prop('checked');


  var Detailcheck11 = $('#additionalInput1').val();


  var Checkval1 = Checked1 ? $('#Check1').val() : '';
  var Checkval2 = Checked2 ? $('#Check2').val() : '';
  var Checkval3 = Checked3 ? $('#Check3').val() : '';
  var Checkval4 = Checked4 ? $('#Check4').val() : '';
  var Checkval5 = Checked5 ? $('#Check5').val() : '';
  var Checkval6 = Checked6 ? $('#Check6').val() : '';




  if (!Checked1 && !Checked2 && !Checked3 && !Checked4 && !Checked5 && !Checked6) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please select an delivery!'
    });
} else if (Checked1 && Detailcheck11.trim() === '') {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please enter detail for the first option!'
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
              var url = API_URL + 'Ticket_control/save_delivery';
              const formData = new FormData()
              formData.append('Checkval1', Checkval1);
              formData.append('Checkval2', Checkval2);
              formData.append('Checkval3', Checkval3);
              formData.append('Checkval4', Checkval4);
              formData.append('Checkval5', Checkval5);
              formData.append('Checkval6', Checkval6);
              formData.append('Detailcheck11', Detailcheck11);
              formData.append('ist_Id', ist_Id);

              $.ajax({
                  url: base_url('TicketControl/callApiSaveDelivery'),
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
                            html: 'Edit Delivery success',
                            timer: 2500,
                        }).then(() => {
                            $('#mdlDelivery').modal('hide');
                            shDataTable();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: 'A system error has occurred.',
                        });
                    }
                },
              });
          }
      });
  }
});


// ----------------------------- loop ceckbox -----------------------------
document.addEventListener('DOMContentLoaded', function() {
  // Fetch data from API and create checkboxes
  $.ajax({
      url: 'http://127.0.0.1/api/Ticket_control/chkBox_problem',
      type: 'GET',
      dataType: 'json',
      success: function(response) {
          response.forEach(function(item) {
              var checkboxHtml = `
              <div class="col">
                  <div class="form-check custom-option custom-option-basic">
                      <label class="form-check-label custom-option-content" for="customCheckpb${item.mpc_id}">
                          <input class="form-check-input" type="checkbox" value="${item.mpc_id}" id="customCheckpb${item.mpc_id}" />
                          <span class="custom-option-header">
                              <span class="h5 mb-0">${item.mpc_name_eng}</span>
                          </span>
                          <span class="custom-option-body">
                              <small>${item.mpc_name_thai}</small>
                          </span>
                      </label>
                  </div>
              </div>`;
              $('#checkboxPb').append(checkboxHtml);
          });
      },
      error: function(xhr, status, error) {
          console.error('Error fetching checkbox data:', error);
      }
  });
});


document.addEventListener('DOMContentLoaded', function() {
  // Fetch data from API and create radio buttons
  $.ajax({
      url: 'http://127.0.0.1/api/Ticket_control/radio_jobtype',
      type: 'GET',
      dataType: 'json',
      success: function(response) {
          response.forEach(function(item, index) {
              if (index % 2 === 0) {
                  // Create a new row for every even index
                  $('#modalBodyJobtype').append(`<div class="row justify-content-center mt-2" id="row${index / 2}"></div>`);
              }
              var radioHtml = `
              <div class="col-md-6">
                  <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="customRadioIcon${item.mjt_id}">
                          <span class="custom-option-body">
                              <i class='bx bx-wrench'></i>
                              <span class="custom-option-title">${item.mjt_name_thai}</span>
                              <small>${item.mjt_name_eng}</small>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="${item.mjt_id}" id="customRadioIcon${item.mjt_id}" />
                      </label>
                  </div>
              </div>`;
              $(`#row${Math.floor(index / 2)}`).append(radioHtml);
          });
      },
      error: function(xhr, status, error) {
          console.error('Error fetching radio button data:', error);
      }
  });
});


document.addEventListener('DOMContentLoaded', function() {
  // Fetch data from API and create checkboxes
  $.ajax({
      url: 'http://127.0.0.1/api/Ticket_control/chkBox_inspection',
      type: 'GET',
      dataType: 'json',
      success: function(response) {
          response.forEach(function(item) {
              var checkboxHtml = `
              <div class="col-6">
                  <div class="form-check custom-option custom-option-basic">
                      <label class="form-check-label custom-option-content" for="ChkInspec${item.mim_id}">
                          <input class="form-check-input" type="checkbox" value="${item.mim_id}" id="ChkInspec${item.mim_id}" />
                          <span class="custom-option-header">
                              <span class="fw-medium">${item.mim_name_thai}</span>
                          </span>
                          <span class="custom-option-body">
                              <small>${item.mim_name_eng}</small>
                          </span>
                      </label>
                  </div>
              </div>`;
              $('#checkboxInspec').append(checkboxHtml);
          });
      },
      error: function(xhr, status, error) {
          console.error('Error fetching checkbox data:', error);
      }
  });
});

document.addEventListener('DOMContentLoaded', function() {
  // Fetch data from API and create checkboxes
  $.ajax({
      url: 'http://127.0.0.1/api/Issue_Ticket/chkBox_trouble1',
      type: 'GET',
      dataType: 'json',
      success: function(response) {
          response.forEach(function(item) {
              var checkboxHtml = `
              <div class="col form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content" for="chkTrob${item.mt_id}">
                      <input name="troublecheck1" class="form-check-input" type="radio" value="${item.mt_detail}" id="chkTrob${item.mt_id}" />
                      <span class="custom-option-header">
                          <span class="fw-medium">${item.mt_name_thai}</span>
                      </span>
                  </label>
              </div>`;
              $('#checkboxTrob1').append(checkboxHtml);
          });
      },
      error: function(xhr, status, error) {
          console.error('Error fetching checkbox data:', error);
      }
  });
});

document.addEventListener('DOMContentLoaded', function() {
  // Fetch data from API and create checkboxes with input text
  $.ajax({
      url: 'http://127.0.0.1/api/Issue_Ticket/chkBox_trouble2',
      type: 'GET',
      dataType: 'json',
      success: function(response) {
          response.forEach(function(item) {
              var checkboxHtml = `
              <div class="col form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content" for="chkTrob${item.mt_id}">
                      <input name="troublecheck2" class="form-check-input" type="radio" value="${item.mt_detail}" id="chkTrob${item.mt_id}" />
                      <span class="custom-option-header">
                          <span class="fw-medium">${item.mt_name_thai}</span>
                      </span>
                      <span class="custom-option-body">
                          <input type="text" class="form-control">
                      </span>
                  </label>
              </div>`;
              $('#checkboxTrob2').append(checkboxHtml);
          });
      },
      error: function(xhr, status, error) {
          console.error('Error fetching checkbox data:', error);
      }
  });
});


document.addEventListener('DOMContentLoaded', function() {
  // Fetch data from API and create checkboxes
  $.ajax({
      url: 'http://127.0.0.1/api/Issue_Ticket/chkBox_analysis',
      type: 'GET',
      dataType: 'json',
      success: function(response) {
          var checkboxesHtml = '';
          response.forEach(function(item, index) {
              checkboxesHtml += `
              <div class="col-md-6">
                  <div class="form-check mt-3">
                      <input class="form-check-input" type="checkbox" value="${item.map_id}" id="Check${item.map_id}">
                      <label class="form-check-label" for="Check${item.map_id}"> ${item.map_name} </label>
                      ${item.map_id === '11' ? '<input type="text" class="form-control mt-2" id="adddtInput" placeholder="อื่นๆ (กอรกข้อมูล)" for="Check11" style="margin-left: -25px;padding: 10px;">' : ''}
                  </div>
              </div>`;
              if ((index + 1) % 2 === 0 || index === response.length - 1) {
                  $('#checkAnalyze').append('<div class="row">' + checkboxesHtml + '</div>');
                  checkboxesHtml = '';
              }
          });
      },
      error: function(xhr, status, error) {
          console.error('Error fetching checkbox data:', error);
      }
  });
});


document.addEventListener('DOMContentLoaded', function () {
  // เรียกใช้งาน API
  fetch('http://127.0.0.1/api/Issue_Ticket/chkBox_delivery')
      .then(response => response.json()) // แปลงข้อมูลเป็น JSON
      .then(data => {
          // วนลูปผ่านข้อมูลและสร้าง checkbox และ input field สำหรับข้อความเพิ่มเติม
          const checkboxDeliveryElement = document.querySelector('#checkDeliveryeq');
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

              // หากเป็น checkbox "อุปกรณ์ / เครื่องจักร มีการแก้ไขแบบชั่วคราว ต้องมีการแก้ไขถาวรภายหลังกำหนดการแก้ไขถาวร โดยประมาณ" ให้เพิ่ม input field ตรงที่นี่
              if (item.mde_id === '1') {
                  const additionalInput = document.createElement('input');
                  additionalInput.classList.add('form-control');
                  additionalInput.setAttribute('type', 'text');
                  additionalInput.setAttribute('placeholder', 'โปรดระบุ . . .');
                  additionalInput.setAttribute('id', `additionalInput${item.mde_id}`);
                  div.appendChild(additionalInput);
              }

              // เพิ่ม div เข้าไปใน checkboxDeliveryElement
              checkboxDeliveryElement.appendChild(div);
          });
      })
      .catch(error => {
          console.error('เกิดข้อผิดพลาดในการเรียก API:', error);
      });
});

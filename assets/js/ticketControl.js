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
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlProblemcon" data-id="${data[i].ist_id}">Problem Condition ${data[i].ploblem_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].ploblem_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlJobtype" data-id="${data[i].ist_id}">Job Type ${data[i].jopType_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].jopType_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlInspec" data-id="${data[i].ist_id}">Inspection ${data[i].inspection_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].inspection_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li> 
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlTrobles" data-id="${data[i].ist_id}">Troubleshooting ${data[i].troubleshooting_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].troubleshooting_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlRequiredParts" data-id="${data[i].ist_id}">Required Parts ${data[i].rqPart_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].rqPart_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlAnalyze" data-id="${data[i].ist_id}">Analyze Problem ${data[i].analyze_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].analyze_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlPrevention" data-id="${data[i].ist_id}">Prevention ${data[i].prevention_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].prevention_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                <li><a class="dropdown-item  d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#mdlDelivery" data-id="${data[i].ist_id}">Delivery ${data[i].delivery_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : data[i].delivery_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
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

}
});
});
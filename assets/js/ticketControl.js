

$(document).ready(function() {
  shDataTable(); // เรียกใช้ฟังก์ชัน shDataTable เมื่อเอกสารพร้อม
});
$('#selStartTime, #selEndTime, #selStatus').change(function() {
    $("#loadingPage").css("display", "");

    shDataTable();
});


function shDataTable() {
    var selStatus = $('#selStatus').val();
    var url = API_URL + 'Ticket_control/show_data';
    const formData = new FormData();
    formData.append('selStatus', selStatus);

    $.ajax({
        url: base_url('TicketControl/callApiShowData?url=') + url,
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
        success: function(data) {
            var html = "";
            // Loop through the data and append menu items
            data.forEach(function(item, index) {
                var avatarHtml = ""; // Initialize avatar HTML
                if (item.swa_emp_code !== null) { // Check if swa_emp_code is not null
                  var swaEmpCodes = item.swa_emp_code ? item.swa_emp_code.split(',') : []; // Split swa_emp_code by comma or initialize as an empty array if it's null or empty
                  var swaFirstNames = item.swa_fristname ? item.swa_fristname.split(',') : []; // Split swa_fristname by comma or initialize as an empty array if it's null or empty
              
                  for (var k = 0; k < Math.min(4, swaEmpCodes.length); k++) {
                      var empCode = swaEmpCodes[k].trim(); // Remove any leading or trailing whitespace
                      var firstName = swaFirstNames[k] ? swaFirstNames[k].trim() : ''; // Remove any leading or trailing whitespace for the first name
              
                      if (empCode) { // Check if the employee code is not empty
                          avatarHtml += `
                          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="${empCode}" class="avatar pull-up">
                                          <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/${empCode}.jpg" alt="Avatar" onerror="this.onerror=null; this.src='http://192.168.161.219/ticketMaintenance/assets/img/avatars/no-avatar.png'">
                                      </li>
                          `;
                      }
                  }
              
                  // Check if there are more than 4 avatars
                  if (swaEmpCodes.length > 4) {
                      const remainingCount = swaEmpCodes.length - 4;
                      avatarHtml += `
                          <li style="font-size: 1.5rem; padding-left: 15px;">
                              <span>+${remainingCount}</span>
                          </li>
                      `;
                  }
              }

                html += `
                <tr>
                    <td class="text-center">${index + 1}</td>
                    <td class="text-center">${item.ist_line_cd == '' ? `${item.ist_area_other}` : `${item.ist_line_cd}`}</td>
                    <td class="text-center">${item.mts_name === null ? '-' : item.mts_name}</td>
                    <td class="text-center">
                        <div class="text-center">${item.mjt_name_thai === null ? '-' : item.mjt_name_thai}</div>
                        <div class="text-center">${item.mjt_name_eng === null ? '-' : item.mjt_name_eng}</div>
                    </td>
                    <td class="text-center">
                        <div class="text-center"><small class="emp_post text-truncate text-muted">${item.ist_request_by}</small></div>
                        <div class="text-center">${item.ist_type == 1 ? 'APPLICATION' : 'WEBSITE'}</div>
                    </td>
                    <td class="text-center">
                        <div class="d-flex flex-wrap align-items-center">
                            <ul class="list-unstyled w-50 me-2 d-flex align-items-center avatar-group mb-0" id="avatarGroup_${index}">
                                ${avatarHtml} <!-- Insert avatar HTML here -->
                            </ul>
                        </div>
                    </td>
                    <td class="text-center">
                        <span class="badge bg-label-${item.ist_status_flg == 1 ? 'warning' : item.ist_status_flg == 3 ? 'info' : item.ist_status_flg == 5 ? 'primary' : item.ist_status_flg == 7 ? 'success' : item.ist_status_flg == 8 ? 'danger' : 'Unknown'}">
                            ${item.ist_status_flg == 1 ? 'In Progress' : item.ist_status_flg == 3 ? 'Wait Accept' : item.ist_status_flg == 5 ? 'Wait Edit' : item.ist_status_flg == 7 ? 'Wait Approval' : item.ist_status_flg == 8 ? 'Approval Deny' : 'Unknown'}
                        </span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btnAccept btn rounded-pill btn-primary" ${item.ist_status_flg == 3 ? '' : 'style="display: none;"'} data-ac-id="${item.ist_id}" value="${item.ist_status_flg}" id="btnAccept">Accept</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-label-danger btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true" ${item.ist_status_flg == 5 || item.ist_status_flg == 7 || item.ist_status_flg == 8 ? '' : 'style="display: none;"'}>Edit</button>
                            <ul class="dropdown-menu" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);z-index: 10000;" data-popper-placement="bottom-start">
                                <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actEquipment" data-bs-toggle="modal" data-bs-target="#mdlEditEquipment" data-id="${item.ist_id}">Equipment ${item.equipment_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : item.equipment_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                                <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actJobtype" data-bs-toggle="modal" data-bs-target="#mdlJobtype" data-id="${item.ist_id}">Job Type ${item.jopType_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : item.jopType_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                                <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actProblem" data-bs-toggle="modal" data-bs-target="#mdlProblemcon" data-id="${item.ist_id}">Problem Condition ${item.problem_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : item.problem_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                                <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actInspec" data-bs-toggle="modal" data-bs-target="#mdlInspec" data-id="${item.ist_id}">Inspection ${item.inspection_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : item.inspection_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li> 
                                <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actTroubleshooting" data-bs-toggle="modal" data-bs-target="#mdlTrobles" data-id="${item.ist_id}">Troubleshooting ${item.troubleshooting_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : item.troubleshooting_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                                <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actRequiredParts" data-bs-toggle="modal" data-bs-target="#mdlRequiredParts" data-id="${item.ist_id}">Required Parts ${item.rqPart_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : item.rqPart_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                                <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actAnalyze" data-bs-toggle="modal" data-bs-target="#mdlAnalyze" data-id="${item.ist_id}">Analyze Problem ${item.analyze_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : item.analyze_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                                <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actPrevention" data-bs-toggle="modal" data-bs-target="#mdlPrevention" data-id="${item.ist_id}">Prevention ${item.prevention_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : item.prevention_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                                <li><a class="dropdown-item btn-pointered  d-flex justify-content-between align-items-center actDelivery" data-bs-toggle="modal" data-bs-target="#mdlDelivery" data-id="${item.ist_id}">Delivery ${item.delivery_status == 1 ? `<i class='bx bxs-error text-warning' ></i>` : item.delivery_status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning' ></i>`}</a></li>
                                <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actAddworker" data-bs-toggle="modal" data-bs-target="#mdlMngWorker" data-id="${item.ist_id}">Manage Worker <i class='bx bxs-user-plus text-warning' ></i></a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item btn-pointered actSubmit" id="btnSubmit" data-flag="${item.equipment_status},${item.jopType_status},${item.problem_status},${item.inspection_status},${item.troubleshooting_status},${item.rqPart_status},${item.analyze_status},${item.prevention_status},${item.delivery_status}" data-bs-toggle="modal" data-bs-target="#mdlSubmit" data-id="${item.ist_id}">Submit</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btnCancle btn rounded-pill btn-secondary" data-bs-toggle="modal" data-bs-target="#mdlCancle" ${item.ist_status_flg == 3 || item.ist_status_flg == 5 || item.ist_status_flg == 7 || item.ist_status_flg == 8 ? '' : 'style="display: none;"'} data-cc-id="${item.ist_id}" value="${item.ist_status_flg}" >Cancel</button>
                    </td>
                </tr>
                `;
            });

            // Destroy the DataTable instance
            $('#tblTicketControl').DataTable().destroy();

            // Reinitialize the DataTable with the updated table body
            $("#tbody").html(html);

            // Reinitialize the DataTable with the updated table body
            $("#tblTicketControl").DataTable({ scrollX: true });

            // Hide loading indicator
            $("#loadingPage").attr("style", "display: none;");
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
}


$(document).on("click", "#btnViewAll", function () {
    viewAllData();
});

function viewAllData() {
    // Reset select element and show loading indicator
    $("#selStatus").val('');
    $("#loadingPage").css("display", "");

    // API URL
    var apiUrl = 'http://127.0.0.1/api/Ticket_control/show_all_data';

    // Perform Ajax request
    $.ajax({
        url: apiUrl,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var html = "";
            // Loop through the data and append menu items
            data.forEach(function(item, index) {
                var avatarHtml = ""; // Initialize avatar HTML
                if (item.swa_emp_code !== null) { // Check if swa_emp_code is not null
                  var swaEmpCodes = item.swa_emp_code ? item.swa_emp_code.split(',') : []; // Split swa_emp_code by comma or initialize as an empty array if it's null or empty
                  var swaFirstNames = item.swa_fristname ? item.swa_fristname.split(',') : []; // Split swa_fristname by comma or initialize as an empty array if it's null or empty
              
                  for (var k = 0; k < Math.min(4, swaEmpCodes.length); k++) {
                      var empCode = swaEmpCodes[k].trim(); // Remove any leading or trailing whitespace
                      var firstName = swaFirstNames[k] ? swaFirstNames[k].trim() : ''; // Remove any leading or trailing whitespace for the first name
              
                      if (empCode) { // Check if the employee code is not empty
                          avatarHtml += `
                          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="${empCode}" class="avatar pull-up">
                                          <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/${empCode}.jpg" alt="Avatar" onerror="this.onerror=null; this.src='http://192.168.161.219/ticketMaintenance/assets/img/avatars/no-avatar.png'">
                                      </li>
                          `;
                      }
                  }
              
                  // Check if there are more than 4 avatars
                  if (swaEmpCodes.length > 4) {
                      const remainingCount = swaEmpCodes.length - 4;
                      avatarHtml += `
                          <li style="font-size: 1.5rem; padding-left: 15px;">
                              <span>+${remainingCount}</span>
                          </li>
                      `;
                  }
              }
                html += `
                    <tr>
                        <td class="text-center">${index + 1}</td>
                        <td class="text-center">${item.ist_line_cd == '' ? `${item.ist_area_other}` : `${item.ist_line_cd}`}</td>
                        <td class="text-center">${item.mts_name === null ? '-' : item.mts_name}</td>
                        <td class="text-center">
                            <div class="text-center">${item.mjt_name_thai === null ? '-' : item.mjt_name_thai}</div>
                            <div class="text-center">${item.mjt_name_eng === null ? '-' : item.mjt_name_eng}</div>
                        </td>
                        <td class="text-center">
                            <div class="text-center"><small class="emp_post text-truncate text-muted">${item.ist_request_by}</small></div>
                            <div class="text-center">${item.ist_type == 1 ? 'APPLICATION' : 'WEBSITE'}</div>
                        </td>
                        <td class="text-center">
                            <div class="d-flex flex-wrap align-items-center">
                                <ul class="list-unstyled w-50 me-2 d-flex align-items-center avatar-group mb-0" id="avatarGroup_${index}">
                                    ${avatarHtml} <!-- Insert avatar HTML here -->
                                </ul>
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-label-${item.ist_status_flg == 1 ? 'warning' : item.ist_status_flg == 3 ? 'info' : item.ist_status_flg == 5 ? 'primary' : item.ist_status_flg == 7 ? 'success' : item.ist_status_flg == 8 ? 'danger' : 'Unknown'}">
                                ${item.ist_status_flg == 1 ? 'In Progress' : item.ist_status_flg == 3 ? 'Wait Accept' : item.ist_status_flg == 5 ? 'Wait Edit' : item.ist_status_flg == 7 ? 'Wait Approval' : item.ist_status_flg == 8 ? 'Approval Deny' : 'Unknown'}
                            </span>
                        </td>
                        <td class="text-center">
                        <button type="button" class="btnAccept btn rounded-pill btn-primary" ${item.ist_status_flg == 3 ? '' : 'style="display: none;"'} data-ac-id="${item.ist_id}" value="${item.ist_status_flg}" id="btnAccept">Accept</button>
                            <div class="btn-group">
                            <button type="button" class="btn btn-label-danger btn-outline-danger dropdown-toggle btn-edit-drop" data-id="${item.ist_id}" data-bs-toggle="dropdown" aria-expanded="true" ${item.ist_status_flg == 5 || item.ist_status_flg == 7 || item.ist_status_flg == 8 ? '' : 'style="display: none;"'}>Edit</button>
                            <ul class="dropdown-menu" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);z-index: 10000;" data-popper-placement="bottom-start" id="ulEdit_${ist_Id}">
                            <!-- Populate this ul with data from another API -->
                            </ul>
                            </div>
                            <button type="button" class="btnCancle btn rounded-pill btn-secondary" data-bs-toggle="modal" data-bs-target="#mdlCancle" ${item.ist_status_flg == 3 || item.ist_status_flg == 5 || item.ist_status_flg == 7 || item.ist_status_flg == 8 ? '' : 'style="display: none;"'} data-cc-id="${item.ist_id}" value="${item.ist_status_flg}" >Cancel</button>
                        </td>
                    </tr>
                `;

            });
            
            // Destroy the DataTable instance
            $('#tblTicketControl').DataTable().destroy();

            // Reinitialize the DataTable with the updated table body
            $("#tbody").html(html);

            // Reinitialize the DataTable with the updated table body
            $("#tblTicketControl").DataTable({ scrollX: true });

            // Hide loading indicator
            $("#loadingPage").attr("style", "display: none;");
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

//-------------------------- Edit Button ----------------------------------
$(document).on('click', '.btn-edit-drop', function() {
    var ist_Id = $(this).attr('data-id');

    var url = API_URL + "Ticket_control/get_status";

    $.ajax({
        url: url,
        type: 'GET',
        data: {
            ist_Id: ist_Id
        },
        dataType: 'json',
        success: function (data) {
            // Generate HTML for dropdown menu items
            var dropdownHtml = generateDropdownMenuItemsHtml(data[0]);

            // Insert the generated HTML into the appropriate dropdown menu
            $(`#ulEdit_${data[0].ist_id}`).append(dropdownHtml);
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
        }
    });
});


// Function to generate HTML for dropdown menu items
function generateDropdownMenuItemsHtml(item) {
    return `
        <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actEquipment" data-bs-toggle="modal" data-bs-target="#mdlEditEquipment" data-id="${item.ist_id}">Equipment ${getStatusIcon(item.equipment_status)}</a></li>
        <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actJobtype" data-bs-toggle="modal" data-bs-target="#mdlJobtype" data-id="${item.ist_id}">Job Type ${getStatusIcon(item.jopType_status)}</a></li>
        <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actProblem" data-bs-toggle="modal" data-bs-target="#mdlProblemcon" data-id="${item.ist_id}">Problem Condition ${getStatusIcon(item.problem_status)}</a></li>
        <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actInspec" data-bs-toggle="modal" data-bs-target="#mdlInspec" data-id="${item.ist_id}">Inspection ${getStatusIcon(item.inspection_status)}</a></li> 
        <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actTroubleshooting" data-bs-toggle="modal" data-bs-target="#mdlTrobles" data-id="${item.ist_id}">Troubleshooting ${getStatusIcon(item.troubleshooting_status)}</a></li>
        <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actRequiredParts" data-bs-toggle="modal" data-bs-target="#mdlRequiredParts" data-id="${item.ist_id}">Required Parts ${getStatusIcon(item.rqPart_status)}</a></li>
        <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actAnalyze" data-bs-toggle="modal" data-bs-target="#mdlAnalyze" data-id="${item.ist_id}">Analyze Problem ${getStatusIcon(item.analyze_status)}</a></li>
        <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actPrevention" data-bs-toggle="modal" data-bs-target="#mdlPrevention" data-id="${item.ist_id}">Prevention ${getStatusIcon(item.prevention_status)}</a></li>
        <li><a class="dropdown-item btn-pointered  d-flex justify-content-between align-items-center actDelivery" data-bs-toggle="modal" data-bs-target="#mdlDelivery" data-id="${item.ist_id}">Delivery ${getStatusIcon(item.delivery_status)}</a></li>
        <li><a class="dropdown-item btn-pointered d-flex justify-content-between align-items-center actAddworker" data-bs-toggle="modal" data-bs-target="#mdlMngWorker" data-id="${item.ist_id}">Manage Worker <i class='bx bxs-user-plus text-warning' ></i></a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item btn-pointered actSubmit" id="btnSubmit" data-flag="${item.equipment_status},${item.jopType_status},${item.problem_status},${item.inspection_status},${item.troubleshooting_status},${item.rqPart_status},${item.analyze_status},${item.prevention_status},${item.delivery_status}" data-bs-toggle="modal" data-bs-target="#mdlSubmit" data-id="${item.ist_id}">Submit</a></li>
    `;
}

// Function to generate HTML for status icon
function getStatusIcon(status) {
    return status == 1 ? `<i class='bx bxs-error text-warning'></i>` : status == 3 ? `<i class='bx bxs-check-circle text-success'></i>` : `<i class='bx bxs-error text-warning'></i>`;
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

// Populate Production Dropdown
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
            
            response.lineMaster.forEach(function(data) {
                selProduction.append(`<option value="${data.dep_cd}">${data.dep_cd}</option>`);
            });
        },
        error: function (error) {
            console.error('Error fetching data from the API:', error);
        }
    });
}

// Get Line Dropdown based on Production Dropdown
$('#selProduction').on('change', function () {
    var pd = $(this).val();
    getLine(pd);
});

// Function to get Line Dropdown
function getLine(pd) {
    const apiUrlselLine = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineFormPD';
    var selLine = $('#selLine');
  
    $.ajax({
        method: "POST",
        url: base_url("IssueTicket/callApiSearchLineCd?url=" + apiUrlselLine),
        dataType: 'Json',
        data: {
            getPD: pd,
        },
        success: function (response) {
            selLine.empty();
            selLine.append('<option value="">Choose Line Code</option>');
          
            response.lineMaster.forEach(function(data) {
                selLine.append(`<option value="${data.line_cd}">${data.line_cd}</option>`);
            });
        }
    });
}
})


// ----=- show Equipment --------
var data_ist_eq;
var ist_Id;

$(document).on('click', '.actEquipment', function () {
    ist_Id = $(this).attr('data-id');
    var url = API_URL + "Ticket_control/show_equipment";
    
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            ist_Id: ist_Id,
        },
        dataType: 'json',
        success: function (response) {
            console.log(response);
            if (response.result === true && response.data) {
                var data = response.data;
                if (data.ist_pd === '') {
                    $('#selArea').val('2');
                    selotherDiv.show();
                    selpdDiv.hide();
                    // เปลี่ยนจาก $('#inpOther').empty(); เป็น $('#inpOther').val('');
                    $('#inpOther').val('');
                    $('#inpOther').val(data.ist_area_other);
                } else {
                    $('#selArea').val('1');
                    selpdDiv.show();
                    selotherDiv.hide();
                    $('#selProduction').val(data.ist_pd);
                    // เปลี่ยนจาก $('#selLine').empty(); ไป $('#selLine').val('') เพื่อล้างค่าเดิม
                    $('#selLine').val('');
                    $('#selLine').empty();
                    $('#selLine').append(`<option value="${data.ist_line_cd}">${data.ist_line_cd}</option>`);
                }
                $('#inpProcess').val(data.ist_process);
                $('#selTooling').val(data.ist_tool);
                $('#addMaker').val(data.ist_maker);
                $('#addModel').val(data.ist_model);
            } else {
                console.error('Error: Invalid response data or result is not true');
            }
        },
        error: function (error) {
            console.error('Error fetching data from the API:', error);
        }
    });
});



  //-------------------------- Save Equipment ----------------------------

  $('#btnSaveEditEquipment').on('click', function () {
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
            var url = API_URL + 'Ticket_control/save_equipment';
            const formData = new FormData()
            formData.append('AreaPd', AreaPd);
            formData.append('AreaLine', AreaLine);
            formData.append('AreaOther', AreaOther);
            formData.append('ProcFunc', ProcFunc);
            formData.append('ToolSys', ToolSys);
            formData.append('Maker', Maker);
            formData.append('Model', Model);
            formData.append('ist_Id', ist_Id);

            $.ajax({
                url: base_url('TicketControl/callApiSaveEquip'),
                type: 'POST',
                data: formData,
                dataType: 'json',
                processData: false, // เพิ่มส่วนนี้
                contentType: false, // เพิ่มส่วนนี้
                success: function (res) {
                    if (res.result == 1) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            html: 'Edit Equipment success',
                            timer: 2500,
                        }).then(() => {
                            $('#mdlEditEquipment').modal('hide');
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

function ProbConDropdown(selectedValue, callback) {
    console.log(selectedValue);
    const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_problem';

    // ส่งค่า val ไปกับข้อมูลของ AJAX
    $.ajax({
        url: apiUrl,
        type: 'GET',
        data: { selectedValue: selectedValue }, // ส่งค่า val ที่เลือกไว้ด้วย AJAX
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

            // Set dropdown height to auto
            $('#SelProblem').css('height', 'auto');

            // เรียกใช้ callback function เพื่อบอกว่าการประมวลผลของ Dropdown เสร็จสิ้นแล้ว
            callback();
        },
        error: function (error) {
            console.error('Error fetching data from the API:', error);
        }
    });
}




// ----=- show problem --------
var data_ist_eq;
//   function ProbConDropdown() {
//       const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_problem';

//   $.ajax({
//       url: apiUrl,
//       type: 'GET',
//       dataType: 'json',
//       success: function (res) {
//           // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
//           response = res;

//           // Clear existing options in the dropdown
//           $('#SelProblem').empty();

//           // Add a default option
//           $('#SelProblem').append('<option value="">Choose problem condition</option>');

//           // Loop through the API response and add options to the dropdown
//           for (let i = 0; i < response.length; i++) {
//               const problemData = response[i];
//               $('#SelProblem').append(`<option value="${problemData.mpc_id}">${problemData.mpc_name_eng} / ${problemData.mpc_name_thai}</option>`);
//           }
//       },
//       error: function (error) {
//           console.error('Error fetching data from the API:', error);
//       }
//   });
// }








// ----=- show problem --------
$(document).on('click', '.actProblem', function () {
    ist_Id = $(this).attr('data-id');
    var url = API_URL + "Ticket_control/show_problem";

    $.ajax({
        url: url,
        type: 'POST',
        data: { ist_Id: ist_Id },
        dataType: 'json',
        success: function (response) {
            console.log(response);

            $('#SelProblem').val('');
            $('#mdetailprdlm').val('');
            $('.customCheckpb').prop('checked', false);

            var selectedValue = response.data[0].mjt_id; // ค่าที่ต้องการส่งไปยัง ProbConDropdown
            ProbConDropdown(selectedValue, function() {
                // ทำงานที่ต้องการหลังจาก ProbConDropdown เสร็จสิ้น
                response.data_check.forEach(function (problem) {
                    $('#customCheckpb' + problem.mpc_id).prop('checked', true);
                });

                $('#SelProblem').val(response.data[0].mpc_id);
                $('#mdetailprdlm').val(response.data[0].ipc_detail);

                var data_image = response.data_image[0];
                var maxFilesAllowed = 3;
                var e = `<div class="dz-preview dz-success dz-processing dz-image-preview dz-complete">
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
                        </div>`;
                Dropzone.autoDiscover = false;
                var myDropzone = new Dropzone("#myDropzone", {
                    previewTemplate: e,
                    url: '/upload',
                    acceptedFiles: 'image/*',
                    maxFiles: maxFilesAllowed,
                    init: function () {
                        this.on("addedfile", function () {
                            if (this.files.length > this.options.maxFiles) {
                                this.removeFile(this.files[0]);
                            }
                        });
                    },
                    addRemoveLinks: true,
                    dictDefaultMessage: 'Drop your image here or click to upload',
                    parallelUploads: 1,
                    autoProcessQueue: false // ปิดการอัพโหลดอัตโนมัติ
                });

                var filesCount = 0;
                for (let i = 1; i <= 3; i++) {
                    var imageName = data_image['ipc_pic_' + i];
                    if (imageName != '') {
                        var imagePath = base_url('/assets/img/upload/problem/' + imageName);
                        let mockFile = { name: `${imageName}`, size: 12345 };
                        myDropzone.emit("addedfile", mockFile);
                        myDropzone.emit("thumbnail", mockFile, imagePath);
                        myDropzone.emit("complete", mockFile); // เพิ่มบรรทัดนี้เพื่อให้ Dropzone เป็นสถานะเต็มรูปแบบของไฟล์ที่ถูกเพิ่ม
                        filesCount++;
                    }
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data from the API:', error);
        }
    });
});



        

// -------------------------- Dropzone ----------------------------
var fileNamesPb;
var fileNamesIns;
var fileNamesTroub;
var fileNamesAnalz;

function uploadImage() {
    var formData = new FormData();
    var myDropzone = Dropzone.forElement("#myDropzone");
    var files = myDropzone.getAcceptedFiles(); // รับรายการไฟล์ที่ได้รับการยอมรับจาก Dropzone
    var maxFilesAllowed = 3; // กำหนดจำนวนไฟล์สูงสุดที่อนุญาตให้อัปโหลด
console.log(files);
return
    // ตรวจสอบจำนวนไฟล์ก่อนที่จะทำการส่ง
    if (files.length > maxFilesAllowed) {
        // แสดง Swal ในกรณีที่มีไฟล์เกิน 3 ไฟล์
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'You can upload only up to 3 files.',
        });
    } else {
        // ทำการส่งไฟล์เมื่อไม่เกิน 3 ไฟล์
        $.each(files, function(key, file) {
            // ให้แต่ละไฟล์มีชื่อและเพิ่มลงใน FormData
            formData.append('images[]', file, file.name); // ใช้ชื่อของไฟล์ในการเพิ่มลงใน FormData
        });
        $.ajax({
            url: base_url('TicketControl/imgUpload'),
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
}



function uploadImage2() {
    var formData = new FormData();
    $.each($('#dropzone-multi-inspection').get(0).dropzone.files, function(key, el1) {
        formData.append('images[]', el1);
    });
    $.ajax({
        url: base_url('TicketControl/imgUpload2'),
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
        url: base_url('TicketControl/imgUpload3'),
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
        url: base_url('TicketControl/imgUpload4'),
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

//-------------------------- Save Problem ----------------------------
$('#btnSaveProblem').on('click', function () {
    uploadImage ();
    var ProblemSel = $('#SelProblem').val();
    var ProblemDetail = $('#mdetailprdlm').val();

    // Initialize an array to store checked values
    var checkedValues = [];

    // Loop through checkboxes to get checked values
    $('.customCheckpb:checked').each(function() {
        checkedValues.push($(this).val());
    });
return


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
                formData.append('CheckedValues', JSON.stringify(checkedValues));
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

    // Loop through the data and set the checked radio button based on mjt_id
    response.data.forEach(function(item) {
        var radioId = '#customRadioIcon' + item.mjt_id;
        $(radioId).prop('checked', true);
    });
}

  });
});


//-------------------------- Save jobtype ----------------------------
$('#btnSaveJobtype').on('click', function () {
    // เก็บค่า radio ที่ถูกเลือก
    var Jtradio1 = $('input[name="customRadioIcon"]:checked').val();

    // ตรวจสอบว่ามี radio ที่ถูกเลือกหรือไม่
    if (Jtradio1) {
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
    } else {
        // ถ้าไม่มี radio ที่ถูกเลือก
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please select a job type!'
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
            $('.chkInspec').prop('checked', false);


            var selectedValue = response.data[0].mjt_id; 
            
            InMeDropdown(selectedValue, function() {
                response.data_check.forEach(Inspec => {
                    // Construct the ID for the checkbox
                    var checkboxId = 'ChkInspec' + Inspec.mim_id;
                    // Check the checkbox based on mim_id
                    $('#' + checkboxId).prop('checked', true);
                });

                $('#SelInspec').val(response.data[0].mim_id);
                $('#mdetailinsprc').val(response.data[0].iim_detail);
              
                var data_image = response.data_image[0];
                var maxFilesAllowed = 3;
                var e = `<div class="dz-preview dz-success dz-processing dz-image-preview dz-complete">
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
                        </div>`;
                Dropzone.autoDiscover = false;
                var myDropzone = new Dropzone("#myDropzoneinspection", {
                    previewTemplate: e,
                    url: '/upload',
                    acceptedFiles: 'image/*',
                    maxFiles: maxFilesAllowed,
                    init: function () {
                        this.on("addedfile", function () {
                            if (this.files.length > this.options.maxFiles) {
                                this.removeFile(this.files[0]);
                            }
                        });
                    },
                    addRemoveLinks: true,
                    dictDefaultMessage: 'Drop your image here or click to upload',
                    parallelUploads: 1,
                    autoProcessQueue: false // ปิดการอัพโหลดอัตโนมัติ
                });

                var filesCount = 0;
                for (let i = 1; i <= 3; i++) {
                    var imageName = data_image['iim_pic_' + i];
                    if (imageName != '') {
                        var imagePath = base_url('/assets/img/upload/inspection/' + imageName);
                        let mockFile = { name: `${imageName}`, size: 12345 };
                        myDropzone.emit("addedfile", mockFile);
                        myDropzone.emit("thumbnail", mockFile, imagePath);
                        myDropzone.emit("complete", mockFile); // เพิ่มบรรทัดนี้เพื่อให้ Dropzone เป็นสถานะเต็มรูปแบบของไฟล์ที่ถูกเพิ่ม
                        filesCount++;
                    }
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data from the API:', error);
        }
    });
});




//-------------------------- Save Inspection ----------------------------

$('#btnSaveInspec').on('click', function () {

  var InspecSel = $('#SelInspec').val();
  var InspecDetail = $('#mdetailinsprc').val();

  var checkedValues = []; 

  $('.chkInspec:checked').each(function() {
      checkedValues.push($(this).val());
  });

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
              formData.append('CheckedValues', JSON.stringify(checkedValues));
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



 function InMeDropdown(selectedValue, callback) {
    const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_inspec_method';

    $.ajax({
        url: apiUrl,
        type: 'GET',
        data: { selectedValue: selectedValue }, // ส่งค่า val ที่เลือกไว้ด้วย AJAX
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

            // Set dropdown height to auto
            $('#SelInspec').css('height', 'auto');

            // เรียกใช้ callback function เพื่อบอกว่าการประมวลผลของ Dropdown เสร็จสิ้นแล้ว
            callback();
        },
        error: function (error) {
            console.error('Error fetching data from the API:', error);
        }
    });
}



 // -------------------------------- Trouble -------------------------------

 function TroubleDropdown(selectedValue, callback) {
    const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_trouble';

    $.ajax({
        url: apiUrl,
        type: 'GET',
        data: { selectedValue: selectedValue },
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

            // เรียกใช้ callback function เพื่อบอกว่าการประมวลผลของ Dropdown เสร็จสิ้นแล้ว
            callback();
        },
        error: function (error) {
            console.error('Error fetching data from the API:', error);
        }
    });
}







// ----=- show Trouble --------

$(document).on('click', '.actTroubleshooting', function () {
    ist_Id = $(this).attr('data-id');
  
    var url = API_URL + "Ticket_control/show_trouble";
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            ist_Id: ist_Id,
        },
        dataType: 'json',
        success: (response) => {
            data_ist_trouble = response.data;
  
            // Clear previous selections
            $('#SelTbAc').val('');
            $('#mdetailtbac').val('');
            $('.chkTrob1').prop('checked', false);
            $('.chkTrob2').prop('checked', false);
            $('.detailTrob2').val('');

            var selectedValue = response.data[0].mjt_id; 
            TroubleDropdown(selectedValue, function() {
                response.data_check1.forEach(trouble1 => {
                    var checkboxId1 = '#chkTrob' + trouble1.mt_id;
                    $(checkboxId1).prop('checked', true);
                });

                response.data_check2.forEach(trouble2 => {
                    var checkboxId2 = '#chkTrobdt' + trouble2.mt_id;
                    $(checkboxId2).prop('checked', true);
                    $('#detailTrob2' + trouble2.mt_id).val(trouble2.it_detail);
                });

                $('#SelTbAc').val(response.data[0].mt_id);
                $('#mdetailtbac').val(response.data[0].it_detail);
  
                var data_image = response.data_image[0];
                var maxFilesAllowed = 3;
                var e = `<div class="dz-preview dz-success dz-processing dz-image-preview dz-complete">
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
                        </div>`;
                Dropzone.autoDiscover = false;
                var myDropzone = new Dropzone("#myDropzonetroubleshooting", {
                    previewTemplate: e,
                    url: '/upload',
                    acceptedFiles: 'image/*',
                    maxFiles: maxFilesAllowed,
                    init: function () {
                        this.on("addedfile", function () {
                            if (this.files.length > this.options.maxFiles) {
                                this.removeFile(this.files[0]);
                            }
                        });
                    },
                    addRemoveLinks: true,
                    dictDefaultMessage: 'Drop your image here or click to upload',
                    parallelUploads: 1,
                    autoProcessQueue: false // ปิดการอัพโหลดอัตโนมัติ
                });

                var filesCount = 0;
                for (let i = 1; i <= 3; i++) {
                    var imageName = data_image['it_pic_' + i];
                    if (imageName != '') {
                        var imagePath = base_url('/assets/img/upload/trouble/' + imageName);
                        let mockFile = { name: `${imageName}`, size: 12345 };
                        myDropzone.emit("addedfile", mockFile);
                        myDropzone.emit("thumbnail", mockFile, imagePath);
                        myDropzone.emit("complete", mockFile); // เพิ่มบรรทัดนี้เพื่อให้ Dropzone เป็นสถานะเต็มรูปแบบของไฟล์ที่ถูกเพิ่ม
                        filesCount++;
                    }
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data from the API:', error);
        }
    });
});
  //-------------------------- Save Troubleshooting ----------------------------

$('#btnSaveTrob').on('click', function () {

    var Trobles = $('#SelTbAc').val();
    var TroblesDetail = $('#mdetailtbac').val();
  
    var checkedValues1 = [];
    var checkedValues2 = [];

    // Loop through checkboxes and input text of troublecheck1
    $('input[name="troublecheck1"]:checked').each(function() {
        checkedValues1.push($(this).val());
    });

    // Loop through checkboxes and input text of troublecheck2
    $('input[name="troublecheck2"]:checked').each(function() {
        var checkboxVal = $(this).val();
        var mt_id = $(this).attr('id').replace('chkTrobdt', '');
        var detailVal = $('#detailTrob2' + mt_id).val();
        var obj = { checkbox: checkboxVal, detail: detailVal };
        checkedValues2.push(obj);
    });
  
    if (Trobles == '') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please select a trouble!'
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
                var url = API_URL + 'Ticket_control/save_trobles';
                const formData = new FormData()
                formData.append('Trobles', Trobles);
                formData.append('TroblesDetail', TroblesDetail);
                formData.append('CheckedValues1', JSON.stringify(checkedValues1));
                formData.append('CheckedValues2', JSON.stringify(checkedValues2));        
                formData.append('ist_Id', ist_Id);
  
                $.ajax({
                    url: base_url('TicketControl/callApiSaveTrobles'),
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
                              html: 'Edit Trobles success',
                              timer: 2500,
                          }).then(() => {
                              $('#mdlTrobles').modal('hide');
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
                    // Construct the ID for the checkbox
                    var checkboxId = '#Check' + Analyze.map_id;
                    // Check the checkbox based on map_id value
                    $(checkboxId).prop('checked', true);
  
                    // Check if map_id is 11 and iap_detail exists
                    if (Analyze.map_id === '11' && Analyze.iap_detail !== null) {
                        // Set the value of the input
                        $('#adddtInput').val(Analyze.iap_detail);
                    }
                } else {
                    // Set #mdetailAnalyz value if map_id is null
                    $('#mdetailAnalyz').val(Analyze.iap_detail);
                }
            });

            var data_image = response.data_image[0];
            var maxFilesAllowed = 3;
            var e = `<div class="dz-preview dz-success dz-processing dz-image-preview dz-complete">
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
                    </div>`;
            Dropzone.autoDiscover = false;
            var myDropzone = new Dropzone("#myDropzoneanalyz", {
                previewTemplate: e,
                url: '/upload',
                acceptedFiles: 'image/*',
                maxFiles: maxFilesAllowed,
                init: function () {
                    this.on("addedfile", function () {
                        if (this.files.length > this.options.maxFiles) {
                            this.removeFile(this.files[0]);
                        }
                    });
                },
                addRemoveLinks: true,
                dictDefaultMessage: 'Drop your image here or click to upload',
                parallelUploads: 1,
                autoProcessQueue: false // ปิดการอัพโหลดอัตโนมัติ
            });

            var filesCount = 0;
            for (let i = 1; i <= 3; i++) {
                var imageName = data_image['iap_pic' + i];
                if (imageName != '') {
                    var imagePath = base_url('/assets/img/upload/trouble/' + imageName);
                    let mockFile = { name: `${imageName}`, size: 12345 };
                    myDropzone.emit("addedfile", mockFile);
                    myDropzone.emit("thumbnail", mockFile, imagePath);
                    myDropzone.emit("complete", mockFile); // เพิ่มบรรทัดนี้เพื่อให้ Dropzone เป็นสถานะเต็มรูปแบบของไฟล์ที่ถูกเพิ่ม
                    filesCount++;
                }
            }
        },
        error: function (error) {
            console.error('Error fetching data from the API:', error);
        }
    });
});




//-------------------------- Save Analyze ----------------------------
$('#btnSaveAnalyz').on('click', function () {
    var checkboxes = []; // เก็บค่า Checkbox ที่ถูกเลือก
    var details = ''; // เก็บค่า Detail ของ Checkbox 11

    var Detailcheck11 = $('#adddtInput').val();
    var Mdetail = $('#mdetailAnalyz').val();

    // เช็ค checkbox ที่มี id เริ่มต้นด้วย "Check"
    $('[id^="Check"]').each(function() {
        if ($(this).prop('checked')) {
            checkboxes.push($(this).val());
        }
    });


    // เช็ค checkbox 11
    if ($('#Check11').prop('checked')) {
        details = $('#adddtInput').val();
    }

    if (checkboxes.length === 0) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please select an analyze!'
        });
    } else if (checkboxes.includes('5') && !(checkboxes.includes('6') || checkboxes.includes('7') || checkboxes.includes('8'))) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please select at least one option from Checked6, Checked7, Checked8!'
        });
    } else if (checkboxes.includes('11') && Detailcheck11.trim() === '') {
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
                checkboxes.forEach(function(checkbox) {
                    formData.append('checkboxes[]', checkbox);
                });
                formData.append('details', details);
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
          // หา element checkbox ด้วย id ของ Delivery
          var checkbox = $(`#Check-de${Delivery.mde_id}`);
          checkbox.prop('checked', true);

          // หา element input ด้วย id ของ Delivery
          var additionalInput = $(`#additionalInput${Delivery.mde_id}`);

          // ตรวจสอบว่ามีข้อมูลเพิ่มเติมหรือไม่ และเซ็ตค่าให้กับ input field
          if (Delivery.ide_detail !== null) {
            additionalInput.val(Delivery.ide_detail);
          }
        }
      });
    }
  });
});


//-------------------------- Save Delivery ----------------------------

$('#btnSaveDelivery').on('click', function () {
    var formData = new FormData();
    var checkboxes = [];
    var details = [];
  
// เก็บค่า Checkbox ที่ถูกเลือกและ Detail ของ Checkbox 1
$('[id^="Check-de"]').each(function() {
    if ($(this).prop('checked')) {
        var checkboxId = $(this).attr('id');
        var detailId = checkboxId.replace('Check-de', 'additionalInput');
        checkboxes.push($(this).val());
        // เช็คว่าเป็น Checkbox ที่ 1 หรือไม่
        if (checkboxId === 'Check-de1') {
            // เก็บ Detail ของ Checkbox 1 เพียงอันเดียว
            details.push($('#' + detailId).val());
        } else {
            // สำหรับ Checkbox อื่น ๆ ให้เพิ่ม Detail เป็นค่าว่าง
            details.push('');
        }
    }
});

  
    // ตรวจสอบว่ามี Checkbox ถูกเลือกหรือไม่
    if (checkboxes.length === 0) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please select a delivery!'
        });
    } else if (checkboxes.includes('1') && details[0].trim() === '') {
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
                  formData.append('ist_Id', ist_Id);
                  checkboxes.forEach(function(checkbox) {
                      formData.append('checkboxes[]', checkbox);
                  });
                  details.forEach(function(detail, index) {
                      formData.append('details[]', detail);
                  });
  
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
                          <input class="form-check-input customCheckpb" type="checkbox" value="${item.mpc_id}" id="customCheckpb${item.mpc_id}" />
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
                          <input class="form-check-input chkInspec" type="checkbox" value="${item.mim_id}" id="ChkInspec${item.mim_id}" />
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
                      <input name="troublecheck1" class="form-check-input chkTrob1" type="radio" value="${item.mt_id}" id="chkTrob${item.mt_id}" />
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
                  <label class="form-check-label custom-option-content" for="chkTrobdt${item.mt_id}">
                      <input name="troublecheck2" class="form-check-input chkTrob2" type="radio" value="${item.mt_id}" id="chkTrobdt${item.mt_id}" />
                      <span class="custom-option-header">
                          <span class="fw-medium">${item.mt_name_thai}</span>
                      </span>
                      <span class="custom-option-body">
                          <input type="text" class="form-control detailTrob2" value="" id="detailTrob2${item.mt_id}">
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







// ----------------------------------------- Request Part ----------------------------------------- 


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

var selToolingrq, addMakerrq, addModelrq, inpQTY, inpStock, inpStockqty, inpOrder, inpOrderqty, inpReceived, inpReceivedqty, submit;
    selToolingrq = document.getElementById('selToolingrq');
    addMakerrq = document.getElementById('addMakerrq');
    addModelrq = document.getElementById('addModelrq');
    inpQTY = document.getElementById('inpQTY');
    inpStock = document.getElementById('inpStock');
    inpStockqty = document.getElementById('inpStockqty');
    inpOrder = document.getElementById('inpOrder');
    inpOrderqty = document.getElementById('inpOrderqty');
    inpReceived = document.getElementById('inpReceived');
    inpReceivedqty = document.getElementById('inpReceivedqty');
    submit = document.getElementById('submit');
    submit.addEventListener("click", addData);

    var rowCount = 0;


    function checkAndOpenModal() {
        var rowCount = document.getElementById('mytable').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
        if (rowCount >= 5) {
            alert('สามารถเพิ่มข้อมูลได้ไม่เกิน 5 แถว!');
            $('#backDropModal').modal('hide');
        } else {
            $('#backDropModal').modal('show');
        }
    }


    function deleted(r) {
        var result = confirm("Want to delete?");
        if (result) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("mytable").deleteRow(i);
        }
    }

    var row_id

    function openEditModal(button) {

        row_id = button.parentNode.parentNode.rowIndex;
        var row = button.closest("tr");

        if (row) {
            var editedselToolingrq = row.cells[0].getElementsByTagName('input')[0].value;
            var editedaddMakerrq = row.cells[1].getElementsByTagName('input')[0].value;
            var editedaddModelrq = row.cells[2].getElementsByTagName('input')[0].value;
            var editedselTyperq = row.cells[3].getElementsByTagName('input')[0].value;
            var editedInpQTY = row.cells[4].getElementsByTagName('input')[0].value;
            var editedInpStock = row.cells[5].getElementsByTagName('input')[0].value;
            var editedInpStockqty = row.cells[6].getElementsByTagName('input')[0].value;
            var editedInpOrder = row.cells[7].getElementsByTagName('input')[0].value;
            var editedInpOrderqty = row.cells[8].getElementsByTagName('input')[0].value;
            var editedInpReceived = row.cells[9].getElementsByTagName('input')[0].value;
            var editedInpReceivedqty = row.cells[10].getElementsByTagName('input')[0].value;

            // เปิด modal
            var editModal = new bootstrap.Modal(document.getElementById('editbackDropModal'));
            editModal.show();

            // ดึงข้อมูลจากแถวและใส่ใน modal
            document.getElementById("editselToolingrq").value = editedselToolingrq;
            document.getElementById("editaddMakerrq").value = editedaddMakerrq;
            document.getElementById("editaddModelrq").value = editedaddModelrq;
            document.getElementById("editselTyperq").value = editedselTyperq;
            document.getElementById("editInpQTY").value = editedInpQTY;
            document.getElementById("editInpStock").value = editedInpStock;
            document.getElementById("editInpStockqty").value = editedInpStockqty;
            document.getElementById("editInpOrder").value = editedInpOrder;
            document.getElementById("editInpOrderqty").value = editedInpOrderqty;
            document.getElementById("editInpReceived").value = editedInpReceived;
            document.getElementById("editInpReceivedqty").value = editedInpReceivedqty;


        } else {
            console.error("Unable to find row.");
        }
    }

    function addData() {
      var table = document.getElementById('mytable').getElementsByTagName("tbody")[0];
      if (rowCount >= 5) { // เช็คว่าถ้าจำนวนแถวมากกว่าหรือเท่ากับ 5 แถวแล้ว
          alert("Maximum row limit reached!"); // แสดงแจ้งเตือนว่าเกินจำนวนแถวสูงสุดแล้ว
      } else if (addMakerrq.value == "" & selToolingrq.value == "") {
          selToolingrq.focus();
      } else {
          var row = table.insertRow(0);
          var col1 = row.insertCell(0);
          var col2 = row.insertCell(1);
          var col3 = row.insertCell(2);
          var col4 = row.insertCell(3);
          var col5 = row.insertCell(4);
          var col6 = row.insertCell(5);
          var col7 = row.insertCell(6);
          var col8 = row.insertCell(7);
          var col9 = row.insertCell(8);
          var col10 = row.insertCell(9);
          var col11 = row.insertCell(10);
          var col12 = row.insertCell(11);
          var col13 = row.insertCell(12);


          col1.innerHTML = `<label class="form-label">Name</label><input class="form-select" value="${selToolingrq.value}" disabled>`;
          col2.innerHTML = `<label class="form-label">Maker</label><input type="text" class="form-control" value="${addMakerrq.value}" disabled>`;
          col3.innerHTML = `<label class="form-label">Model</label><input type="text" class="form-control" value="${addModelrq.value}" disabled>`;
          col4.innerHTML = `<label class="form-label">Type</label><input class="form-select" value="${selTyperq.value}" disabled>`;
          col5.innerHTML = `<label class="form-label">Qty</label><input type="number" class="form-control" value="${inpQTY.value}" disabled>`;
          col6.innerHTML = `<input type="date" class="form-control" value="${inpStock.value}" id="tdinpStock">`;
          col7.innerHTML = `<input type="number" class="form-control" value="${inpStockqty.value}">`;
          col8.innerHTML = `<input type="date" class="form-control" value="${inpOrder.value}">`;
          col9.innerHTML = `<input type="number" class="form-control" value="${inpOrderqty.value}">`;
          col10.innerHTML = `<input type="date" class="form-control" value="${inpReceived.value}">`;
          col11.innerHTML = `<input type="number" class="form-control" value="${inpReceivedqty.value}">`;
          col12.innerHTML = '<button class="btn btn-label-success mt-4" data-repeater-delete="" onclick="openEditModal(this)"></i><span class="align-middle"><i class="bx bx-edit-alt me-1" style="font-size: 25px;"></i></span></button>';
          col13.innerHTML = '<button class="btn btn-label-danger mt-4" data-repeater-delete="" onclick="deleted(this)"><span class="align-middle"><i class="bx bx-trash me-1" style="font-size: 25px;"></i></span></button>';

          col6.style.display = "none";
          col7.style.display = "none";
          col8.style.display = "none";
          col9.style.display = "none";
          col10.style.display = "none";
          col11.style.display = "none";
          rowCount++;
      }
      selToolingrq.value = "";
      addMakerrq.value = "";
      addModelrq.value = "";
      selTyperq.value = "";
      inpQTY.value = "";
      inpStock.value = "";
      inpStockqty.value = "";
      inpOrder.value = "";
      inpOrderqty.value = "";
      inpReceived.value = "";
      inpReceivedqty.value = "";
      selToolingrq.focus();
  }



    function saveEdit() {

        document.getElementById("mytable").deleteRow(row_id);
        // หาแถวที่มีการแก้ไขข้อมูล
        var editedRow = document.querySelector('#mytable tbody tr.editing');

        // ตรวจสอบว่ามีแถวที่ถูกกำหนดเป็นการแก้ไขหรือไม่
        // if (editedRow) {
        // ดึงค่าข้อมูลที่แก้ไขแล้วจากฟอร์มใน modal edit
        var editedselToolingrq = document.getElementById('editselToolingrq').value;
        var editedaddMakerrq = document.getElementById('editaddMakerrq').value;
        var editedaddModelrq = document.getElementById('editaddModelrq').value;
        var editedselTyperq = document.getElementById('editselTyperq').value;
        var editedInpQTY = document.getElementById('editInpQTY').value;
        var editedInpStock = document.getElementById('editInpStock').value;
        var editedInpStockqty = document.getElementById('editInpStockqty').value;
        var editedInpOrder = document.getElementById('editInpOrder').value;
        var editedInpOrderqty = document.getElementById('editInpOrderqty').value;
        var editedInpReceived = document.getElementById('editInpReceived').value;
        var editedInpReceivedqty = document.getElementById('editInpReceivedqty').value;


        var table = document.getElementById('mytable').getElementsByTagName("tbody")[0];
        // if (editedaddMakerrq.value == "" & editedselToolingrq.value == "") {
        //     editedselToolingrq.focus();
        // } else {
        var row = table.insertRow(0);
        var col1 = row.insertCell(0);
        var col2 = row.insertCell(1);
        var col3 = row.insertCell(2);
        var col4 = row.insertCell(3);
        var col5 = row.insertCell(4);
        var col6 = row.insertCell(5);
        var col7 = row.insertCell(6);
        var col8 = row.insertCell(7);
        var col9 = row.insertCell(8);
        var col10 = row.insertCell(9);
        var col11 = row.insertCell(10);
        var col12 = row.insertCell(11);
        var col13 = row.insertCell(12);
        col1.innerHTML = `<label class="form-label">Name</label><input type="text" class="form-control" value="${editedselToolingrq}" disabled>`;
        col2.innerHTML = `<label class="form-label">Maker</label><input type="text" class="form-control" value="${editedaddMakerrq}" disabled>`;
        col3.innerHTML = `<label class="form-label">Model</label><input type="text" class="form-control" value="${editedaddModelrq}" disabled>`;
        col4.innerHTML = `<label class="form-label">Type</label><input class="form-select" value="${editselTyperq.value}" disabled>`;
        col5.innerHTML = `<label class="form-label">Qty</label><input type="number" class="form-control" value="${editedInpQTY}" disabled>`;
        col6.innerHTML = `<input type="date" class="form-control" value="${editedInpStock}" style="display:none">`;
        col7.innerHTML = `<input type="number" class="form-control" value="${editedInpStockqty}" style="display:none">`;
        col8.innerHTML = `<input type="date" class="form-control" value="${editedInpOrder}" style="display:none">`;
        col9.innerHTML = `<input type="number" class="form-control" value="${editedInpOrderqty}" style="display:none">`;
        col10.innerHTML = `<input type="date" class="form-control" value="${editedInpReceived}" style="display:none">`;
        col11.innerHTML = `<input type="number" class="form-control" value="${editedInpReceivedqty}" style="display:none">`;
        col12.innerHTML = '<button class="btn btn-label-success mt-4" data-repeater-delete="" onclick="openEditModal(this)"></i><span class="align-middle"><i class="bx bx-edit-alt me-1" style="font-size: 25px;"></i></span></button>';
        col13.innerHTML = '<button class="btn btn-label-danger mt-4" data-repeater-delete="" onclick="deleted(this)"><span class="align-middle"><i class="bx bx-trash me-1" style="font-size: 25px;"></i></span></button>';

        col6.style.display = "none";
        col7.style.display = "none";
        col8.style.display = "none";
        col9.style.display = "none";
        col10.style.display = "none";
        col11.style.display = "none";
        // }
        editedselToolingrq.value = "";
        editedaddMakerrq.value = "";
        editedaddModelrq.value = "";
        editselTyperq.value = "";
        editedInpQTY.value = "";
        editedInpStock.value = "";
        editedInpStockqty.value = "";
        editedInpOrder.value = "";
        editedInpOrderqty.value = "";
        editedInpReceived.value = "";
        editedInpReceivedqty.value = "";


        // ปิด modal edit
        var editModal = bootstrap.Modal.getInstance(document.getElementById('editbackDropModal'));
        editModal.hide();
        // } else {
        //     console.error("Unable to find row.");
        // }
    }


    // ----=- show Required Parts --------
    $(document).on('click', '.actRequiredParts', function () {
      ist_Id = $(this).attr('data-id');

      var url = API_URL + "Ticket_control/show_required_parts";
      $.ajax({
          url: url,
          type: 'POST',
          data: {
              ist_Id: ist_Id,
          },
          dataType: 'json',
          success: function (response) {
              if (response.result === true) { // ตรวจสอบว่ามีผลลัพธ์ที่ถูกต้องหรือไม่
                clearModal();
                  showEditData(response.data); // เรียกใช้ฟังก์ชัน showEditData และส่งข้อมูลที่ได้รับมาจาก API ไปเป็นพารามิเตอร์
              } else {
                clearModal();
                  console.error('Error: Invalid response from API');
              }
          },
          error: function (error) {
              console.error('Error fetching data from the API:', error);
          }
      });
  });
  

  function clearModal() {
    $('#mytable tbody').empty(); // เคลียร์ข้อมูลใน tbody ของตารางทั้งหมด
}
  function showEditData(data) {
      if (!data || data.length === 0) { // ถ้าไม่มีข้อมูลหรือข้อมูลว่างเปล่า
          return; // ไม่ต้องทำอะไร
      }
      clearModal();
      var table = document.getElementById('mytable').getElementsByTagName("tbody")[0];
          data.forEach(function (item) {
              var row = table.insertRow(0);
  
              // เพิ่มคอลัมน์ที่ต้องการในแต่ละแถว
              var col1 = row.insertCell(0);
              var col2 = row.insertCell(1);
              var col3 = row.insertCell(2);
              var col4 = row.insertCell(3);
              var col5 = row.insertCell(4);
              var col6 = row.insertCell(5);
              var col7 = row.insertCell(6);
              var col8 = row.insertCell(7);
              var col9 = row.insertCell(8);
              var col10 = row.insertCell(9);
              var col11 = row.insertCell(10);
              var col12 = row.insertCell(11);
              var col13 = row.insertCell(12);
  
              // กำหนดค่าของแต่ละคอลัมน์ด้วยข้อมูลที่ได้รับจาก API
              col1.innerHTML = '<label class="form-label">Name</label><input class="form-select" value="' + item.irp_name + '" disabled>';
              col2.innerHTML = '<label class="form-label">Maker</label><input type="text" class="form-control" value="' + item.irp_maker + '" disabled>';
              col3.innerHTML = '<label class="form-label">Model</label><input type="text" class="form-control" value="' + item.irp_model + '" disabled>';
              col4.innerHTML = '<label class="form-label">Type</label><input class="form-select" value="' + item.irp_type + '" disabled>';
              col5.innerHTML = '<label class="form-label">Qty</label><input type="number" class="form-control" value="' + item.irp_order_qty + '" disabled>';
              col6.innerHTML = '<input type="date" class="form-control" value="' + item.irp_order_time + '">';
              col7.innerHTML = '<input type="number" class="form-control" value="' + item.irp_qty + '">';
              col8.innerHTML = '<input type="date" class="form-control" value="' + item.irp_received_time + '">';
              col9.innerHTML = '<input type="number" class="form-control" value="' + item.irp_received_qty + '">';
              col10.innerHTML = '<input type="date" class="form-control" value="' + item.irp_withdraw_time + '">';
              col11.innerHTML = '<input type="number" class="form-control" value="' + item.irp_withdraw_qty + '">';
              col12.innerHTML = '<button class="btn btn-label-success mt-4" data-repeater-delete="" onclick="openEditModal(this)"></i><span class="align-middle"><i class="bx bx-edit-alt me-1" style="font-size: 25px;"></i></span></button>';
              col13.innerHTML = '<button class="btn btn-label-danger mt-4" data-repeater-delete="" onclick="deleted(this)"><span class="align-middle"><i class="bx bx-trash me-1" style="font-size: 25px;"></i></span></button>';
  
              // ซ่อนคอลัมน์ที่ไม่ต้องการแสดง
              col6.style.display = "none";
              col7.style.display = "none";
              col8.style.display = "none";
              col9.style.display = "none";
              col10.style.display = "none";
              col11.style.display = "none";
  
              rowCount++;
          });

      // ล้างค่า input หลังจากการเพิ่มข้อมูล
      selToolingrq.value = "";
      addMakerrq.value = "";
      addModelrq.value = "";
      selTyperq.value = "";
      inpQTY.value = "";
      // ให้ input แรกได้ focus หลังจากการเพิ่มข้อมูล
      selToolingrq.focus();
  }

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

  
  //-------------------------- Save Request part ----------------------------

$('#btnSaveEditRequired').on('click', function () {
  getAllRowData();

        
        var rowDataArrayString = JSON.stringify(rowDataArray);


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
              var url = API_URL + 'Ticket_control/save_required';
              const formData = new FormData()
              formData.append('rowDataArray', rowDataArrayString);
              formData.append('ist_Id', ist_Id);

              $.ajax({
                  url: base_url('TicketControl/callApiSaveRequired'),
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
                            html: 'Edit Request success',
                            timer: 2500,
                        }).then(() => {
                            $('#mdlRequiredParts').modal('hide');
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
});


// เพิ่มตัวแปร global เพื่อเก็บจำนวนแถวที่ถูกสร้างจากข้อมูลที่ได้จาก API
var addedRowsCount = 0;

// ----=- show prevention --------
$(document).on('click', '.actPrevention', function () {
    ist_Id = $(this).attr('data-id');
    
    // Clear existing data before loading new data
    $('#checkPrevention').empty();

    var url = API_URL + "Ticket_control/show_prevention";
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            ist_Id: ist_Id,
        },
        dataType: 'json',
        success: function (response) {
            if (response.result === true) {
                var data = response.data; // ข้อมูลที่ได้จาก API
        
                // กำหนดค่า prevenLength เป็นจำนวนแถวที่ได้รับจาก API
                prevenLength = data.length;
                addedRowsCount = 0;
                $('#checkPrevention').empty();
                // Loop through data and populate the form
                $.each(data, function(index, item) {
                    var newDiv = $('<div class="row" data-repeater-item=""></div>'); // สร้าง div ใหม่สำหรับแต่ละแถว

                    var inputSuggestions = $('<div class="mb-3 col-lg-6 col-xl-3">\
                                                <label class="form-label" for="inpSuggestions-' + (index + 1) + '">ข้อเสนอแนะ</label>\
                                                <input type="text" id="inpSuggestions-' + (index + 1) + '" class="form-control" placeholder="Enter suggestion" value="' + item.ipr_suggestions + '" />\
                                            </div>');

                    var inputOperated = $('<div class="mb-3 col-lg-6 col-xl-3">\
                                                <label class="form-label" for="inpOperated-' + (index + 1) + '">ดำเนินการโดย</label>\
                                                <input type="text" id="inpOperated-' + (index + 1) + '" class="form-control" placeholder="Enter operator" value="' + item.ipr_operated + '" />\
                                            </div>');

                    var inputSchedule = $('<div class="mb-3 col-lg-6 col-xl-3">\
                                                <label class="form-label" for="inpSchedule-' + (index + 1) + '">กำหนดการเสร็จ</label>\
                                                <input type="date" id="inpSchedule-' + (index + 1) + '" class="form-control" value="' + item.ipr_schedule + '" />\
                                            </div>');

                    var deleteButton = $('<div class="mb-3 col-lg-6 col-xl-3">\
                                            <button class="btn btn-label-danger mt-4 delete-row" data-repeater-delete>\
                                                <i class="bx bx-x me-1"></i>\
                                                <span class="align-middle">Delete</span>\
                                            </button>\
                                        </div>');
                    
                    // Append each input field and delete button to the new row div
                    newDiv.append(inputSuggestions);
                    newDiv.append(inputOperated);
                    newDiv.append(inputSchedule);
                    newDiv.append(deleteButton);

                    // Append the new row to the checkPrevention div
                    $('#checkPrevention').append(newDiv);
                    
                    // เพิ่มจำนวนแถวที่ถูกเพิ่มจากข้อมูลที่ได้จาก API
                    addedRowsCount++;
                });
        
                // คำนวณค่า maxElements จาก prevenLength
                maxElements = 6 - prevenLength;


            } else {
                // Error handling if necessary
                console.error('Error: Invalid response from API');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error: ' + status + ' - ' + error);
        }
    });
});

function deleteRow(row) {
    // ลบแถวที่มีปุ่มถูกคลิกซึ่งอยู่ในหน่วยของ div ที่มี class="row"
    row.closest('[data-repeater-item]').remove();
    
    // ลดจำนวนแถวที่ถูกเพิ่มขึ้นไปแล้ว
    addedRowsCount--;

    // เรียกใช้ฟังก์ชัน updateMaxElements() เพื่ออัพเดตค่า maxElements
    updateMaxElements();
}

$(document).on('click', '[data-repeater-create-f]', function () {
    // เรียกใช้ฟังก์ชัน appendRow()
    appendRow();
});


function appendRow() {
    // เช็คว่าจำนวนแถวที่ถูกเพิ่มมาแล้วไม่เกิน 5 แถว
    if (addedRowsCount < 5) {
        var newDiv = $('<div class="row" data-repeater-item=""></div>'); // สร้าง div ใหม่สำหรับแต่ละแถว
        // สร้าง input fields และ delete button
        var inputSuggestions = $('<div class="mb-3 col-lg-6 col-xl-3">\
                                    <label class="form-label" for="inpSuggestions-' + (addedRowsCount + 1) + '">ข้อเสนอแนะ</label>\
                                    <input type="text" id="inpSuggestions-' + (addedRowsCount + 1) + '" class="form-control" placeholder="Enter suggestion" value="" />\
                                </div>');

        var inputOperated = $('<div class="mb-3 col-lg-6 col-xl-3">\
                                    <label class="form-label" for="inpOperated-' + (addedRowsCount + 1) + '">ดำเนินการโดย</label>\
                                    <input type="text" id="inpOperated-' + (addedRowsCount + 1) + '" class="form-control" placeholder="Enter operator" value="" />\
                                </div>');

        var inputSchedule = $('<div class="mb-3 col-lg-6 col-xl-3">\
                                    <label class="form-label" for="inpSchedule-' + (addedRowsCount + 1) + '">กำหนดการเสร็จ</label>\
                                    <input type="date" id="inpSchedule-' + (addedRowsCount + 1) + '" class="form-control" value="" />\
                                </div>');

        var deleteButton = $('<div class="mb-3 col-lg-6 col-xl-3">\
                                <button class="btn btn-label-danger mt-4 delete-row" data-repeater-delete>\
                                    <i class="bx bx-x me-1"></i>\
                                    <span class="align-middle">Delete</span>\
                                </button>\
                            </div>');

        // Append each input field and delete button to the new row div
        newDiv.append(inputSuggestions);
        newDiv.append(inputOperated);
        newDiv.append(inputSchedule);
        newDiv.append(deleteButton);

        // Append the new row to the checkPrevention div
        $('#checkPrevention').append(newDiv);

        // เพิ่มจำนวนแถวที่ถูกเพิ่มจากข้อมูลที่ได้จาก API
        addedRowsCount++;
    } else {
        alert('You can only add up to 5 rows.');
    }
}
$(document).on('click', '.delete-row', function() {
    $(this).closest('[data-repeater-item]').remove(); // ลบแถวที่คลิกปุ่มลบอยู่
});



var prevenLength = 0;
var formRepeater = $(".form-repeater");
var row = 2;
var col = 1;
var maxElements = 5 - prevenLength;

formRepeater.on('submit', function(e) {
    e.preventDefault();
});




var allValues;

function getAllRowDataPrevention() {
    allValues = [];

    // Iterate through each repeated form element
    formRepeater.find("[data-repeater-list='group-a'] [data-repeater-item]").each(function(index) {
        var formValues = {};

        // Flag to determine if all input values are null or empty
        var allValuesNull = true;

        // Skip the first row (index 0)
        if (index !== 0) {
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
        }
    });

    // Log or do something with allValues
    console.log(allValues);
}



function deleteRow(row) {
    // ลบแถวที่มีปุ่มถูกคลิกซึ่งอยู่ในหน่วยของ div ที่มี class="row"
    row.closest('.row').remove();
    
    // ลดจำนวนแถวที่ถูกเพิ่มขึ้นไปแล้ว
    addedRowsCount--;

    // เรียกใช้ฟังก์ชัน updateMaxElements() เพื่ออัพเดตค่า maxElements
    updateMaxElements();
}

function updateMaxElements() {
    // คำนวณค่า maxElements ที่เหลืออยู่ตามจำนวนแถวที่ถูกเพิ่มมาแล้ว
    maxElements = 5 - addedRowsCount;
}



//-------------------------- Save Prevention ----------------------------

$('#btnSavePrevention').on('click', function () {
getAllRowDataPrevention();
var PervenDataArrayString = JSON.stringify(allValues);
console.log(allValues);

Swal.fire({
    title: 'Are you sure?',
    text: 'Do you want to save Change?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, save!'
}).then((result) => {

    if (result.isConfirmed) {
        var url = API_URL + 'Ticket_control/save_prevention';
        const formData = new FormData()
        formData.append('ist_Id', ist_Id);
        formData.append('PreventionallValues', PervenDataArrayString);

        $.ajax({
            url: base_url('TicketControl/callApiSavePrevention'),
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



// // ----=- show prevention --------
// $(document).on('click', '.actPrevention', function () {
//     var ist_Id = $(this).attr('data-id');
  
//     // Clear existing data before loading new data
//     $('#checkPrevention').empty();
  
//     var url = API_URL + "Ticket_control/show_prevention";
//     $.ajax({
//         url: url,
//         type: 'POST',
//         data: {
//             ist_Id: ist_Id,
//         },
//         dataType: 'json',
//         success: function(response) {
//             if (response.result === true) {
//                 var data = response.data;
//                 // Check if the received data is an array
//                 if (Array.isArray(data)) {
//                     // Loop through the data
//                     for (var i = 0; i < data.length; i++) {
//                         var itemIndex = i + 1;
//                         var newDiv = $('<div class="row"></div>');
//                         var inputSuggestions = $('<div class="mb-3 col-lg-6 col-xl-4">\
//                             <label class="form-label" for="inpSuggestions-' + itemIndex + '">ข้อเสนอแนะที่ ' + itemIndex + '</label>\
//                             <input type="text" id="inpSuggestions-' + itemIndex + '" class="form-control" placeholder="Enter suggestion" value="' + (data[i].ipr_suggestions || '') + '">\
//                         </div>');
//                         var inputOperated = $('<div class="mb-3 col-lg-6 col-xl-4">\
//                             <label class="form-label" for="inpOperated-' + itemIndex + '">ดำเนินการโดย</label>\
//                             <input type="text" id="inpOperated-' + itemIndex + '" class="form-control" placeholder="Enter operator" value="' + (data[i].ipr_operated || '') + '">\
//                         </div>');
//                         var inputSchedule = $('<div class="mb-3 col-lg-6 col-xl-4">\
//                             <label class="form-label" for="inpSchedule-' + itemIndex + '">กำหนดการเสร็จ</label>\
//                             <input type="date" id="inpSchedule-' + itemIndex + '" class="form-control" value="' + (data[i].ipr_schedule || '') + '">\
//                         </div>');
                        
//                         newDiv.append(inputSuggestions);
//                         newDiv.append(inputOperated);
//                         newDiv.append(inputSchedule);
            
//                         $('#checkPrevention').append(newDiv);
//                     }
                    
//                     // Add additional empty rows if needed
//                     var numEmptyRows = 5 - data.length;
//                     for (var j = 0; j < numEmptyRows; j++) {
//                         var emptyItemIndex = data.length + j + 1;
//                         var emptyDiv = $('<div class="row"></div>');
//                         var emptyInputSuggestions = $('<div class="mb-3 col-lg-6 col-xl-4">\
//                             <label class="form-label" for="inpSuggestions-' + emptyItemIndex + '">ข้อเสนอแนะที่ ' + emptyItemIndex + '</label>\
//                             <input type="text" id="inpSuggestions-' + emptyItemIndex + '" class="form-control" placeholder="Enter suggestion" value="">\
//                         </div>');
//                         var emptyInputOperated = $('<div class="mb-3 col-lg-6 col-xl-4">\
//                             <label class="form-label" for="inpOperated-' + emptyItemIndex + '">ดำเนินการโดย</label>\
//                             <input type="text" id="inpOperated-' + emptyItemIndex + '" class="form-control" placeholder="Enter operator" value="">\
//                         </div>');
//                         var emptyInputSchedule = $('<div class="mb-3 col-lg-6 col-xl-4">\
//                             <label class="form-label" for="inpSchedule-' + emptyItemIndex + '">กำหนดการเสร็จ</label>\
//                             <input type="date" id="inpSchedule-' + emptyItemIndex + '" class="form-control" value="">\
//                         </div>');
                        
//                         emptyDiv.append(emptyInputSuggestions);
//                         emptyDiv.append(emptyInputOperated);
//                         emptyDiv.append(emptyInputSchedule);
            
//                         $('#checkPrevention').append(emptyDiv);
//                     }
//                 } else {
//                     // Handle other data structures as needed
//                 }
//             } else {
//                 // Handle false result if needed
//             }
//         },
//         error: function(xhr, status, error) {
//             console.error('Error: ' + status + ' - ' + error);
//         }
//     });
// });



//   //-------------------------- Save Prevention ----------------------------
//   $('#btnSavePrevention').on('click', function () {
//     const allValues = getAllRowDataPrevention();

//     console.log('All values:');
//     allValues.forEach(function(row, index) {
//         console.log('Row', index + 1);
//         Object.keys(row).forEach(function(key) {
//             console.log(key + ':', row[key]);
//         });
//     });

//     for (let i = 1; i <= 5; i++) {
//         const inpSuggestions = $(`#inpSuggestions-${i}`).val();
//         const inpOperated = $(`#inpOperated-${i}`).val();
//         const inpSchedule = $(`#inpSchedule-${i}`).val();
    
//         console.log(`inpSuggestions-${i}:`, inpSuggestions);
//         console.log(`inpOperated-${i}:`, inpOperated);
//         console.log(`inpSchedule-${i}:`, inpSchedule);
//     }
// });


// function showPreventionData(data) {
//   var formRepeater = $(".form-repeater");
//   var repeaterList = formRepeater.find('[data-repeater-list="group-a"]');

//   // เคลียร์ข้อมูลเก่าทั้งหมดใน form repeater ก่อนที่จะเพิ่มข้อมูลใหม่
//   repeaterList.empty();

//   // ถ้าไม่มีข้อมูลส่งมาจาก API
//   if (data.length === 0) {
//       return; // ไม่ต้องทำอะไรเพิ่ม
//   }

//   // ลูปข้อมูลที่ได้รับมาจาก API
//   data.forEach(function(item, index) {
//       // ตรวจสอบว่ายังไม่ถึงขีดจำกัดของแถว
//       if (index < 3) {
//           var repeaterItem = $('<div class="row" data-repeater-item></div>'); // สร้าง element ของ repeater item

//           var suggestionInput = $('<input type="text" class="form-control" placeholder="Enter suggestion" />')
//               .attr('id', 'inpSuggestions-' + (index + 1))
//               .val(item.ipr_suggestions); // สร้าง input element สำหรับข้อเสนอแนะและกำหนดค่า
    
//           var operatedInput = $('<input type="text" class="form-control" placeholder="Enter operator" />')
//               .attr('id', 'inpOperated-' + (index + 1))
//               .val(item.ipr_operated); // สร้าง input element สำหรับดำเนินการโดยและกำหนดค่า
    
//           var scheduleInput = $('<input type="date" class="form-control" />')
//               .attr('id', 'inpSchedule-' + (index + 1))
//               .val(item.ipr_schedule); // สร้าง input element สำหรับกำหนดการเสร็จและกำหนดค่า
    
//           var deleteButton = $('<button class="btn btn-label-danger mt-4" data-repeater-delete><i class="bx bx-x me-1"></i><span class="align-middle">Delete</span></button>'); // สร้าง button element สำหรับลบแถว
    
//           // กำหนด event listener สำหรับลบแถวเมื่อคลิกที่ปุ่ม Delete
//           deleteButton.on('click', function() {
//               $(this).closest('[data-repeater-item]').remove(); // ลบแถวที่มีปุ่ม Delete อยู่
//           });
    
//           // เพิ่ม element ลงใน repeater item
//           repeaterItem.append(
//               $('<div class="mb-3 col-lg-6 col-xl-3"></div>').append('<label class="form-label" for="inpSuggestions-' + (index + 1) + '">ข้อเสนอแนะ</label>').append(suggestionInput),
//               $('<div class="mb-3 col-lg-6 col-xl-3"></div>').append('<label class="form-label" for="inpOperated-' + (index + 1) + '">ดำเนินการโดย</label>').append(operatedInput),
//               $('<div class="mb-3 col-lg-6 col-xl-3"></div>').append('<label class="form-label" for="inpSchedule-' + (index + 1) + '">กำหนดการเสร็จ</label>').append(scheduleInput),
//               $('<div class="mb-3 col-lg-6 col-xl-3"></div>').append(deleteButton)
//           );
    
//           repeaterList.append(repeaterItem); // เพิ่ม repeater item ลงใน repeater list
//       }
//   });
// }

var ist_Id;
$(document).on('click', '.actAddworker', function () {
    ist_Id = $(this).attr('data-id');

    var url = API_URL + "Ticket_control/drop_worker";
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            ist_Id: ist_Id,
        },
        dataType: 'json',
        success: (response) => {
            // เมื่อร้องขอสำเร็จ
            data_worker = response; // เข้าถึงข้อมูลโดยตรงจาก response โดยไม่ต้องแปลงเป็น JSON
            var empId = data_worker.map(worker => worker.swa_id);
            $('#TagifyUserList').val(empId.join(", ")); // ใส่ข้อมูลใน input
        }
    });
});

  //-------------------------- Save Manager Worker ----------------------------

  $('#btnSaveWorker').on('click', function () {
    
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
            var url = API_URL + 'Ticket_control/save_worker';
            // ดึงค่า val ของ TagifyUserList
            var selectedValues = $('#TagifyUserList').val();
            var selectedObjects = JSON.parse(selectedValues);

            var valuesOnly = selectedObjects.map(function(item) {
                return { value: item.value };
            });

            // ส่งข้อมูลไปยัง API โดยใช้ AJAX
            $.ajax({
                url: base_url('TicketControl/callApiSaveWorker'),
                type: 'POST',
                data: {
                    valuesOnly: valuesOnly,
                    ist_Id: ist_Id,
                },
                dataType: 'json',
                success: function (res) {
                    if (res.result == 1) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            html: 'Edit Worker success',
                            timer: 2500,
                        }).then(() => {
                            $('#mdlMngWorker').modal('hide');
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
});



// ------------------------------------ Submit Button ------------------------------------
// ------------------------------------ Submit Button ------------------------------------
$(document).on('click', '.actSubmit', function () {
    var ist_Id = $(this).attr('data-id');
    var statusesToSend = {}; // เก็บสถานะที่จะส่ง

    // ดึงค่า data-flag จากปุ่ม Submit
    var dataFlag = $(this).attr('data-flag');

    // ตรวจสอบว่า dataFlag ไม่เป็นค่าว่าง
    if (dataFlag) {
        var statusArray = dataFlag.split(',');

        // ตรวจสอบความถูกต้องของข้อมูลที่แยกออกมา
        if (statusArray.length === 9) {
            // กำหนดค่าสถานะแต่ละประเภทให้กับออบเจ็กต์ statusesToSend
            var statusKeys = ['equipment_status', 'jopType_status', 'problem_status', 'inspection_status', 'troubleshooting_status', 'rqPart_status', 'analyze_status', 'prevention_status', 'delivery_status'];
            for (var i = 0; i < statusKeys.length; i++) {
                statusesToSend[statusKeys[i]] = parseInt(statusArray[i]);
            }

            // เก็บประเภทที่มีสถานะไม่เป็น 3
            var invalidStatuses = statusKeys.filter(function(key) {
                return statusesToSend[key] !== 3;
            });

            // ถ้ามีประเภทที่มีสถานะไม่เป็น 3 ให้แสดง SweetAlert
            if (invalidStatuses.length > 0) {
                var errorMessage = '';
                var statusTitles = {
                    equipment_status: 'Please check: Equipment <br>',
                    jopType_status: 'Please check: JopType <br>',
                    problem_status: 'Please check: Problem Condition <br>',
                    inspection_status: 'Please check: Inspection <br>',
                    troubleshooting_status: 'Please check: Troubleshooting <br>',
                    rqPart_status: 'Please check: RqPart <br>',
                    analyze_status: 'Please check: Analyze <br>',
                    prevention_status: 'Please check: Prevention <br>',
                    delivery_status: 'Please check: Delivery <br>'
                };

                var errorMessageList = invalidStatuses.map(function(key) {
                    return statusTitles[key];
                });

                errorMessage += errorMessageList.join('');

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    html: errorMessage
                });
            } else {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to submit this ticket?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, submit ticket !'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var url = API_URL + 'Ticket_control/submit_ticket';
                        const formData = new FormData()
                        formData.append('ist_Id', ist_Id);
                        formData.append('statusesToSend', JSON.stringify(statusesToSend));

                        $.ajax({
                            url: base_url('TicketControl/callApiSubmitTicket'),
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            cache: false,
                            dataType: 'json',
                            success: function(res) {
                                if (res.result == 1) {
                                    console.log('Result:', res.result);
                                    // Display success message and perform actions
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        html: 'Ticket submitted successfully.',
                                    }).then(() => {
                                        shDataTable();
                                    });
                                } else {
                                    // Display error message or handle other cases
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        html: 'Failed to submit ticket. Please try again later.',
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:', error);
                                // Handle error cases if needed
                            }
                        });
                    }
                });
            }
        }
    }
});
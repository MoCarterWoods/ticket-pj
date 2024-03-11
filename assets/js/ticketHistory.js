
$(document).ready(function() {
    shDataTable(); // เรียกใช้ฟังก์ชัน shDataTable เมื่อเอกสารพร้อม
  });
  
  function shDataTable() {
    // URL of the API
    
    var apiUrl = 'http://127.0.0.1/api/Ticket_History/show_data';
  
    // Perform Ajax request
    $.ajax({
      url: apiUrl,
      type: 'GET',
      dataType: 'json',
      success: function (data) {
        var html = "";
        // Loop through the data and append menu items
        data.forEach(function(item, index) {
            var avatarHtml = ""; // Initialize avatar HTML
            if (item.swa_emp_code !== null) { // Check if swa_emp_code is not null
                var swaEmpCodes = item.swa_emp_code ? item.swa_emp_code.split(',') : []; // Split swa_emp_code by comma or initialize as empty array if it's null or empty
            
                var swaFirstNames = item.swa_fristname ? item.swa_fristname.split(',') : []; // Split swa_fristname by comma or initialize as empty array if it's null or empty
            
                for (var k = 0; k < swaEmpCodes.length; k++) {
                    var empCode = swaEmpCodes[k].trim(); // Remove any leading or trailing whitespace
                    var firstName = swaFirstNames[k] ? swaFirstNames[k].trim() : ''; // Remove any leading or trailing whitespace for the first name
            
                    if (empCode) { // Check if the employee code is not empty
                        avatarHtml += `
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="${firstName}" class="avatar pull-up">
                                <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/${empCode}.jpg" alt="Avatar" onerror="this.onerror=null; this.src='assets/img/avatars/no-avatar.png'">
                            </li>
                        `;
                    }
                }
            }
            
            html += `
            <tr>
              <td class="text-center">${index + 1}</td>
              <td class="text-center">${item.ist_line_cd == '' ? `${item.ist_area_other}` : `${item.ist_line_cd}`}</td>
              <td class="text-center">${item.mts_name === null ? '-' : item.mts_name}</td>
              <td class="text-center">${item.ist_process === null ? '-' : item.ist_process}</td>
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
              <button type="button" class="btnDetail btn rounded-pill btn-primary" data-ac-id="${item.ist_id}" value="${item.ist_status_flg}" id="btnDetail" onclick="openModal()">View Detail</button>
            </td>
            
            </tr>
            `;
          });
  $("#loadingPage").attr("style", "display: none;");
          
                      // Destroy the DataTable instance
                      $('#tblTicketHistory').DataTable().destroy();
          
                      // Reinitialize the DataTable with the updated table body
                      $("#tbody").html(html);
          
                      // Reinitialize the DataTable with the updated table body
                      $("#tblTicketHistory").DataTable({ scrollX: true });
          
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
  function openModal() {
    $('#mdlEdit').modal('show');
}



$(document).on('click', '#btnSearch', function () {
  var inpStartDate = $('#inpStartDate').val();
  var inpEndDate = $('#inpEndDate').val();
  var apiUrl = 'http://127.0.0.1/api/Ticket_History/show_data_list';

  $.ajax({
      url: apiUrl,
      type: 'POST',
      data: {
          inpStartDate: inpStartDate,
          inpEndDate: inpEndDate
      },
      dataType: 'json',
      
      success: function (data) {
        $("#loadingPage").show();

        var html = "";
        // Loop through the data and append menu items
        data.forEach(function(item, index) {
            var avatarHtml = ""; // Initialize avatar HTML
            if (item.swa_emp_code !== null) { // Check if swa_emp_code is not null
                var swaEmpCodes = item.swa_emp_code ? item.swa_emp_code.split(',') : []; // Split swa_emp_code by comma or initialize as empty array if it's null or empty
            
                var swaFirstNames = item.swa_fristname ? item.swa_fristname.split(',') : []; // Split swa_fristname by comma or initialize as empty array if it's null or empty
            
                for (var k = 0; k < swaEmpCodes.length; k++) {
                    var empCode = swaEmpCodes[k].trim(); // Remove any leading or trailing whitespace
                    var firstName = swaFirstNames[k] ? swaFirstNames[k].trim() : ''; // Remove any leading or trailing whitespace for the first name
            
                    if (empCode) { // Check if the employee code is not empty
                        avatarHtml += `
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="${firstName}" class="avatar pull-up">
                                <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/${empCode}.jpg" alt="Avatar" onerror="this.onerror=null; this.src='assets/img/avatars/no-avatar.png'">
                            </li>
                        `;
                    }
                }
            }
            
            html += `
            <tr>
              <td class="text-center">${index + 1}</td>
              <td class="text-center">${item.ist_line_cd == '' ? `${item.ist_area_other}` : `${item.ist_line_cd}`}</td>
              <td class="text-center">${item.mts_name === null ? '-' : item.mts_name}</td>
              <td class="text-center">${item.ist_process === null ? '-' : item.ist_process}</td>
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
              <button type="button" class="btnDetail btn rounded-pill btn-primary" data-ac-id="${item.ist_id}" value="${item.ist_status_flg}" id="btnDetail" onclick="openModal()">View Detail</button>
            </td>
            
            </tr>
            `;
          });
  $("#loadingPage").attr("style", "display: none;");
          
                      // Destroy the DataTable instance
                      $('#tblTicketHistory').DataTable().destroy();
          
                      // Reinitialize the DataTable with the updated table body
                      $("#tbody").html(html);
          
                      // Reinitialize the DataTable with the updated table body
                      $("#tblTicketHistory").DataTable({ scrollX: true });
          
                      // Hide loading indicator
                      $("#loadingPage").attr("style", "display: none;");
                  },
      error: function (xhr, status, error) {
          console.error('Error:', error);
      }
  });
});

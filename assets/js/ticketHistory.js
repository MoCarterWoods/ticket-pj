$(document).ready(function () {
  $("#loadingPage").attr("style", "display: none;");
});
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
              ${data[i].swa_emp_code === null ? '-' : data[i].swa_emp_code.split(",").join(" | ")}
              </td>
              <td class="text-center">
              <button type="button" class="btnDetail btn rounded-pill btn-primary"" data-ac-id="${data[i].ist_id}" value="${data[i].ist_status_flg}" id="btnDetail">View Detail</button>
            </td>
            
            </tr>
          `;
  
          // เรียกใช้งาน generateAvatarHTML เพื่อสร้าง HTML สำหรับ avatar
          var avatarHtml = generateAvatarHTML(data, i);
          $(`#avatarGroup_${i}`).html(avatarHtml);
        }
  
        // ทำลาย DataTable ที่มีอยู่ก่อนที่จะปรับปรุงเนื้อหาของตาราง
        $('#tblTicketHistory').DataTable().destroy();
  
        // ปรับปรุงเนื้อหาของตารางและเริ่มใช้ DataTable ใหม่
        $("#tbody").html(html).promise().done(() => {
          $("#tblTicketHistory").DataTable({ scrollX: true });
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
  
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
              </li><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="RATEEPAR" class="avatar pull-up">
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
            <button type="button" class="btn rounded-pill btn-primary"" ${data[i].ist_status_flg == 3 ? '' : 'style="display: none;"'} id="btnAccept">Accept</button>
            <div class="btn-group">
            <button type="button" class="btn btn-label-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true" ${data[i].ist_status_flg == 5 || data[i].ist_status_flg == 7 || data[i].ist_status_flg == 8 ? '' : 'style="display: none;"'}>Edit</button>
              <ul class="dropdown-menu" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);" data-popper-placement="bottom-start">
                <li><a class="dropdown-item" href="" data-toggle="modal" data-target="#mdlEdit">Equipment</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Problem Condition</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Job Type</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Inspection</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Troubleshooting</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Required Parts</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Analyze Problem</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Prevention</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Delivery</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Submit</a></li>
              </ul>
            </div>
            <button type="button" class="btn rounded-pill btn-secondary" ${data[i].ist_status_flg == 3 || data[i].ist_status_flg == 5 || data[i].ist_status_flg == 7 || data[i].ist_status_flg == 8 ? '' : 'style="display: none;"'} >Cancle</button>
          </td>
          
          </tr>
        `;

        // เรียกใช้งาน generateAvatarHTML เพื่อสร้าง HTML สำหรับ avatar
        // var avatarHtml = generateAvatarHTML(data, i);
      
        console.log(data[i]);
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

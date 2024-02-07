$(() => {


    // Function to show Main Menu
    function showGroupDetail() {
        var url = API_URL + "App_Manage_permis_detail/show_group";
        $.ajax({
            method: "get",
            url: base_url("AppPermissionDetail/callApiShowPerGroup?url=" + url),
            dataType: 'Json',

            success: (response) => {
                for (let i = 0; i < response.length; i++) {
                    const data = response[i];
                    $('.selGroup').append(`<option value="${data.spga_id}">${data.spga_name}</option>`);
                }
            },
            error: (err) => {
                console.log(err);
            },
        });
    }

    // Show Main Menu on page load
    showGroupDetail();

    // Event handler for clicking the search button
    $(document).on('click', '#btnSerchMain', function () {
        loadData();
    });
})


function loadData() {
    // MainmenuDropdown();
    MenuDropdown();
    shDataTable(); // เรียกเพื่อโหลดข้อมูลในตารางเมื่อหน้าเว็บโหลด
}

function shDataTable() {
    var permisId = $('#selGroup').val();

    if (permisId == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Ooops..',
            html: 'Please choose Main Menu',
        });
    } else {
        var x = document.getElementById("content");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
        var url = API_URL + "App_Manage_permis_detail/show_tb?permisId=" + permisId;
        $.ajax({
            method: "POST",
            url: base_url("AppPermissionDetail/callApiShowTable?url=" + url),
            data: {
                permisId: permisId,
            },
            dataType: 'Json',
            success: (data) => {
                var html = "";
                for (let i = 0; i < data.length; i++) {
                    html += `
                    <tr>
                    <td class="text-center">${i+1}</td>
  <td class="text-center"><strong>${data[i].sma_name}</strong></td>
  <td class="text-center">${data[i].spda_updated_date}</td>
  <td class="text-center">${data[i].spda_updated_by}</td>
  <td class="text-center">
    <button class="btnStatus btn badge bg-label-${data[i].spda_status_flg == 1 ? 'success' : 'secondary'} me-1" id="flgStatus" data-sa-id="${data[i].spga_id}" value="${data[i].spda_status_flg}">
      ${data[i].spda_status_flg == 1 ? 'Enable' : 'Disable'}
    </button>
  </td>
  <td class="text-center">

  <button class="btn btn-label-danger tblEditBtn btn btn-icon" data-repeater-delete="" data-bs-toggle="modal" data-bs-target="#mdlEdit" id="btnEdit" data-id="${data[i].spga_id}">
                      <i class="tf-icons bx bxs-edit"></i>
                  </button>


  </td>
</tr>

                  `;
                }
                $('#tblPermis').dataTable().fnDestroy();
                $("#tbody")
                    .html(html)
                    .promise()
                    .done(() => {
                        $("#tblPermis").DataTable({
                            scrollX: true,
                        });
                    });
            },
            error: (err) => {
                console.log(err);
            },
        });
    }
}




function MenuDropdown() {
    var dropdown = $('.selMenuGroupName');

    var permisId = $('#selGroup').val();
    // เรียก API
    var url = API_URL + "App_Manage_permis_detail/drop_menu?permisId=" + permisId;
    $.ajax({
        method: "POST",
        url: base_url("AppPermissionDetail/callApiShowMenuDrop?url=" + url),
        data: {
            permisId: permisId,
        },
        dataType: 'json',
        success: (response) => {
            console.log(response); // ดูข้อมูลที่ได้รับจาก API ใน Console Log

            // ล้างค่าเดิมทั้งหมดใน dropdown ก่อน
            dropdown.val('').empty();

            // เพิ่ม option แรก
            dropdown.append('<option value="">Choose Menu</option>');

            // วนลูปเพื่อเพิ่ม options เข้าไปใน dropdown
            for (let i = 0; i < response.length; i++) {
                const menu = response[i];
                dropdown.append(`<option value="${menu.sma_id}">${menu.sma_name}</option>`);
            }
            
        },
        error: (err) => {
            console.log(err);
        },
    });
}
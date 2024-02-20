
$(() => {
    $(document).ready(function () {
        $("#loadingPage").attr("style", "display: none;");
    });

    // Function to show Main Menu
    function showGroupDetail() {
        var url = API_URL + "Manage_permis_detail/show_group";
        $.ajax({
            method: "get",
            url: base_url("ManagePermission/callApiShowData?url=" + url),
            dataType: 'Json',

            success: (response) => {
                for (let i = 0; i < response.length; i++) {
                    const data = response[i];
                    $('.selGroup').append(`<option value="${data.spg_id}">${data.spg_name}</option>`);
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
   
    MainmenuDropdown();
    SubmenuDropdown();
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
        var url = API_URL + "Manage_permis_detail/show_tb?permisId=" + permisId;
        $.ajax({
            method: "POST",
            url: base_url("ManagePermission/callApiShowTable?url=" + url),
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
  <td class="text-center"><strong>${data[i].smm_name}</strong></td>
  <td class="text-center"><strong>${data[i].ssm_name}</strong></td>
  <td class="text-center">${data[i].spd_updated_date}</td>
  <td class="text-center">${data[i].spd_updated_by}</td>
  <td class="text-center">
    <button class="btnStatus btn badge bg-label-${data[i].spd_status_flg == 1 ? 'success' : 'secondary'} me-1" id="flgStatus" data-sa-id="${data[i].spd_id}" value="${data[i].spd_status_flg}">
      ${data[i].spd_status_flg == 1 ? 'Enable' : 'Disable'}
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


function MainmenuDropdown() {
    var dropdown = $('.selMenuGroupName');
    
    var permisId = $('#selGroup').val();

    // เรียก API
    var url = API_URL + "Manage_permis_detail/drop_main?permisId=" + permisId;
    $.ajax({
        method: "POST",
        url: base_url("ManagePermission/callApiShowMenuDrop?url=" + url),
        data: {
            permisId: permisId,
        },
        dataType: 'json',
        success: (response) => {
            console.log(response);

            // เคลียร์ค่า value และลบ option ทั้งหมดใน dropdown
            dropdown.val('').empty();

            // เพิ่ม option แรก
            dropdown.append('<option value="">Choose Group Name</option>');

            // วนลูปเพื่อเพิ่ม options เข้าไปใน dropdown
            for (let i = 0; i < response.length; i++) {
                const menu = response[i];
                dropdown.append(`<option value="${menu.smm_id}">${menu.smm_name}</option>`);
            }

            // บันทึกค่าที่เลือกไว้ในตัวแปร data-main-menu
            var selectedMainMenu = dropdown.val();
            dropdown.data('main-menu', selectedMainMenu);

            // เรียกใช้ SubmenuDropdown หลังจากที่ MainmenuDropdown ได้ค่ามาแล้ว
            // ตรงนี้คือส่วนที่เราเพิ่มเข้ามา
            $('.selMenuGroupName').change(function () {
                SubmenuDropdown();
            });
        },
        error: (err) => {ผ
            console.log(err);
        },
    });
}



function SubmenuDropdown() {
    var mainMenuDropdown = $('.selMenuGroupName');
    var submenuDropdown = $('.selSubMenuName');
    var permisId = $('#selGroup').val();
    var mainId = mainMenuDropdown.val();

    // เรียก API
    var url = API_URL + "Manage_permis_detail/drop_sub?permisId=" + permisId;
    $.ajax({
        method: "POST",
        url: base_url("ManagePermission/callApiShowSubDrop?url=" + url),
        data: {
            permisId: permisId,
            mainId: mainId,
        },
        dataType: 'json',
        success: (response) => {
            console.log(response); // ดูข้อมูลที่ได้รับจาก API ใน Console Log

            submenuDropdown.val('').empty();

            // เพิ่ม option แรก
            submenuDropdown.append('<option value="">Choose Sub Name</option>');

            // วนลูปเพื่อเพิ่ม options เข้าไปใน dropdown
            for (let i = 0; i < response.length; i++) {
                const menu = response[i];
                submenuDropdown.append(`<option value="${menu.ssm_id}">${menu.ssm_name}</option>`);
            }
        },
        error: (err) => {
            console.log(err);
        },
    });
}





//-------------------------- Update flg status ----------------------------------

$(document).on('click', '.btnStatus', function () {
    const detailId = $(this).data('sa-id');
    var newStatus = $(this).closest('td').find('.btnStatus').val();

    if (newStatus == 1) {
        newStatus = 0;
    } else if (newStatus == 0) {
        newStatus = 1;
    }

    Swal.fire({
        title: 'Are you Sure',
        text: "You want to Changed Status ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, change it!'
    }).then((result) => {
        if (result.isConfirmed) {
            var url = API_URL + "Manage_permis_detail/update_flg";
            $.ajax({
                url: base_url('ManagePermission/callApiUpdateStatus?url=') + url,
                type: 'POST',
                data: {
                    detailId: detailId,
                    newStatus: newStatus,
                },
                dataType: 'json',
                success: function (response) {
                    if (response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            html: 'Changed Status Success!',
                            timer: 2500,
                        }).then(() => {
                            shDataTable();
                        });
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Warning!',
                            html: 'Change status Fail',
                            timer: 2500,
                        });
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    });
});



//-------------------------- add Permiss ----------------------------------

$(document).ready(function () {
    $('#btnSaveAddPer').on('click', function () {
        var arrDataAdd = [];
        var PermisID = $('#selGroup').val();
        var MenuGroup = $('#selMenuGroupName').val();
        var SubMenu = $('#selSubMenuName').val();


        if (MenuGroup == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please choose MenuGroup code',
            })
        } else if (SubMenu == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please choose SubMenu',
            })
        }  else {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to add Permission",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, add Permission!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = API_URL + 'Manage_permis_detail/insert_permiss';
                    const formData = new FormData()
                    formData.append('PermisID', PermisID);
                    formData.append('MenuGroup', MenuGroup);
                    formData.append('SubMenu', SubMenu);

                    
                    $.ajax({
                        url: base_url('ManagePermission/callApiAddPermiss'),
                        type: 'POST',
                        data: formData,
                        processData: false,
 contentType: false,
    cache: false,
                        dataType: 'json',
                        success: function(res) {
                            if (res.result == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success !',
                                    html: 'Add Permission success',
                                    timer: 2500,
                                }).then(() => {
                                    // $('#btnBack').trigger('click');
                                    loadData()
                                    
                                });
                            } else if (res.result == 9) {
                                Swal.fire({
            
                                    icon: 'warning',
                                    title: 'Ooops...',
                                    html: 'This permission already exists.',
                                }).then(() => {
                                    
                                });
                            } else if (res.result == 2) {
                                Swal.fire({
            
                                    icon: 'warning',
                                    title: 'Ooops...',
                                    html: 'Group and Sub do not match.',
                                }).then(() => {
                                    
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ooops...',
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


//-------------------------- Update Account ----------------------------------
var data_mmn;
var mmnId;

$(document).on('click', '.tblEditBtn', function () {
    let id = $(this).attr('data-id');
    mmnId = id;

    var url = API_URL + "Manage_permis_detail/show_show_edit";
    
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            id: id,
        },
        dataType: 'json',
        success: (response) => {
            console.log(response.data);
            
            // ตรวจสอบให้แน่ใจว่า response.result เป็น true
            if (response.result) {
                // ดึงค่า smm_name และ ssm_name จาก response.data
                const smmName = response.data.smm_name;
                const ssmName = response.data.ssm_name;
                const smmId = response.data.smm_id;
                const ssmId = response.data.ssm_id;
        
                // Log ค่าทั้งหมดเพื่อตรวจสอบว่าถูกต้อง
                console.log(`smm_id: ${smmId}, smm_name: ${smmName}, ssm_id: ${ssmId}, ssm_name: ${ssmName}`);
        
                // ตั้งค่าให้กับ element ที่มี id ตามที่ระบุ
                $('#edtMainmenu').empty(); // เคลียร์ตัวเลือกเดิมทั้งหมด
                $('#edtMainmenu').append($('<option>', {
                    value: smmId,
                    text: smmName
                }));
                $('#edtMainmenu').val(smmId);
                
                // เพิ่มตัวเลือกใหม่ในเมนูย่อยและเลือกตัวเลือกที่ต้องการ
                $('#edtSubEdit').empty(); // เคลียร์ตัวเลือกเดิมทั้งหมด
                $('#edtSubEdit').append($('<option>', {
                    value: ssmId,
                    text: ssmName
                }));
                $('#edtSubEdit').val(ssmId).trigger("change");
            } else {
                // กรณีที่ไม่พบข้อมูลหรือเกิดข้อผิดพลาด
                console.error("Error in API response:", response);
            }
        },
        
    });
});

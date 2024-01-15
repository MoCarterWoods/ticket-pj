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
                            <td><strong>${i + 1}</strong></td>
                            <td><strong>${data[i].smm_name}</strong></td>
                            <td><strong>${data[i].ssm_name}</strong></td>
                            <td class="">${data[i].spd_updated_date}</td>
                            <td class="">${data[i].spd_updated_by}</td>
                            <td>
                                <button class="btnStatus btn badge bg-label-${data[i].spd_status_flg == 1 ? 'success' : 'danger'} me-1" id="flgStatus" data-sa-id="${data[i].spd_id}" value="${data[i].spd_status_flg}">${data[i].spd_status_flg == 1 ? 'Enable' : 'Disable'}</button>
                            </td>
                            <td class="">
                                <a href="" class="tblEditBtn btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#mdlEdit" id="btnEdit" data-id="${data[i].spd_id}">
                                    <i class="bx bxs-edit"></i>
                                </a>
                            </td>
                        </tr>`;
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

$(() => {


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
        shDataTable();
    });
})


$('#selMenuGroupName').on('change', function () {
    let id = $('#selMenuGroupName').val();
    $('#selSubMenuName option').remove();
    $('#selSubMenuName').append(`<option value="">Choose Sub Menu Name</option>`)
       for (let i = 0; i < arrSub.subMenu.length; i++) {
            const data = arrSub.subMenu[i];
            if(data.smm_id == id && data.ssm_status == 1){
                $('#selSubMenuName').append(`<option value="${data.ssm_id}">${data.ssm_name}</option>`)
            }
        }
})
$('#selMenuGroupName').on('change', function () {
    let id = $('#selMenuGroupName').val();
    $('#selSubMenuName option').remove();
    $('#selSubMenuName').append(`<option value="">Choose Sub Menu Name</option>`)
       for (let i = 0; i < arrSub.subMenu.length; i++) {
            const data = arrSub.subMenu[i];
            if(data.smm_id == id && data.ssm_status == 1){
                $('#selSubMenuName').append(`<option value="${data.ssm_id}">${data.ssm_name}</option>`)
            }
        }
})

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
        confirmButtonText: 'Yes, delete it!'
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

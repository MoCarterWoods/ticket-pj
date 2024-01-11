// Function to show DataTable
function shDataTable() {
    var mainId = $('#selMainMenu').val();

    if (mainId == '') {
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
        var url = API_URL + "Manage_submenu/show_submenu?mainId=" + mainId;
        $.ajax({
            method: "POST",
            url: base_url("SubMenu/callApiShowData?url=" + url),
            data: {
                mainId: mainId,
            },
            dataType: 'Json',
            success: (data) => {
                var html = "";
                for (let i = 0; i < data.length; i++) {
                    html += `
                        <tr>
                            <td> <strong>${i + 1}</strong></td>
                            <td> <strong>${data[i].ssm_name}</strong></td>
                            <td> <strong>${data[i].ssm_controller}</strong></td>
                            <td class="">${data[i].ssm_updated_date}</td>
                            <td class="">${data[i].ssm_updated_by}</td>
                            <td>
                                <button class="btnStatus btn badge bg-label-${data[i].ssm_status_flg == 1 ? 'success' : 'danger'} me-1" id="flgStatus" data-sa-id="${data[i].ssm_id}" value="${data[i].ssm_status_flg}"> ${data[i].ssm_status_flg == 1 ? 'Enable' : 'Disable'}</button>
                            </td>
                            <td class="">
                                <a href="" class="tblEditBtn btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#mdlEdit" id="btnEdit" data-id="${data[i].ssm_id}">
                                    <i class="bx bxs-edit"></i>
                                </a>
                            </td>
                        </tr>`;
                }
                $('#tblSubMenu').dataTable().fnDestroy();
                $("#tbody")
                    .html(html)
                    .promise()
                    .done(() => {
                        $("#tblSubMenu").DataTable({
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
    $('#staticBackdropEdit').on('hidden.bs.modal', function () {
        $('#errMegedit').css('display', 'none');
    });

    // Function to show Main Menu
    function showMainMenu() {
        var url = API_URL + "Manage_mainmenu/show_main_menu";
        $.ajax({
            method: "get",
            url: base_url("SubMenu/callApi?url=" + url),
            dataType: 'Json',
            success: (response) => {
                for (let i = 0; i < response.length; i++) {
                    const data = response[i];
                    $('.selMainMenu').append(`<option value="${data.smm_id}">${data.smm_name}</option>`);
                }
            },
            error: (err) => {
                console.log(err);
            },
        });
    }

    // Show Main Menu on page load
    showMainMenu();

    // Event handler for clicking the search button
    $(document).on('click', '#btnSerchMain', function () {
        shDataTable();
    });

    

    
    //-------------------------- Update flg status ----------------------------------

    $(document).on('click', '.btnStatus', function () {
        const smId = $(this).data('sa-id');
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
                var url = API_URL + "Manage_submenu/update_flg";
                $.ajax({
                    url: base_url('SubMenu/callApiUpdateStatus?url=') + url,
                    type: 'POST',
                    data: {
                        smId: smId,
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
});

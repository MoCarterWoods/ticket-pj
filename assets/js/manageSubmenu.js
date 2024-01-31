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
                    <td class="text-center" style="background-color: #f8f8f8;"><strong>${i + 1}</strong></td>
                    <td class="text-center"><strong>${data[i].ssm_name}</strong></td>
                    <td class="text-center"><strong>${data[i].ssm_controller}</strong></td>
                    <td class="text-center">${data[i].ssm_updated_date}</td>
                    <td class="text-center">${data[i].ssm_updated_by}</td>
                    <td class="text-center">
                      <button class="btnStatus btn badge bg-label-${data[i].ssm_status_flg == 1 ? 'success' : 'danger'} me-1" id="flgStatus" data-sa-id="${data[i].ssm_id}" value="${data[i].ssm_status_flg}">
                        ${data[i].ssm_status_flg == 1 ? 'Enable' : 'Disable'}
                      </button>
                    </td>
                    <td class="text-center">

                      <button type="button" class="tblEditBtn btn btn-icon btn-secondary" style="width: 30px;height: 30px;" data-bs-toggle="modal" data-bs-target="#mdlEdit" id="btnEdit" data-id="${data[i].ssm_id}">
                      <span class="tf-icons bx bxs-edit"></span>
                    </button>

                    </td>
                  </tr>
                  `;
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
        var url = API_URL + "Manage_submenu/show_main_menu";
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

//-------------------------- add Submenu ----------------------------------

$(document).ready(function () {
    $('#btnSaveAdd').on('click', function () {
        var mainId = $('#selMainMenu').val()
        var SunMenuName = $('#inpSubMenuName').val()
        var SubMenuCon = $('#inpSubMenuCon').val()

        if (SunMenuName == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter main menu',
            })
        } else if (SubMenuCon == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter main menu icon',
            })
        } else if (!isThaiLanguage(SunMenuName) || !isThaiLanguage(SubMenuCon)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter in English only.',
            })
        } else {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to add Main Menu",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, add!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = API_URL + 'Manage_submenu/insert_sub_menu';
                    const formData = new FormData()
                    formData.append('SunMenuName', SunMenuName);
                    formData.append('SubMenuCon', SubMenuCon);
                    formData.append('mainId', mainId);

                    $.ajax({
                        url: base_url('SubMenu/callApiAddSubMenu'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: 'json',
                        success: function (res) {
                            console.log('Response from the server:', res); // Log the response to the console
                            if (res && res.result == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    html: 'Add SubMenu success',
                                    timer: 2500,
                                }).then(() => {
                                    // $('#btnBack').trigger('click');
                                    $('#inpSubMenuName').val('')
                                    $('#inpSubMenuCon').val('')
                                    shDataTable()
                                });
                            } else if (res && res.result == 9) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Ooops...',
                                    html: 'This SubMenu already exists.',
                                }).then(() => {

                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ooops...',
                                    html: 'A system error has occurred.',
                                });
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('AJAX request failed:', status, error);
                        }
                    });
                }
            });
        }
    });
});



//-------------------------- Update Sub ----------------------------------
var data_mmn;
var subId;

$(document).on('click', '.tblEditBtn', function () {


let id = $(this).attr('data-id');
subId = id
var url = API_URL + "Manage_submenu/show_show_smm";
$.ajax({
// url: base_url('ManageAccount/callApiEditAccount'),
url: API_URL + "Manage_submenu/show_show_smm",
type: 'POST',
data: {
    id: id,
},
dataType: 'json',
success: (response) => {

   
    data_mmn = response.data
   
    // accId = response
    // for (let i = 0; i < response.length; i++) {
    //     const data = response[i];
        $('#edtSubMenu').val(response.data.ssm_name)
        // $('#edtEmpPassword').val(response.data.sa_emp_password)
        $('#edtController').val(response.data.ssm_controller)
        $('#edtOrderNo').val(response.data.ssm_order_no)

    // }
}
});
});


//-------------------------- Save Edit ----------------------------------

$(document).ready(function () {
    $('#btnSaveEdit').on('click', function () {
        var SubName = $('#edtSubMenu').val();
        var SubCon = $('#edtController').val();
        var OrderNo = $('#edtOrderNo').val();

        if (data_mmn && data_mmn.ssm_name && data_mmn.ssm_controller == SubCon && data_mmn.ssm_order_no == OrderNo) {
            Swal.fire({
                icon: 'success',
                title: 'Not changed!',
                html: 'The information has not changed.',
                timer: 2500,
            }).then(() => {
                $('#mdlEdit').modal('hide');
                $('#btnBack').trigger('click');
            });
        } else if (SubName == '' || SubCon == '' || OrderNo == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please fill in all the required fields.',
            });
        } else if (!isThaiLanguage(SubName) || !isThaiLanguage(SubCon) || !isThaiLanguage(OrderNo)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter in English only.',
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
                    var url = API_URL + 'Manage_submenu/edit_sub_menu';
                    const formData = new FormData()
                    formData.append('SubName', SubName);
                    formData.append('SubCon', SubCon);
                    formData.append('OrderNo', OrderNo);
                    formData.append('subId', subId);

                    $.ajax({
                        url: base_url('SubMenu/callApiSaveEdit'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: 'json',
                        success: function (res) {
                            console.log("sssssjd=>>", res);
                            if (res.result == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    html: 'Edit main menu success',
                                    timer: 2500,
                                }).then(() => {
                                    $('#mdlEdit').modal('hide');
                                    shDataTable();
                                });
                            } else if (res.result == 2) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Oops...',
                                    text: 'Duplicate value!!',
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

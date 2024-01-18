$(() => {



    shDataTable()
    function shDataTable()  {
 
        $(document).ready(function () {
        // URL of the API
        var apiUrl = 'http://127.0.0.1/api/App_Manage_menu/show_menu';
    
        // Perform Ajax request
        $.ajax({
            url: apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Get the menu container

    
                var html = "";
                // Loop through the data and append menu items
                for (var i = 0; i < data.length; i++) {
                    html += `
                    <tr>
                    <td class="text-center"><i></i> <strong>${i+1}</strong></td>
                    <td class="text-center"><i></i> <strong>${data[i].sma_name}</strong></td>
                    <td class="text-center"><i></i>${data[i].sma_created_date}</td>
                    <td class="text-center"><i></i>${data[i].sma_created_by}</td>
                    
                    <td class="text-center">
                      <button class="btnStatus btn badge bg-label-${data[i].sma_status_flg == 1 ? 'success' : 'danger'} me-1" id="flgStatus" data-sa-id="${data[i].sma_id}" value="${data[i].sma_status_flg}">
                        ${data[i].sma_status_flg == 1 ? 'Enable' : 'Disable'}
                      </button>
                    </td>
                    <td class="text-center" style="">
                      <a href="" class="tblEditBtn btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#mdlEdit" id="btnEdit" data-id="${data[i].sma_id}">
                        <i class="bx bxs-edit"></i>
                      </a>
                    </td>
                  </tr>
                  `;
                   
                }
                $('#tblManageMenu').dataTable().fnDestroy()
	                    $("#tbody")
	                        .html(html)
	                        .promise()
	                        .done(() => {
	                            $("#tblManageMenu").DataTable({
	                                scrollX: true,
	                            });
	                        });
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
            }
        });
    
});

    //-------------------------- Update flg status ----------------------------------

    $(document).on('click', '.btnStatus', function () {
        const saId = $(this).data('sa-id');
        var newStatus = $(this).closest('td').find('.btnStatus').val();

        if (newStatus == 1) {
            newStatus = 0
            
        } else if (newStatus == 0) {
            newStatus = 1
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
                var url = API_URL + "App_Manage_menu/upstatus";
                $.ajax({
                    url: base_url('AppManageMenu/callApiUpdateStatus?url=') + url,
                    type: 'POST',
                    data: {
                        saId: saId,
                        newStatus: newStatus,
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                html: 'Changed Status Success!',
                                timer: 2500,
                            }).then(() => {
                                shDataTable()
                                    // location.reload();
                            })
                        } else if (response == false) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Warning!',
                                html: 'Change status Fail',
                                timer: 2500,
                            })
                        }


                    },
                    error: function (error) {

                    }
                });

            }
        })

    });
    }


    //-------------------------- add Account ----------------------------------

    $(document).ready(function () {
        $('#btnSaveAdd').on('click', function () {
            var arrDataAdd = [];
            var MenuName = $('#addMenuName').val();
            var MenuPic = $('#addMenuPic').val();
            var MenuPart = $('#addMenuPart').val();
            var MenuRout = $('#addMenuRout').val();
    
            if (MenuName == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Please enter Menu Name',
                })
            } else if (MenuPic == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Please enter Menu Pic',
                })
            } else if (MenuPart == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Please enter Menu Part',
                })
            } else if (MenuRout == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Please enter Menu Rout',
                })
            } else {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to add Menu",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, add Menu!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var url = API_URL + 'App_Manage_menu/insert_menu';
                        const formData = new FormData()
                        formData.append('MenuName', MenuName);
                        formData.append('MenuPic', MenuPic);
                        formData.append('MenuPart', MenuPart);
                        formData.append('MenuRout', MenuRout);

                        
                        $.ajax({
                            url: base_url('AppManageMenu/callApiAddMenu'),
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
                                        html: 'Add Menu success',
                                        timer: 2500,
                                    }).then(() => {
                                        $('#addMenuName').val('');
            $('#addMenuPic').val('');
            $('#addMenuRout').val('');
                                        $('#mdlAdd').modal('hide') //show
                                        shDataTable()
                                        
                                    });
                                } else if (res.result == 9) {
                                    Swal.fire({
                
                                        icon: 'warning',
                                        title: 'Ooops...',
                                        html: 'This Menu already exists.',
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


    //-------------------------- Show Update Menu ----------------------------------
    var data_acc
    var accId
    $(document).on('click', '.tblEditBtn', function() {


    let id = $(this).attr('data-id');
    accId = id
    var url = API_URL + "App_Manage_menu/show_edit_menu";
    $.ajax({
        // url: base_url('ManageAccount/callApiEditAccount'),
        url: API_URL + "App_Manage_menu/show_edit_menu",
        type: 'POST',
        data: {
            id: id,
        },
        dataType: 'json',
        success: (response) => {

        
            data_acc = response.data
        
            // accId = response
            // for (let i = 0; i < response.length; i++) {
            //     const data = response[i];
                $('#edtMenuName').val(response.data.sma_name)
                $('#edtMenuPic').val(response.data.sma_pic)

                $('#edtMenuRout').val(response.data.sma_route)
            // }
        }
    });
    })



    //-------------------------- Save Edit ----------------------------------
    $(document).ready(function () {
        $('#btnSaveEdit').on('click', function () {
            var arrDataAdd = [];
            var MenuName = $('#edtMenuName').val();
            var MenuPic = $('#edtMenuPic').val();
            var MenuPart = $('#edtMenuPart').val();
            var MenuRout = $('#edtMenuRout').val();
            
            if (
                data_acc.sma_name == MenuName &&
                data_acc.sma_pic == MenuPic &&
                data_acc.sma_path == MenuPart &&
                data_acc.sma_route == MenuRout
            ) {
                Swal.fire({
                    icon: 'success',
                    title: 'Not changed !',
                    html: 'The information has not changed.',
                    timer: 2500,
                }).then(() => {
                    $('#mdlEdit').modal('hide');
                    $('#btnBack').trigger('click');
                });
            
            } else if (MenuName == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Please enter MenuName',
                })
            } else if (MenuPic == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Please enter MenuPic',
                })
            } else if (MenuRout == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Please choose MenuRout',
                })
    
            } else if (!isThaiLanguage(MenuName)|| !isThaiLanguage(MenuRout)) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Please enter in English only.',
                })
            } else {

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to Edit Menu",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Edit Menu!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var url = API_URL + 'App_Manage_menu/update_menu';
                        const formData = new FormData()
                        formData.append('MenuName', MenuName);
                        formData.append('MenuPic', MenuPic);
                        formData.append('MenuPart', MenuPart);
                        formData.append('MenuRout', MenuRout);
                        formData.append('accId', accId);

                        
                        $.ajax({
                            url: base_url('AppManageMenu/callApiUpdateMenu'),
                            type: 'POST',
                            data: formData,
                            processData: false,
     contentType: false,
        cache: false,
                            dataType: 'json',
                            success: function(res) {
                                console.log(res);
                                if (res.result == 1) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success !',
                                        html: 'Edit Menu success',
                                        timer: 2500,
                                    }).then(() => {

                                        $('#mdlEdit').modal('hide') //show
                                        shDataTable()
                                    });
                                } else if (res.result == 9) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        html: 'The information has not changed.',
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


})
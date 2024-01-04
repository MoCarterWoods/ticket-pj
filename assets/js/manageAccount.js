


function showdropdown() {
    var url = API_URL + "Manage_account/show_drop_down";      
    $.ajax({
        method: "get",
        url: base_url("ManageAccount/callApi?url=" + url),
        dataType: 'Json',
        success: (response) => {
            console.log(response.permission);
            var permis = response.permission
            var plant = response.plantcode
            for (let i = 0; i < permis.length; i++) {
                const data = permis[i];
                    $('.selPermissionAdd').append(`<option value="${data.spg_id}">${data.spg_name}</option>`)
            }
            for (let i = 0; i < plant.length; i++) {
                const data = plant[i];
                    $('.selPlantAdd').append(`<option value="${data.mpc_id}">${data.mpc_name}</option>`)
            }
        },
        error: (err) => {
            console.log(err);
        },
    });
};$(() => {
    showdropdown()
    $('#mdlAdd').on('hidden.bs.modal', function () {
        $('#errMegadd').css('display', 'none');
        $('#errAddempcode').css('display', 'none');
        $('#errAddpersonal').css('display', 'none');
        $('#inpEmpCode').val('');
        $('#inpFirstName').val('');
        $('#inpEmpPassword').val('');
        $('#inpLastName').val('');
        $('#inpEmail').val('');
        $('#selPermissionAdd').val('');
        $('#selPlantAdd').val('');
    });


    $('#mdlEdit').on('hidden.bs.modal', function () {
        $('#errMegedit').css('display', 'none');
        $('#errEditempcode').css('display', 'none');
        $('#errEditpersonal').css('display', 'none');
        $('#edtEmpPassword').val('')
    });

    // showProjectlistManage()
	//     //-------------------------- Table Account ----------------------------------
    //     function showProjectlistManage() {
    //         var apiUrl = "http://127.0.0.1/api/Manage_account/show_user"; 
    //         $.ajax({
    //             method: "GET",
    //             url: base_url("ManageAccount/callApi?url=" + apiUrl),
    //             dataType: 'json',
    //             success: function(response) {
    //                 if (response.length > 0) { 
    //                     var html = "";
    //                     for (let i = 0; i < response.length; i++) {
    //                         const data = response[i];
    //                         var btnStatus = (data.sa_status_flg == 1) ?
    //                             `<button type="button" id="flgStatus" class="btn btn-circle btn-success btnStatus" value="${data.sa_status_flg}" data-id="${data.sa_id}">Enable</button>` :
    //                             `<button type="button" id="flgStatus" class="btn btn-circle btn-warning btnStatus" value="${data.sa_status_flg}" data-id="${data.sa_id}">Disable</button>`;
        
    //                         html += `
                                // <tr>
                                //     <td><i></i> <strong>${i + 1}</strong></td>
                                //     <td>
                                //         <div class="d-flex justify-content-start align-items-center">
                                //             <div class="avatar-wrapper">
                                //                 <div class="avatar me-2">
                                //                     <img src="<?php echo base_url() ?>assets/assets/img/avatars/sek.jpg" alt="Avatar" class="rounded-circle">
                                //                 </div>
                                //             </div>
                                //             <div class="d-flex flex-column">
                                //                 <span class="emp_name text-truncate">${data.sa_fristname} ${data.sa_lastname}</span>
                                //                 <small class="emp_post text-truncate text-muted">${data.sa_emp_code}</small>
                                //             </div>
                                //         </div>
                                //     </td>
                                //     <td><i></i> <strong>Admin</strong></td>
                                //     <td><i></i>${data.sa_email}</td>
                                //     <td class="" style="">02/13/2021</td>
                                //     <td><span class="badge bg-label-success me-1">${data.sa_status_flg == 1 ? 'Enable' : 'Disable'}</span></td>
                                //     <td class="" style="">
                                //         <div class="d-inline-block">
                                //             <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                //                 <i class="bx bx-dots-vertical-rounded"></i>
                                //             </a>
                                //             <ul class="dropdown-menu dropdown-menu-end">
                                //                 <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                //                 <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                //                 <div class="dropdown-divider"></div>
                                //                 <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li>
                                //             </ul>
                                //         </div>
                                //         <a href="" class="btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#basicModal">
                                //             <i class="bx bxs-edit"></i>
                                //         </a>
                                //     </td>
                                // </tr>`;
    //                     }
        
    //                     // Destroy existing DataTable and recreate it
    //                     $('#tblManageAccount').DataTable().clear().destroy();
    //                     $("#tbody").html(html);
        
    //                     // Initialize DataTable with scrollX
    //                     $("#tblManageAccount").DataTable({
    //                         scrollX: true,
    //                     });
    //                 }
    //             },
    //             error: function(err) {
    //                 console.log(err);
    //             },
    //         });
    //     }

    function handleMenuItemSelection() {
        // Remove 'selected' class from all menu items
        $('.sidebar li').removeClass('active');
        
        // Add 'selected' class to the clicked menu item
        $(this).addClass('active');
    }
    
    // Add click event listener to each menu item
    $('.sidebar li').on('click', handleMenuItemSelection);
    function isValidEmail(email) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }
        
    $(document).ready(function () {
        // URL of the API
        var apiUrl = 'http://127.0.0.1/api/Manage_account/show_user';
    
        // Perform Ajax request
        $.ajax({
            url: apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Get the menu container
                var DataTable = $('#tbody');
    
                // Loop through the data and append menu items
                for (var i = 0; i < data.length; i++) {
                    var TableHtml = `
                        <tr>
                            <td><i></i> <strong>${i + 1}</strong></td>
                            
                            <td><div class="d-flex justify-content-start align-items-center"><div class="avatar-wrapper"><div class="avatar me-2"><img src="http://192.168.161.207/tbkk_shopfloor/asset/img_emp/${data[i].sa_emp_code}.jpg" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column">
                          <span class="emp_name text-truncate">${data[i].sa_fristname} ${data[i].sa_lastname}</span><small class="emp_post text-truncate text-muted">${data[i].sa_emp_code}</small></div></div></td>
                            <td><i></i> <strong>${data[i].spg_name}</strong></td>
                            <td><i></i>${data[i].sa_email}</td>
                            <td><i></i>${data[i].sa_created_date}</td>
                            <td><span class="btn badge bg-label-${data[i].sa_status_flg == 1 ? 'success' : 'danger'} me-1" id="flgStatus">${data[i].sa_status_flg == 1 ? 'Enable' : 'Disable'}</span></td>
                            <td class="" style="">
                                <div class="d-inline-block">
                                    <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li>
                                    </ul>
                                </div>
                                <a href="" class="btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#mdlEdit">
                                    <i class="bx bxs-edit"></i>
                                </a>
                            </td>
                        </tr>`;
                    DataTable.append(TableHtml);
                }
                $('#tblManageAccount').dataTable().fnDestroy()
	                    $("#tbody")
	                        .html(html)
	                        .promise()
	                        .done(() => {
	                            $("#tblManageAccount").DataTable({
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

    $(document).on('click', '.btnStatus', function() {
        let id = $(this).attr('data-id');
        var btnStatus = $(this).closest('td').find('.btnStatus').val()
            // alert(btnStatus)
        if (btnStatus == 1) {
            var upDateStatus = '0'
        } else {
            var upDateStatus = '1'
        }
        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: "You want be change status",
            // icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, change!'
        }).then((result) => {
            if (result.isConfirmed) {
                var url = API_URL + "Manage_account/upd__status_User?user_id=" + id;
                $.ajax({
                    url: base_url('ManageAccount/callApiUpdateStatus'),
                    type: 'POST',
                    data: {
                        id: id,
                        upDateStatus: upDateStatus,
                    },
                    dataType: 'Json',
                    success: (response) => {
                        if (response.result == 1) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success !',
                                html: 'Change status success',
                                timer: 2500,
                            }).then(() => {
                                showProjectlistManage()
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Ooops...',
                                html: 'A system error has occurred.',
                            })
                        }

                    }
                });
            }
        })

    })
    //-------------------------- add Account ----------------------------------

    $(document).ready(function () {
    $('#btnSaveAdd').on('click', function () {
        var arrDataAdd = [];
        var EmpCode = $('#inpEmpCode').val();
        var EmpPassword = $('#inpEmpPassword').val();
        var FirstName = $('#inpFirstName').val();
        var LastName = $('#inpLastName').val();
        var Email = $('#inpEmail').val();
        var Permission = $('#selPermissionAdd').val();
        var Plant = $('#selPlantAdd').val();

        if (EmpCode == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter employee code',
            })
        } else if (EmpPassword == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter password',
            })
        } else if (FirstName == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter FirstName',
            })
        } else if (LastName == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter LastName',
            })
        } else if (Permission == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please choose Permission',
            })
        } else if (Plant == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please choose Plant',
            })
        } else if (!chkAddEmpcode(EmpCode)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter Employee Code as (a-z ,A-Z ,0-9) only.',
            })
        } else if (!chkAddpersonal(FirstName) || !chkAddpersonal(LastName)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter Firstname or Lastname as (a-z ,A-Z) only.',
            })
        } else if(!isValidEmail(Email)){
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter your Email correctly.',
            })
        } else if (!isThaiLanguage(EmpCode) || !isThaiLanguage(EmpPassword) || !isThaiLanguage(Email)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter in English only.',
            })
        } else {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to add Account",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, add account!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = API_URL + 'Manage_account/insert_user';
                    const formData = new FormData()
                    formData.append('EmpCode', EmpCode);
                    formData.append('EmpPassword', EmpPassword);
                    formData.append('EmpFirstName', FirstName);
                    formData.append('EmpLastName', LastName);
                    formData.append('EmpEmail', Email);
                    formData.append('EmpPermission', Permission);
                    formData.append('EmpPlantCode', Plant);
                    // formData.append('url', url);


                    
                    // arrDataAdd.push({
                    //     EmpCode: EmpCode,
                    //     EmpPassword: EmpPassword,
                    //     FirstName: FirstName,
                    //     LastName: LastName,
                    //     Email: Email,
                    //     Permission: Permission,
                    //     Plant: Plant,
                    // });

                    
                    $.ajax({
                        url: base_url('ManageAccount/callApiAddAccount'),
                        type: 'POST',
                        data: formData,
                        processData: false,
    contentType: false,
    cache: false,
                        dataType: 'json',
                        success: function(res) {
                            if (res.result == 1) {
                                // $('#inpEmpCode').val('');
                                // $('#inpFirstName').val('');
                                // $('#inpEmpPassword').val('');
                                // $('#inpLastName').val('');
                                // $('#inpEmail').val('');
                                // $('#selPermissionAdd').val('');
                                // $('#selPlantAdd').val('');
                                $('#add')[0].reset()
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success !',
                                    html: 'Add account success',
                                    timer: 2500,
                                }).then(() => {
                                    // $('#btnBack').trigger('click');
                                    $('#mdlAdd').modal('hide') //show
                                });
                            } else if (res.result == 9) {
                                Swal.fire({
            
                                    icon: 'warning',
                                    title: 'Ooops...',
                                    html: 'This employee code already exists.',
                                }).then(() => {
                                    $('#btnBack').trigger('click');
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
		var data_acc
	    var accId
	    $(document).on('click', '.tblDelBtn', function() {

	        let id = $(this).attr('data-id');
	        accId = id
	        var url = API_URL + "Manage_account/show_upd_User?user_id=" + id;
	        $.ajax({
	            url: base_url('ManageAccount/callApiEditAccount?url=' + url),
	            type: 'POST',
	            data: {
	                id: id,
	            },
	            dataType: 'Json',
	            success: (response) => {
					data_acc = response
	                for (let i = 0; i < response.length; i++) {
	                    const data = response[i];
	                    $('#edtEmpCode').val(data.emp_code).trigger("change")
	                    $('#edtFirstName').val(data.firstname).trigger("change")
	                    $('#edtLastName').val(data.lastname).trigger("change")
	                    $('#edtEmail').val(data.email).trigger("change")
	                    $('#edtPermissionEdit').val(data.permis_id).trigger("change")
	                    $('#edtPlantEdit').val(data.plant).trigger("change")
	                }
	            }
	        });
	    })


	    //-------------------------- Save Edit ----------------------------------
	    $(document).on('click', '#btnSaveEdit', function() {

	        var arrDataEdit = []
	        var EmpPassword = ($('#edtEmpPassword').val().trim() == '')?  $('#edtEmpPassword').val() : MD5($('#edtEmpPassword').val())
	        var FirstName = $('#edtFirstName').val()
	        var LastName = $('#edtLastName').val()
	        var Email = $('#edtEmail').val()
	        var Permission = $('#edtPermissionEdit').val()
	        var Plant = $('#edtPlantEdit').val()

			if ((data_acc[0].emp_password == EmpPassword || EmpPassword == '') && data_acc[0].firstname == FirstName && data_acc[0].lastname == LastName && data_acc[0].email == Email && data_acc[0].permis_id == Permission && data_acc[0].plant == Plant) {
				Swal.fire({
					icon: 'success',
					title: 'Not changed !',
					html: 'The information has not changed.',
					timer: 2500,
				}).then(() => {
					$('#btnBackEdit').trigger('click');
				})
			}
			else if (FirstName == '') {
	            Swal.fire({
	                icon: 'warning',
	                title: 'Oops...',
	                text: 'Plese enter FirstName.',
	            })
	        } else if (LastName == '') {
	            Swal.fire({
	                icon: 'warning',
	                title: 'Oops...',
	                text: 'Plese enter LastName.',
	            })
	        } else if (Permission == '') {
	            Swal.fire({
	                icon: 'warning',
	                title: 'Oops...',
	                text: 'Plese choose Permission.',
	            })
	        } else if (Plant == '') {
	            Swal.fire({
	                icon: 'warning',
	                title: 'Oops...',
	                text: 'Plese choose Plant.',
	            })
	        } else if (!chkEditpersonal(FirstName) || !chkEditpersonal(LastName)) {
				Swal.fire({
					icon: 'warning',
					title: 'Oops...',
					text: 'Please enter Firstname or Lastname as (a-z ,A-Z) only.',
				})
			} else if (!isValidEmail(Email)) {
				Swal.fire({
	                icon: 'warning',
	                title: 'Oops...',
	                text: 'Plese enter your email correctly.',
	            })
			} else if (!(isThaiLanguage(EmpPassword) || EmpPassword == '') || !isThaiLanguage(Email)) {
				Swal.fire({
					icon: 'warning',
					title: 'Oops...',
					text: 'Please enter in English only.',
				})
			} else {
	            Swal.fire({
	                title: 'Are you sure?',
	                text: "Do you want to save edit",
	                icon: 'warning',
	                showCancelButton: true,
	                confirmButtonColor: '#3085d6',
	                cancelButtonColor: '#d33',
	                confirmButtonText: 'Yes,save!'
	            }).then((result) => {
	                if (result.isConfirmed) {
	                    if (EmpPassword == '') {
	                        arrDataEdit.push({
	                            accId: accId,
	                            EmpPassword: null,
	                            FirstName: FirstName,
	                            LastName: LastName,
	                            Email: Email,
	                            Permission: Permission,
	                            Plant: Plant,
	                        })
	                    } else {
	                        arrDataEdit.push({
	                            accId: accId,
	                            EmpPassword: EmpPassword,
	                            FirstName: FirstName,
	                            LastName: LastName,
	                            Email: Email,
	                            Permission: Permission,
	                            Plant: Plant,
	                        })
	                    }

	                    var url = API_URL + "Manage_account/upd_User";
	                    $.ajax({
	                        url: base_url("ManageAccount/callApiUpdateAccount?url=" + url),
	                        type: 'POST',
	                        data: {
	                            arrDataEdit: arrDataEdit
	                        },
	                        dataType: 'json',
	                        success: function(res) {
	                            if (res.result == 1) {
	                                Swal.fire({
	                                    icon: 'success',
	                                    title: 'Success !',
	                                    html: 'Save edits success.',
	                                    timer: 2500,
	                                }).then(() => {
										$('#btnBackEdit').trigger('click');
	                                    showProjectlistManage()
	                                })
	                            } else if (res.result == 9) {
	                                Swal.fire({
	                                    icon: 'success',
	                                    title: 'Success!',
	                                    html: 'The information has not changed.',
	                                }).then(() => {
										$('#btnBackEdit').trigger('click');
	                                })
	                            } else {
	                                Swal.fire({
	                                    icon: 'error',
	                                    title: 'Ooops...',
	                                    html: 'A system error has occurred.',
	                                })
	                            }
	                        }
	                    })
	                }
	            })
	        }
	    })

        
})

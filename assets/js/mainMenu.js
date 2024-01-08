$(() => {

    $('#staticBackdropEdit').on('hidden.bs.modal', function () {
        $('#errMegedit').css('display', 'none');
    });

    showMainMenu()
        //-------------------------- Table MainMenu ----------------------------------

    function showMainMenu()  {
 
        $(document).ready(function () {
        // URL of the API
        var apiUrl = 'http://127.0.0.1/api/Manage_mainmenu/show_main_menu';
    
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
                    <td><i></i> <strong>${i+1}</strong></td>
                    <td><i></i> <strong>Dash</strong></td>
                    <td>
                    <i class='bx bx-dock-top' ></i>
                      <p class="icon-name text-capitalize text-truncate mb-0"></p>
                    </td>
                    <td><i></i>1</td>
                    <td class="">02/13/2021</td>
                    <td class="">SD525</td>
                    <td><span class="badge bg-label-success me-1">Enable</span></td>
                    <td class="">
                      </li>
                      </ul>
            </div><a href="" class="btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#basicModal">
              <i class="bx bxs-edit"></i>
            </a></td>
            </tr>`;
                   
                }
                $('#tblMainMenu').dataTable().fnDestroy()
	                    $("#tbody")
	                        .html(html)
	                        .promise()
	                        .done(() => {
	                            $("#tblMainMenu").DataTable({
	                                scrollX: true,
	                            });
	                        });
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
            }
        });
    
});

    //-------------------------- Updaye flg status ----------------------------------

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
                var url = API_URL + "Manage_mainmenu/upd_status_main_menu?main_id=" + id;
                $.ajax({
                    url: base_url('MainMenu/callApiUpdateStatus'),
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
                                $.ajax({
                                    url: base_url("SubMenu/callApiPermis?url=" + url),
                                    type: 'POST',
                                    dataType: 'json',
                                    success: function(res) {
                                        $('.menu_side').empty()
                                        for (let i = 0; i < res.length; i++) {
                                            const data = res[i];
                                            var mianMenu = data.main_menu
                                            subMenu = data.sub_menu
                                            newMain = mianMenu.smm_id
                                            $('#sideBar_menu').append(`	
                                            <li class="nav-item menu_side">
                                            <a href="#" class="nav-link nav-toggle">
                                            <i class="${mianMenu.smm_icon}"></i> <span class="title">${mianMenu.smm_name}</span> <span class="arrow"></span>
                                            </a>
                                            <ul class="sub-menu" id="subMunu_${mianMenu.smm_id}">
                                                
                                            </ul>
                                        </li>
                                            `)
                                            for (let i = 0; i < subMenu.length; i++) {
                                                const data = subMenu[i];
                                                if (data.main_menu_id == newMain) {
                                                    $(`#subMunu_${newMain}`).append(`	
                                                    <li class="nav-item">
                                                        <a href="`+base_url(data.ctrl_menu)+`" class="nav-link "> 
                                                        <span class="title">${data.sud_menu_name}</span>
                                                        </a>
                                                    </li>
                                                `)
                                                }
                                            }
                                                const fullUrl = window.location.href;
                                                $(`a[href="${fullUrl}"]`).closest('li').addClass('active')
                                                $(`a[href="${fullUrl}"]`).closest('ul.sub-menu').css('display','block')
                                                $(`a[href="${fullUrl}"]`).closest('li.menu_side').addClass('open')
                                        }
                            
                                    }
                                })
                                // refresh datatable
                                showMainMenu()
                            })
                        }

                    }
                });
            }
        })

    })

    //-------------------------- Add Main Menu ----------------------------------
    $(document).on('click', '#btnSaveAdd', function() {
            var arrDataAdd = []
            var MainMenuName = $('#inpMainMenuName').val()
            var MainMenuIcon = $('#inpMainMenuIcon').val()

            if (MainMenuName == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Plese enter main menu',
                })
            } else if (MainMenuIcon == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Plese enter main menu icon',
                })
            } else if (!isThaiLanguage(MainMenuName) || !isThaiLanguage(MainMenuIcon)) {
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
                    confirmButtonText: 'Yes,add!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        arrDataAdd.push({
                            MainMenuName: MainMenuName,
                            MainMenuIcon: MainMenuIcon,
                        })
                        var url = API_URL + "Manage_mainmenu/ins_main_menu";
                        $.ajax({
                            url: base_url("MainMenu/callApiAddMainMenu?url=" + url),
                            type: 'POST',
                            data: {
                                arrDataAdd: arrDataAdd
                            },
                            dataType: 'json',
                            success: function(res) {
                                if (res.result == 1) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success !',
                                        html: 'Add Main Menu success',
                                        timer: 2500,
                                    }).then(() => {
                                        $('#inpMainMenuName').val('')
                                        $('#inpMainMenuIcon').val('')
                                        showMainMenu()
                                    })
                                } else if (res.result == 9) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Ooops...',
                                        html: 'This Main Menu already exists.',
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
        //-------------------------- Show Main Menu ----------------------------------
    var data_main
    var mainId
    $(document).on('click', '.tblDelBtn', function() {
        let id = $(this).attr('data-id');
        mainId = id
        var url = API_URL + "Manage_mainmenu/show_upd_main_menu?main_id=" + id;
        $.ajax({
            url: base_url('MainMenu/callApiShowEdit?url=' + url),
            type: 'POST',
            data: {
                id: id,
            },
            dataType: 'Json',
            success: (response) => {
                data_main = response
                for (let i = 0; i < response.length; i++) {
                    const data = response[i];
                    $('#edtMainMenu').val(data.smm_name).trigger("change")
                    $('#edtMainIcon').val(data.smm_icon).trigger("change")
                    $('#edtOrderNo').val(data.order_no).trigger("change")
                }
            }
        });
    })


    //-------------------------- Save Edit Main Menu ----------------------------------
    $(document).on('click', '#btnSaveEdit', function() {
        // console.log(data_main);
        var arrDataEdit = []
        var MainMenuName = $('#edtMainMenu').val()
        var MainMenuIcon = $('#edtMainIcon').val()
        var OrderNo = $('#edtOrderNo').val()
        if (data_main[0].smm_name== MainMenuName && data_main[0].smm_icon == MainMenuIcon && data_main[0].order_no == OrderNo) {
            Swal.fire({
                icon: 'success',
                title: 'Not changed !',
                html: 'The information has not changed.',
                timer: 2500,
            }).then(() => {
                $('#btnBack').trigger('click');
            })
        }
        else if (MainMenuName == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Plese enter Main Menu name',
            })
        } else if (MainMenuIcon == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Plese enter Main Menu icon',
            })
        } else if (OrderNo == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Plese enter Order No.',
            })
        } else if (!isThaiLanguage(MainMenuName) || !isThaiLanguage(MainMenuIcon) || !isThaiLanguage(OrderNo)) {
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
                    arrDataEdit.push({
                        mainId: mainId,
                        MainMenuName: MainMenuName,
                        MainMenuIcon: MainMenuIcon,
                        OrderNo: OrderNo,
                    })
                    console.log(arrDataEdit);
                    var url = API_URL + "Manage_mainmenu/upd_main_menu";
                    $.ajax({
                        url: base_url("MainMenu/callApiSaveEdit?url=" + url),
                        type: 'POST',
                        data: {
                            arrDataEdit: arrDataEdit
                        },
                        dataType: 'json',
                        success: function(res) {
                            console.log(res);
                            if (res.result == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success !',
                                    html: 'Edit main menu success',
                                    timer: 2500,
                                }).then(() => {
                                    $('#btnBack').trigger('click');
                                    $.ajax({
                                        url: base_url("SubMenu/callApiPermis?url=" + url),
                                        type: 'POST',
                                        dataType: 'json',
                                        success: function(res) {
                                            $('.menu_side').empty()
                                            for (let i = 0; i < res.length; i++) {
                                                const data = res[i];
                                                var mianMenu = data.main_menu
                                                subMenu = data.sub_menu
                                                newMain = mianMenu.smm_id
                                                $('#sideBar_menu').append(`	
                                                <li class="nav-item menu_side">
                                                <a href="#" class="nav-link nav-toggle">
                                                <i class="${mianMenu.smm_icon}"></i> <span class="title">${mianMenu.smm_name}</span> <span class="arrow"></span>
                                                </a>
                                                <ul class="sub-menu" id="subMunu_${mianMenu.smm_id}">
                                                    
                                                </ul>
                                            </li>
                                                `)
                                                for (let i = 0; i < subMenu.length; i++) {
                                                    const data = subMenu[i];
                                                    if (data.main_menu_id == newMain) {
                                                        $(`#subMunu_${newMain}`).append(`	
                                                        <li class="nav-item">
                                                            <a href="`+base_url(data.ctrl_menu)+`" class="nav-link "> 
                                                            <span class="title">${data.sud_menu_name}</span>
                                                            </a>
                                                        </li>
                                                    `)
                                                    }
                                                }
                                                const fullUrl = window.location.href;
                                                $(`a[href="${fullUrl}"]`).closest('li').addClass('active')
                                                $(`a[href="${fullUrl}"]`).closest('ul.sub-menu').css('display','block')
                                                $(`a[href="${fullUrl}"]`).closest('li.menu_side').addClass('open')
                                            }
                                
                                        }
                                    })
                                    // refresh datatable
                                    showMainMenu()
                                })
                            } else if (res.result == 9) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    html: 'Edit main menu success',
                                    timer: 2500
                                }).then(() => {
                                    $('#btnBack').trigger('click');
                                })
                            } else if (res.result == 3) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Ooops...',
                                    html: 'This Main Menu already exists.',
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

}
})
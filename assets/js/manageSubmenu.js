$(() => {
    $('#staticBackdropEdit').on('hidden.bs.modal', function () {
        $('#errMegedit').css('display', 'none');
    });

    showMainMenu()
        //-------------------------- Select MainMenu ----------------------------------
    function showMainMenu() {
        var url = API_URL + "Manage_mainmenu/show_main_menu";
        $.ajax({
            method: "get",
            url: base_url("SubMenu/callApi?url=" + url),
            dataType: 'Json',
            success: (response) => {
                for (let i = 0; i < response.length; i++) {
                    const data = response[i];
                        $('.selMainMenu').append(`<option value="${data.smm_id}">${data.smm_name}</option>`)
                }
            },
            error: (err) => {
                console.log(err);
            },
        });
    };


    //------------------------------- show Table --------------------------------------
    
    $(document).on('click', '#btnSerchMain', function() {
        var mainId = $('#selMainMenu').val()
            if (mainId == '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ooops..',
                    html: 'Plese choose Main Menu',
                })
            } else {
                var x = document.getElementById("content")  
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
                    success: (response) => {
                        var html = "";
                        for (let i = 0; i < response.length; i++) {
                            html += `
                            <tr>
                                <td> <strong>${i + 1}</strong></td>
                                <td> <strong>${response[i].ssm_name}</strong></td>
                                <td> <strong>${response[i].ssm_controller}</strong></td>
                                <td class="">${response[i].ssm_updated_date}</td>
                                <td class="">${response[i].ssm_updated_by}</td>
                        
                                <td>
                                    <button class="btnStatus btn badge bg-label-${response[i].ssm_status_flg == 1 ? 'success' : 'danger'} me-1" id="flgStatus" data-sa-id="${response[i].ssm_id}" value="${response[i].ssm_status_flg}"> ${response[i].ssm_status_flg == 1 ? 'Enable' : 'Disable'}</button>
                                </td>
                        
                                <td class="">
                                    <a href="" class="tblEditBtn btn btn-sm btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#mdlEdit" id="btnEdit" data-id="${response[i].ssm_id}">
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                </td>
                            </tr>`;
                        }
                        
                        $('#tblSubMenu').dataTable().fnDestroy()
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
        })




})
var emp_data
$(document).ready(async function() {

    function isValidEmail(email) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    await $.ajax({
        url: base_url('EditProfile/callApiShowedit'),
        success: function (response) {
            response = JSON.parse(response);
            emp_data = response;
            for (let index in response) {
                $('#edtEmpcode').val(response[index].emp_code);
                $('#edtfName').val(response[index].firstname);
                $('#edtlName').val(response[index].lastname);
                $('#edtEmail').val(response[index].email);
            }
            $('#edtPassword').val('')
        }
    });
    

    $('#btnSaveEdit').click(function() {
        var emp_code = $('#edtEmpcode').val()
        var password = ($('#edtPassword').val() == '')? $('#edtPassword').val(): MD5($('#edtPassword').val())
        var fName = $('#edtfName').val()
        var lName = $('#edtlName').val()
        var Email = $('#edtEmail').val()


        if((emp_data[0].emp_password == password || password == '') && $('#edtfName').val() == emp_data[0].firstname && $('#edtlName').val() == emp_data[0].lastname && $('#edtEmail').val() == emp_data[0].email ){
            Swal.fire({
                icon: 'success',
                title: 'Not changed !',
                html: 'The information has not changed.',
                timer: 2500,
            }).then(() => {
                $.ajax({
                    url: base_url('EditProfile/callApiShowedit'),
                    success: function (response) {
                        response = JSON.parse(response);
                        emp_data = response;
                        for (let index in response) {
                            $('#edtEmpcode').val(response[index].emp_code);
                            $('#edtfName').val(response[index].firstname);
                            $('#edtlName').val(response[index].lastname);
                            $('#edtEmail').val(response[index].email);
                        }
                        $('#edtPassword').val('')
                    }
                });
            })
        } else if (fName == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Plese enter Firstname.',
            })
        } else if (lName == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Plese enter LastName.',
            })
        } else if (Email == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Plese enter Email.',
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
                text: 'Plese enter your Email correctly.',
            })
        } else if (!(isThaiLanguage(password) || password == '') || !isThaiLanguage(Email)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter in English only.',
            })
        } else {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to save edit.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes,save!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let arrDataEdit = []
                    arrDataEdit.push({
                        accId: emp_data[0].su_id,
                        EmpPassword: password,
                        FirstName: fName,
                        LastName: lName,
                        Email: Email,
                        Permission: emp_data[0].permis_id,
                        Plant: emp_data[0].plant,
                    })
                    
                    $.ajax({
                        url: base_url("ManageAccount/callApiUpdateAccount"),
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
                                    html: 'Update account success.',
                                    timer: 2000,
                                }).then(() => {
                                    // window.location.href = base_url("EditProfile/editProfile")
                                    $.ajax({
                                        url: base_url('EditProfile/callApiShowedit'),
                                        success: function (response) {
                                            response = JSON.parse(response);
                                            emp_data = response;
                                            for (let index in response) {
                                                $('#edtEmpcode').val(response[index].emp_code);
                                                $('#edtfName').val(response[index].firstname);
                                                $('#edtlName').val(response[index].lastname);
                                                $('#edtEmail').val(response[index].email);
                                            }
                                            $('#edtPassword').val('')
                                        }
                                    });
                                })
                            } else if (res.result == 9) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    html: 'The information has not changed.',
                                    timer: 2500,
                                }).then(() => {
                                    // window.location.href = base_url("EditProfile/editProfile")
                                    $.ajax({
                                        url: base_url('EditProfile/callApiShowedit'),
                                        success: function (response) {
                                            response = JSON.parse(response);
                                            emp_data = response;
                                            for (let index in response) {
                                                $('#edtEmpcode').val(response[index].emp_code);
                                                $('#edtfName').val(response[index].firstname);
                                                $('#edtlName').val(response[index].lastname);
                                                $('#edtEmail').val(response[index].email);
                                            }
                                            $('#edtPassword').val('')
                                        }
                                    });
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

// function show_edit_DrpDw() {
//     $('#edtPermission').val(emp_data[0].permis_id).trigger("change")
//     $('#edtPlant').val(emp_data[0].plant).trigger("change")
// }
$(document).ready(function () {
    $("#loadingPage").attr("style", "display: none;");
});
$(document).ready(async function() {


    await $.ajax({
        url: base_url('EditAccount/callApiShowedit'),
        type: 'POST',
        dataType: 'json',
        success: (response) => {
            if (response.length > 0) {
                emp_data = response[0];
                $('#empCode').val(emp_data.sa_emp_code);
                // $('#edtPass').val(emp_data.sa_emp_password);
                $('#edtfName').val(emp_data.sa_fristname);
                $('#edtlName').val(emp_data.sa_lastname);
                $('#edtEmail').val(emp_data.sa_email);
            } else {
                console.error("API response is empty or does not have the expected structure.");
            }
        }
    });
});



function isValidEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

    

$('#btnSaveEdit').on('click', function () {
    var arrDataAdd = [];
    var EmpCode = $('#empCode').val();

    var FirstName = $('#edtfName').val();
    var LastName = $('#edtlName').val();
    var Email = $('#edtEmail').val();

    
    if (
        emp_data.sa_fristname == FirstName &&
        emp_data.sa_lastname == LastName &&
        emp_data.sa_email == Email 

    ) {
        Swal.fire({
            icon: 'success',
            title: 'Not changed !',
            html: 'The information has not changed.',
            timer: 2500,
        }).then(() => {

        });
    
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
    } else if (!isThaiLanguage(Email)) {
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
                var url = API_URL + 'Edit_Account/update_user';
                const formData = new FormData()
                formData.append('EmpCode', EmpCode);
                formData.append('EmpFirstName', FirstName);
                formData.append('EmpLastName', LastName);
                formData.append('EmpEmail', Email);

                
                $.ajax({
                    url: base_url('EditAccount/callApiUpdateAccount'),
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
                                html: 'Add account success',
                                timer: 2500,
                            }).then(() => {
                                location.reload();
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


// function show_edit_DrpDw() {
//     $('#edtPermission').val(emp_data[0].permis_id).trigger("change")
//     $('#edtPlant').val(emp_data[0].plant).trigger("change")
// }

 //-------------------------- Save Edit ----------------------------------
 $(document).ready(function () {
    $('#btnSavePass').on('click', function () {
        var arrDataAdd = [];
        var CurrPass = $('#edtcurPass').val();
        var NewPass = $('#edtnewPass').val();
        var ConNewPass = $('#edtconnewPass').val();

        if (CurrPass == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter Current Password',
            });
        } else if (NewPass == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter New Password',
            });
        } else if (ConNewPass == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please enter Confirm New Password',
            });
        } else if (NewPass === CurrPass) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'New Password cannot be the same as Current Password',
            });
        } else if (NewPass !== ConNewPass) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'New Password do not match',
            });
        } else {
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to Changes Password',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Changes Password!',
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = API_URL + 'Edit_Account/update_pass';
                    const formData = new FormData();
                    formData.append('CurrPass', CurrPass);
                    formData.append('ConNewPass', ConNewPass);

                    $.ajax({
                        url: base_url('EditAccount/callApiUpdatePass'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: 'json',
                        success: function (res) {
                            if (res.result == 1) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    html: 'Password changed successfully.',
                                    timer: 2500,
                                }).then(() => {
                                    $('#mdlEdit').modal('hide');
                                    $('#edtcurPass').val('');
                                    $('#edtnewPass').val('');
                                    $('#edtconnewPass').val('');
                                });
                            } else if (res.result == 0) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    html: 'Invalid Current Password.',
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    html: 'A system error has occurred.',
                                });
                            }
                        },
                        error: function (err) {
                            console.error(err);
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                html: 'An error occurred while processing your request.',
                            });
                        },
                    });
                }
            });
        }
    });
});




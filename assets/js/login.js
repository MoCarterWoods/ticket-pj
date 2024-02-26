$(document).ready(function () {
    $('#btnLogin').click(function (e) {
        e.preventDefault();

        var empCode = $('#username').val();
        var empPassword = $('#password').val();

        if (empCode == '' || empPassword == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Warning',
                html: 'Please enter both username and password.',
                showConfirmButton: true
            })
        } else {
            var apiUrl = 'http://127.0.0.1/api/';

            var requestData = {
                empCode: empCode,
                empPassword: empPassword
            };

            var url = apiUrl + "Api_Controller/chk_login";
            $.ajax({
                url: base_url("Login/callApiLogin?url=" + url),
                type: 'POST',
                data: {
                    requestData: requestData,
                },
                dataType: 'json',
                success: function (response) {
                    if (response.result == 1) {
                        window.location.href = base_url('Dashboard/dashboard');
                    } else {
                        var errorMessage = '';
                        switch (response.result) {
                            case 0:
                                errorMessage = 'Username or password is invalid. <br> ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!';
                                break;
                            case 8:
                                errorMessage = 'Username has been disabled. <br> ชื่อผู้ใช้ถูกระงับการใช้งาน !';
                                break;
                            case 9:
                                errorMessage = 'Username not found. Please check. <br> ไม่พบ Username กรุณาตรวจสอบ';
                                break;
                            default:
                                errorMessage = 'An error occurred. Please try again later.';
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            html: errorMessage
                        });
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
    });
});

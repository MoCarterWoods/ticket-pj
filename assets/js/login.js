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
                      Swal.fire({
                          icon: 'error',
                          title: 'The something incorrect. ',
                          html: response.message // Assuming the error message is in the 'message' property
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



// $('#btnLogin').click(function()) {
//   let formData = $('#').serialize();

//   let username = $('input[name="Username"]').val();
//   let password = $('input[name="Password"]').val();

//   if (username == '' && password == '') {

//     Swal.fire({
//       icon: 'warning',
//       title: 'warning',
//       html: 'Please enter username and password <br> <div class="text-secondary">Please!</div>',
//       showConfirmButton: 'OK'
//     })
//   }else if(username == '') {
//     Swal.fire({
//       icon: 'warning',
//       title: 'warning',
//       html: 'Please enter username <br> <div class="text-secondary">Please!</div>',
//       showConfirmButton: 'OK'
//     })
//   }else if(password == ''){
//     Swal.fire({
//       icon: 'warning',
//       title: 'warning',
//       html: 'Please enter password <br> <div class="text-secondary">Please!</div>',
//       showConfirmButton: 'OK'
//     })
//   }else{
//     var apiUrl = 'http://127.0.0.1/api/';

//     $.ajax({
//       url: base_url("Login/callApiLogin?url=" + url),
//       type: 'POST',
//       data: {
//         url: url,
//         username: username,
//         password: password,
//       },
//       dataType: 'json',
//       success: function(result) {
//         console.log(result.result);
//         if (result.result == true) {
//           window.location.href = base_url('Dashboard/dashboard')
//         }else{
//           Swal.fire({
//             icon: 'error',
//       title: 'Error!',
//       html: result,
//           })
//         }
//       }
//     })
//   }
// }
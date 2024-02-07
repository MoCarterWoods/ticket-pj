
shDataTable()
function shDataTable()  {

    $(document).ready(function () {
    // URL of the API
    var apiUrl = 'http://127.0.0.1/api/Ticket_control/show_data';

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
                <td class="text-center">${i+1}</td> 
                <td class="text-center">
                ${data[i].ist_line_cd == '' ? `${data[i].ist_area_other}` : `${data[i].ist_line_cd}`}
            </td>
            
            <td class="text-center">${data[i].mts_name === null ? '-' : data[i].mts_name}</td>

            <td class="text-center">${data[i].ist_process === null ? '-' : data[i].ist_process}</td>
                  <td class="text-center">
                    <div class="text-center">${data[i].mjt_name_thai === null ? '-' : data[i].mjt_name_thai}</div>
                    <div class="text-center">${data[i].mjt_name_eng === null ? '-' : data[i].mjt_name_eng}</div>
                  </td>
                  <td class="text-center">
                    <div class="text-center"><small class="emp_post text-truncate text-muted">${data[i].ist_type === 1 ? 'LINE' : data[i].ist_request_by}</small></div>
                    <div class="text-center">Carter</div>
                  </td>
                  <td class="text-center">
                    <div class="d-flex flex-wrap align-items-center">

                      <ul class="list-unstyled w-50 me-2 d-flex align-items-center avatar-group mb-0">

                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Carter Woods" class="avatar pull-up">

                          <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/SST42.jpg" alt="Avatar">

                        </li>

                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Carter Woods" class="avatar pull-up">

                          <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/SST42.jpg" alt="Avatar">

                        </li>

                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Carter Woods" class="avatar pull-up">

                          <img class="rounded-circle" src="http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/SST42.jpg" alt="Avatar">

                        </li>

                      </ul>

                    </div>
                  </td>
                  <td class="text-center">
                    <span class="badge  bg-label-success">Disable</span>
                  </td>
                  <td class="text-center">

                    <div class="btn-group">
                      <button type="button" class="btn btn-label-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">Danger</button>
                      <ul class="dropdown-menu" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);" data-popper-placement="bottom-start">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>
                    
                  </td>
                </tr>
              `;
               
            }
            $('#tblTicketControl').dataTable().fnDestroy()
                    $("#tbody")
                        .html(html)
                        .promise()
                        .done(() => {
                            $("#tblTicketControl").DataTable({
                                scrollX: true,
                            });
                        });
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
        }
    });

});
}
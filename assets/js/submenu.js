


$(document).ready(function () {
    // URL of the API
    var url = API_URL + "Api_Controller/show_Menu";
  
    // Perform Ajax request
    $.ajax({
      url: base_url("Login/callApiPermis?url=" + url),
      type: 'GET',
      dataType: 'json',
      success: function (data) {
        // Group data by smm_name and order by ssm_order_no
        var groupedData = groupAndSortBy(data, 'smm_name', 'ssm_order_no');
  
        // Get the menu container
        var menuContainer = $('#sideBar_menu');
  
        // Loop through the grouped data
        Object.keys(groupedData).forEach(function (smm_name) {
          // Get the items for the current smm_name and order by ssm_order_no
          var items = groupedData[smm_name].sort((a, b) => a.ssm_order_no - b.ssm_order_no);
  
          // Create HTML for the menu items
          var menuItemsHtml = `
              <li class="menu-item">
                  <a href="" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx ${items[0].smm_icon}"></i>
                      <div data-i18n="${items[0].smm_name}">${items[0].smm_name}</div>
                  </a>
                  <ul class="menu-sub">
          `;
  
          // Append sub-menu items to the main menu
          items.forEach(function (menuItem) {
            menuItemsHtml += `
                <li class="menu-item">
                    <a href="${base_url(menuItem.ssm_controller)}" class="menu-link">
                        <div data-i18n="${menuItem.ssm_name}">${menuItem.ssm_name}</div>
                    </a>
                </li>
            `;
          });
  
          // Close the HTML tags
          menuItemsHtml += `
                  </ul>
              </li>
          `;
  
          // Append the menu items to the menu container
          menuContainer.append(menuItemsHtml);
        });
  
        // Activate the selected menu
        const fullUrl = window.location.href;
        $(`a[href="${fullUrl}"]`).closest('li').addClass('active');
        $(`a[href="${fullUrl}"]`).closest('ul.menu-sub').css('display', 'block');
        $(`a[href="${fullUrl}"]`).parents().eq(2).addClass('active');
      },
      error: function (xhr, status, error) {
        console.error('Error:', error);
      }
    });
  
    // Function to group array of objects by a specific key and sort by a specific key
    function groupAndSortBy(arr, groupKey, sortKey) {
      return arr.reduce(function (acc, obj) {
        var property = obj[groupKey];
        acc[property] = acc[property] || [];
        acc[property].push(obj);
        return acc;
      }, {});
    }
  });
  
  


 
  var permis = []
  var plant = []
  var url = API_URL + "Api_Controller/show_Menu";
  $.ajax({
      url: base_url('Login/callApiDropDown?url=' + url),
      type: 'POST',
      dataType: 'Json',
      success: (response) => {
          // console.log(response);
          permis = response.permis
          plant = response.plant
          for (let i = 0; i < permis.length; i++) {
              const data = permis[i];
              // console.log(data);
              $('.selPermission').append(`<option value="${data.spg_id}">${data.spg_name}</option>`)
          }
          for (let i = 0; i < plant.length; i++) {
              const data = plant[i];
              // console.log(data);
              $('.selPlant').append(`<option value="${data.mpc_id}">${data.mpc_name}</option>`)
          }
      }
  });


// })

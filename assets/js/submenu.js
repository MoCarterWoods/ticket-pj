// $(() => {
//     var subMenu
//     var mainId
// var url = API_URL + "Administrator/showMainMenu";
//     $.ajax({
//         url: base_url("http://127.0.0.1/ticket"),
//         type: 'GET',
//         dataType: 'json',
//         success: function(res) {
//             for (let i = 0; i < res.length; i++) {
//                 const data = res[i];
//                 var mianMenu = data.main_menu
//                 subMenu = data.sub_menu
//                 mainId = mianMenu.smm_id

//                 $('#sideBar_menu').append(`	
            //     <li class="menu-item">
            //   <a href="javascript:void(0);" class="menu-link menu-toggle">
            //     <i class="${mianMenu.smm_icon}"></i>
            //     <div data-i18n="${mianMenu.smm_name}">${mianMenu.smm_name}</div>
            //   </a>
            //   <ul class="menu-sub" id="subMunu_${mianMenu.smm_id}">
            //   </ul>
            //     </li>
//                 `)
//                 for (let i = 0; i < subMenu.length; i++) {
//                     const data = subMenu[i];
//                     if (data.smm_id == mainId) {
//                         $(`#subMunu_${mainId}`).append(`	
//                         <li class="nav-item">
//                             <a href="`+base_url(data.ctrl_menu)+`" class="nav-link "> 
//                                 <span class="title">${data.smm_name}</span>
//                             </a>
//                         </li>
//                     `)
//                     }
//                     const fullUrl = window.location.href;
//                     $(`a[href="${fullUrl}"]`).closest('li').addClass('active')
//                     $(`a[href="${fullUrl}"]`).closest('ul.sub-menu').css('display','block')
//                     $(`a[href="${fullUrl}"]`).closest('li.menu_side').addClass('open')
//                 }
//             }
//         }
//     }) } )

// const apiUrl = 'http://172.21.64.176/apiCarbonManage/Administrator/showMainMenu';
// console.log(apiUrl);

// fetch(apiUrl, {
//   method: 'GET', 
// })
//   .then(response => response.json())
//   .then(data => {

//     data.result.forEach(item => {
//       console.log("smm_id:", item.smm_id);
//       console.log("smm_name:", item.smm_name);
//       console.log("smm_status_flg:", item.smm_status_flg);
//       console.log("smm_updated_date:", item.smm_updated_date);
//       console.log("smm_updated_by:", item.smm_updated_by);
//       console.log("smm_icon:", item.smm_icon);
//       console.log("smm_order:", item.smm_order);
//     });
//   })
//   .catch(error => {
//     console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
//   });

// URL ของ API

// const apiUrl = 'http://172.21.64.176/apiCarbonManage/Administrator/showMainMenu';


// const sideBarMenu = document.getElementById('sideBar_menu');


// fetch(apiUrl, {
//   method: 'POST'
// })
//   .then(response => response.json())
//   .then(data => {

//     displayDataInSidebar(data.result);
//   })
//   .catch(error => {
//     console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error);
//   });


// function displayDataInSidebar(data) {

//   data.forEach(item => {
//     const menuItem = document.createElement('ul');
//     menuItem.innerHTML = `



//                 <li class="menu-item">
//               <a href="javascript:void(0);" class="menu-link menu-toggle">
//                 <i class="menu-icon tf-icons bx bx-dock-top"></i>
//                 <div data-i18n="${item.smm_name}">${item.smm_name}</div>
//               </a>
//               <ul class="menu-sub">
//                 <li class="menu-item">
//                   <a href="" class="menu-link">
//                     <div data-i18n="${item.smm_name}">${item.smm_name}</div>
//                   </a>
//                 </li>




//     `;

//     sideBarMenu.appendChild(menuItem);
//   });
// }



$(document).ready(function () {
  // URL of the API
  var apiUrl = 'http://127.0.0.1/api/Api_Controller/show_Menu';

  // Perform Ajax request
  $.ajax({
      url: apiUrl,
      type: 'GET',
      dataType: 'json',
      success: function (data) {
          // Get the menu container
          var menuContainer = $('#sideBar_menu');

          // Loop through the data and append menu items
          for (var i = 0; i < data.length; i++) {
              var menuItem = data[i];
              var menuItemHtml = `         
              <li class="menu-item">
                <a href="" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-${menuItem.smm_icon}"></i>
                  <div data-i18n="${menuItem.smm_name}">${menuItem.smm_name}</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="`+`${base_url(menuItem.ssm_controller)}`+`" class="menu-link">
                      <div data-i18n="${menuItem.ssm_name}">${menuItem.ssm_name}</div>
                    </a>
                  </li>
                </ul>
            </li>
              `;
              menuContainer.append(menuItemHtml);
          }
          const fullUrl = window.location.href;
          $(`a[href="${fullUrl}"]`).closest('li').addClass('active')
          $(`a[href="${fullUrl}"]`).closest('ul.menu-sub').css('display','block')
          $(`a[href="${fullUrl}"]`).parents().eq(2).addClass('active')
      },
      error: function (xhr, status, error) {
          console.error('Error:', error);
      }
  });
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
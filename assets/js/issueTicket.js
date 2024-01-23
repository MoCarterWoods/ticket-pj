$(document).ready(function () {
    var dropdown = $('#inputGroupSelect01');
    var droppd = $('#droppd');

    var selpdDiv = $('#selpd');
    var selotherDiv = $('#selother');

    dropdown.change(function () {
        var selectedValue = dropdown.val();

        if (selectedValue === "pdarea") {
            selpdDiv.show();
            selotherDiv.hide();
            populateDropdown();
        } else if (selectedValue === "other") {
            selpdDiv.hide();
            selotherDiv.show();
        } else {
            selpdDiv.hide();
            selotherDiv.hide();
        }
    });

    function populateDropdown() {
        const apiUrl = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineMst';
        const proxyUrl = 'https://cors-anywhere.herokuapp.com/';
        const droppd = $('#droppd');
    
        $.ajax({
            url: proxyUrl + apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                droppd.empty();
    
                $.each(data.lineMaster, function (index, item) {
                    droppd.append($('<option>', {
                        value: item.dep_cd,
                        text: item.dep_cd
                    }));
                });
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });
    }
    
});


function JobTypeDropdown() {
    var url = API_URL + "Manage_permis_detail/show_group";
        $.ajax({
            method: "get",
            url: base_url("ManagePermission/callApiShowData?url=" + url),
            dataType: 'Json',

            success: (response) => {
                for (let i = 0; i < response.length; i++) {
                    const data = response[i];
                    $('.jodtypsel').append(`<option value="${data.spg_id}">${data.spg_name}</option>`);
                }
            },
            error: (err) => {
                console.log(err);
            },
        });
}



const fileInputs = document.getElementsByClassName('file-input');

// Loop through each file input and add event listener
for (let i = 0; i < fileInputs.length; i++) {
    fileInputs[i].addEventListener('change', function (event) {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                // Use template literals to dynamically select the image preview elements
                document.getElementById(`image-preview${i + 1}`).src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    });
}

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


    // ----------------------------------- PD & LINE -----------------------------------------
    populateDropdown();

    function populateDropdown() {
        const apiUrl = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineMst';
        const droppd = $('#droppd');
    
        $.ajax({
            url: apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                // Clear all existing options in the dropdown
                $('#droppd').empty();
    
                // Add a default option
                $('#droppd').append('<option value="">Choose Production Code</option>');
    
                // Loop through the response and add new options
                for (let i = 0; i < response.lineMaster.length; i++) {
                    const data = response.lineMaster[i];
                    $('#droppd').append(`<option value="${data.dep_cd}">${data.dep_cd}</option>`);
                }
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });
    }
    



    $('#droppd').on('change', function () {
        $('#dropline').empty();
        let getPD = $('#droppd').val();
        var url = 'http://192.168.161.219/APIReprint/LogTag_information/show_LineFormPD';
        $.ajax({
            method: "POST",
            url: base_url("IssueTicket/callApiSearchLineCd?url=" + url),
            dataType: 'Json',
            data: {
                getPD: getPD,
            },
            success: (response) => {
                $('#dropline').empty();
                $('#dropline').append('<option value="">Choose Line Code</option>');
                for (let i = 0; i < response.lineMaster.length; i++) {
                    const data = response.lineMaster[i];
                    $('#dropline').append(`<option value="${data.line_cd}">${data.line_cd}</option>`);
                }
            }
        });
    });

    // ------------------------------------------- ToolSystem ----------------------------------------

    $(document).ready(function () {
        // สร้างตัวแปร response ในขอบเขตของ document.ready
        let response;
    
        populateToolDropdown();
    
        function populateToolDropdown() {
            const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_tool';
    
            $.ajax({
                url: apiUrl,
                type: 'GET',
                dataType: 'json',
                success: function (res) {
                    // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                    response = res;
    
                    // Clear existing options in the dropdown
                    $('#SelTool').empty();
    
                    // Add a default option
                    $('#SelTool').append('<option value="">Choose...</option>');
    
                    // Loop through the API response and add options to the dropdown
                    for (let i = 0; i < response.length; i++) {
                        const toolData = response[i];
                        $('#SelTool').append(`<option value="${toolData.mts_id}">${toolData.mts_name}</option>`);
                    }
                },
                error: function (error) {
                    console.error('Error fetching data from the API:', error);
                }
            });
        }
    
        // Add event listener for the change event on SelTool dropdown
        $('#SelTool').on('change', function () {
            // Get the selected value from the dropdown
            const selectedValue = $(this).val();
    
            // Find the corresponding toolData in the response array
            const selectedTool = response.find(tool => tool.mts_id === selectedValue);
    
            // Update addMaker and addModel inputs with selected tool data
            $('#addMaker').val(selectedTool ? selectedTool.mts_maker : '');
            $('#addModel').val(selectedTool ? selectedTool.mts_model : '');
        });
    });
    
    
    
    
    // -------------------------------- Problem Con -------------------------------
    $(document).ready(function () {
        ProbConDropdown();
    
        function ProbConDropdown() {
            const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_problem';

        $.ajax({
            url: apiUrl,
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                response = res;

                // Clear existing options in the dropdown
                $('#SelProblem').empty();

                // Add a default option
                $('#SelProblem').append('<option value="">Choose...</option>');

                // Loop through the API response and add options to the dropdown
                for (let i = 0; i < response.length; i++) {
                    const problemData = response[i];
                    $('#SelProblem').append(`<option value="${problemData.mpc_id}">${problemData.mpc_name_eng} / ${problemData.mpc_name_thai}</option>`);
                }
            },
            error: function (error) {
                console.error('Error fetching data from the API:', error);
            }
        });
    }

    });


        // -------------------------------- Inspec Method -------------------------------
        $(document).ready(function () {
            InMeDropdown();
        
            function InMeDropdown() {
                const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_inspec_method';
    
            $.ajax({
                url: apiUrl,
                type: 'GET',
                dataType: 'json',
                success: function (res) {
                    // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                    response = res;
    
                    // Clear existing options in the dropdown
                    $('#SelInspec').empty();
    
                    // Add a default option
                    $('#SelInspec').append('<option value="">Choose...</option>');
    
                    // Loop through the API response and add options to the dropdown
                    for (let i = 0; i < response.length; i++) {
                        const problemData = response[i];
                        $('#SelInspec').append(`<option value="${problemData.mim_id}">${problemData.mim_name_eng} / ${problemData.mim_name_thai}</option>`);
                    }
                },
                error: function (error) {
                    console.error('Error fetching data from the API:', error);
                }
            });
        }
    
        });
    

                // -------------------------------- Trouble -------------------------------
                $(document).ready(function () {
                    TroubleDropdown();
                
                    function TroubleDropdown() {
                        const apiUrl = 'http://127.0.0.1/api/Issue_Ticket/drop_trouble';
            
                    $.ajax({
                        url: apiUrl,
                        type: 'GET',
                        dataType: 'json',
                        success: function (res) {
                            // กำหนดค่าของตัวแปร response เมื่อ API สำเร็จ
                            response = res;
            
                            // Clear existing options in the dropdown
                            $('#SelTbAc').empty();
            
                            // Add a default option
                            $('#SelTbAc').append('<option value="">Choose...</option>');
            
                            // Loop through the API response and add options to the dropdown
                            for (let i = 0; i < response.length; i++) {
                                const problemData = response[i];
                                $('#SelTbAc').append(`<option value="${problemData.mt_id}">${problemData.mt_name_eng} / ${problemData.mt_name_thai}</option>`);
                            }
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
});






jQuery(document).ready(function () {
    ImgUpload();
  });
  
  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];
  
    $('.upload__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');
  
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {
  
          if (!f.type.match('image.*')) {
            return;
          }
  
          if (imgArray.length > maxLength) {
            return false
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);
  
              var reader = new FileReader();
              reader.onload = function (e) {
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });
  
    $('body').on('click', ".upload__img-close", function (e) {
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
  }

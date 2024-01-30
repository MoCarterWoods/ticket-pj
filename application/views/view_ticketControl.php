<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<style>
    .process-step .btn:focus {
        outline: none;
    }

    .process {
        display: table;
        width: 100%;
        position: relative;
        background: #f2f2f2;
        padding: 15px;
        border-radius: 10px;
    }

    .process-row {
        display: table-row;
    }

    .process-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .process-row:before {
        top: 40px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    }

    .process-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .process-step p {
        margin-top: 4px;
    }

    .btn-circle {
        width: 80px;
        height: 80px;
        text-align: center;
        font-size: 12px;
        border-radius: 50%;
    }
</style>
<div class="container">
    <div class="row">
        <div class="process">
            <div class="process-row nav nav-tabs">
                <div class="process-step">
                <button type="button" class="btn btn-info btn-circle" data-toggle="tab" data-target="#menu1">
    <i class="fa fa-car fa-2x"></i>
</button>
                    <p>Add New Car</p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>
                    <p>Add Variants</p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-image fa-3x"></i></button>
                    <p>Add Specifications</p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-cogs fa-3x"></i></button>
                    <p>Add Images</p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><i class="fa fa-check fa-3x"></i></button>
                    <p>Save & Preview</p>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade active in">
                <h3>1. Add New Car</h3>
                <p>If car do not show in dropdown go to the Add car in the menu and refresh the page</p>
                <button type="button" class="btn btn-danger">Add Make</button>
                <button type="button" class="btn btn-danger">Add Model</button>
                <button type="button" class="btn btn-danger">Add/Upload Variants</button>

                <hr>

                <table border="1" class="table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td>Make <span style="color:red">*</span></td>
                            <td>Model <span style="color:red">*</span></td>
                            <td>Body Type <span style="color:red">*</span></td>
                            <td>Model Year <span style="color:red">*</span></td>
                            <td>Category</td>
                            <td class="dt" style="display:none;">Launch Date</td>
                        </tr>
                        <tr>
                            <td>
                                <select name="make" id="make" class="form-control selectpicker make" required="">
                                    <option value="">Select</option>
                                    <option value="26">Aston-Martin </option>
                                    <option value="11">Audi </option>
                                    <option value="32">Bentley </option>
                                    <option value="16">BMW </option>
                                    <option value="22">Bugatti </option>
                                    <option value="8">Chevrolet </option>
                                    <option value="13">Datsun </option>
                                    <option value="39">DC-DESIGN </option>
                                    <option value="34">Ferrari </option>
                                    <option value="18">Fiat </option>
                                    <option value="23">Force </option>
                                    <option value="7">Ford </option>
                                    <option value="3">Honda </option>
                                    <option value="2">Hyundai </option>
                                    <option value="30">ICML </option>
                                    <option value="15">Jaguar </option>
                                    <option value="24">Lamborghini </option>
                                    <option value="35">Land-Rover </option>
                                    <option value="40">Lexus </option>
                                    <option value="5">Mahindra </option>
                                    <option value="31">Maruti </option>
                                    <option value="14">Mercedes-Benz </option>
                                    <option value="29">Mini </option>
                                    <option value="21">Mitsubishi </option>
                                    <option value="12">Nissan </option>
                                    <option value="36">Porsche </option>
                                    <option value="28">Premier </option>
                                    <option value="9">Renault </option>
                                    <option value="37">Rolls-Royce </option>
                                    <option value="17">Skoda </option>
                                    <option value="6">Tata </option>
                                    <option value="4">Toyota </option>
                                    <option value="10">Volkswagen </option>
                                    <option value="27">Volvo </option>
                                </select>
                            </td>

                            <td>
                                <select name="model" id="model" class="form-control selectpicker model" required="">
                                    <option value="">Select</option>

                                </select>
                            </td>
                            <td>
                                <select name="b_type" id="b_type" class="form-control selectpicker body" required="">
                                    <option value="">Select</option>
                                    <option value="16">Convertible</option>
                                    <option value="15">Coupe</option>
                                    <option value="17">Crossover</option>
                                    <option value="21">Hatchback</option>
                                    <option value="22">Luxry</option>
                                    <option value="19">Minicar</option>
                                    <option value="14">Minivan</option>
                                    <option value="20">Sedan</option>
                                    <option value="18">SUV</option>
                                    <option value="13">Wagon</option>
                                </select>
                            </td>
                            <td>
                                <select name="m_year" id="m_year" class="form-control selectpicker m_year" required="">
                                    <option value="">Select</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>

                                </select>
                            </td>
                            <td>
                                <select name="category" id="cat" class="form-control" onchange="showdate()" required="">
                                    <option value="New">New</option>
                                    <option value="Popular">Popular</option>
                                    <option value="Upcoming">Upcoming</option>
                                    <option value="Latest">Latest</option>
                                    <option value="Hot">Hot</option>
                                </select>
                            </td>
                            <td class="dt" style="display:none;"><input type="date" id="lanch_date" value="" name="launch_date"></td>
                        </tr>

                        <tr>
                            <td colspan="5">
                                <textarea class="form-control coment" name="coments" rows="5" placeholder="Add some comments about your car..*" title="Add some comments about your car.." required=""></textarea>

                            </td>
                        </tr>
                    </tbody>
                </table>

                <ul class="list-unstyled list-inline pull-right">
                    <li><button type="button" class="btn btn-info next-step">Save & Continue <i class="fa fa-chevron-right"></i></button></li>
                </ul>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
                <ul class="list-unstyled list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                    <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                </ul>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Some content in menu 3.</p>
                <ul class="list-unstyled list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                    <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                </ul>
            </div>
            <div id="menu4" class="tab-pane fade">
                <h3>Menu 4</h3>
                <p>Some content in menu 4.</p>
                <ul class="list-unstyled list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                    <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                </ul>
            </div>
            <div id="menu5" class="tab-pane fade">
                <h3>Menu 5</h3>
                <p>Some content in menu 5.</p>
                <ul class="list-unstyled list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                    <li><button type="button" class="btn btn-success"><i class="fa fa-check"></i> Done!</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script>
    $(function(){
 $('.btn-circle').on('click',function(){
   $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
   $(this).addClass('btn-info').removeClass('btn-default').blur();
 });

 $('.next-step, .prev-step').on('click', function (e){
   var $activeTab = $('.tab-pane.active');

   $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

   if ( $(e.target).hasClass('next-step') )
   {
      var nextTab = $activeTab.next('.tab-pane').attr('id');
      $('[href="#'+ nextTab +'"]').addClass('btn-info').removeClass('btn-default');
      $('[href="#'+ nextTab +'"]').tab('show');
   }
   else
   {
      var prevTab = $activeTab.prev('.tab-pane').attr('id');
      $('[href="#'+ prevTab +'"]').addClass('btn-info').removeClass('btn-default');
      $('[href="#'+ prevTab +'"]').tab('show');
   }
 });
});

</script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<style>
    #exTab1 .tab-content {
        color: white;
        background-color: #428bca;
        padding: 5px 15px;
    }

    #exTab2 h3 {
        color: white;
        background-color: #428bca;
        padding: 5px 15px;
    }

    /* remove border radius for the tab */

    #exTab1 .nav-pills>li>a {
        border-radius: 0;
    }

    /* change border radius for the tab , apply corners on top*/

    #exTab3 .nav-pills>li>a {
        border-radius: 4px 4px 0 0;
    }

    #exTab3 .tab-content {
        color: white;
        background-color: #428bca;
        padding: 5px 15px;
    }

    .process-step .btn:focus {
        outline: none;
    }

    .process {
        display: table;
        width: 100%;
        position: relative;

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
<div class="content-wrapper">

    <div class="container">
        <div class="row">





            <div class="container">
                <h2>Maintenance Worksheet (ใบงานบำรุงรักษา)</h2>
            </div>

            <div id="exTab2" class="container">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#1" data-toggle="tab">อุปกรณ์ / เครื่องจักร</a>
                    </li>
                    <li><a href="#2" data-toggle="tab">Problem Condition</a>
                    </li>
                    <li><a href="#3" data-toggle="tab">Inspection Method</a>
                    </li>
                    <li><a href="#4" data-toggle="tab">Troubleshooting / Action</a>
                    </li>
                    <li><a href="#5" data-toggle="tab">รายการ ชิ้นส่วนที่ต้องใช้</a>
                    </li>
                    <li><a href="#6" data-toggle="tab">วิเคราะห์สาเหตุ / ปัญหา</a>
                    </li>
                    <li><a href="#7" data-toggle="tab">การส่งมอบอุปกรณ์ / เครื่องจักร</a>
                    </li>
                </ul>

                <div class="tab-content ">


                    <div class="tab-pane active" id="1">
                        <table border="1" class="table">
                            <tbody>
                                <tr style="background-color: cornsilk;">
                                    <td>Area <span style="color:red">*</span></td>



                                    <td class="dt" style="display:none;">Launch Date</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option value="">Choose...</option>
                                            <option value="1">Product Area</option>
                                            <option value="2">Other</option>
                                        </select>


                                        <div class="row pd-line-sel" style="display: none;" id="selpd">
                                            <label for="droppd">PD :
                                                <select class="form-select" id="droppd">

                                                </select>

                                            </label>
                                            <label for="dropline">Line :
                                                <select class="form-select" id="dropline">
                                                    <option value="">Choose Line Code</option>
                                                </select></label>
                                        </div>


                                        <div class="row other-sel" style="display: none;" id="selother">
                                            <label for="textother" class="form-label">Other</label>
                                            <textarea class="form-control" id="textother" rows="3"></textarea>
                                        </div>
                                    </td>

                                </tr>


                            </tbody>
                        </table>

                        <table border="1" class="table">
                            <tbody>
                                <tr style="background-color: cornsilk;">
                                    <td>Job Type <span style="color:red">*</span></td>
                                    <td>Process / Function <span style="color:red">*</span></td>
                                    <td>Tooling System <span style="color:red">*</span></td>


                                </tr>
                                <tr>
                                    <td>

                                        <select class="form-select" id="SelJobtype">
                                            <option value="">Choose...</option>

                                        </select>




                                    </td>


                                    <td>

                                        <textarea class="form-control" id="processf" rows="2"></textarea>

                                    </td>

                                    <td>

                                        <select class="form-select" id="SelTool">
                                            <option value="">Choose...</option>

                                        </select>

                                        <div class="row" style="    margin-left: -10px;margin-top: -10px;padding: 25px;">
                                            <label for="addMaker" class="form">Maker/Brand</label>
                                            <input type="text" id="addMaker" class="form-control" value="" readonly>

                                            <label for="addModel" class="form">Model</label>
                                            <input type="text" id="addModel" class="form-control" value="" readonly>
                                        </div>


                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>


                    <div class="tab-pane" id="2">
                        <h3>Notice the gap between the content and tab after applying a background color</h3>
                    </div>
                    <div class="tab-pane" id="3">
                        <h3>add clearfix to tab-content (see the css)</h3>
                    </div>



                </div>
            </div>

            <hr>
            </hr>


            <!-- Bootstrap core JavaScript
    ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->





        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Bordered Table -->
        <h5 class="fw-bold py-3 mb-4" align="right" id="lblTitle">
            <span class="text-muted fw-light">Ticket Maintenance /</span> Ticket Control
        </h5>


        <div class="card">
            <h5 class="card-header">Ticket Control</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 mb-2">
                    <label for="dateSelect" class="form-label">Daily or Monthly</label>
                        <select id="dateSelect" class="form-select">
                            <option>Select date</option>
                            <option value="1">Daily</option>
                            <option value="2">Monthly</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-2" >
                        <label for="selDaiily" class="form-label">Daily</label>
                        <input class="form-control" type="date" value="" id="selDaiily">
                    </div>
                    <div class="col-md-2 mb-2" >
                        <label for="selDaiily" class="form-label">Daily</label>
                        <input class="form-control" type="date" value="" id="selDaiily">
                    </div>
                    <div class="col-md-2 mb-2" >
                        <label for="selDaiily" class="form-label">Daily</label>
                        <input class="form-control" type="date" value="" id="selDaiily">
                    </div>
                    <div class="col-md-2 mb-2" style="display: none;">
                        <label for="selMonthly" class="form-label">Monthly</label>
                        <input class="form-control" type="month" value="" id="selMonthly">
                    </div>


                </div>
            </div>
        </div>



        <div class="card mt-3">
            <h5 class="card-header">Table Ticket Control</h5>

            <div class="card-body">

                <div class="table-responsive text-nowrap">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="table card-table table-bordered order-column w-100" id="tblTicketHistory">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Area</th>
                                    <th class="text-center">Tool</th>
                                    <th class="text-center">Process</th>
                                    <th class="text-center">Job Type</th>
                                    <th class="text-center">Requester</th>
                                    <th class="text-center">Maintenance by</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0" id="tbody">
                                <!-- Table body content goes here -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Bordered Table -->


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="mdlEdit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="edtMainMenu" class="form-label">Main Menu</label>
                        <input type="text" id="edtMainMenu" class="form-control" placeholder="Enter Main Menu">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="edtMainIcon" class="form-label">Main Menu Icon</label>
                        <input type="text" id="edtMainIcon" class="form-control" placeholder="Enter Main Menu Icon">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="edtOrderNo" class="form-label">Order No.</label>
                        <input type="text" id="edtOrderNo" class="form-control" placeholder="Enter Order No.">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnSaveEdit">Save changes</button>
            </div>
        </div>
    </div>
</div>
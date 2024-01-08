<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

                  <div class="card mb-4">
                  <h5 class="card-header text-center">Profile Details</h5>

                    <!-- Account -->
                    <div class="card-body d-flex justify-content-center">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                        src="http://192.168.161.207/tbkk_shopfloor/asset/img_emp/<?php echo $this->session->userdata('userName');?>.jpg"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                      <div class="row">
                        
                        <div class="mb-3 col-md-6">
                          <label for="lastName" class="form-label">Last Name</label>
                          <input class="form-control" type="text" name="lastName" id="edtfName" value="Doe" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="firstName" class="form-label">First Name</label>
                          <input
                            class="form-control"
                            type="text"
                            id="firstName"
                            name="firstName"
                            value="John"
                            autofocus
                            readonly =""
                          />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="lastName" class="form-label">Last Name</label>
                          <input class="form-control" type="text" name="lastName" id="edtlName" value="Doe" readonly />
                        </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="john.doe@example.com"
                              placeholder="john.doe@example.com"
                              readonly
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="edtEmail" name="address" placeholder="Address" readonly />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">State</label>
                            <input class="form-control" type="text" id="state" name="state" placeholder="California" />
                          </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

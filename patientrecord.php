  <?php include'header.php';?>
    <?php include'nav.php'; ?>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
        	<?php include'sidemenu.php'; ?>		
		  </div>
		  <div class="col-md-10">
        <div class="content-box-large">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="patient.php">Patient</a></li>
              <li class="breadcrumb-item active" aria-current="page">Patient Details</li>
            </ol>
          </nav>

           <div class="panel-heading">
            <div class="row">
              <div class="col-md-12">
                <h3 class="mt-0 font-weight-bold">Mojica Chavez I</h3>
              </div>
              <div class="col-md-5">
                <p>ID Number: <span class="font-weight-bold">123457890</span></p>
                <p>Contact Number: <span class="font-weight-bold">123457890</span></p>
                <p>Address: <span class="font-weight-bold">123 Unknown Road Evacom Road Paranaque City</span></p>
              </div>
              <div class="col-md-4">
                <p>Age: <span class="font-weight-bold">10</span></p>
                <p>Occupation: <span class="font-weight-bold">123Doctor</span></p>
                <p>Date Added: <span class="font-weight-bold">00/00/0000</span></p>
              </div>
              <div class="col-md-3 text-right">
                 <button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-calendar"></span> Print</button>
                </button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-add-record"><span class="glyphicon glyphicon-list-alt"></span> Add Record</button>
                </button>
              </div>
            </div>
          </div>
          <div class="panel-body mt-0">
            <div class="table-responsive">
              <table class="table">
                    <thead>
                      <tr>
                        <th>Code</th>
                        <th>OD</th>
                        <th>OS</th>
                        <th>Add O.U.</th>
                        <th>PD</th>
                        <th>Code</th>
                        <th>Lense</th>
                        <th>Tint</th>
                        <th>C. Lense</th>
                        <th>Brand</th>
                        <th>AR</th>
                        <th>Date</th>
                        <th>Remarks</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1234</td>
                        <td>-150 -0.75x80</td>
                        <td>-150 -0.75x80</td>
                        <td></td>
                        <td>80</td>
                        <td>MC 0044</td>
                        <td>SV</td>
                        <td>Clear</td>
                        <td></td>
                        <td>Icefire Eyeware</td>
                        <td>L:-150 -0.75x80<br>R: -150 -0.75x80</td>
                        <td>00/00/0000</td>
                        <td>OLD OU -2.25</td>
                        <td>
                          <a href="" class="pr-1" data-toggle="modal" data-target=".bd-edit-record"><i class="glyphicon glyphicon-pencil text-succes"></i></a>
                          <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>1234</td>
                        <td>-150 -0.75x80</td>
                        <td>-150 -0.75x80</td>
                        <td></td>
                        <td>80</td>
                        <td>MC 0044</td>
                        <td>SV</td>
                        <td>Clear</td>
                        <td></td>
                        <td>Icefire Eyeware</td>
                        <td>L:-150 -0.75x80<br>R: -150 -0.75x80</td>
                        <td>00/00/0000</td>
                        <td>OLD OU -2.25</td>
                        <td>
                          <a href="" class="pr-1" data-toggle="modal" data-target=".bd-edit-record"><i class="glyphicon glyphicon-pencil text-succes"></i></a>
                          <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>1234</td>
                        <td>-150 -0.75x80</td>
                        <td>-150 -0.75x80</td>
                        <td></td>
                        <td>80</td>
                        <td>MC 0044</td>
                        <td>SV</td>
                        <td>Clear</td>
                        <td></td>
                        <td>Icefire Eyeware</td>
                        <td>L:-150 -0.75x80<br>R: -150 -0.75x80</td>
                        <td>00/00/0000</td>
                        <td>OLD OU -2.25</td>
                        <td>
                          <a href="" class="pr-1" data-toggle="modal" data-target=".bd-edit-record"><i class="glyphicon glyphicon-pencil text-succes"></i></a>
                          <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>1234</td>
                        <td>-150 -0.75x80</td>
                        <td>-150 -0.75x80</td>
                        <td></td>
                        <td>80</td>
                        <td>MC 0044</td>
                        <td>SV</td>
                        <td>Clear</td>
                        <td></td>
                        <td>Icefire Eyeware</td>
                        <td>L:-150 -0.75x80<br>R: -150 -0.75x80</td>
                        <td>00/00/0000</td>
                        <td>OLD OU -2.25</td>
                        <td>
                          <a href="" class="pr-1" data-toggle="modal" data-target=".bd-edit-record"><i class="glyphicon glyphicon-pencil text-succes"></i></a>
                          <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <!-- Modal -->

                  <!-- add record modal -->
                  <div class="modal fade bd-add-record" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-body p-0">                           
                          <div class="panel-heading">
                            <div class="panel-title">New Record </div>
                          </div>
                          <div class="panel-body">
                            <form action="">
                              <fieldset>    

                                <div class="row mb-1">
                                  <div class="col-sm-6">
                                    <label>Date</label>
                                    <input type="date" class="form-control">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-3">
                                    <label>OD</label>
                                    <input type="text" class="form-control">
                                  </div>
                                  <div class="col-sm-3">
                                    <label>OS</label>  
                                    <input type="text" class="form-control">
                                  </div>
                                  <div class="col-sm-3">
                                  <label>ADD OU</label>
                                    <input type="text" class="form-control">
                                  </div>
                                  <div class="col-sm-3">
                                    <label>PD</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="divider1"></div>                    
                                <div class="row">
                                  <div class="col-sm-4">
                                   <label>Lense</label>
                                    <input type="text" class="form-control">
                                  </div>
                                  <div class="col-sm-4">
                                    <label>Tint</label>
                                    <input type="text" class="form-control">
                                  </div>
                                  <div class="col-sm-4">
                                  <label>Contact Lense</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="divider1"></div>  
                                <div class="row">
                                  <div class="col-sm-4">
                                  <label>Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                  </div>
                                  <div class="col-sm-4">
                                   <label>AR Left</label>
                                    <input type="text" class="form-control" placeholder="-150 -0.75x80">
                                  </div>
                                  <div class="col-sm-4">
                                   <label>AR Right</label>
                                    <input type="text" class="form-control" placeholder="-150 -0.75x80">
                                  </div>
                                </div>
                                <div class="divider1"></div>
                                <div class="form-group">
                                  <label>Remarks</label>
                                  <textarea class="form-control" rows="3"></textarea>
                                </div>
                              </fieldset>
                            </form>
                           </div>
                        </div>
                        <div class="modal-footer mt-0 p-1">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end of modal -->


                  <!-- edit modal -->
                  <div class="modal fade bd-edit-record" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-body p-0">                           
                          <div class="panel-heading">
                            <div class="panel-title">Edit Record </div>
                          </div>
                          <div class="panel-body">
                            <form action="">
                              <fieldset>    

                                <div class="row mb-1">
                                  <div class="col-sm-6">
                                    <label>Date</label>
                                    <input type="text" class="form-control" value="11/11/2018">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-3">
                                    <label>OD</label>
                                    <input type="text" class="form-control" value="-150 -0.75x80">
                                  </div>
                                  <div class="col-sm-3">
                                    <label>OS</label>  
                                    <input type="text" class="form-control" value="-150 -0.75x80">
                                  </div>
                                  <div class="col-sm-3">
                                  <label>ADD OU</label>
                                    <input type="text" class="form-control" value="80">
                                  </div>
                                  <div class="col-sm-3">
                                    <label>PD</label>
                                    <input type="text" class="form-control" value="MC 0044">
                                  </div>
                                </div>
                                <div class="divider1"></div>                    
                                <div class="row">
                                  <div class="col-sm-4">
                                   <label>Lense</label>
                                    <input type="text" class="form-control" value="SV">
                                  </div>
                                  <div class="col-sm-4">
                                    <label>Tint</label>
                                    <input type="text" class="form-control" value="Clear">
                                  </div>
                                  <div class="col-sm-4">
                                  <label>Contact Lense</label>
                                    <input type="text" class="form-control" value="">
                                  </div>
                                </div>
                                <div class="divider1"></div>  
                                <div class="row">
                                  <div class="col-sm-4">
                                  <label>Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="123">
                                  </div>
                                  <div class="col-sm-4">
                                   <label>AR Left</label>
                                    <input type="text" class="form-control" value="-150 -0.75x80">
                                  </div>
                                  <div class="col-sm-4">
                                   <label>AR Right</label>
                                    <input type="text" class="form-control" value="-150 -0.75x80">
                                  </div>
                                </div>
                                <div class="divider1"></div>
                                <div class="form-group">
                                  <label>Remarks</label>
                                  <textarea class="form-control" rows="3">New buyer</textarea>
                                </div>
                              </fieldset>
                            </form>
                           </div>
                        </div>
                        <div class="modal-footer mt-0 p-1">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end of modal -->

            </div>
          </div>
        </div>

		  </div>
		</div>
    </div>

<?php include'footer.php';?>
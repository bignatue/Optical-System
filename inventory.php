	<?php include'header.php';?>
    <?php include'nav.php'; ?>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<?php include'sidemenu.php'; ?>
		  </div>
		  <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12">
	  					<div class="content-box-large">
				          <nav aria-label="breadcrumb">
				            <ol class="breadcrumb">
				              <li class="breadcrumb-item"><a href="dashboard.php">Product</a></li>
				              <li class="breadcrumb-item active" aria-current="page">Inventory</li>
				            </ol>
				          </nav>				         

						<ul class="nav nav-tabs" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" href="#frames" role="tab" data-toggle="tab">Frames</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#contactlens" role="tab" data-toggle="tab">Contact Lens</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#readingglass" role="tab" data-toggle="tab">Reading Glass</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#sunglass" role="tab" data-toggle="tab">Sun Glass</a>
						  </li>
						</ul>

						<div class="row">
							<div class="col-md-12">
								<!-- Tab panes -->
								<div class="tab-content">
									<!-- start of frames section -->
								  <div role="tabpanel" class="tab-pane fade in active" id="frames">					  				
					  				<div class="panel-heading">
										<div class="panel-title">Frame List</div>
						                 <button type="button" class="btn btn-primary btn-sm pull-right"><span class="glyphicon glyphicon-calendar"></span> Print</button>
									</div>
					  				<div class="panel-body">
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover" id="example">
											<thead>
												<tr>
													<th>Code</th>
													<th>Supplier</th>
													<th>Brand</th>
					                				<th>Model</th>
					                				<th>Eye Size</th>
													<th>Shape</th>
													<th>Color</th>
													<th>Price</th>
													<th>Date In</th>
													<th>Quantity</th>
													<th>Total Price</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
								              <tr class="odd gradeX">
								                <td>12345</td>
								                <td>Nho</td>
								                <td>Musk</td>
								                <td>87015</td>
								                <td>53-16</td>
								                <td>Square</td>
								                <td>Blacl/Red</td>
								                <td>P10.00</td>
								                <td>00/00/0000</td>
								                <td>100</td>
								                <td>P1,000.00</td>
						                        <td>
						                          <a href="" class="pr-1" data-toggle="modal" data-target=".bd-edit-frame"><i class="glyphicon glyphicon-pencil text-succes"></i></a>
						                          <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
						                        </td>
								              </tr>
											</tbody>
										</table>
					  				</div>
								  </div><!-- end of frames section -->
								  <div role="tabpanel" class="tab-pane fade" id="contactlens">
								  	
					  				<div class="panel-heading">
										<div class="panel-title">Contact Lens List</div>
									</div>
					  				<div class="panel-body">
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-hover" id="example">
											<thead>
												<tr>
													<th>Code</th>
													<th>Supplier</th>
													<th>Brand</th>
					                				<th>Model</th>
													<th>Color</th>
													<th>Power</th>
													<th>Price</th>
													<th>Date In</th>
													<th>Quantity</th>
													<th>Total Price</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
								              <tr class="odd gradeX">
								                <td>FL - D31</td>
								                <td>Nho</td>
								                <td>Geolica Ciline</td>
								                <td>n/a</td>
								                <td>Violet</td>
								                <td>Plano</td>
								                <td>P10.00</td>
								                <td>00/00/0000</td>
								                <td>100</td>
								                <td>P1,000.00</td>
						                        <td>
						                          <a href="" class="pr-1" data-toggle="modal" data-target=".bd-edit-frame"><i class="glyphicon glyphicon-pencil text-succes"></i></a>
						                          <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
						                        </td>
								              </tr>
											</tbody>
										</table>
					  				</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="readingglass">
								  	
					  				<div class="panel-heading">
										<div class="panel-title">Reading Glass List</div>
									</div>
					  				<div class="panel-body">
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-hover" id="example">
											<thead>
												<tr>
													<th>Code</th>
													<th>Supplier</th>
													<th>Brand</th>
					                				<th>Model</th>
													<th>Color</th>
													<th>Power</th>
													<th>Price</th>
													<th>Date In</th>
													<th>Quantity</th>
													<th>Total Price</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
								              <tr class="odd gradeX">
								                <td>RG 0001</td>
								                <td>Nho</td>
								                <td>Geolica Ciline</td>
								                <td>Plastic</td>
								                <td>Violet</td>
								                <td>+1</td>
								                <td>P10.00</td>
								                <td>00/00/0000</td>
								                <td>100</td>
								                <td>P1,000.00</td>
						                        <td>
						                          <a href="" class="pr-1" data-toggle="modal" data-target=".bd-edit-frame"><i class="glyphicon glyphicon-pencil text-succes"></i></a>
						                          <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
						                        </td>
								              </tr>
											</tbody>
										</table>
					  				</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="sunglass">
								  	
					  				<div class="panel-heading">
										<div class="panel-title">Sun Glass List</div>
									</div>
					  				<div class="panel-body">
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-hover" id="example">
											<thead>
												<tr>
													<th>Code</th>
													<th>Supplier</th>
													<th>Brand</th>
					                				<th>Model</th>
													<th>Color</th>
													<th>Lens Color</th>
													<th>Price</th>
													<th>Date In</th>
													<th>Quantity</th>
													<th>Total Price</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
								              <tr class="odd gradeX">
								                <td>RG 0001</td>
								                <td>Nho</td>
								                <td>Gucci</td>
								                <td>5003 COL.02 48-18</td>
								                <td>Dark Gray</td>
								                <td>Smoke</td>
								                <td>P10.00</td>
								                <td>00/00/0000</td>
								                <td>100</td>
								                <td>P1,000.00</td>
						                        <td>
						                          <a href="" class="pr-1" data-toggle="modal" data-target=".bd-edit-frame"><i class="glyphicon glyphicon-pencil text-succes"></i></a>
						                          <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
						                        </td>
								              </tr>
											</tbody>
										</table>
					  				</div>
								  </div>
								</div>
							</div>
						</div>

						<!-- edit modal -->
						<div class="modal fade bd-edit-frame" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
						<div class="modal-content">
						<div class="modal-body p-0">                           
						<div class="panel-heading">
						<div class="panel-title">Edit Frame </div>
						</div>
						<div class="panel-body">

						<form action="">
							<fieldset>
								<div class="row">
									<div class="col-sm-6">
										<label>Code <span class="text-danger">*</span></label>
										<input type="text" class="form-control mb-1">
										<label>Supplier</label>
										<input type="text" class="form-control mb-1">
										<label>Brand Name</label>
										<input type="text" class="form-control mb-1">
										<div class="row">
											<div class="col-sm-6">
												<label>Model</label>
												<input type="text" class="form-control mb-1">
											</div>
											<div class="col-sm-6">
												<label>Delivered</label>
												<div class="input-group date" data-provide="datepicker">
												    <div class="input-group-addon">
												        <span class="glyphicon glyphicon-calendar"></span>
												    </div>
												    <input type="text" class="form-control mb-1">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-6">
												<label>Eye Size</label>
												<input type="text" class="form-control mb-1">
											</div>
											<div class="col-sm-6">
												<label>Color</label>
												<input type="text" class="form-control mb-1">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label>Price</label>
												<input type="text" class="form-control mb-1">
											</div>
											<div class="col-sm-6">
												<label>Quantity</label>
												<input type="text" class="form-control mb-1">
											</div>
										</div>
										<label>Description</label>
										<textarea class="form-control" placeholder="Metalic soft bar" rows="4"></textarea>
									</div>
								</div>
								<div class="divider1"></div>
							</fieldset>
							
	                        <div class="modal-footer mt-0 p-1">
	                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                          <button type="button" class="btn btn-primary">Submit</button>
	                        </div>
	                        
						</form>
						</div>
						</div>
						</div>
						</div>
						</div>

			  			</div>
	  				</div>
	  			</div>

	  		

			

	  		<!--  Page content -->
		  </div>
		</div>
    </div>

<?php include'footer.php';?>
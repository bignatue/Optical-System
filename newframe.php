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
				              <li class="breadcrumb-item"><a href="patient.php">Add Stocks</a></li>
				              <li class="breadcrumb-item active" aria-current="page">Frame</li>
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
							            <div class="panel-title">New Frame</div>
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
											<div class="pull-right">
												<div class="btn btn-primary">
													<i class="fa fa-save"></i>
													Submit
												</div>
											</div>
										</form>
					  				</div>
								  </div><!-- end of frames section -->
								  <div role="tabpanel" class="tab-pane fade" id="contactlens">
								  	<div class="panel-heading">
							            <div class="panel-title">New Contact Lens</div>
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
																<label>Color</label>
																<input type="text" class="form-control mb-1">
															</div>
															<div class="col-sm-6">
																<label>Power</label>
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
											<div class="pull-right">
												<div class="btn btn-primary">
													<i class="fa fa-save"></i>
													Submit
												</div>
											</div>
										</form>
					  				</div>
								  </div><div role="tabpanel" class="tab-pane fade" id="readingglass">
								  	<div class="panel-heading">
							            <div class="panel-title">New Reading Glass</div>
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
																<label>Color</label>
																<input type="text" class="form-control mb-1">
															</div>
															<div class="col-sm-6">
																<label>Power</label>
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
											<div class="pull-right">
												<div class="btn btn-primary">
													<i class="fa fa-save"></i>
													Submit
												</div>
											</div>
										</form>
					  				</div>
								  </div><div role="tabpanel" class="tab-pane fade" id="sunglass">
								  	<div class="panel-heading">
							            <div class="panel-title">New Sun Glass</div>
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
																<label>Color</label>
																<input type="text" class="form-control mb-1">
															</div>
															<div class="col-sm-6">
																<label>Lens Color</label>
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
											<div class="pull-right">
												<div class="btn btn-primary">
													<i class="fa fa-save"></i>
													Submit
												</div>
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
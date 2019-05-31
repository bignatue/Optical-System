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
              					<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
				              <li class="breadcrumb-item"><a href="patient.php">Patient</a></li>
				              <li class="breadcrumb-item active" aria-current="page">New Patient</li>
				            </ol>
				          </nav>
			  				<div class="panel-heading">
					            <div class="panel-title">Edit Patient</div>
					        </div>
			  				<div class="panel-body">
			  					<form action="">
									<fieldset>
										<div class="row">
											<div class="col-sm-4">
											<label>First Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control" value="Mojica">
											</div>
											<div class="col-sm-4">
											<label>Last Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control" value="Chavez">
											</div>
											<div class="col-sm-4">
											<label>Middle Initial</label>
												<input type="text" class="form-control" value="L">
											</div>
										</div>

										<div class="divider1"></div>
										
										<div class="row">
											<div class="col-sm-4">
											<label>Occupation</label>
												<input type="text" class="form-control" value="Doctor">
											</div>
											<div class="col-sm-4">
											<label>Contact Number <span class="text-danger">*</span></label>											
												<div class="input-group">
													<input type="text" class="form-control" value="(999) 999-9999" data-mask-placeholder="0">
													<span class="input-group-addon"><i class="fa fa-phone"></i></span>
												</div>
											</div>
											<div class="col-sm-4">
											<label>Age</label>
												<input type="text" class="form-control" value="10">
											</div>
										</div>

										<div class="divider1"></div>

										<div class="form-group">
											<label>Address</label>
											<textarea class="form-control" rows="3">123 Unknown RoadEvacom Road Paranaque City</textarea>
										</div>
									</fieldset>
									<div>
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

	  		<!--  Page content -->
		  </div>
		</div>
    </div>

<?php include'footer.php';?>
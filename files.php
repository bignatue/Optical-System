<?php 
	include'header.php';
	include'nav.php';
?>

    <div class="page-content mb-10">
    	<div class="row">
		  <div class="col-md-2">
		  	<?php include'sidemenu.php';?>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		
		  		<div class="col-md-12"> 
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
						  	<li class="breadcrumb-item active" aria-current="page">Records</li>
						</ol>
					</nav>
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Export Records</div>
						</div>
		  				<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
				  					<label>Select Records <span class="text-danger">*</span></label>
									<select class="form-control mb-1" id="select-1">
										<option>Patients</option>
										<option>Frames</option>
									</select>
				  					<label>Select Year <span class="text-danger">*</span></label>
									<select class="form-control mb-1" id="select-1">
										<option>2018</option>
										<option>2017</option>
										<option>2016</option>
										<option>2015</option>
										<option>2014</option>
										<option>2013</option>
										<option>2012</option>
										<option>2011</option>
									</select>
				  					<label>Select Month</label>
									<select class="form-control mb-1" id="select-1">
										<option>January</option>
										<option>February</option>
										<option>March</option>
										<option>April</option>
										<option>May</option>
										<option>June</option>
										<option>July</option>
										<option>August </option>
										<option>September</option>
										<option>October</option>
										<option>November</option>
										<option>December</option>
									</select>
									<button class="btn btn-primary" type="submit">
									<i class="glyphicon glyphicon-floppy-save"></i> Download</button>
								</div>
								<div class="col-sm-6">
									<h5 class="text-danger"><i class="glyphicon glyphicon-warning-sign"></i> Note:</h5>
									<p>Record exported as csv format.</p>
									<p>Full download can take awhile depends on how big is the records.</p>
									<p>
										<label class="radio-inline"><input type="radio" name="records" checked>Patient Record</label>
										<label class="radio-inline"><input type="radio" name="records">Frame</label>
									</p>
									<button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-tasks"></i> Export All Records</button>
								</div>
							</div>
		  				</div>
		  			</div>
		  		</div>

		  	</div>
 
		  </div>
		</div>
    </div>


<?php include'footer.php';?>
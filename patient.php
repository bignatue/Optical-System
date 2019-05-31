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
              <li class="breadcrumb-item active" aria-current="page">Patient</li>
            </ol>
          </nav>

  				<div class="panel-heading">
					<div class="panel-title">Patient List</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover" id="example">
						<thead>
							<tr>
								<th>ID #</th>
								<th>Last Name</th>
								<th>First Name</th>
								<th>MI</th>
								<th>Age</th>
								<th>Occupation</th>
								<th>Contact Number</th>
								<th>Address</th>
                <th>Action</th>
							</tr>
						</thead>
						<tbody>
              <a href="patientrecord.php">
                <tr>
                  <td>12345</td>
                  <td>Chavez</td>
                  <td>Mojica</td>
                  <td class="center">L</td>
                  <td class="center">10</td>
                  <td class="center">Doctor</td>
                  <td class="center">123457890</td>
                  <td class="center">123 Unknown Road Evacom Road Paranaque City</td>
                  <td>
                    <a href="patientrecord.php" class="pr-1"><i class="glyphicon glyphicon-search text-succes"></i></a>
                    <a href="edit-patient.php" class="pr-1"><i class="glyphicon glyphicon-edit text-succes"></i></a>
                    <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
                  </td>
                </tr>
              </a>              
              <a href="patientrecord.php">
                <tr>
                  <td>12345</td>
                  <td>Chavez</td>
                  <td>Mojica</td>
                  <td class="center">L</td>
                  <td class="center">10</td>
                  <td class="center">Doctor</td>
                  <td class="center">123457890</td>
                  <td class="center">123 Unknown Road Evacom Road Paranaque City</td>
                  <td>
                    <a href="patientrecord.php" class="pr-1"><i class="glyphicon glyphicon-search text-succes"></i></a>
                    <a href="edit-patient.php" class="pr-1"><i class="glyphicon glyphicon-edit text-succes"></i></a>
                    <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
                  </td>
                </tr>
              </a>              
              <a href="patientrecord.php">
                <tr>
                  <td>12345</td>
                  <td>Chavez</td>
                  <td>Mojica</td>
                  <td class="center">L</td>
                  <td class="center">10</td>
                  <td class="center">Doctor</td>
                  <td class="center">123457890</td>
                  <td class="center">123 Unknown Road Evacom Road Paranaque City</td>
                  <td>
                    <a href="patientrecord.php" class="pr-1"><i class="glyphicon glyphicon-search text-succes"></i></a>
                    <a href="edit-patient.php" class="pr-1"><i class="glyphicon glyphicon-edit text-succes"></i></a>
                    <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
                  </td>
                </tr>
              </a>              
              <a href="patientrecord.php">
                <tr>
                  <td>12345</td>
                  <td>Chavez</td>
                  <td>Mojica</td>
                  <td class="center">L</td>
                  <td class="center">10</td>
                  <td class="center">Doctor</td>
                  <td class="center">123457890</td>
                  <td class="center">123 Unknown Road Evacom Road Paranaque City</td>
                  <td>
                    <a href="patientrecord.php" class="pr-1"><i class="glyphicon glyphicon-search text-succes"></i></a>
                    <a href="edit-patient.php" class="pr-1"><i class="glyphicon glyphicon-edit text-succes"></i></a>
                    <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
                  </td>
                </tr>
              </a>              
              <a href="patientrecord.php">
                <tr>
                  <td>12345</td>
                  <td>Chavez</td>
                  <td>Mojica</td>
                  <td class="center">L</td>
                  <td class="center">10</td>
                  <td class="center">Doctor</td>
                  <td class="center">123457890</td>
                  <td class="center">123 Unknown Road Evacom Road Paranaque City</td>
                  <td>
                    <a href="patientrecord.php" class="pr-1"><i class="glyphicon glyphicon-search text-succes"></i></a>
                    <a href="edit-patient.php" class="pr-1"><i class="glyphicon glyphicon-edit text-succes"></i></a>
                    <a href=""><i class="glyphicon glyphicon-trash text-danger"></i></a>
                  </td>
                </tr>
              </a>
            </tbody>
					</table>
  				</div>
  			</div>

        

		  </div>
		</div>
    </div>

<?php include'footer.php';?>
<?php include'header.php';?>
	<style>body{background-image: url(images/bg.png);background-size: 80px;}footer{display:none;}</style>
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			                <p class="text-danger text-left"><i class="glyphicon glyphicon-remove"></i> Invalid username!</p>
			                <input class="form-control" type="text" placeholder="Username">
			                <p class="text-danger text-left"><i class="glyphicon glyphicon-remove"></i> Invalid password!</p>
			                <input class="form-control" type="password" placeholder="Password">
			                <div class="action">
			                    <a class="btn btn-primary signup" href="dashboard.php">Sign In</a>
			                </div>                
			            </div>
			        </div>
			        <div class="already">
			            <p>Login as demo</p>
			            <a href="dashboard.php">Click here</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>
<?php include'footer.php';?>
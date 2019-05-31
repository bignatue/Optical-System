<?php include'header.php';?>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign Up</h6>
			                <p class="text-danger text-left"><i class="glyphicon glyphicon-remove"></i> Password didnot match!</p>
			                <input class="form-control" type="text" placeholder="Username">
			                <input class="form-control" type="password" placeholder="Password">
			                <input class="form-control" type="password" placeholder="Confirm Password">
			                <div class="action">
			                    <a class="btn btn-primary signup" href="index.php">Sign Up</a>
			                </div>                
			            </div>
			        </div>

			        <div class="already">
			            <p>Have an account already?</p>
			            <a href="index.php">Login</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>
	<style>footer{display:none;}</style>
<?php include'footer.php';?>
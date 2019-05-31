<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png"/>
    <!-- jQuery UI -->
    <link href="css/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="css/calendar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include'nav.php'; ?>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">		  	
		  	<?php include'sidemenu.php'; ?>
		  </div>
		  <div class="col-md-10">

		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					<div class="row">
		  						<div class="col-md-2">
		  							<div id='external-events'>
	                                    <h4>Draggable Events</h4>
	                                    <div class='external-event'>My Event 1</div>
	                                    <div class='external-event'>My Event 2</div>
	                                    <div class='external-event'>My Event 3</div>
	                                    <div class='external-event'>My Event 4</div>
	                                    <div class='external-event'>My Event 5</div>
	                                    <div class='external-event'>My Event 6</div>
	                                    <div class='external-event'>My Event 7</div>
	                                    <div class='external-event'>My Event 8</div>
	                                    <div class='external-event'>My Event 9</div>
	                                    <div class='external-event'>My Event 10</div>
	                                    <div class='external-event'>My Event 11</div>
	                                    <div class='external-event'>My Event 12</div>
	                                    <div class='external-event'>My Event 13</div>
	                                    <div class='external-event'>My Event 14</div>
	                                    <div class='external-event'>My Event 15</div>
	                                    <p>
	                                    <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
	                                    </p>
                                    </div>
		  						</div>
		  						<div class="col-md-10">
		  							<div id='calendar'></div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>


		  </div>
		</div>
    </div>

    <footer>
         <div class="container">         
            
            <div class="copy text-center">
               All Righs Reserved. | Copyright 2018  Created by: <a target="_blank" href='http://www.bpbantigue.com/'>BB Tea Team</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/fullcalendar/fullcalendar.js"></script>
    <script src="vendors/fullcalendar/gcal.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/calendar.js"></script>
  </body>
</html>
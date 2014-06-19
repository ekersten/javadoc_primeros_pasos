<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Macro Campus</title>
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans|Open+Sans:400,300,700' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="css/macrocampus.css"/>
</head>
<body>
	<div class="page-wrap">
		<?php include('includes/header.php'); ?>
		<section class="container-fluid leagues">
			<!-- fila1 -->
					<div class="row">
						<div class="col-xs-12">
							<h2>Leagues - ENROLL</h2>
						</div>
					</div>
					<div class="row league">
						<div class="col-xs-2 text-center pr5">
							<p>Institution</p>
							<p><img src="img/liga02.jpg" class="responsive" width="80"/></p>
						</div>
						<div class="col-xs-2 text-center pl5">
							<p>Sponsor</p>
							<p><img src="img/sponsor01.jpg" class="responsive" width="80"/></p>
						</div>

						<div class="col-xs-4">
							<h5>Harvard - US Macro Forecasting</h5>
							<p>Sponsored by Harvard University - School of Economics<br/>
							Closed to Invited participants<br/>
							From 01/04/2014 to 31/10/2014<br/>	
							</p>
						</div>
						<div class="col-xs-2 text-center date">
							<h5>Suscription Due Date</h5>
							<span>31/03/2014</span>
							<p>3 days remaining!</p>
						</div>
						<div class="col-xs-2 text-center participants">
							<h5>Participants</h5>
							<p>24</p>
							<p>forecasters already enrolled</p>
						</div>
					</div>
				<div class="row">
			<div class="col-xs-4">BORRAR</div>
			<div class="col-xs-8">
				<p>Prize:  xxxxxx</p>
				<p>Indicators included:</br>
					US: GDP - ISM - CPI - House Prices</br>		
	Eurozone: Unemployment - CPI</p>

			<p class="margin-top">
				This League is available only to participants invited by the organizer. </br>
				If you have received an invitation email, please enter the passcode
			</p>
				<form class="form-horizontal form" role="form">
					<label class="control-label" for="inputSmall">Passcode</label>
						<div class="col-xs-5 nopadding">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
							<label>
								<input type="checkbox"> I have and accepted the Leagues Terms & Conditions
							</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Enroll</button>
						</div>
					</div>
				
				</form>

			</div>
				
			</div>	
				</div>

			</div>
			<!-- fin fila4 -->
			<!-- fila 5 -->
			
			
			<!-- fin fila5 -->

		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
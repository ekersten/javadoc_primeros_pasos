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
		<section class="container-fluid user-registration">
			<div class="row">
				<div class="col-xs-12">
					<div class="steps">
						<div class="step past">
							<div class="name">Step 1</div>
							<div class="info">Terms &amp; Conditions</div>
						</div>
						<div class="step past">
							<div class="name">Step 2</div>
							<div class="info">Personal Information</div>
						</div>
						<div class="step past">
							<div class="name">Step 3</div>
							<div class="info">Select Indicators</div>
						</div>
						<div class="step current">
							<div class="name">Step 4</div>
							<div class="info">Open Leagues</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h1>Active &amp; Open Leagues</h1>
				</div>
			</div>
			<div class="row leagues">
				<div class="col-xs-6 league">
					<div class="row">
						<div class="col-xs-10">
							<img src="http://placehold.it/100x100" width="80"/>
							<h5>Harvard - Us Macro Forescasting</h5>
							<p>Sponsored by Harvard University - School of Economics<br/>
							From 01/04/2014 to 31/10/2014<br/>
							Prize: 50 credits</p>
						</div>
						<div class="col-xs-2">
							<button type="submit" class="btn btn-default">Suscribe</button>
						</div>
					</div>
					
				</div>
				<div class="col-xs-6 league">
					<div class="row">
						<div class="col-xs-10">
							<img src="http://placehold.it/100x100" width="80"/>
							<h5>Harvard - Us Macro Forescasting</h5>
							<p>Sponsored by Harvard University - School of Economics<br/>
							From 01/04/2014 to 31/10/2014<br/>
							Prize: 50 credits</p>
						</div>
						<div class="col-xs-2">
							<button type="submit" class="btn btn-success">Suscribed</button>
						</div>
					</div>
					
				</div>
			</div>
			<hr>
						
			<!-- fila 4 -->
			<div class="row margin-top">
				<div class="col-xs-12 text-center">
					<button type="submit" class="btn btn-primary">< Previus </button>
					<button type="submit" class="btn btn-primary">Next ></button>
				</div>
			</div>
			<!-- fin fila4 -->
		
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
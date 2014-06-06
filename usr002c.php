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
						<div class="step current">
							<div class="name">Step 3</div>
							<div class="info">Select Indicators</div>
						</div>
						<div class="step">
							<div class="name">Step 4</div>
							<div class="info">Open Leagues</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h1>Select indicators to receive alerts</h1>
					<p>Select the indicators you are interested on. This will help you to avoid missing a data release.<br/>We recommend selecting and making forecasts on all the indicators inside a caetgory to be fairly ranked.</p>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-xs-4">
					<div class="panel panel-primary no-padding">
						<div class="panel-heading">
							<h3 class="panel-title">Available Indicators</h3>
						</div>
						<div class="panel-body">
							<div class="list-group">
								<a class="list-group-item first-level"><span class="icon-caret-down"></span>US</a>
								<a class="list-group-item second-level"><span class="icon-caret-down"></span>Activity</a>
								<a class="list-group-item third-level"><span></span>ISM</a>
								<a class="list-group-item second-level"><span class="icon-caret-right"></span>Construction</a>
								<a class="list-group-item first-level"><span class="icon-caret-right"></span>Japan</a>
								<a class="list-group-item first-level"><span class="icon-caret-right"></span>China</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-2 col-xs-offset-1 text-center">
					<p><button class="btn btn-default btn-block">&lt;&lt;</button></p>
					<p><button class="btn btn-default btn-block">&gt;&gt;</button></p>
				</div>
				<div class="col-xs-4 col-xs-offset-1">
					<div class="panel panel-primary no-padding">
						<div class="panel-heading">
							<h3 class="panel-title">My Items</h3>
						</div>
						<div class="panel-body">
							<div class="list-group">
								<a class="list-group-item">None</a>
								<a class="list-group-item">&nbsp;</a>
								<a class="list-group-item">&nbsp;</a>
								<a class="list-group-item">&nbsp;</a>
								<a class="list-group-item">&nbsp;</a>
								<a class="list-group-item">&nbsp;</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
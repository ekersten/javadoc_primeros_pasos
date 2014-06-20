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
			<div class="row">
				<div class="col-xs-12">
					<div class="steps">
						<div class="step past">
							<div class="name">Step 1</div>
							<div class="info">League Information</div>
						</div>
						<div class="step past">
							<div class="name">Step 2</div>
							<div class="info">Indicators and Dates</div>
						</div>
						<div class="step past">
							<div class="name">Step 3</div>
							<div class="info">Add Assignments</div>
						</div>
						<div class="step past">
							<div class="name">Step 4</div>
							<div class="info">Participants</div>
						</div>
						<div class="step current">
							<div class="name">Step 5</div>
							<div class="info">Alerts</div>
						</div>
						<div class="step">
							<div class="name">Step 6</div>
							<div class="info">Payment Mode</div>
						</div>
						<div class="step">
							<div class="name">Step 7</div>
							<div class="info">Summay</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h1>Alerts</h1>
				</div>
			</div>
			<form class="form-horizontal form" role="form">
			<!-- fila1 -->
			<div class="row">
				<div class="col-xs-12 description">
					<p>Would you like to receive alerts on your Inbox?</p>
					<p>Alerts will keep you up to date on events developing in your league.</p>
				</div>
			</div>
			<!-- fin fila 1 -->
			<!-- fila 2 -->
			<div class="row margin-top">
				<div class="col-xs-8">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">Alert me 1 week before the release of data for selected indicators.
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">Alert me after the release of data for selected indicators.
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">Alert me on an assignment due date.
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">Alert me when a student uploads an assignment.
						</label>
					</div>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-xs-12 text-center">
					<button type="submit" class="btn btn-primary">< Previus </button>
					<button type="submit" class="btn btn-primary">Next ></button>
				</div>
			</div>
			<!-- fin fila 4 -->
			<!-- fila5 -->
			<!-- fin fila5 -->
			</form>
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
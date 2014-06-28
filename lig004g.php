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
						<div class="step past">
							<div class="name">Step 5</div>
							<div class="info">Alerts</div>
						</div>
						<div class="step past">
							<div class="name">Step 6</div>
							<div class="info">Payment Mode</div>
						</div>
						<div class="step current">
							<div class="name">Step 7</div>
							<div class="info">Summay</div>
						</div>
					</div>
				</div>
			</div>
			<form class="form-horizontal form" role="form">
			<!-- fila1 -->
			<div class="row">
				<div class="col-xs-12">
					<h1>Congratulations!</h1>
					<p>You have succesfully set up a league with the following details: </p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<ul class="league-info">
						<li><strong>League type:</strong> Academic</li>
						<li><strong>Course:</strong> Econ 401</li>
						<li><strong>Season:</strong> Spring 2013</li>
						<li><strong>Active from:</strong> 04/01/2014 <strong>to</strong> 10/31/2014</li>
						<li><strong>Selected Indicators:</strong> <br/>
							<dl>
								<dt>US</dt>
								<dd>
									<ul>
										<li>Activity / ISM</li>
										<li>Activity / CPI</li>
										<li>Employment / Unemployment Rate</li>
									</ul>
								</dd>
							</dl>
							<dl>
								<dt>Germany</dt>
								<dd>
									<ul>
										<li>Activity / ISM</li>
										<li>Activity / CPI</li>
										<li>Employment / Unemployment Rate</li>
									</ul>
								</dd>
							</dl>
						</li>
						<li><strong>Assignments uploaded:</strong> 2</li>
						<li><strong>Invitations sent:</strong> 15</li>
						<li><strong>Payment method:</strong> Paid by the Institution</li>
					</ul>
				</div>
			</div>
			<!-- fin fila 1 -->
			<!-- fila 2 -->
			<div class="row margin-top">
				<div class="col-xs-12 text-center">
					<button type="submit" class="btn btn-primary">< Previous </button>
					<button type="submit" class="btn btn-primary">Finish</button>
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
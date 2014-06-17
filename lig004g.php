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
			<div class="row">
				<div class="col-xs-12">
					<h1>Summary</h1>
				</div>
			</div>
			<form class="form-horizontal form" role="form">
			<!-- fila1 -->
			<div class="row">
				<div class="col-xs-12">
					<p>Congratulations!</p>
					<p>You have succesfully set up your League. Please provide the payment method</p>
				</div>
			</div>
			<!-- fin fila 1 -->
			<!-- fila 2 -->
			<div class="col-xs-8">
				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Paid by the participants (credit card needed)
						</label>
						</div>
						<div class="radio">
						<label>
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Paid by the Institution (send me the invoice)
					</label>
				</div>



			</div>
			<div class="row margin-top">
				<div class="col-xs-12 text-center">
					<button type="submit" class="btn btn-primary">< Previus </button>
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
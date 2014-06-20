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
						<div class="step current">
							<div class="name">Step 4</div>
							<div class="info">Participants</div>
						</div>
						<div class="step">
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
					<h1>Invite participants</h1>
				</div>
			</div>
			<form class="form-horizontal form" role="form">
			<!-- fila1 -->
			<div class="row">
				<div class="col-xs-12 description">
					<p>Upload a list of emails and we will tell them it's time to suscribe.</p>
					<p>We can handle text and excel files. Just one email per row and no empty lines in between. <a>Read more</a></p>
				</div>
			</div>
			<!-- fin fila 1 -->
			<!-- fila 2 -->
			<div class="col-xs-4">
				<div class="row margin-top margin-bottom">
					<div class="col-xs-4 text-center"><a class="btn btn-default">Upload file</a></div>
					<div class="col-xs-8">
						<p class="description">15 emails found on list<br/>0 errors found</p>
					</div>
				</div>
			</div>
			<!-- fin fila 2 -->
			<!-- fila3 -->
			<div class="row">
				<div class="col-xs-8">
				<p>Or copy this link and send it to your participants. You will also have to send them the passcode</p>
				</div>
				<div class="col-xs-8">
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Link</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Passcode</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Proposed message</label>
						<div class="col-xs-8">
							<textarea class="form-control input-sm" type="text" id="inputSmall" rows="5"></textarea>
						</div>
					</div>
				</div>
			</div>
			<!-- fin fila3 -->
			<!-- fila4 -->
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
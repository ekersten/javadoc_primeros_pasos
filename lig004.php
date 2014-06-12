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
						<div class="step current">
							<div class="name">Step 1</div>
							<div class="info">League Information</div>
						</div>
						<div class="step">
							<div class="name">Step 2</div>
							<div class="info">Indicators and Dates</div>
						</div>
						<div class="step">
							<div class="name">Step 3</div>
							<div class="info">Add Assignments</div>
						</div>
						<div class="step">
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
					<h1>League Information</h1>
				</div>
			</div>
			<form class="form-horizontal user-registration-form" role="form">
			<!-- fila1 -->
			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Title</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Institution</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<div class="col-xs-4">
							<!-- <img src="http://placehold.it/80x80" width="80"/> -->
							<img src="img/escudo.png" width="80"/>
						</div>
						<div class="col-xs-8">
							<button type="button" class="btn btn-default btn-lg btn-upload">Upload Image</button>
						</div>
					</div>
				</div>
			</div>
			<hr/>
			<!-- fin fila 1 -->
			<!-- fila 2 -->
			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Course</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Season</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Professor or Tutor</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Brief Description</label>
						<div class="col-xs-8">
							<textarea class="form-control input-sm" type="text" id="inputSmall"></textarea>
						</div>
					</div>
			</div>
			<div class="col-xs-6">
					<div class="form-group">
						<div class="col-xs-3">
							<!-- <img src="http://placehold.it/80x80" width="80"/> -->
							<img src="img/pdf.png" width="80"/>
						</div>
						<div class="col-xs-9">
							<button type="button" class="btn btn-default btn-lg btn-upload">Upload Introduction File</button>
						</div>
					</div>
					</div>
			</div>
			<!-- fin fila2 -->
			<hr/>
			<!-- fila3 -->
			<div class="row">
				<div class="col-xs-12">
					<h4>Sponsor</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						<div class="col-xs-4">
							<label class="control-label col-xs-3" for="inputSmall">Company&nbsp;/&nbsp;Institution</label>
						</div>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-4">
							<label class="control-label col-xs-3" for="inputSmall">Website</label>
						</div>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
				</div>
				
				<div class="col-xs-6">
					<div class="form-group">
						<div class="col-xs-3">
							<img src="img/escudo.png" width="80"/>
						</div>
						<div class="col-xs-9">
							<button type="button" class="btn btn-default btn-lg btn-upload">Upload Image</button>
						</div>
					</div>
				</div>	
			</div>
			
			<!-- fin fila2 -->
			<!-- fila 4 -->
			<div class="row margin-top">
				<div class="col-xs-12 text-center">
					<button type="submit" class="btn btn-primary">< Previus </button>
					<button type="submit" class="btn btn-primary">Next ></button>
				</div>
			</div>
			<!-- fin fila4 -->
			</form>
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
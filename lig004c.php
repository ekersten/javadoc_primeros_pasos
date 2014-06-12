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
						<div class="step current">
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
					<h1>Add Assignments</h1>
				</div>
			</div>
			<form class="form-horizontal user-registration-form" role="form">
			<!-- fila1 -->
			<div class="row">
				<div class="col-xs-12">
					<p>Here you can add assignments in addition to the forecasts you have just required to your students.</p>
					<p>Assignments added here will be easily tracked in the league monitor.</p>
				</div>
			</div>
			<!-- fin fila 1 -->
			<!-- fila 2 -->
			<div class="row">
				<div class="col-xs-12">
					<h4>Select Indicators to be forecasted</h4>
				</div>
			</div>
			<!-- fin fila 2 -->
			<!-- fila3 -->
			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Due Date</label>
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
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Due Date</label>
						<div class="col-xs-4">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
						<div class="col-xs-4">
							<span class="icon icon-calendar2"></span>
						</div>
					</div>
					<p>(remember your League begins on xx/xx/xxxx and ends on xx/xx/xxxx)</p>
				</div>
				

				<div class="col-xs-6">
					<div class="form-group">
						<div class="col-xs-3">
							<!-- <img src="http://placehold.it/80x80" width="80"/> -->
							<img src="img/escudo.png" width="80"/>
						</div>
						<div class="col-xs-9">
							<button type="button" class="btn btn-default btn-lg btn-upload">Upload Image</button>
						</div>
					</div>
				</div>
			</div>
			<!-- fin fila3 -->
			<!-- fila4 -->
			<div class="row">
					<div class="col-xs-12 text-center"><a class="btn btn-success">Add</a></div>
			</div>
			<!-- fin fila 4 -->
			<!-- fila5 -->
			<div class="row margin-top">
				<div class="col-xs-12">
					<table class="table table-striped table-bordered ranking">
						<thead>
							<tr>
								<th>Title</th>
								<th>Description</th>
								<th>File</th>
								<th>Due Date</th>
								<th></th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>aaa</td>
								<td>1st assignment</td>
								<td class="text-center">
									<img src="img/pdf.png" width="25"alt="">
								</td>
								<td>11/07/2014</td>
								<td>
									<span class="icon icon-pencil"></span>
									<span class="icon icon-remove"></span>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
			<!-- fin fila5 -->
			</form>
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
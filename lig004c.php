<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Macro Campus</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
			<form class="form-horizontal form" role="form">
			<!-- fila1 -->
			<div class="row">
				<div class="col-xs-12 description">
					<p>Here you can add assignments in addition to the forecasts you have just required to your students.</p>
					<p>Assignments added here will be easily tracked in the league monitor.</p>
				</div>
			</div>
			<!-- fin fila 1 -->
			<!-- fila 2 -->
<!-- 			<div class="row">
				<div class="col-xs-12">
					<h4>Select Indicators to be forecasted</h4>
				</div>
			</div> -->
			<!-- fin fila 2 -->
			<!-- fila3 -->
			<div class="row margin-top">
				<div class="col-xs-8">
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Title</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Brief Description</label>
						<div class="col-xs-8">
							<textarea class="form-control input-sm" type="text" id="inputSmall" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">File</label>
						<div class="col-xs-8 pr5">
							<img src="img/pdf.png" width="60" class="responsive"/>
							<button type="button" class="btn btn-default btn-lg btn-upload">Upload Description</button>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Due Date</label>
						<div class="col-xs-3">
							<div class="input-group">
								<input class="form-control input-sm" type="text" id="inputSmall">
								<span class="input-group-addon"><span class="icon icon-calendar"></span></span>
							</div>
						</div>
					</div>
					<div class="col-xs-8 col-xs-offset-4"><p class="info">(remember your League begins on 10/01/2014 and ends on 10/31/2014)</p></div>
				</div>
				
			</div>
			<div class="row text-center">
				<div class="col-xs-12"><a class="btn btn-success">Add New</a></div>
			</div>
			<!-- fin fila3 -->
			<!-- fila4 -->
			<!-- fin fila 4 -->
			<!-- fila5 -->
			<div class="row margin-top">
				<div class="col-xs-8">
					<table class="table table-striped table-bordered blue-header assignments">
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
								<td class="actions">
									<a class="btn btn-warning icon icon-pencil"></a> <a class="btn btn-danger icon icon-remove"></a>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
<!-- 				<div class="col-xs-4"> -->
					
<!-- 				</div> -->
			</div>
			<div class="row margin-top">
				<div class="col-xs-12 text-center">
					<button type="submit" class="btn btn-primary">< Previous </button>
					<button type="submit" class="btn btn-primary">Next ></button>
				</div>
			</div>
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
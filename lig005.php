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
			<!-- fil2 -->
			<div class="row margin-top">
				<div class="form-group">
					<label class="control-label col-xs-3" for="league_selector">Choose one of your leagues</label>
					<div class="col-xs-6">
						<select class="form-control input-sm" id="league_selector">
							<option>University XYZ  - US Macro Forecasting</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
			</div>
			<!-- fin fila 2 -->
			<!-- fila3 -->
			<div class="row margin-top">
				<div class="col-xs-12">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#">League Setup</a></li>
						<li><a href="#">Grid Monitor</a></li>
						<li><a href="#">Track Activity</a></li>
						<li><a href="#">Ranking</a></li>
						<li><a href="#">Calendar</a></li>
					</ul>
				</div>
			</div>
			<!-- fin fila3 -->
			<!-- fila14 -->
			<div class="row leagues-list">
				<div class="col-xs-12">
					<!-- article start -->
					<div class="row monitor-header">
						<div class="col-xs-6">
							<h2>University XYZ  - US Macro Forecasting</h2>
						</div>
						<div class="col-xs-6 text-right">
							<a class="btn btn-warning icon icon-pencil" title="Edit"></a> <a class="btn btn-danger icon icon-remove" title="Delete"></a>
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
						<div class="col-xs-8">
							<table class="basic-info">
								<tr>
									<th>Status</th>
									<td>About to begin</td>
								</tr>
								<tr>
									<th>Title</th>
									<td>University XYZ  - US Macro Forecasting</td>
								</tr>
								<tr>
									<th>Course</th>
									<td>Econ 401</td>
								</tr>
								<tr>
									<th>Season</th>
									<td>Spring 2013</td>
								</tr>
								<tr>
									<th>Dates</th>
									<td>Begins on 01/04/2014 and end on 31/10/2014 (4 weeks)</td>
								</tr>
								<tr>
									<th>Brief Description</th>
									<td>Part of the Macroeconomics I Course. Students must enroll and participate in the forecasting challenge</td>
								</tr>
								<tr>
									<th>Introductory file</th>
									<td><img src="img/pdf.png" width="50" class="pdf responsive"/> Download</td>
								</tr>
							</table>
						</div>
					</div>
					<!-- article end -->
				</div>
			</div>
			<!-- fin fila4 -->
			<!-- fila 5 -->
			<div class="row">
				<div class="col-xs-6 info-table">
					<h4>Indicators</h4>
					<div class="row info">
						<div class="col-xs-6 text-left">Total indicators in basket: 4</div>
						<div class="col-xs-6 text-right">Releases to be forecasted: 20</div>
					</div>
					<table class="table table-striped table-bordered blue-header">
						<thead>
							<tr>
								<th>Country</th>
								<th>Category</th>
								<th>Indicator</th>
								<th class="text-center"># of Releases in<br/> date range</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>US</td>
								<td>Activity</td>
								<td>GDP</td>
								<td class="text-center">2</td>
							</tr>
							<tr>
								<td>US</td>
								<td>Activity</td>
								<td>ISM</td>
								<td class="text-center">2</td>
							</tr>
						</tbody>
					</table>
					<p class="view-more"><a class="" href="#" class="view-more">View on the Calendar</a></p>
				</div>
				<div class="col-xs-6 info-table">
					<h4>Assignments</h4>
					<div class="row info">
						<div class="col-xs-6 text-left">
							Total Assignments:2
						</div>
						<div class="col-xs-6 text-right"></div>
					</div>
					<table class="table table-striped table-bordered blue-header">
						<thead>
							<tr>
								<th>Title</th>
								<th>Description</th>
								<th class="text-center">File</th>
								<th>Due Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Write like a pro</td>
								<td>1st assignment</td>
								<td class="text-center"><img src="img/pdf.png" width="20" class="responsive"/></td>
								<td>11/07/2014</td>
							</tr>
							<tr>
								<td>Explain your model</td>
								<td>Tell us how did …</td>
								<td class="text-center"><img src="img/pdf.png" width="20" class="responsive"/></td>
								<td>31/07/2014</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-xs-6 info-table">
					<h4>Students</h4>
					<!-- <div class="row info">
						<div class="col-xs-6 text-left">Total indicators in basket: 4</div>
						<div class="col-xs-6 text-right">Releases to be forecasted: 20</div>
					</div> -->
					<table class="table table-striped table-bordered blue-header">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th class="text-center">Enrolled</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>John Smith</td>
								<td>johnsmith@University XYZ .com</td>
								<td class="text-center"><span class="icon icon-close"></span></td>
							</tr>
							<tr>
								<td>Ana Garcia</td>
								<td>anagarcia@yahoo.com</td>
								<td class="text-center"><span class="icon icon-close"></span></td>
							</tr>
							<tr>
								<td>Ken Mattel</td>
								<td>kenmattel@webmail.com</td>
								<td class="text-center"><span class="icon icon-checkmark"></span></td>
							</tr>
							<tr>
								<td>Michael Spencer</td>
								<td>michaelspencer@University XYZ .com</td>
								<td class="text-center"><span class="icon icon-checkmark"></span></td>
							</tr>
						</tbody>
					</table>
					<p class="extra">Students invited: 24<br/>Enrolled: 21</p>
				</div>
				<div class="col-xs-6 info-table"></div>
			</div>
			<!-- fin fila5 -->

		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
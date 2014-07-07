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
			<div class="logos">
				<div class="row">
					<div class="col-xs-6">
						<p>&nbsp;<br/><img src="img/liga02.jpg" width="90"/></p>
					</div>
					<div class="col-xs-6">
						<p>Sponsored by:<br/><img src="img/sponsor01.jpg" width="90"/></p>
					</div>
				</div>
			</div>
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
						<li><a href="#">League Setup</a></li>
						<li class="active"><a href="#">Grid Monitor</a></li>
						<li><a href="#">Track Activity</a></li>
						<li><a href="#">Ranking</a></li>
						<li><a href="#">Calendar</a></li>
					</ul>
				</div>
			</div>
			<!-- fin fila3 -->
			<div class="row legend">
				<div class="col-xs-12">
					<strong>Legend:</strong>
					<ul class="legend-items">
						<li class="legend-item"><span class="icon icon-checkmark green"></span> Completed</li>
						<li class="legend-item"><span class="icon icon-close red"></span> Missed</li>
						<li class="legend-item"><span class="icon icon-busy"></span> Pending</li>
						<li class="legend-item"><span class="icon icon-pencil green"></span> Graded</li>
						<li class="legend-item"><span class="icon icon-pencil red"></span> Not Graded</li>
					</ul>
				</div>
			</div>
			<div class="row grid">
				<div class="col-xs-2 names">
					<div class="header-cell">
						<div>Task</div>
						<div>Due Date</div>
					</div>
					<div class="name-cell">John Smith <img src="img/cara01.jpg" width="25"/></div>
					<div class="name-cell">Ana Garcia <img src="img/cara04.jpg" width="25"/></div>
					<div class="name-cell">Ken Mattel <img src="img/cara02.jpg" width="25"/></div>
					<div class="name-cell">Michael Spencer <img src="img/cara03.jpg" width="25"/></div>
					<div class="name-cell">Wang Ming <img src="img/cara05.jpg" width="25"/></div>
					<div class="name-cell">Rajam Gupta <img src="img/cara01.jpg" width="25"/></div>
					<div class="name-cell">Ivar Stafuza <img src="img/cara02.jpg" width="25"/></div>
				</div>
				<div class="col-xs-10 grid-scroll">
					<div class="grid-container">
						<div class="column">
							<div class="header-cell">
								<div>ISM Apr'14</div>
								<div>05-may-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-close red"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
						</div><div class="column">
							<div class="header-cell">
								<div>CPI Apr'14</div>
								<div>12-may-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-close red"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
						</div><div class="column">
							<div class="header-cell">
								<div>Unemployment Rate Apr'14</div>
								<div>18-may-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
						</div><div class="column assignment">
							<div class="header-cell">
								<div>Assig #1 Write like a pro</div>
								<div>20-may-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil red"></span></div>
						</div><div class="column">
							<div class="header-cell">
								<div>GDP Q1 2014</div>
								<div>31-may-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-close red"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
						</div><div class="column">
							<div class="header-cell">
								<div>ISM May'14</div>
								<div>05-jun-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-close red"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
						</div><div class="column">
							<div class="header-cell">
								<div>CPI May'14</div>
								<div>12-jun-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
						</div><div class="column assignment">
							<div class="header-cell">
								<div>Assig #2 Tell us how</div>
								<div>31-may-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil red"></span></div>
						</div><div class="column">
							<div class="header-cell">
								<div>ISM Apr'14</div>
								<div>05-may-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-close red"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
						</div><div class="column">
							<div class="header-cell">
								<div>CPI Apr'14</div>
								<div>12-may-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-close red"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
						</div><div class="column">
							<div class="header-cell">
								<div>Unemployment Rate Apr'14</div>
								<div>18-may-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
							<div class="grid-cell"><span class="icon icon-checkmark green"></span></div>
						</div><div class="column assignment">
							<div class="header-cell">
								<div>Assig #3 Write like a pro</div>
								<div>28-may-14</div>
							</div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil green"></span></div>
							<div class="grid-cell"><span class="icon icon-file-pdf"></span><span class="icon icon-pencil red"></span></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
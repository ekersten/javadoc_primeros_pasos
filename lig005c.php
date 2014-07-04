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
						<li><a href="#">Grid Monitor</a></li>
						<li class="active"><a href="#">Track Activity</a></li>
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
						<li class="legend-item"><span class="icon icon-pencil red"></span> Not Graded</li>
					</ul>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-xs-12">
					<form action="" class="form-inline activity-filter">
						<label for="tabulate_by">Tabulate by:</label>
						<select name="tabulate_by" id="tabulate_by" class="form-control input-sm">
							<option value="">First students, then tasks</option>
							<option value="">Task</option>
						</select>
						<label for="student">Student:</label>
						<select name="student" id="student" class="form-control input-sm">
							<option value="">All</option>
							<option value="">Task</option>
						</select>
						<label for="task">Task:</label>
						<select name="task" id="task" class="form-control input-sm">
							<option value="">All</option>
						</select>
						<label for="grading">Grading:</label>
						<select name="grading" id="grading" class="form-control input-sm">
							<option value=""></option>
						</select>
					</form>
				</div>
			</div>

			<div class="row margin-top">
				<div class="col-xs-12">
					<table class="table activity-table blue-header">
						<thead>
							<tr>
								<th>Due Date</th>
								<th>Country</th>
								<th>Task</th>
								<th>Completed</th>
								<th>Actual Value</th>
								<th>Fcst</th>
								<th>Score</th>
								<th>Ranking</th>
								<th>Grade</th>
								<th class="observations">Observations</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="10" class="student"><img src="img/cara01.jpg" width="25"/> John Smith (johnsmith@University XYZ .edu). Total Score: 72 . League Ranking: 3</td>
							</tr>
							<tr>
								<td>05/05/2014</td>
								<td>US</td>
								<td>ISM Apr'14</td>
								<td><span class="icon icon-checkmark green"></span></td>
								<td>44.0</td>
								<td>45.0</td>
								<td>15</td>
								<td>1</td>
								<td></td>
								<td class="observations"></td>
							</tr>
							<tr>
								<td>12/05/2014</td>
								<td>US</td>
								<td>CPI Apr'14</td>
								<td><span class="icon icon-checkmark green"></span></td>
								<td>1.7%</td>
								<td>1.8%</td>
								<td>17</td>
								<td>1</td>
								<td></td>
								<td class="observations"></td>
							</tr>
							<tr>
								<td>05/05/2014</td>
								<td>US</td>
								<td>Unemployment Rate Apr'14</td>
								<td><span class="icon icon-checkmark green"></span></td>
								<td>6.7%</td>
								<td>6.9%</td>
								<td>8</td>
								<td>3</td>
								<td></td>
								<td class="observations"></td>
							</tr>
							<tr class="assignment">
								<td>20/05/2014</td>
								<td></td>
								<td>Assig #1 - Write like a Pro</td>
								<td><span class="icon icon-file-pdf"></span></td>
								<td></td>
								<td></td>
								<td></td>
								<td>1</td>
								<td>B</td>
								<td class="observations">Good job. Next time try to improve</td>
							</tr>
							<!-- student -->
							<tr>
								<td colspan="10" class="student"><img src="img/cara04.jpg" width="25"/> Ana Garcia (anagarcia@University XYZ .edu). Total Score: 72 . League Ranking: 3</td>
							</tr>
							<tr>
								<td>05/05/2014</td>
								<td>US</td>
								<td>ISM Apr'14</td>
								<td><span class="icon icon-busy"></span></td>
								<td>44.0</td>
								<td>45.0</td>
								<td>15</td>
								<td>1</td>
								<td></td>
								<td class="observations"></td>
							</tr>
							<tr>
								<td>12/05/2014</td>
								<td>US</td>
								<td>CPI Apr'14</td>
								<td><span class="icon icon-checkmark green"></span></td>
								<td>1.7%</td>
								<td>1.8%</td>
								<td>17</td>
								<td>1</td>
								<td></td>
								<td class="observations"></td>
							</tr>
							<tr>
								<td>05/05/2014</td>
								<td>US</td>
								<td>Unemployment Rate Apr'14</td>
								<td><span class="icon icon-checkmark green"></span></td>
								<td>6.7%</td>
								<td>6.9%</td>
								<td>8</td>
								<td>3</td>
								<td></td>
								<td class="observations"></td>
							</tr>
							<tr class="assignment">
								<td>20/05/2014</td>
								<td></td>
								<td>Assig #1 - Write like a Pro</td>
								<td><span class="icon icon-file-pdf"></span></td>
								<td></td>
								<td></td>
								<td></td>
								<td>1</td>
								<td>B</td>
								<td class="observations">Good job. Next time try to improve</td>
							</tr>
						</tbody>
					</table>
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
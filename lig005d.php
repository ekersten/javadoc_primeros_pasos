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
				<div class="col-xs-12">
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
			</div>
			<!-- fin fila 2 -->
			<!-- fila3 -->
			<div class="row margin-top">
				<div class="col-xs-12">
					<ul class="nav nav-tabs">
						<li><a href="#">League Setup</a></li>
						<li><a href="#">Grid Monitor</a></li>
						<li><a href="#">Track Activity</a></li>
						<li class="active"><a href="#">Ranking</a></li>
						<li><a href="#">Calendar</a></li>
					</ul>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-xs-4">
					<table class="table table-striped table-condensed blue-header">
						<thead>
							<tr>
								<th></th>
								<th>Student</th>
								<th class="text-center">Score</th>
								<th class="text-center">Ranking</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><img src="img/cara01.jpg" width="25"/></td>
								<td>John Smith</td>
								<td class="text-center">56</td>
								<td class="text-center">1<sup>st</sup></td>
							</tr>
							<tr>
								<td><img src="img/cara04.jpg" width="25"/></td>
								<td>Ana Garcia</td>
								<td class="text-center">54</td>
								<td class="text-center">2<sup>nd</sup></td>
							</tr>
							<tr>
								<td><img src="img/cara02.jpg" width="25"/></td>
								<td>Ken Mattel</td>
								<td class="text-center">49</td>
								<td class="text-center">3<sup>rd</sup></td>
							</tr>
							<tr>
								<td><img src="img/cara03.jpg" width="25"/></td>
								<td>Michael Spencer</td>
								<td class="text-center">40</td>
								<td class="text-center">4<sup>th</sup></td>
							</tr>
							<tr>
								<td><img src="img/cara05.jpg" width="25"/></td>
								<td>Wang Ming</td>
								<td class="text-center">39</td>
								<td class="text-center">5<sup>th</sup></td>
							</tr>
							<tr>
								<td><img src="img/cara01.jpg" width="25"/></td>
								<td>Rajam Gupta</td>
								<td class="text-center">35</td>
								<td class="text-center">6<sup>th</sup></td>
							</tr>
							<tr>
								<td><img src="img/cara02.jpg" width="25"/></td>
								<td>Ivar Stafuza</td>
								<td class="text-center">32</td>
								<td class="text-center">7<sup>th</sup></td>
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
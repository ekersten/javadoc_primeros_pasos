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
				<div class="col-xs-12">
					<div class="form-group">
						<label class="control-label col-xs-3" for="league_selector">Choose one of your leagues</label>
						<div class="col-xs-6">
							<select class="form-control input-sm" id="league_selector">
								<option>Harvard - US Macro Forecasting</option>
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
						<li><a href="#">Ranking</a></li>
						<li class="active"><a href="#">Calendar</a></li>
					</ul>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-xs-12">
					<table class="calendar">
						<thead>
							<tr>
								<th class="sunday">Sunday</th>
								<th class="monday">Monday</th>
								<th class="tuesday">Tuesday</th>
								<th class="wednesday">Wednesday</th>
								<th class="thursday">Thursday</th>
								<th class="friday">Friday</th>
								<th class="saturday">Saturday</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="sunday"><span class="number"></span></td>
								<td class="monday"><span class="number"></span></td>
								<td class="tuesday"><span class="number"></span></td>
								<td class="wednesday"><span class="number"></span></td>
								<td class="thursday"><span class="number">1</span></td>
								<td class="friday"><span class="number">2</span></td>
								<td class="saturday"><span class="number">3</span></td>
							</tr>
							<tr>
								<td class="sunday"><span class="number">4</span></td>
								<td class="monday indicator"><span class="number">5</span>ISM</td>
								<td class="tuesday"><span class="number">6</span></td>
								<td class="wednesday indicator"><span class="number">7</span>CPI</td>
								<td class="thursday"><span class="number">8</span></td>
								<td class="friday"><span class="number">9</span></td>
								<td class="saturday"><span class="number">10</span></td>
							</tr>
							<tr>
								<td class="sunday"><span class="number">11</span></td>
								<td class="monday"><span class="number">12</span></td>
								<td class="tuesday"><span class="number">13</span></td>
								<td class="wednesday"><span class="number">14</span></td>
								<td class="thursday indicator"><span class="number">15</span>Unemployment Rate</td>
								<td class="friday"><span class="number">16</span></td>
								<td class="saturday"><span class="number">17</span></td>
							</tr>
							<tr>
								<td class="sunday"><span class="number">18</span></td>
								<td class="monday"><span class="number">19</span></td>
								<td class="tuesday"><span class="number">20</span></td>
								<td class="wednesday"><span class="number">21</span></td>
								<td class="thursday"><span class="number">22</span></td>
								<td class="friday"><span class="number">23</span></td>
								<td class="saturday"><span class="number">24</span></td>
							</tr>
							<tr>
								<td class="sunday"><span class="number">25</span></td>
								<td class="monday"><span class="number">26</span></td>
								<td class="tuesday"><span class="number">27</span></td>
								<td class="wednesday"><span class="number">28</span></td>
								<td class="thursday"><span class="number">29</span></td>
								<td class="friday"><span class="number">30</span></td>
								<td class="saturday assignment"><span class="number">31</span>Assignment #1<br/><strong>Write Like a Pro</strong></td>
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
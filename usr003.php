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
		<section class="container-fluid user-registration">
			<div class="row">
				<div class="col-xs-6">
					<h1>Edit Profile</h1>
				</div>
				<div class="col-xs-6 margin-top text-right">
					<button type="submit" class="btn btn-success btn-lg">Save Change</button>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
						<li class="active"><a href="#home" data-toggle="tab">Basic Data</a></li>
						<li><a href="#privancy" data-toggle="tab">Privancy</a></li>
						<li><a href="#indicator" data-toggle="tab">Indicator</a></li>
						<li><a href="#alerts" data-toggle="tab">Alerts</a></li>
						<li><a href="#leagues" data-toggle="tab">Leagues</a></li>

					
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="home">
						<div class="row">
							<div class="col-xs-12">
								<h3>Personal Information</h3>
							</div>
						</div>
						<form class="form-horizontal user-registration-form" role="form">
						<!-- fila1 -->
						<div class="row">

						<div class="col-xs-4">
						<div class="form-group">
						<label class="control-label col-xs-3" for="inputSmall">Fisrt name</label>
						<div class="col-xs-9">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
						</div>
						<div class="form-group">
						<label class="control-label col-xs-3" for="inputSmall">Last name</label>
						<div class="col-xs-9">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
						</div>
						<div class="form-group">
						<label class="control-label col-xs-3" for="inputSmall">Username</label>
						<div class="col-xs-9">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
						</div>
						<div class="form-group">
						<label class="control-label col-xs-3" for="inputSmall">Email</label>
						<div class="col-xs-9">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
						</div>
						</div>
						<div class="col-xs-4">
						<div class="form-group">
						<label for="select" class="control-label col-xs-4 ">Date of birth</label>
							<div class="col-xs-8">
								<select class="form-control input-sm day-select" id="select">
									<option>30</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
								
								
								<select class="form-control input-sm month-select" id="select">
									<option>November</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
								
								
								<select class="form-control input-sm year-select" id="select">
									<option>1983</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>

						<div class="form-group">
						<label for="select" class="col-xs-4 control-label">Country</label>
						<div class="col-xs-8">
							<select class="form-control input-sm" id="select">
								<option>United States</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						</div>
						<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">State&nbsp;/&nbsp;Province</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
						</div>
						<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">City</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
						</div>

						</div>
						<div class="col-xs-4">
						<div class="form-group">
						<div class="col-xs-3">
							<!-- <img src="http://placehold.it/80x80" width="80"/> -->
							<img src="img/img_user.jpg" width="80"/>
						</div>
						<div class="col-xs-9">
							<button type="button" class="btn btn-default btn-lg btn-upload">Upload Image</button>
						</div>
						</div>

						<div class="form-group">
						<label class="control-label col-xs-3" for="inputSmall">Studying at</label>
						<div class="col-xs-9">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
						</div>
						<div class="form-group">
						<label class="control-label col-xs-3" for="inputSmall">Working at</label>
						<div class="col-xs-9">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
						</div>
						</div>
						</div>
						<!-- fin fila1 -->
						<hr/>
						<!-- fila2 -->
						<!-- fin fila2 -->
					
						<!-- fila3 -->
						<!-- fin fila3 -->
						<!-- fila 4 -->
						<!-- fin fila4 -->
						</form>


						</div>
					<div class="tab-pane fade" id="privancy">
					<div class="row">
							<div class="col-xs-12">
								<h3>Privacy Options</h3>
							</div>
						</div>
						<form class="form-horizontal user-registration-form" role="form">
						<!-- fila1 -->
						<!-- fin fila1 -->
						<!-- fila2 -->
						<div class="row">
						<div class="col-xs-4">
						<div class="checkbox">
						<label>
							<input type="checkbox">Do you want your profile to be visible to the public?
						</label>
						</div>

						<div class="checkbox">
						<label>
							<input type="checkbox">Do you want to be ranked in the General rankings?
						</label>
						</div>
						</div>
						<div class="col-xs-4 social-icons">
						<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall"><span class="icon icon-twitter"></span></label>

						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall" placeholder="Twitter Username">
						</div>
						</div>
						<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall"><span class="icon icon-linkedin"></span></label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall" placeholder="LinkedIn Username">
						</div>
						</div>

						</div>
						<div class="col-xs-4"></div>
						</div>
						<!-- fin fila2 -->
						<hr/>
						<!-- fila3 -->
						<!-- fin fila3 -->
						<!-- fila 4 -->
						<!-- fin fila4 -->
						</form>
					</div>
						<div class="tab-pane fade" id="indicator">
						<div class="row">	
							<div class="col-xs-12">
									<h3>Indicator</h3>
								</div>
						</div>		
						<div class="row">
							<div class="col-xs-12">
								<p>Select the indicators you are interested on. This will help you to avoid missing a data release.<br/>We recommend selecting and making forecasts on all the indicators inside a caetgory to be fairly ranked.</p>
							</div>	
						</div>	
						<div class="row margin-top">
							<div class="col-xs-4">
								<div class="panel panel-primary no-padding">
								<div class="panel-heading">
									<h3 class="panel-title">Available Indicators</h3>
								</div>
								<div class="panel-body">
									<div class="list-group">
										<a class="list-group-item first-level"><span class="icon-caret-down"></span>US</a>
										<a class="list-group-item second-level"><span class="icon-caret-down"></span>Activity</a>
										<a class="list-group-item third-level"><span></span>ISM</a>
										<a class="list-group-item second-level"><span class="icon-caret-right"></span>Construction</a>
										<a class="list-group-item first-level"><span class="icon-caret-right"></span>Japan</a>
										<a class="list-group-item first-level"><span class="icon-caret-right"></span>China</a>
									</div>
								</div>
								</div>
							</div>
							<div class="col-xs-2 col-xs-offset-1 text-center">
								<p><button class="btn btn-default btn-block">&lt;&lt;</button></p>
								<p><button class="btn btn-default btn-block">&gt;&gt;</button></p>
							</div>
							<div class="col-xs-4 col-xs-offset-1">
								<div class="panel panel-primary no-padding">
								<div class="panel-heading">
									<h3 class="panel-title">My Items</h3>
								</div>
								<div class="panel-body">
									<div class="list-group">
										<a class="list-group-item">None</a>
										<a class="list-group-item">&nbsp;</a>
										<a class="list-group-item">&nbsp;</a>
										<a class="list-group-item">&nbsp;</a>
										<a class="list-group-item">&nbsp;</a>
										<a class="list-group-item">&nbsp;</a>
									</div>
								</div>
								</div>
							</div>
						</div>	
							

					</div>
					<div class="tab-pane fade" id="alerts">
					<div class="row">
							<div class="col-xs-12">
								<h3>Alerts</h3>
							</div>
						</div>
						<form class="form-horizontal user-registration-form" role="form">
						<!-- fila1 -->
						<!-- fin fila1 -->
						<!-- fila2 -->
						<!-- fin fila2 -->
						<!-- fila3 -->
						<div class="row">
						<div class="col-xs-4">
						<h4>Indicators</h4>
						<div class="checkbox">
						<label>
							<input type="checkbox">Alert me the day before the data release on my selected indicators.
						</label>
						</div>
						<div class="checkbox">
						<label>
							<input type="checkbox">Alert me one week before the data release on my selected indicators
						</label>
						</div>
						<div class="checkbox">
						<label>
							<input type="checkbox">Send me the results after the release
						</label>
						</div>
						</div>
						<div class="col-xs-4">
						<h4>Commentaries</h4>
						<div class="checkbox">
						<label>
							<input type="checkbox">Tell me when someone reply to my commentaries
						</label>
						</div>
						<h4 class="margin-top">Summary Alert</h4>
						<div class="checkbox">
						<label>
							<input type="checkbox">Send me my weekly summary
						</label>
						</div>

						</div>
						<div class="col-xs-4">
						<h4>Leagues Alert</h4>
						<div class="checkbox">
						<label>
							<input type="checkbox">Tell me when a new league is available for subscription
						</label>
						</div>
						</div>
						</div>
						<!-- fin fila3 -->
						<!-- fila 4 -->
						<!-- fin fila4 -->
						</form>
					</div>

					<div class="tab-pane fade" id="leagues">
						<div class="row">	
							<div class="col-xs-12">
									<h3>Leagues</h3>
							</div>
						</div>
						<div class="row leagues">
				<div class="col-xs-6 league">
					<div class="row">
						<div class="col-xs-2">
							<img src="img/liga01.jpg" width="80" alt="">
						</div>
						<div class="col-xs-7">
							<h5>AEA Macro Challenge </h5>
							<p>American Economic Association<br/>
							From 1/8/2013 to 15/11/2013<br/>
							Enrolled participants: 24<br/>
							Prize: US$ 1000 on grants
						</p>
						</div>
						<div class="col-xs-3">
							<button type="submit" class="btn btn-default">Suscribe</button>
						</div>
					</div>
					
				</div>
				<div class="col-xs-6 league">
					<div class="row">
						<div class="col-xs-2">
							<img src="img/liga02.jpg" width="80" alt="">
						</div>
						<div class="col-xs-7">
							<h5>University XYZ  - Course Econ 401 - Macro Forecasting</h5>
							<p>University XYZ  University<br/>
							From 1/8/2013 to 15/11/2013<br/>
							Professor John Smith</p>
						</div>
						<div class="col-xs-3">
							<button type="submit" class="btn btn-success">Suscribed</button>
						</div>
					</div>
					
				</div>
			</div>
			<hr>
			<div class="row leagues">
				<div class="col-xs-6 league">
					<div class="row">
						<div class="col-xs-2">
							<img src="img/liga03.jpg" width="80" alt="">
						</div>
						<div class="col-xs-7">
							<h5>Forecast Brasil - Fundacao Getulio Vargas</h5>
							<p>Sponsored by University XYZ  University - School of Economics<br/>
							From 01/04/2014 to 31/10/2014<br/>
							Prize: 50 credits</p>
						</div>
						<div class="col-xs-3">
							<button type="submit" class="btn btn-default">Suscribe</button>
						</div>
					</div>
					
				</div>
				<div class="col-xs-6 league">
					<div class="row">
						<div class="col-xs-2">
							<img src="img/liga04.jpg" width="80" alt="">
						</div>
						<div class="col-xs-7">
							<h5>NYU - Econometrics 110</h5>
							<p>Sponsored by University XYZ  University - School of Economics<br/>
							From 01/04/2014 to 31/10/2014<br/>
							Prize: 50 credits</p>
						</div>
						<div class="col-xs-3">
							<button type="submit" class="btn btn-default">Suscribed</button>
						</div>
					</div>
					
				</div>
			</div>
			<hr>
			<div class="row leagues">
				<div class="col-xs-6 league">
					<div class="row">
						<div class="col-xs-2">
							<img src="img/liga05.jpg" width="80" alt="">
						</div>
						<div class="col-xs-7">
							<h5>Talent Scouting- Goldman Sachs</h5>
							<p>Sponsored by University XYZ  University - School of Economics<br/>
							From 01/04/2014 to 31/10/2014<br/>
							Prize: 50 credits</p>
						</div>
						<div class="col-xs-3">
							<button type="submit" class="btn btn-default">Suscribe</button>
						</div>
					</div>
					
				</div>
				<div class="col-xs-6 league">
					<div class="row">
						<div class="col-xs-2">
							<img src="img/liga06.jpg" width="80" alt="">
						</div>
						<div class="col-xs-7">
							<h5>Global Institution- Macro Challenge</h5>
							<p>Sponsored by University XYZ  University - School of Economics<br/>
							From 01/04/2014 to 31/10/2014<br/>
							Prize: 50 credits</p>
						</div>
						<div class="col-xs-3">
							<button type="submit" class="btn btn-default">Suscribed</button>
						</div>
					</div>
					
				</div>
										
					</div>
					</div>
				</div>
			</div>
									
			<!-- fila 4 -->
			
			<!-- fin fila4 -->
		
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
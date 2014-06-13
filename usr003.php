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
					<h1>Indicator</h1>
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
					<h1>LEAGUES</h1>
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
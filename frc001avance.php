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
				<div class="col-xs-12">
					<h1>Search Forecasters</h1>
				</div>
			</div>
			
			<form class="form-horizontal user-registration-form" role="form">
			<!-- fila1 -->
			
			<div class="row">
				<div class="col-xs-4">
					<h4>Personal Information</h4>
					<div class="form-group">
						<label class="control-label col-xs-3" for="inputSmall">Name</label>
						<div class="col-xs-9">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-3" for="inputSmall">Lives in</label>
						<div class="col-xs-9">
							<select class="form-control input-sm" id="select">
									<option>Any</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-3" for="inputSmall">Status</label>
						<div class="col-xs-9">
							<select class="form-control input-sm" id="select">
									<option>Any</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<h4>Forescasting Activity</h4>
					
					<div class="form-group">
						<label for="select" class="control-label col-xs-4 ">Country&nbsp;/&nbsp;Region</label>
							<div class="col-xs-8">
								<select class="form-control input-sm" id="select">
									<option>Any</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
					</div>
				
					<div class="form-group">
						<label for="select" class="col-xs-4 control-label">Status</label>
						<div class="col-xs-8">
							<select class="form-control input-sm" id="select">
								<option>Any</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Ranks Above</label>
						<div class="col-xs-8">
							<input class="form-control input-sm" type="text" id="inputSmall">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputSmall">Years Forecasting</label>
						<div class="col-xs-8">
							<select class="form-control input-sm" id="select">
								<option>Any</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>

				</div>
				<div class="col-xs-4">
					<h4>Comunity</h4>
					<div class="form-group">
						<label class="control-label col-xs-5" for="inputSmall">Participates in Leage</label>
						<div class="col-xs-7">
							<select class="form-control input-sm" id="select">
								<option>Any</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-xs-5" for="inputSmall">Writes Articles</label>
						<div class="col-xs-7">
							<div class="radio-inline">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							    Si
							  </label>
							</div>
							<div class="radio-inline">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							    No
							  </label>
							</div>
						</div>
					</div>
					<div class="row"> 
						<div class="col-xs-6"><button type="button" class="btn btn-link">Back to simple search</button></div>
						<div class="col-xs-6"><button type="button" class="btn btn-primary btn-sm">Search</button></div>
					</div>
				</div>
			</div>
			<!-- fin fila1 -->
			<!-- fila2 -->
			<div class="row margin-top">
				<div class="col-xs-12">
					<table class="table table-striped table-bordered ranking">
						<thead>
							<tr>
								<th>Nickname</th>
								<th>Full Name</th>
								<th>Country</th>
								<th>Status</th>
								<th>Frecasts</th>
								<th>Articles</th>
								<th>Leagues</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Hkisluk</td>
								<td>Hernán Kisluk</td>
								<td>Argentina</td>
								<td>Portfolio Manager Techint</td>
								<td>32</td>
								<td>15</td>
								<td>
									<img src="http://placehold.it/20x20" width="25"alt="">
									<img src="http://placehold.it/20x20" width="25"alt="">
								</td>
							</tr>
							<tr>
								<td>fursino</td>
								<td>Flavia Ursino</td>
								<td>Italia</td>
								<td>Economy Analyst at BuonGiorno</td>
								<td>15</td>
								<td>2</td>
								<td><img src="http://placehold.it/25x25" width="25"alt=""> <img src="http://placehold.it/20x20" width="25"alt=""></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- fin fila2 -->
			<!-- fila3 -->
			<!-- fin fila3 -->
			<!-- fila 4 -->
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
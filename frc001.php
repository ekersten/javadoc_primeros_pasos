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
		<section class="container-fluid forecasters">
			<div class="row">
				<div class="col-xs-12">
					<h1>Search Forecasters</h1>
				</div>
			</div>
			<!-- fila1 -->
			<div class="row">
				<div class="col-xs-12">
					<form class="form-inline basic-search-forescasters" role="form">
						<div class="form-group">
							<input class="form-control input-sm" type="text"/>
							<button type="button" class="btn btn-primary btn-sm">Search</button>
							<a class="view-more">Advanced Search</a>
						</div>
					</form>
					
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
								<th class="text-center">Forecasts</th>
								<th class="text-center">Articles</th>
								<th class="text-center">Leagues</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Hkisluk</td>
								<td>Hernán Kisluk</td>
								<td>Argentina</td>
								<td>Portfolio Manager Techint</td>
								<td class="text-center">32</td>
								<td class="text-center">15</td>
								<td class="text-center">
									<img src="img/liga01.jpg" width="25"alt="">
									<img src="img/liga02.jpg" width="25"alt="">
								</td>
							</tr>
							<tr>
								<td>fursino</td>
								<td>Flavia Ursino</td>
								<td>Italia</td>
								<td>Economy Analyst at BuonGiorno</td>
								<td class="text-center">15</td>
								<td class="text-center">2</td>
								<td class="text-center">
									<img src="img/liga03.jpg" width="25"alt="">
									<img src="img/liga04.jpg" width="25"alt="">
								</td>
							</tr>
							<tr>
								<td>eric united</td>
								<td>Eric Kert</td>
								<td>Germany</td>
								<td>Economy Analyst </td>
								<td class="text-center">15</td>
								<td class="text-center">2</td>
								<td class="text-center">
									<img src="img/liga03.jpg" width="25"alt="">
									<img src="img/liga04.jpg" width="25"alt="">
									<img src="img/liga01.jpg" width="25"alt="">
									<img src="img/liga05.jpg" width="25"alt="">
								</td>
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
	<script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
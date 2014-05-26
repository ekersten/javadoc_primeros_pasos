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
		<section class="container-fluid indicator-details">
			<div class="row">
				<div class="col-xs-6">
					<ol class="breadcrumb">
						<li><a href="#">Indicators</a></li>
						<li class="active">ISM Manufacturing <span class="about">(<a href="#">About this indicator</a>)</span></li>
					</ol>
				</div>
				<div class="col-xs-6 text-right">
					<a href="#" class="btn btn-default">&lt; Back to indicators</a>
				</div>
			</div>
			<div class="row info">
				<div class="col-xs-6">
					<div class="row">
						<div class="col-xs-3">
							<div class="well well-sm period">
								<h5>Period</h5>
								<div class="big">JAN<br/>2014</div>
								<div class="view-all"><a href="#">View all</a></div>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="well well-sm release">
								<h5>Release Date</h5>
								<div class="big">16/01/14<br/>08:30</div>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="well well-sm current">
								<h5>Current Value</h5>
								<div class="big">52.1</div>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="well well-sm ranking">
								<h5>Ranking</h5>
								<ul>
									<li>1<sup>st</sup> John</li>
									<li>2<sup>nd</sup> Brian</li>
									<li>3<sup>rd</sup> Ana</li>
								</ul>
								<div class="view-all"><a href="#">View all</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="well well-sm">
						<div class="row">
							<div class="col-xs-5 text-center mean">
								<h5>Mean</h5>
								<div class="big">55.3</div>
							</div>
							<div class="col-xs-7 text-center yours">
								<h5>Yours</h5>
								<a href="" class="btn btn-default btn-lg">View Prev.</a><a href="" class="btn btn-default btn-lg">Make Yours</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row graphics">
				<div class="col-xs-6">
					<h4>Mean Evolution</h4>
					<img src="http://placehold.it/550x300"/>
				</div>
				<div class="col-xs-6">
					<h4>Distribution for this forecast</h4>
					<img src="http://placehold.it/550x300"/>
				</div>
				<div class="col-xs-6">
					<h4>Surprise</h4>
					<img src="http://placehold.it/550x300"/>
				</div>
				<div class="col-xs-6">
					<h4>ISM - Actual vs. Forecast</h4>
					<img src="http://placehold.it/550x300"/>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
				<h4>Latest Articles</h4>
			</div>
			</div>
			<div class="row articles">
				<div class="col-xs-4">
					<img src="http://placehold.it/50x50"/>
					<h5>ISM surpised on the upside</h5>
					<p>by Hernan Kisluk</p>
				</div>
				<div class="col-xs-2">
					<span class="icon icon-table"> </span>
					<h6>Jun-14 3:55</h6>
				</div>
				<div class="col-xs-2">
					<span class="icon icon-eye"> </span>
					<h6>52</h6>
				</div>
				<div class="col-xs-1">
					<span class="icon icon-bubble"> </span>
					<h6>5</h6>
				</div>
				<div class="col-xs-2">
					<span class="icon icon-tag"> </span>
					<h6>US Activity</h6>
				</div>
				
			</div>
			<hr>
			<div class="row data">
				<h4>Data description</h4>
				<p>An index based on surveys of more than 300 manufacturing firms by the Institute of Supply Management. The ISM Manufacturing Index monitors employment, production inventories, new orders and supplier deliveries. A composite diffusion index is created that monitors conditions in national manufacturing based on the data from these surveys.  </p>
			</div>
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
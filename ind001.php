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
		<section class="container-fluid indicators-list">
			<div class="row">
				<div class="col-xs-12">
					<h1>Indicators</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<div class="list-group">
						<a class="list-group-item active">US<span class="badge">14</span></a>
						<a class="list-group-item">Eurozone<span class="badge">2</span></a>
						<a class="list-group-item">Germany<span class="badge">1</span></a>
						<a class="list-group-item">France<span class="badge">1</span></a>
						<a class="list-group-item">Japan<span class="badge">1</span></a>
						<a class="list-group-item">China<span class="badge">1</span></a>
					</div>
				</div>
				<div class="col-xs-3">
					<h3>Activity</h3>
					<hr/>
					<div class="list-group indicators">
						<a href="#" class="list-group-item">Industrial Production MoM</a>
						<a href="#" class="list-group-item">GDP Annualized QoQ</a>
						<a href="#" class="list-group-item">Retail Sales Advance MoM</a>
						<a href="#" class="list-group-item">Durable Goods Orders</a>
						<a href="#" class="list-group-item">Retail Sales Ex Auto MoM</a>
					</div>
				</div> <!-- cierra col -->
				<div class="col-xs-3">
					<h3>Consumer</h3>
					<hr/>
					<div class="list-group indicators">
						<a href="#" class="list-group-item">Personal Spending</a>
						<a href="#" class="list-group-item">Consumer Confidence Index</a>
						<a href="#" class="list-group-item">Personal Income</a>
						<a href="#" class="list-group-item">Univ. of Michigan Confidence</a>
						<a href="#" class="list-group-item">Consumer Credit</a>
					</div>
				</div> <!-- cierra col -->
				<div class="col-xs-3">
					<h3>Federal Reserve</h3>
					<hr/>
					<div class="list-group indicators">
						<a href="#" class="list-group-item">Philadelphia Fed Business Outlook</a>
						<a href="#" class="list-group-item">Empire Manufacturing</a>
						<a href="#" class="list-group-item">Richmond Fed Manufact. Index</a>
						<a href="#" class="list-group-item">FOMC Rate Decision</a>
					</div>
				</div> <!-- cierra col -->
			</div>
			<div class="row">
				<!--
				<div class="col-xs-3"></div>
				aplicandole un offset de 3 a la columna siguiente
				no hace falta meter el div vacio
				-->
				<div class="col-xs-3 col-xs-offset-3">
					<h3>Prices</h3>
					<hr/>
					<div class="list-group indicators">
						<a href="#" class="list-group-item">CPI MoM</a>
						<a href="#" class="list-group-item">CPI Ex Food and Energy MoM</a>
						<a href="#" class="list-group-item">PPI MoM</a>
						<a href="#" class="list-group-item">PPI Ex Food and Energy MoM</a>
						<a href="#" class="list-group-item">PCE Core MoM</a>
					</div>
				</div> <!-- cierra col -->
				<div class="col-xs-3">
					<h3>External Sector</h3>
					<hr/>
					<div class="list-group indicators">
						<a href="#" class="list-group-item">Trade Balance</a>
						<a href="#" class="list-group-item">Current Account Balance</a>
						
					</div>
				</div> <!-- cierra col -->
				<div class="col-xs-3">
					<h3>Labor Market</h3>
					<hr/>
					<div class="list-group indicators">
						<a href="#" class="list-group-item">Change in Nonfarm Payrolls</a>
						<a href="#" class="list-group-item">Unemployment Rate</a>
						<a href="#" class="list-group-item">Nonfarm Productivity</a>
						<a href="#" class="list-group-item">Unit Labor Costs</a>
						<a href="#" class="list-group-item">Average Hourly Earnings MoM</a>
					</div>
				</div> <!-- cierra col -->
			</div>
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
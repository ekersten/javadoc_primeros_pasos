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
		<section class="container-fluid articles">
			<div class="row">
				<div class="col-xs-6">
					<h1>Articles</h1>
				</div>
				<div class="col-xs-6 margin-top text-right">
					<button type="submit" class="btn btn-success btn-lg">Write One</button>
				</div>
			</div>
			
			<form class="form-horizontal user-registration-form" role="form">
			<!-- fila1 -->
			<div class="row">
				<div class="col-xs-12">
					<h4>Personal Information</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						<label class="control-label col-xs-3" for="inputSmall">Country</label>
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
						<label class="control-label col-xs-3" for="inputSmall">Category</label>
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
					<div class="form-group">
						<label for="select" class="control-label col-xs-4 ">Date</label>
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
						<label for="select" class="col-xs-4 control-label">Forecaster</label>
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
					<div class="form-group">
						<label class="control-label col-xs-5" for="inputSmall">Ranking</label>
						<div class="col-xs-7">
							<select class="form-control input-sm" id="select">
								<option>All</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-xs-5" for="inputSmall">Sort By</label>
						<div class="col-xs-7">
							<select class="form-control input-sm" id="select">
								<option>Most recent</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
					<div class="row text-right"> 
						<div class="col-xs-6 "><a class="view-more">Back to simple search</a></div>
						<div class="col-xs-6"><button type="button" class="btn btn-primary btn-sm">Search</button></div>
					</div>
				</div>
			</div>
		</form>
			<!-- fin fila1 -->
			<!-- fila2 -->
			<div class="row articles margin-top">
				<div class="col-xs-12">
					<!-- article start -->
					<div class="row article">
						<div class="col-xs-1">
							<img src="img/cara06.jpg" width="68"/>
						</div>
						<div class="col-xs-5">
							<h5>ISM surpised on the upside</h5>
							<p>by Hernan Kisluk</p>
						</div>
						<div class="col-xs-2 text-center">
							<span class="icon icon-table"></span> Jun-14 3:55
						</div>
						<div class="col-xs-1 text-right">
							<span class="icon icon-eye"> </span> 52
						</div>
						<div class="col-xs-1 text-right">
							<span class="icon icon-bubble"></span> 5
						</div>
						<div class="col-xs-2 text-right">
							<span class="icon icon-tag"></span> US Activity
						</div>
					</div>
					<!-- article end -->
					<!-- article start -->
					<div class="row article">
						<div class="col-xs-1">
							<img src="img/cara03.jpg" width="68"/>
						</div>
						<div class="col-xs-5">
							<h5>ISM surpised on the upside</h5>
							<p>by Hernan Kisluk</p>
						</div>
						<div class="col-xs-2 text-center">
							<span class="icon icon-table"></span> Jun-14 3:55
						</div>
						<div class="col-xs-1 text-right">
							<span class="icon icon-eye"> </span> 52
						</div>
						<div class="col-xs-1 text-right">
							<span class="icon icon-bubble"></span> 5
						</div>
						<div class="col-xs-2 text-right">
							<span class="icon icon-tag"></span> US Activity
						</div>
					</div>
					<!-- article end -->
					<!-- article start -->
					<div class="row article">
						<div class="col-xs-1">
							<img src="img/cara02.jpg" width="68"/>
						</div>
						<div class="col-xs-5">
							<h5>ISM surpised on the upside</h5>
							<p>by Hernan Kisluk</p>
						</div>
						<div class="col-xs-2 text-center">
							<span class="icon icon-table"></span> Jun-14 3:55
						</div>
						<div class="col-xs-1 text-right">
							<span class="icon icon-eye"> </span> 52
						</div>
						<div class="col-xs-1 text-right">
							<span class="icon icon-bubble"></span> 5
						</div>
						<div class="col-xs-2 text-right">
							<span class="icon icon-tag"></span> US Activity
						</div>
					</div>
					<!-- article end -->
					<!-- article start -->
					<div class="row article">
						<div class="col-xs-1">
							<img src="img/cara04.jpg" width="68"/>
						</div>
						<div class="col-xs-5">
							<h5>ISM surpised on the upside</h5>
							<p>by Hernan Kisluk</p>
						</div>
						<div class="col-xs-2 text-center">
							<span class="icon icon-table"></span> Jun-14 3:55
						</div>
						<div class="col-xs-1 text-right">
							<span class="icon icon-eye"> </span> 52
						</div>
						<div class="col-xs-1 text-right">
							<span class="icon icon-bubble"></span> 5
						</div>
						<div class="col-xs-2 text-right">
							<span class="icon icon-tag"></span> US Activity
						</div>
					</div>
					<!-- article end -->
					<!-- article start -->
					<div class="row article">
						<div class="col-xs-1">
							<img src="img/cara01.jpg" width="68"/>
						</div>
						<div class="col-xs-5">
							<h5>ISM surpised on the upside</h5>
							<p>by Hernan Kisluk</p>
						</div>
						<div class="col-xs-2 text-center">
							<span class="icon icon-table"></span> Jun-14 3:55
						</div>
						<div class="col-xs-1 text-right">
							<span class="icon icon-eye"> </span> 52
						</div>
						<div class="col-xs-1 text-right">
							<span class="icon icon-bubble"></span> 5
						</div>
						<div class="col-xs-2 text-right">
							<span class="icon icon-tag"></span> US Activity
						</div>
					</div>
					<!-- article end -->
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center"><a class="btn btn-primary">Load More</a></div>
			</div>
			<!-- fin fila2 -->

		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
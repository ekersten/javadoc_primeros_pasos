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
			<div class="row">
				<div class="col-xs-12">
					<h1>What kind of league will you create?</h1>
				</div>
			</div>
			<!-- fila1 -->
			<div class="row margin-top">
				<div class="col-xs-4 col-xs-offset-1 promobox selected">
					<div class="well well-sm">
						<div class="text-center">
							<h3 class="text-center">Academic</h3>
							<img src="img/birrete.png"  width="100" alt="">
						</div>
						<ul>
							<li>Upload an introductory file telling your students what to do</li>
							<li>Add indicators to be forecasted</li>
							<li>Optionally, add assignments and then grade them</li>
							<li>Keep track of your students activity</li>
							<li>Define who will pay for it (students or the institution)</li>
							<li>Reuse a previously created League</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-4 col-xs-offset-1 promobox">
					<div class="well well-sm">
						<div class="text-center">
							<h3 class="text-center">Promotional</h3>
							<img src="img/megafono.png"  width="100" alt="">
						</div>	
						<ul>
							<li>Reach a large audience of economists and market practitioners</li>
							<li>Select the suscription mode (open to everybody, open with admission, by invitation)</li>
							<li>Engage them in your League by offering a prize</li>
							<li>Be prominently displayed in our homepage for the duration of the League</li>
						</ul>

					</div>
				</div>
			</div>
			<!-- fin fila1 -->
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
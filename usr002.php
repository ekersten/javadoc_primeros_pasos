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
		<section class="container-fluid">
			<div class="row">
				<div class="col-xs-4">
					<div class="panel panel-primary no-padding">
						<div class="panel-heading">
							<h3 class="panel-title">General</h3>
						</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered ranking">
								<thead>
									<tr>
										<th>Name</th>
										<th>Score</th>
										<th>Rank</th>
									</tr>
								</thead>
								<tbody>
									<tr class="info">
										<td>YOU</td>
										<td>18</td>
										<td>60</td>
									</tr>
									<tr>
										<td>Juan</td>
										<td>50</td>
										<td>1</td>
									</tr>
									<tr>
										<td>Juan</td>
										<td>49</td>
										<td>2</td>
									</tr>
									<tr>
										<td>Juan</td>
										<td>48</td>
										<td>3</td>
									</tr>
									<tr>
										<td>Juan</td>
										<td>47</td>
										<td>4</td>
									</tr>
									<tr>
										<td>Juan</td>
										<td>46</td>
										<td>5</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<p><button type="button" class="btn btn-primary btn-lg">Botón Grande</button></p>
					<p><button type="button" class="btn btn-primary">Botón Normal</button></p>
				</div>
				<div class="col-xs-4">fsf</div>
			</div>
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
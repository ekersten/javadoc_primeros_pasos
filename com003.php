<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Macro Campus</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans|Open+Sans:400,300,700' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="css/macrocampus.css"/>
	<link rel="stylesheet" href="js/libs/froala/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="js/libs/froala/css/froala_editor.min.css"/>
</head>
<body>
	<div class="page-wrap">
		<?php include('includes/header.php'); ?>
		<section class="container-fluid article">
			<div class="row">
				<div class="col-xs-12">
					<ol class="breadcrumb">
						<li><a href="#">Articles</a></li>
						<li class="active">Write an Article</li>
					</ol>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-xs-9">
					<form role="form" class="form">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" class="form-control" id="title"/>
						</div>
						<div class="form-group">
							<label for="article">Article</label>
							<textarea class="form-control" rows="20" id="article"></textarea>
						</div>
						<div class="checkbox">
							<label><input type="checkbox"> Allow other users to post replies to this article</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="js/libs/froala/froala_editor.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/article_editor.js"></script>
</body>
</html>
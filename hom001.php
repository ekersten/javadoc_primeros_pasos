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
		<section class="container-fluid home">
			<div class="row">
				<div class="col-xs-12">
					<div class="slider">
						<div class="slider-controls">
							<div id="slider_prev"><span class="glyphicon glyphicon-chevron-left"></span></div>
							<div id="slider_next"><span class="glyphicon glyphicon-chevron-right"></span></div>
						</div>
						<div class="slides cycle-slideshow composite-example" data-cycle-fx="scrollHorz" data-cycle-slides="> div"data-cycle-timeout="6000" data-cycle-prev="#slider_prev" data-cycle-next="#slider_next" data-cycle-pager=".pager">
							<div class="slide left light" data-cycle-pager-template="<a href=#>Welcome</a>">
								<div class="text">
									<h3>Rely on us for Macroeconomic Forecasts</h3>
									<p>Collective Intelligence is a proven way to produce accurate forecasts.</br>
										Follow more than 1000 analysts providing reliable estimates and insights about major economies</p>
								</div>
								<!-- <div class="media">
									<img src="http://placehold.it/480x320/dddddd/ffffff&text=Video" />
								</div> -->
								<img src="img/hom02.jpg"/>
							</div>
							<div class="slide left dark" data-cycle-pager-template="<a href=#>Forecasting</a>">
								<div class="text">
									<h3>Be part of it</h3>
									<p>Start forecasting today. Show your skills and share your ideas.</br>
									Major market participants come to Macro Campus searching for talented people! </p>
								</div>
								<!-- <div class="media">
									<img src="http://placehold.it/480x320/6492C8/ffffff&text=Video" />
								</div> -->
								<img src="img/hom01.jpg"/>
							</div>
							<div class="slide right dark" data-cycle-pager-template="<a href=#>League</a>">
								<div class="text">
									<h3>Are you an educator? Join us!</h3>
									<p>Start a League for your institution and add value for your students.</br>
									Engage them in a private contest and keep track of their activity.	
									</p>
								</div>
								<!-- <div class="media">
									<img src="http://placehold.it/480x320/6492C8/ffffff&text=Video" />
								</div> -->
								<img src="img/hom03.jpg"/>
							</div>
							<div class="slide right dark" data-cycle-pager-template="<a href=#>Looking</a>">
								<div class="text">
									<h3>Looking for talented economists?</h3>
									<p>Follow the rankings and contact our forecasters.</br>
									Know their skills before hiring them.
									</p>
								</div>
								<!-- <div class="media">
									<img src="http://placehold.it/480x320/6492C8/ffffff&text=Video" />
								</div> -->
								<img src="img/hom04.jpg"/>
							</div>
							<div class="slide left dark" data-cycle-pager-template="<a href=#>Opportunities</a>">
								<div class="text">
									<h3>Sponsorship opportunities</h3>
									<p>Show your brand to a highly qualified and niche audience.</br>
									Support the development of macroeconomic skills.</p>
								</div>
								<!-- <div class="media">
									<img src="http://placehold.it/480x320/6492C8/ffffff&text=Video" />
								</div> -->
								<img src="img/hom05.jpg"/>
							</div>
						</div>
						<div class="pager"></div>
					</div>
				</div>
			</div>
			<div class="row leagues">
				<div class="col-xs-12 ">
					<h3>Sponsored Forecasting Leagues</h3>
					<!-- <span><a href="" title="">Create new League</a></span> -->
					<ul>
						<li class="new"><img src="img/liga01.jpg" width="60" alt=""></li>
						<li><img src="img/liga02.jpg" width="60" alt=""></li>
						<li><img src="img/liga03.jpg" width="60" alt=""></li>
						<li><img src="img/liga05.jpg" width="60" alt=""></li>
						<li><img src="img/liga04.jpg" width="60" alt=""></li>
					</ul>
					<a class="btn btn-success">Create new League</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center">
					<a class="view-all" href="#">View all leagues</a>
				</div>
			</div>	
			<div class="row">
				<div class="col-xs-12 country-selector">
					<h3>Today's Releases for:</h3>
					<span>
						<select class="form-control input-sm">
							<option value="">United States</option>
							<option value="">Italy</option>
							<option value="">Germany</option>
						</select>
					</span>
					<a class="view-all" href="#">View full calendar</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 indicators calendar">
					<div class="columns">
						<!-- column start -->
						<div class="column">
							<div class="indicators">
								<!-- item start -->
								<div class="item">
									<div class="name">ISM Manufacturing </div>
									<div class="info">
										<span class="hour">8:30</span>
									</div>
									<div class="values">
										<table>
											<thead>
												<tr>
													<th>Period</th>
													<th>Fcst.</th>
													<th>Prev.</th>
													<th>Actual</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Mar. 14</td>
													<td>55.2</td>
													<td>53</td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- item end -->
							</div>
						</div>
						<!-- column end -->
						<!-- column start -->
						<div class="column">
							<div class="indicators">
								<!-- item start -->
								<div class="item">
									<div class="name">Industrial Production</div>
									<div class="info">
										<span class="hour">8:30</span>
									</div>
									<div class="values">
										<table>
											<thead>
												<tr>
													<th>Period</th>
													<th>Fcst.</th>
													<th>Prev.</th>
													<th>Actual</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Mar. 14</td>
													<td>55.2</td>
													<td>53</td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- item end -->
							</div>
						</div>
						<!-- column end -->
						<!-- column start -->
						<div class="column">
							<div class="indicators">
								<!-- item start -->
								<div class="item">
									<div class="name">Durable Goods</div>
									<div class="info">
										<span class="hour">8:30</span>
									</div>
									<div class="values">
										<table>
											<thead>
												<tr>
													<th>Period</th>
													<th>Fcst.</th>
													<th>Prev.</th>
													<th>Actual</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Mar. 14</td>
													<td>55.2</td>
													<td>53</td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- item end -->
							</div>
						</div>
						<!-- column end -->
						<!-- column start -->
						<div class="column">
							<div class="indicators">
								<!-- item start -->
								<div class="item">
									<div class="name">Factory Orders</div>
									<div class="info">
										<span class="hour">8:30</span>
									</div>
									<div class="values">
										<table>
											<thead>
												<tr>
													<th>Period</th>
													<th>Fcst.</th>
													<th>Prev.</th>
													<th>Actual</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Mar. 14</td>
													<td>55.2</td>
													<td>53</td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- item end -->
							</div>
						</div>
						<!-- column end -->
						<!-- column start -->
						<div class="column">
							<div class="indicators">
								<!-- item start -->
								<div class="item">
									<div class="name">Non Farm Payrolls</div>
									<div class="info">
										<span class="hour">8:30</span>
									</div>
									<div class="values">
										<table>
											<thead>
												<tr>
													<th>Period</th>
													<th>Fcst.</th>
													<th>Prev.</th>
													<th>Actual</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Mar. 14</td>
													<td>55.2</td>
													<td>53</td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- item end -->
							</div>
						</div>
						<!-- column end -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 articles-list">
					<h4>Most Read Articles</h4>
					<!-- article start -->
					<div class="row article">
						<div class="col-xs-1 author-image"><img src="img/cara03.jpg" width="30" alt=""></div>
						<div class="col-xs-11 text">
							<h5>ISM Surprised on the upside</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis metus porttitor, aliquam mi in, laoreet leo. Nam eleifend turpis tortor, eget facilisis nisl porta non. Phasellus rhoncus lorem nisi...</p>
							<div class="row">
								<div class="col-xs-6 author">by Hernan Kisluk</div>
								<div class="col-xs-6 text-right read-more">
									<a href="#" class="btn btn-primary btn-sm">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- article end -->
					<!-- article start -->
					<div class="row article">
						<div class="col-xs-1 author-image"><img src="img/cara02.jpg" width="30" alt=""></div>
						<div class="col-xs-11 text">
							<h5>GDP points to recovery</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis metus porttitor, aliquam mi in, laoreet leo. Nam eleifend turpis tortor, eget facilisis nisl porta non. Phasellus rhoncus lorem nisi...</p>
							<div class="row">
								<div class="col-xs-6 author">by Hernan Kisluk</div>
								<div class="col-xs-6 text-right read-more">
									<a href="#" class="btn btn-primary btn-sm">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- article end -->
					<!-- article start -->
					<div class="row article">
						<div class="col-xs-1 author-image"><img src="img/cara01.jpg" width="30" alt=""></div>
						<div class="col-xs-11 text">
							<h5>US economy gaining escape velocity</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis metus porttitor, aliquam mi in, laoreet leo. Nam eleifend turpis tortor, eget facilisis nisl porta non. Phasellus rhoncus lorem nisi...</p>
							<div class="row">
								<div class="col-xs-6 author">by Hernan Kisluk</div>
								<div class="col-xs-6 text-right read-more">
									<a href="#" class="btn btn-primary btn-sm">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- article end -->
					<p class="text-right view-all"><a href="#">View all articles</a></p>
				</div>
				<div class="col-xs-5 col-xs-offset-1 ranking">
					<div class="row">
						<div class="col-xs-12">
							<h4>Top Forecasters</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 widget-top3">
							<h6>Activity</h6>
							<ol>
								<li><img src="img/cara05.jpg" width="45" alt=""><span class="author">Flavia</span></li>
								<li><img src="img/cara06.jpg" width="45" alt=""><span class="author">Sara</span></li>
								<li><img src="img/cara01.jpg" width="45" alt=""><span class="author">John</span></li>
							</ol>
						</div>
						<div class="col-xs-4 widget-top3">
							<h6>Labour</h6>
							<ol>
								<li><img src="img/cara02.jpg" width="45" alt=""><span class="author">Steven</span></li>
								<li><img src="img/cara06.jpg" width="45" alt=""><span class="author">Flavia</span></li>
								<li><img src="img/cara04.jpg" width="45" alt=""><span class="author">Sara</span></li>
							</ol>
						</div>
						<div class="col-xs-4 widget-top3">
							<h6>Activity</h6>
							<ol>
								<li><img src="img/cara03.jpg" width="45" alt=""><span class="author">Eric</span></li>
								<li><img src="img/cara04.jpg" width="45" alt=""><span class="author">Flavia</span></li>
								<li><img src="img/cara01.jpg" width="45" alt=""><span class="author">Steven</span></li>
							</ol>
						</div>
					</div>
					<div class="row half-margin-top">
						<div class="col-xs-4 widget-top3">
							<h6>Consumer</h6>
							<ol>
								<li><img src="img/cara05.jpg" width="45" alt=""><span class="author">Sara</span></li>
								<li><img src="img/cara06.jpg" width="45" alt=""><span class="author">Flavia</span></li>
								<li><img src="img/cara03.jpg" width="45" alt=""><span class="author">John</span></li>
							</ol>
						</div>
						<div class="col-xs-4 widget-top3">
							<h6>Activity</h6>
							<ol>
								<li><img src="img/cara01.jpg" width="45" alt=""><span class="author">Eric</span></li>
								<li><img src="img/cara05.jpg" width="45" alt=""><span class="author">Flavia</span></li>
								<li><img src="img/cara02.jpg" width="45" alt=""><span class="author">John</span></li>
							</ol>
						</div>
						<div class="col-xs-4 widget-top3">
							<h6>Activity</h6>
							<ol>
								<li><img src="img/cara02.jpg" width="45" alt=""><span class="author">John</span></li>
								<li><img src="img/cara04.jpg" width="45" alt=""><span class="author">Flavia</span></li>
								<li><img src="img/cara03.jpg" width="45" alt=""><span class="author">Steven</span></li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p class="text-right view-all"><a href="#">View all rankings</a></p>
						</div>
						
					</div>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-xs-8 faq">
					<div class="well well-sm">
						<h4>Frequently Asked Questions</h4>
						<ul>
							<li><a href="#">Who can make forecasts?</a></li>
							<li><a href="#">Is it free?</a></li>
							<li><a href="#">Can I remain anonymus?</a></li>
							<li><a href="#">How is the scoring methodology?</a></li>
							<li><a href="#">How is the ranking calculated?</a></li>
							<li><a href="#">What are the Leagues?</a></li>
							<li><a href="#">Who can create a League?</a></li>
							<li><a href="#">Question 8</a></li>
						</ul>
					</div>
					<p class="text-right"><a href="#" class="view-more">View all FAQs</a></p>
				</div>
				<div class="col-xs-4 alerts">
					<div class="well well-sm">
						<h4 class="text-center">Receive alerts in your inbox</h4>
						<p>Choose indicators to receive alerts upon releases.<br/>Follow analysts and get their comments in your email.</p>
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<label for="inputEmail3" class="col-xs-2 control-label">Email</label>
								<div class="col-xs-10">
									<input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Email address">
								</div>
							</div>
							<p class="hint">You don't have to suscribe to Macro Campus to receive this alerts.</p>
							<div class="form-group no-margin">
								<div class="col-xs-12 text-center">
									<input type="submit" class="btn btn-primary" value="Go"/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php include('includes/footer.php'); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="js/libs/cycle/jquery.cycle2.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
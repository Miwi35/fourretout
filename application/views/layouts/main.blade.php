<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Fourretout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	{{ Asset::styles() }}
	<style type="text/css">
		body { padding-top: 60px; padding-bottom: 40px; }
	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-114x114.png">
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">

				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse.collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<a class="brand" href="#">Fourre-tout</a>

				<div class="nav-collapse collapse">

					<ul class="nav">
						<li><a href="{{ URL::to_route('home'); }}">Accueil</a></li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Boards<b class="caret"></b></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								@foreach(Board::all() as $board)
									<li><a href="{{ URL::to_route('board_show', $board->id); }}">{{ $board->title }}</a></li>
								@endforeach
								<li><a href="/board/new">Ajouter un board</a></li>
							</ul>
	                     </li>
					</ul>

					@render('search.form-menu')
					<ul class="nav pull-right">
						<li><a href="inscription"><i class="icon-user"></i> Inscription</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-signin"></i> Se Connecter<b class="caret"></b></a>
							<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
				              @render('user.login-menu')
							</div>
						</li>
					</ul>
					 
				</div><!--/.nav-collapse -->

			</div>
		</div>
	</div>

	<div class="navbar" id="subnav">
		<div class="container">
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="<?php echo (isset($sidebar) && $sidebar) ? "span8" : "span12" ?>">
				@if(isset($title))
					<div class="page-header">
						<h1>{{$title}}</h1>
					</div>
				@endif
				{{ $content }}
			</div>
			@if(isset($sidebar))
				<div class="span3 offset1">
					{{ $sidebar }}
				</div>
			@endif
		</div>
		
		
	  	<hr>
		<footer>
			<p>&copy; Company 2012</p>
		</footer>
	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	@include('misc.jsvars')
	<script src="http://code.jquery.com/jquery.min.js"></script>
	{{ Asset::scripts() }}
</body>
</html>
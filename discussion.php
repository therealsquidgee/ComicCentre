<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="css/OwlCarousel/owl.carousel.css" type="text/css"/>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="js/OwlCarousel/owl.carousel.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body>
		<nav id="navbar" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#throwdown-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" id="title" href="index.php">ComicCentre</a>
				</div>
				<div class="navbar-collapse collapse" id="throwdown-collapse">
					<ul class="nav navbar-nav">
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="discussion.php">Discussion</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right navbar-collapse-right">
						<li><a href="mycomics.php">My Comics</a></li>
						<li><a href="account.php">Account</a></li>
					</ul>
				</div>
			</div>
    	</nav>
		<div id="container">
		
			<div class="panel panel-default center">
			  <div class="panel-heading">
				<h3 class="panel-title"><a href="discussion.php">Comic #1</a></h3>
			  </div>
			  
			  <div class="panel-body">
				<div id="picCarousel">
				  <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
				  <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
				  <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
				  <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
				</div>
			  </div>
			  
			  <div class="panel-footer left">
				<div id="commentCarousel">
				  <div class="item">
					<div class="well">
					  <p><strong>User # 1:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					  <p class="comment2"><strong>User # 2:</strong>Praesent venenatis ligula ac ligula dictum, nec feugiat purus porta.</p>
					  <p class="comment3"><strong>User # 1:</strong>Mauris commodo, est ut luctus rhoncus, augue odio sollicitudin felis, hendrerit auctor eros ex sed justo.</p>
					  <p class="comment4"><strong>User # 2:</strong>Praesent venenatis ligula ac ligula dictum, nec feugiat purus porta.</p>
					</div>
				  </div>
				  
				  <div class="item">
					<div class="well">
					  <p><strong>User # 1:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					  <p class="comment2"><strong>User # 2:</strong>Praesent venenatis ligula ac ligula dictum, nec feugiat purus porta.</p>
					</div>
				  </div>
				  
				  <div class="item">
					<div class="well">
					  <p><strong>User # 1:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					  <p class="comment2"><strong>User # 2:</strong>Praesent venenatis ligula ac ligula dictum, nec feugiat purus porta.</p>
					  <p class="comment3"><strong>User # 1:</strong>Mauris commodo, est ut luctus rhoncus, augue odio sollicitudin felis, hendrerit auctor eros ex sed justo.</p>
					</div>
				  </div>
				  <div class="item">
					<div class="well"><p><strong>User # 1:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
				  </div>
				</div>
				
			  </div>
			</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo Message::network;?> Infractions</title>
	<!-- Bootstrap and jquery includes -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- Custom fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Bree%20Serif">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Alegreya">
	<!-- Additional CSS and JS -->
	<link rel="stylesheet" href="public/styles/base-stylesheet.css">
	<script src="public/js/base-script.js"></script>
	<!-- CUSTOM THEMES HERE!!! -->
		<!-- Yeti - DEFAULT -->
			<!-- For Development -->
			<link rel="stylesheet" href="res/themes/Yeti/css/bootstrap.min.css?version=2" title="Yeti">
			<link rel="stylesheet" href="res/themes/Yeti/css/custom.css?version=2" title="Yeti">
			<link rel="stylesheet" href="res/themes/Yeti/css/font-awesome.min.css?version=2" title="Yeti">
			<!-- Live CSS -->
			<link rel="stylesheet" href="/styles/themes/Yeti/css/bootstrap.min.css?version=2" title="Yeti">
			<link rel="stylesheet" href="/styles/themes/Yeti/css/custom.css?version=2" title="Yeti">
			<link rel="stylesheet" href="/styles/themes/Yeti/css/font-awesome.min.css?version=2" title="Yeti">
		<!-- Bootstrap -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Bootstrap/css/bootstrap.min.css?version=2" title="Bootstrap">
			<link rel="alternate stylesheet" href="res/themes/Bootstrap/css/custom.css?version=2" title="Bootstrap">
			<link rel="alternate stylesheet" href="res/themes/Bootstrap/css/font-awesome.min.css?version=2" title="Bootstrap">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Bootstrap/css/bootstrap.min.css?version=2" title="Bootstrap">
			<link rel="alternate stylesheet" href="/styles/themes/Bootstrap/css/custom.css?version=2" title="Bootstrap">
			<link rel="alternate stylesheet" href="/styles/themes/Bootstrap/css/font-awesome.min.css?version=2" title="Bootstrap">
		<!-- Cerulean -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Cerulean/css/bootstrap.min.css?version=2" title="Cerulean">
			<link rel="alternate stylesheet" href="res/themes/Cerulean/css/custom.css?version=2" title="Cerulean">
			<link rel="alternate stylesheet" href="res/themes/Cerulean/css/font-awesome.min.css?version=2" title="Cerulean">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Cerulean/css/bootstrap.min.css?version=2" title="Cerulean">
			<link rel="alternate stylesheet" href="/styles/themes/Cerulean/css/custom.css?version=2" title="Cerulean">
			<link rel="alternate stylesheet" href="/styles/themes/Cerulean/css/font-awesome.min.css?version=2" title="Cerulean">
		<!-- Cosmo -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Cosmo/css/bootstrap.min.css?version=2" title="Cosmo">
			<link rel="alternate stylesheet" href="res/themes/Cosmo/css/custom.css?version=2" title="Cosmo">
			<link rel="alternate stylesheet" href="res/themes/Cosmo/css/font-awesome.min.css?version=2" title="Cosmo">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Cosmo/css/bootstrap.min.css?version=2" title="Cosmo">
			<link rel="alternate stylesheet" href="/styles/themes/Cosmo/css/custom.css?version=2" title="Cosmo">
			<link rel="alternate stylesheet" href="/styles/themes/Cosmo/css/font-awesome.min.css?version=2" title="Cosmo">
		<!-- Cyborg -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Cyborg/css/bootstrap.min.css?version=2" title="Cyborg">
			<link rel="alternate stylesheet" href="res/themes/Cyborg/css/custom.css?version=2" title="Cyborg">
			<link rel="alternate stylesheet" href="res/themes/Cyborg/css/font-awesome.min.css?version=2" title="Cyborg">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Cyborg/css/bootstrap.min.css?version=2" title="Cyborg">
			<link rel="alternate stylesheet" href="/styles/themes/Cyborg/css/custom.css?version=2" title="Cyborg">
			<link rel="alternate stylesheet" href="/styles/themes/Cyborg/css/font-awesome.min.css?version=2" title="Cyborg">
		<!-- Darkly -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Darkly/css/bootstrap.min.css?version=2" title="Darkly">
			<link rel="alternate stylesheet" href="res/themes/Darkly/css/custom.css?version=2" title="Darkly">
			<link rel="alternate stylesheet" href="res/themes/Darkly/css/font-awesome.min.css?version=2" title="Darkly">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Darkly/css/bootstrap.min.css?version=2" title="Darkly">
			<link rel="alternate stylesheet" href="/styles/themes/Darkly/css/custom.css?version=2" title="Darkly">
			<link rel="alternate stylesheet" href="/styles/themes/Darkly/css/font-awesome.min.css?version=2" title="Darkly">
		<!-- Flatly -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Darkly/css/bootstrap.min.css?version=2" title="Darkly">
			<link rel="alternate stylesheet" href="res/themes/Darkly/css/custom.css?version=2" title="Darkly">
			<link rel="alternate stylesheet" href="res/themes/Darkly/css/font-awesome.min.css?version=2" title="Darkly">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Flatly/css/bootstrap.min.css?version=2" title="Flatly">
			<link rel="alternate stylesheet" href="/styles/themes/Flatly/css/custom.css?version=2" title="Flatly">
			<link rel="alternate stylesheet" href="/styles/themes/Flatly/css/font-awesome.min.css?version=2" title="Flatly">
		<!-- Journal -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Journal/css/bootstrap.min.css?version=2" title="Journal">
			<link rel="alternate stylesheet" href="res/themes/Journal/css/custom.css?version=2" title="Journal">
			<link rel="alternate stylesheet" href="res/themes/Journal/css/font-awesome.min.css?version=2" title="Journal">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Journal/css/bootstrap.min.css?version=2" title="Journal">
			<link rel="alternate stylesheet" href="/styles/themes/Journal/css/custom.css?version=2" title="Journal">
			<link rel="alternate stylesheet" href="/styles/themes/Journal/css/font-awesome.min.css?version=2" title="Journal">
		<!-- Lumen -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Lumen/css/bootstrap.min.css?version=2" title="Lumen">
			<link rel="alternate stylesheet" href="res/themes/Lumen/css/custom.css?version=2" title="Lumen">
			<link rel="alternate stylesheet" href="res/themes/Lumen/css/font-awesome.min.css?version=2" title="Lumen">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Lumen/css/bootstrap.min.css?version=2" title="Lumen">
			<link rel="alternate stylesheet" href="/styles/themes/Lumen/css/custom.css?version=2" title="Lumen">
			<link rel="alternate stylesheet" href="/styles/themes/Lumen/css/font-awesome.min.css?version=2" title="Lumen">
		<!-- Paper -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Paper/css/bootstrap.min.css?version=2" title="Paper">
			<link rel="alternate stylesheet" href="res/themes/Paper/css/custom.css?version=2" title="Paper">
			<link rel="alternate stylesheet" href="res/themes/Paper/css/font-awesome.min.css?version=2" title="Paper">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Paper/css/bootstrap.min.css?version=2" title="Paper">
			<link rel="alternate stylesheet" href="/styles/themes/Paper/css/custom.css?version=2" title="Paper">
			<link rel="alternate stylesheet" href="/styles/themes/Paper/css/font-awesome.min.css?version=2" title="Paper">
		<!-- Readable -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Readable/css/bootstrap.min.css?version=2" title="Readable">
			<link rel="alternate stylesheet" href="res/themes/Readable/css/custom.css?version=2" title="Readable">
			<link rel="alternate stylesheet" href="res/themes/Readable/css/font-awesome.min.css?version=2" title="Readable">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Readable/css/bootstrap.min.css?version=2" title="Readable">
			<link rel="alternate stylesheet" href="/styles/themes/Readable/css/custom.css?version=2" title="Readable">
			<link rel="alternate stylesheet" href="/styles/themes/Readable/css/font-awesome.min.css?version=2" title="Readable">
		<!-- Sandstone -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Sandstone/css/bootstrap.min.css?version=2" title="Sandstone">
			<link rel="alternate stylesheet" href="res/themes/Sandstone/css/custom.css?version=2" title="Sandstone">
			<link rel="alternate stylesheet" href="res/themes/Sandstone/css/font-awesome.min.css?version=2" title="Sandstone">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Sandstone/css/bootstrap.min.css?version=2" title="Sandstone">
			<link rel="alternate stylesheet" href="/styles/themes/Sandstone/css/custom.css?version=2" title="Sandstone">
			<link rel="alternate stylesheet" href="/styles/themes/Sandstone/css/font-awesome.min.css?version=2" title="Sandstone">
		<!-- Simplex -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Simplex/css/bootstrap.min.css?version=2" title="Simplex">
			<link rel="alternate stylesheet" href="res/themes/Simplex/css/custom.css?version=2" title="Simplex">
			<link rel="alternate stylesheet" href="res/themes/Simplex/css/font-awesome.min.css?version=2" title="Simplex">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Simplex/css/bootstrap.min.css?version=2" title="Simplex">
			<link rel="alternate stylesheet" href="/styles/themes/Simplex/css/custom.css?version=2" title="Simplex">
			<link rel="alternate stylesheet" href="/styles/themes/Simplex/css/font-awesome.min.css?version=2" title="Simplex">
		<!-- Slate -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Slate/css/bootstrap.min.css?version=2" title="Slate">
			<link rel="alternate stylesheet" href="res/themes/Slate/css/custom.css?version=2" title="Slate">
			<link rel="alternate stylesheet" href="res/themes/Slate/css/font-awesome.min.css?version=2" title="Slate">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Slate/css/bootstrap.min.css?version=2" title="Slate">
			<link rel="alternate stylesheet" href="/styles/themes/Slate/css/custom.css?version=2" title="Slate">
			<link rel="alternate stylesheet" href="/styles/themes/Slate/css/font-awesome.min.css?version=2" title="Slate">
		<!-- Spacelab -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Spacelab/css/bootstrap.min.css?version=2" title="Spacelab">
			<link rel="alternate stylesheet" href="res/themes/Spacelab/css/custom.css?version=2" title="Spacelab">
			<link rel="alternate stylesheet" href="res/themes/Spacelab/css/font-awesome.min.css?version=2" title="Spacelab">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Spacelab/css/bootstrap.min.css?version=2" title="Spacelab">
			<link rel="alternate stylesheet" href="/styles/themes/Spacelab/css/custom.css?version=2" title="Spacelab">
			<link rel="alternate stylesheet" href="/styles/themes/Spacelab/css/font-awesome.min.css?version=2" title="Spacelab">
		<!-- Superhero -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/Superhero/css/bootstrap.min.css?version=2" title="Superhero">
			<link rel="alternate stylesheet" href="res/themes/Superhero/css/custom.css?version=2" title="Superhero">
			<link rel="alternate stylesheet" href="res/themes/Superhero/css/font-awesome.min.css?version=2" title="Superhero">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Superhero/css/bootstrap.min.css?version=2" title="Superhero">
			<link rel="alternate stylesheet" href="/styles/themes/Superhero/css/custom.css?version=2" title="Superhero">
			<link rel="alternate stylesheet" href="/styles/themes/Superhero/css/font-awesome.min.css?version=2" title="Superhero">
		<!-- United -->
			<!-- For Development -->
			<link rel="alternate stylesheet" href="res/themes/United/css/bootstrap.min.css?version=2" title="United">
			<link rel="alternate stylesheet" href="res/themes/United/css/custom.css?version=2" title="United">
			<link rel="alternate stylesheet" href="res/themes/United/css/font-awesome.min.css?version=2" title="United">
			<!-- Live CSS -->
			<link rel="alternate stylesheet" href="/styles/themes/Journal/css/bootstrap.min.css?version=2" title="United">
			<link rel="alternate stylesheet" href="/styles/themes/Journal/css/custom.css?version=2" title="United">
			<link rel="alternate stylesheet" href="/styles/themes/Journal/css/font-awesome.min.css?version=2" title="United">
	<!-- END CUSTOM THEMES -->
	<link rel="stylesheet" href="public/styles/custom.css">
</head>
<body>
	<nav class="navbar" role="navigation">
		<div class="container-fluid">
			<!-- BEGIN Navbar -->
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container" id="bs-example-navbar-collapse-1">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_navbar_collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="./">BAT Interface</a>
						</div>
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="main_navbar_collapse">
							<ul class="nav navbar-nav">
								<li class="<?php if(get_class($this) == "home"){echo "active";}?>"><a href="index.php">Home</a></li>
								<li class="<?php if(get_class($this) == "ban"){echo "active";}?>"><a href="index.php?p=ban">Bans</a></li>
								<li class="<?php if(get_class($this) == "mute"){echo "active";}?>"><a href="index.php?p=mute">Mutes</a></li>
								<li class="<?php if(get_class($this) == "kick"){echo "active";}?>"><a href="index.php?p=kick">Kicks</a></li>
								<li class="<?php if(get_class($this) == "comment"){echo "active";}?>"><a href="index.php?p=comment">Comments</a></li>
							</ul>
							<!-- User control (right side of navbar) -->
							<ul class="nav navbar-nav navbar-right">
								<?php if($this->isAdmin()) {include("admin/navbarAddon.php");} else { echo "<li><a href='?p=admin'>Login</a></li>";}?>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container -->
				</nav>
			<!-- END Navbar -->
		</div>
	</nav>
<?php include("application/views/_template/modal-info.php");?>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
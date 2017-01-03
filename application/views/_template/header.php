<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo Message::network;?> punishment list</title>
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
</head>
<body>
	<nav class="navbar navbar-bat" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php" id="navbar-title"><?php echo Message::network;?></a>
			</div>
			
			<!-- BEGIN Navbar -->
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="<?php if(get_class($this) == "home"){echo "active";}?>"><a href="index.php">Home</a></li>
						<li class="<?php if(get_class($this) == "ban"){echo "active";}?>"><a href="index.php?p=ban">Bans</a></li>
						<li class="<?php if(get_class($this) == "mute"){echo "active";}?>"><a href="index.php?p=mute">Mutes</a></li>
						<li class="<?php if(get_class($this) == "kick"){echo "active";}?>"><a href="index.php?p=kick">Kicks</a></li>
						<li class="<?php if(get_class($this) == "comment"){echo "active";}?>"><a href="index.php?p=comment">Comments</a></li>
						<?php if($this->isAdmin()) {include("admin/navbarAddon.php");} else { echo "<li class='divider-vertical'></li><li><a href='?p=admin'>Login</a></li>";}?>
					</ul>
					<form class="navbar-form navbar-right" method="get">
						<div class="form-group">
							<input type="text" class="form-control input-text" id="pname-input" name="player" placeholder="Player Name">
						</div>
						<input type="hidden" name="p" value="profile">
						<button type="submit" class="btn btn-default btn-bat">View profile</button>
					</form>
				</div>
				
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
							<a class="navbar-brand" href="./">CP2 Interface</a>
						</div>
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="main_navbar_collapse">
							<ul class="nav navbar-nav">
							<?php if ($shownavs) foreach($this->c['navbar'] as $ll => $hf) echo '<li><a href="'.$hf.'">'.$ll.'</a></li>';?>
							</ul>
							<!-- User control (right side of navbar) -->
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown alert-dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="margin: -10px 0px; font-size: 16px;"><i class="fa fa-envelope"></i> <div style="display: inline;" id="pms"></div></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Click View Messages</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="../user/messaging">View Messages</a></li>
								</ul>
								</li>	
								
								<li class="dropdown alert-dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="margin: -10px 0px; font-size: 16px;"><i class="fa fa-flag"></i> <div style="display: inline;" id="alerts"></div></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Click View Alerts</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="../user/alerts">View Alerts</a></li>
								</ul>
								</li>
								
								<li class="dropdown">
								<a href="#" data-toggle="dropdown" role="button" aria-expanded="false">&nbsp;&nbsp;MuhsinunCool <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="../profile/<?php echo $this->u;?>">Profile</a></li>
									<li class="divider"></li>
									<li><a href="../user">UserCP</a></li>
									<li><a href="../mod">ModCP</a></li>
									<li><a href="../admin">AdminCP</a></li>
									<li class="divider"></li>
									<li><a href="../infractions">Infractions</a></li>
									<li class="divider"></li>
									<li><a href="./login.php<?php if ($this->u) echo "?action=logout"?>"><?php echo $this->u ? "Sign Out" : "Sign In";?></a></li>
								</ul>
								</li>
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
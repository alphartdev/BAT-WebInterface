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
		</div>
	</nav>
<?php include("application/views/_template/modal-info.php");?>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
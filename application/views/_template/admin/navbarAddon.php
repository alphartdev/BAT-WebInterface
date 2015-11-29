<li class="divider-vertical"></li>
<li class="display-only"><a>Hi, <strong style="color: white; text-decoration: underline;"><?php echo $this->getUsername() ?></strong> !</a></li>
<li class="divider-vertical"></li>
<li><a href="index.php?p=admin">Panel</a></li>
<?php if($this->isSU()){?><li><a href="index.php?p=admin&action=manageaccounts">Accounts</a></li><?php }?>
<li><a href="#" onclick="logout();">Disconnect</a></li>
<!-- Some librairies or CSS files are only use in admin panel, so it's better to load them there -->
<!-- Datepicker includes -->
<script type="text/javascript" src="public/js/moment.js"></script>
<script type="text/javascript" src="public/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="public/css/bootstrap-datetimepicker.min.css" />
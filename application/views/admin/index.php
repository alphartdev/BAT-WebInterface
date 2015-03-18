<div class="container jumbotron">
	<h2 style="text-align: center">Bungee Admin Tools - Administration panel</h2>
	<p style="text-align: center">
	<?php if($this->isSU()){?>
	Welcome <?php echo $this->getUsername();?>! As an administrator with the superuser rights, 
	you can manage punishment of the players and handle the admin accounts. More will come in the next version. Stay tuned!<?php }else{?>
	Welcome <?php echo $this->getUsername();?>! As an administrator, you can manage punishment of the players.
	More will come in the next version. Stay tuned!
	<?php }?>
	</p>
</div>

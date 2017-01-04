<div class="well">
	<h2 style="text-align: center">Bungee Admin Tools - Administration panel</h2>
	<p style="text-align: center">
		<?php if($this->isSU()){?>
			<!-- Is admin with SU rights -->
			Welcome <?php echo $this->getUsername();?>! As an administrator <strong>with the superuser rights</strong>, 
			you can manage punishment of the players <strong>and handle the admin accounts</strong>. More will come in the next version. Stay tuned!
			
			<?php }else{?>
			
			<!-- Not admin with SU rights -->
			Welcome <?php echo $this->getUsername();?>! As an administrator, you can manage punishment of the players.
			More will come in the next version. Stay tuned!
		<?php }?>
	</p>
</div>

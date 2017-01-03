Helpful PHP:

Get username: <?php echo $this->getUsername();?>

Check if player is admin: <?php if($this->isSU()){?> INPUT CONTENT FOR ADMIN EYES ONLY HERE Then end admin content with: <?php }?>
OR instead of ending ALL content, you can use this: <?php }else{?> instead of this <?php }?> , input content for non-admins, and THEN put <?php }?> to end ALL content.
This is helpful to stop an error saying that, wait a minute, this isn't an admin... HALP!
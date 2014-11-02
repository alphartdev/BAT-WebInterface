<?php
class ClassLoader{
	
	public function loadClasses(){
		$foldersToLoad = array("application/controller", "application/models");
		foreach ($foldersToLoad as $folder){
			foreach(glob("$folder/*.php") as $filename)
			{
				include_once $filename;
			}
		}
		// Include some other classes
		include_once 'router.php';
	}
	
}
?>
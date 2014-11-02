<?php
class profile extends BaseController{
	private $model;
	
	public function __construct($action, $urlData){
		parent::__construct($action, $urlData);
		$this->model = new profile_model();
	}
	
	protected function index(){
		$player = (isset($this->urlData['player'])) ? $player = $this->urlData['player'] : null;
		if(!isset($player)){
			echo $this->getErrorPage("<strong>Please specify a player to view his profile ...</strong>");
			return;
		}
		echo $this->viewprofile($player);
	}

	public function searchplayer(){
		if(empty($this->urlData['term']) || strlen($this->urlData['term']) < 3){
			return;
		}
		$players = $this->model->getPlayersStartingWith($this->urlData['term']);
		$dataSet = array();
		$i = 0;
		foreach($players as $player){
			$entry = array(
				"id" => $i,
				"value" => $player
			);
			$i++;
			$dataSet[] = $entry;
		}
		echo json_encode($dataSet);
	}
	
	private function viewprofile($player){
		$this->action = ($this->isAdmin()) ? "../admin/administrateprofile" : "viewprofile";
		$pUUID = $this->model->getPlayerUUID($player);
		if($pUUID == null){
			echo $this->getErrorPage("<strong>This player was not found in the database ...</strong>");
			return;
		}
		$pData = $this->model->getPlayerData($pUUID);
		return $this->getView($pData->getData());
	}
}
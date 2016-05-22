<?php
class watch extends BaseController{
	private $model;
	private $sortByColumn;
	
	public function __construct($action, $urlData){
		parent::__construct($action, $urlData);
		$sortingColumn = parent::getSortingColumn();
		if(!isset($sortingColumn)){
			$sortingColumn = "date";
		}
		$this->sortByColumn = $sortingColumn;
		$this->model = new watch_model();
	}
	
	protected function index(){
		echo $this->listWatches();
	}

	private function listWatches(){
		$this->action = "listwatches";
		$watchEntries = $this->model->getWatchEntries($this->getPage(), 20, $this->sortByColumn);
		return $this->getView($watchEntries);
	}
	
	protected function unwatch(){
		if(!$this->isAdmin()){return;}
	
		if(empty($_POST['watch_id']) || $_POST['watch_id'] < 0 || !isset($_POST['unwatch_reason'])){
			echo "Invalid watch id";
			return;
		}
		$result = $this->model->disableWatch($_POST['watch_id'], $_POST['unwatch_reason'], $this->getUsername());
		echo $result;
	}
	
	protected function watch(){
		if(!$this->isAdmin()){return;}
	
		if(empty($_POST['player']) || empty($_POST['watch-server']) || empty($_POST['watch-expiration'])
				|| !isset($_POST['watch-reason'])){
			$answer = new AJAXAnswer("One or many parameters are missing !", false);
			echo $answer->getJSON();
			return;
		}
		$uuid = $this->model->getPlayerUUID($_POST['player']);
		if($uuid == null){
			$answer = new AJAXAnswer("Error : " . $_POST['player'] . "'s UUID can't be found.", false);
			echo $answer->getJSON();
			return;
		}
		$watchExpiration;
		if($_POST['watch-expiration'] == "definitive"){
			$watchExpiration = null;
		}else{
			$watchExpiration = DateTime::createFromFormat("m/d/Y h:i A", $_POST['watch-expiration']);
			$watchExpiration = $watchExpiration->format("Y-m-d H:i:s");
		}
	
		$result = $this->model->watch($uuid, $_POST['watch-server'], $watchExpiration, $this->getUsername(), $_POST['watch-reason']);
		echo $result;
	}
	
	public function getPaginationView(){
		return $this->generatePaginationView($this->getPage(), $this->model->getTotalPages(20));
	}
	
	public function getSortingColumn(){
		return $this->sortByColumn;
	}
}
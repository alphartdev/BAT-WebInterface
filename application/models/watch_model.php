<?php
class watch_model extends BaseModel{
	// Maps a column name to its real name in db
	private $sortByColumnMap;
	
	public function __construct(){
		parent::__construct();
		$this->sortByColumnMap = array(
				"player" => "UUID",
				"server" => "watch_server",
				"reason" => "watch_reason",
				"staff" => "watch_staff",
				"date" => "watch_begin DESC",
				"state" => "watch_state",
				"unwatch_date" => "watch_unwatchdate DESC, watch_end DESC",
				"unwatch_staff" => "watch_unwatchstaff",
				"unwatch_reason" => "watch_unwatchreason"
		);
	}
	
	public function getwatchEntries($pageNo, $entriesPerPage, $sortingColumn = "date"){
		if(!array_key_exists($sortingColumn, $this->sortByColumnMap)){
			$sortingColumn = "date";
		}
		
		$orderByColumn = $this->sortByColumnMap[$sortingColumn];
		$query = $this->database->prepare( "SELECT watchs.*, (SELECT players.BAT_player FROM BAT_players players
		WHERE watchs.UUID = players.UUID) as player FROM BAT_watch watchs ORDER BY ".$orderByColumn." LIMIT :offset, :limit;" );
		$offset = (($pageNo - 1) * $entriesPerPage);
		// Must manually bind parameters because of an old bug in PDO which forbid to add parameter to LIMIT statemnt ...
		$query->bindParam(":offset", $offset, PDO::PARAM_INT);
		$query->bindParam(":limit", $entriesPerPage, PDO::PARAM_INT);
		$query->execute();
		$watchEntries = array();
		while ( $data = $query->fetch () ) {
			$watchEntries[] = new WatchEntry($data);
		}
		return $watchEntries;
	}
	
	public function getTotalPages($entriesPerPage){
		$totalPages = 0;
		$result = $this->database->query("SELECT COUNT(*) FROM BAT_watch;");
		while( $data = $result->fetch()){
			$totalPages = ceil($data['COUNT(*)'] / $entriesPerPage);
		}
		if($totalPages < 1){
			$totalPages = 1;
		}
		return $totalPages;
	}
	
	public function getPlayerWatches($uuid){
		$query = $this->database->prepare( "SELECT * FROM BAT_watch WHERE UUID = :uuid ORDER BY watch_begin;" );
		$query->execute(array("uuid" => $uuid));
		$watchEntries = array();
		while ( $data = $query->fetch () ) {
			$watchEntries[] = new WatchEntry($data);
		}
		return $watchEntries;
	}
	
	public function disableWatch($watchID, $unwatchReason, $unwatchStaff){
		$query = $this->database->prepare("UPDATE BAT_watch SET watch_state = 0,
				watch_unwatchreason = :unwatch_reason, watch_unwatchstaff = :unwatch_staff, watch_unwatchdate = NOW()
				WHERE watch_id = :watchID AND watch_state = 1;");
		$query->execute(array(
				"unwatch_reason" => $unwatchReason,
				"unwatch_staff" => $unwatchStaff,
				"watchID" => $watchID));
		if($query->rowCount() > 0){
			$answer = new AJAXAnswer("Successfully unwatchd.", true);
			return $answer->getJSON();
		}else{
			$answer = new AJAXAnswer("Error : No active watch with this id!", false);
			return $answer->getJSON();
		}
	}
	
	public function watch($uuid, $watchServer, $watchExpiration, $watchStaff, $watchReason){
		$query = $this->database->prepare("INSERT INTO `BAT_watch`(UUID, watch_staff, watch_server, watch_end, watch_reason) 
				VALUES (:uuid, :staff, :server, :expiration, :reason)");
		if($watchExpiration == null){
			$query->bindParam(":expiration", $watchExpiration, PDO::PARAM_NULL);
		}else{
			$query->bindParam(":expiration", $watchExpiration);
		}
		$query->bindParam(":uuid", $uuid);
		$query->bindParam(":staff", $watchStaff);
		$query->bindParam(":server", $watchServer);
		$query->bindParam(":reason", $watchReason);
		$query->execute();
		if($query->rowCount() > 0){
			$answer = new AJAXAnswer("Watchd successfully!", true);
			return $answer->getJSON();
		}else{
			$answer = new AJAXAnswer("Error : the watch process has failed for unknown reason.", false);
			return $answer->getJSON();
		}
	}
}
class WatchEntry extends PunishmentEntry{
	private $headUrl;
	private $server;
	private $state;
	private $unwatchDate;
	private $unwatchStaff;
	private $unwatchReason;

	function __construct($data){
		$this->id = $data['watch_id'];
		if(isset($data['player'])){
			$this->player = $data['player'];
			$this->headUrl = "https://cravatar.eu/head/".$this->player."/32";
		}else{
			if(isset($data['watch_ip'])){
				$this->markAsIpPunishment();
				$this->player = $data['watch_ip'];
			}else{
				$this->player = $data['UUID'];
				$this->headUrl = "https://cravatar.eu/head/char/32";
			}
		}
		$this->server = ($data ['watch_server'] == "(global)") ? Message::globalPunishment : $data ['watch_server'];
		$this->reason = (empty($data ['watch_reason'])) ? Message::noReason : $data ['watch_reason'];
		$this->staff = $data ['watch_staff'];
		$this->date = $data['watch_begin'];
		$this->state = $data['watch_state'];
		if($this->state){
			if(isset($data['watch_end'])){
				$this->unwatchDate = $data['watch_end'];
				/* If the Bungee server is shutdown, the temp punishment won't be updated.
				 So we do the calculation here, but we don't touch to the database data ! */
				$unwatchDateTime = new DateTime($data['watch_end']);
				$currentTime = new DateTime("now");
				$interval = $unwatchDateTime->diff($currentTime);
				if($unwatchDateTime < $currentTime){
					$this->state = false;
				}
			}else{
				$this->unwatchDate = Message::noData;
			}
		}else{
			if(isset($data['watch_unwatchdate'])){
				if(isset($data['watch_end'])){
					$unwatchDateTime = new DateTime($data['watch_unwatchdate']);
					$endwatchDateTime = new DateTime($data['watch_end']);
					$interval = $unwatchDateTime->diff($endwatchDateTime);
					$this->unwatchDate = ($unwatchDateTime < $endwatchDateTime) ? $data['watch_unwatchdate'] : $data['watch_end'];
				}else{
					$this->unwatchDate = $data['watch_unwatchdate'];
				}
			}else{
				$this->unwatchDate = $data['watch_end'];
			}
		}
		$this->unwatchStaff = (isset($data ['watch_unwatchstaff'])) ? $data ['watch_unwatchstaff'] : Message::noData;
		$this->unwatchReason = (isset($data ['watch_unwatchreason'])) ? (($data ['watch_unwatchreason'] != "noreason") ? $data ['watch_unwatchreason'] : Message::noReason) : Message::noData;
	}

	/**
	 * Get an associative array with tag and their associated data
	 */
	function getData(){
		return array (
				"id" => $this->id,
				"headImg" => (isset($this->headUrl))
				? "<a href='?p=profile&player=$this->player'><img src='$this->headUrl'></a><br>" : "",
				"player" => $this->player,
				"server" => $this->server,
				"reason" => $this->reason,
				"staff" => $this->staff,
				"date" => $this->date,
				"state" => $this->state,
				"unwatch_date" => $this->unwatchDate,
				"unwatch_staff" => $this->unwatchStaff,
				"unwatch_reason" => $this->unwatchReason,
				"ipPunishment" => $this->isIPPunishment()
		);
	}
}

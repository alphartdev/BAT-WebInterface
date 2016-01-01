<?php
abstract class BaseController{
	protected $action;
	protected $urlData;
	
	function __construct($action, $urlData){
		$this->action = $action;
		$this->urlData = $urlData;
	}
	
	/**
	 * Execute the given action
	 */
	public function executeAction(){
		return $this->{$this->action}();
	}
	
	protected function getView($data){
		$viewloc = 'application/views/' . get_class($this) . '/' . $this->action . '.php';
		ob_start();
		require("application/views/_template/header.php");
		require($viewloc);
		$paginationView = $this->getPaginationView();
		require("application/views/_template/footer.php");
		$view = ob_get_contents();
		ob_end_clean();
		return $view;
	}
	
	protected function getPage(){
		$pageNo = 1;
		if(isset($this->urlData['pageNo']) && $this->urlData['pageNo'] > 0){
			$pageNo = $this->urlData['pageNo'];
		}
		return $pageNo;
	}
	
	protected function getErrorPage($errorDetails){
		ob_start();
		require("application/views/_template/header.php");
		require('application/views/_template/errorPage.php');
		require("application/views/_template/footer.php");
		$view = ob_get_contents();
		ob_end_clean();
		return $view;
	}
	
	protected function getSortingColumn(){
		$sortingColumn = null;
		if(!empty($this->urlData['sortBy'])){
			$sortingColumn = $this->urlData['sortBy'];
		}
		return $sortingColumn;
	}

	protected function generatePaginationView($currentPage, $totalPages) {

		if ($totalPages == 1) {
			return "";
		}

		$display = "<ul class='pagination'>";

		$stack = array();

		if ($totalPages <= 7) {
			// Just display 5 Pagination Buttons
			for ($i = 1; $i <= $totalPages; $i++) {
				array_push($stack, $i);
			}
		} else {

			$stack = array(1, $totalPages);

			if ($currentPage == 1) {
				// Add 5 following
				for ($i = 1; $i <= 5; $i++){
					array_push($stack, ($currentPage+$i));
				}
			} else if ($currentPage == $totalPages) {
				// Add 5 previous
				for ($i = 1; $i <= 5; $i++){
					array_push($stack, ($currentPage-$i));
				}
			} else {
				array_push($stack, ($currentPage));

				$missing1 = 2;
				$missing2 = 2;

				while (count($stack) < 7) {
					for ($i = 1; $i <= $missing1; $i++ ){
						$pageToAdd = $currentPage - $i;
						if (!in_array($pageToAdd, $stack) && $pageToAdd > 1) {
							array_push($stack, $pageToAdd);
						} else {
							$missing2++;
						}
					}

					for ($i = 1; $i <= $missing2; $i++ ){
						$pageToAdd = $currentPage + $i;
						if (!in_array($pageToAdd, $stack) && $pageToAdd < $totalPages) {
							array_push($stack, $pageToAdd);
						} else {
							$missing1++;
						}
					}
				}
			}
		}

		asort($stack);

		$lastval = 0;
		foreach ($stack as &$val) {
			if (($val - 1) != $lastval) {
				$display .= "<li class='disabled'><a href=''#‘>...</a></li>";
			}

			$lastval = $val;
			if ($val == $currentPage) {
				$display .= "<li class='active'><a href='#' onClick='choosePage($val)'> $val </a></li>";
			} else {
				$display .= "<li><a href='#' onClick='choosePage($val)'>$val</a></li>";
			}
		}

		$display .= "</ul>";
		return $display;
	}
	
	/**
	 * Should be override if there is a pagination system
	 */
	public function getPaginationView(){
		return null;
	}
	
	protected function isAdmin(){
		return isset($_SESSION['username']);
	}
	
	protected function isSU(){
		return $this->isAdmin() && $_SESSION['status'] == "superuser";
	}
	
	protected function getUsername(){
		return ($this->isAdmin()) ? $_SESSION['username'] : "non-auth-user";
	}
	
	/**
	 * Display index page of the Controller
	 */
	protected abstract function index();
}
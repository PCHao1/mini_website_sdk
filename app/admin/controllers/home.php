<?php
require_once APP_PATH . '/app/init/controller.php';

class Home extends Controller
{
	public function __construct()
	{
		parent::__construct('admin');
		// validate user
		$isValid = false;
		if (isset($_SESSION['userName']) && isset($_SESSION['password'])) {
			if ($_SESSION['userName'] == GLOB_VAR['ADMIN_NAME']&&
			$_SESSION['password'] == GLOB_VAR['ADMIN_PASS']){
				$isValid = true;
			}
		}
		if (!$isValid) {
			$this->view->forceReader("login/index");
			die("");
		}
	}
	
	public function home()
	{
		$this->model->validate("");
		$this->view->render("home/index");
	}
}

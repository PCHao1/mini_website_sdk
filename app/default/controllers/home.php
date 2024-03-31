<?php
require_once APP_PATH . '/app/init/controller.php';

class Home extends Controller
{
	public function home()
	{
		$this->view->render("home/index");
	}
}

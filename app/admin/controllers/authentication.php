
<?php
require_once APP_PATH . '/app/init/controller.php';

class Authentication extends Controller
{
	public function __construct()
	{
		parent::__construct('admin');
	}

	public function login()
	{
		$name = $_GET["userName"] ?? '';
		$password = $_GET["password"] ?? '';
		if ($name == '' && $password == '') {
			$this->view->forceReader('login/index');
			return;
		}
		if (
			$name == GLOB_VAR['ADMIN_NAME'] &&
			$password == GLOB_VAR['ADMIN_PASS']
		) {
			//Login success
			$_SESSION['userName'] = GLOB_VAR['ADMIN_NAME'];
			$_SESSION['password'] = GLOB_VAR['ADMIN_PASS'];
			header('Location: /admin');
		}
		$this->view->data['fail'] = true;
		$this->view->forceReader('login/index');
	}

	public function logout()
	{
		session_destroy();
		header('Location: /admin');
	}
}

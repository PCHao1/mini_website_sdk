<?php
require_once APP_PATH . '/app/init/router.php';
class Loader
{
	private $moduleName;
	private $controllerName;
	private $actionName;
	private $routers = [];
	private $urlParams = [];

	function __construct()
	{
		$this->setRouter();

		$this->mapURL();
	}

	public function load()
	{
		$controllerFile = APP_PATH . '/app/' . $this->moduleName . '/controllers/' . $this->controllerName . ".php";
		if (file_exists($controllerFile)) {
			require_once $controllerFile;
			$controller = new $this->controllerName($this->moduleName);
			if (method_exists($controller, $this->actionName)) {
				call_user_func_array(
					[$controller, $this->actionName],
					$this->urlParams
				);
			} else {
				$this->notFound();
			}
		} else {
			$this->notFound();
		}
	}

	public function notFound()
	{
		require_once APP_PATH . '/app/libraries/errors.php';
		$errors = new Errors();
		$errors->notFound();
	}

	private function mapURL()
	{
		$method = $_SERVER['REQUEST_METHOD'];

		$url = 'index.php';
		if (isset($_GET['url'])) {
			$url = $_GET['url'];
		}

		$url = rtrim($url, '/');

		$url = ($url == 'index.php') ? '/' : ('/' . $url);

		foreach ($this->routers as $router) {
			if ($method == $router['method']) {
				$flagMapURL = false;
				if ($url == $router['url']) {
					$flagMapURL = true;
				} else {
					$urlParams = explode('/', $url);
					$routerParams = explode('/', $router['url']);

					if (count($urlParams) == count($routerParams)) {
						$flagMapParams = false;
						foreach ($urlParams as $key => $urlParam) {
							if (preg_match('/^{\w+}$/', $routerParams[$key])) {
								$this->urlParams[] = $urlParam;
								$flagMapParams = true;
							} else {
								if ($urlParam == $routerParams[$key]) {
									$flagMapParams = true;
								} else {
									$flagMapParams = false;
									break;
								}
							}
						}

						if ($flagMapParams) {
							$flagMapURL = true;
						}
					}
				}

				if ($flagMapURL) {
					$this->moduleName = $router['routing']['module'];
					$this->controllerName = $router['routing']['controller'];
					$this->actionName = $router['routing']['action'];
					$GLOBALS['page_title'] = $router['routing']['title'] ?? '';
					break;
				}
			}
		}
	}

	private function setRouter()
	{
		$router = new Router();
		$this->routers = $router->routers;
	}
}

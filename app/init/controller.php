<?php
class Controller{
	protected $view;
	protected $model;

	function __construct($moduleName){
		require_once APP_PATH . '/app/init/view.php';
		$this->view = new View();
		$this->view->moduleName = $moduleName;

		$modelPath = APP_PATH . '/app/' . $moduleName . '/models/index.php';
		if (file_exists($modelPath)) {
			require_once $modelPath;
			$modelName = $moduleName . 'Model';
			$this->model = new $modelName;
		}
	}
}
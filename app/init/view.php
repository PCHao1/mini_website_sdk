<?php
require_once APP_PATH . '/app/libraries/load_yaml.php';
class View
{
	public $moduleName;
	public $data;
	public $t; // language

	public function __construct()
	{
		// Load translation
		$languagePath = APP_PATH . '/app/config/lang-' . GLOB_VAR['DEFAULT_LANG'] . '.yaml';
		if (file_exists($languagePath)) {
			$this->t = load_yaml_file($languagePath);
		}
	}

	public function render($fileName)
	{
		$contentFile = APP_PATH . '/app/' . $this->moduleName . '/views/' . $fileName . '.php';

		include_once APP_PATH . '/app/' . $this->moduleName . '/views/index.php';
	}

	// Load translations
	public function t($key)
	{
		return $this->t[$key] ?? $key;
	}
}

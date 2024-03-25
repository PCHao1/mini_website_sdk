<?php
require_once APP_PATH . '/app/init/model.php';

class AdminModel extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function validate($token){
		return;
	}
}
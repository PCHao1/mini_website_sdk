<?php
class Router{
	public $routers = [];

	public function __construct()
	{
		// Consumer page
		$this->get('/',
			[
				'module'	=> 'default',
				'controller'=> 'home',
				'action'	=> 'home'
			]
		);

		// Admin page
		$this->get('/admin',
			[
				'module'	=> 'admin',
				'controller'=> 'home',
				'action'	=> 'home'
			]
		);
		$this->get('/login',
			[
				'module'	=> 'admin',
				'controller'=> 'authentication',
				'action'	=> 'login'
			]
		);
		$this->post('/logout',
			[
				'module'	=> 'admin',
				'controller'=> 'authentication',
				'action'	=> 'logout'
			]
		);

		// APIs

	}

	public function get($url = '', $routing = ['module' => '','controller' => '', 'action' => '']){
		$this->routers[] = [
			'method'	=> 'GET',
			'url' 		=> $url,
			'routing' 	=> $routing
		];
	}

	public function post($url = '', $routing = ['module' => '','controller' => '', 'action' => '']){
		$this->routers[] = [
			'method'	=> 'POST',
			'url' 		=> $url,
			'routing' 	=> $routing
		];
	}
}
<?php namespace Config;

	class Request{

		private $controller;
		private $method;
		private $argument;

		public function __construct(){
			if(isset($_GET['url'])){
				$route = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
				$route = explode("/", $route);
				$route = array_filter($route);

				$this->controller = strtolower(array_shift($route));
				//Si no defino un controlar, cargo por defecto el home
				if($this->controller == 'index.php'){
					$this->controller = 'home';
				}

				$this->method = strtolower(array_shift($route));
				//sino defino un metodo, cargo por defecto el index
				if(!$this->method){
					$this->method = "index";
				}

				$this->argument = $route;
				if(is_array($this->argument)){
					$this->argument = array_shift($this->argument);
				}
				
			}
			else{
				$this->controller = 'home';
				$this->method = "index";
			}
		}

		public function getController(){
			return $this->controller;
		}

		public function getMethod(){
			return $this->method;
		}

		public function getArgument(){
			return $this->argument;
		}
	}

?>
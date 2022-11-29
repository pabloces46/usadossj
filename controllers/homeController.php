<?php namespace Controllers;

	class homeController
	{
		public function index()
		{
			//print "Estoy en homeController";
			$route =  ROOT . "views/pages/home/index.php";
			require_once $route;
		}

		public function mostrar($Num = '')
		{
			$route =  ROOT . "views/pages/home/mostrar.php";
			require_once $route;
		}
	}



?>
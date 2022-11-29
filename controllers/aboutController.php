<?php namespace Controllers;

	class aboutController
	{
		public function index()
		{
			$route =  ROOT . "views/pages/about/index.php";
			require_once $route;
		}
	}

?>
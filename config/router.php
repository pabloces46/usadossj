<?php namespace Config;

	class Router{

		public static function run(Request $request)
		{
			$controller = $request->getController() . "Controller";
			$routeController = ROOT . 'Controllers' . DS . $controller . ".php";
			$method = $request->getMethod();
			$argument = $request->getArgument();

			if(is_readable($routeController)){
				require_once $routeController;
				$controller_name = "Controllers\\".$controller;
				$controller = new $controller_name;
				
				if(method_exists($controller, $method)){

					if(!isset($argument)){
						$data = call_user_func(array($controller, $method));
					}
					else{
						$data = call_user_func(array($controller, $method), $argument);
					}
				}
				/*else
				{	
					call_user_func(array($controller, "index"));
				}*/
			}

			//Cargar la vista 404
			
			$route =  ROOT . "views" . DS . "pages" . DS . $request->getController() . DS . $request->getMethod() . ".php";

			if(!is_readable($route))
			{
				require_once(ROOT . "views" . DS . "pages" . DS . "404". DS . "index.php");
			}
		}
	}

?>
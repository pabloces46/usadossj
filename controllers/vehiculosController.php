<?php namespace Controllers;
	
	require_once 'models/conection.php';

	class vehiculosController
	{

		public function detalles($id = null)
		{	
			if($id){
				$seller_phone = "2645641744";
				
				$route =  ROOT . "views/pages/vehiculos/detalles.php";
				require_once $route;
			}
			else
			{
				header("Location:".URL.'home');
			}
			
		}


		public function newCar()
		{	
			$route =  ROOT . "views/pages/vehiculos/newcar.php";
			require_once $route;
		}

		public function getTypeList()
		{
			$db_con = new Conection;
			//$sql = "SELECT * FROM tbl_tipo_vehiculo";
			//$result = $db_con->consultaRetorno($sql);
		}

	}

?>
<?php namespace Models

class TypeListModel
{	
	private $id;
	private $nombre;
	private $con;
	
	public function __construct(argument)
	{
		$this->con = new Conection();
	}

	public function listar()
	{
		$sql = "SELECT * FROM tbl_tipo_vehiculo";
		$datos = $this->con->consultaRetorno($sql);
		return $datos;
	}

}

?>
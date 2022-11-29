<?php 

class vehiculoModel
{
	private $id;
	private $nombre;
	private $db;

	public function __construct(){
		$this->db = dataBase::connect();
	}

	public function __get($property) {
		if (property_exists($this, $property)) {
		  return $this->$property;
		}
	}

	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->$property = $this->db->real_escape_string($value);
		}
		return $this;
	}

	public function getCategorias()
	{	

		$sql = "SELECT * FROM categorias order by nombre desc";
		$categorias = $this->db->query($sql);
		
		return $categorias;
	}

	public function save()
	{
		$sql = "INSERT INTO categorias VALUES (Null,'{$this->nombre}')";
		$save = $this->db->query($sql);

		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}

}
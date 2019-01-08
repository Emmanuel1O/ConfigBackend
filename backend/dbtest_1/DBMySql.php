<?php

class DBMySql extends BaseDeDatos
{
	protected $conexion;
	
	public function __construct($servidor,$usuario,$password,$db,$puerto=3306){
		parent::__construct($servidor,$usuario,$password,$db,$puerto,'mysql');
		$this->conexion = mysqli_connect($this->servidor.':'.$this->puerto,$this->usuario,$this->password);
		mysqli_select_db($this->db);
	}
	
	public function setQuery($query){
		//$query = mysql_real_escape_string($query);
		return $this->idConsulta = mysqli_query($query);
	}
	
	public function queryToArray(){
		return mysqli_fetch_assoc($this->idConsulta);
	}
	
	public function __destruct(){
		mysqli_close($this->conexion);
	}
	
	public function verConfiguracion(){
		parent::verConfiguracion();
	}
	
	public function consulta($consulta){
		$this->conexion('localhost','root','','bus',3306);
		$this->setQuery($consulta);
	}
	
}

?>
<?php

require "config.php";


	/**
	 * 
	 */
	class Conexion
	{
		protected $conexionDB;

		public function __construct(){
			try{
				$this->conexionDB=new PDO("mysql:host=".DB_HOST.";"."dbname=".DB_NAME."",DB_USER,DB_PASS);
				$this->conexionDB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$this->conexionDB->exec("SET CHARACTER SET ".DB_CHARSET);

				return $this->conexionDB;
			}catch(Exception $ex){
				echo "La conexion tuvo un error \n";
				echo "El error de la conexion es".$ex->getMessage()."\n";
				echo "La linea es".$ex->getLine();
			}
		}
		
		
		public function conectar(){
			return $this->conexionDB;		
		}
		
	}

?>
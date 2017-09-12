<?php 

/**
* 
*/
class BD
{
	const HOST = 'LOCALHOST';
	const USER = 'root';
	const PSWD = '';
	const DATABASE = 'invercity';

	public function conexion()
	{
		try {
			return mysqli_connect(self::HOST, self::USER, self::PSWD, self::DATABASE);	
		} catch (Exception $e) {
			return "Failed to connect to MySQL: " . $e.message();
		}
	}

	public function fetchData($query){
		$consulta = $query;//limpiar la variable
		$arrayName = array();
		$conection = $this->conexion();
		if ($resultado = $conection->query($consulta)) {		    
		    
		    foreach ($resultado as $value) {
		    	
		     	array_push($arrayName, $value);        
		    }
		    
		}

		$conection->close();
		return $arrayName;
	}



}


 ?>
<?php
class DBManager{
	protected $credentials = array(
		"host"	=> "localhost",
		"user"	=> "root",
		"pass"	=> "",
		"db"	=> "testing"
	);

	public function DBManager(){
		$this->ConnectToServer();
	}

	protected function ConnectToServer(){
		mysql_connect($this->credentials["host"],$this->credentials["user"],$this->credentials["pass"]);
		mysql_select_db($this->credentials["db"]);
	}

	function Insert($table_name,$data){
		$parameters = "";

		$len =  count($data);
		$i = 0;

		foreach($data as $key => $value){
			//If the next iteration is the last iteration
			//then we don't need to add a comma at the end
			if(++$i === $len){
				$parameters .= $key . "='$value'";					
			}else{
				$parameters .= $key . "='$value',";
			}
		}

		$query = "INSERT INTO $table_name SET $parameters";
		mysql_query($query) or die(mysql_error());
	}
}
?>
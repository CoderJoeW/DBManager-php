<?php
class DBManager{
	protected $credentials = array(
		"host"	=> "localhost",
		"user"	=> "root",
		"pass"	=> "password",
		"db"	=> "test"
	);

	public static function DBManager(){
		$this->ConnectToServer();
	}

	protected function ConnectToServer(){
		mysql_connect($this->credentials["host"],$this->credentials["user"],$this->credentials["pass"]);
		mysql_select_db($this->credentials["db"]);
	}
}
?>
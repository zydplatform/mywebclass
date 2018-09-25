<?php 
require_once('config.php');
class Database{
	private $conn;
	private $real_escape_string_exist;
	private $magic_quotes;
	public $sql_string;

	function __construct() {
		$this->open_connection();
		$this->real_escape_string_exist=function_exists("mysqli_real_escape_string");
		$this->magic_quotes=get_magic_quotes_gpc();
	}
	public function open_connection(){
		$this->conn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
		if (!$this->conn) {
			echo "Problem in connecting to database";
			exit();
		}
		else{

		$db_select=mysqli_select_db($this->conn,DB_NAME);
		if (!$db_select) {
			echo "problem in selecting database";
			exit();
		}
	}
}

	 function setQuery($sql=''){
	$this->sql_string=$sql;
}
	function executeQUery(){
	$result=mysqli_query($this->conn,$this->sql_string);
	$confirm=comfirm_query($result);
	return $result;


}

}
$mydb = new Database();

 ?>

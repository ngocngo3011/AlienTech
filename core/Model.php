<?php
class Model{
	protected $db;
	function __construct(){
		global $DB_NAME,$DB_USER, $DB_PASSWORD;
		$this->db = new PDO("mysql:host=125.234.104.133;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
		// $this->db->exec("SET CHARACTER SET utf8");

	}
}
?>


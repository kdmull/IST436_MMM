<?php
	
class database {
	
	private $field;
	private $table;
	private $where;
	private $values;
	private $set;
	private $mysqli;

	function __construct()
	{
		$this->mysqli = new mysqli("isat-cit.marshall.edu","mmm","mmm","mmm");

		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
  
  
	function select($field, $table, $where)
	{
		
		$result = $this->mysqli->query("SELECT " . $field . " FROM " . $table . " WHERE " . $where); 
		return $result;
	 
	}		

	function fetch($res)
	{
		$row = $res->fetch_array();
		return $row;
	 
	}		
	function insert($table, $values)	
	{
		$this->mysqli->query("INSERT INTO " . $table . " VALUES " . $values); 
		
	}

	function delete($table, $where)
	{
		$this->mysqli->query("DELETE FROM " . $table . " WHERE " . $where);
	}

	function update($table, $set, $where)
	{
		$this->mysqli->query("UPDATE " . $table . " SET " . $set . " WHERE " . $where);
	}
}

?>
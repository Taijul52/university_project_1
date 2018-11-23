<?php

class database 
{
	public $host=DB_HOST;
	public $user=DB_USER;
	public $pass=DB_PASS;
	public $name=DB_NAME;


	public $link;
	public $error;

	public function __construct(){
		$this->bdconnection();
	}

	private function bdconnection(){
		$this->link= new mysqli($this->host,$this->user,$this->pass,$this->name);

		if (!$this->link) {
			$this->error="Connection fail".$this->link->connect_errror;
			return false;
		}
	}

	//select data from database
	public function select($query){
		$result= $this->link->query($query) or die($this->link->error.__LINE__);
		if ($result->num_rows>0) {
			return $result;
		}
		else
			return false;
	}
	//create data
	public function create($query){
		$result=$this->link->query($query) or die($this->link->error.__LINE__);
		if ($result) {
			header("Location:index.php?msg=".urlencode("data inserted successfully"));
			exit();
		}
		else{
			die("Error:(".$this->link->errno.")".$this->link->error);
		}
	}
	//update data
	public function update($query){
		$result=$this->link->query($query) or die($this->link->error.__LINE__);
		if ($result) {
			header("Location:index.php?msg=".urlencode("data updated successfully"));
			exit();
		}
		else{
			die("Error:(".$this->link->errno.")".$this->link->error);
		}
	}
	//delete data
	public function delete($query){
		$result=$this->link->query($query) or die($this->link->error.__LINE__);
		if ($result) {
			header("Location:index.php?msg=".urlencode("data deleted successfully"));
			exit();
		}
		else{
			die("Error:(".$this->link->errno.")".$this->link->error);
		}
	}

}

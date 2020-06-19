<?php 
	require_once('Connection.php');
	class Model{
		var $connection;
		var $table='';

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function All(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM ".$this->table;

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}
		function find($id){
			$query="SELECT * FROM ".$this->table." where id=" .$id;

			return $this->connection->query($query)-> fetch_assoc();
		}
		function create($data){
			$f="";
			$v="";
			// echo "<pre>";
			// 	print_r($data);
			// echo "</pre>";
			foreach ($data as $key => $value) {
				$f .= $key.",";
				$v .="'".$value."',";
				//echo "<br> $v";
			}
			$f=trim($f,",");
			$v=trim($v,",");
			//echo "<br> $f";
			 $query = "INSERT INTO ".$this->table."(".$f.") VALUES (".$v.")";
			 //echo "<br> $query";
			return $this->connection->query($query);
		}
		function update($data){
			$v="";
			foreach ($data as $key => $value) {
				$v .=$key."='".$value."',";
			}
			$v=trim($v,",");
			$query = "UPDATE ".$this->table." set ".$v."  WHERE id=".$data['id'];

			return $this->connection->query($query);
		}
		function delete($id)
		{
			$query="DELETE FROM ".$this->table." where id=".$id;

			return $this->connection->query($query);
		}
	}

 ?>
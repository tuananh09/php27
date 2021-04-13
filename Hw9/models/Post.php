<?php 
	require_once('Connection.php');
	class Post{
		var $connection;

		function __construct(){
			$connection_obj = new Connection();
			$this->connection = $connection_obj->conn;
		}

		function all(){
			$sql = "SELECT * FROM posts";
				// Thực thi câu lệnh
			$result = $this->connection->query($sql);

				// Tạo 1 mảng để chứa dữ liệu
			$posts = array();

			while($row = $result->fetch_assoc()) { 
				$posts[] = $row;
			}

			return $posts;
		}

		function find($id){
			$sql = "SELECT * FROM posts WHERE id=".$id;
				// Thực thi câu lệnh
			return $this->connection->query($sql)->fetch_assoc();
		}

		function create($data){
			$sql = "INSERT INTO posts (title, description, category_id, content) VALUES ('".$data['name']."', '".$data['description']."', '".$data['category_id']."', '".$data['content']."')";
			return $this->connection->query($sql);
		}
		
		public function delete($id){
			$sql = "DELETE FROM posts WHERE id = ".$id;
	    return $this->connection->query($sql); 
		}

		function update($data){
			$sql = "UPDATE posts SET name = '".$data['name']."', description = '".$data['description']."' WHERE id ='".$data['id']."'";
			return $this->connection->query($sql);
		}
}
 ?>
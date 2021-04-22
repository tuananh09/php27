 <?php 
	require_once('connection.php');
	class Model{
		var $table;
		var $connection;

		function __construct(){
			$conn = new Connection();
			$this->connection = $conn->connection;
		}

		function all(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM ".$this->table;

		    $this->table = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$this->table[] = $row;
		    }

		    return $this->table;
		}

		function findByCategory($id){
	    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM ".$this->table." WHERE category_id = ".$id;

		    $this->table = array();
// die($query);
		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$this->table[] = $row;
		    }

		    return $this->table;
		}

		function find($id){
			$query = "SELECT * FROM ".$this->table." WHERE id= ".$id;

			return $this->connection->query($query)->fetch_assoc();

			// return $result->fetch_assoc();
			// 
			// echo $query;
		}

		public function create($data){
			$table = '';
			$val = '';
			foreach ($data as $key => $value) {
				$table .= $key . ',';
				switch ($key) {
					case 'password':
						$val .= "md5('" . $value . "'),";
						break;
					
					case 'parent_id':
						$val .= $value . ",";
						break;

					default:
						$val .= "'" . $value . "',";
						break;
				}
			}
			$table = trim($table, ',');
			$val = trim($val, ',');
			$sql = "INSERT INTO " . $this->table . "($table) VALUES($val)";
			$result = $this->connection->query($sql);

			return $result;		
		}

		function delete($id){
		    $query = "DELETE FROM ".$this->table." WHERE id = ".$id;

		    return $this->connection->query($query);

		    // echo "$query";
		}



		function update($data, $id){
			$core = '';

			// echo "<pre>";
			// 	print_r($data);
			// echo "</pre>";

			foreach ($data as $key => $value) {
				switch ($key) {
					case 'password':
						$core .= $key . "=md5('" . $value . "'),";
						break;
					
					case 'parent_id':
						$core .= $key . "=" . $value . ",";
						break;

					default:
						$core .= $key . "='" . $value . "',";
						break;
				}
			}

			$core = trim($core,',');
			$query = "UPDATE ".$this->table." SET ".$core." WHERE  id = $id";

			return $this->connection->query($query);

			// echo $query;
		}
	}


 ?>
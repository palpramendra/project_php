<?php 

	Class Model{

		private $server = "localhost";
		private $username = "root";
		private $password;
		private $db = "form";
		private $conn;

		public function __construct(){
			try {
				
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMessage();
			}
		}

		public function insert(){

			if (isset($_POST['submit'])) {
				if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['date']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['course'])) {
					if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['date']) && !empty($_POST['email']) && !empty($_POST['mobile']) && isset($_POST['gender']) && !empty($_POST['address']) && !empty($_POST['course'])) {
						
						$fname = $_POST['fname'];
						$lname = $_POST['lname'];
						$date = $_POST['date'];
						$email = $_POST['email'];
						$mobile = $_POST['mobile'];
						$gender = $_POST['gender'];
						$address = $_POST['address'];
						$course = $_POST['course'];

						$query = "INSERT INTO record (fname,lname,date,email,mobile,gender,address,course) VALUES ('$fname','$lname','$date','$email','$mobile','$gender','$address','$course')";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('records added successfully');</script>";
							echo "<script>window.location.href = 'index.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'index.php';</script>";
						}

					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'index.php';</script>";
					}
				}
			}
		}

		public function fetch(){
			$data = null;

			$query = "SELECT * FROM record";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}

		public function delete($id){

			$query = "DELETE FROM record where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function fetch_single($id){

			$data = null;

			$query = "SELECT * FROM record WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while ($row = $sql->fetch_assoc()) {
					$data = $row;
				}
			}
			return $data;
		}

		public function edit($id){

			$data = null;

			$query = "SELECT * FROM record WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function update($data){

			$query = "UPDATE record SET fname='$data[fname]', lname='$data[lname]', date='$data[date]', email='$data[email]', mobile='$data[mobile]', gender='$data[gender]', address='$data[address]', course='$data[course]' WHERE id='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
	}

 ?>
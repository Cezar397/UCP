<?php
	
	require("../../model/dbconnect.php");
	
	class Confirm
	{
		private $token;
		private $email;
		private $conn;

		public function __construct()
		{
			$this->token = trim($_POST["Token"]);
			$this->email = $_SESSION["email"];
			$this->conn = new Connect_To_Database;
		}

		public function check_token()
		{
			$stmt = $this->conn->make_db_login()->prepare("SELECT Token FROM users WHERE Email = '$this->email'");
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			$token = implode("|", $row);

			if($this->token == $token)
				return true;
			return false;
		}

		public function execute()
		{
			if($this->check_token())
			{
				header("Location: ../../index.php");
				$_SESSION["login_step"] = 0;
			}
			else
			{
				header("Location: ../../index.php?status=fail");
				$_SESSION["login_step"] = 2;
			}
		}
	}

	$confirm = new Confirm;

	$confirm->execute();


?>
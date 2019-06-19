<?php	
	require("../../model/dbconnect.php");

	class Login
	{
		private $user_email;
		private $user_password;
		private $conn;

		public function __construct()
		{
			$this->user_email = trim($_POST["user_email"]);
			$this->user_password = htmlentities($_POST["user_password"]);
			$this->conn = new Connect_To_Database;
		}


		private function check_camps()
		{

			if((empty($_POST["user_email"])) || (!isset($_POST["user_email"])))
				return false;

			if((empty($_POST["user_password"])) || (!isset($_POST["user_password"])))
				return false;

			return true;
		}

		private function return_check_camps()
		{
			if($this->check_camps() == false)
			{
				header("Location: ../../index.php?status=camps");
				exit(0);
			}
			else
				return true;
		}

		public function check_mail_exist()
		{
			try
			{
			$stmt = $this->conn->make_db_login()->prepare("SELECT Email FROM users WHERE Email = '$this->user_email'");
			//$stmt->bindParam(1, $this->user_email, PDO::PARAM_INT);
			$stmt->execute();

			if($stmt->rowcount())
				return true;
			return false;
			}catch(PDOException $e)
			{
				echo "Unknown function".$e->getMessage();
				
			}
		}

		public function pass_verify()
		{

			$stmt = $this->conn->make_db_login()->prepare("SELECT Password FROM users WHERE Email = '$this->user_email'");
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			
			$pass = implode("|", $row);

			if(password_verify($this->user_password, $pass))
				return 1;
			return 0;
		}


		public function login()
		{
			if($this->return_check_camps())
			{
				if($this->check_mail_exist())
				{
					if($this->pass_verify())
					{
						$_SESSION["login_step"] = 2;
						$_SESSION["email"] = $this->user_email;
						header("Location: ../../index.php?status=success");
					}
					else
					{
						header("Location: ../../index.php?status=parola");
					}
				}
				else
				{
					header("Location: ../../index.php?status=emailexista");
				}
			}
			else
			{
				header("Location: ../../index.php?status=campuriobl");
			}
		}
	}


	$test = new Login;

	echo $test->login();
?>
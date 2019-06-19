<?php
	
	class Connect_To_Database
	{
		private $db_user;
		private $db_name;
		private $db_pass;
		private $db_host;


		public function __construct()
		{
			$this->db_user = "root";
			$this->db_name = "uac";
			$this->db_pass = "";
			$this->db_host = "localhost";
		}

		public function make_db_login()
		{
			try
			{
				$connect = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
				$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				return $connect;
			}catch(PDOException $e)
			{
				echo "Connection failed".$e->getMessage();
			}
			
		}
	}

?>
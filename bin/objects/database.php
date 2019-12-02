<?php
    class Database{
        public $conn;
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "cinema";
        function __construct()
        {
           $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        }
    }
?>
<?php 
    class Connection {
        private $conn;

        function __construct() {
            //connection to MySQL 
            $this->conn = new mysqli ("localhost","root","");
            if (!is_null($this->conn->connect_error)) {
                die ("Error: " . $this->conn->connect_error);
            }

            //database import
            $db = file_get_contents('./database/hub.sql');
            $this->conn->multi_query($db);
            while ($this->conn->next_result()) {        // flush multi_queries
                if (!$this->conn->more_results()) break;
            }

            //select database 
            $this->conn->select_db('hub');

            //adding admin
            $this->conn->query("INSERT IGNORE INTO `users`(`id`, `username`, `password`, `email`, `admin`) VALUES (1,'admin','$2y$10$64gjbk2O2zYUGgCiiY764OsUlEKyOehkoVHWcWYWta0p5nRfLpYiO','admin@admin.com',1)");

            //  ADMIN INFO:
            //      USERNAME = admin 
            //      PASSWORD = admin
            //      EMAIL = admin@admin.com
        }

        function getDB() {
            $rez = $this->conn->query("SELECT DATABASE()");
            var_dump($rez->fetch_assoc());
        }

        function getMenu() {
            $query = $this->conn->query("SELECT * FROM `products`");
            $result = array();
            foreach ($query as $row) {
                array_push($result, $row);
            }
            return $result;
        }
    }

    $conn = new Connection();
    $menu = $conn->getMenu();
    // var_dump($menu);
    
?>
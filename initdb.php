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

        function setCart($customerID, $cart_items_ids) {
            $cart_items = json_encode($cart_items_ids, JSON_FORCE_OBJECT);

            $prepared = $this->conn->prepare("SELECT * FROM `cart` WHERE `customerID` = ?");
            $prepared->bind_param("s", $customerID);
            $prepared->execute();
            $rez = $prepared->get_result();

            if ($rez->num_rows == 1) {
                $prepared = $this->conn->prepare("UPDATE `cart` SET `cart_items_ids`= ? WHERE `customerID` = ?");
                $prepared->bind_param("ss", $cart_items, $customerID);
                $prepared->execute();
            } else {
                $prepared = $this->conn->prepare("INSERT INTO `cart`(`customerID`, `cart_items_ids`) VALUES (?,?)");
                $prepared->bind_param("ss", $customerID, $cart_items);
                $prepared->execute();
            }
            return 1;
        }

        function getDelivery() {
            $query = $this->conn->query("SELECT * FROM `cart_settings` WHERE `id` = 1");
            $res = $query->fetch_assoc();
            return $res['delivery'];
        }

        function getDiscount() {
            $query = $this->conn->query("SELECT * FROM `cart_settings` WHERE `id` = 1");
            $rez = $query->fetch_assoc();
            return $rez['discount'];
        }

        function getCart($customerID) {
            $prepared = $this->conn->prepare("SELECT * FROM `cart` WHERE `customerID` = ?");
            $prepared->bind_param("s", $customerID);
            $prepared->execute();
            $res = $prepared->get_result();

            if ($res->num_rows == 1) {
                $row = $res->fetch_assoc();
                $cart_items = json_decode($row['cart_items_ids'], JSON_OBJECT_AS_ARRAY);
                return $cart_items;
            }
            return 0;
        }

        function getPriceOfItem($id) {
            $query = $this->conn->query("SELECT `price` FROM `products` WHERE `id` = '$id'");
            $res = $query->fetch_assoc();
            return (int)$res['price'];
        }

        function setOrder(string $name,string $surname,string  $phone,string  $address,string  $time_of_purchase,string  $item_ids, int $total_price) {
            $prepared = $this->conn->prepare("INSERT INTO `orders`(`name`, `surname`, `phone`, `address`, `time_of_purchase`, `items_ids`, `total_price`) VALUES (?,?,?,?,?,?,?)");
            $prepared->bind_param("ssssssi", $name, $surname, $phone, $address, $time_of_purchase, $item_ids, $total_price);
            if ($prepared->execute() == true) return 1;
            return 0;
            
        }
    }

    $conn = new Connection();
    $menu = $conn->getMenu();
    // var_dump($menu);
    
?>
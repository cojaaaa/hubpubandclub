<?php 
    session_start();
    require_once ('./initdb.php');

    $data = json_decode(file_get_contents("php://input"));
    if(isset($data->id)) {
        unset($_SESSION["cart"][$data->id]);
        $conn->setCart($_SESSION['customerID'], $_SESSION['cart']);
        echo '{"response": "success(item removed)", "cart_count": "' . count($_SESSION["cart"]) . '", "row_to_remove": "' . $data->id . '"}';
    } else {
        echo '{"response":"error"}';
    }
?>
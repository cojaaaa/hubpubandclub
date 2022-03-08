<?php 
    session_start();
    require_once ('./initdb.php');

    $data = json_decode(file_get_contents("php://input"));
    if(isset($data->id)) {
        array_push($_SESSION["cart"], $data->id);
        echo '{"response": "success", "cart_count": "' . count($_SESSION["cart"]) . '"}';
    } else {
        echo '{"response":"error"}';
    }
?>
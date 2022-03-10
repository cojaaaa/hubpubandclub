<?php 
    session_start();
    var_dump($_SESSION);
    require_once ('./initdb.php');
    // $_SESSION["cart"] = [];
    // if (!isset($_SESSION['customerIDxxx'])) $_SESSION['customerIDxxx'] = uniqid('',true);

    // var_dump(uniqid('',true));
    


    // $arr = [3,5,14,35,1,35];
    // var_dump($arr);
    // $json = json_encode($arr);
    // echo $json;
    // var_dump($json);
    // $return = json_decode($json,true);
    // var_dump($return);

    // $time = time();
    // var_dump($time);
    // var_dump(date('Y-m-d H:i:s',$time));

    // $pass = password_hash("admin",PASSWORD_BCRYPT);
    // var_dump($pass);
    // echo "----------------------------------------------------------------------";
    $cart = $_SESSION['cart'];
    $cart = json_encode($cart, JSON_FORCE_OBJECT);
    var_dump($cart);
    $new = json_decode($cart, JSON_OBJECT_AS_ARRAY);
    var_dump($new);
    // echo gettype($cart);
    // session_destroy();
    $time_of_purchase = date('Y-m-d H:i:s');
    var_dump($time_of_purchase);
    
    

?>
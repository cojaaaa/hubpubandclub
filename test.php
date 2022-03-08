<?php 
    session_start();
    var_dump($_SESSION);
    if (!isset($_SESSION['customerID'])) $_SESSION['customerID'] = uniqid('',true);

    var_dump(uniqid('',true));
    


    $arr = [3,5,14,35,1,35];
    var_dump($arr);
    $json = json_encode($arr);
    echo $json;
    var_dump($json);
    $return = json_decode($json,true);
    var_dump($return);

    $time = time();
    var_dump($time);
    var_dump(date('Y-m-d H:i:s',$time));

    $pass = password_hash("admin",PASSWORD_BCRYPT);
    var_dump($pass);
?>
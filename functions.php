<?php 
function printItem (array $item, string $type) {
    if ($item['type'] == $type) {
        echo "<div class=\"pricing-entry d-flex ftco-animate\">";
        echo "<div class=\"desc pl-3\">";
        echo "<div class=\"d-flex text align-items-center\">";
        echo "<h3><span>" . $item['name'] . "</span></h3>";
        echo "<span class=\"price\">" . $item['price'] . " rsd</span>";
        echo "</div>";
        if ($item['description'] != "") {
            echo "<div class=\"d-block\">";
            echo "<p>- " . $item['description'] . "</p>";
            echo "</div>";
        }
        echo "<button type='button' class='poruci' onclick='order(". $item['id'] .")' >+ Poruči</button>";
        echo "</div>";
        echo "</div>";
    }
}

function setCustomerID() {
    if (!isset($_COOKIE['customerID'])) {
        $uniqid = uniqid('',true);
        setcookie("customerID", $uniqid, time()+60*60);
        $_SESSION['customerID'] = $uniqid;
    } else {
        $_SESSION['customerID'] = $_COOKIE['customerID'];
    }
}
?>
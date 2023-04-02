<?php
// session_start();
    include_once "config.php";
    $txt = ""; 
    $cnt = 0;
    // print_r($_SESSION)
    foreach ($_SESSION["product"] as $key => $value) {
        $txt .= "<tr><td>".$value["item"]."</td><td>".$value["amount"]."</td><td><button onclick='edit($cnt)'>Edit</button></td><td><button onclick='delete($cnt++)'>Delete</button></td></tr>";
        // print_r($value);
    }
    echo $txt;
    // print_r($_SESSION["product"])
?>
<?php
    $username = "root";
    $password = "";
    $database = "consultation";

    $db = new PDO('mysql:host=localhost;dbname=' . $database . ';charset=utf8', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
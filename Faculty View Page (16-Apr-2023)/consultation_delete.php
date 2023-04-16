<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "consultation";
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM faculty_booked_routine WHERE ID = '$id'";
    $connection->query($sql);

}
header("location:faculty_view.php");
exit;

?>
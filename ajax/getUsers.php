<?php 
    require_once "conn.php";

    $table = "formulario";

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($users);
?>
<?php
    require_once "conn.php";

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    $sql = "INSERT INTO formulario (nome, sobrenome) VALUES ('$nome', '$sobrenome')";

    if(mysqli_query($conn, $sql)){
        echo "New record created succesfully";
    } else {
        echo "Error: $sql <br> " . mysqli_error($conn);
    }
?>
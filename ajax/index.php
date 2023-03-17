<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste AJAX</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="nome">Insira seu nome</label>
        <input type="text" name="nome" id="nome">
        <label for="sobrenome">Insira seu sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome">
        <input type="submit" value="Enviar" id="send">
    </form>

    <div id="ajaxHolder">
        
    </div>

    <?php
        require_once "createUser.php";
    ?>

    <script src="ajaxPHP.js"></script>
</body>
</html>
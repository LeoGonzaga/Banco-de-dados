<?php
// Setando o fuso horário
    date_default_timezone_set('America/Sao_Paulo');
// Conectando o php com o banco
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    if(isset($_POST['acao'])){
        if(($_POST['nome'] && $_POST['sobrenome']) != ''){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES(null, ?,?,?)");
    $sql->execute(array($nome,$sobrenome,$momento_registro));
    echo 'Cadastro feito!';
    }
    else{
        echo 'Cadastro invalido';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="post">
        <input type="text" name ="nome" require>
        <input type="text" name ="sobrenome" require>
        <input type="submit" name ="acao" value = "Enviar">

    </form>
</body>
</html>
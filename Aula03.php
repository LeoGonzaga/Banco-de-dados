<!-- Delete -->
<!-- Se deletar sem WHERE ELE DELETA TUDO -->
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $id = 4;

    $sql = $pdo->prepare("DELETE FROM `clientes`");

    if($sql->execute()){
        echo 'Sucesso';
    }
?>
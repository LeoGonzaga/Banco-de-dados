<!-- UPDATE no banco -->
<!-- Sempre usar o WHERE no fim, porque senão vai substituir tudo na tabela -->
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $id = 4;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Jão', sobrenome='Silva' WHERE id=$id");

    if($sql->execute()){
        echo 'Sucesso';
    }
?>
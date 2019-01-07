<!-- GRUOP BY -->
<!-- Pega apenas um de cada -->

<!-- ORDER BY -->
<!-- ORDENA EM CRESCENTE E DESCRECENTE -->

<!-- LIMIT  -->
<!-- Limita quantos vão ser printados na tela -->
<?php
     $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
 
    // $sql = $pdo->prepare("SELECT * FROM `cliente` GROUP BY cargo ");
    // $sql = $pdo->prepare("SELECT * FROM `cliente` ORDER BY cargo DESC ");
    $sql = $pdo->prepare("SELECT * FROM `cliente` GROUP BY nome LIMIT 3");

     $sql->execute();

    $info = $sql->fetchAll();
    foreach ($info as $key => $value) {
        # code...
        echo $value['nome'];
        echo '<br>';
    }



?>
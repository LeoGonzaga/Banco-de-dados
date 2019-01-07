<!-- SELECT -->
<!-- Puxa direto do banco os valores -->
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
 
    $sql = $pdo->prepare("SELECT * FROM `post` INNER JOIN `categorias` ON `post`.`categoria_id` = `categorias`. `id` ");

    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>'; 
    print_r($info);
    echo '</pre>'; 
    // foreach ($info as $key => $value) {
    //     echo 'Titulo: '. $value['titulo'];
    //     echo '<br>';
    //     echo 'Categoria: '.$value['categoria_id'];
    //     echo'<br>';
    //     echo $value['conteudo'];
    //     echo '<br>';
    //     echo '<br>';
    // }


?>
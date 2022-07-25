<?php

    $db = new PDO('mysql:host=localhost;dbname=dbprojeto', 'root', 'root');
    $consulta = $db->query('SELECT usuario, senha FROM cadastros');
    $listaconsulta = $consulta->fetchAll();

    foreach($listaconsulta as $item){
        if($item['usuario'] == $_POST['user'] && $item['senha'] == $_POST['senha']){
            header("location:index.php?valor=1");
            break;
        };
        header("location:index.php?valor=1");
    };

   
?>






<?php

    $db =  new PDO('mysql:host=34.211.224.42:3306;dbname=dbprojeto;charset=utf8', 'root', 'root');
    $consulta = $db->query('SELECT usuario, senha FROM cadastros');
    $listaconsulta = $consulta->fetchAll();

    foreach($listaconsulta as $item){
        if($item['usuario'] == $_POST['user'] && $item['senha'] == $_POST['senha']){
            header("location:34.211.224.42/index.php");
            break;
        };
        header("location:index.php?valor=1");
    };

   
?>






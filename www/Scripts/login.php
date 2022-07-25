<?php

    $db =  new PDO('mysql:host=localhost:8086;dbname=dbprojeto;charset=utf8', 'root', 'root');
    $consulta = $db->query('SELECT usuario, senha FROM cadastros');
    $listaconsulta = $consulta->fetchAll();

    foreach($listaconsulta as $item){
        if($item['usuario'] == $_POST['user'] && $item['senha'] == $_POST['senha']){
            header("location:./Paginas/paginalogada.php");
            break;
        };
        header("location:index.php?valor=1");
    };

   
?>






<?php

    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=dbprojeto', 'root', 'root');
        $consulta = $db->query('SELECT usuario, senha FROM cadastros');
        $listaconsulta = $consulta->fetchAll();
    
        foreach($listaconsulta as $item){
            if($item['usuario'] == $_POST['user'] && $item['senha'] == $_POST['senha']){
                header("location:../Paginas/paginalogada.php");
                break;
            };
            header("location:../index.php?valor=1");
        };
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

?>
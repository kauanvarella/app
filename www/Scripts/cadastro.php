<?php

    $db =  new PDO('mysql:localhost:8086;dbname=dbprojeto;charset=utf8', 'root', 'root');
    $consulta = $db->query('SELECT usuario, senha FROM cadastros');
    $listaconsulta = $consulta->fetchAll();
    $cadastra = true;
    
    foreach($listaconsulta as $item){
        if($item['usuario'] == $_POST['defineusuario']){
            $cadastra = false;
            header("location:index.php?modal=1");
            $valor = 1; 
            break;
        }
    };


    if($_POST['definesenha'] != $_POST['confirmasenha']){
        $cadastra = false;
        header("location:index.php?modal=2");
    } 


    if($_POST['definesenha'] != $_POST['confirmasenha'] && $valor == 1){
        $cadastra = false;
        header("location:index.php?modal=12");
    } 


    if ($_POST['defineusuario'] == null || $_POST['definesenha'] == null){
        $cadastra = false;
        header("location:index.php?modal=20");
   } 
   

   if ($cadastra == true){
        $db->query("INSERT INTO cadastros (usuario, senha) VALUES ('{$_POST['defineusuario']}','{$_POST['definesenha']}');");
        header("location:index.php?sucesso=1");
   }


?>

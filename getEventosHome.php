<?php
    header('Content-Type: application/json');
    $pdo = new PDO("mysql:dbname=salon; host=127.0.0.1","root","1234");
    //seleccionar los eventos del calendario
    $sentenciaSQL = $pdo->prepare("SELECT id,title,descripcion,start,color,textColor FROM  eventos");// WHERE id_cliente=:id
    $sentenciaSQL->execute();//array("id"=>$_SESSION['id'])
    $resultado = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultado);
?>
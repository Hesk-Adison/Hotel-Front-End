<?php
require_once("coneccao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];
$quarto= $_POST["quartos"];
$adulto= $_POST["adulto"];
$crianca= $_POST["crianca"];
$data= $_POST["data"];
$carro= $_POST["carro"];
$prazo= $_POST["prazo"];

//INSERT 

try{

  
    $query = Conection()->prepare("INSERT INTO comentarios(nome,email,comentario) VALUES(?,?,?)");

    $result = $query->execute([
        $nome,
        $email,
        $comentario
    ]);   
    
    if($result > 0){
        echo "Dados gravados com sucesso";

        header("Location: index.php");
    }

 }catch( PDOException $e ){
    echo $e->getMessage();
 }
 /*
 try{

  
    $query = Conection()->prepare("INSERT INTO reserva(quartos,adulto,crianca,carro,prazo) VALUES(?,?,?,?,?)");

    $result = $query->execute([
        $quarto,
        $adulto,
        $crianca,
        $data,
        $carro,
        $prazo
    ]);   
    
    if($result > 0){
        echo "Dados gravados com sucesso";

        header("Location: index.php");
    }

 }catch( PDOException $e ){
    echo $e->getMessage();
 }
*/ 
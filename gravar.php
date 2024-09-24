<?php
require_once("coneccao.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitização e validação
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $comentario = htmlspecialchars(trim($_POST["comentario"]));
    $quarto = htmlspecialchars(trim($_POST["quartos"]));
    $adulto = htmlspecialchars(trim($_POST["adulto"]));
    $crianca = htmlspecialchars(trim($_POST["crianca"]));
    $data = htmlspecialchars(trim($_POST["data"]));
    $carro = htmlspecialchars(trim($_POST["carro"]));
    $prazo = htmlspecialchars(trim($_POST["prazo"]));

    // Verificação básica
    if (empty($nome) || empty($email) || empty($comentario)) {
        echo "Por favor, preencha todos os campos obrigatórios.";
        exit;
    }

    // Inserir no banco de dados
    try {
        $query = Conection()->prepare("INSERT INTO comentarios (nome, email, comentario) VALUES (?, ?, ?)");
        $result = $query->execute([$nome, $email, $comentario]);

        if ($result) {
            // Redirecionamento após inserção
            header("Location: index.php?sucesso=1");
            exit; // Importante para parar a execução do script
        } else {
            echo "Erro ao gravar os dados.";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}
?>



// require_once("coneccao.php");

// $nome = $_POST["nome"];
// $email = $_POST["email"];
// $comentario = $_POST["comentario"];
// $quarto= $_POST["quartos"];
// $adulto= $_POST["adulto"];
// $crianca= $_POST["crianca"];
// $data= $_POST["data"];
// $carro= $_POST["carro"];
// $prazo= $_POST["prazo"];

//INSERT 

// try{

  
//     $query = Conection()->prepare("INSERT INTO comentarios(nome,email,comentario) VALUES(?,?,?)");

//     $result = $query->execute([
//         $nome,
//         $email,
//         $comentario
//     ]);   
    
//     if($result > 0){
//         echo "Dados gravados com sucesso";

//         header("Location: index.php");
//     }

//  }catch( PDOException $e ){
//     echo $e->getMessage();
//  }
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
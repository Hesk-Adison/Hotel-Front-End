<?php 
if(isset($_POST['enviar']))
{
$nome = (trim(strip_tags($_POST['nome'])));
$email = (trim(strip_tags($_POST['email'])));
$mensagem = (trim(strip_tags($_POST['mensagem'])));

if(empty($nome) || empty($email) || empty($mensagem)){

    echo '<script type="text/javascript"> 
    alert("Preencha todos os campos")
    </script>';
}
elseif(!preg_match("/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/i",$email )){
    echo '<script type="text/javascript"> 
    alert("Email Invalido")
    </script>';
}
else{
$sql = mysql_query("INSERT INTO comentario(Nome,Email,Comentario,Mostrar) VALUES('$nome','$email','$mensagem')");


}

}

?>
<?php

include("conexao.php");

$email= $_POST['email'];
$senha= $_POST['senha'];
$nome = $_POST['nome' ];

$sql="INSERT INTO usuarios(email,senha,nome) VALUES ('$email', '$senha', '$nome')";

if(mysqli_query($mysqli,$sql)){

    echo("usuario cadastrado!");

}else{

    echo"usuario nao cadastrado!".mysqli_connect_error($mysqli);

};

?>
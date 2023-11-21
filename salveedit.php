<?php

include("conexao.php");

if(isset($_POST['update']))
{
    $nome       =$_POST['nome'];
    $id         =$_POST['id'];
    $custo      =$_POST['custo'];
    $quantidade =$_POST['quantidade'];
    $definicao  =$_POST['definicao'];

   $sqlUpdate ="UPDATE produtos SET nome='$nome', custo='$custo',quantidade='$quantidade',definicao='$definicao'WHERE id='$id'";

   $result=$mysqli->query($sqlUpdate);

};
header('location:principal.php');

?>
<?php
include("conexao.php");

$nome       =$_POST['nome'];
$id         =$_POST['id'];
$custo      =$_POST['custo'];
$quantidade =$_POST['quantidade'];
$defi       =$_POST['definicao'];

$sql= "INSERT INTO produtos(nome,id,custo,quantidade,definicao) VALUES ('$nome','$id','$custo','$quantidade','$defi')";

if(mysqli_query($mysqli,$sql)){
     echo("produto adicionado");
     header('location:principal.php');
    }else{
     echo("falha ao adicionar o produto!");
     };


?>
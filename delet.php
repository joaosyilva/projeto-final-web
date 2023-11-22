<?php

include("topo.php");
include("menu.php");


if(!empty($_GET['id']))
{
    include_once("conexao.php");

   $id=$_GET['id'];

   $sqlselect= "SELECT* FROM produtos WHERE id=$id";

   $result=$mysqli->query($sqlselect);

   

 if($result->num_rows > 0)
 {
   
   $sqldelete ="DELETE FROM produtos WHERE id=$id";

   $resultdelete=$mysqli->query($sqldelete);
 }
}

header('location:conteudo.php');

?>
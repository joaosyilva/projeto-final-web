<?php

include_once("topo.php");
include_once("menu.php");

if(empty($_SERVER["QUERY_STRING"])){
    $var="principal.php";
    $var2="conteudo.php";
    include_once ("$var");
    include_once("$var2");
}else {  
    
    $pg=$_GET['pg'];
include_once("$pg.php");}

include_once("rodape.php");


?>
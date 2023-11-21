<?php

include("topo.php");
include("menu.php");


if(!empty($_GET['id']))
{
    include("conexao.php");

   $id=$_GET['id'];

   $sqlselect= "SELECT* FROM produtos WHERE id=$id";

   $result=$mysqli->query($sqlselect);

   

if($result->num_rows>0){
   while($user_data=mysqli_fetch_assoc($result))
    {

 $nome      = $user_data['nome'];
 $custo     = $user_data['custo'];
 $quantidade= $user_data['quantidade'];
 $definicao = $user_data['definicao'];
   }
}

}else{
    header('location:principal.php');
}
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
 <form action="salveedit.php" method="POST">

 <div class="centro2">
<h1>editar dados</h1>
</div>


<div class="centro2">
 <p>
 <label>nome do produto : </label><br>
 <input type="text" name="nome" value="<?php echo $nome ?>"  class="btn btn-primary">
 </p>
</div>


<div class="centro2">
 <p>
 <label>custo:</label><br>
 <input type="text" name="custo" value="<?php echo $custo ?>"  class="btn btn-primary">
 </p>
</div>


<div class="centro2">
<p>
 <label> quantidade : </label><br>
 <input type="text"  name="quantidade" value="<?php echo $quantidade ?>"  class="btn btn-primary">
</p>
</div>


<div class="centro2">
<p>
<label>caracteristicas do produto: </label><br>
<input type="text"  name="definicao" value="<?php echo $definicao ?>"  class="btn btn-primary">
</p>
</div>


<div class="centro2">
<input type="hidden" name="id" value="<?php echo $id ?>"
</div>



<div class="centro2">
<input type="submit"  name="update"  class="btn btn-primary">
</div>

</form>
</body>
</html>

<?php 

include("rodape.php");
?>
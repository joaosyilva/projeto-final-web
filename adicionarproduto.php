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
 <form action="adproduto.php" method="POST">


 <div class="centro2">
<h1>adicionar produto</h1>
</div>
<div class="centro2">
 <p>
 <label>informe o nome do produto : </label><br>
 <input type="text" name="nome"  class="btn btn-primary">
 </p>
 </div>

 <div class="centro2">
 <p>
 <label>informe o ID do produto : </label><br>
 <input type="text" name="id"class="btn btn-primary">
 </p>
 </div>
 
 <div class="centro2">
 <p>
 <label>custo:</label><br>
 <input type="text" name="custo" class="btn btn-primary">
 </p>
 </div>

  <div class="centro2">
<p>
 <label> informe a quantidade : </label><br>
 <input type="text"  name="quantidade" class="btn btn-primary">
</p>
</div>

<div class="centro2">
<p>
<label>caracteristicas do produto: </label><br>
<input type="text"  name="definicao" class="btn btn-primary">
</p>
</div>

<div class="centro2">
<p>
<button type="submit" class="btn btn-primary">adicionar</button>
</p>
</div>
 </form>
</body>
</html>
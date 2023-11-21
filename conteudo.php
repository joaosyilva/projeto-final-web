
<?php

include("conexao.php");

$sql= "SELECT* FROM produtos";
$result=$mysqli->query($sql);
?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
 <body>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">ID</th>
      <th scope="col">custo</th>
      <th scope="col">quantidade</th>
      <th scope="col">descricao</th>
      <th scope="col">opcoes</th>
    </tr>
  </thead>
<tbody>

 <?php
    while($user_data=mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td>".$user_data['nome']."</td>";
      echo "<td>".$user_data['ID']."</td>";
      echo "<td>".$user_data['custo']."</td>";
      echo "<td>".$user_data['quantidade']."</td>";
      echo "<td>".$user_data['definicao']."</td>";
      echo "<td> 
      
      <a class='btn btn-primary'href='edit.php?id=$user_data[ID]'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg>

      </td>";
      echo "<tr>";
    }
 ?>
</tbody>
</table>
</div>
 </body>
</html>

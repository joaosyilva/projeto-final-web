
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

        <a class='btn btn-danger'href='delet.php?id=$user_data[ID]'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
        </svg>
     </a>
  </td>";
 echo "<tr>";
    }
 ?>
</tbody>
</table>
</div>
 </body>
</html>

<?php
require "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="contain">
  <table>
    <thead>
    <tr><td>ID</td>
    <td>Nom de Produit</td>
    <td>Prix du produit</td><td><td></td><td></td>
 </tr>
  </thead>
 
  <tbody>
 <?php
  $resultat=$db->query("SELECT * FROM produits");
  while($ligne=$resultat->fetch_assoc()){
    echo "<tr>

    <td>" .$ligne["Id_Produit"]. "</td>
    <td>" .$ligne["Nom_Produit"]. "</td>
    <td>" .$ligne["Prix_Produit"]. "</td>";
 
    echo "<td><a href='traitement.php?id=" . $ligne["Id_Produit"] . "' class='afficher'>
    Afficher</a></td></tr>";  
 
  }
?>


</tbody>
</table>
</div>

<a href="Resultat.php?id=1">Cliquer ici</a>
</body>
</html>

<?php


?>
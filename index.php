<?php
require "connexion.php";
session_start();
$_SESSION['user']='Admin';
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

<button class="ajouter">Ajouter un produit</button>
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
if(isset($_SESSION) && $_SESSION['user']=="Admin"){
    echo "<td><a href='traitement.php?op=Aff&id=" . $ligne["Id_Produit"] . "' class='afficher'>
    Afficher</a></td>";
    echo "<td><a href='traitement.php?op=Supp&id=" . $ligne["Id_Produit"] . "' class='supprimer'>
    Supprimer</a></td>";
    echo "<td><a href='traitement.php?op=Modif&id=" . $ligne["Id_Produit"] . "' class='modifier'>
    Modifier</a></td>";
  }
  echo  "</tr>";  
  }
?>


</tbody>
</table>
</div>

</body>
</html>

<?php


?>
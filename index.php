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
    <tr><th>ID</th>
    <th>Nom de Produit</th>
    <th>Prix du produit</th><th><th></th><th></th>
  
  </tr>
  <?php
  $resultat=$db->query("SELECT * FROM produits");
  while($ligne=$resultat->fetch_assoc()){
    echo "<tr>
    <td>" .$ligne["Id_Produit"]. "</td>
    <td>" .$ligne["Nom_Produit"]. "</td>
    <td>" .$ligne["Prix_Produit"]. "</td>
    <form action='' method='post'>
    <td><input type='submit' class='afficher' value='Afficher'> </td>
    <td><input type='submit' class='supprimer' value='Supprimer'></td>
    <td><input type='submit' class='modifier' value='Modifier'></td>
    </form>
    </tr>";
  }
  ?>
  </table>
</div>
</body>
</html>


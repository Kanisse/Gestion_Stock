<?php
include "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste de produits</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  
<table class="table table-striped">
<tr><th>#ID</th><th>Nom</th><th>Prix</th></tr>

<?php
$resultat=$db->query("SELECT * FROM produits");

while($ligne=$resultat->fetch_assoc()){
echo "<tr>
<td>".$ligne['Id_Produit']."</td>
<td>".$ligne['Nom_Produit']."</td>
<td>".$ligne['Prix_Produit']."</td>
<td> <a href='' class='btn btn-info' >Afficher</a> </td>
<td> <a href='traiter.php?id=".$ligne['Id_Produit']."' class='btn btn-danger' >Supprimer</a>  </td>
<td> <a href='modifier.php?id=".$ligne['Id_Produit']."' class='btn btn-warning' >Modifier</a>  </td>
</tr>";
}

?>


</table>

</body>
</html>


<?php

$id=$_GET['id'];

?>
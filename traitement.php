<?php
include "connexion.php";
//echo "le produit sélectionné est le produit numéro ".$_GET['id']

$id=$_GET['id'];
$result=$db->query("SELECT * FROM produits WHERE Id_Produit=$id");
while($ligne=$result->fetch_assoc()){
  echo "Le nom du produit sélectionné est ".$ligne['Nom_Produit'];
  echo "<br> Le prix du produit sélectionné est ".$ligne['Prix_Produit'];
}
?>
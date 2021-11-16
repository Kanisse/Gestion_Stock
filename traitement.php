<?php
include "connexion.php";
//echo "le produit sélectionné est le produit numéro ".$_GET['id']

$id=$_GET['id'];

if($_GET['op']=="Aff"){
$result=$db->query("SELECT * FROM produits WHERE Id_Produit=$id");
while($ligne=$result->fetch_assoc()){
  echo "Le nom du produit sélectionné est ".$ligne['Nom_Produit'];
  echo "<br> Le prix du produit sélectionné est ".$ligne['Prix_Produit'];
}
}
else if($_GET['op']=="Supp"){
$result=$db->query("DELETE FROM produits WHERE Id_Produit=$id");
if($result){
  header('Location: index.php');
}
}
else {
  echo "L'opération est une modification du produit numéro $id ";

}
?>
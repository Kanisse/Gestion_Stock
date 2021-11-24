<?php
include "connexion.php";

$id=$_GET['id'];
$resultat=$db->query("DELETE FROM produits where Id_Produit=$id");

if($resultat){
  header('Location: index.php');
}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title></title>
</head>
<body>
  
</body>
</html>

<?php
include "connexion.php";
$id=$_GET['id'];

if($_GET['op']=="Aff"){
  $result=$db->query("SELECT * FROM produits WHERE Id_Produit=$id");
while($ligne=$result->fetch_assoc()){
?>
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/<?php echo $ligne['Photo_Produit'];?>" alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $ligne['Nom_Produit'];?></h5>
    <a href="#" class="btn btn-primary">plus de détails</a>
  </div>
</div>

<?php
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
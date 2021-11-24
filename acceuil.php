<?php
require "connexion.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des produit</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
<div class="row float-right">
<?php echo "<h3>Bienvenue ".$_SESSION['login']."</h3>"?>
</div>
<div class="row">

<div class="col-lg-3">
<button class="btn btn-success">Ajouter un produit</button>
</div>

<div class="col-sm-9">
<table class='table table-striped'>
    <thead>
    <tr><td>ID</td>
    <td>Nom de Produit</td>
    <td>Prix du produit</td><td><td></td><td></td>
 </tr>
  </thead> 
  <tbody> 
 <?php
  //define total number of results you want per page  
  $results_per_page = 5;  
  //find the total number of results stored in the database  
  $query = "select *from produits";  
  $result = $db->query($query);  
  $number_of_result = mysqli_num_rows($result);  
  //determine the total number of pages available  
  $number_of_page = ceil ($number_of_result / $results_per_page);  

  //determine which page number visitor is currently on  
  if (!isset ($_GET['page']) ) {  
      $page = 1;  
  } else {  
      $page = $_GET['page'];  
  }  

  $page_first_result = ($page-1) * $results_per_page;  
  $query = "SELECT *FROM produits LIMIT " . $page_first_result . ',' . $results_per_page;  
  $result = mysqli_query($db, $query);  
      
  while ($row = mysqli_fetch_array($result)) {  
    echo "<tr>
    <td>" .$row["Id_Produit"]. "</td>
    <td>" .$row["Nom_Produit"]. "</td>
    <td>" .$row["Prix_Produit"]. "</td>";
if(isset($_SESSION) && $_SESSION['user']=="Admin"){
    echo "<td><a href='traitement.php?op=Aff&id=" . $row["Id_Produit"] . "' class='btn btn-info'>
    Afficher</a></td>";
    echo "<td><a href='traitement.php?op=Supp&id=" . $row["Id_Produit"] . "' class='btn btn-danger'>
    Supprimer</a></td>";
    echo "<td><a href='traitement.php?op=Modif&id=" . $row["Id_Produit"] . "' class='btn btn-warning'>
    Modifier</a></td>";
  }
  echo  "</tr>";  
 
    }  
  
  
?>



</tbody>
</table>

<?php
for($page = 1; $page<= $number_of_page; $page++) {  
  echo '<a class="btn btn-info" href = "acceuil.php?page=' . $page . '   ">' . $page . '</a>';  
}  
  ?>
</div>
</div>
</div>
</body>
</html>

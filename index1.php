
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<style>
body{
  background-image: url("images/back.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
    <title>connexion</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
  <div class="contain">		
	<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">	
<div class="card">
			<div class="card-header">
				<h3>Se Connecter</h3>
				<div class="d-flex justify-content-end social_icon">
				</div>
			</div>
			<div class="card-body">
				<form action="index.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
						</div>
						<input name ="username" type="text" class="form-control" placeholder="username">			
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
						</div>
						<input type="password" class="form-control" name ="password" placeholder="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Se connecter" name="login" class="btn float-right btn-info">
					</div>
				</form>
				<div class="btn  btn-secondary">
					<a href="#">Nouveau Compte</a>
				</div>
				<div class="btn  btn-secondary">
					<a href="#">Mot de passe oublié ?</a>
			</div>
		</div>
	</div>
</div>
<div class="col-sm-3"></div>
</div>
</div>

  </body>

</html>
<?php
if(isset($_POST['login'])){
$login=$_POST['username'];
$pass=$_POST['password'];
$log="Admin";$password="Admin";
if($login==$log && $pass==$password){
	header('Location: acceuil.php');
	session_start();
	$_SESSION['login']=$login;
}else{
	echo "<b style ='color:red;'>Les information sont incorrectes</b>";
}

}
?>
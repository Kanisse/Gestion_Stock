<?php

$db=mysqli_connect("localhost","root","","commerce");

if($db){
 //echo "connexion établie";
}
 else {
   echo "pas de connexion";
}

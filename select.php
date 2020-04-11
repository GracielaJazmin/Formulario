<?php
include("insert.php");

if(isset($_POST['save'])){
    echo $_POST['username'];
    echo $_POST['password'];

   $con = mysqli_connect($host, $username, $password, $db); 
   mysqli_query($con, ("INSERT INTO usuario( username, password) VALUES ('$_POST[username]', '$_POST[password]')"));
   
   include('Ejemplo.html');
   
   
}else{
    echo "error al insertar datos";
}
  



?>
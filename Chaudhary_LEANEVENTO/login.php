<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″ />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/leanevent.css"/>
    <title>Iniciar Sesi&oacute;n</title>
    <script type="text/javascript">
      
      function validation(){

    var username = document.forms["RegForm"]["username"];               
    var password = document.forms["RegForm"]["password"];    
    
    if (username.value == "") {
      window.alert("Please enter your username"); 
        username.focus(); 
    }  
    if (password.value == "") {
      window.alert("Please enter your password"); 
        password.focus(); 
    }   
        return true;
      }
    </script>
</head>
<body>
<div id="container">
    <img title="Logo" id="container-img" alt ="Logo" src="images/logo-blanco.png"/>
    <p id="label"><b>LEANEVENTOS</b></p>
    <div class="topnav">
        <a href="buyfromus.php">Comprar Boletos</a>
        <a class="active" href="login.php">Iniciar Sesi&oacute;n</a>
        <a href="contactus.php">Contacto</a>
        <a href="signup.php">Registrate</a>
        <a href="http://chaudhary.uta.cloud/">Blog</a>
        <a href="aboutus.php">Quienes Somos</a>
        <a href="index.php">Inicio</a>
    </div>
    <div class="images-aboutus">
        <img id="image1" alt="Banner" title="Banner" src="images/bannerlogin.jpg" />

        <h1>Iniciar Sesi&oacute;n</h1>
    </div>

    <div class="container">
        <h2>Iniciar Sesi&oacute;n</h2>
        <form method="POST" name="RegForm" onsubmit = "return validation()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="username">Nombre de Usuario</label>
            <input type="text" id="username" name="username" required placeholder="Nombre de Usuari o Correo">

            <label for="password">Contrase&ntilde;a</label>
            <input type="password" id="password" name="password" required placeholder="Contrase&ntilde;a">

            <a href="#">Olvido su Contrase&ntilde;a</a>
            <input id="submit" type="submit" value="Entra">
        </form>
    </div>

<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$err=$user = $pass = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["username"])) {
   $err = 1;
  } else {
    $user = test_input($_POST["username"]);
    
  }
    
  if (empty($_POST["password"])) {
    $err = 1;
  } else {
    $pass = test_input($_POST["password"]);
    
  }
require 'connection_file.php';
if (empty($err)) {
     $sql = "SELECT username, password, role FROM Login where username = '$user' and password = '$pass'";
   //echo "$sql";
 $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row =  mysqli_fetch_assoc($result);
    if($row["role"] == "agent"){
echo '<script>window.location="agent.php?username='.$user.'";</script>';
    }elseif ($row["role"] == "individual") {
        # code...
        echo '<script>window.location="individual.php?username='.$user.'";</script>';
    }else{
echo '<script>window.location="business.php?username='.$user.'";</script>';
    }
    
} else {
    echo '<script>window.alert("Wrong user name or password");</script>';
}
    
}
}

?>

    <div class="blank-space1">

        <h3>LEAN EN LAS REDES SOCIALES</h3>
        <img class="images-inline1" src="images/correo.png" alt="SOCIALES" title="SOCIALES">
        <img class="images-inline1" src="images/facebook.png" alt="SOCIALES" title="SOCIALES">
        <img class="images-inline1" src="images/instagram.png" alt="SOCIALES" title="SOCIALES">
        <img class="images-inline1" src="images/twitter.png" alt="loSOCIALESgo" title="SOCIALES">

    </div>
    <footer>&copy; Copyright 2019! All rights reserved. Made with &hearts; by Shekhar Chaudhary</footer>

</div>





</body>
</html>
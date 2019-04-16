<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″ />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/leanevent.css"/>
    <title>Perfil</title>
</head>
<body>

    <?php 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$err=$firstname = $mail = $password = $lastname = $address = $city =$state = $postal =$phone ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["firstname"])) {
   $err = 1;
  } else {
    $firstname = test_input($_POST["firstname"]);
  }
  
  if (empty($_POST["mail"])) {
   $err = 1;
  } else {
    $mail = test_input($_POST["mail"]);
  }
    
  if (empty($_POST["password"])) {
    $err = 1;
  } else {
    $password = test_input($_POST["password"]);
    echo "$password";
  }

  if (empty($_POST["lastname"])) {
    $err = 1;
  } else {
    $lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["address"])) {
    $err = 1;
  } else {
    $address = test_input($_POST["address"]);
  }

   if (empty($_POST["city"])) {
    $err = 1;
  } else {
    $city = test_input($_POST["city"]);
  }

   if (empty($_POST["state"])) {
    $err = 1;
  } else {
    $state = test_input($_POST["state"]);
  }

   if (empty($_POST["postal"])) {
    $err = 1;
  } else {
    $postal = test_input($_POST["postal"]);
  }

   if (empty($_POST["phone"])) {
    $err = 1;
  } else {
    $phone = test_input($_POST["phone"]);
  }

  require 'connection_file.php';
if (empty($err)) {
$sql = "INSERT INTO Individual (firstname, surname, registration_number, address, city, state, postal_code, phone_num, username, password, photo) VALUES ('$firstname', '$lastname', NULL, '$address', '$city', '$state', '$postal','$phone','$mail', '$password', NULL);";
$sql .= "INSERT INTO Login (username, password, role) VALUES ('$mail', '$password','individual');";
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
  


}
    ?>
<div id="container">
    <img title="Logo" id="container-img" alt ="Logo" src="images/logo-blanco.png"/>
    <p id="label"><b>LEANEVENTOS</b></p>
    <div class="topnav">
        <a href="buyfromus.php">Comprar Boletos</a>
        <a href="login.php">Iniciar Sesi&oacute;n</a>
        <a href="contactus.php">Contacto</a>
        <a href="signup.php">Registrate</a>
        <a href="http://chaudhary.uta.cloud/">Blog</a>
        <a href="aboutus.php">Quienes Somos</a>
        <a href="index.php">Inicio</a>
    </div>
    <div class="images-aboutus">
        <img id="image1" alt="Banner" title="Banner" src="images/bannercontacto.jpg" />

        <h1>Perfil</h1>
    </div>

    <div class="blank-space-contact-us">

        <h1>Tu informaci&oacute;n del perfil <img class="imgRight" src="images/nologo.png" alt="logo" title="logo"/></h1>

        <div>
            <p>Nombres del inscrito</p>
            <p id="firstP"><?php echo($address .", ".$city.", ".$state);?>
            </p>

            </div><div>
        <p>Numero del Registro del inscrito</p>
           <p><?php echo($phone);?></p>
    </div><div>
        <p>Nombre del ususario</p>
             <p><a href="mailto:<?php echo($mail);?>" target="_top"><?php echo($mail);?></a>
            </p>

        </div>


    </div>

    <div class="container">
        <img class="imgRight" src="images/nologo.png" alt="logo" title="logo"/>
        <input id="file" type="file" value="Seleccionar logo">
        <h2>Estar en Contacto </h2>
        <form action="individual.php">

           <label for="fname">Nombres</label>
            <input type="text" id="fname" name="firstname" disabled placeholder="Tu Nombre" value="<?php echo($firstname)?>">
            <label for="lname">Numero de Registro del Inscrito </label>
            <input type="text" id="lname" name="lastname" disabled placeholder="Numero de Registro del Inscrito" value="<?php echo($lastname)?>">
            <label for="email">Correo</label>
            <input type="text" id="email" name="email" disabled placeholder="To correo electronico" value="<?php echo($mail)?>">
            <label for="topic">Telefono</label>
            <input type="text" id="topic" name="phone" placeholder="Telefono" value="<?php echo($phone)?>">
            <label for="topic">Usuario</label>
            <input type="text" id="usu" name="mail" disabled placeholder="Nombre de usuario" value="<?php echo($mail)?>">
            <label for="pass">contrase&ntilde;a</label>
            <input type="text" id="pass" name="password" placeholder="Contrase&ntilde;a" value="<?php echo($password)?>">
            <label id="nota">Nota: </label>Solo puede cambiar los datos(Telefono, contrase&ntilde;a , logo )
            <p> <input id="submit" type="submit" value="Guardar Cambios"></p>

        </form>
    </div>

    <div class="subscription">
        <p>Registrese para recibir un boletin</p>
        <input type="email" placeholder="Introduce tu correo electr&oacute;nico"/>
        <a href="#" id="button">Subscribir</a>
    </div>




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
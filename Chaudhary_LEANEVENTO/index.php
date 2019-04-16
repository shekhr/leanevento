<!DOCTYPE html>
<html>
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″ />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="CSS/leanevent.css"/>
<title>LEANEVENTOS</title>
<script type="text/javascript">
  function hello(){
alert("Thanks for subscribing to LEANEVENTOS"); 
  }
</script>
</head>
<body>
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
  <a class="active" href="index.php">Inicio</a>
</div>
<div class="images">
  <img id="image1" alt="Banner" title="Banner" src="images/bannerlean2.jpg" />

  <img id="image2" alt="Logo" title="Logo" src="images/logo-blanco.png" />
</div>

<div class="blank-space">

  <h1>&iquest;QU&Eacute; HACEMOS?</h1>

  <p>La asociaci&oacute;n civil LEAN fue creada con el objetivo de ayudar,
    a trav&eacute;s de acciones concretas, a nuestros conciudadanos en Venezuela ante
    la grave escasez de medicinas e insumos m&eacute;dicos en que se encuentra el pa&iacute;s.
    Nuestra misi&oacute;n consiste en recolectar ayuda m&eacute;dico sanitaria en delegaciones
    en Espa&ntilde;a y, a trav&eacute;s de agentes de transporte, llevarlos a Venezuela para que
    otras asociaciones se encarguen de su distribuci&oacute;n. De esta manera aportamos nuestro granito
    de arena ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociaci&oacute;n sin fines
    de lucro, dedicada a la defensa de los Derechos Humanos.</p>
</div>
  <div class="row">
    <div class="column">
      <h2>478</h2>
      <p>VOLUNTARIOS</p>
    </div>
    <div class="column">
      <h2>60.000</h2>
      <p> PERSONAS BENEFICIADAS</p>
    </div>
    <div class="column">
      <h2>45</h2>
      <p>ALIADOS</p>
    </div>
  </div>
<div class="images1">
  <img id="image3" alt="Banner" title="Banner" src="images/bannerabout.jpg" />
  <p id = martin-quote>"La injusticia, en cualquier parte, es una amenaza a la justicia en todas partes."</p>
  <p id="martin-luther">Martin Luter King</p>


</div>

  <div class="blank-space1">

    <h1>ALIADOS</h1>

    <img class="images-inline" src="images/logo1.PNG" alt="logo" title="aliados">
    <img class="images-inline" src="images/logo2.PNG" alt="logo" title="aliados">
    <img class="images-inline" src="images/logo3.PNG" alt="logo" title="aliados">
    <img class="images-inline" src="images/logo4.PNG" alt="logo" title="aliados">
  </div>

  <div class="subscription">
<p>Registrese para recibir un boletin</p>
    <input type="email" id="subscriptionEmail" placeholder="Introduce tu correo electr&oacute;nico"/>

    <a href="index.php?mail=true" onclick="location.href=this.href+'&subscriptionEmail='+document.getElementById('subscriptionEmail').value; return false;" id="button">
    Subscribir</a>
  </div>

<?php 

function email_validation($str) { 
    return (!preg_match( 
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) 
        ? FALSE : TRUE; 
} 

$val = $_GET["mail"];
if ($val == true) {
  # code...
  $msg = "You have subscribed to LEANEVENTOS \nThanks for subscribing.";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$subject = "LEANEVENTOS Subscription";
$to = $_GET["subscriptionEmail"];
 if(!email_validation($to)) { 
  
    echo "<script>window.alert('Invalid email address');</script>"; 
} 
else { 
    echo "Valid email address."; 
    $mail=mail($to, "Subject: $subject",$msg );
if($mail){
$var="Thanks for Subribing to LEANEVENTOS";

echo "<script> hello(); </script>";

require 'connection_file.php';
$sql = "INSERT INTO Subscribers (email, subscribed)
VALUES ('$to','1');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

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
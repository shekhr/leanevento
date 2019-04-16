<?php
session_start();
if (!isset($_SESSION['id'])) {
  $_SESSION['id'] = $_GET["id"];
} else {
  $_SESSION['id'] = $_GET["id"];
}
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″ />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/leanevent.css"/>
    <title>Registro de evento</title>
    <script type="text/javascript">
  function hello(){
alert("Thanks for subscribing to LEANEVENTOS"); 
  }

  function validation(){
    var eventName = document.forms["RegForm"]["eventName"];               
    var responsible = document.forms["RegForm"]["responsible"];    
    var place = document.forms["RegForm"]["place"];    
    var date = document.forms["RegForm"]["date"];  
    var time =  document.forms["RegForm"]["time"];  
    var price = document.forms["RegForm"]["price"];  
    var val = document.forms["RegForm"]["value"]; 
    var comiss = document.forms["RegForm"]["comiss"]; 

    if (eventName.value == "")                                  
    { 
        window.alert("Please enter eventName."); 
        eventName.focus(); 
        return false; 
    } 
   
    if (responsible.value == "")                               
    { 
        window.alert("Please enter responsible name."); 
        responsible.focus(); 
        return false; 
    } 
       
    if (place.value == "")                                   
    { 
        window.alert("Please enter a place address."); 
        place.focus(); 
        return false; 
    } 
   
   if (date.value == "")                                  
    { 
        window.alert("Please enter date."); 
        date.focus(); 
        return false; 
    } 
   
    if (time.value == "")                               
    { 
        window.alert("Please enter time of the event."); 
        time.focus(); 
        return false; 
    } 
       
    if (price.value == "")                                   
    { 
        window.alert("Please enter the price."); 
        price.focus(); 
        return false; 
    } 
    if (val.value == "")                                  
    { 
        window.alert("Please enter your state."); 
        val.focus(); 
        return false; 
    } 
   
    if (comiss.value == "")                               
    { 
        window.alert("Please enter the commission"); 
        comiss.focus(); 
        return false; 
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
        <a href="login.php">Iniciar Sesi&oacute;n</a>
        <a href="contactus.php">Contacto</a>
        <a href="signup.php">Registrate</a>
        <a href="http://chaudhary.uta.cloud/">Blog</a>
        <a href="aboutus.php">Quienes Somos</a>
        <a href="index.php">Inicio</a>
    </div>
    <div class="images-aboutus">
        <img id="image1" alt="Banner" title="Banner" src="images/bannercontacto.jpg" />

        <h1>Registro De Evento</h1>
    </div>


    <div class="container">
        <img class="imgRight" src="images/imagensubir.png" alt="logo" title="logo"/>
        <input id="file" type="file" value="Seleccionar logo">
        <h2>Registro de Evento </h2>
        <form action="modification.php?val=<?php echo $id?>" name = "RegForm" onsubmit = "return validation()" method="post">

            <label for="fname">Nombres</label>
            <input type="text" id="fname" required name="eventName" placeholder="Nombre del Evento">
            <label for="lname">Responsable </label>
            <input type="text" id="lname" required name="responsible" placeholder="Nombre del Responsable">
            <label for="email">Lugar</label>
            <input type="text" id="email" required name="place" placeholder="Direccion del Lugar del Eventos">
            <label for="topic">Fecha</label>
            <input type="text" id="topic" required name="date" placeholder="00:00:00">
            <label for="topic">Hora</label>
            <input type="text" id="usu" required name="time" placeholder="00:00">
            <label for="pass">Valor de Boleto</label>
            <input type="text" id="pass" required name="price" placeholder="$000.00">
            <label for="val">Value</label>
            <input type="text" id="val" required name="value" placeholder="1">
            <label for="comiss">Comision</label>
            <input type="text" id="comiss" required name="comiss" placeholder="1">
            <p> <input id="submit" type="submit" value="Guardar"></p>

        </form>
    </div>
<?php 


$val = $_GET["val"];

$errName = $eventName = $responsible = $place = $date = $time = $price = $value =$comiss ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["eventName"])) {
    $errName =  1;
  } else {
    $eventName = test_input($_POST["eventName"]);
  }
  
  if (empty($_POST["responsible"])) {
    $errName =  1;
  } else {
    $responsible = test_input($_POST["responsible"]);
  }
    
  if (empty($_POST["place"])) {
    $errName =  1;
  } else {
    $place = test_input($_POST["place"]);
  }

  if (empty($_POST["date"])) {
    $errName =  1;
  } else {
    $date = test_input($_POST["date"]);
  }

  if (empty($_POST["time"])) {
    $errName =  1;
  } else {
    $time = test_input($_POST["time"]);
  }
   if (empty($_POST["price"])) {
    $errName =  1;
  } else {
    $price = test_input($_POST["price"]);
  }
  if (empty($_POST["comiss"])) {
    $errName =  1;
  } else {
    $comiss = test_input($_POST["comiss"]);
  }
  if (empty($_POST["value"])) {
    
  } else {
    $value = test_input($_POST["value"]);
  }
  require 'connection_file.php';
  if(empty($errName) && !empty($val)){
    echo "$id";
 $sql = "UPDATE EventSelection SET event_name = '$eventName', responsible = '$responsible', place = '$place', date = '$date', time = '$time', price = '$price', value = '$value', commission = '$comiss' WHERE id = $val";

  if ($conn->multi_query($sql) === TRUE) {
    echo "New records updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}{
  
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
    <div class="subscription">
        <p>Registrese para recibir un boletin</p>
        <input type="email" placeholder="Introduce tu correo electr&oacute;nico"/>
            <a href="registrevents.php?mail=true" id="button">Subscribir</a>
  </div>

<?php
$val = $_GET["mail"];
if ($val == true) {
  # code...
  $msg = "You have subscribed to LEANEVENTOS \n Thanks for subscribing.";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$subject = "LEANEVENTOS Subscription";
$to = "shekhar3790@gmail.com";
$mail=mail($to, "Subject: $subject",$msg );
if($mail){
$var="Thanks for Subribing to LEANEVENTOS";
echo "<script> hello(); </script>";
}else{
  
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
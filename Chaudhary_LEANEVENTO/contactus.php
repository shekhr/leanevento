<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″ />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/leanevent.css"/>
    <title>Contacto</title>
    <script type="text/javascript">
  function hello(){
alert("Thanks for subscribing to LEANEVENTOS"); 
  }

  function validation(){

            
            

    var firstName = document.forms["RegForm"]["firstname"];               
    var lastname = document.forms["RegForm"]["lastname"];    
    var email = document.forms["RegForm"]["email"];    
    var topic = document.forms["RegForm"]["topic"];  
    
   
    if (firstname.value == "")                                  
    { 
        window.alert("Please enter your firstname."); 
        firstname.focus(); 
        return false; 
    } 
   
    if (lastname.value == "")                               
    { 
        window.alert("Please enter your lastname."); 
        lastname.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   if (topic.value == "")                               
    { 
        window.alert("Please enter your topic."); 
        topic.focus(); 
        return false; 
    }
   
var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
     if (re.test(String(email.value).toLowerCase()))
  {
    
  }
  else 
    {
        window.alert("Incorrect Email format");
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
        <a class="active" href="contactus.php">Contacto</a>
        <a href="signup.php">Registrate</a>
        <a href="http://chaudhary.uta.cloud/">Blog</a>
        <a href="aboutus.php">Quienes Somos</a>
        <a href="index.php">Inicio</a>
    </div>
    <div class="images-aboutus">
        <img id="image1" alt="Banner" title="Banner" src="images/bannercontacto.jpg" />

        <h1>Contacto</h1>
    </div>

    <div class="blank-space-contact-us">

        <h1>Informaci&oacute;n Del Contacto</h1>

        <div>
            <p id="firstP">198 West 21st Streen Suite 721, New York NY 10016</p>
            <p>+16824146225</p>
            <p><a href="mailto:shekhar3790@gmail.com" target="_top">shekhar3790@gmail.com</a>
            </p>
            <p><a href="https://www.diazapps.com">diazapps.com</a> </p>
        </div>

    </div>

    <div class="container">
        <h2>Estar en Contacto</h2>
        <form method = "post" name="RegForm" onsubmit="return validation()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="fname">Nombre</label>
            <input type="text" id="fname" required name="firstname" placeholder="Tu Nombre">

            <label for="lname">Appelido</label>
            <input type="text" id="lname" required name="lastname" placeholder="Tu Appelido">

            <label for="email">Correo</label>
            <input type="text" id="email" required name="email" placeholder="To correo electronico">
            <label for="topic">Tema</label>
            <input type="text" id="topic" required name="topic" placeholder="Su asunto de aste mensage">
            <label for="message">Mensage</label>
            <textarea id="message" name="message" placeholder="Di algo sobre nosotros" style="height:200px"></textarea>

            <input id="submit" type="submit" value="Enviar mensage">
        </form>
    </div>
<?php 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function email_validation($str) { 
    return (!preg_match( 
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) 
        ? FALSE : TRUE; 
} 
  
// Function call 


$err=$firstname = $email = $lastname = $topic = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["firstname"])) {
   $err = 1;
  } else {
    $firstname = test_input($_POST["firstname"]);
  }
  
  if (empty($_POST["email"])) {
   $err = 1;
  } else {
    $email = test_input($_POST["email"]);
  }
  if(!email_validation($email)) { 
    
    echo "<script>window.alert('Invalid email address');</script>"; 
    $err = 1;
} 
else { 
    echo "Valid email address."; 
} 
  if (empty($_POST["topic"])) {
    $err = 1;
  } else {
    $topic = test_input($_POST["topic"]);
  }

  if (empty($_POST["lastname"])) {
    $err = 1;
  } else {
    $lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["message"])) {
    $err = 1;
  } else {
    $message = test_input($_POST["message"]);
  }

    require 'connection_file.php';
if (empty($err)) {

$sql = "INSERT INTO contact (firstname, lastname, mail, topic, message) VALUES ('$firstname', '$lastname', '$email', '$topic', '$message');";
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}else{
  echo "<script>window.alert('Please enter all the details'); </script>";
}
}

?>
    <div class="subscription">
        <p>Registrese para recibir un boletin</p>
        <input type="email" placeholder="Introduce tu correo electr&oacute;nico"/>
        <a href="contactus.php?mail=true" id="button">Subscribir</a>
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
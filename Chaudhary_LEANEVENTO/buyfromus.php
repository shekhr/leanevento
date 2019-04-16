<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″ />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/leanevent.css"/>
    <title>QUINES SOMOS</title>
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
        <a class="active" href="buyfromus.php">Comprar Boletos</a>
        <a href="login.php">Iniciar Sesi&oacute;n</a>
        <a href="contactus.php">Contacto</a>
        <a href="signup.php">Registrate</a>
        <a href="http://chaudhary.uta.cloud/">Blog</a>
        <a href="aboutus.php">Quienes Somos</a>
        <a href="index.php">Inicio</a>
    </div>
    <div class="images-aboutus">
        <img id="image1" alt="Banner" title="Banner" src="images/bannercboleto.jpg" />

        <h1>Comprar Boletos</h1>
    </div>

    <div class="blank-space-buy-us">

        <h1>NUESTROS EVENTOS</h1>
        <h5>Tu asistencia es importante para nosotros visitanos en los eventos qu estamos realizando</h5>

        <?php 
         require 'connection_file.php';

         $sql = "SELECT id, event_name, description, price, image FROM Events ORDER BY Events.id DESC Limit 4";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
             while($row = mysqli_fetch_assoc($result)) {
                echo "<div class="."images-inline-buy-us".">";
                echo "<img src=".$row["image"]." title="."minibanner1"." alt="."minibanner1".">";
                echo "<p>".$row["event_name"]."</p>";
                echo "<p><a href="."buyfromus2.php?id=".$row["id"].">".$row["price"]."</a></p>";
                echo " </div>";

        /*echo "id: " . $row["event_name"]. " - Name: " . $row["description"]. " " . $row["price"]." " . $row["image"]. "<br>";*/
     }
    } else {
     echo "0 results";
        }

        ?>
        
        
            
            
       <!--  </div>
        <div class="images-inline-buy-us">
            <img src="images/minibaner2.jpg" title="minibanner2" alt="minibanner2">
            <p>La Importancia De Los Alimentos</p>
            <p><a href="buyfromus2.php">$300</a></p>
        </div>
        <div class="images-inline-buy-us">
            <img src="images/minibaner3.jpg" title="minibanner3" alt="minibanner3">
            <p>Educando Para El Futuro</p>
            <p><a href="buyfromus2.php">Entrade Gratis</a></p>
        </div>
        <div class="images-inline-buy-us">
            <img src="images/minibaner4.jpg" title="minibanner4" alt="minibanner4">
            <p>Por Una Sonrisa De Vida</p>
            <p><a href="buyfromus2.php">$300</a></p>
        </div>
 -->

    </div>

    <div class="subscription-buy-us">
        <p>Registrese para recibir un boletin</p>
        <input type="email" placeholder="Introduce tu correo electr&oacute;nico"/>
        <a href="buyfromus.php?mail=true" id="button">Subscribir</a>
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
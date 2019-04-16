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
 <?php 

            require 'connection_file.php';
            $id = $_GET["id"];
            if (empty($id)) {
                # code...
            }else{

            $sql = "SELECT event_name, description, price, image FROM Events where id = $id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
            $row = mysqli_fetch_assoc($result);
            /*echo "<h4>".$row["event_name"]."</h4>";
            echo "<p>".$row["price"]."</p>";
            echo "<p>".$row["description"]."<p>";*/
        
            /*<p>LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.</p>*/
           

             
    } else {
     echo "0 results";
        } 
            }
            
        ?>
    <div class="blank-space-buy-us2">

        <div class="float-left2">
            <img src="<?php echo($row["image"]);?>" title="minibanner1" alt="minibanner1">

        </div>
        <div class="float-right2">
        <?php 
            
            echo "<h4>".$row["event_name"]."</h4>";
            echo "<p>".$row["price"]."</p>";
            echo "<p>".$row["description"]."<p>";
        
            /*<p>LEAN est&aacute; dedicada a fomentar valores e instaurarlos como principios, trabajar en formaci&oacute;n c&iacute;vica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaraci&oacute;n Universal de Derechos Humanos, asistir a v&iacute;ctimas de actos violentos y persecuci&oacute;n, favorecer la adquisici&oacute;n de conocimiento a trav&eacute;s de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.</p>*/
                  
            
        ?>
         <p> Numero de entradas</p>
            <input type="number" min="1" max="10">
            <button type="button" formaction="#">Comprar</button>

        </div>
        <div style="clear: both;"></div>
    </div>

<div class="multiple-selection">

</div>

    <div class="subscription-buy-us2">
        <p>Registrese para recibir un boletin</p>
        <input type="email" placeholder="Introduce tu correo electr&oacute;nico"/>
        <a href="buyfromus2.php?mail=true" id="button">Subscribir</a>
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
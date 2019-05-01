<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″ />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/leanevent.css"/>
    <title>LEANEVENTOS</title>
    <script language="javascript" type="text/javascript">
window.onbeforeunload = function()
{
    return "Are you sure want to close";
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
        <img id="image1" alt="Banner" title="Banner" src="images/bannerlean1.jpg" />

        <img id="image2" alt="Logo" title="Logo" src="images/logo-blanco.png" />
    </div>

    <table>
       
    <table>
        <caption><h3>Lista de Eventos </h3></caption>
        <tr>
            <th>Details del Eventos</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Asistencia</th>

        </tr>
         <?php 

            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }

            $user = $userErr ="";
              if (empty($_GET["username"])) {
                $userErr = "1";
              } else {
                $user = test_input($_GET["username"]);
              }
            
              require 'connection_file.php';

              $sql = "SELECT id, event_name, date, place, time, image FROM EventSelection";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo '<td><img class="logoImageInsideV" alt="logo" title="logo" src="'.$row["image"].'">'.$row["event_name"];
       echo "<td>".$row["place"]."</td>";
       echo "<td>".$row["date"]."</td>";
       echo "<td>".$row["time"]."</td>";
       echo '<td><input class="submit1" type="submit" value="Confirmar"></td>';
       echo "</tr>";
    }
} else {
    echo "0 results";
}

?>
       <!--  <tr>
            <td><img class="logoImageInsideV" alt="logo" title="logo" src="images/minibaner1.jpg">Nombre de Evento y sus details</td>
            <td>Direcion del lugar</td>
            <td>14/01/2020</td>
          <td>8 am</td>
            <td><input class="submit1" type="submit" value="Confirmar"></td>
        </tr>
        <tr>
            <td><img class="logoImageInsideV" alt="logo" title="logo" src="images/minibaner2.jpg">Nombre de Evento y sus details</td>
            <td>Direcion del lugar</td>
            <td>14/01/2020</td>
          <td>8 am</td>
            <td><input class="submit1" type="submit" value="Confirmar"></td>
        </tr>
        <tr>
            <td><img class="logoImageInsideV" alt="logo" title="logo" src="images/minibaner3.jpg">Nombre de Evento y sus details</td>
            <td>Direcion del lugar</td>
            <td>14/01/2020</td>
            <td>8 am</td>
            <td><input class="submit1" type="submit" value="Confirmar"></td>
        </tr> -->

    </table>
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
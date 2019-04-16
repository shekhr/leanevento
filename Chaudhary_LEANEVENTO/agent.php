<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″ />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/leanevent.css"/>
    <title>LEANEVENTOS</title>
    <script type="text/javascript">
        function deleteMethod()                                    
{ 
    
return confirm("Are you sure you want to delete this row?");

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
        <caption><h3>Lista de Voluntarios</h3></caption>
        <tr>
            <th>Nombre de Voluntario</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Evento</th>
            <th>Responsable</th>
        </tr>

         <?php 

        require 'connection_file.php';

       $sql = "SELECT id, username, phone,event_name,responsible FROM EventSelection where value = 1";
        $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo '<td><img class="logoImageInsideV" alt="logo" title="logo" src="images/user.png">'. $row["responsible"].'</td>';
     echo " <td>".$row["username"]."</td>";   
     echo " <td>".$row["phone"]."</td>";   
     echo " <td>".$row["event_name"]."</td>";   
     echo " <td>".$row["responsible"]."</td>";   
     echo "</tr>";
    }
} else {
    echo "0 results";
}
        ?>
        
            
        

    </table>


    <table>
        <caption><h3>Lista de Fundaciones</h3></caption>
        <tr>
            <th>Nombre de Fundacion</th>
            <th>Evento</th>
            <th>Responsable</th>
            <th>Comision</th>
            <th>Confirmar</th>

        </tr>

        <?php 

        $val = $_GET["val"];
$id = $_GET["id"];
if (empty($val) || empty($id)) {
    # code...
}elseif($val == "assign"){

$sql = "UPDATE EventSelection SET assistance = 'true' WHERE id = $id;";


if ($conn->multi_query($sql) === TRUE) {
    echo " records updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
        $sql = "SELECT id, username,event_name,responsible,commission,assistance FROM EventSelection where value = 2";
        $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo '<td><img class="logoImageInsideV" alt="logo" title="logo" src="images/nologo.png">'. $row["responsible"].'</td>';
     echo " <td>".$row["event_name"]."</td>";   
     echo " <td>".$row["responsible"]."</td>";   
    echo " <td>".$row["commission"]."</td>"; 
    echo '<form method="post" action="agent.php?val=assign&id='.$row[id].'">';
    if ($row["assistance"] == "true") {
        echo $row["assistance"];
        # code...
        echo '<td><input class="submit3" type="submit" value="Asignar"></td>';
    }else{
        echo '<td><input class="submit1" type="submit" value="Asignar"></td>';
    }
     
     echo "</form>";
     echo "</tr>";
    }
} else {
    echo "0 results";
}

        ?>
        
      
            
        <!-- </tr>
        <tr>
            <td><img class="logoImageInsideV" alt="logo" title="logo" src="images/nologo.png">Nombre de Fundacion</td>
            <td>Nombre del Evento</td>
            <td>Nombre del Responsable</td>
            <td>1</td>
            <td><input class="submit1" type="submit" value="Asignar"></td>
        </tr>
        <tr>
            <td><img class="logoImageInsideV" alt="logo" title="logo" src="images/nologo.png">Nombre de Fundacion</td>
            <td>Nombre del Evento</td>
            <td>Nombre del Responsable</td>
            <td>1</td>
            <td><input class="submit1" type="submit" value="Asignar"></td>
        </tr> -->

    </table>

    <table>
        <caption><h3>Lista de Eventos <a href="registerevents.php" class="submit3" >Aggregar</a></h3></caption>
        <tr>
            <th>Details del Eventos</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Modificar</th>
            <th>Eliminar</th>

        </tr>

        <?php 

$val = $_GET["val"];
$id = $_GET["id"];
if (empty($val) || empty($id)) {
    # code...
}elseif($val == "delete"){
$sql = "DELETE FROM EventSelection WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}

            $sql = "SELECT id, image, event_name, place, date FROM EventSelection";
        $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo '<td><img class="logoImageInsideV" alt="logo" title="logo" src="'.$row["image"].'">'.$row["event_name"].'</td>';
     echo " <td>".$row["place"]."</td>";   
     echo " <td>".$row["date"]."</td>";   
     echo '<form method="post" action="modification.php?val=modify&id='.$row[id].'">';
     echo '<td><input class="submit1" type="submit" name="modify" value="Modificar"></td>';
     echo "</form>";
     echo '<form method="post" name = "deleteForm" onsubmit = "return deleteMethod()" action="agent.php?val=delete&id='.$row[id].'">';
     echo ' <td><input class="submit2" type="submit" name="delete"value="Eliminar"></td>';
         echo "</form>";
     echo "</tr>";
    }
} else {
    echo "0 results";
}




/*function deleteEvent()
{
   $sql = "DELETE FROM EventSelection WHERE id=";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}*/



        ?>


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
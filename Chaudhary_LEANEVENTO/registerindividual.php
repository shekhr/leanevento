<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″ />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/leanevent.css"/>
    <title>Registrate</title>
    <script type="text/javascript">
        
        function validation(){

            var regexEmail = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
            var phoneno = /^[2-9]\d{2}[–\s\.]\d{4}$/;

    var firstName = document.forms["RegForm"]["firstname"];               
    var lastname = document.forms["RegForm"]["lastname"];    
    var email = document.forms["RegForm"]["mail"];    
    var password = document.forms["RegForm"]["password"];  
    var address =  document.forms["RegForm"]["address"];  
    var city = document.forms["RegForm"]["city"];  
    var state = document.forms["RegForm"]["state"]; 
    var postal = document.forms["RegForm"]["postal"];  
    var phone = document.forms["RegForm"]["phone"];  
   
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
   
   if (password.value == "")                                  
    { 
        window.alert("Please enter your password."); 
        password.focus(); 
        return false; 
    } 
   
    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        address.focus(); 
        return false; 
    } 
       
    if (city.value == "")                                   
    { 
        window.alert("Please enter your city"); 
        city.focus(); 
        return false; 
    } 
    if (state.value == "")                                  
    { 
        window.alert("Please enter your state."); 
        state.focus(); 
        return false; 
    } 
   
    if (postal.value == "")                               
    { 
        window.alert("Please enter your postal."); 
        postal.focus(); 
        return false; 
    } 
       
    if (phone.value == "")                                   
    { 
        window.alert("Please enter your phone number."); 
        phone.focus(); 
        return false; 
    }  
   if (phone.value.match(phoneno))
  {
    
  }
  else 
    {
        window.alert("Incorrect Phone Number");
        return false;
    }

     if (email.value.match(regexEmail))
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
        <a href="contactus.php">Contacto</a>
        <a class="active" href="signup.php">Registrate</a>
        <a href="http://chaudhary.uta.cloud/">Blog</a>
        <a href="aboutus.php">Quienes Somos</a>
        <a href="index.php">Inicio</a>
    </div>
    <div class="images-aboutus">
        <img id="image1" alt="Banner" title="Banner" src="images/bannerlogin.jpg" />

        <h1>Registrate</h1>
    </div>

    <form action="profileindividual.php" name = "RegForm" onsubmit="return validation()" class="register" method="post">
        <h1>Registro</h1>
        <fieldset class="row1">
            <legend>Detalles de la cuenta
            </legend>
            <p>
                <label>Correo
                </label>
                <input class="long" name="mail" required type="mail"/>
                <label>Contrase&ntilde;a
                </label>
                <input class="long" name="password" required type="password"/>
            </p>
            <p>
                <label>Nombre
                </label>
                <input class="long" name="firstname" required type="text"/>
                <label>Apellido
                </label>
                <input class="long" name="lastname" required type="text"/>
                </label>
            </p>
        </fieldset>
        <fieldset class="row2">
            <legend>Detalles personales
            </legend>
            <p>
                <label>Direcci&oacute;n
                </label>
                <input type="text" name="address" required class="long"/>
            </p>
            <p>
                <label>Ciudad
                </label>
                <input class="long" name="city" required type="text" maxlength="10"/>
            </p>
            <p>
                <label class="optional">Estado
                </label>
                <input type="text" name="state"required  class="long"/>
            </p>
            <p>
                <label>C&oacute;digo Postal
                </label>
                <input type="text" name="postal" required class="long"/>
            </p>
            <p>
                <label>Telefono
                </label>
                <input class="long" name="phone" required type="text" maxlength="10"/>
            </p>
            

        </fieldset>

        <div ><button id="buttonLast" class="button">Registrarse &raquo;</button></div>
    </form>




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
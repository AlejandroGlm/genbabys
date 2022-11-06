<?php
    session_start();
    if(isset($_SESSION['intentos'])){
      if($_SESSION['intentos']>=3){
        echo '<script>
          alert("Agotaste tus intentos de inicio de sesion, vuelve a intentar");
              </script>';
          $_SESSION['intentos']=0;
      }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
        </head>
    <body>
        <div class="wrapper">
            
            <!---->
            <div class="login-wrapper">
                <form action="ver.php" class="form" method="post">
                    <!-- poner logo en la siguiente linea-->
                    <img src="imgs/loguito.png" alt="">
                   <!--  <h2>Inicio de Sesión</h2> -->
                    <div class="Input">
                      <input type="Text" name="usuario" id="LogUser" required>
                      <label for="LogUser">Usuario</label>
                    </div>
                    <div class="Input">
                        <input type="Password" name="contra" required>
                        <label>Contraseña</label>
                    </div>
                    <a href="registro.html" class="registro">REGISTRATE</a>
                    <br>
                    <input type="submit" value="Login" class="submit-btn">
                    
                </form>


            </div>
        <!---->
        </div>
            
    </body>
</html>

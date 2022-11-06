<?php
      session_start();
      $_SESSION['user'];
      if (!isset($_SESSION['user'])){
       header('location: bienvenida.html');
      }
?>

<html>
    <html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú</title>
    <link rel="stylesheet" href="bar_menu.css">
	<script src="https://kit.fontawesome.com/eb496ab1a0.js"></script>
    
  
</head>
<body>


<nav>
    <label for="" class="brand">
        <a href=""><img class="main-img"  src="imgs/loguito.png" alt="logo-pagina"></a>
    </label>

    <ul>
			<li><a href="indexUser.php" class="menu_item menu_item--active"> VER MENÚ </a></li>
            <li><a href="contactanos.php"> CONTACTANOS </a></li>
            <li><a href="sugerencias.php"> SUGERENCIAS </a></li>
			<li><a href="pagina"> SUSCRIBETE </a></li>
			<li><a href="salir.php"> CERRAR SESION </a></li>

    </ul>


</nav>
<br>
 
   <center>   
    <table align="center">
        <tr>
            <td><a href="vocales.php"><img class="img_voc" src="imgs/vocales.jpg"></a></td>
            <td><a href="colores.php"><img class="img_voc" src="imgs/colores.jpg"></a></td>
            <td><img class="img_voc" src="imgs/vocales.png"></td>
        </tr>
        <tr>
            <td colspan=3 align="center">
				<img class="img_voc" src="imgs/vocales.png">
				<img class="img_voc" src="imgs/vocales.png">
			</td>
            
        </tr>

    </table>
    </center> 
<br>
<br>
    
<br>      
<footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="imgs/loguito.png" id="logo_pag">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos una pagina dedicada a la estimulacion en el habla de los niños, 
                    ofrecemos herramientas básicas para que puedan aprender las palabras principales para el habla.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>				
			</div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Genius Baby</b> - All Rights Reserved.</small>
        </div>
    </footer>  
      
</body>
</html>

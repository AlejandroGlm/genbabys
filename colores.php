<?php
      session_start();
      $_SESSION['user'];
      if (!isset($_SESSION['user'])){
       header('location: bienvenida.html');
      }
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Colores</title>
    <link rel="stylesheet" href="bar_menu.css"> 
	<link rel="stylesheet" href="slider.css"> 
    <script src="https://kit.fontawesome.com/eb496ab1a0.js"></script>
</head>
	
<title>Colores</title>
</head>

<body>
	
	<header>
        <nav>
            <label for="" class="brand">
        		<a href=""><img class="main-img"  src="imgs/loguito.png" alt="logo-pagina"></a>
    		</label>
                
            
        
            <ul>
                   
                    
                    <!-- menu original --debe ir en la mayoria de paginas-->
					<li><a href="indexUser.php"> VER MENÚ </a></li>
                    <li><a id="btn-header" href="contactanos.php"> CONTACTANOS </a></li>
                    <li><a id="btn-header" href="sugerencias.php"> SUGERENCIAS </a></li>
                    <li><a id="btn-header" href="pagina"> SUSCRÍBETE </a>
					<li><a href="salir.php"> CERRAR SESION </a></li>
                    </li>      
            </ul>
        
        
        </nav>


    </header>
	
	
	
<center> 

	


	
<table align="center">

    <tr>
		<tr>
			<td align="center">
				<P id="orden">Da click en la imagen para reproducir el audio</P>
			</td>
		</tr>

        <td align="center"> <br>
            <div class="container">

                <div class="mySlides">
                    <audio id="vocal-a" src="audio/vocal-a.mp3" ></audio>
                    <img src="imgs/colores/amarillo.jpg" alt="" onclick="document.getElementById('vocal-a').play()" style="cursor:pointer">
                </div>

                <div class="mySlides">
                    <audio id="vocal-e" src="audio/vocal-e.mp3" ></audio>
                    <img src="imgs/colores/azul.jpg" alt="" onclick="document.getElementById('vocal-e').play()" style="cursor:pointer">
                </div>

                <div class="mySlides">
                    <audio id="vocal-i" src="audio/vocal-i.mp3" ></audio>
                    <img src="imgs/vocales/Ii.jpg" alt="" onclick="document.getElementById('vocal-i').play()" style="cursor:pointer">
                </div>

                <div class="mySlides">
                    <audio id="vocal-o" src="audio/vocal-o.mp3" ></audio>
                    <img src="imgs/vocales/Oo.jpg" alt="" onclick="document.getElementById('vocal-o').play()" style="cursor:pointer">
                </div>

                <div class="mySlides">
                    <audio id="vocal-u" src="audio/vocal-u.mp3" ></audio>
                    <img src="imgs/vocales/Uu.jpg" alt="" onclick="document.getElementById('vocal-u').play()" style="cursor:pointer">
                </div>
				
				<div class="mySlides">
                    <audio id="vocal-u" src="audio/vocal-u.mp3" ></audio>
                    <img src="imgs/vocales/Uu.jpg" alt="" onclick="document.getElementById('vocal-u').play()" style="cursor:pointer">
                </div>
				
				<div class="mySlides">
                    <audio id="vocal-u" src="audio/vocal-u.mp3" ></audio>
                    <img src="imgs/vocales/Uu.jpg" alt="" onclick="document.getElementById('vocal-u').play()" style="cursor:pointer">
                </div>
				
				<div class="mySlides">
                    <audio id="vocal-u" src="audio/vocal-u.mp3" ></audio>
                    <img src="imgs/vocales/Uu.jpg" alt="" onclick="document.getElementById('vocal-u').play()" style="cursor:pointer">
                </div>
				
				<div class="mySlides">
                    <audio id="vocal-u" src="audio/vocal-u.mp3" ></audio>
                    <img src="imgs/vocales/Uu.jpg" alt="" onclick="document.getElementById('vocal-u').play()" style="cursor:pointer">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>


        </td>
    </tr>

</table>
</center>	

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
        
	

             
 
<script src="slider.js"></script> 


</body>
</html>


	
</body>
</html>

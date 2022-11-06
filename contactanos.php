<!-- pagina contactanos-->

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
	<title>Contáctanos</title>
    <link rel="stylesheet" href="bar_menu.css"> 
    <link rel="stylesheet" href="contactanos.css"> 
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
                    <li><a id="btn-header" class="menu_item menu_item--active" href="contactanos.php"> CONTACTANOS </a></li>
                    <li><a id="btn-header" href="sugerencias.php"> SUGERENCIAS </a></li>
                    <li><a id="btn-header" href="pagina"> SUSCRÍBETE </a>
					<li><a href="salir.php"> CERRAR SESION </a></li>
                    </li>      
            </ul>
        
        
        </nav>


    </header>
    <br>
    <br>

    <main class="container-about">
            <div class="content-aboutus">
                <br>
                <br>
                <h1 class="conten-about">CONTÁCTANOS</h1>
                <br>
                <br>
                <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.121567893292!2d-98.15643557152525!3d19.058391916225805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc1c9a30530ab%3A0xefd33e2f1a6ca5a2!2sUniversidad%20Tecnol%C3%B3gica%20de%20Puebla!5e0!3m2!1ses!2smx!4v1653609319718!5m2!1ses!2smx" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <br>
                <br>
                <center>
                <div class="direc">
                <h3>Dirección</h3>
                <p>Antiguo Camino a La Resurrección 1002 - A, Zona Industrial, 72300 Puebla, Pue.</p>
                </div>
                <br>
                <br>
                </center>
                <section class="about-services">
                    <div class="contenedor">
                        <h1 class="tit-services">Nuestros Servicios</h1>
                        <div class="servicio-cont">

                            <div class="servicio-ind">
                                <!--img src="imgs/boli1.jpg" alt=""-->
                                <h4>NUMERO DE CONTACTO</h4>
                                <br>
                                Osvaldo A. Gaspar Rodriguez
                                <br>
                                +52 22 13 63 54 06 
                            </div>
                            <div class="servicio-ind">
                            <!--img src="imgs/boli2.jpg" alt=""-->
                                <h4>CORREO ELECTRONICO</h4>
                                <br>
                            <p>geniusbabys@gmail.com</p>
                            </div>
                        </div> 
                        
                        <br><br>
                    </div>
                </section>
            </div>
    </main>
</div>   


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

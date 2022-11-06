
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
                    <li><a id="btn-header" href="contactanos.php"> CONTACTANOS </a></li>
                    <li><a id="btn-header" class="menu_item menu_item--active" href="sugerencias.php"> SUGERENCIAS </a></li>
                    <li><a id="btn-header" href="pagina"> SUSCRÍBETE </a>
					<li><a href="salir.php"> CERRAR SESION </a></li>
                    </li>      
            </ul>
        
        
        </nav>


    </header>

    </body>

    </html>
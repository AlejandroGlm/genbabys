<?php
    include 'conn.php';

    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $usuario=$_POST["usuarioreg"];
    $password=$_POST["passwordreg"];

    $insertar = "INSERT INTO clientes(idCliente, Nombre, Email, Usuario, Contrasena)
    VALUES('' , '$nombre' , '$email', '$usuario',  '$password')";


	


    $resultado=mysqli_query($conn, $insertar);


    if(!$resultado){
       echo "Error al ingresar los datos en la base";
	}

    
	
    else{
        echo "REGISTRADO.";
          Header("Location:indexUser.php");
        
   
    }


    mysqli_close($conn);

?>

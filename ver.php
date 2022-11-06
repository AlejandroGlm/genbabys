<?php
    include 'conn.php';
    session_start();

    $usuario=$_POST['usuario'];
    $password=$_POST['contra'];

    $_SESSION['user']= $usuario;

    $query="SELECT Usuario, Contrasena FROM clientes WHERE Usuario = '$usuario' AND Contrasena= '$password'";
    //conexion a base desde cuenta admin
    //$query2="SELECT Usuario, Contra FROM administrador WHERE Usuario = '$usuario' AND Contra = '$password'";
    
    $resultado=mysqli_query($conn, $query);
    //$resultado2=mysqli_query($conn, $query2);
    $filas=mysqli_num_rows($resultado);
    //$filas2=mysqli_num_rows($resultado2);

    if($filas>0){
         #pagina index
        header('Location: indexUser.php');

    }
    //elseif($filas2>0){
       
      //  header('Location: indexAdmin.php');
    //}
    else{
        $_SESSION['intentos']= $_SESSION['intentos']+1 ;
        header('Location: login.php');
    }
    mysqli_free_result($resultado);
    mysqli_close($conn);
?>

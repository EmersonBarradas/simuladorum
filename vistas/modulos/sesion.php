<?php
  // echo "hola soy Sesión en módulo";
  if(isset($_POST["btnLogin"])){
    
    include("controladores/global/conexion.php"); 

    //print_r($_POST["txtEmail"]);
    //print_r($_POST["txtPassword"]);
    
    $txtEmail=($_POST["txtEmail"]);
    $txtPassword=($_POST["txtPassword"]);
    
    $sentenciaSQL=$pdo->prepare("SELECT * FROM tblusuarios 
    WHERE usuario=:usuario 
    AND clave=:clave");

    $sentenciaSQL->bindParam("usuario",$txtEmail,PDO::PARAM_STR);
    $sentenciaSQL->bindParam("clave",$txtPassword,PDO::PARAM_STR);
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    $numeroRegistros=$sentenciaSQL->rowCount();

    $tipousuario="N";
    
    if($numeroRegistros>=1){
      session_start();
      $_SESSION['usuario']=$registro;
      $_SESSION['nro_empresa']=0;
      $tipousuario=$registro['tipo'];

      if($tipousuario=="A"){
        header('Location:vistas/entorno-seleccion.php');
      }else {
        header('Location:vistas/inicio.php');
      }
      
    }else{
      echo "Usuario no encontrado o clave errada";
    }

}
?>
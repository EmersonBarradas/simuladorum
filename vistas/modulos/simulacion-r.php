<?php
  include('../controladores/global/sesiones.php');
  include('../controladores/global/conexion.php');

  $usuariosesion=$_SESSION['usuario'];
  $procesar="ok";
  $mensaje_usuario="";

  if(isset($_POST["btn_accion"])){

    $accion=($_POST["btn_accion"]);

    switch($accion){

      case "Guardar";
          // echo "<script> alert('Quieres cancelar Operación...'); </script>";

          $idsimulacion=($_POST["txtidsimulacion"]);
          $fechainicio=($_POST["fechainicio"]);
          $descrip=($_POST["txtdescrip"]);
          $estatus="A";
          $fechareg=($_POST["fechainicio"]);
          $usuario_reg=$usuariosesion['nro'];
          $estatus_reg="A";

          $sentencia=$pdo->prepare("INSERT INTO simulacion(nro,id,fecha_inicio,descripcion,estatus,fecha_reg,usuario_reg,estatus_reg) 
          VALUES (NULL, :id, :fecha_inicio, :descripcion, :estatus, :fecha_reg, :usuario_reg, :estatus_reg)");

          $sentencia->bindParam(':id',$idsimulacion,PDO::PARAM_STR);
          $sentencia->bindParam(':fecha_inicio',$fechainicio);
          $sentencia->bindParam(':descripcion',$descrip,PDO::PARAM_STR);
          $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
          $sentencia->bindParam(':fecha_reg',$fechareg);
          $sentencia->bindParam(':usuario_reg',$usuario_reg,PDO::PARAM_INT);
          $sentencia->bindParam(':estatus_reg',$estatus_reg);
          $sentencia->execute();

          $procesar="Listo";
          $mensaje_usuario="Simulación Creada Satisfactoriamente";

      break;

      case "Cancelar";
          // echo "<script> alert('Quieres cancelar Operación...'); </script>";
          $procesar="ok";
          header('Location:simulacion.php');
      break;

      case "Aceptar";
          // echo "<script> alert('Quieres Aceptar Operación...'); </script>";
          $procesar="ok";
          header('Location:simulacion.php');
      break;

      case "Actualizar";
          // echo "<script> alert('Quieres Actualizar Registro...'); </script>";
          // if ($password1==$password2){
          // 
          // $sentencia=$pdo->prepare("UPDATE Tblusuarios SET 
          // clave=:clave,
          // nombre=:nombre WHERE
          // nro=:nro");
              
          // $sentencia->bindParam(':nro',$nro,PDO::PARAM_STR);
          // $sentencia->bindParam(':nombre',$nombre,PDO::PARAM_STR);
          // $sentencia->bindParam(':clave',$password1,PDO::PARAM_STR);
          // $sentencia->execute();

          // echo "<script> alert('Los Password son iguales...'); </script>";
          // $accion="C";
          // $mensaje_usuario="Usuario Actualizado Satisfactoriamente";
          // $procesar="listo";
          // }else{
          //     // echo "<script> alert('Los Password no son iguales...'); </script>";
          //     $accion="E";
          //     $mensaje_usuario="No se pudo actualizar, claves no coinciden";
          //     $error_accion=2;
          //    $procesar="ok";
          //}

      break;

      case "Eliminar";
          // echo "<script> alert('Quieres Eliminar Registro...'); </script>";
          // echo "<script> alert('Usuario Eliminado Satisfactoriamente...'); </script>";
          // header('Location:usuarios.php');

          // $sentencia=$pdo->prepare("DELETE FROM Tblusuarios WHERE nro=:nro");
          // $sentencia->bindParam(':nro',$nro,PDO::PARAM_STR);
          // $sentencia->execute();
      break;
      
      case "Finalizar";
          echo "<script> alert('Quieres Finalizar Simulación...'); </script>";
          // echo "<script> alert('Usuario Eliminado Satisfactoriamente...'); </script>";
          // header('Location:usuarios.php');
      break;
    }
  }
?>
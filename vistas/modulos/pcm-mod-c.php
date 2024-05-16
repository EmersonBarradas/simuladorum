<?php
  include('../controladores/global/conexion.php');
  include('../controladores/global/sesiones.php');
  include('../controladores/global/constantes.php');

//Datos del Usuario
  $usuariosesion=($_SESSION['usuario']);
  $txtUsuario=$usuariosesion['nro'];
  $txtIdUsuario=$usuariosesion['id'];
  $txtUsuarioTipo=$usuariosesion['tipo'];

// Variables de Acción
  $procesar="ok"; //Muestra Vista normal
  $error_accion=0; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
  $mensaje_usuario=""; // Vacío en inicalización
  $calcular="NO";
  $btnEliminar=0;

// Inicialización de variables
  $txtId="";
  $txtNro_empresa=0;
  $txtNro_operador="";
  $txtCiclo=1;
  $txtFecha=date("Y/m/d");
  $txtCant_total_horas_trab=0.00;
  $txtMonto_pago_hora=0.00;
  $txtMonto_pago_adicional=0.00;
  $txtMonto_total_jornada=0.00;
  $txtCant_porcentaje_trab=0.00;
  $txtEmoji1="-";
  $txtEmoji2="-";

// Selección de Empresa / Entorno
  if ($txtUsuarioTipo=="A") {
    $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A'");
    $sentencia->execute();
    $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    $listado_empresa=$sentencia->rowCount();
    // echo "<script> alert('El usuario es ADMINISTRADOR...'); </script>";
    //print_r($cant_entorno);

  }else{
    // Selección de empresa del usuario -------------------------------------------------------------------------
    $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND usuario=$txtUsuario");
    $sentencia->execute();
    $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $cant_empresa=$sentencia->rowCount(); 

    foreach($listado_empresa as $empresa){
        $txtNro_empresa=$empresa['nro'];
        $txtNombre_empresa=$empresa['nombre'];
    }

    $sentencia=$pdo->prepare("SELECT * FROM `pcm_mod_operador` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
    $sentencia->execute();
    $listado_operador=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach($listado_operador as $operador){
      $txtOperador=$operador['nro'];
      $txtNombre_operador=$operador['nombre'];
    }
    // print_r($txtNombre_empresa);
    // print_r("</br>");
    // print_r($txtNro_empresa);
    // print_r("</br>");
  }
//----------------------------------------------------------------------------------------------

//Recepción de Post-----------------------------------------------------------------------------
  if(isset($_POST["btn_accion"])){

    $accion=($_POST["btn_accion"]);
    

    // Variables de Datos---------------------------------------------

    $txtNro=($_POST["txtNro"]);
    $txtNro_operador=($_POST["txtNro_operador"]);
    $txtCiclo=($_POST["txtCiclo"]);
    $txtFecha=($_POST["txtFecha"]);
    $txtCant_total_horas_trab=($_POST["txtCant_total_horas_trab"]);
    $txtMonto_pago_hora=($_POST["txtMonto_pago_hora"]);
    $txtMonto_pago_adicional=($_POST["txtMonto_pago_adicional"]);
    $txtMonto_total_jornada=($_POST["txtMonto_total_jornada"]);

    $operadorX=$txtNro_operador;

    $txtEstatus="A";
    $txtFecha_reg=date("Y/m/d");
    $txtUsuario_reg=$txtUsuario;
    $txtEstatus_reg="A";

    // -----------------------------------------------------------------

    switch($accion){
      case "X";
          // echo "<script> alert('Quieres Guardar Operación...'); </script>";
          // header('Location:usuarios.php');


          $btnEliminar=1;
                
      break;
      case "C";
          // echo "<script> alert('Quieres Guardar Operación...'); </script>";
          // header('Location:usuarios.php');


          $btnEliminar=0;
                
      break;


      case "Cancelar";
          // echo "<script> alert('Quieres cancelar Operación...'); </script>";
          $procesar="ok";
          header('Location:pcm-mod.php');
      break;

      case "Aceptar";
          // echo "<script> alert('Quieres Aceptar Operación...'); </script>";
          $procesar="ok";
          header('Location:pcm-mod.php');
      break;


      case "Eliminar";
          //echo "<script> alert('Quieres Eliminar Registro...'); </script>";
          $txtEstatus="E";
          $txtEstatus_reg="E";

          // Elimina registro
            $sentencia=$pdo->prepare("UPDATE pcm_mod_mov SET 
            estatus=:estatus,
            estatus_reg=:estatus_reg WHERE
            nro=:nro");
                    
            $sentencia->bindParam(':nro',$txtNro,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$txtEstatus,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus_reg',$txtEstatus_reg,PDO::PARAM_STR);
            $sentencia->execute();
          //-----------------------------------------------------------------------

          $procesar="Listo";
          $error_accion=1; 
          $mensaje_usuario="Registro Eliminado Satisfactoriamente...";
          
      break;
    }
  }
// -------------------------------------------------------------------------------------------

?>
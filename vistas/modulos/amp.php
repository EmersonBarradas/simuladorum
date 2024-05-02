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
  $estatus_empresa="SI";

  // Selección de Almacén
  if ($txtUsuarioTipo=="A") {
    // Asigno la empresa seleccionada
    $NroEmpresa=$_SESSION['nro_empresa'];

    // Selecciono la empresa
    $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND nro=$NroEmpresa");
    $sentencia->execute();
    $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $cant_empresa=$sentencia->rowCount(); 

    $sentencia=$pdo->prepare("SELECT * FROM `amp` WHERE estatus='A' AND nro_empresa=$NroEmpresa");
    $sentencia->execute();
    $listado_amp=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $cant_amp=$sentencia->rowCount();
    if ($cant_amp>=1){
        foreach($listado_amp as $amp){
          $NroAMP=$amp['nro'];
          $txtCant_capmax_lc=$amp['cant_capmax_lc'];
          $txtCant_existencia_lc=$amp['cant_existencia_lc'];
          $txtCant_capdisp_lc=$amp['cant_capdisp_lc'];
          $txtCant_capmax_ad=$amp['cant_capmax_ad'];
          $txtCant_existencia_ad=$amp['cant_existencia_ad'];
          $txtCant_capdisp_ad=$amp['cant_capdisp_ad'];
        }

        // selecciona movimientos de almacen------------------------------------------------------------------
        $sentencia=$pdo->prepare("SELECT * FROM `amp_mov` WHERE estatus='A' AND nro_empresa=$NroEmpresa");
        $sentencia->execute();
        $listado_amp_mov=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cant_amp_mov=$sentencia->rowCount();
        if ($cant_amp_mov>=1){

        }else{
          $encontrado="NO";
          $txtEmpresa="";
          $procesar="Listo"; //Muestra Vista normal
          $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
          $mensaje_usuario="No hay movimientos registrados";
        }
        // --------------------------------------------------------------------------------------------------
                        
      }else {
        $encontrado="NO";
        $txtEmpresa="";
        $procesar="listo"; //Muestra Vista normal
        $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
        $mensaje_usuario="No se encontró almacén de materia prima";
      } 


  }else{
    // Selección de empresa del usuario -------------------------------------------------------------------------
    $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND usuario=$txtUsuario");
    $sentencia->execute();
    $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $cant_empresa=$sentencia->rowCount(); 

    if ($cant_empresa>=1){
        foreach ($listado_empresa as $empresa){
            $NroEmpresa=$empresa['nro'];
            $NombreEmpresa=$empresa['nombre'];
            $EstatusEmpresa=$empresa['estatus'];
        }
        // Selecciona almacen del usuario---------------------------------------------------------------
        $sentencia=$pdo->prepare("SELECT * FROM `amp` WHERE estatus='A' AND nro_empresa=$NroEmpresa");
        $sentencia->execute();
        $listado_amp=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cant_amp=$sentencia->rowCount(); 

        if ($cant_amp>=1){
          foreach($listado_amp as $amp){
            $NroAMP=$amp['nro'];
            $txtCant_capmax_lc=$amp['cant_capmax_lc'];
            $txtCant_existencia_lc=$amp['cant_existencia_lc'];
            $txtCant_capdisp_lc=$amp['cant_capdisp_lc'];
            $txtCant_capmax_ad=$amp['cant_capmax_ad'];
            $txtCant_existencia_ad=$amp['cant_existencia_ad'];
            $txtCant_capdisp_ad=$amp['cant_capdisp_ad'];
          }

          // selecciona movimientos de almacen------------------------------------------------------------------
          $sentencia=$pdo->prepare("SELECT * FROM `amp_mov` WHERE estatus='A' AND nro_empresa=$NroEmpresa AND usuario_reg=$txtUsuario");
          $sentencia->execute();
          $listado_amp_mov=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_amp_mov=$sentencia->rowCount();
          if ($cant_amp_mov>=1){

          }else{
            $encontrado="NO";
            $txtEmpresa="";
            $procesar="Listo"; //Muestra Vista normal
            $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
            $mensaje_usuario="No hay movimientos registrados";
          }
          // --------------------------------------------------------------------------------------------------
                           
        }else {
          $encontrado="NO";
          $txtEmpresa="";
          $procesar="listo"; //Muestra Vista normal
          $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
          $mensaje_usuario="No se encontró almacén de materia prima";
        }
    }else{
      // Variables de Acción
      $procesar="listo"; //Muestra Vista normal
      $error_accion=2; // Valor 0 si todo va normal
      $mensaje_usuario="¡No hay empresa registrada!"; // Vacío en inicalización
      $estatus_empresa="NO";

    }
  }
  // --------------------------------------------------------------------------------



?>
<?php
  include('../controladores/global/conexion.php');
  include('../controladores/global/sesiones.php');
  include('../controladores/global/constantes.php');

//Datos del Usuario---------------------------------------------------------------------------------
  $usuariosesion=($_SESSION['usuario']);
  $txtUsuario=$usuariosesion['nro'];
  $txtIdUsuario=$usuariosesion['id'];
  $txtUsuarioTipo=$usuariosesion['tipo'];
//--------------------------------------------------------------------------------------------------

// Variables de Acción ----------------------------------------------------------------------------
  $procesar="ok"; //Muestra Vista normal
  $error_accion=0; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
  $mensaje_usuario=""; // Vacío en inicalización
  $calcular="NO";
  $btnOperador="NO";
//--------------------------------------------------------------------------------------------------

// Variables Iniciales ------------------------------------------------------------------------------ 
  $txtCant_horas_sem=0.00;
  $txtCant_horas_max_sem=0.00;
  $txtCant_total_horas_trab=0.00;
  $listado_pcm_mod=[];
//--------------------------------------------------------------------------------------------------  



// Selecciono empresa y operadores de la empresa del usuario ------------------------------------------------
  if ($txtUsuarioTipo=="A") {
      // Asigno la empresa seleccionada
      $NroEmpresa=$_SESSION['nro_empresa'];
      $txtNro_empresa=$NroEmpresa;

      // Selecciono la empresa
      $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND nro=$NroEmpresa");
      $sentencia->execute();
      $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $cant_empresa=$sentencia->rowCount(); 

      // Seleccionar produccción de la empresa
      $sentencia=$pdo->prepare("SELECT * FROM `pcm` WHERE estatus='A'AND nro_empresa=$NroEmpresa");
      $sentencia->execute();
      $listado_PCM=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $cant_PCM=$sentencia->rowCount();
      if($cant_PCM>=1){
          foreach($listado_PCM as $PCM){
              $nro_PCM=$PCM['nro'];
          }
      }

      // Selección Operador de empresa del usuario -------------------------------------------------------------------------
      $sentencia=$pdo->prepare("SELECT * FROM `pcm_mod_operador` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
      $sentencia->execute();
      $listado_operador=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $cant_listado_operador=$sentencia->rowCount();
    
      if($cant_listado_operador>=1){
          foreach($listado_operador as $operador){
            $txtNro_operador=$operador['nro'];
            $txtNombre_operador=$operador['nombre'];
            $txtCant_horas_sem=$operador['cant_horas_sem'];
            $txtCant_horas_max_sem=$operador['cant_horas_max_sem'];
          }

          // Selección de movimientos por usuario, empresa Y operador
          $sentencia=$pdo->prepare("SELECT * FROM `pcm_mod_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa AND nro_operador=$txtNro_operador ORDER BY ciclo ");
          $sentencia->execute();
          $listado_pcm_mod=$sentencia->fetchAll(PDO::FETCH_ASSOC);

          // Suma de horas trabajadas
          $sentencia=$pdo->prepare("SELECT sum(cant_total_horas_trab) FROM `pcm_mod_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa AND nro_operador=$txtNro_operador ");
          $sentencia->execute();
          $Suma_HorasTrabajadas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_sumadehoras=$sentencia->rowCount();
          //print_r($cant_sumadehoras);
          if($cant_sumadehoras>1){
            foreach($Suma_HorasTrabajadas as $TotalHorasTrabajadas){
              $txtCant_total_horas_trab=$TotalHorasTrabajadas['sum(cant_total_horas_trab)'];
            }
          }else{
            $txtCant_total_horas_trab=0.00;
          }
          // print_r($txtNombre_empresa);
          // print_r("</br>");
          // print_r($txtNro_empresa);
          // print_r("</br>");
      }

  }else{
      // Selección de empresa del usuario 
      $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND usuario=$txtUsuario");
      $sentencia->execute();
      $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $cant_listado_empresa=$sentencia->rowCount(); 

      if ($cant_listado_empresa>=1){
          foreach($listado_empresa as $empresa){
            $txtNro_empresa=$empresa['nro'];
            $txtNombre_empresa=$empresa['nombre'];
          }
          // Selección Operador de empresa del usuario -------------------------------------------------------------------------
          $sentencia=$pdo->prepare("SELECT * FROM `pcm_mod_operador` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
          $sentencia->execute();
          $listado_operador=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_listado_operador=$sentencia->rowCount();
        
          if($cant_listado_operador>=1){
              foreach($listado_operador as $operador){
                $txtNro_operador=$operador['nro'];
                $txtNombre_operador=$operador['nombre'];
                $txtCant_horas_sem=$operador['cant_horas_sem'];
                $txtCant_horas_max_sem=$operador['cant_horas_max_sem'];
              }

              // Selección de movimientos por usuario, empresa Y operador
              $sentencia=$pdo->prepare("SELECT * FROM `pcm_mod_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa AND nro_operador=$txtNro_operador ORDER BY ciclo ");
              $sentencia->execute();
              $listado_pcm_mod=$sentencia->fetchAll(PDO::FETCH_ASSOC);

              // Suma de horas trabajadas
              $sentencia=$pdo->prepare("SELECT sum(cant_total_horas_trab) FROM `pcm_mod_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa AND nro_operador=$txtNro_operador ");
              $sentencia->execute();
              $Suma_HorasTrabajadas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
              $cant_sumadehoras=$sentencia->rowCount();
              //print_r($cant_sumadehoras);
              if($cant_sumadehoras>1){
                foreach($Suma_HorasTrabajadas as $TotalHorasTrabajadas){
                  $txtCant_total_horas_trab=$TotalHorasTrabajadas['sum(cant_total_horas_trab)'];
                }
              }else{
                $txtCant_total_horas_trab=0.00;
              }
              // print_r($txtNombre_empresa);
              // print_r("</br>");
              // print_r($txtNro_empresa);
              // print_r("</br>");
          }else{
            $procesar="NO"; //Muestra Vista normal
            $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
            $mensaje_usuario="No Hay Operador registrado para la empresa"; // Vacío en inicalización
            $btnOperador="SI";
          }
      }else{
        $procesar="NO"; //Muestra Vista normal
        $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
        $mensaje_usuario="No Hay empresa registrada"; // Vacío en inicalización
      }
  }
//----------------------------------------------------------------------------------------------

//Recepción de Post-----------------------------------------------------------------------------
  if(isset($_POST["btn_accion"])){

    $accion=($_POST["btn_accion"]);
    

    // Variables de Datos---------------------------------------------
    $txtNro=0;
    // $txtId=($_POST["txtId"]);
    $txtNro_empresa=($_POST["txtEmpresa"]);
    $txtNro_operador=($_POST["txtOperador"]);
    // $txtCiclo=($_POST["txtCiclo"]);
    // $txtFecha=($_POST["txtFecha"]);
    // $txtCant_total_horas_trab=($_POST["txtCant_total_horas_trab"]);
    // $txtMonto_pago_hora=($_POST["txtMonto_pago_hora"]);
    // $txtMonto_pago_adicional=($_POST["txtMonto_pago_adicional"]);
    // $txtMonto_total_jornada=($_POST["txtMonto_total_jornada"]);
    // $txtCant_porcentaje_trab=($_POST["txtCant_porcentaje_trab"]);
    // $txtEmoji1=($_POST["txtEmoji1"]);
    // $txtEmoji2=($_POST["txtEmoji2"]);

    // -----------------------------------------------------------------

    switch($accion){
      case "Ver";
          // echo "<script> alert('Quieres Guardar Operación...'); </script>";
          // header('Location:usuarios.php');
          
        // Selección de movimientos por usuario, empresa y operador
          $sentencia=$pdo->prepare("SELECT * FROM `pcm_mod_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa AND nro_operador=$txtNro_operador ORDER BY ciclo ");
          $sentencia->execute();
          $listado_pcm_mod=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        // Suma de horas trabajadas
          $sentencia=$pdo->prepare("SELECT sum(cant_total_horas_trab) FROM `pcm_mod_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa AND nro_operador=$txtNro_operador ");
          $sentencia->execute();
          $Suma_HorasTrabajadas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          //print_r($Suma_HorasTrabajadas);
          foreach($Suma_HorasTrabajadas as $TotalHorasTrabajadas){
            $txtCant_total_horas_trab=$TotalHorasTrabajadas['sum(cant_total_horas_trab)'];
          }

      break;
      case "Calcular";
          // echo "<script> alert('Quieres Guardar Operación...'); </script>";
          // header('Location:usuarios.php');
          
          // Calcula el valor de la hora adicional
          $txtMonto_pago_adicional=$txtMonto_pago_hora*0.5;

          //Calcula el el monto total de la jornada
          if ($txtCant_total_horas_trab<=40){
            $txtMonto_total_jornada=$txtCant_total_horas_trab*$txtMonto_pago_hora;
          }
          if ($txtCant_total_horas_trab>40){
            $txtMonto_total_jornada=(40*$txtMonto_pago_hora)+(($txtCant_total_horas_trab-40)*$txtMonto_pago_adicional);
          }

          //Calcular el % trabajado
          $txtCant_porcentaje_trab=($txtCant_total_horas_trab*100)/40;

          if ($txtCant_porcentaje_trab>124) {
            $txtEmoji1="?";
          }else {
            if ($txtCant_porcentaje_trab>122) {
              $txtEmoji1=":(";
            }else {
              if ($txtCant_porcentaje_trab>120) {
                $txtEmoji1=":()";
              }else {
                if ($txtCant_porcentaje_trab>115) {
                  $txtEmoji1=":%";
                }else{
                  if ($txtCant_porcentaje_trab>110) {
                    $txtEmoji1=":?";
                  }else {
                    if ($txtCant_porcentaje_trab>105) {
                      $txtEmoji1=":?";
                    }else{
                      if ($txtCant_porcentaje_trab==100) {
                        $txtEmoji1=":)";
                      }
                    }
                  }
                }
              }
            }  
          }
          
          if ($txtCant_total_horas_trab>20) {
            $txtEmoji2=":()";
          }else {
            if ($txtCant_total_horas_trab>10) {
              $txtEmoji2=":|";
            }else {
              if ($txtCant_total_horas_trab>1) {
                $txtEmoji2=":(";
              }else {
                if ($txtCant_total_horas_trab==0) {
                  $txtEmoji2="Si";
                }
              }
            }
          }

          // print_r("</br>");
          // print_r("Empresa: ".$txtEmpresa);
                
          // print_r("</br>");
          // print_r("Usuario: ".$txtUsuario_reg);

          // print_r("</br>");
          // print_r("Almacén: ".$txtNro_AMP);

          $calcular="SI";
                
      break;
      case "Guardar";
          // echo "<script> alert('Quieres Guardar Operación...'); </script>";
          // header('Location:usuarios.php');

          $sentencia=$pdo->prepare("INSERT INTO pcm_mod_mov (nro,id,nro_empresa,nro_operador,ciclo,fecha,
          cant_total_horas_trab,monto_pago_hora,monto_pago_adicional,monto_total_jornada,cant_porcentaje_trab,
          emoji1,emoji2,estatus,fecha_reg,usuario_reg,estatus_reg)  
          VALUES (NULL, :id, :nro_empresa, :nro_operador, :ciclo, :fecha, :cant_total_horas_trab,
          :monto_pago_hora, :monto_pago_adicional, :monto_total_jornada, :cant_porcentaje_trab,
          :emoji1, :emoji2, :estatus, :fecha_reg, :usuario_reg, :estatus_reg)");

          $sentencia->bindParam(':id',$txtId,PDO::PARAM_STR);
          $sentencia->bindParam(':nro_empresa',$txtNro_empresa,PDO::PARAM_INT);
          $sentencia->bindParam(':nro_operador',$txtNro_operador,PDO::PARAM_STR);
          $sentencia->bindParam(':ciclo',$txtCiclo,PDO::PARAM_STR);
          $sentencia->bindParam(':fecha',$txtFecha,PDO::PARAM_STR);
          $sentencia->bindParam(':cant_total_horas_trab',$txtCant_total_horas_trab,PDO::PARAM_STR);
          $sentencia->bindParam(':monto_pago_hora',$txtMonto_pago_hora,PDO::PARAM_STR);
          $sentencia->bindParam(':monto_pago_adicional',$txtMonto_pago_adicional,PDO::PARAM_STR);
          $sentencia->bindParam(':monto_total_jornada',$txtMonto_total_jornada,PDO::PARAM_STR);
          $sentencia->bindParam(':cant_porcentaje_trab',$txtCant_porcentaje_trab,PDO::PARAM_STR);
          $sentencia->bindParam(':emoji1',$txtEmoji1,PDO::PARAM_STR);
          $sentencia->bindParam(':emoji2',$txtEmoji2,PDO::PARAM_STR);
          $sentencia->bindParam(':estatus',$txtEstatus,PDO::PARAM_STR);
          $sentencia->bindParam(':fecha_reg',$txtFecha_reg);
          $sentencia->bindParam(':usuario_reg',$txtUsuario_reg,PDO::PARAM_INT);
          $sentencia->bindParam(':estatus_reg',$txtEstatus_reg,PDO::PARAM_STR);
          $sentencia->execute();

          // echo "<br>";
          // print_r("Nro: ".$txtNro);
          // echo "<br>";
          // print_r("ID: ".$txtId);
          // echo "<br>";
          // print_r("Fecha: ".$txtFecha);
          // echo "<br>";
          // print_r("Empresa: ".$txtEmpresa);
          // echo "<br>";
          // print_r("ID Empresa: ".$txtIdEmpresa);
          // echo "<br>";
          // print_r("Observación: ".$txtObservacion);
          // echo "<br>";
          // print_r("Monto Multa: ".$txtMontoMulta);
          // echo "<br>";
          // print_r("Fecha de Pago: ".$txtFechaPago);
          // echo "<br>";
          // print_r("Estatus: ".$txtEstatus);
          // echo "<br>";
          // print_r("Fecha de Registro: ".$txtFecha_reg);
          // echo "<br>";
          // print_r("Usuario del Registro: ".$txtUsuario_reg);
          // echo "<br>";
          // print_r("Estatus de Registro: ".$txtEstatus_reg);
          // echo "<br>";
          // print_r("Ciclo: ".$txtCiclo);
          // echo "<br>";
          
          // echo "<script> alert('Bitacora Registrada Satisfactoriamente...'); </script>";
          $procesar="Listo";
          $error_accion=1; 
          $mensaje_usuario="Registro Satisfactorio...";

      break;

      case "Cancelar";
          // echo "<script> alert('Quieres cancelar Operación...'); </script>";
          $procesar="ok";
          header('Location:pcm-mod-operador.php');
      break;

      case "Aceptar";
          // echo "<script> alert('Quieres Aceptar Operación...'); </script>";
          $procesar="ok";
          header('Location:pcm-mod-operador.php');
      break;

      case "Actualizar";
          // echo "<script> alert('Quieres Actualizar Registro...'); </script>";

              $sentencia=$pdo->prepare("UPDATE Tblusuarios SET 
              clave=:clave,
              nombre=:nombre WHERE
              nro=:nro");
              
              $sentencia->bindParam(':nro',$nro,PDO::PARAM_STR);
              $sentencia->bindParam(':nombre',$nombre,PDO::PARAM_STR);
              $sentencia->bindParam(':clave',$password1,PDO::PARAM_STR);
              $sentencia->execute();

              $accion="C";
              $mensaje_usuario="Usuario Actualizado Satisfactoriamente";
              $procesar="listo";

      break;

      case "Eliminar";
          // echo "<script> alert('Quieres Eliminar Registro...'); </script>";
          // echo "<script> alert('Usuario Eliminado Satisfactoriamente...'); </script>";
          // header('Location:usuarios.php');

          $sentencia=$pdo->prepare("DELETE FROM Tblusuarios WHERE nro=:nro");
          $sentencia->bindParam(':nro',$nro,PDO::PARAM_STR);
          $sentencia->execute();

          $procesar="listo";
          $accion="C";
          $error_accion=2;
          $mensaje_usuario="Usuario Eliminado Satisfactoriamente...";
          $nro=0;
          $id="";
          $nombre="";
          $usuario="";
          $tipousuario="";
          $fecha_reg="";
          $password1="";
          $password2="";
      break;
    }
  }
//-----------------------------------------------------------------------------------------------------
?>
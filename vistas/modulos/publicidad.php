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
  $btnGuardar="NO";

// Variables de datos ---------------------------------------
  $txtpub_dub_arm=1;
  $txtpub_dub_ciu=1;
  $txtpub_dub_sfi=1;
  $txtpub_dub_lsa=1;
  $monto_dub=0.00;
  
  $txtpub_moz_arm=1;
  $txtpub_moz_ciu=1;
  $txtpub_moz_sfi=1;
  $txtpub_moz_lsa=1;
  $monto_moz=0.00;
  
  $txtpub_gou_arm=1;
  $txtpub_gou_ciu=1;
  $txtpub_gou_sfi=1;
  $txtpub_gou_lsa=1;
  $monto_gou=0.00;
  
  $txtpub_die_arm=1;
  $txtpub_die_ciu=1;
  $txtpub_die_sfi=1;
  $txtpub_die_lsa=1;
  $monto_die=0.00;
  
// ----------------------------------------------------------

 

// inicialización de variables
  $txtTotal_inversion=0.00;
  
// Selección de Empresa / Entorno y operador
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

    if ($cant_empresa>=1){
      foreach($listado_empresa as $empresa){
          $txtNro_empresa=$empresa['nro'];
          $txtNombre_empresa=$empresa['nombre'];
      }
      // Selecciono publicidad de la empresa  ---------------------------------------------------------
        $sentencia=$pdo->prepare("SELECT * FROM `publicidad` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
        $sentencia->execute();
        $listado_publicidad=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cant_publicidad=$sentencia->rowCount();
        
        if($cant_publicidad>=1){
          foreach($listado_publicidad as $publicidad){
            $Nro_publicidad=$publicidad['nro'];
          }
          $txtNombre_publicidad="encontró publicidad";
        }else{
          $txtNombre_publicidad="No se encontró publicidad";
        }
      // -----------------------------------------------------------------------------------------------
    }else{
      $procesar="listo"; //Muestra Vista normal
      $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
      $mensaje_usuario="¡No hay empresa registrada!"; // Vacío en inicalización
    }
  }
//----------------------------------------------------------------------------------------------

//Recepción de Post-----------------------------------------------------------------------------
if(isset($_POST["btn_accion"])){

  $accion=($_POST["btn_accion"]);
  $txtNro_empresa=($_POST["txtEmpresa"]);
  $txtTotal_inversion=($_POST["txtTotal_inversion"]);
  

  // Variables de Datos---------------------------------------------

  $txtNro_empresa=($_POST["txtEmpresa"]);

  $txtpub_dub_arm=($_POST["txtpub_dub_arm"]);
  $txtpub_dub_ciu=($_POST["txtpub_dub_ciu"]);
  $txtpub_dub_sfi=($_POST["txtpub_dub_sfi"]);
  $txtpub_dub_lsa=($_POST["txtpub_dub_lsa"]);

  
  $txtpub_moz_arm=($_POST["txtpub_moz_arm"]);
  $txtpub_moz_ciu=($_POST["txtpub_moz_ciu"]);
  $txtpub_moz_sfi=($_POST["txtpub_moz_sfi"]);
  $txtpub_moz_lsa=($_POST["txtpub_moz_lsa"]);

  
  $txtpub_gou_arm=($_POST["txtpub_gou_arm"]);
  $txtpub_gou_ciu=($_POST["txtpub_gou_ciu"]);
  $txtpub_gou_sfi=($_POST["txtpub_gou_sfi"]);
  $txtpub_gou_lsa=($_POST["txtpub_gou_lsa"]);

  
  $txtpub_die_arm=($_POST["txtpub_die_arm"]);
  $txtpub_die_ciu=($_POST["txtpub_die_ciu"]);
  $txtpub_die_sfi=($_POST["txtpub_die_sfi"]);
  $txtpub_die_lsa=($_POST["txtpub_die_lsa"]);
 


  // -----------------------------------------------------------------

  switch($accion){

    case "Calcular";
        // echo "<script> alert('Quieres Guardar Operación...'); </script>";
        // header('Location:usuarios.php');
        
        $videos=5000;
        $vallas=3000;
        $flyers=2000;
        $otros=1000;
        $txtTotal_inversion=0.00;

        // Queso Duro
        switch($txtpub_dub_arm){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        switch($txtpub_dub_ciu){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $monto_dub=$monto_dub+$otros;
          break;
        }

        switch($txtpub_dub_sfi){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        switch($txtpub_dub_lsa){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        // Queso Mozarella

        switch($txtpub_moz_arm){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }
        
        switch($txtpub_moz_ciu){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        switch($txtpub_moz_sfi){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        switch($txtpub_moz_lsa){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }
        
        // Queso Gouda
        switch($txtpub_gou_arm){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        switch($txtpub_gou_ciu){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        switch($txtpub_gou_sfi){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        switch($txtpub_gou_lsa){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        // Queso Dietético
        switch($txtpub_die_arm){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        switch($txtpub_die_ciu){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        switch($txtpub_die_sfi){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        switch($txtpub_die_lsa){
          case 1;
            $txtTotal_inversion=$txtTotal_inversion+0;
          break;

          case 2;
            $txtTotal_inversion=$txtTotal_inversion+$videos;
          break;

          case 3;
            $txtTotal_inversion=$txtTotal_inversion+$vallas;
          break;
          
          case 4;
            $txtTotal_inversion=$txtTotal_inversion+$flyers;
          break;

          case 5;
            $txtTotal_inversion=$txtTotal_inversion+$otros;
          break;
        }

        $calcular="SI";
        $btnGuardar="SI";
              
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

    case "Limpiar";
        //echo "<script> alert('Quieres Limpiar...'); </script>";

        $txtpub_dub_arm=1;
        $txtpub_dub_ciu=1;
        $txtpub_dub_sfi=1;
        $txtpub_dub_lsa=1;

        
        $txtpub_moz_arm=1;
        $txtpub_moz_ciu=1;
        $txtpub_moz_sfi=1;
        $txtpub_moz_lsa=1;

        
        $txtpub_gou_arm=1;
        $txtpub_gou_ciu=1;
        $txtpub_gou_sfi=1;
        $txtpub_gou_lsa=1;

        
        $txtpub_die_arm=1;
        $txtpub_die_ciu=1;
        $txtpub_die_sfi=1;
        $txtpub_die_lsa=1;

        $txtTotal_inversion=0.00;
        $procesar="ok";
        // header('Location:pcm-mod-operador.php');
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
// -------------------------------------------------------------------------------------------
?>
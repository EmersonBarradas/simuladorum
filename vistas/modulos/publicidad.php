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
  $EsNuevo="NO";

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
      // Asigno la empresa seleccionada
      $NroEmpresa=$_SESSION['nro_empresa'];
      $txtNro_empresa=$NroEmpresa;

      // Selecciono la empresa
      $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND nro=$NroEmpresa");
      $sentencia->execute();
      $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $cant_empresa=$sentencia->rowCount(); 

      // Selecciono publicidad de la empresa  ---------------------------------------------------------
      $sentencia=$pdo->prepare("SELECT * FROM `publicidad` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
      $sentencia->execute();
      $listado_publicidad=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $cant_publicidad=$sentencia->rowCount();
      
      if($cant_publicidad>=1){
        //echo "<script> alert('Ya existe ...'); </script>";

        foreach($listado_publicidad as $publicidad){
          $Nro_publicidad=$publicidad['nro'];
          $txtpub_dub_arm=$publicidad['pub_dub_arm'];
          $txtpub_dub_ciu=$publicidad['pub_dub_ciu'];
          $txtpub_dub_sfi=$publicidad['pub_dub_sfi'];
          $txtpub_dub_lsa=$publicidad['pub_dub_lsa'];
            
          $txtpub_moz_arm=$publicidad['pub_moz_arm'];
          $txtpub_moz_ciu=$publicidad['pub_moz_ciu'];
          $txtpub_moz_sfi=$publicidad['pub_moz_sfi'];
          $txtpub_moz_lsa=$publicidad['pub_moz_lsa'];
            
          $txtpub_gou_arm=$publicidad['pub_gou_arm'];
          $txtpub_gou_ciu=$publicidad['pub_gou_ciu'];
          $txtpub_gou_sfi=$publicidad['pub_gou_sfi'];
          $txtpub_gou_lsa=$publicidad['pub_gou_lsa'];
            
          $txtpub_die_arm=$publicidad['pub_die_arm'];
          $txtpub_die_ciu=$publicidad['pub_die_ciu'];
          $txtpub_die_sfi=$publicidad['pub_die_sfi'];
          $txtpub_die_lsa=$publicidad['pub_die_lsa'];

          $txtTotal_inversion=$publicidad['total_inversion'];
        }

        $txtNombre_publicidad="encontró publicidad";
      }

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
          //echo "<script> alert('Ya existe ...'); </script>";

          foreach($listado_publicidad as $publicidad){
            $Nro_publicidad=$publicidad['nro'];
            $txtpub_dub_arm=$publicidad['pub_dub_arm'];
            $txtpub_dub_ciu=$publicidad['pub_dub_ciu'];
            $txtpub_dub_sfi=$publicidad['pub_dub_sfi'];
            $txtpub_dub_lsa=$publicidad['pub_dub_lsa'];
              
            $txtpub_moz_arm=$publicidad['pub_moz_arm'];
            $txtpub_moz_ciu=$publicidad['pub_moz_ciu'];
            $txtpub_moz_sfi=$publicidad['pub_moz_sfi'];
            $txtpub_moz_lsa=$publicidad['pub_moz_lsa'];
              
            $txtpub_gou_arm=$publicidad['pub_gou_arm'];
            $txtpub_gou_ciu=$publicidad['pub_gou_ciu'];
            $txtpub_gou_sfi=$publicidad['pub_gou_sfi'];
            $txtpub_gou_lsa=$publicidad['pub_gou_lsa'];
              
            $txtpub_die_arm=$publicidad['pub_die_arm'];
            $txtpub_die_ciu=$publicidad['pub_die_ciu'];
            $txtpub_die_sfi=$publicidad['pub_die_sfi'];
            $txtpub_die_lsa=$publicidad['pub_die_lsa'];

            $txtTotal_inversion=$publicidad['total_inversion'];
          }

          $txtNombre_publicidad="encontró publicidad";
        }else{
          $txtNombre_publicidad="No se encontró publicidad";
          $EsNuevo="SI";
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
      // Variables de control
        $calcular="SI";
        $btnGuardar="SI";
              
    
      break;
    case "Guardar";
        // echo "<script> alert('Quieres Guardar Operación...'); </script>";
        // header('Location:usuarios.php');

        if($EsNuevo=="SI"){
          //echo "<script> alert('Es Nuevo...'); </script>";

          $txtEstatus="A";
          $txtFecha_reg=date("Y/m/d");
          $txtUsuario_reg=$txtUsuario;
          $txtEstatus_reg="A";


          $sentencia=$pdo->prepare("INSERT INTO publicidad (nro,nro_empresa,
          pub_dub_arm, pub_dub_ciu, pub_dub_sfi, pub_dub_lsa, pub_moz_arm, pub_moz_ciu, pub_moz_sfi, pub_moz_lsa,
          pub_gou_arm, pub_gou_ciu, pub_gou_sfi, pub_gou_lsa, pub_die_arm, pub_die_ciu, pub_die_sfi, pub_die_lsa,
          total_inversion, estatus, fecha_reg, usuario_reg, estatus_reg)  
          VALUES (NULL, :nro_empresa, 
          :pub_dub_arm, :pub_dub_ciu, :pub_dub_sfi, :pub_dub_lsa, :pub_moz_arm, :pub_moz_ciu, :pub_moz_sfi, :pub_moz_lsa,
          :pub_gou_arm, :pub_gou_ciu, :pub_gou_sfi, :pub_gou_lsa, :pub_die_arm, :pub_die_ciu, :pub_die_sfi, :pub_die_lsa,
          :total_inversion, :estatus, :fecha_reg, :usuario_reg, :estatus_reg)");

          $sentencia->bindParam(':nro_empresa',$txtNro_empresa,PDO::PARAM_INT);
          $sentencia->bindParam(':pub_dub_arm',$txtpub_dub_arm,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_dub_ciu',$txtpub_dub_ciu,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_dub_sfi',$txtpub_dub_sfi,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_dub_lsa',$txtpub_dub_lsa,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_moz_arm',$txtpub_moz_arm,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_moz_ciu',$txtpub_moz_ciu,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_moz_sfi',$txtpub_moz_sfi,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_moz_lsa',$txtpub_moz_lsa,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_gou_arm',$txtpub_gou_arm,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_gou_ciu',$txtpub_gou_ciu,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_gou_sfi',$txtpub_gou_sfi,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_gou_lsa',$txtpub_gou_lsa,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_die_arm',$txtpub_die_arm,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_die_ciu',$txtpub_die_ciu,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_die_sfi',$txtpub_die_sfi,PDO::PARAM_STR);
          $sentencia->bindParam(':pub_die_lsa',$txtpub_die_lsa,PDO::PARAM_STR); 
          $sentencia->bindParam(':total_inversion',$txtTotal_inversion,PDO::PARAM_STR);
          $sentencia->bindParam(':estatus',$txtEstatus,PDO::PARAM_STR);
          $sentencia->bindParam(':fecha_reg',$txtFecha_reg);
          $sentencia->bindParam(':usuario_reg',$txtUsuario_reg,PDO::PARAM_INT);
          $sentencia->bindParam(':estatus_reg',$txtEstatus_reg,PDO::PARAM_STR);
          $sentencia->execute();
          
          $mensaje_usuario="Publicidad Creada Satisfactoriamente";
          $procesar="listo";

        }else{
          //echo "<script> alert('Ya existe ...'); </script>";
            $sentencia=$pdo->prepare("UPDATE publicidad SET
            pub_dub_arm=:pub_dub_arm,
            pub_dub_ciu=:pub_dub_ciu,
            pub_dub_sfi=:pub_dub_sfi,
            pub_dub_lsa=:pub_dub_lsa,
            pub_moz_arm=:pub_moz_arm,
            pub_moz_ciu=:pub_moz_ciu,
            pub_moz_sfi=:pub_moz_sfi,
            pub_moz_lsa=:pub_moz_lsa,
            pub_gou_arm=:pub_gou_arm,
            pub_gou_ciu=:pub_gou_ciu,
            pub_gou_sfi=:pub_gou_sfi,
            pub_gou_lsa=:pub_gou_lsa,
            pub_die_arm=:pub_die_arm,
            pub_die_ciu=:pub_die_ciu,
            pub_die_sfi=:pub_die_sfi,
            pub_die_lsa=:pub_die_lsa,
            total_inversion=:total_inversion WHERE
            nro=:nro");
            
            $sentencia->bindParam(':nro',$Nro_publicidad,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_dub_arm',$txtpub_dub_arm,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_dub_ciu',$txtpub_dub_ciu,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_dub_sfi',$txtpub_dub_sfi,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_dub_lsa',$txtpub_dub_lsa,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_moz_arm',$txtpub_moz_arm,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_moz_ciu',$txtpub_moz_ciu,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_moz_sfi',$txtpub_moz_sfi,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_moz_lsa',$txtpub_moz_lsa,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_gou_arm',$txtpub_gou_arm,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_gou_ciu',$txtpub_gou_ciu,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_gou_sfi',$txtpub_gou_sfi,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_gou_lsa',$txtpub_gou_lsa,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_die_arm',$txtpub_die_arm,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_die_ciu',$txtpub_die_ciu,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_die_sfi',$txtpub_die_sfi,PDO::PARAM_STR);
            $sentencia->bindParam(':pub_die_lsa',$txtpub_die_lsa,PDO::PARAM_STR);
            $sentencia->bindParam(':total_inversion',$txtTotal_inversion,PDO::PARAM_STR);
            $sentencia->execute();

            $mensaje_usuario="Publicidad Actualizada Satisfactoriamente";
            $procesar="listo";
            $error_accion=0; 
        }

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
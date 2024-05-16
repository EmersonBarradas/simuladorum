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

// Variables de datos ----------------------------------------------------------------
    $Estatus="A";
// ------------------------------------------------------------------------------------

// Variables de datos ---------------------------------------
    $contrato_lc=0.00;
    $contrato_ad=0.00;	
    $cap_max_lc_amp=0.00;
    $cap_max_ad_amp=0.00; 
    $cap_max_kg_apt=0.00;
    $cto_trans_arm=0.000;		
    $cto_trans_sfi=0.000;		
    $cto_trans_ciu=0.000;		
    $cto_trans_lsa=0.000;		
    $cap_alm_tiendas=0.00;
    $alquiler_arm=0.00;		
    $alquiler_sfi=0.00;		
    $alquiler_ciu=0.00;		
    $alquiler_lsa=0.00;		
    $pub_videos=0.00;
    $pub_vallas=0.00;
    $pub_flyers=0.00;
    $pub_otros=0.00;
    $alquiler_galpon=0.00;
    $cto_amp=0.000;	
    $cto_apt=0.000;
// ----------------------------------------------------------

// Verifica los registros activos en simulación ---------------------------------------
        $sentencia=$pdo->prepare("SELECT * FROM `simulacion` WHERE estatus='A' ");
        $sentencia->execute();
        $lista_simulacion=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cantsimulacion=$sentencia->rowCount();
        //print_r($cantRegistros);
        //print_r($listasimulacion);
// ------------------------------------------------------------------------------------

  
// Selección de Empresa / Entorno y operador
  if ($txtUsuarioTipo=="A") {

      // Selecciono los datos
      $nro=1;
      $sentencia=$pdo->prepare("SELECT * FROM `tblvalores` WHERE nro=:nro");
      $sentencia->bindParam("nro",$nro,PDO::PARAM_STR);
      $sentencia->execute();
      $listado_tblvalores=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $cant_tblvalores=$sentencia->rowCount(); 

      if($cant_tblvalores>=1){
        foreach($listado_tblvalores as $valores){
            $contrato_lc=$valores['contrato_lc'];
            $contrato_ad=$valores['contrato_ad'];	
            $cap_max_lc_amp=$valores['cap_max_lc_amp'];
            $cap_max_ad_amp=$valores['cap_max_ad_amp'];
            $cap_max_kg_apt=$valores['cap_max_kg_apt'];

            $cto_trans_arm=$valores['cto_trans_arm'];		
            $cto_trans_sfi=$valores['cto_trans_sfi'];		
            $cto_trans_ciu=$valores['cto_trans_ciu'];		
            $cto_trans_lsa=$valores['cto_trans_lsa'];

            $cap_alm_tiendas=$valores['cap_alm_tiendas'];

            $alquiler_arm=$valores['alquiler_arm'];	
            $alquiler_sfi=$valores['alquiler_sfi'];	
            $alquiler_ciu=$valores['alquiler_ciu'];		
            $alquiler_lsa=$valores['alquiler_lsa'];	

            $pub_videos=$valores['pub_videos'];
            $pub_vallas=$valores['pub_vallas'];
            $pub_flyers=$valores['pub_flyers'];
            $pub_otros=$valores['pub_otros'];

            $alquiler_galpon=$valores['alquiler_galpon'];
            $cto_amp=$valores['cto_amp'];
            $cto_apt=$valores['cto_apt'];
        }
      }


  }else{
        $procesar="listo"; //Muestra Vista normal
        $error_accion=1; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
        $mensaje_usuario="¡Usuario no autorizado!"; // Vacío en inicalización
  }
//----------------------------------------------------------------------------------------------

//Recepción de Post-----------------------------------------------------------------------------
if(isset($_POST["btn_accion"])){

  $accion=($_POST["btn_accion"]);

  

  // Variables de Datos---------------------------------------------

    $contrato_lc=($_POST["contrato_lc"]);
    $contrato_ad=($_POST["contrato_ad"]);	
    $cap_max_lc_amp=($_POST["cap_max_lc_amp"]);
    $cap_max_ad_amp=($_POST["cap_max_ad_amp"]);
    $cap_max_kg_apt=($_POST["cap_max_kg_apt"]);

    $cto_trans_arm=($_POST["cto_trans_arm"]);		
    $cto_trans_sfi=($_POST["cto_trans_sfi"]);		
    $cto_trans_ciu=($_POST["cto_trans_ciu"]);		
    $cto_trans_lsa=($_POST["cto_trans_lsa"]);

    $cap_alm_tiendas=($_POST["cap_alm_tiendas"]);

    $alquiler_arm=($_POST["alquiler_arm"]);
    $alquiler_sfi=($_POST["alquiler_sfi"]);	
    $alquiler_ciu=($_POST["alquiler_ciu"]);		
    $alquiler_lsa=($_POST["alquiler_lsa"]);	

    $pub_videos=($_POST["pub_videos"]);
    $pub_vallas=($_POST["pub_vallas"]);
    $pub_flyers=($_POST["pub_flyers"]);
    $pub_otros=($_POST["pub_otros"]);
    
    $alquiler_galpon=($_POST["alquiler_galpon"]);
    $cto_amp=($_POST["cto_amp"]);
    $cto_apt=($_POST["cto_apt"]);

// -----------------------------------------------------------------

  switch($accion){

    case "Actualizar";
        // echo "<script> alert('Quieres Actualizar Registro...'); </script>";
        $nro=1;
        $sentencia=$pdo->prepare("UPDATE tblvalores SET 
        contrato_lc=:contrato_lc,
        contrato_ad=:contrato_ad,
        cap_max_lc_amp=:cap_max_lc_amp,
        cap_max_ad_amp=:cap_max_ad_amp,
        cap_max_kg_apt=:cap_max_kg_apt,
        cto_trans_arm=:cto_trans_arm,
        cto_trans_sfi=:cto_trans_sfi,
        cto_trans_ciu=:cto_trans_ciu,
        cto_trans_lsa=:cto_trans_lsa,
        cap_alm_tiendas=:cap_alm_tiendas,
        alquiler_arm=:alquiler_arm,
        alquiler_sfi=:alquiler_sfi,
        alquiler_ciu=:alquiler_ciu,
        alquiler_lsa=:alquiler_lsa,
        pub_videos=:pub_videos,
        pub_vallas=:pub_vallas,
        pub_flyers=:pub_flyers,
        pub_otros=:pub_otros,
        alquiler_galpon=:alquiler_galpon,
        cto_amp=:cto_amp,
        cto_apt=:cto_apt WHERE
        nro=:nro");
        
        $sentencia->bindParam(':nro',$nro,PDO::PARAM_STR);
        $sentencia->bindParam(':contrato_lc',$contrato_lc,PDO::PARAM_STR);
        $sentencia->bindParam(':contrato_ad',$contrato_ad,PDO::PARAM_STR);
        $sentencia->bindParam(':cap_max_lc_amp',$cap_max_lc_amp,PDO::PARAM_STR);
        $sentencia->bindParam(':cap_max_ad_amp',$cap_max_ad_amp,PDO::PARAM_STR);
        $sentencia->bindParam(':cap_max_kg_apt',$cap_max_kg_apt,PDO::PARAM_STR);
        $sentencia->bindParam(':cto_trans_arm',$cto_trans_arm,PDO::PARAM_STR);
        $sentencia->bindParam(':cto_trans_sfi',$cto_trans_sfi,PDO::PARAM_STR);
        $sentencia->bindParam(':cto_trans_ciu',$cto_trans_ciu,PDO::PARAM_STR);
        $sentencia->bindParam(':cto_trans_lsa',$cto_trans_lsa,PDO::PARAM_STR);
        $sentencia->bindParam(':cap_alm_tiendas',$cap_alm_tiendas,PDO::PARAM_STR);
        $sentencia->bindParam(':alquiler_arm',$alquiler_arm,PDO::PARAM_STR);
        $sentencia->bindParam(':alquiler_sfi',$alquiler_sfi,PDO::PARAM_STR);
        $sentencia->bindParam(':alquiler_ciu',$alquiler_ciu,PDO::PARAM_STR);
        $sentencia->bindParam(':alquiler_lsa',$alquiler_lsa,PDO::PARAM_STR);
        $sentencia->bindParam(':pub_videos',$pub_videos,PDO::PARAM_STR);
        $sentencia->bindParam(':pub_vallas',$pub_vallas,PDO::PARAM_STR);
        $sentencia->bindParam(':pub_flyers',$pub_flyers,PDO::PARAM_STR);
        $sentencia->bindParam(':pub_otros',$pub_otros,PDO::PARAM_STR);
        $sentencia->bindParam(':alquiler_galpon',$alquiler_galpon,PDO::PARAM_STR);
        $sentencia->bindParam(':cto_amp',$cto_amp,PDO::PARAM_STR);
        $sentencia->bindParam(':cto_apt',$cto_apt,PDO::PARAM_STR);
        $sentencia->execute();

        $accion="C";
        $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
        $mensaje_usuario="Valores actualizados satisfactoriamente"; // Vacío en inicalización
        $procesar="listo";

    break;
    
    case "Actualizarr";
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
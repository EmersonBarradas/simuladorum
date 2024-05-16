<?php

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
  }
  
?>
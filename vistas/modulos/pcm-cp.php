<?php
  include('../controladores/global/sesiones.php');
  include('../controladores/global/conexion.php');
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
  
  // Variables de Datos ----------------------------------------------------------------------------
    $AlquilerGalpon=2800*8.2;

    // Cantidad de leche líquida LC-----------------
    $cant_lc_c1=0.00;
    $cant_lc_c2=0.00;
    $cant_lc_c3=0.00;
    $cant_lc_c4=0.00;
    $cant_lc_c5=0.00;
    $cant_lc_c6=0.00;
    $cant_lc_c7=0.00;
    $cant_lc_c8=0.00;
    $cant_lc_c9=0.00;
    $cant_lc_c10=0.00;
    // ---------------------------------------------

    // Inventario Inicial---------------------------
    $cant_ii_c1=0.00;
    $cant_ii_c2=0.00;
    $cant_ii_c3=0.00;
    $cant_ii_c4=0.00;
    $cant_ii_c5=0.00;
    $cant_ii_c6=0.00;
    $cant_ii_c7=0.00;
    $cant_ii_c8=0.00;
    $cant_ii_c9=0.00;
    $cant_ii_c10=0.00;
    // ---------------------------------------------

    // Costos Almaceén de materia prima AMP-CTO ----
    $cant_cto_amp_c1=0.00;
    $cant_cto_amp_c2=0.00;
    $cant_cto_amp_c3=0.00;
    $cant_cto_amp_c4=0.00;
    $cant_cto_amp_c5=0.00;
    $cant_cto_amp_c6=0.00;
    $cant_cto_amp_c7=0.00;
    $cant_cto_amp_c8=0.00;
    $cant_cto_amp_c9=0.00;
    $cant_cto_amp_c10=0.00;
    // -------------------------------------------

    $cant_cto_alm_c1=0.00;
    $cant_cto_alm_c2=0.00;
    $cant_cto_alm_c3=0.00;
    $cant_cto_alm_c4=0.00;
    $cant_cto_alm_c5=0.00;
    $cant_cto_alm_c6=0.00;
    $cant_cto_alm_c7=0.00;
    $cant_cto_alm_c8=0.00;
    $cant_cto_alm_c9=0.00;
    $cant_cto_alm_c10=0.00;

    // Costo de AMP ----------------------
    $cant_cto_amp_c1=0.00;
    $cant_cto_amp_c2=0.00;
    $cant_cto_amp_c3=0.00;
    $cant_cto_amp_c4=0.00;
    $cant_cto_amp_c5=0.00;
    $cant_cto_amp_c6=0.00;
    $cant_cto_amp_c7=0.00;
    $cant_cto_amp_c8=0.00;
    $cant_cto_amp_c9=0.00;
    $cant_cto_amp_c10=0.00;
    
    // --------------------------------------- 
  
    $cant_cto_almpt_c1=0.00;
    $cant_cto_almpt_c2=0.00;
    $cant_cto_almpt_c3=0.00;
    $cant_cto_almpt_c4=0.00;
    $cant_cto_almpt_c5=0.00;
    $cant_cto_almpt_c6=0.00;
    $cant_cto_almpt_c7=0.00;
    $cant_cto_almpt_c8=0.00;
    $cant_cto_almpt_c9=0.00;
    $cant_cto_almpt_c10=0.00;

    // Costo de transporte --------------
    $cant_ctoT_c1=0.00;
    $cant_ctoT_c2=0.00;
    $cant_ctoT_c3=0.00;
    $cant_ctoT_c4=0.00;
    $cant_ctoT_c5=0.00;
    $cant_ctoT_c6=0.00;
    $cant_ctoT_c7=0.00;
    $cant_ctoT_c8=0.00;
    $cant_ctoT_c9=0.00;
    $cant_ctoT_c10=0.00;

    //Totales ---------------------------
    $cant_total_c1=0.00;
    $cant_total_c2=0.00;
    $cant_total_c3=0.00;
    $cant_total_c4=0.00;
    $cant_total_c5=0.00;
    $cant_total_c6=0.00;
    $cant_total_c7=0.00;
    $cant_total_c8=0.00;
    $cant_total_c9=0.00;
    $cant_total_c10=0.00;
    // -------------------------------------

    // Compras -------------------------------
    $cant_compras_c1=0.00;
    $cant_compras_c2=0.00;
    $cant_compras_c3=0.00;
    $cant_compras_c4=0.00;
    $cant_compras_c5=0.00;
    $cant_compras_c6=0.00;
    $cant_compras_c7=0.00;
    $cant_compras_c8=0.00;
    $cant_compras_c9=0.00;
    $cant_compras_c10=0.00;
    //------------------------------------------

    $cant_pcmmod_c1=0.00;
    $cant_pcmmod_c2=0.00;
    $cant_pcmmod_c3=0.00;
    $cant_pcmmod_c4=0.00;
    $cant_pcmmod_c5=0.00;
    $cant_pcmmod_c6=0.00;
    $cant_pcmmod_c7=0.00;
    $cant_pcmmod_c8=0.00;
    $cant_pcmmod_c9=0.00;
    $cant_pcmmod_c10=0.00;

    $cant_pcm_c1=0.00;
    $cant_pcm_c2=0.00;
    $cant_pcm_c3=0.00;
    $cant_pcm_c4=0.00;
    $cant_pcm_c5=0.00;
    $cant_pcm_c6=0.00;
    $cant_pcm_c7=0.00;
    $cant_pcm_c8=0.00;
    $cant_pcm_c9=0.00;
    $cant_pcm_c10=0.00;

  // . fin variables totales -----------------------------------------------------------------------
    // Selección de Empresa - Entorno -------------------------------------------------------------------------
    if ($txtUsuarioTipo=="A") {
      // Asigno la empresa seleccionada
        $NroEmpresa=$_SESSION['nro_empresa'];
        $txtNro_empresa=$NroEmpresa;

        // Selecciono la empresa
        $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND nro=$NroEmpresa");
        $sentencia->execute();
        $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cant_empresa=$sentencia->rowCount(); 

    }else{
      // Selección de empresa del usuario -------------------------------------------------------------------------
        $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND usuario=$txtUsuario");
        $sentencia->execute();
        $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cant_empresa=$sentencia->rowCount();
    }

        if($cant_empresa>=1){
          foreach($listado_empresa as $empresa){
            $txtNro_empresa=$empresa['nro'];
            $txtNombre_empresa=$empresa['nombre'];
          }

          // Selección las compras de la empresa ---------------------------------------------------------------
          $sentencia=$pdo->prepare("SELECT * FROM `compra_subasta` WHERE estatus='A' AND empresa=$txtNro_empresa");
          $sentencia->execute();
          $listado_compra_subasta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_compra_subasta=$sentencia->rowCount();
          
          if($cant_compra_subasta>=1){
            // Calcular el monto total de compra
            $ciclo=0;
            $cant_compras_c1=0.00;
            $cant_compras_c2=0.00;
            $cant_compras_c3=0.00;
            $cant_compras_c4=0.00;
            $cant_compras_c5=0.00;
            $cant_compras_c6=0.00;
            $cant_compras_c7=0.00;
            $cant_compras_c8=0.00;
            $cant_compras_c9=0.00;
            $cant_compras_c10=0.00;
            foreach($listado_compra_subasta as $compras){
              $ciclo=$compras['ciclo'];
              switch ($ciclo){
                case 1;
                  $cant_compras_c1=$cant_compras_c1+$compras['monto_total_usb_lc']+$compras['monto_total_usb_ad'];
                break;
                case 2;
                  $cant_compras_c2=$cant_compras_c2+$compras['monto_total_usb_lc']+$compras['monto_total_usb_ad'];
                break;
                case 3;
                  $cant_compras_c3=$cant_compras_c3+$compras['monto_total_usb_lc']+$compras['monto_total_usb_ad'];
                break;
                case 4;
                  $cant_compras_c4=$cant_compras_c4+$compras['monto_total_usb_lc']+$compras['monto_total_usb_ad'];
                break;
                case 5;
                  $cant_compras_c5=$cant_compras_c5+$compras['monto_total_usb_lc']+$compras['monto_total_usb_ad'];
                break;
                case 6;
                  $cant_compras_c6=$cant_compras_c6+$compras['monto_total_usb_lc']+$compras['monto_total_usb_ad'];
                break;
                case 7;
                  $cant_compras_c7=$cant_compras_c7+$compras['monto_total_usb_lc']+$compras['monto_total_usb_ad'];
                break;
                case 8;
                  $cant_compras_c8=$cant_compras_c8+$compras['monto_total_usb_lc']+$compras['monto_total_usb_ad'];
                break;
                case 9;
                  $cant_compras_c9=$cant_compras_c9+$compras['monto_total_usb_lc']+$compras['monto_total_usb_ad'];
                break;
                case 10;
                  $cant_compras_c10=$cant_compras_c10+$compras['monto_total_usb_lc']+$compras['monto_total_usb_ad'];
                break;
              }  
            }

            // Calcular cantidad de lc para costo de producción 
            $ciclo=0;
            $cant_lc_c1=0.00;
            $cant_lc_c2=0.00;
            $cant_lc_c3=0.00;
            $cant_lc_c4=0.00;
            $cant_lc_c5=0.00;
            $cant_lc_c6=0.00;
            $cant_lc_c7=0.00;
            $cant_lc_c8=0.00;
            $cant_lc_c9=0.00;
            $cant_lc_c10=0.00;
            foreach($listado_compra_subasta as $compras){
              $ciclo=$compras['ciclo'];
              switch ($ciclo){
                case 1;
                  $cant_lc_c1=$cant_lc_c1+$compras['cant_litros_lc'];
                break;
                case 2;
                  $cant_lc_c2=$cant_lc_c2+$compras['cant_litros_lc'];
                break;
                case 3;
                  $cant_lc_c3=$cant_lc_c3+$compras['cant_litros_lc'];
                break;
                case 4;
                  $cant_lc_c4=$cant_lc_c4+$compras['cant_litros_lc'];
                break;
                case 5;
                  $cant_lc_c5=$cant_lc_c5+$compras['cant_litros_lc'];
                break;
                case 6;
                  $cant_lc_c6=$cant_lc_c6+$compras['cant_litros_lc'];
                break;
                case 7;
                  $cant_lc_c7=$cant_lc_c7+$compras['cant_litros_lc'];
                break;
                case 8;
                  $cant_lc_c8=$cant_lc_c8+$compras['cant_litros_lc'];
                break;
                case 9;
                  $cant_lc_c9=$cant_lc_c9+$compras['cant_litros_lc'];
                break;
                case 10;
                  $cant_lc_c10=$cant_lc_c10+$compras['cant_litros_lc'];
                break;
              }  
            }
            $cant_cto_alm_c1=$cant_lc_c1*0.025;
            $cant_cto_alm_c2=$cant_lc_c2*0.025;
            $cant_cto_alm_c3=$cant_lc_c3*0.025;
            $cant_cto_alm_c4=$cant_lc_c4*0.025;
            $cant_cto_alm_c5=$cant_lc_c5*0.025;
            $cant_cto_alm_c6=$cant_lc_c6*0.025;
            $cant_cto_alm_c7=$cant_lc_c7*0.025;
            $cant_cto_alm_c8=$cant_lc_c8*0.025;
            $cant_cto_alm_c9=$cant_lc_c9*0.025;
            $cant_cto_alm_c10=$cant_lc_c10*0.025;
          //---------------------------------------------------------------------------------------------

          // Selecciona costos de almacen materia prima
            $sentencia=$pdo->prepare("SELECT * FROM `amp_cto` WHERE estatus='A'AND nro_empresa=$txtNro_empresa");
            $sentencia->execute();
            $listado_AMP_CTO=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $cant_listado_AMP_CTO=$sentencia->rowCount();
            if($cant_listado_AMP_CTO>=1){
                $cant_cto_amp_c1=0.00;
                $cant_cto_amp_c2=0.00;
                $cant_cto_amp_c3=0.00;
                $cant_cto_amp_c4=0.00;
                $cant_cto_amp_c5=0.00;
                $cant_cto_amp_c6=0.00;
                $cant_cto_amp_c7=0.00;
                $cant_cto_amp_c8=0.00;
                $cant_cto_amp_c9=0.00;
                $cant_cto_amp_c10=0.00;
                $ciclo=0;
                foreach($listado_AMP_CTO as $AMP_CTO){
                    $Nro_amp_cto=$AMP_CTO['nro'];
                    $ciclo=$AMP_CTO['ciclo'];
                    $mov_lc=$AMP_CTO['tipo_mov_lc'];
                    $mov_as=$AMP_CTO['tipo_mov_ad'];

                    switch ($ciclo){
                      case 1;
                        $cant_cto_amp_c1=$cant_cto_amp_c1+$AMP_CTO['monto_cto_acum_lc']+$AMP_CTO['monto_cto_acum_ad'];
                      break;
                      case 2;
                        $cant_cto_amp_c2=$cant_cto_amp_c2+$AMP_CTO['monto_cto_acum_lc']+$AMP_CTO['monto_cto_acum_ad'];
                      break;
                      case 3;
                        $cant_cto_amp_c3=$cant_cto_amp_c3+$AMP_CTO['monto_cto_acum_lc']+$AMP_CTO['monto_cto_acum_ad'];
                      break;
                      case 4;
                        $cant_cto_amp_c4=$cant_cto_amp_c4+$AMP_CTO['monto_cto_acum_lc']+$AMP_CTO['monto_cto_acum_ad'];
                      break;
                      case 5;
                        $cant_cto_amp_c5=$cant_cto_amp_c5+$AMP_CTO['monto_cto_acum_lc']+$AMP_CTO['monto_cto_acum_ad'];
                      break;
                      case 6;
                        $cant_cto_amp_c6=$cant_cto_amp_c6+$AMP_CTO['monto_cto_acum_lc']+$AMP_CTO['monto_cto_acum_ad'];
                      break;
                      case 7;
                        $cant_cto_amp_c7=$cant_cto_amp_c7+$AMP_CTO['monto_cto_acum_lc']+$AMP_CTO['monto_cto_acum_ad'];
                      break;
                      case 8;
                        $cant_cto_amp_c8=$cant_cto_amp_c8+$AMP_CTO['monto_cto_acum_lc']+$AMP_CTO['monto_cto_acum_ad'];
                      break;
                      case 9;
                        $cant_cto_amp_c9=$cant_cto_amp_c9+$AMP_CTO['monto_cto_acum_lc']+$AMP_CTO['monto_cto_acum_ad'];
                      break;
                      case 10;
                        $cant_cto_amp_c10=$cant_cto_amp_c10+$AMP_CTO['monto_cto_acum_lc']+$AMP_CTO['monto_cto_acum_ad'];
                      break;
                    }
                }
                $cant_cto_amp_c1=number_format($cant_cto_amp_c1/$cant_listado_AMP_CTO,2,".","");
                $cant_cto_amp_c2=number_format($cant_cto_amp_c2/$cant_listado_AMP_CTO,2,".","");
                $cant_cto_amp_c3=number_format($cant_cto_amp_c3/$cant_listado_AMP_CTO,2,".","");
                $cant_cto_amp_c4=number_format($cant_cto_amp_c4/$cant_listado_AMP_CTO,2,".","");
                $cant_cto_amp_c5=number_format($cant_cto_amp_c5/$cant_listado_AMP_CTO,2,".","");
                $cant_cto_amp_c6=number_format($cant_cto_amp_c6/$cant_listado_AMP_CTO,2,".","");
                $cant_cto_amp_c7=number_format($cant_cto_amp_c7/$cant_listado_AMP_CTO,2,".","");
                $cant_cto_amp_c8=number_format($cant_cto_amp_c8/$cant_listado_AMP_CTO,2,".","");
                $cant_cto_amp_c9=number_format($cant_cto_amp_c9/$cant_listado_AMP_CTO,2,".","");
                $cant_cto_amp_c10=number_format($cant_cto_amp_c10/$cant_listado_AMP_CTO,2,".","");
                $cant_ii_c2=$cant_cto_amp_c1;
                $cant_ii_c3=$cant_cto_amp_c2;
                $cant_ii_c4=$cant_cto_amp_c3;
                $cant_ii_c5=$cant_cto_amp_c4;
                $cant_ii_c6=$cant_cto_amp_c5;
                $cant_ii_c7=$cant_cto_amp_c6;
                $cant_ii_c8=$cant_cto_amp_c7;
                $cant_ii_c9=$cant_cto_amp_c8;
                $cant_ii_c10=$cant_cto_amp_c9;

            }else{
                $procesar="listo"; //Muestra Vista normal
                $error_accion=2; // Valor 0 si todo va normal
                $mensaje_usuario="No hay movimientos de almacén"; // Vacío en inicalización
                $movimientos="SI";
            }

            // Selección los despachos de la empresa empresa ---------------------------------------------------------------
            $sentencia=$pdo->prepare("SELECT * FROM `pcm` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
            $sentencia->execute();
            $listado_pcm=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $cant_pcm=$sentencia->rowCount();

            if($cant_pcm>=1){
              $ciclo=0;
              $cant_pcm_c1=0.00;
              $cant_pcm_c2=0.00;
              $cant_pcm_c3=0.00;
              $cant_pcm_c4=0.00;
              $cant_pcm_c5=0.00;
              $cant_pcm_c6=0.00;
              $cant_pcm_c7=0.00;
              $cant_pcm_c8=0.00;
              $cant_pcm_c9=0.00;
              $cant_pcm_c10=0.00;

              foreach($listado_pcm as $pcm){
                
                $nro_pcm=$pcm['nro'];
                $ciclo=$pcm['ciclo'];
                
                switch($ciclo){
                  case 1;
                    $cant_pcm_c1=$cant_pcm_c1+$pcm['cant_queso'];
                  break;
                  case 2;
                    $cant_pcm_c2=$cant_pcm_c2+$pcm['cant_queso'];
                  break;
                  case 3;
                    $cant_pcm_c3=$cant_pcm_c3+$pcm['cant_queso'];
                  break;
                  case 4;
                    $cant_pcm_c4=$cant_pcm_c4+$pcm['cant_queso'];
                  break;
                  case 5;
                    $cant_pcm_c5=$cant_pcm_c5+$pcm['cant_queso'];
                  break;
                  case 6;
                    $cant_pcm_c6=$cant_pcm_c6+$pcm['cant_queso'];
                  break;
                  case 7;
                    $cant_pcm_c7=$cant_pcm_c7+$pcm['cant_queso'];
                  break;
                  case 8;
                    $cant_pcm_c8=$cant_pcm_c8+$pcm['cant_queso'];
                  break;
                  case 9;
                    $cant_pcm_c9=$cant_pcm_c9+$pcm['cant_queso'];
                  break;
                  case 10;
                    $cant_pcm_c10=$cant_pcm_c10+$pcm['cant_queso'];
                  break;
                }
              }
            }else{
              $procesar="Listo"; //Muestra Vista normal
              $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
              $mensaje_usuario="No se encontró movimientos de Despacho"; // Vacío en inicalización 

            }


            // -----------------------------------------------------------------------------------------------------------

            // Selección modelado de queso  (operadores) ---------------------------------------------------------------
            $sentencia=$pdo->prepare("SELECT * FROM `pcm_mod_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
            $sentencia->execute();
            $listado_pcm_mod_mov=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $cant_pcm_mod_mov=$sentencia->rowCount();

            if($cant_pcm_mod_mov>=1){
              $ciclo=0;
              $cant_pcmmod_c1=0.00;
              $cant_pcmmod_c2=0.00;
              $cant_pcmmod_c3=0.00;
              $cant_pcmmod_c4=0.00;
              $cant_pcmmod_c5=0.00;
              $cant_pcmmod_c6=0.00;
              $cant_pcmmod_c7=0.00;
              $cant_pcmmod_c8=0.00;
              $cant_pcmmod_c9=0.00;
              $cant_pcmmod_c10=0.00;
              foreach($listado_pcm_mod_mov as $pcm_mod) {
                $nro_pcm_mod=$pcm_mod['nro'];
                $ciclo=$pcm_mod['ciclo'];
                switch ($ciclo){
                  case 1;
                    $cant_pcmmod_c1=$cant_pcmmod_c1+$pcm_mod['monto_total_jornada'];
                  break;
                  case 2;
                    $cant_pcmmod_c2=$cant_pcmmod_c2+$pcm_mod['monto_total_jornada'];
                  break;
                  case 3;
                    $cant_pcmmod_c3=$cant_pcmmod_c3+$pcm_mod['monto_total_jornada'];
                  break;
                  case 4;
                    $cant_pcmmod_c4=$cant_pcmmod_c4+$pcm_mod['monto_total_jornada'];
                  break;
                  case 5;
                    $cant_pcmmod_c5=$cant_pcmmod_c5+$pcm_mod['monto_total_jornada'];
                  break;
                  case 6;
                    $cant_pcmmod_c6=$cant_pcmmod_c6+$pcm_mod['monto_total_jornada'];
                  break;
                  case 7;
                    $cant_pcmmod_c7=$cant_pcmmod_c7+$pcm_mod['monto_total_jornada'];
                  break;
                  case 8;
                    $cant_pcmmod_c8=$cant_pcmmod_c8+$pcm_mod['monto_total_jornada'];
                  break;
                  case 9;
                    $cant_pcmmod_c9=$cant_pcmmod_c9+$pcm_mod['monto_total_jornada'];
                  break;
                  case 10;
                    $cant_pcmmod_c10=$cant_pcmmod_c10+$pcm_mod['monto_total_jornada'];
                  break;
                }
              }
            }
            // -----------------------------------------------------------------------------------------

            // Selección los despachos de la empresa empresa ---------------------------------------------------------------
            $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
            $sentencia->execute();
            $listado_apt=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $cant_apt=$sentencia->rowCount();

            if($cant_apt>=1){
              $ciclo=0;
              $cant_kg_c1=0.00;
              $cant_kg_c2=0.00;
              $cant_kg_c3=0.00;
              $cant_kg_c4=0.00;
              $cant_kg_c5=0.00;
              $cant_kg_c6=0.00;
              $cant_kg_c7=0.00;
              $cant_kg_c8=0.00;
              $cant_kg_c9=0.00;
              $cant_kg_c10=0.00;
              foreach($listado_apt as $apt) {
                $nro_apt=$apt['nro'];
                $ciclo=$apt['ciclo'];
                switch ($ciclo){
                  case 1;
                    $cant_kg_c1=$cant_kg_c1+$apt['cant_entrada'];
                  break;
                  case 2;
                    $cant_kg_c2=$cant_kg_c2+$apt['cant_entrada'];
                  break;
                  case 3;
                    $cant_kg_c3=$cant_kg_c3+$apt['cant_entrada'];
                  break;
                  case 4;
                    $cant_kg_c4=$cant_kg_c4+$apt['cant_entrada'];
                  break;
                  case 5;
                    $cant_kg_c5=$cant_kg_c5+$apt['cant_entrada'];
                  break;
                  case 6;
                    $cant_kg_c6=$cant_kg_c6+$apt['cant_entrada'];
                  break;
                  case 7;
                    $cant_kg_c7=$cant_kg_c7+$apt['cant_entrada'];
                  break;
                  case 8;
                    $cant_kg_c8=$cant_kg_c8+$apt['cant_entrada'];
                  break;
                  case 9;
                    $cant_kg_c9=$cant_kg_c9+$apt['cant_entrada'];
                  break;
                  case 10;
                    $cant_kg_c10=$cant_kg_c10+$apt['cant_entrada'];
                  break;
                }
              }
              $cant_cto_almpt_c1=$cant_kg_c1*0.15;
              $cant_cto_almpt_c2=$cant_kg_c2*0.15;
              $cant_cto_almpt_c3=$cant_kg_c3*0.15;
              $cant_cto_almpt_c4=$cant_kg_c4*0.15;
              $cant_cto_almpt_c5=$cant_kg_c5*0.15;
              $cant_cto_almpt_c6=$cant_kg_c6*0.15;
              $cant_cto_almpt_c7=$cant_kg_c7*0.15;
              $cant_cto_almpt_c8=$cant_kg_c8*0.15;
              $cant_cto_almpt_c9=$cant_kg_c9*0.15;
              $cant_cto_almpt_c10=$cant_kg_c10*0.15;
            }else{
              $procesar="Listo"; //Muestra Vista normal
              $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
              $mensaje_usuario="No hay despachos registrados de la empresa"; // Vacío en inicalización      
              $btnDespacho="SI";
            }
            //-----------------------------------------------------------------------------------------------------

            // Selección Depósito AMP de la empresa ---------------------------------------------------------------
            $sentencia=$pdo->prepare("SELECT * FROM `despacho` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
            $sentencia->execute();
            $listado_despacho=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $cant_despacho=$sentencia->rowCount();
            
            if($cant_despacho>=1){

              $ciclo=0;
              $cant_ctoT_c1=0.00;
              $cant_ctoT_c2=0.00;
              $cant_ctoT_c3=0.00;
              $cant_ctoT_c4=0.00;
              $cant_ctoT_c5=0.00;
              $cant_ctoT_c6=0.00;
              $cant_ctoT_c7=0.00;
              $cant_ctoT_c8=0.00;
              $cant_ctoT_c9=0.00;
              $cant_ctoT_c10=0.00;

              foreach($listado_despacho as $despacho) {
                $nro_despacho=$apt['nro'];
                $ciclo=$despacho['ciclo'];
                switch ($ciclo){
                  case 1;
                    $cant_ctoT_c1=$cant_ctoT_c1+$despacho['cost_t_total'];
                  break;
                  case 2;
                    $cant_ctoT_c2=$cant_ctoT_c2+$despacho['cost_t_total'];
                  break;
                  case 3;
                    $cant_ctoT_c3=$cant_ctoT_c3+$despacho['cost_t_total'];
                  break;
                  case 4;
                    $cant_ctoT_c4=$cant_ctoT_c4+$despacho['cost_t_total'];
                  break;
                  case 5;
                    $cant_ctoT_c5=$cant_ctoT_c5+$despacho['cost_t_total'];
                  break;
                  case 6;
                    $cant_ctoT_c6=$cant_ctoT_c6+$despacho['cost_t_total'];
                  break;
                  case 7;
                    $cant_ctoT_c7=$cant_ctoT_c7+$despacho['cost_t_total'];
                  break;
                  case 8;
                    $cant_ctoT_c8=$cant_ctoT_c8+$despacho['cost_t_total'];
                  break;
                  case 9;
                    $cant_ctoT_c9=$cant_ctoT_c9+$adespachopt['cost_t_total'];
                  break;
                  case 10;
                    $cant_ctoT_c10=$cant_ctoT_c10+$apt['cost_t_total'];
                  break;
                }
              }
              $cant_total_c1=$AlquilerGalpon+$cant_cto_alm_c1+$cant_cto_almpt_c1+$cant_ctoT_c1;
              $cant_total_c2=$AlquilerGalpon+$cant_cto_alm_c2+$cant_cto_almpt_c2+$cant_ctoT_c2;
              $cant_total_c3=$AlquilerGalpon+$cant_cto_alm_c3+$cant_cto_almpt_c3+$cant_ctoT_c3;
              $cant_total_c4=$AlquilerGalpon+$cant_cto_alm_c4+$cant_cto_almpt_c4+$cant_ctoT_c4;
              $cant_total_c5=$AlquilerGalpon+$cant_cto_alm_c5+$cant_cto_almpt_c5+$cant_ctoT_c5;
              $cant_total_c6=$AlquilerGalpon+$cant_cto_alm_c6+$cant_cto_almpt_c6+$cant_ctoT_c6;
              $cant_total_c7=$AlquilerGalpon+$cant_cto_alm_c7+$cant_cto_almpt_c7+$cant_ctoT_c7;
              $cant_total_c8=$AlquilerGalpon+$cant_cto_alm_c8+$cant_cto_almpt_c8+$cant_ctoT_c8;
              $cant_total_c9=$AlquilerGalpon+$cant_cto_alm_c9+$cant_cto_almpt_c9+$cant_ctoT_c9;
              $cant_total_c10=$AlquilerGalpon+$cant_cto_alm_c10+$cant_cto_almpt_c10+$cant_ctoT_c10;
            }else{
              $procesar="Listo"; //Muestra Vista normal
              $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
              $mensaje_usuario="No se encontró movimientos de Despacho"; // Vacío en inicalización 
            }

            //------------------------------------------------------------------------------------------------------

          // ----------------------------------------------------------------------------------------------------------
          }else{
            $procesar="Listo"; //Muestra Vista normal
            $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
            $mensaje_usuario="¡No hay compras registradas!"; // Vacío en inicalización  
          }

        }else{
          $procesar="Listo"; //Muestra Vista normal
          $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
          $mensaje_usuario="¡No hay empresa registrada!"; // Vacío en inicalización  
        }

    //}
  // /. Fin selección empresa--------------------------------------------------------------------------------

?>
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
  
  // Variables de Datos
    $AlquilerGalpon=2800*8.2;

    // Subasta---------------------------
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

        // Selección movimientos de compras de la empresa ---------------------------------------------------------------
          $sentencia=$pdo->prepare("SELECT * FROM `compra_subasta` WHERE estatus='A' AND empresa=$txtNro_empresa");
          $sentencia->execute();
          $listado_compra_subasta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_compra_subasta=$sentencia->rowCount();
          
          if($cant_compra_subasta>=1){
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
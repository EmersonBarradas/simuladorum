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

    // ARMADILLO **********************************************************************************

    // Queso Duro Armadillo ---------------------------------------------------------------------

      // PVP dub Armadillo 
        $cant_pvp_c1_arm_dub=0.00;
        $cant_pvp_c2_arm_dub=0.00;
        $cant_pvp_c3_arm_dub=0.00;
        $cant_pvp_c4_arm_dub=0.00;
        $cant_pvp_c5_arm_dub=0.00;
        $cant_pvp_c6_arm_dub=0.00;
        $cant_pvp_c7_arm_dub=0.00;
        $cant_pvp_c8_arm_dub=0.00;
        $cant_pvp_c9_arm_dub=0.00;
        $cant_pvp_c10_arm_dub=0.00;
        $cant_pvp_c11_arm_dub=0.00;
        $cant_pvp_c12_arm_dub=0.00;

      // Kg dub Armadillo 
        $cant_kg_c1_arm_dub=0.00;
        $cant_kg_c2_arm_dub=0.00;
        $cant_kg_c3_arm_dub=0.00;
        $cant_kg_c4_arm_dub=0.00;
        $cant_kg_c5_arm_dub=0.00;
        $cant_kg_c6_arm_dub=0.00;
        $cant_kg_c7_arm_dub=0.00;
        $cant_kg_c8_arm_dub=0.00;
        $cant_kg_c9_arm_dub=0.00;
        $cant_kg_c10_arm_dub=0.00;
        $cant_kg_c11_arm_dub=0.00;
        $cant_kg_c12_arm_dub=0.00;

      // Total dub  Armadillo 
        $cant_total_c1_arm_dub=0.00;
        $cant_total_c2_arm_dub=0.00;
        $cant_total_c3_arm_dub=0.00;
        $cant_total_c4_arm_dub=0.00;
        $cant_total_c5_arm_dub=0.00;
        $cant_total_c6_arm_dub=0.00;
        $cant_total_c7_arm_dub=0.00;
        $cant_total_c8_arm_dub=0.00;
        $cant_total_c9_arm_dub=0.00;
        $cant_total_c10_arm_dub=0.00;
        $cant_total_c11_arm_dub=0.00;
        $cant_total_c12_arm_dub=0.00;
    // -------------------------------------------------------------------------------------------
    
    // Queso Mozarella Armadillo ---------------------------------------------------------------------

      // PVP Queso Mozarella Armadillo 
        $cant_pvp_c1_arm_moz=0.00;
        $cant_pvp_c2_arm_moz=0.00;
        $cant_pvp_c3_arm_moz=0.00;
        $cant_pvp_c4_arm_moz=0.00;
        $cant_pvp_c5_arm_moz=0.00;
        $cant_pvp_c6_arm_moz=0.00;
        $cant_pvp_c7_arm_moz=0.00;
        $cant_pvp_c8_arm_moz=0.00;
        $cant_pvp_c9_arm_moz=0.00;
        $cant_pvp_c10_arm_moz=0.00;
        $cant_pvp_c11_arm_moz=0.00;
        $cant_pvp_c12_arm_moz=0.00;
      
      // Kg Queso Mozarella Armadillo 
        $cant_kg_c1_arm_moz=0.00;
        $cant_kg_c2_arm_moz=0.00;
        $cant_kg_c3_arm_moz=0.00;
        $cant_kg_c4_arm_moz=0.00;
        $cant_kg_c5_arm_moz=0.00;
        $cant_kg_c6_arm_moz=0.00;
        $cant_kg_c7_arm_moz=0.00;
        $cant_kg_c8_arm_moz=0.00;
        $cant_kg_c9_arm_moz=0.00;
        $cant_kg_c10_arm_moz=0.00;
        $cant_kg_c11_arm_moz=0.00;
        $cant_kg_c12_arm_moz=0.00;

      // Kg Queso Mozarella Armadillo 
        $cant_total_c1_arm_moz=0.00;
        $cant_total_c2_arm_moz=0.00;
        $cant_total_c3_arm_moz=0.00;
        $cant_total_c4_arm_moz=0.00;
        $cant_total_c5_arm_moz=0.00;
        $cant_total_c6_arm_moz=0.00;
        $cant_total_c7_arm_moz=0.00;
        $cant_total_c8_arm_moz=0.00;
        $cant_total_c9_arm_moz=0.00;
        $cant_total_c10_arm_moz=0.00;
        $cant_total_c11_arm_moz=0.00;
        $cant_total_c12_arm_moz=0.00;
    // --------------------------------------------------------------------------------------------
    
    // Queso Gouda Armadillo -----------------------------------------------------------------------

      // PVP Queso Gouda Armadillo 
        $cant_pvp_c1_arm_gou=0.00;
        $cant_pvp_c2_arm_gou=0.00;
        $cant_pvp_c3_arm_gou=0.00;
        $cant_pvp_c4_arm_gou=0.00;
        $cant_pvp_c5_arm_gou=0.00;
        $cant_pvp_c6_arm_gou=0.00;
        $cant_pvp_c7_arm_gou=0.00;
        $cant_pvp_c8_arm_gou=0.00;
        $cant_pvp_c9_arm_gou=0.00;
        $cant_pvp_c10_arm_gou=0.00;
        $cant_pvp_c11_arm_gou=0.00;
        $cant_pvp_c12_arm_gou=0.00;
      
      // Kg Queso Gouda Armadillo 
        $cant_kg_c1_arm_gou=0.00;
        $cant_kg_c2_arm_gou=0.00;
        $cant_kg_c3_arm_gou=0.00;
        $cant_kg_c4_arm_gou=0.00;
        $cant_kg_c5_arm_gou=0.00;
        $cant_kg_c6_arm_gou=0.00;
        $cant_kg_c7_arm_gou=0.00;
        $cant_kg_c8_arm_gou=0.00;
        $cant_kg_c9_arm_gou=0.00;
        $cant_kg_c10_arm_gou=0.00;
        $cant_kg_c11_arm_gou=0.00;
        $cant_kg_c12_arm_gou=0.00;

      // total Queso Gouda Armadillo 
        $cant_total_c1_arm_gou=0.00;
        $cant_total_c2_arm_gou=0.00;
        $cant_total_c3_arm_gou=0.00;
        $cant_total_c4_arm_gou=0.00;
        $cant_total_c5_arm_gou=0.00;
        $cant_total_c6_arm_gou=0.00;
        $cant_total_c7_arm_gou=0.00;
        $cant_total_c8_arm_gou=0.00;
        $cant_total_c9_arm_gou=0.00;
        $cant_total_c10_arm_gou=0.00;
        $cant_total_c11_arm_gou=0.00;
        $cant_total_c12_arm_gou=0.00;
    // --------------------------------------------------------------------------------------------
    
    // Queso Dietético Armadillo -----------------------------------------------------------------------

      // PVP Queso Dietético Armadillo 
        $cant_pvp_c1_arm_die=0.00;
        $cant_pvp_c2_arm_die=0.00;
        $cant_pvp_c3_arm_die=0.00;
        $cant_pvp_c4_arm_die=0.00;
        $cant_pvp_c5_arm_die=0.00;
        $cant_pvp_c6_arm_die=0.00;
        $cant_pvp_c7_arm_die=0.00;
        $cant_pvp_c8_arm_die=0.00;
        $cant_pvp_c9_arm_die=0.00;
        $cant_pvp_c10_arm_die=0.00;
        $cant_pvp_c11_arm_die=0.00;
        $cant_pvp_c12_arm_die=0.00;
    
      // Kg Queso Dietético Armadillo 
        $cant_kg_c1_arm_die=0.00;
        $cant_kg_c2_arm_die=0.00;
        $cant_kg_c3_arm_die=0.00;
        $cant_kg_c4_arm_die=0.00;
        $cant_kg_c5_arm_die=0.00;
        $cant_kg_c6_arm_die=0.00;
        $cant_kg_c7_arm_die=0.00;
        $cant_kg_c8_arm_die=0.00;
        $cant_kg_c9_arm_die=0.00;
        $cant_kg_c10_arm_die=0.00;
        $cant_kg_c11_arm_die=0.00;
        $cant_kg_c12_arm_die=0.00;

      // Total Queso Dietético Armadillo 
        $cant_total_c1_arm_die=0.00;
        $cant_total_c2_arm_die=0.00;
        $cant_total_c3_arm_die=0.00;
        $cant_total_c4_arm_die=0.00;
        $cant_total_c5_arm_die=0.00;
        $cant_total_c6_arm_die=0.00;
        $cant_total_c7_arm_die=0.00;
        $cant_total_c8_arm_die=0.00;
        $cant_total_c9_arm_die=0.00;
        $cant_total_c10_arm_die=0.00;
        $cant_total_c11_arm_die=0.00;
        $cant_total_c12_arm_die=0.00;
    // --------------------------------------------------------------------------------------------

    // CIUDADELA **********************************************************************************

    // Queso Duro Ciudadela ---------------------------------------------------------------------

      // PVP Queso Duro Ciudadela 
        $cant_pvp_c1_ciu_dub=0.00;
        $cant_pvp_c2_ciu_dub=0.00;
        $cant_pvp_c3_ciu_dub=0.00;
        $cant_pvp_c4_ciu_dub=0.00;
        $cant_pvp_c5_ciu_dub=0.00;
        $cant_pvp_c6_ciu_dub=0.00;
        $cant_pvp_c7_ciu_dub=0.00;
        $cant_pvp_c8_ciu_dub=0.00;
        $cant_pvp_c9_ciu_dub=0.00;
        $cant_pvp_c10_ciu_dub=0.00;
        $cant_pvp_c11_ciu_dub=0.00;
        $cant_pvp_c12_ciu_dub=0.00;

      // Kg Queso Duro Ciudadela 
        $cant_kg_c1_ciu_dub=0.00;
        $cant_kg_c2_ciu_dub=0.00;
        $cant_kg_c3_ciu_dub=0.00;
        $cant_kg_c4_ciu_dub=0.00;
        $cant_kg_c5_ciu_dub=0.00;
        $cant_kg_c6_ciu_dub=0.00;
        $cant_kg_c7_ciu_dub=0.00;
        $cant_kg_c8_ciu_dub=0.00;
        $cant_kg_c9_ciu_dub=0.00;
        $cant_kg_c10_ciu_dub=0.00;
        $cant_kg_c11_ciu_dub=0.00;
        $cant_kg_c12_ciu_dub=0.00;

      // Kg Queso Duro Ciudadela 
        $cant_total_c1_ciu_dub=0.00;
        $cant_total_c2_ciu_dub=0.00;
        $cant_total_c3_ciu_dub=0.00;
        $cant_total_c4_ciu_dub=0.00;
        $cant_total_c5_ciu_dub=0.00;
        $cant_total_c6_ciu_dub=0.00;
        $cant_total_c7_ciu_dub=0.00;
        $cant_total_c8_ciu_dub=0.00;
        $cant_total_c9_ciu_dub=0.00;
        $cant_total_c10_ciu_dub=0.00;
        $cant_total_c11_ciu_dub=0.00;
        $cant_total_c12_ciu_dub=0.00;
    // -----------------------------------------------------------------------------------------------
    
    // Queso Mozarella Ciudadela ---------------------------------------------------------------------

      // PVP Queso Mozarella Ciudadela 
        $cant_pvp_c1_ciu_moz=0.00;
        $cant_pvp_c2_ciu_moz=0.00;
        $cant_pvp_c3_ciu_moz=0.00;
        $cant_pvp_c4_ciu_moz=0.00;
        $cant_pvp_c5_ciu_moz=0.00;
        $cant_pvp_c6_ciu_moz=0.00;
        $cant_pvp_c7_ciu_moz=0.00;
        $cant_pvp_c8_ciu_moz=0.00;
        $cant_pvp_c9_ciu_moz=0.00;
        $cant_pvp_c10_ciu_moz=0.00;
        $cant_pvp_c11_ciu_moz=0.00;
        $cant_pvp_c12_ciu_moz=0.00;

      // Kg Queso Mozarella Ciudadela 
        $cant_kg_c1_ciu_moz=0.00;
        $cant_kg_c2_ciu_moz=0.00;
        $cant_kg_c3_ciu_moz=0.00;
        $cant_kg_c4_ciu_moz=0.00;
        $cant_kg_c5_ciu_moz=0.00;
        $cant_kg_c6_ciu_moz=0.00;
        $cant_kg_c7_ciu_moz=0.00;
        $cant_kg_c8_ciu_moz=0.00;
        $cant_kg_c9_ciu_moz=0.00;
        $cant_kg_c10_ciu_moz=0.00;
        $cant_kg_c11_ciu_moz=0.00;
        $cant_kg_c12_ciu_moz=0.00;

      // total Queso Mozarella Ciudadela 
        $cant_total_c1_ciu_moz=0.00;
        $cant_total_c2_ciu_moz=0.00;
        $cant_total_c3_ciu_moz=0.00;
        $cant_total_c4_ciu_moz=0.00;
        $cant_total_c5_ciu_moz=0.00;
        $cant_total_c6_ciu_moz=0.00;
        $cant_total_c7_ciu_moz=0.00;
        $cant_total_c8_ciu_moz=0.00;
        $cant_total_c9_ciu_moz=0.00;
        $cant_total_c10_ciu_moz=0.00;
        $cant_total_c11_ciu_moz=0.00;
        $cant_total_c12_ciu_moz=0.00;
    // --------------------------------------------------------------------------------------------
    
    // Queso Gouda Ciudadela ---------------------------------------------------------------------

      // PVP Queso Gouda Ciudadela 
        $cant_pvp_c1_ciu_gou=0.00;
        $cant_pvp_c2_ciu_gou=0.00;
        $cant_pvp_c3_ciu_gou=0.00;
        $cant_pvp_c4_ciu_gou=0.00;
        $cant_pvp_c5_ciu_gou=0.00;
        $cant_pvp_c6_ciu_gou=0.00;
        $cant_pvp_c7_ciu_gou=0.00;
        $cant_pvp_c8_ciu_gou=0.00;
        $cant_pvp_c9_ciu_gou=0.00;
        $cant_pvp_c10_ciu_gou=0.00;
        $cant_pvp_c11_ciu_gou=0.00;
        $cant_pvp_c12_ciu_gou=0.00;

      // Kg Queso Gouda Ciudadela 
        $cant_kg_c1_ciu_gou=0.00;
        $cant_kg_c2_ciu_gou=0.00;
        $cant_kg_c3_ciu_gou=0.00;
        $cant_kg_c4_ciu_gou=0.00;
        $cant_kg_c5_ciu_gou=0.00;
        $cant_kg_c6_ciu_gou=0.00;
        $cant_kg_c7_ciu_gou=0.00;
        $cant_kg_c8_ciu_gou=0.00;
        $cant_kg_c9_ciu_gou=0.00;
        $cant_kg_c10_ciu_gou=0.00;
        $cant_kg_c11_ciu_gou=0.00;
        $cant_kg_c12_ciu_gou=0.00;

      // total Queso Gouda Ciudadela 
        $cant_total_c1_ciu_gou=0.00;
        $cant_total_c2_ciu_gou=0.00;
        $cant_total_c3_ciu_gou=0.00;
        $cant_total_c4_ciu_gou=0.00;
        $cant_total_c5_ciu_gou=0.00;
        $cant_total_c6_ciu_gou=0.00;
        $cant_total_c7_ciu_gou=0.00;
        $cant_total_c8_ciu_gou=0.00;
        $cant_total_c9_ciu_gou=0.00;
        $cant_total_c10_ciu_gou=0.00;
        $cant_total_c11_ciu_gou=0.00;
        $cant_total_c12_ciu_gou=0.00;
    // --------------------------------------------------------------------------------------------
    
    // Queso Dietético Ciudadela ---------------------------------------------------------------------

      // PVP Queso Dietético Ciudadela 
        $cant_pvp_c1_ciu_die=0.00;
        $cant_pvp_c2_ciu_die=0.00;
        $cant_pvp_c3_ciu_die=0.00;
        $cant_pvp_c4_ciu_die=0.00;
        $cant_pvp_c5_ciu_die=0.00;
        $cant_pvp_c6_ciu_die=0.00;
        $cant_pvp_c7_ciu_die=0.00;
        $cant_pvp_c8_ciu_die=0.00;
        $cant_pvp_c9_ciu_die=0.00;
        $cant_pvp_c10_ciu_die=0.00;
        $cant_pvp_c11_ciu_die=0.00;
        $cant_pvp_c12_ciu_die=0.00;

      // Kg Queso Dietético Ciudadela 
        $cant_kg_c1_ciu_die=0.00;
        $cant_kg_c2_ciu_die=0.00;
        $cant_kg_c3_ciu_die=0.00;
        $cant_kg_c4_ciu_die=0.00;
        $cant_kg_c5_ciu_die=0.00;
        $cant_kg_c6_ciu_die=0.00;
        $cant_kg_c7_ciu_die=0.00;
        $cant_kg_c8_ciu_die=0.00;
        $cant_kg_c9_ciu_die=0.00;
        $cant_kg_c10_ciu_die=0.00;
        $cant_kg_c11_ciu_die=0.00;
        $cant_kg_c12_ciu_die=0.00;

      // total Queso Dietético Ciudadela 
        $cant_total_c1_ciu_die=0.00;
        $cant_total_c2_ciu_die=0.00;
        $cant_total_c3_ciu_die=0.00;
        $cant_total_c4_ciu_die=0.00;
        $cant_total_c5_ciu_die=0.00;
        $cant_total_c6_ciu_die=0.00;
        $cant_total_c7_ciu_die=0.00;
        $cant_total_c8_ciu_die=0.00;
        $cant_total_c9_ciu_die=0.00;
        $cant_total_c10_ciu_die=0.00;
        $cant_total_c11_ciu_die=0.00;
        $cant_total_c12_ciu_die=0.00;
    
    // ---------------------------------------------------------------------------------------------

    // SAN FIERRO **********************************************************************************

    // Queso Duro San Fierro -----------------------------------------------------------------------
      // PVP Queso Duro San Fierro 
        $cant_pvp_c1_sfi_dub=0.00;
        $cant_pvp_c2_sfi_dub=0.00;
        $cant_pvp_c3_sfi_dub=0.00;
        $cant_pvp_c4_sfi_dub=0.00;
        $cant_pvp_c5_sfi_dub=0.00;
        $cant_pvp_c6_sfi_dub=0.00;
        $cant_pvp_c7_sfi_dub=0.00;
        $cant_pvp_c8_sfi_dub=0.00;
        $cant_pvp_c9_sfi_dub=0.00;
        $cant_pvp_c10_sfi_dub=0.00;
        $cant_pvp_c11_sfi_dub=0.00;
        $cant_pvp_c12_sfi_dub=0.00;

      // Kg Queso Duro San Fierro 
        $cant_kg_c1_sfi_dub=0.00;
        $cant_kg_c2_sfi_dub=0.00;
        $cant_kg_c3_sfi_dub=0.00;
        $cant_kg_c4_sfi_dub=0.00;
        $cant_kg_c5_sfi_dub=0.00;
        $cant_kg_c6_sfi_dub=0.00;
        $cant_kg_c7_sfi_dub=0.00;
        $cant_kg_c8_sfi_dub=0.00;
        $cant_kg_c9_sfi_dub=0.00;
        $cant_kg_c10_sfi_dub=0.00;
        $cant_kg_c11_sfi_dub=0.00;
        $cant_kg_c12_sfi_dub=0.00;

      // total Queso Duro San Fierro 
        $cant_total_c1_sfi_dub=0.00;
        $cant_total_c2_sfi_dub=0.00;
        $cant_total_c3_sfi_dub=0.00;
        $cant_total_c4_sfi_dub=0.00;
        $cant_total_c5_sfi_dub=0.00;
        $cant_total_c6_sfi_dub=0.00;
        $cant_total_c7_sfi_dub=0.00;
        $cant_total_c8_sfi_dub=0.00;
        $cant_total_c9_sfi_dub=0.00;
        $cant_total_c10_sfi_dub=0.00;
        $cant_total_c11_sfi_dub=0.00;
        $cant_total_c12_sfi_dub=0.00;
    //----------------------------------------------------------------------------------------------
    
    // Queso Mozarella San Fierro -----------------------------------------------------------------------

      // PVP Queso Mozarella San Fierro 
        $cant_pvp_c1_sfi_moz=0.00;
        $cant_pvp_c2_sfi_moz=0.00;
        $cant_pvp_c3_sfi_moz=0.00;
        $cant_pvp_c4_sfi_moz=0.00;
        $cant_pvp_c5_sfi_moz=0.00;
        $cant_pvp_c6_sfi_moz=0.00;
        $cant_pvp_c7_sfi_moz=0.00;
        $cant_pvp_c8_sfi_moz=0.00;
        $cant_pvp_c9_sfi_moz=0.00;
        $cant_pvp_c10_sfi_moz=0.00;
        $cant_pvp_c11_sfi_moz=0.00;
        $cant_pvp_c12_sfi_moz=0.00;

      // Kg Queso Mozarella San Fierro 
        $cant_kg_c1_sfi_moz=0.00;
        $cant_kg_c2_sfi_moz=0.00;
        $cant_kg_c3_sfi_moz=0.00;
        $cant_kg_c4_sfi_moz=0.00;
        $cant_kg_c5_sfi_moz=0.00;
        $cant_kg_c6_sfi_moz=0.00;
        $cant_kg_c7_sfi_moz=0.00;
        $cant_kg_c8_sfi_moz=0.00;
        $cant_kg_c9_sfi_moz=0.00;
        $cant_kg_c10_sfi_moz=0.00;
        $cant_kg_c11_sfi_moz=0.00;
        $cant_kg_c12_sfi_moz=0.00;

      // total Queso Mozarella San Fierro 
        $cant_total_c1_sfi_moz=0.00;
        $cant_total_c2_sfi_moz=0.00;
        $cant_total_c3_sfi_moz=0.00;
        $cant_total_c4_sfi_moz=0.00;
        $cant_total_c5_sfi_moz=0.00;
        $cant_total_c6_sfi_moz=0.00;
        $cant_total_c7_sfi_moz=0.00;
        $cant_total_c8_sfi_moz=0.00;
        $cant_total_c9_sfi_moz=0.00;
        $cant_total_c10_sfi_moz=0.00;
        $cant_total_c11_sfi_moz=0.00;
        $cant_total_c12_sfi_moz=0.00;
    //--------------------------------------------------------------------------------------------
    
    // Queso Gouda San Fierro -----------------------------------------------------------------------

      // PVP Queso Gouda San Fierro 
        $cant_pvp_c1_sfi_gou=0.00;
        $cant_pvp_c2_sfi_gou=0.00;
        $cant_pvp_c3_sfi_gou=0.00;
        $cant_pvp_c4_sfi_gou=0.00;
        $cant_pvp_c5_sfi_gou=0.00;
        $cant_pvp_c6_sfi_gou=0.00;
        $cant_pvp_c7_sfi_gou=0.00;
        $cant_pvp_c8_sfi_gou=0.00;
        $cant_pvp_c9_sfi_gou=0.00;
        $cant_pvp_c10_sfi_gou=0.00;
        $cant_pvp_c11_sfi_gou=0.00;
        $cant_pvp_c12_sfi_gou=0.00;

      // Kg Queso Gouda San Fierro 
        $cant_kg_c1_sfi_gou=0.00;
        $cant_kg_c2_sfi_gou=0.00;
        $cant_kg_c3_sfi_gou=0.00;
        $cant_kg_c4_sfi_gou=0.00;
        $cant_kg_c5_sfi_gou=0.00;
        $cant_kg_c6_sfi_gou=0.00;
        $cant_kg_c7_sfi_gou=0.00;
        $cant_kg_c8_sfi_gou=0.00;
        $cant_kg_c9_sfi_gou=0.00;
        $cant_kg_c10_sfi_gou=0.00;
        $cant_kg_c11_sfi_gou=0.00;
        $cant_kg_c12_sfi_gou=0.00;

      // Kg Queso Gouda San Fierro 
        $cant_total_c1_sfi_gou=0.00;
        $cant_total_c2_sfi_gou=0.00;
        $cant_total_c3_sfi_gou=0.00;
        $cant_total_c4_sfi_gou=0.00;
        $cant_total_c5_sfi_gou=0.00;
        $cant_total_c6_sfi_gou=0.00;
        $cant_total_c7_sfi_gou=0.00;
        $cant_total_c8_sfi_gou=0.00;
        $cant_total_c9_sfi_gou=0.00;
        $cant_total_c10_sfi_gou=0.00;
        $cant_total_c11_sfi_gou=0.00;
        $cant_total_c12_sfi_gou=0.00;
    //----------------------------------------------------------------------------------------------
    
    // Queso Gouda San Fierro -----------------------------------------------------------------------

      // PVP Queso Dietético San Fierro 
        $cant_pvp_c1_sfi_die=0.00;
        $cant_pvp_c2_sfi_die=0.00;
        $cant_pvp_c3_sfi_die=0.00;
        $cant_pvp_c4_sfi_die=0.00;
        $cant_pvp_c5_sfi_die=0.00;
        $cant_pvp_c6_sfi_die=0.00;
        $cant_pvp_c7_sfi_die=0.00;
        $cant_pvp_c8_sfi_die=0.00;
        $cant_pvp_c9_sfi_die=0.00;
        $cant_pvp_c10_sfi_die=0.00;
        $cant_pvp_c11_sfi_die=0.00;
        $cant_pvp_c12_sfi_die=0.00;

      // Kg Queso Dietético San Fierro 
        $cant_kg_c1_sfi_die=0.00;
        $cant_kg_c2_sfi_die=0.00;
        $cant_kg_c3_sfi_die=0.00;
        $cant_kg_c4_sfi_die=0.00;
        $cant_kg_c5_sfi_die=0.00;
        $cant_kg_c6_sfi_die=0.00;
        $cant_kg_c7_sfi_die=0.00;
        $cant_kg_c8_sfi_die=0.00;
        $cant_kg_c9_sfi_die=0.00;
        $cant_kg_c10_sfi_die=0.00;
        $cant_kg_c11_sfi_die=0.00;
        $cant_kg_c12_sfi_die=0.00;

      // total Queso Dietético San Fierro 
        $cant_total_c1_sfi_die=0.00;
        $cant_total_c2_sfi_die=0.00;
        $cant_total_c3_sfi_die=0.00;
        $cant_total_c4_sfi_die=0.00;
        $cant_total_c5_sfi_die=0.00;
        $cant_total_c6_sfi_die=0.00;
        $cant_total_c7_sfi_die=0.00;
        $cant_total_c8_sfi_die=0.00;
        $cant_total_c9_sfi_die=0.00;
        $cant_total_c10_sfi_die=0.00;
        $cant_total_c11_sfi_die=0.00;
        $cant_total_c12_sfi_die=0.00;
    //------------------------------------------------------------------------------------------------

    // SAN FIERRO **********************************************************************************

    // Queso Duro Los Santos -----------------------------------------------------------------------

      // PVP Queso Duro Los Santos 
        $cant_pvp_c1_lsa_dub=0.00;
        $cant_pvp_c2_lsa_dub=0.00;
        $cant_pvp_c3_lsa_dub=0.00;
        $cant_pvp_c4_lsa_dub=0.00;
        $cant_pvp_c5_lsa_dub=0.00;
        $cant_pvp_c6_lsa_dub=0.00;
        $cant_pvp_c7_lsa_dub=0.00;
        $cant_pvp_c8_lsa_dub=0.00;
        $cant_pvp_c9_lsa_dub=0.00;
        $cant_pvp_c10_lsa_dub=0.00;
        $cant_pvp_c11_lsa_dub=0.00;
        $cant_pvp_c12_lsa_dub=0.00;

      // Kg Queso Duro Los Santos 
        $cant_kg_c1_lsa_dub=0.00;
        $cant_kg_c2_lsa_dub=0.00;
        $cant_kg_c3_lsa_dub=0.00;
        $cant_kg_c4_lsa_dub=0.00;
        $cant_kg_c5_lsa_dub=0.00;
        $cant_kg_c6_lsa_dub=0.00;
        $cant_kg_c7_lsa_dub=0.00;
        $cant_kg_c8_lsa_dub=0.00;
        $cant_kg_c9_lsa_dub=0.00;
        $cant_kg_c10_lsa_dub=0.00;
        $cant_kg_c11_lsa_dub=0.00;
        $cant_kg_c12_lsa_dub=0.00;

      // total Queso Duro Los Santos 
        $cant_total_c1_lsa_dub=0.00;
        $cant_total_c2_lsa_dub=0.00;
        $cant_total_c3_lsa_dub=0.00;
        $cant_total_c4_lsa_dub=0.00;
        $cant_total_c5_lsa_dub=0.00;
        $cant_total_c6_lsa_dub=0.00;
        $cant_total_c7_lsa_dub=0.00;
        $cant_total_c8_lsa_dub=0.00;
        $cant_total_c9_lsa_dub=0.00;
        $cant_total_c10_lsa_dub=0.00;
        $cant_total_c11_lsa_dub=0.00;
        $cant_total_c12_lsa_dub=0.00;
    // -----------------------------------------------------------------------------------------------
    
    // Queso Mozarella Los Santos-----------------------------------------------------------------------

      // PVP Queso Mozarella Los Santos 
        $cant_pvp_c1_lsa_moz=0.00;
        $cant_pvp_c2_lsa_moz=0.00;
        $cant_pvp_c3_lsa_moz=0.00;
        $cant_pvp_c4_lsa_moz=0.00;
        $cant_pvp_c5_lsa_moz=0.00;
        $cant_pvp_c6_lsa_moz=0.00;
        $cant_pvp_c7_lsa_moz=0.00;
        $cant_pvp_c8_lsa_moz=0.00;
        $cant_pvp_c9_lsa_moz=0.00;
        $cant_pvp_c10_lsa_moz=0.00;
        $cant_pvp_c11_lsa_moz=0.00;
        $cant_pvp_c12_lsa_moz=0.00;

      // kg Queso Mozarella Los Santos 
        $cant_kg_c1_lsa_moz=0.00;
        $cant_kg_c2_lsa_moz=0.00;
        $cant_kg_c3_lsa_moz=0.00;
        $cant_kg_c4_lsa_moz=0.00;
        $cant_kg_c5_lsa_moz=0.00;
        $cant_kg_c6_lsa_moz=0.00;
        $cant_kg_c7_lsa_moz=0.00;
        $cant_kg_c8_lsa_moz=0.00;
        $cant_kg_c9_lsa_moz=0.00;
        $cant_kg_c10_lsa_moz=0.00;
        $cant_kg_c11_lsa_moz=0.00;
        $cant_kg_c12_lsa_moz=0.00;

      // total Queso Mozarella Los Santos 
        $cant_total_c1_lsa_moz=0.00;
        $cant_total_c2_lsa_moz=0.00;
        $cant_total_c3_lsa_moz=0.00;
        $cant_total_c4_lsa_moz=0.00;
        $cant_total_c5_lsa_moz=0.00;
        $cant_total_c6_lsa_moz=0.00;
        $cant_total_c7_lsa_moz=0.00;
        $cant_total_c8_lsa_moz=0.00;
        $cant_total_c9_lsa_moz=0.00;
        $cant_total_c10_lsa_moz=0.00;
        $cant_total_c11_lsa_moz=0.00;
        $cant_total_c12_lsa_moz=0.00;
    //--------------------------------------------------------------------------------------------------
    
    // Queso Gouda Los Santos -----------------------------------------------------------------------

      // PVP Queso Gouda Los Santos 
        $cant_pvp_c1_lsa_gou=0.00;
        $cant_pvp_c2_lsa_gou=0.00;
        $cant_pvp_c3_lsa_gou=0.00;
        $cant_pvp_c4_lsa_gou=0.00;
        $cant_pvp_c5_lsa_gou=0.00;
        $cant_pvp_c6_lsa_gou=0.00;
        $cant_pvp_c7_lsa_gou=0.00;
        $cant_pvp_c8_lsa_gou=0.00;
        $cant_pvp_c9_lsa_gou=0.00;
        $cant_pvp_c10_lsa_gou=0.00;
        $cant_pvp_c11_lsa_gou=0.00;
        $cant_pvp_c12_lsa_gou=0.00;

      // Kg Queso Gouda Los Santos 
        $cant_kg_c1_lsa_gou=0.00;
        $cant_kg_c2_lsa_gou=0.00;
        $cant_kg_c3_lsa_gou=0.00;
        $cant_kg_c4_lsa_gou=0.00;
        $cant_kg_c5_lsa_gou=0.00;
        $cant_kg_c6_lsa_gou=0.00;
        $cant_kg_c7_lsa_gou=0.00;
        $cant_kg_c8_lsa_gou=0.00;
        $cant_kg_c9_lsa_gou=0.00;
        $cant_kg_c10_lsa_gou=0.00;
        $cant_kg_c11_lsa_gou=0.00;
        $cant_kg_c12_lsa_gou=0.00;

      // total Queso Gouda Los Santos 
        $cant_total_c1_lsa_gou=0.00;
        $cant_total_c2_lsa_gou=0.00;
        $cant_total_c3_lsa_gou=0.00;
        $cant_total_c4_lsa_gou=0.00;
        $cant_total_c5_lsa_gou=0.00;
        $cant_total_c6_lsa_gou=0.00;
        $cant_total_c7_lsa_gou=0.00;
        $cant_total_c8_lsa_gou=0.00;
        $cant_total_c9_lsa_gou=0.00;
        $cant_total_c10_lsa_gou=0.00;
        $cant_total_c11_lsa_gou=0.00;
        $cant_total_c12_lsa_gou=0.00;
    //-------------------------------------------------------------------------------------------

    // Queso Dietético Los Santos -----------------------------------------------------------------------
    
      // PVP Queso Dietético Los Santos 
        $cant_pvp_c1_lsa_die=0.00;
        $cant_pvp_c2_lsa_die=0.00;
        $cant_pvp_c3_lsa_die=0.00;
        $cant_pvp_c4_lsa_die=0.00;
        $cant_pvp_c5_lsa_die=0.00;
        $cant_pvp_c6_lsa_die=0.00;
        $cant_pvp_c7_lsa_die=0.00;
        $cant_pvp_c8_lsa_die=0.00;
        $cant_pvp_c9_lsa_die=0.00;
        $cant_pvp_c10_lsa_die=0.00;
        $cant_pvp_c11_lsa_die=0.00;
        $cant_pvp_c12_lsa_die=0.00;

      // kg Queso Dietético Los Santos 
        $cant_kg_c1_lsa_die=0.00;
        $cant_kg_c2_lsa_die=0.00;
        $cant_kg_c3_lsa_die=0.00;
        $cant_kg_c4_lsa_die=0.00;
        $cant_kg_c5_lsa_die=0.00;
        $cant_kg_c6_lsa_die=0.00;
        $cant_kg_c7_lsa_die=0.00;
        $cant_kg_c8_lsa_die=0.00;
        $cant_kg_c9_lsa_die=0.00;
        $cant_kg_c10_lsa_die=0.00;
        $cant_kg_c11_lsa_die=0.00;
        $cant_kg_c12_lsa_die=0.00;

      // total Queso Dietético Los Santos 
        $cant_total_c1_lsa_die=0.00;
        $cant_total_c2_lsa_die=0.00;
        $cant_total_c3_lsa_die=0.00;
        $cant_total_c4_lsa_die=0.00;
        $cant_total_c5_lsa_die=0.00;
        $cant_total_c6_lsa_die=0.00;
        $cant_total_c7_lsa_die=0.00;
        $cant_total_c8_lsa_die=0.00;
        $cant_total_c9_lsa_die=0.00;
        $cant_total_c10_lsa_die=0.00;
        $cant_total_c11_lsa_die=0.00;
        $cant_total_c12_lsa_die=0.00;
    //------------------------------------------------------------------------------------------------

    // Contadores -----------------------------------------------------------------------------------
      // Ciclo 1
      $cont_c1_arm_dub=0; $cont_c1_arm_moz=0; $cont_c1_arm_gou=0; $cont_c1_arm_die=0;
      $cont_c1_ciu_dub=0; $cont_c1_ciu_moz=0; $cont_c1_ciu_gou=0; $cont_c1_ciu_die=0;
      $cont_c1_sfi_dub=0; $cont_c1_sfi_moz=0; $cont_c1_sfi_gou=0; $cont_c1_sfi_die=0;
      $cont_c1_lsa_dub=0; $cont_c1_lsa_moz=0; $cont_c1_lsa_gou=0; $cont_c1_lsa_die=0;

      $cont_c2_arm_dub=0; $cont_c2_arm_moz=0; $cont_c2_arm_gou=0; $cont_c2_arm_die=0;
      $cont_c2_ciu_dub=0; $cont_c2_ciu_moz=0; $cont_c2_ciu_gou=0; $cont_c2_ciu_die=0;
      $cont_c2_sfi_dub=0; $cont_c2_sfi_moz=0; $cont_c2_sfi_gou=0; $cont_c2_sfi_die=0;
      $cont_c2_lsa_dub=0; $cont_c2_lsa_moz=0; $cont_c2_lsa_gou=0; $cont_c2_lsa_die=0;

      $cont_c3_arm_dub=0; $cont_c3_arm_moz=0; $cont_c3_arm_gou=0; $cont_c3_arm_die=0;
      $cont_c3_ciu_dub=0; $cont_c3_ciu_moz=0; $cont_c3_ciu_gou=0; $cont_c3_ciu_die=0;
      $cont_c3_sfi_dub=0; $cont_c3_sfi_moz=0; $cont_c3_sfi_gou=0; $cont_c3_sfi_die=0;
      $cont_c3_lsa_dub=0; $cont_c3_lsa_moz=0; $cont_c3_lsa_gou=0; $cont_c3_lsa_die=0;

      $cont_c4_arm_dub=0; $cont_c4_arm_moz=0; $cont_c4_arm_gou=0; $cont_c4_arm_die=0;
      $cont_c4_ciu_dub=0; $cont_c4_ciu_moz=0; $cont_c4_ciu_gou=0; $cont_c4_ciu_die=0;
      $cont_c4_sfi_dub=0; $cont_c4_sfi_moz=0; $cont_c4_sfi_gou=0; $cont_c4_sfi_die=0;
      $cont_c4_lsa_dub=0; $cont_c4_lsa_moz=0; $cont_c4_lsa_gou=0; $cont_c4_lsa_die=0;

      $cont_c5_arm_dub=0; $cont_c5_arm_moz=0; $cont_c5_arm_gou=0; $cont_c5_arm_die=0;
      $cont_c5_ciu_dub=0; $cont_c5_ciu_moz=0; $cont_c5_ciu_gou=0; $cont_c5_ciu_die=0;
      $cont_c5_sfi_dub=0; $cont_c5_sfi_moz=0; $cont_c5_sfi_gou=0; $cont_c5_sfi_die=0;
      $cont_c5_lsa_dub=0; $cont_c5_lsa_moz=0; $cont_c5_lsa_gou=0; $cont_c5_lsa_die=0;

      $cont_c6_arm_dub=0; $cont_c6_arm_moz=0; $cont_c6_arm_gou=0; $cont_c6_arm_die=0;
      $cont_c6_ciu_dub=0; $cont_c6_ciu_moz=0; $cont_c6_ciu_gou=0; $cont_c6_ciu_die=0;
      $cont_c6_sfi_dub=0; $cont_c6_sfi_moz=0; $cont_c6_sfi_gou=0; $cont_c6_sfi_die=0;
      $cont_c6_lsa_dub=0; $cont_c6_lsa_moz=0; $cont_c6_lsa_gou=0; $cont_c6_lsa_die=0;

      $cont_c7_arm_dub=0; $cont_c7_arm_moz=0; $cont_c7_arm_gou=0; $cont_c7_arm_die=0;
      $cont_c7_ciu_dub=0; $cont_c7_ciu_moz=0; $cont_c7_ciu_gou=0; $cont_c7_ciu_die=0;
      $cont_c7_sfi_dub=0; $cont_c7_sfi_moz=0; $cont_c7_sfi_gou=0; $cont_c7_sfi_die=0;
      $cont_c7_lsa_dub=0; $cont_c7_lsa_moz=0; $cont_c7_lsa_gou=0; $cont_c7_lsa_die=0;
      
      $cont_c8_arm_dub=0; $cont_c8_arm_moz=0; $cont_c8_arm_gou=0; $cont_c8_arm_die=0;
      $cont_c8_ciu_dub=0; $cont_c8_ciu_moz=0; $cont_c8_ciu_gou=0; $cont_c8_ciu_die=0;
      $cont_c8_sfi_dub=0; $cont_c8_sfi_moz=0; $cont_c8_sfi_gou=0; $cont_c8_sfi_die=0;
      $cont_c8_lsa_dub=0; $cont_c8_lsa_moz=0; $cont_c8_lsa_gou=0; $cont_c8_lsa_die=0;

      $cont_c9_arm_dub=0; $cont_c9_arm_moz=0; $cont_c9_arm_gou=0; $cont_c9_arm_die=0;
      $cont_c9_ciu_dub=0; $cont_c9_ciu_moz=0; $cont_c9_ciu_gou=0; $cont_c9_ciu_die=0;
      $cont_c9_sfi_dub=0; $cont_c9_sfi_moz=0; $cont_c9_sfi_gou=0; $cont_c9_sfi_die=0;
      $cont_c9_lsa_dub=0; $cont_c9_lsa_moz=0; $cont_c9_lsa_gou=0; $cont_c9_lsa_die=0;
      
      $cont_c10_arm_dub=0; $cont_c10_arm_moz=0; $cont_c10_arm_gou=0; $cont_c10_arm_die=0;
      $cont_c10_ciu_dub=0; $cont_c10_ciu_moz=0; $cont_c10_ciu_gou=0; $cont_c10_ciu_die=0;
      $cont_c10_sfi_dub=0; $cont_c10_sfi_moz=0; $cont_c10_sfi_gou=0; $cont_c10_sfi_die=0;
      $cont_c10_lsa_dub=0; $cont_c10_lsa_moz=0; $cont_c10_lsa_gou=0; $cont_c10_lsa_die=0;



    // -----------------------------------------------------------------------------------------------
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
        // Selecciono el almacén tiendas ---------------------------------------------------------------
        $sentencia=$pdo->prepare("SELECT * FROM `tiendas` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
        $sentencia->execute();
        $listado_tiendas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cant_tiendas=$sentencia->rowCount();

        if($cant_tiendas>=1){
          foreach($listado_tiendas as $tiendas){
            $nro_tiendas=$tiendas['nro'];
            $txtCant_cap_almacen=$tiendas['cant_cap_almacen'];
            $txtCant_existencia=$tiendas['cant_existencia'];
            $txtCant_cap_disp=$tiendas['cant_cap_disp'];
          }
          // Selecciono los movimientos de las tiendas ---------------------------------------------------------------
          $sentencia=$pdo->prepare("SELECT * FROM `tiendas_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
          $sentencia->execute();
          $listado_tiendas_mov=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_tiendas_mov=$sentencia->rowCount();
          
          if($cant_tiendas_mov>=1){

            foreach($listado_tiendas_mov as $tiendas_mov){
              $ciclo=$tiendas_mov['ciclo'];
              $tienda=$tiendas_mov['nro_tienda'];
              $queso=$tiendas_mov['nro_queso'];
              // selecciono el ciclo
              switch ($ciclo){
                case 1; // Ciclo 1
                    //selecciono la tienda
                    switch($tienda){
                      case 1; // Armadillo
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c1_arm_dub=$cant_pvp_c1_arm_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_arm_dub=$cant_kg_c1_arm_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c1_arm_dub=$cant_total_c1_arm_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c1_arm_dub=$cont_c1_arm_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c1_arm_moz=$cant_pvp_c1_arm_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_arm_moz=$cant_kg_c1_arm_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c1_arm_moz=$cant_total_c1_arm_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c1_arm_moz=$cont_c1_arm_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c1_arm_gou=$cant_pvp_c1_arm_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_arm_gou=$cant_kg_c1_arm_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c1_arm_gou=$cant_total_c1_arm_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c1_arm_gou=$cont_c1_arm_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c1_arm_die=$cant_pvp_c1_arm_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_arm_die=$cant_kg_c1_arm_die+$tiendas_mov['cant_venta'];
                              $cant_total_c1_arm_die=$cant_total_c1_arm_die+$tiendas_mov['cant_ingreso'];
                              $cont_c1_arm_die=$cont_c1_arm_die+1;
                            break;
                          }
                      break;
                      case 2; // Ciudadela
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c1_ciu_dub=$cant_pvp_c1_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_ciu_dub=$cant_kg_c1_ciu_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c1_ciu_dub=$cant_total_c1_ciu_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c1_ciu_dub=$cont_c1_ciu_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c1_ciu_moz=$cant_pvp_c1_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_ciu_moz=$cant_kg_c1_ciu_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c1_ciu_moz=$cant_total_c1_ciu_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c1_ciu_moz=$cont_c1_ciu_moz+1;
                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c1_ciu_gou=$cant_pvp_c1_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_ciu_gou=$cant_kg_c1_ciu_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c1_ciu_gou=$cant_total_c1_ciu_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c1_ciu_gou=$cont_c1_ciu_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c1_ciu_die=$cant_pvp_c1_ciu_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_ciu_die=$cant_kg_c1_ciu_die+$tiendas_mov['cant_venta'];
                              $cant_total_c1_ciu_die=$cant_total_c1_ciu_die+$tiendas_mov['cant_ingreso'];
                              $cont_c1_ciu_die=$cont_c1_ciu_die+1;
                            break;
                          }
                      break;
                      case 3; // San Fierro
                        // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c1_sfi_dub=$cant_pvp_c1_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_sfi_dub=$cant_kg_c1_sfi_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c1_sfi_dub=$cant_total_c1_sfi_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c1_sfi_dub=$cont_c1_sfi_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c1_sfi_moz=$cant_pvp_c1_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_sfi_moz=$cant_kg_c1_sfi_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c1_sfi_moz=$cant_total_c1_sfi_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c1_sfi_moz=$cont_c1_sfi_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c1_sfi_gou=$cant_pvp_c1_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_sfi_gou=$cant_kg_c1_sfi_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c1_sfi_gou=$cant_total_c1_sfi_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c1_sfi_gou=$cont_c1_sfi_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c1_sfi_die=$cant_pvp_c1_sfi_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_sfi_die=$cant_kg_c1_sfi_die+$tiendas_mov['cant_venta'];
                              $cant_total_c1_sfi_die=$cant_total_c1_sfi_die+$tiendas_mov['cant_ingreso'];
                              $cont_c1_sfi_die=$cont_c1_sfi_die+1;
                            break;
                          }
                      break;
                      case 4; // Los Santos
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c1_lsa_dub=$cant_pvp_c1_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_lsa_dub=$cant_kg_c1_lsa_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c1_lsa_dub=$cant_total_c1_lsa_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c1_lsa_dub=$cont_c1_lsa_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c1_lsa_moz=$cant_pvp_c1_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_lsa_moz=$cant_kg_c1_lsa_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c1_lsa_moz=$cant_total_c1_lsa_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c1_lsa_moz=$cont_c1_lsa_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c1_lsa_gou=$cant_pvp_c1_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_lsa_gou=$cant_kg_c1_lsa_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c1_lsa_gou=$cant_total_c1_lsa_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c1_lsa_gou=$cont_c1_lsa_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c1_lsa_die=$cant_pvp_c1_lsa_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c1_lsa_die=$cant_kg_c1_lsa_die+$tiendas_mov['cant_venta'];
                              $cant_total_c1_lsa_die=$cant_total_c1_lsa_die+$tiendas_mov['cant_ingreso'];
                              $cont_c1_lsa_die=$cont_c1_lsa_die+1;
                            break;
                          }

                      break;
                    }
                break;

                case 2; // Ciclo 2
                    //selecciono la tienda
                    switch($tienda){
                      case 1; // Armadillo
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c2_arm_dub=$cant_pvp_c2_arm_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_arm_dub=$cant_kg_c2_arm_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c2_arm_dub=$cant_total_c2_arm_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c2_arm_dub=$cont_c2_arm_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c2_arm_moz=$cant_pvp_c2_arm_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_arm_moz=$cant_kg_c2_arm_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c2_arm_moz=$cant_total_c2_arm_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c2_arm_moz=$cont_c2_arm_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c2_arm_gou=$cant_pvp_c2_arm_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_arm_gou=$cant_kg_c2_arm_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c2_arm_gou=$cant_total_c2_arm_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c2_arm_gou=$cont_c2_arm_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c2_arm_die=$cant_pvp_c2_arm_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_arm_die=$cant_kg_c2_arm_die+$tiendas_mov['cant_venta'];
                              $cant_total_c2_arm_die=$cant_total_c2_arm_die+$tiendas_mov['cant_ingreso'];
                              $cont_c2_arm_die=$cont_c2_arm_die+1;
                            break;
                          }
                      break;
                      case 2; // Ciudadela
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c2_ciu_dub=$cant_pvp_c2_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_ciu_dub=$cant_kg_c2_ciu_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c2_ciu_dub=$cant_total_c2_ciu_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c2_ciu_dub=$cont_c2_ciu_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c2_ciu_moz=$cant_pvp_c2_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_ciu_moz=$cant_kg_c2_ciu_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c2_ciu_moz=$cant_total_c2_ciu_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c2_ciu_moz=$cont_c2_ciu_moz+1;
                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c2_ciu_gou=$cant_pvp_c2_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_ciu_gou=$cant_kg_c2_ciu_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c2_ciu_gou=$cant_total_c2_ciu_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c2_ciu_gou=$cont_c2_ciu_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c2_ciu_die=$cant_pvp_c2_ciu_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_ciu_die=$cant_kg_c2_ciu_die+$tiendas_mov['cant_venta'];
                              $cant_total_c2_ciu_die=$cant_total_c2_ciu_die+$tiendas_mov['cant_ingreso'];
                              $cont_c2_ciu_die=$cont_c2_ciu_die+1;
                            break;
                          }
                      break;
                      case 3; // San Fierro
                        // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c2_sfi_dub=$cant_pvp_c2_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_sfi_dub=$cant_kg_c2_sfi_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c2_sfi_dub=$cant_total_c2_sfi_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c2_sfi_dub=$cont_c2_sfi_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c2_sfi_moz=$cant_pvp_c2_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_sfi_moz=$cant_kg_c2_sfi_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c2_sfi_moz=$cant_total_c2_sfi_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c2_sfi_moz=$cont_c2_sfi_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c2_sfi_gou=$cant_pvp_c2_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_sfi_gou=$cant_kg_c2_sfi_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c2_sfi_gou=$cant_total_c2_sfi_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c2_sfi_gou=$cont_c2_sfi_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c2_sfi_die=$cant_pvp_c2_sfi_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_sfi_die=$cant_kg_c2_sfi_die+$tiendas_mov['cant_venta'];
                              $cant_total_c2_sfi_die=$cant_total_c2_sfi_die+$tiendas_mov['cant_ingreso'];
                              $cont_c2_sfi_die=$cont_c2_sfi_die+1;
                            break;
                          }
                      break;
                      case 4; // Los Santos
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c2_lsa_dub=$cant_pvp_c2_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_lsa_dub=$cant_kg_c2_lsa_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c2_lsa_dub=$cant_total_c2_lsa_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c2_lsa_dub=$cont_c2_lsa_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c2_lsa_moz=$cant_pvp_c2_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_lsa_moz=$cant_kg_c2_lsa_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c2_lsa_moz=$cant_total_c2_lsa_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c2_lsa_moz=$cont_c2_lsa_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c2_lsa_gou=$cant_pvp_c2_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_lsa_gou=$cant_kg_c2_lsa_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c2_lsa_gou=$cant_total_c2_lsa_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c2_lsa_gou=$cont_c2_lsa_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c2_lsa_die=$cant_pvp_c2_lsa_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c2_lsa_die=$cant_kg_c2_lsa_die+$tiendas_mov['cant_venta'];
                              $cant_total_c2_lsa_die=$cant_total_c2_lsa_die+$tiendas_mov['cant_ingreso'];
                              $cont_c2_lsa_die=$cont_c2_lsa_die+1;
                            break;
                          }

                      break;
                    }
                break;

                case 3; // Ciclo 3
                    //selecciono la tienda
                    switch($tienda){
                      case 1; // Armadillo
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c3_arm_dub=$cant_pvp_c3_arm_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_arm_dub=$cant_kg_c3_arm_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c3_arm_dub=$cant_total_c3_arm_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c3_arm_dub=$cont_c3_arm_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c3_arm_moz=$cant_pvp_c3_arm_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_arm_moz=$cant_kg_c3_arm_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c3_arm_moz=$cant_total_c3_arm_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c3_arm_moz=$cont_c3_arm_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c3_arm_gou=$cant_pvp_c3_arm_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_arm_gou=$cant_kg_c3_arm_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c3_arm_gou=$cant_total_c3_arm_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c3_arm_gou=$cont_c3_arm_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c3_arm_die=$cant_pvp_c3_arm_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_arm_die=$cant_kg_c3_arm_die+$tiendas_mov['cant_venta'];
                              $cant_total_c3_arm_die=$cant_total_c3_arm_die+$tiendas_mov['cant_ingreso'];
                              $cont_c3_arm_die=$cont_c3_arm_die+1;
                            break;
                          }
                      break;
                      case 2; // Ciudadela
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c3_ciu_dub=$cant_pvp_c3_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_ciu_dub=$cant_kg_c3_ciu_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c3_ciu_dub=$cant_total_c3_ciu_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c3_ciu_dub=$cont_c3_ciu_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c3_ciu_moz=$cant_pvp_c3_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_ciu_moz=$cant_kg_c3_ciu_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c3_ciu_moz=$cant_total_c3_ciu_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c3_ciu_moz=$cont_c3_ciu_moz+1;
                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c3_ciu_gou=$cant_pvp_c3_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_ciu_gou=$cant_kg_c3_ciu_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c3_ciu_gou=$cant_total_c3_ciu_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c3_ciu_gou=$cont_c3_ciu_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c3_ciu_die=$cant_pvp_c3_ciu_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_ciu_die=$cant_kg_c3_ciu_die+$tiendas_mov['cant_venta'];
                              $cant_total_c3_ciu_die=$cant_total_c3_ciu_die+$tiendas_mov['cant_ingreso'];
                              $cont_c3_ciu_die=$cont_c3_ciu_die+1;
                            break;
                          }
                      break;
                      case 3; // San Fierro
                        // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c3_sfi_dub=$cant_pvp_c3_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_sfi_dub=$cant_kg_c3_sfi_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c3_sfi_dub=$cant_total_c3_sfi_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c3_sfi_dub=$cont_c3_sfi_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c3_sfi_moz=$cant_pvp_c3_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_sfi_moz=$cant_kg_c3_sfi_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c3_sfi_moz=$cant_total_c3_sfi_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c3_sfi_moz=$cont_c3_sfi_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c3_sfi_gou=$cant_pvp_c3_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_sfi_gou=$cant_kg_c3_sfi_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c3_sfi_gou=$cant_total_c3_sfi_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c3_sfi_gou=$cont_c3_sfi_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c3_sfi_die=$cant_pvp_c3_sfi_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_sfi_die=$cant_kg_c3_sfi_die+$tiendas_mov['cant_venta'];
                              $cant_total_c3_sfi_die=$cant_total_c3_sfi_die+$tiendas_mov['cant_ingreso'];
                              $cont_c3_sfi_die=$cont_c3_sfi_die+1;
                            break;
                          }
                      break;
                      case 4; // Los Santos
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c3_lsa_dub=$cant_pvp_c3_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_lsa_dub=$cant_kg_c3_lsa_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c3_lsa_dub=$cant_total_c3_lsa_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c3_lsa_dub=$cont_c3_lsa_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c3_lsa_moz=$cant_pvp_c3_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_lsa_moz=$cant_kg_c3_lsa_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c3_lsa_moz=$cant_total_c3_lsa_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c3_lsa_moz=$cont_c3_lsa_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c3_lsa_gou=$cant_pvp_c3_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_lsa_gou=$cant_kg_c3_lsa_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c3_lsa_gou=$cant_total_c3_lsa_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c3_lsa_gou=$cont_c3_lsa_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c3_lsa_die=$cant_pvp_c3_lsa_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c3_lsa_die=$cant_kg_c3_lsa_die+$tiendas_mov['cant_venta'];
                              $cant_total_c3_lsa_die=$cant_total_c3_lsa_die+$tiendas_mov['cant_ingreso'];
                              $cont_c3_lsa_die=$cont_c3_lsa_die+1;
                            break;
                          }

                      break;
                    }
                break;
                
                case 4; // Ciclo 4
                    //selecciono la tienda
                    switch($tienda){
                      case 1; // Armadillo
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c4_arm_dub=$cant_pvp_c4_arm_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_arm_dub=$cant_kg_c4_arm_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c4_arm_dub=$cant_total_c4_arm_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c4_arm_dub=$cont_c4_arm_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c4_arm_moz=$cant_pvp_c4_arm_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_arm_moz=$cant_kg_c4_arm_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c4_arm_moz=$cant_total_c4_arm_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c4_arm_moz=$cont_c4_arm_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c4_arm_gou=$cant_pvp_c4_arm_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_arm_gou=$cant_kg_c4_arm_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c4_arm_gou=$cant_total_c4_arm_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c4_arm_gou=$cont_c4_arm_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c4_arm_die=$cant_pvp_c4_arm_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_arm_die=$cant_kg_c4_arm_die+$tiendas_mov['cant_venta'];
                              $cant_total_c4_arm_die=$cant_total_c4_arm_die+$tiendas_mov['cant_ingreso'];
                              $cont_c4_arm_die=$cont_c4_arm_die+1;
                            break;
                          }
                      break;
                      case 2; // Ciudadela
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c4_ciu_dub=$cant_pvp_c4_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_ciu_dub=$cant_kg_c4_ciu_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c4_ciu_dub=$cant_total_c4_ciu_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c4_ciu_dub=$cont_c4_ciu_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c4_ciu_moz=$cant_pvp_c4_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_ciu_moz=$cant_kg_c4_ciu_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c4_ciu_moz=$cant_total_c4_ciu_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c4_ciu_moz=$cont_c4_ciu_moz+1;
                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c4_ciu_gou=$cant_pvp_c4_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_ciu_gou=$cant_kg_c4_ciu_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c4_ciu_gou=$cant_total_c4_ciu_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c4_ciu_gou=$cont_c4_ciu_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c4_ciu_die=$cant_pvp_c4_ciu_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_ciu_die=$cant_kg_c4_ciu_die+$tiendas_mov['cant_venta'];
                              $cant_total_c4_ciu_die=$cant_total_c4_ciu_die+$tiendas_mov['cant_ingreso'];
                              $cont_c4_ciu_die=$cont_c4_ciu_die+1;
                            break;
                          }
                      break;
                      case 3; // San Fierro
                        // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c4_sfi_dub=$cant_pvp_c4_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_sfi_dub=$cant_kg_c4_sfi_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c4_sfi_dub=$cant_total_c4_sfi_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c4_sfi_dub=$cont_c4_sfi_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c4_sfi_moz=$cant_pvp_c4_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_sfi_moz=$cant_kg_c4_sfi_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c4_sfi_moz=$cant_total_c4_sfi_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c4_sfi_moz=$cont_c4_sfi_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c4_sfi_gou=$cant_pvp_c4_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_sfi_gou=$cant_kg_c4_sfi_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c4_sfi_gou=$cant_total_c4_sfi_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c4_sfi_gou=$cont_c4_sfi_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c4_sfi_die=$cant_pvp_c4_sfi_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_sfi_die=$cant_kg_c4_sfi_die+$tiendas_mov['cant_venta'];
                              $cant_total_c4_sfi_die=$cant_total_c4_sfi_die+$tiendas_mov['cant_ingreso'];
                              $cont_c4_sfi_die=$cont_c4_sfi_die+1;
                            break;
                          }
                      break;
                      case 4; // Los Santos
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c4_lsa_dub=$cant_pvp_c4_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_lsa_dub=$cant_kg_c4_lsa_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c4_lsa_dub=$cant_total_c4_lsa_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c4_lsa_dub=$cont_c4_lsa_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c4_lsa_moz=$cant_pvp_c4_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_lsa_moz=$cant_kg_c4_lsa_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c4_lsa_moz=$cant_total_c4_lsa_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c4_lsa_moz=$cont_c4_lsa_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c4_lsa_gou=$cant_pvp_c4_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_lsa_gou=$cant_kg_c4_lsa_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c4_lsa_gou=$cant_total_c4_lsa_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c4_lsa_gou=$cont_c4_lsa_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c4_lsa_die=$cant_pvp_c4_lsa_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c4_lsa_die=$cant_kg_c4_lsa_die+$tiendas_mov['cant_venta'];
                              $cant_total_c4_lsa_die=$cant_total_c4_lsa_die+$tiendas_mov['cant_ingreso'];
                              $cont_c4_lsa_die=$cont_c4_lsa_die+1;
                            break;
                          }
                      break;
                    }
                break;
                
                case 5; // Ciclo 5
                    //selecciono la tienda
                    switch($tienda){
                      case 1; // Armadillo
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c5_arm_dub=$cant_pvp_c5_arm_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_arm_dub=$cant_kg_c5_arm_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c5_arm_dub=$cant_total_c5_arm_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c5_arm_dub=$cont_c5_arm_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c5_arm_moz=$cant_pvp_c5_arm_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_arm_moz=$cant_kg_c5_arm_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c5_arm_moz=$cant_total_c5_arm_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c5_arm_moz=$cont_c5_arm_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c5_arm_gou=$cant_pvp_c5_arm_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_arm_gou=$cant_kg_c5_arm_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c5_arm_gou=$cant_total_c5_arm_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c5_arm_gou=$cont_c5_arm_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c5_arm_die=$cant_pvp_c5_arm_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_arm_die=$cant_kg_c5_arm_die+$tiendas_mov['cant_venta'];
                              $cant_total_c5_arm_die=$cant_total_c5_arm_die+$tiendas_mov['cant_ingreso'];
                              $cont_c5_arm_die=$cont_c5_arm_die+1;
                            break;
                          }
                      break;
                      case 2; // Ciudadela
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c5_ciu_dub=$cant_pvp_c5_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_ciu_dub=$cant_kg_c5_ciu_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c5_ciu_dub=$cant_total_c5_ciu_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c5_ciu_dub=$cont_c5_ciu_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c5_ciu_moz=$cant_pvp_c5_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_ciu_moz=$cant_kg_c5_ciu_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c5_ciu_moz=$cant_total_c5_ciu_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c5_ciu_moz=$cont_c5_ciu_moz+1;
                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c5_ciu_gou=$cant_pvp_c5_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_ciu_gou=$cant_kg_c5_ciu_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c5_ciu_gou=$cant_total_c5_ciu_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c5_ciu_gou=$cont_c5_ciu_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c5_ciu_die=$cant_pvp_c5_ciu_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_ciu_die=$cant_kg_c5_ciu_die+$tiendas_mov['cant_venta'];
                              $cant_total_c5_ciu_die=$cant_total_c5_ciu_die+$tiendas_mov['cant_ingreso'];
                              $cont_c5_ciu_die=$cont_c5_ciu_die+1;
                            break;
                          }
                      break;
                      case 3; // San Fierro
                        // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c5_sfi_dub=$cant_pvp_c5_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_sfi_dub=$cant_kg_c5_sfi_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c5_sfi_dub=$cant_total_c5_sfi_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c5_sfi_dub=$cont_c5_sfi_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c5_sfi_moz=$cant_pvp_c5_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_sfi_moz=$cant_kg_c5_sfi_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c5_sfi_moz=$cant_total_c5_sfi_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c5_sfi_moz=$cont_c5_sfi_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c5_sfi_gou=$cant_pvp_c5_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_sfi_gou=$cant_kg_c5_sfi_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c5_sfi_gou=$cant_total_c5_sfi_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c5_sfi_gou=$cont_c5_sfi_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c5_sfi_die=$cant_pvp_c5_sfi_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_sfi_die=$cant_kg_c5_sfi_die+$tiendas_mov['cant_venta'];
                              $cant_total_c5_sfi_die=$cant_total_c5_sfi_die+$tiendas_mov['cant_ingreso'];
                              $cont_c5_sfi_die=$cont_c5_sfi_die+1;
                            break;
                          }
                      break;
                      case 4; // Los Santos
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c5_lsa_dub=$cant_pvp_c5_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_lsa_dub=$cant_kg_c5_lsa_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c5_lsa_dub=$cant_total_c5_lsa_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c5_lsa_dub=$cont_c5_lsa_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c5_lsa_moz=$cant_pvp_c5_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_lsa_moz=$cant_kg_c5_lsa_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c5_lsa_moz=$cant_total_c5_lsa_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c5_lsa_moz=$cont_c5_lsa_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c5_lsa_gou=$cant_pvp_c5_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_lsa_gou=$cant_kg_c5_lsa_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c5_lsa_gou=$cant_total_c5_lsa_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c5_lsa_gou=$cont_c5_lsa_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c5_lsa_die=$cant_pvp_c5_lsa_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c5_lsa_die=$cant_kg_c5_lsa_die+$tiendas_mov['cant_venta'];
                              $cant_total_c5_lsa_die=$cant_total_c5_lsa_die+$tiendas_mov['cant_ingreso'];
                              $cont_c5_lsa_die=$cont_c5_lsa_die+1;
                            break;
                          }
                      break;
                    }
                break;
                
                case 6; // Ciclo 6
                    //selecciono la tienda
                    switch($tienda){
                      case 1; // Armadillo
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c6_arm_dub=$cant_pvp_c6_arm_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_arm_dub=$cant_kg_c6_arm_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c6_arm_dub=$cant_total_c6_arm_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c6_arm_dub=$cont_c6_arm_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c6_arm_moz=$cant_pvp_c6_arm_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_arm_moz=$cant_kg_c6_arm_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c6_arm_moz=$cant_total_c6_arm_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c6_arm_moz=$cont_c6_arm_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c6_arm_gou=$cant_pvp_c6_arm_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_arm_gou=$cant_kg_c6_arm_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c6_arm_gou=$cant_total_c6_arm_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c6_arm_gou=$cont_c6_arm_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c6_arm_die=$cant_pvp_c6_arm_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_arm_die=$cant_kg_c6_arm_die+$tiendas_mov['cant_venta'];
                              $cant_total_c6_arm_die=$cant_total_c6_arm_die+$tiendas_mov['cant_ingreso'];
                              $cont_c6_arm_die=$cont_c6_arm_die+1;
                            break;
                          }
                      break;
                      case 2; // Ciudadela
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c6_ciu_dub=$cant_pvp_c6_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_ciu_dub=$cant_kg_c6_ciu_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c6_ciu_dub=$cant_total_c6_ciu_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c6_ciu_dub=$cont_c6_ciu_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c6_ciu_moz=$cant_pvp_c6_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_ciu_moz=$cant_kg_c6_ciu_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c6_ciu_moz=$cant_total_c6_ciu_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c6_ciu_moz=$cont_c6_ciu_moz+1;
                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c6_ciu_gou=$cant_pvp_c6_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_ciu_gou=$cant_kg_c6_ciu_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c6_ciu_gou=$cant_total_c6_ciu_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c6_ciu_gou=$cont_c6_ciu_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c6_ciu_die=$cant_pvp_c6_ciu_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_ciu_die=$cant_kg_c6_ciu_die+$tiendas_mov['cant_venta'];
                              $cant_total_c6_ciu_die=$cant_total_c6_ciu_die+$tiendas_mov['cant_ingreso'];
                              $cont_c6_ciu_die=$cont_c6_ciu_die+1;
                            break;
                          }
                      break;
                      case 3; // San Fierro
                        // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c6_sfi_dub=$cant_pvp_c6_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_sfi_dub=$cant_kg_c6_sfi_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c6_sfi_dub=$cant_total_c6_sfi_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c6_sfi_dub=$cont_c6_sfi_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c6_sfi_moz=$cant_pvp_c6_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_sfi_moz=$cant_kg_c6_sfi_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c6_sfi_moz=$cant_total_c6_sfi_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c6_sfi_moz=$cont_c6_sfi_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c6_sfi_gou=$cant_pvp_c6_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_sfi_gou=$cant_kg_c6_sfi_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c6_sfi_gou=$cant_total_c6_sfi_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c6_sfi_gou=$cont_c6_sfi_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c6_sfi_die=$cant_pvp_c6_sfi_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_sfi_die=$cant_kg_c6_sfi_die+$tiendas_mov['cant_venta'];
                              $cant_total_c6_sfi_die=$cant_total_c6_sfi_die+$tiendas_mov['cant_ingreso'];
                              $cont_c6_sfi_die=$cont_c6_sfi_die+1;
                            break;
                          }
                      break;
                      case 4; // Los Santos
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c6_lsa_dub=$cant_pvp_c6_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_lsa_dub=$cant_kg_c6_lsa_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c6_lsa_dub=$cant_total_c6_lsa_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c6_lsa_dub=$cont_c6_lsa_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c6_lsa_moz=$cant_pvp_c6_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_lsa_moz=$cant_kg_c6_lsa_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c6_lsa_moz=$cant_total_c6_lsa_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c6_lsa_moz=$cont_c6_lsa_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c6_lsa_gou=$cant_pvp_c6_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_lsa_gou=$cant_kg_c6_lsa_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c6_lsa_gou=$cant_total_c6_lsa_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c6_lsa_gou=$cont_c6_lsa_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c6_lsa_die=$cant_pvp_c6_lsa_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c6_lsa_die=$cant_kg_c6_lsa_die+$tiendas_mov['cant_venta'];
                              $cant_total_c6_lsa_die=$cant_total_c6_lsa_die+$tiendas_mov['cant_ingreso'];
                              $cont_c6_lsa_die=$cont_c6_lsa_die+1;
                            break;
                          }
                      break;
                    }
                    
                case 7; // Ciclo 7
                    //selecciono la tienda
                    switch($tienda){
                      case 1; // Armadillo
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c7_arm_dub=$cant_pvp_c7_arm_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_arm_dub=$cant_kg_c7_arm_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c7_arm_dub=$cant_total_c7_arm_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c7_arm_dub=$cont_c7_arm_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c7_arm_moz=$cant_pvp_c7_arm_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_arm_moz=$cant_kg_c7_arm_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c7_arm_moz=$cant_total_c7_arm_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c7_arm_moz=$cont_c7_arm_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c7_arm_gou=$cant_pvp_c7_arm_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_arm_gou=$cant_kg_c7_arm_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c7_arm_gou=$cant_total_c7_arm_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c7_arm_gou=$cont_c7_arm_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c7_arm_die=$cant_pvp_c7_arm_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_arm_die=$cant_kg_c7_arm_die+$tiendas_mov['cant_venta'];
                              $cant_total_c7_arm_die=$cant_total_c7_arm_die+$tiendas_mov['cant_ingreso'];
                              $cont_c7_arm_die=$cont_c7_arm_die+1;
                            break;
                          }
                      break;
                      case 2; // Ciudadela
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c7_ciu_dub=$cant_pvp_c7_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_ciu_dub=$cant_kg_c7_ciu_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c7_ciu_dub=$cant_total_c7_ciu_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c7_ciu_dub=$cont_c7_ciu_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c7_ciu_moz=$cant_pvp_c7_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_ciu_moz=$cant_kg_c7_ciu_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c7_ciu_moz=$cant_total_c7_ciu_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c7_ciu_moz=$cont_c7_ciu_moz+1;
                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c7_ciu_gou=$cant_pvp_c7_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_ciu_gou=$cant_kg_c7_ciu_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c7_ciu_gou=$cant_total_c7_ciu_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c7_ciu_gou=$cont_c7_ciu_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c7_ciu_die=$cant_pvp_c7_ciu_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_ciu_die=$cant_kg_c7_ciu_die+$tiendas_mov['cant_venta'];
                              $cant_total_c7_ciu_die=$cant_total_c7_ciu_die+$tiendas_mov['cant_ingreso'];
                              $cont_c7_ciu_die=$cont_c7_ciu_die+1;
                            break;
                          }
                      break;
                      case 3; // San Fierro
                        // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c7_sfi_dub=$cant_pvp_c7_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_sfi_dub=$cant_kg_c7_sfi_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c7_sfi_dub=$cant_total_c7_sfi_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c7_sfi_dub=$cont_c7_sfi_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c7_sfi_moz=$cant_pvp_c7_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_sfi_moz=$cant_kg_c7_sfi_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c7_sfi_moz=$cant_total_c7_sfi_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c7_sfi_moz=$cont_c7_sfi_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c7_sfi_gou=$cant_pvp_c7_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_sfi_gou=$cant_kg_c7_sfi_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c7_sfi_gou=$cant_total_c7_sfi_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c7_sfi_gou=$cont_c7_sfi_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c7_sfi_die=$cant_pvp_c7_sfi_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_sfi_die=$cant_kg_c7_sfi_die+$tiendas_mov['cant_venta'];
                              $cant_total_c7_sfi_die=$cant_total_c7_sfi_die+$tiendas_mov['cant_ingreso'];
                              $cont_c7_sfi_die=$cont_c7_sfi_die+1;
                            break;
                          }
                      break;
                      case 4; // Los Santos
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c7_lsa_dub=$cant_pvp_c7_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_lsa_dub=$cant_kg_c7_lsa_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c7_lsa_dub=$cant_total_c7_lsa_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c7_lsa_dub=$cont_c7_lsa_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c7_lsa_moz=$cant_pvp_c7_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_lsa_moz=$cant_kg_c7_lsa_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c7_lsa_moz=$cant_total_c7_lsa_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c7_lsa_moz=$cont_c7_lsa_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c7_lsa_gou=$cant_pvp_c7_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_lsa_gou=$cant_kg_c7_lsa_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c7_lsa_gou=$cant_total_c7_lsa_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c7_lsa_gou=$cont_c7_lsa_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c7_lsa_die=$cant_pvp_c7_lsa_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c7_lsa_die=$cant_kg_c7_lsa_die+$tiendas_mov['cant_venta'];
                              $cant_total_c7_lsa_die=$cant_total_c7_lsa_die+$tiendas_mov['cant_ingreso'];
                              $cont_c7_lsa_die=$cont_c7_lsa_die+1;
                            break;
                          }
                      break;
                    }
                break;
                
                case 8; // Ciclo 8
                    //selecciono la tienda
                    switch($tienda){
                      case 1; // Armadillo
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c8_arm_dub=$cant_pvp_c8_arm_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_arm_dub=$cant_kg_c8_arm_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c8_arm_dub=$cant_total_c8_arm_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c8_arm_dub=$cont_c8_arm_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c8_arm_moz=$cant_pvp_c8_arm_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_arm_moz=$cant_kg_c8_arm_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c8_arm_moz=$cant_total_c8_arm_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c8_arm_moz=$cont_c8_arm_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c8_arm_gou=$cant_pvp_c8_arm_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_arm_gou=$cant_kg_c8_arm_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c8_arm_gou=$cant_total_c8_arm_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c8_arm_gou=$cont_c8_arm_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c8_arm_die=$cant_pvp_c8_arm_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_arm_die=$cant_kg_c8_arm_die+$tiendas_mov['cant_venta'];
                              $cant_total_c8_arm_die=$cant_total_c8_arm_die+$tiendas_mov['cant_ingreso'];
                              $cont_c8_arm_die=$cont_c8_arm_die+1;
                            break;
                          }
                      break;
                      case 2; // Ciudadela
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c8_ciu_dub=$cant_pvp_c8_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_ciu_dub=$cant_kg_c8_ciu_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c8_ciu_dub=$cant_total_c8_ciu_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c8_ciu_dub=$cont_c8_ciu_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c8_ciu_moz=$cant_pvp_c8_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_ciu_moz=$cant_kg_c8_ciu_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c8_ciu_moz=$cant_total_c8_ciu_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c8_ciu_moz=$cont_c8_ciu_moz+1;
                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c8_ciu_gou=$cant_pvp_c8_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_ciu_gou=$cant_kg_c8_ciu_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c8_ciu_gou=$cant_total_c8_ciu_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c8_ciu_gou=$cont_c8_ciu_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c8_ciu_die=$cant_pvp_c8_ciu_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_ciu_die=$cant_kg_c8_ciu_die+$tiendas_mov['cant_venta'];
                              $cant_total_c8_ciu_die=$cant_total_c8_ciu_die+$tiendas_mov['cant_ingreso'];
                              $cont_c8_ciu_die=$cont_c8_ciu_die+1;
                            break;
                          }
                      break;
                      case 3; // San Fierro
                        // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c8_sfi_dub=$cant_pvp_c8_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_sfi_dub=$cant_kg_c8_sfi_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c8_sfi_dub=$cant_total_c8_sfi_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c8_sfi_dub=$cont_c8_sfi_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c8_sfi_moz=$cant_pvp_c8_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_sfi_moz=$cant_kg_c8_sfi_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c8_sfi_moz=$cant_total_c8_sfi_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c8_sfi_moz=$cont_c8_sfi_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c8_sfi_gou=$cant_pvp_c8_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_sfi_gou=$cant_kg_c8_sfi_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c8_sfi_gou=$cant_total_c8_sfi_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c8_sfi_gou=$cont_c8_sfi_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c8_sfi_die=$cant_pvp_c8_sfi_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_sfi_die=$cant_kg_c8_sfi_die+$tiendas_mov['cant_venta'];
                              $cant_total_c8_sfi_die=$cant_total_c8_sfi_die+$tiendas_mov['cant_ingreso'];
                              $cont_c8_sfi_die=$cont_c8_sfi_die+1;
                            break;
                          }
                      break;
                      case 4; // Los Santos
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c8_lsa_dub=$cant_pvp_c8_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_lsa_dub=$cant_kg_c8_lsa_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c8_lsa_dub=$cant_total_c8_lsa_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c8_lsa_dub=$cont_c8_lsa_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c8_lsa_moz=$cant_pvp_c8_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_lsa_moz=$cant_kg_c8_lsa_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c8_lsa_moz=$cant_total_c8_lsa_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c8_lsa_moz=$cont_c8_lsa_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c8_lsa_gou=$cant_pvp_c8_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_lsa_gou=$cant_kg_c8_lsa_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c8_lsa_gou=$cant_total_c8_lsa_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c8_lsa_gou=$cont_c8_lsa_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c8_lsa_die=$cant_pvp_c8_lsa_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c8_lsa_die=$cant_kg_c8_lsa_die+$tiendas_mov['cant_venta'];
                              $cant_total_c8_lsa_die=$cant_total_c8_lsa_die+$tiendas_mov['cant_ingreso'];
                              $cont_c8_lsa_die=$cont_c8_lsa_die+1;
                            break;
                          }
                      break;
                    }
                break;
                
                case 9; // Ciclo 9
                    //selecciono la tienda
                    switch($tienda){
                      case 1; // Armadillo
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c9_arm_dub=$cant_pvp_c9_arm_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_arm_dub=$cant_kg_c9_arm_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c9_arm_dub=$cant_total_c9_arm_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c9_arm_dub=$cont_c9_arm_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c9_arm_moz=$cant_pvp_c9_arm_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_arm_moz=$cant_kg_c9_arm_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c9_arm_moz=$cant_total_c9_arm_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c9_arm_moz=$cont_c9_arm_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c9_arm_gou=$cant_pvp_c9_arm_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_arm_gou=$cant_kg_c9_arm_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c9_arm_gou=$cant_total_c9_arm_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c9_arm_gou=$cont_c9_arm_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c9_arm_die=$cant_pvp_c9_arm_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_arm_die=$cant_kg_c9_arm_die+$tiendas_mov['cant_venta'];
                              $cant_total_c9_arm_die=$cant_total_c9_arm_die+$tiendas_mov['cant_ingreso'];
                              $cont_c9_arm_die=$cont_c9_arm_die+1;
                            break;
                          }
                      break;
                      case 2; // Ciudadela
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c9_ciu_dub=$cant_pvp_c9_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_ciu_dub=$cant_kg_c9_ciu_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c9_ciu_dub=$cant_total_c9_ciu_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c9_ciu_dub=$cont_c9_ciu_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c9_ciu_moz=$cant_pvp_c9_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_ciu_moz=$cant_kg_c9_ciu_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c9_ciu_moz=$cant_total_c9_ciu_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c9_ciu_moz=$cont_c9_ciu_moz+1;
                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c9_ciu_gou=$cant_pvp_c9_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_ciu_gou=$cant_kg_c9_ciu_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c9_ciu_gou=$cant_total_c9_ciu_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c9_ciu_gou=$cont_c9_ciu_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c9_ciu_die=$cant_pvp_c9_ciu_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_ciu_die=$cant_kg_c9_ciu_die+$tiendas_mov['cant_venta'];
                              $cant_total_c9_ciu_die=$cant_total_c9_ciu_die+$tiendas_mov['cant_ingreso'];
                              $cont_c9_ciu_die=$cont_c9_ciu_die+1;
                            break;
                          }
                      break;
                      case 3; // San Fierro
                        // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c9_sfi_dub=$cant_pvp_c9_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_sfi_dub=$cant_kg_c9_sfi_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c9_sfi_dub=$cant_total_c9_sfi_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c9_sfi_dub=$cont_c9_sfi_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c9_sfi_moz=$cant_pvp_c9_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_sfi_moz=$cant_kg_c9_sfi_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c9_sfi_moz=$cant_total_c9_sfi_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c9_sfi_moz=$cont_c9_sfi_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c9_sfi_gou=$cant_pvp_c9_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_sfi_gou=$cant_kg_c9_sfi_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c9_sfi_gou=$cant_total_c9_sfi_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c9_sfi_gou=$cont_c9_sfi_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c9_sfi_die=$cant_pvp_c9_sfi_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_sfi_die=$cant_kg_c9_sfi_die+$tiendas_mov['cant_venta'];
                              $cant_total_c9_sfi_die=$cant_total_c9_sfi_die+$tiendas_mov['cant_ingreso'];
                              $cont_c9_sfi_die=$cont_c9_sfi_die+1;
                            break;
                          }
                      break;
                      case 4; // Los Santos
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c9_lsa_dub=$cant_pvp_c9_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_lsa_dub=$cant_kg_c9_lsa_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c9_lsa_dub=$cant_total_c9_lsa_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c9_lsa_dub=$cont_c9_lsa_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c9_lsa_moz=$cant_pvp_c9_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_lsa_moz=$cant_kg_c9_lsa_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c9_lsa_moz=$cant_total_c9_lsa_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c9_lsa_moz=$cont_c9_lsa_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c9_lsa_gou=$cant_pvp_c9_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_lsa_gou=$cant_kg_c9_lsa_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c9_lsa_gou=$cant_total_c9_lsa_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c9_lsa_gou=$cont_c9_lsa_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c9_lsa_die=$cant_pvp_c9_lsa_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c9_lsa_die=$cant_kg_c9_lsa_die+$tiendas_mov['cant_venta'];
                              $cant_total_c9_lsa_die=$cant_total_c9_lsa_die+$tiendas_mov['cant_ingreso'];
                              $cont_c9_lsa_die=$cont_c9_lsa_die+1;
                            break;
                          }
                      break;
                    }
                break;
                
                case 10; // Ciclo 10
                    //selecciono la tienda
                    switch($tienda){
                      case 1; // Armadillo
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c10_arm_dub=$cant_pvp_c10_arm_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_arm_dub=$cant_kg_c10_arm_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c10_arm_dub=$cant_total_c10_arm_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c10_arm_dub=$cont_c10_arm_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c10_arm_moz=$cant_pvp_c10_arm_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_arm_moz=$cant_kg_c10_arm_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c10_arm_moz=$cant_total_c10_arm_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c10_arm_moz=$cont_c10_arm_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c10_arm_gou=$cant_pvp_c10_arm_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_arm_gou=$cant_kg_c10_arm_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c10_arm_gou=$cant_total_c10_arm_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c10_arm_gou=$cont_c10_arm_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c10_arm_die=$cant_pvp_c10_arm_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_arm_die=$cant_kg_c10_arm_die+$tiendas_mov['cant_venta'];
                              $cant_total_c10_arm_die=$cant_total_c10_arm_die+$tiendas_mov['cant_ingreso'];
                              $cont_c10_arm_die=$cont_c10_arm_die+1;
                            break;
                          }
                      break;
                      case 2; // Ciudadela
                          // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c10_ciu_dub=$cant_pvp_c10_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_ciu_dub=$cant_kg_c10_ciu_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c10_ciu_dub=$cant_total_c10_ciu_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c10_ciu_dub=$cont_c10_ciu_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c10_ciu_moz=$cant_pvp_c10_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_ciu_moz=$cant_kg_c10_ciu_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c10_ciu_moz=$cant_total_c10_ciu_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c10_ciu_moz=$cont_c10_ciu_moz+1;
                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c10_ciu_gou=$cant_pvp_c10_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_ciu_gou=$cant_kg_c10_ciu_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c10_ciu_gou=$cant_total_c10_ciu_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c10_ciu_gou=$cont_c10_ciu_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c10_ciu_die=$cant_pvp_c10_ciu_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_ciu_die=$cant_kg_c10_ciu_die+$tiendas_mov['cant_venta'];
                              $cant_total_c10_ciu_die=$cant_total_c10_ciu_die+$tiendas_mov['cant_ingreso'];
                              $cont_c10_ciu_die=$cont_c10_ciu_die+1;
                            break;
                          }
                      break;
                      case 3; // San Fierro
                        // Selecciono el queso
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c10_sfi_dub=$cant_pvp_c10_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_sfi_dub=$cant_kg_c10_sfi_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c10_sfi_dub=$cant_total_c10_sfi_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c10_sfi_dub=$cont_c10_sfi_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c10_sfi_moz=$cant_pvp_c10_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_sfi_moz=$cant_kg_c10_sfi_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c10_sfi_moz=$cant_total_c10_sfi_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c10_sfi_moz=$cont_c10_sfi_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c10_sfi_gou=$cant_pvp_c10_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_sfi_gou=$cant_kg_c10_sfi_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c10_sfi_gou=$cant_total_c10_sfi_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c10_sfi_gou=$cont_c10_sfi_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c10_sfi_die=$cant_pvp_c10_sfi_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_sfi_die=$cant_kg_c10_sfi_die+$tiendas_mov['cant_venta'];
                              $cant_total_c10_sfi_die=$cant_total_c10_sfi_die+$tiendas_mov['cant_ingreso'];
                              $cont_c10_sfi_die=$cont_c10_sfi_die+1;
                            break;
                          }
                      break;
                      case 4; // Los Santos
                          switch($queso){
                            case 1; // Queso Duro
                              $cant_pvp_c10_lsa_dub=$cant_pvp_c10_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_lsa_dub=$cant_kg_c10_lsa_dub+$tiendas_mov['cant_venta'];
                              $cant_total_c10_lsa_dub=$cant_total_c10_lsa_dub+$tiendas_mov['cant_ingreso'];
                              $cont_c10_lsa_dub=$cont_c10_lsa_dub+1;

                            break;
                            case 2; // Queso Mozarella
                              $cant_pvp_c10_lsa_moz=$cant_pvp_c10_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_lsa_moz=$cant_kg_c10_lsa_moz+$tiendas_mov['cant_venta'];
                              $cant_total_c10_lsa_moz=$cant_total_c10_lsa_moz+$tiendas_mov['cant_ingreso'];
                              $cont_c10_lsa_moz=$cont_c10_lsa_moz+1;

                            break;
                            case 3; // Queso Gouda
                              $cant_pvp_c10_lsa_gou=$cant_pvp_c10_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_lsa_gou=$cant_kg_c10_lsa_gou+$tiendas_mov['cant_venta'];
                              $cant_total_c10_lsa_gou=$cant_total_c10_lsa_gou+$tiendas_mov['cant_ingreso'];
                              $cont_c10_lsa_gou=$cont_c10_lsa_gou+1;
                            break;
                            case 4; // Queso dietético
                              $cant_pvp_c10_lsa_die=$cant_pvp_c10_lsa_die+$tiendas_mov['cant_monto_pvp'];
                              $cant_kg_c10_lsa_die=$cant_kg_c10_lsa_die+$tiendas_mov['cant_venta'];
                              $cant_total_c10_lsa_die=$cant_total_c10_lsa_die+$tiendas_mov['cant_ingreso'];
                              $cont_c10_lsa_die=$cont_c10_lsa_die+1;
                            break;
                          }
                      break;
                    }
                break;

                case 11;
                break;

                case 12;
                break;
              }
            }

            
            // Selecciono las existencias de queso ---------------------------------------------------------------
              $sentencia=$pdo->prepare("SELECT * FROM `tiendas_existe` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
              $sentencia->execute();
              $listado_tiendas_existe=$sentencia->fetchAll(PDO::FETCH_ASSOC);
              $cant_tiendas_existe=$sentencia->rowCount();
              if($listado_tiendas_existe>=1){
                $temporal="SI";
              }else{
                $procesar="listo"; //Muestra Vista normal
                $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
                $mensaje_usuario="No se encontraron las existencias de la empresa"; // Vacío en inicalización
              }

          }else{
            $procesar="listo"; //Muestra Vista normal
            $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
            $mensaje_usuario="No se encontraron movimientos de tiendas de la empresa"; // Vacío en inicalización
          }

        }else{
          $procesar="listo"; //Muestra Vista normal
          $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
          $mensaje_usuario="No se encontró tiendas para la empresa"; // Vacío en inicalización
        } 
      // ----------------------------------------------------------------------------------------------------
 

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
          // Selecciono el almacén tiendas ---------------------------------------------------------------
            $sentencia=$pdo->prepare("SELECT * FROM `tiendas` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
            $sentencia->execute();
            $listado_tiendas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $cant_tiendas=$sentencia->rowCount();

            if($cant_tiendas>=1){
              foreach($listado_tiendas as $tiendas){
                $nro_tiendas=$tiendas['nro'];
                $txtCant_cap_almacen=$tiendas['cant_cap_almacen'];
                $txtCant_existencia=$tiendas['cant_existencia'];
                $txtCant_cap_disp=$tiendas['cant_cap_disp'];
              }
              // Selecciono los movimientos de las tiendas ---------------------------------------------------------------
              $sentencia=$pdo->prepare("SELECT * FROM `tiendas_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
              $sentencia->execute();
              $listado_tiendas_mov=$sentencia->fetchAll(PDO::FETCH_ASSOC);
              $cant_tiendas_mov=$sentencia->rowCount();
              
              if($cant_tiendas_mov>=1){

                foreach($listado_tiendas_mov as $tiendas_mov){
                  $ciclo=$tiendas_mov['ciclo'];
                  $tienda=$tiendas_mov['nro_tienda'];
                  $queso=$tiendas_mov['nro_queso'];
                  // selecciono el ciclo
                  switch ($ciclo){
                    case 1; // Ciclo 1
                        //selecciono la tienda
                        switch($tienda){
                          case 1; // Armadillo
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c1_arm_dub=$cant_pvp_c1_arm_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_arm_dub=$cant_kg_c1_arm_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_arm_dub=$cant_total_c1_arm_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_arm_dub=$cont_c1_arm_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c1_arm_moz=$cant_pvp_c1_arm_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_arm_moz=$cant_kg_c1_arm_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_arm_moz=$cant_total_c1_arm_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_arm_moz=$cont_c1_arm_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c1_arm_gou=$cant_pvp_c1_arm_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_arm_gou=$cant_kg_c1_arm_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_arm_gou=$cant_total_c1_arm_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_arm_gou=$cont_c1_arm_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c1_arm_die=$cant_pvp_c1_arm_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_arm_die=$cant_kg_c1_arm_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_arm_die=$cant_total_c1_arm_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_arm_die=$cont_c1_arm_die+1;
                                break;
                              }
                          break;
                          case 2; // Ciudadela
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c1_ciu_dub=$cant_pvp_c1_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_ciu_dub=$cant_kg_c1_ciu_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_ciu_dub=$cant_total_c1_ciu_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_ciu_dub=$cont_c1_ciu_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c1_ciu_moz=$cant_pvp_c1_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_ciu_moz=$cant_kg_c1_ciu_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_ciu_moz=$cant_total_c1_ciu_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_ciu_moz=$cont_c1_ciu_moz+1;
                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c1_ciu_gou=$cant_pvp_c1_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_ciu_gou=$cant_kg_c1_ciu_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_ciu_gou=$cant_total_c1_ciu_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_ciu_gou=$cont_c1_ciu_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c1_ciu_die=$cant_pvp_c1_ciu_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_ciu_die=$cant_kg_c1_ciu_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_ciu_die=$cant_total_c1_ciu_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_ciu_die=$cont_c1_ciu_die+1;
                                break;
                              }
                          break;
                          case 3; // San Fierro
                            // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c1_sfi_dub=$cant_pvp_c1_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_sfi_dub=$cant_kg_c1_sfi_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_sfi_dub=$cant_total_c1_sfi_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_sfi_dub=$cont_c1_sfi_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c1_sfi_moz=$cant_pvp_c1_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_sfi_moz=$cant_kg_c1_sfi_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_sfi_moz=$cant_total_c1_sfi_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_sfi_moz=$cont_c1_sfi_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c1_sfi_gou=$cant_pvp_c1_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_sfi_gou=$cant_kg_c1_sfi_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_sfi_gou=$cant_total_c1_sfi_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_sfi_gou=$cont_c1_sfi_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c1_sfi_die=$cant_pvp_c1_sfi_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_sfi_die=$cant_kg_c1_sfi_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_sfi_die=$cant_total_c1_sfi_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_sfi_die=$cont_c1_sfi_die+1;
                                break;
                              }
                          break;
                          case 4; // Los Santos
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c1_lsa_dub=$cant_pvp_c1_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_lsa_dub=$cant_kg_c1_lsa_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_lsa_dub=$cant_total_c1_lsa_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_lsa_dub=$cont_c1_lsa_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c1_lsa_moz=$cant_pvp_c1_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_lsa_moz=$cant_kg_c1_lsa_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_lsa_moz=$cant_total_c1_lsa_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_lsa_moz=$cont_c1_lsa_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c1_lsa_gou=$cant_pvp_c1_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_lsa_gou=$cant_kg_c1_lsa_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_lsa_gou=$cant_total_c1_lsa_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_lsa_gou=$cont_c1_lsa_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c1_lsa_die=$cant_pvp_c1_lsa_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c1_lsa_die=$cant_kg_c1_lsa_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c1_lsa_die=$cant_total_c1_lsa_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c1_lsa_die=$cont_c1_lsa_die+1;
                                break;
                              }

                          break;
                        }
                    break;

                    case 2; // Ciclo 2
                        //selecciono la tienda
                        switch($tienda){
                          case 1; // Armadillo
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c2_arm_dub=$cant_pvp_c2_arm_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_arm_dub=$cant_kg_c2_arm_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_arm_dub=$cant_total_c2_arm_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_arm_dub=$cont_c2_arm_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c2_arm_moz=$cant_pvp_c2_arm_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_arm_moz=$cant_kg_c2_arm_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_arm_moz=$cant_total_c2_arm_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_arm_moz=$cont_c2_arm_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c2_arm_gou=$cant_pvp_c2_arm_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_arm_gou=$cant_kg_c2_arm_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_arm_gou=$cant_total_c2_arm_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_arm_gou=$cont_c2_arm_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c2_arm_die=$cant_pvp_c2_arm_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_arm_die=$cant_kg_c2_arm_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_arm_die=$cant_total_c2_arm_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_arm_die=$cont_c2_arm_die+1;
                                break;
                              }
                          break;
                          case 2; // Ciudadela
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c2_ciu_dub=$cant_pvp_c2_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_ciu_dub=$cant_kg_c2_ciu_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_ciu_dub=$cant_total_c2_ciu_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_ciu_dub=$cont_c2_ciu_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c2_ciu_moz=$cant_pvp_c2_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_ciu_moz=$cant_kg_c2_ciu_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_ciu_moz=$cant_total_c2_ciu_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_ciu_moz=$cont_c2_ciu_moz+1;
                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c2_ciu_gou=$cant_pvp_c2_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_ciu_gou=$cant_kg_c2_ciu_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_ciu_gou=$cant_total_c2_ciu_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_ciu_gou=$cont_c2_ciu_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c2_ciu_die=$cant_pvp_c2_ciu_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_ciu_die=$cant_kg_c2_ciu_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_ciu_die=$cant_total_c2_ciu_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_ciu_die=$cont_c2_ciu_die+1;
                                break;
                              }
                          break;
                          case 3; // San Fierro
                            // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c2_sfi_dub=$cant_pvp_c2_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_sfi_dub=$cant_kg_c2_sfi_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_sfi_dub=$cant_total_c2_sfi_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_sfi_dub=$cont_c2_sfi_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c2_sfi_moz=$cant_pvp_c2_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_sfi_moz=$cant_kg_c2_sfi_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_sfi_moz=$cant_total_c2_sfi_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_sfi_moz=$cont_c2_sfi_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c2_sfi_gou=$cant_pvp_c2_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_sfi_gou=$cant_kg_c2_sfi_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_sfi_gou=$cant_total_c2_sfi_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_sfi_gou=$cont_c2_sfi_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c2_sfi_die=$cant_pvp_c2_sfi_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_sfi_die=$cant_kg_c2_sfi_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_sfi_die=$cant_total_c2_sfi_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_sfi_die=$cont_c2_sfi_die+1;
                                break;
                              }
                          break;
                          case 4; // Los Santos
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c2_lsa_dub=$cant_pvp_c2_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_lsa_dub=$cant_kg_c2_lsa_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_lsa_dub=$cant_total_c2_lsa_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_lsa_dub=$cont_c2_lsa_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c2_lsa_moz=$cant_pvp_c2_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_lsa_moz=$cant_kg_c2_lsa_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_lsa_moz=$cant_total_c2_lsa_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_lsa_moz=$cont_c2_lsa_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c2_lsa_gou=$cant_pvp_c2_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_lsa_gou=$cant_kg_c2_lsa_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_lsa_gou=$cant_total_c2_lsa_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_lsa_gou=$cont_c2_lsa_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c2_lsa_die=$cant_pvp_c2_lsa_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c2_lsa_die=$cant_kg_c2_lsa_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c2_lsa_die=$cant_total_c2_lsa_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c2_lsa_die=$cont_c2_lsa_die+1;
                                break;
                              }

                          break;
                        }
                    break;

                    case 3; // Ciclo 3
                        //selecciono la tienda
                        switch($tienda){
                          case 1; // Armadillo
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c3_arm_dub=$cant_pvp_c3_arm_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_arm_dub=$cant_kg_c3_arm_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_arm_dub=$cant_total_c3_arm_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_arm_dub=$cont_c3_arm_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c3_arm_moz=$cant_pvp_c3_arm_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_arm_moz=$cant_kg_c3_arm_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_arm_moz=$cant_total_c3_arm_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_arm_moz=$cont_c3_arm_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c3_arm_gou=$cant_pvp_c3_arm_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_arm_gou=$cant_kg_c3_arm_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_arm_gou=$cant_total_c3_arm_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_arm_gou=$cont_c3_arm_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c3_arm_die=$cant_pvp_c3_arm_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_arm_die=$cant_kg_c3_arm_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_arm_die=$cant_total_c3_arm_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_arm_die=$cont_c3_arm_die+1;
                                break;
                              }
                          break;
                          case 2; // Ciudadela
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c3_ciu_dub=$cant_pvp_c3_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_ciu_dub=$cant_kg_c3_ciu_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_ciu_dub=$cant_total_c3_ciu_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_ciu_dub=$cont_c3_ciu_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c3_ciu_moz=$cant_pvp_c3_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_ciu_moz=$cant_kg_c3_ciu_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_ciu_moz=$cant_total_c3_ciu_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_ciu_moz=$cont_c3_ciu_moz+1;
                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c3_ciu_gou=$cant_pvp_c3_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_ciu_gou=$cant_kg_c3_ciu_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_ciu_gou=$cant_total_c3_ciu_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_ciu_gou=$cont_c3_ciu_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c3_ciu_die=$cant_pvp_c3_ciu_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_ciu_die=$cant_kg_c3_ciu_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_ciu_die=$cant_total_c3_ciu_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_ciu_die=$cont_c3_ciu_die+1;
                                break;
                              }
                          break;
                          case 3; // San Fierro
                            // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c3_sfi_dub=$cant_pvp_c3_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_sfi_dub=$cant_kg_c3_sfi_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_sfi_dub=$cant_total_c3_sfi_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_sfi_dub=$cont_c3_sfi_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c3_sfi_moz=$cant_pvp_c3_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_sfi_moz=$cant_kg_c3_sfi_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_sfi_moz=$cant_total_c3_sfi_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_sfi_moz=$cont_c3_sfi_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c3_sfi_gou=$cant_pvp_c3_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_sfi_gou=$cant_kg_c3_sfi_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_sfi_gou=$cant_total_c3_sfi_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_sfi_gou=$cont_c3_sfi_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c3_sfi_die=$cant_pvp_c3_sfi_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_sfi_die=$cant_kg_c3_sfi_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_sfi_die=$cant_total_c3_sfi_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_sfi_die=$cont_c3_sfi_die+1;
                                break;
                              }
                          break;
                          case 4; // Los Santos
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c3_lsa_dub=$cant_pvp_c3_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_lsa_dub=$cant_kg_c3_lsa_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_lsa_dub=$cant_total_c3_lsa_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_lsa_dub=$cont_c3_lsa_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c3_lsa_moz=$cant_pvp_c3_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_lsa_moz=$cant_kg_c3_lsa_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_lsa_moz=$cant_total_c3_lsa_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_lsa_moz=$cont_c3_lsa_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c3_lsa_gou=$cant_pvp_c3_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_lsa_gou=$cant_kg_c3_lsa_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_lsa_gou=$cant_total_c3_lsa_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_lsa_gou=$cont_c3_lsa_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c3_lsa_die=$cant_pvp_c3_lsa_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c3_lsa_die=$cant_kg_c3_lsa_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c3_lsa_die=$cant_total_c3_lsa_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c3_lsa_die=$cont_c3_lsa_die+1;
                                break;
                              }

                          break;
                        }
                    break;
                    
                    case 4; // Ciclo 4
                        //selecciono la tienda
                        switch($tienda){
                          case 1; // Armadillo
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c4_arm_dub=$cant_pvp_c4_arm_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_arm_dub=$cant_kg_c4_arm_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_arm_dub=$cant_total_c4_arm_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_arm_dub=$cont_c4_arm_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c4_arm_moz=$cant_pvp_c4_arm_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_arm_moz=$cant_kg_c4_arm_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_arm_moz=$cant_total_c4_arm_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_arm_moz=$cont_c4_arm_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c4_arm_gou=$cant_pvp_c4_arm_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_arm_gou=$cant_kg_c4_arm_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_arm_gou=$cant_total_c4_arm_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_arm_gou=$cont_c4_arm_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c4_arm_die=$cant_pvp_c4_arm_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_arm_die=$cant_kg_c4_arm_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_arm_die=$cant_total_c4_arm_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_arm_die=$cont_c4_arm_die+1;
                                break;
                              }
                          break;
                          case 2; // Ciudadela
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c4_ciu_dub=$cant_pvp_c4_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_ciu_dub=$cant_kg_c4_ciu_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_ciu_dub=$cant_total_c4_ciu_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_ciu_dub=$cont_c4_ciu_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c4_ciu_moz=$cant_pvp_c4_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_ciu_moz=$cant_kg_c4_ciu_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_ciu_moz=$cant_total_c4_ciu_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_ciu_moz=$cont_c4_ciu_moz+1;
                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c4_ciu_gou=$cant_pvp_c4_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_ciu_gou=$cant_kg_c4_ciu_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_ciu_gou=$cant_total_c4_ciu_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_ciu_gou=$cont_c4_ciu_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c4_ciu_die=$cant_pvp_c4_ciu_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_ciu_die=$cant_kg_c4_ciu_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_ciu_die=$cant_total_c4_ciu_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_ciu_die=$cont_c4_ciu_die+1;
                                break;
                              }
                          break;
                          case 3; // San Fierro
                            // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c4_sfi_dub=$cant_pvp_c4_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_sfi_dub=$cant_kg_c4_sfi_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_sfi_dub=$cant_total_c4_sfi_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_sfi_dub=$cont_c4_sfi_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c4_sfi_moz=$cant_pvp_c4_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_sfi_moz=$cant_kg_c4_sfi_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_sfi_moz=$cant_total_c4_sfi_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_sfi_moz=$cont_c4_sfi_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c4_sfi_gou=$cant_pvp_c4_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_sfi_gou=$cant_kg_c4_sfi_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_sfi_gou=$cant_total_c4_sfi_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_sfi_gou=$cont_c4_sfi_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c4_sfi_die=$cant_pvp_c4_sfi_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_sfi_die=$cant_kg_c4_sfi_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_sfi_die=$cant_total_c4_sfi_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_sfi_die=$cont_c4_sfi_die+1;
                                break;
                              }
                          break;
                          case 4; // Los Santos
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c4_lsa_dub=$cant_pvp_c4_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_lsa_dub=$cant_kg_c4_lsa_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_lsa_dub=$cant_total_c4_lsa_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_lsa_dub=$cont_c4_lsa_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c4_lsa_moz=$cant_pvp_c4_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_lsa_moz=$cant_kg_c4_lsa_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_lsa_moz=$cant_total_c4_lsa_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_lsa_moz=$cont_c4_lsa_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c4_lsa_gou=$cant_pvp_c4_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_lsa_gou=$cant_kg_c4_lsa_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_lsa_gou=$cant_total_c4_lsa_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_lsa_gou=$cont_c4_lsa_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c4_lsa_die=$cant_pvp_c4_lsa_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c4_lsa_die=$cant_kg_c4_lsa_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c4_lsa_die=$cant_total_c4_lsa_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c4_lsa_die=$cont_c4_lsa_die+1;
                                break;
                              }
                          break;
                        }
                    break;
                    
                    case 5; // Ciclo 5
                        //selecciono la tienda
                        switch($tienda){
                          case 1; // Armadillo
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c5_arm_dub=$cant_pvp_c5_arm_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_arm_dub=$cant_kg_c5_arm_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_arm_dub=$cant_total_c5_arm_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_arm_dub=$cont_c5_arm_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c5_arm_moz=$cant_pvp_c5_arm_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_arm_moz=$cant_kg_c5_arm_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_arm_moz=$cant_total_c5_arm_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_arm_moz=$cont_c5_arm_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c5_arm_gou=$cant_pvp_c5_arm_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_arm_gou=$cant_kg_c5_arm_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_arm_gou=$cant_total_c5_arm_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_arm_gou=$cont_c5_arm_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c5_arm_die=$cant_pvp_c5_arm_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_arm_die=$cant_kg_c5_arm_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_arm_die=$cant_total_c5_arm_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_arm_die=$cont_c5_arm_die+1;
                                break;
                              }
                          break;
                          case 2; // Ciudadela
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c5_ciu_dub=$cant_pvp_c5_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_ciu_dub=$cant_kg_c5_ciu_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_ciu_dub=$cant_total_c5_ciu_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_ciu_dub=$cont_c5_ciu_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c5_ciu_moz=$cant_pvp_c5_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_ciu_moz=$cant_kg_c5_ciu_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_ciu_moz=$cant_total_c5_ciu_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_ciu_moz=$cont_c5_ciu_moz+1;
                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c5_ciu_gou=$cant_pvp_c5_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_ciu_gou=$cant_kg_c5_ciu_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_ciu_gou=$cant_total_c5_ciu_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_ciu_gou=$cont_c5_ciu_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c5_ciu_die=$cant_pvp_c5_ciu_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_ciu_die=$cant_kg_c5_ciu_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_ciu_die=$cant_total_c5_ciu_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_ciu_die=$cont_c5_ciu_die+1;
                                break;
                              }
                          break;
                          case 3; // San Fierro
                            // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c5_sfi_dub=$cant_pvp_c5_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_sfi_dub=$cant_kg_c5_sfi_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_sfi_dub=$cant_total_c5_sfi_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_sfi_dub=$cont_c5_sfi_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c5_sfi_moz=$cant_pvp_c5_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_sfi_moz=$cant_kg_c5_sfi_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_sfi_moz=$cant_total_c5_sfi_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_sfi_moz=$cont_c5_sfi_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c5_sfi_gou=$cant_pvp_c5_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_sfi_gou=$cant_kg_c5_sfi_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_sfi_gou=$cant_total_c5_sfi_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_sfi_gou=$cont_c5_sfi_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c5_sfi_die=$cant_pvp_c5_sfi_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_sfi_die=$cant_kg_c5_sfi_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_sfi_die=$cant_total_c5_sfi_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_sfi_die=$cont_c5_sfi_die+1;
                                break;
                              }
                          break;
                          case 4; // Los Santos
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c5_lsa_dub=$cant_pvp_c5_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_lsa_dub=$cant_kg_c5_lsa_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_lsa_dub=$cant_total_c5_lsa_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_lsa_dub=$cont_c5_lsa_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c5_lsa_moz=$cant_pvp_c5_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_lsa_moz=$cant_kg_c5_lsa_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_lsa_moz=$cant_total_c5_lsa_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_lsa_moz=$cont_c5_lsa_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c5_lsa_gou=$cant_pvp_c5_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_lsa_gou=$cant_kg_c5_lsa_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_lsa_gou=$cant_total_c5_lsa_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_lsa_gou=$cont_c5_lsa_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c5_lsa_die=$cant_pvp_c5_lsa_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c5_lsa_die=$cant_kg_c5_lsa_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c5_lsa_die=$cant_total_c5_lsa_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c5_lsa_die=$cont_c5_lsa_die+1;
                                break;
                              }
                          break;
                        }
                    break;
                    
                    case 6; // Ciclo 6
                        //selecciono la tienda
                        switch($tienda){
                          case 1; // Armadillo
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c6_arm_dub=$cant_pvp_c6_arm_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_arm_dub=$cant_kg_c6_arm_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_arm_dub=$cant_total_c6_arm_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_arm_dub=$cont_c6_arm_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c6_arm_moz=$cant_pvp_c6_arm_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_arm_moz=$cant_kg_c6_arm_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_arm_moz=$cant_total_c6_arm_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_arm_moz=$cont_c6_arm_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c6_arm_gou=$cant_pvp_c6_arm_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_arm_gou=$cant_kg_c6_arm_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_arm_gou=$cant_total_c6_arm_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_arm_gou=$cont_c6_arm_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c6_arm_die=$cant_pvp_c6_arm_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_arm_die=$cant_kg_c6_arm_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_arm_die=$cant_total_c6_arm_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_arm_die=$cont_c6_arm_die+1;
                                break;
                              }
                          break;
                          case 2; // Ciudadela
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c6_ciu_dub=$cant_pvp_c6_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_ciu_dub=$cant_kg_c6_ciu_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_ciu_dub=$cant_total_c6_ciu_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_ciu_dub=$cont_c6_ciu_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c6_ciu_moz=$cant_pvp_c6_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_ciu_moz=$cant_kg_c6_ciu_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_ciu_moz=$cant_total_c6_ciu_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_ciu_moz=$cont_c6_ciu_moz+1;
                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c6_ciu_gou=$cant_pvp_c6_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_ciu_gou=$cant_kg_c6_ciu_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_ciu_gou=$cant_total_c6_ciu_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_ciu_gou=$cont_c6_ciu_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c6_ciu_die=$cant_pvp_c6_ciu_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_ciu_die=$cant_kg_c6_ciu_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_ciu_die=$cant_total_c6_ciu_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_ciu_die=$cont_c6_ciu_die+1;
                                break;
                              }
                          break;
                          case 3; // San Fierro
                            // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c6_sfi_dub=$cant_pvp_c6_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_sfi_dub=$cant_kg_c6_sfi_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_sfi_dub=$cant_total_c6_sfi_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_sfi_dub=$cont_c6_sfi_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c6_sfi_moz=$cant_pvp_c6_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_sfi_moz=$cant_kg_c6_sfi_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_sfi_moz=$cant_total_c6_sfi_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_sfi_moz=$cont_c6_sfi_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c6_sfi_gou=$cant_pvp_c6_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_sfi_gou=$cant_kg_c6_sfi_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_sfi_gou=$cant_total_c6_sfi_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_sfi_gou=$cont_c6_sfi_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c6_sfi_die=$cant_pvp_c6_sfi_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_sfi_die=$cant_kg_c6_sfi_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_sfi_die=$cant_total_c6_sfi_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_sfi_die=$cont_c6_sfi_die+1;
                                break;
                              }
                          break;
                          case 4; // Los Santos
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c6_lsa_dub=$cant_pvp_c6_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_lsa_dub=$cant_kg_c6_lsa_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_lsa_dub=$cant_total_c6_lsa_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_lsa_dub=$cont_c6_lsa_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c6_lsa_moz=$cant_pvp_c6_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_lsa_moz=$cant_kg_c6_lsa_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_lsa_moz=$cant_total_c6_lsa_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_lsa_moz=$cont_c6_lsa_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c6_lsa_gou=$cant_pvp_c6_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_lsa_gou=$cant_kg_c6_lsa_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_lsa_gou=$cant_total_c6_lsa_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_lsa_gou=$cont_c6_lsa_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c6_lsa_die=$cant_pvp_c6_lsa_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c6_lsa_die=$cant_kg_c6_lsa_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c6_lsa_die=$cant_total_c6_lsa_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c6_lsa_die=$cont_c6_lsa_die+1;
                                break;
                              }
                          break;
                        }
                        
                    case 7; // Ciclo 7
                        //selecciono la tienda
                        switch($tienda){
                          case 1; // Armadillo
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c7_arm_dub=$cant_pvp_c7_arm_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_arm_dub=$cant_kg_c7_arm_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_arm_dub=$cant_total_c7_arm_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_arm_dub=$cont_c7_arm_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c7_arm_moz=$cant_pvp_c7_arm_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_arm_moz=$cant_kg_c7_arm_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_arm_moz=$cant_total_c7_arm_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_arm_moz=$cont_c7_arm_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c7_arm_gou=$cant_pvp_c7_arm_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_arm_gou=$cant_kg_c7_arm_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_arm_gou=$cant_total_c7_arm_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_arm_gou=$cont_c7_arm_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c7_arm_die=$cant_pvp_c7_arm_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_arm_die=$cant_kg_c7_arm_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_arm_die=$cant_total_c7_arm_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_arm_die=$cont_c7_arm_die+1;
                                break;
                              }
                          break;
                          case 2; // Ciudadela
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c7_ciu_dub=$cant_pvp_c7_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_ciu_dub=$cant_kg_c7_ciu_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_ciu_dub=$cant_total_c7_ciu_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_ciu_dub=$cont_c7_ciu_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c7_ciu_moz=$cant_pvp_c7_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_ciu_moz=$cant_kg_c7_ciu_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_ciu_moz=$cant_total_c7_ciu_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_ciu_moz=$cont_c7_ciu_moz+1;
                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c7_ciu_gou=$cant_pvp_c7_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_ciu_gou=$cant_kg_c7_ciu_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_ciu_gou=$cant_total_c7_ciu_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_ciu_gou=$cont_c7_ciu_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c7_ciu_die=$cant_pvp_c7_ciu_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_ciu_die=$cant_kg_c7_ciu_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_ciu_die=$cant_total_c7_ciu_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_ciu_die=$cont_c7_ciu_die+1;
                                break;
                              }
                          break;
                          case 3; // San Fierro
                            // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c7_sfi_dub=$cant_pvp_c7_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_sfi_dub=$cant_kg_c7_sfi_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_sfi_dub=$cant_total_c7_sfi_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_sfi_dub=$cont_c7_sfi_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c7_sfi_moz=$cant_pvp_c7_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_sfi_moz=$cant_kg_c7_sfi_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_sfi_moz=$cant_total_c7_sfi_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_sfi_moz=$cont_c7_sfi_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c7_sfi_gou=$cant_pvp_c7_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_sfi_gou=$cant_kg_c7_sfi_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_sfi_gou=$cant_total_c7_sfi_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_sfi_gou=$cont_c7_sfi_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c7_sfi_die=$cant_pvp_c7_sfi_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_sfi_die=$cant_kg_c7_sfi_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_sfi_die=$cant_total_c7_sfi_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_sfi_die=$cont_c7_sfi_die+1;
                                break;
                              }
                          break;
                          case 4; // Los Santos
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c7_lsa_dub=$cant_pvp_c7_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_lsa_dub=$cant_kg_c7_lsa_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_lsa_dub=$cant_total_c7_lsa_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_lsa_dub=$cont_c7_lsa_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c7_lsa_moz=$cant_pvp_c7_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_lsa_moz=$cant_kg_c7_lsa_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_lsa_moz=$cant_total_c7_lsa_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_lsa_moz=$cont_c7_lsa_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c7_lsa_gou=$cant_pvp_c7_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_lsa_gou=$cant_kg_c7_lsa_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_lsa_gou=$cant_total_c7_lsa_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_lsa_gou=$cont_c7_lsa_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c7_lsa_die=$cant_pvp_c7_lsa_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c7_lsa_die=$cant_kg_c7_lsa_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c7_lsa_die=$cant_total_c7_lsa_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c7_lsa_die=$cont_c7_lsa_die+1;
                                break;
                              }
                          break;
                        }
                    break;
                    
                    case 8; // Ciclo 8
                        //selecciono la tienda
                        switch($tienda){
                          case 1; // Armadillo
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c8_arm_dub=$cant_pvp_c8_arm_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_arm_dub=$cant_kg_c8_arm_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_arm_dub=$cant_total_c8_arm_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_arm_dub=$cont_c8_arm_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c8_arm_moz=$cant_pvp_c8_arm_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_arm_moz=$cant_kg_c8_arm_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_arm_moz=$cant_total_c8_arm_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_arm_moz=$cont_c8_arm_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c8_arm_gou=$cant_pvp_c8_arm_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_arm_gou=$cant_kg_c8_arm_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_arm_gou=$cant_total_c8_arm_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_arm_gou=$cont_c8_arm_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c8_arm_die=$cant_pvp_c8_arm_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_arm_die=$cant_kg_c8_arm_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_arm_die=$cant_total_c8_arm_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_arm_die=$cont_c8_arm_die+1;
                                break;
                              }
                          break;
                          case 2; // Ciudadela
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c8_ciu_dub=$cant_pvp_c8_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_ciu_dub=$cant_kg_c8_ciu_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_ciu_dub=$cant_total_c8_ciu_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_ciu_dub=$cont_c8_ciu_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c8_ciu_moz=$cant_pvp_c8_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_ciu_moz=$cant_kg_c8_ciu_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_ciu_moz=$cant_total_c8_ciu_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_ciu_moz=$cont_c8_ciu_moz+1;
                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c8_ciu_gou=$cant_pvp_c8_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_ciu_gou=$cant_kg_c8_ciu_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_ciu_gou=$cant_total_c8_ciu_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_ciu_gou=$cont_c8_ciu_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c8_ciu_die=$cant_pvp_c8_ciu_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_ciu_die=$cant_kg_c8_ciu_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_ciu_die=$cant_total_c8_ciu_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_ciu_die=$cont_c8_ciu_die+1;
                                break;
                              }
                          break;
                          case 3; // San Fierro
                            // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c8_sfi_dub=$cant_pvp_c8_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_sfi_dub=$cant_kg_c8_sfi_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_sfi_dub=$cant_total_c8_sfi_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_sfi_dub=$cont_c8_sfi_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c8_sfi_moz=$cant_pvp_c8_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_sfi_moz=$cant_kg_c8_sfi_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_sfi_moz=$cant_total_c8_sfi_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_sfi_moz=$cont_c8_sfi_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c8_sfi_gou=$cant_pvp_c8_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_sfi_gou=$cant_kg_c8_sfi_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_sfi_gou=$cant_total_c8_sfi_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_sfi_gou=$cont_c8_sfi_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c8_sfi_die=$cant_pvp_c8_sfi_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_sfi_die=$cant_kg_c8_sfi_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_sfi_die=$cant_total_c8_sfi_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_sfi_die=$cont_c8_sfi_die+1;
                                break;
                              }
                          break;
                          case 4; // Los Santos
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c8_lsa_dub=$cant_pvp_c8_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_lsa_dub=$cant_kg_c8_lsa_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_lsa_dub=$cant_total_c8_lsa_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_lsa_dub=$cont_c8_lsa_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c8_lsa_moz=$cant_pvp_c8_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_lsa_moz=$cant_kg_c8_lsa_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_lsa_moz=$cant_total_c8_lsa_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_lsa_moz=$cont_c8_lsa_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c8_lsa_gou=$cant_pvp_c8_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_lsa_gou=$cant_kg_c8_lsa_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_lsa_gou=$cant_total_c8_lsa_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_lsa_gou=$cont_c8_lsa_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c8_lsa_die=$cant_pvp_c8_lsa_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c8_lsa_die=$cant_kg_c8_lsa_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c8_lsa_die=$cant_total_c8_lsa_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c8_lsa_die=$cont_c8_lsa_die+1;
                                break;
                              }
                          break;
                        }
                    break;
                    
                    case 9; // Ciclo 9
                        //selecciono la tienda
                        switch($tienda){
                          case 1; // Armadillo
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c9_arm_dub=$cant_pvp_c9_arm_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_arm_dub=$cant_kg_c9_arm_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_arm_dub=$cant_total_c9_arm_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_arm_dub=$cont_c9_arm_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c9_arm_moz=$cant_pvp_c9_arm_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_arm_moz=$cant_kg_c9_arm_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_arm_moz=$cant_total_c9_arm_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_arm_moz=$cont_c9_arm_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c9_arm_gou=$cant_pvp_c9_arm_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_arm_gou=$cant_kg_c9_arm_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_arm_gou=$cant_total_c9_arm_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_arm_gou=$cont_c9_arm_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c9_arm_die=$cant_pvp_c9_arm_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_arm_die=$cant_kg_c9_arm_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_arm_die=$cant_total_c9_arm_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_arm_die=$cont_c9_arm_die+1;
                                break;
                              }
                          break;
                          case 2; // Ciudadela
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c9_ciu_dub=$cant_pvp_c9_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_ciu_dub=$cant_kg_c9_ciu_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_ciu_dub=$cant_total_c9_ciu_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_ciu_dub=$cont_c9_ciu_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c9_ciu_moz=$cant_pvp_c9_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_ciu_moz=$cant_kg_c9_ciu_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_ciu_moz=$cant_total_c9_ciu_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_ciu_moz=$cont_c9_ciu_moz+1;
                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c9_ciu_gou=$cant_pvp_c9_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_ciu_gou=$cant_kg_c9_ciu_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_ciu_gou=$cant_total_c9_ciu_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_ciu_gou=$cont_c9_ciu_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c9_ciu_die=$cant_pvp_c9_ciu_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_ciu_die=$cant_kg_c9_ciu_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_ciu_die=$cant_total_c9_ciu_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_ciu_die=$cont_c9_ciu_die+1;
                                break;
                              }
                          break;
                          case 3; // San Fierro
                            // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c9_sfi_dub=$cant_pvp_c9_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_sfi_dub=$cant_kg_c9_sfi_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_sfi_dub=$cant_total_c9_sfi_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_sfi_dub=$cont_c9_sfi_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c9_sfi_moz=$cant_pvp_c9_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_sfi_moz=$cant_kg_c9_sfi_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_sfi_moz=$cant_total_c9_sfi_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_sfi_moz=$cont_c9_sfi_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c9_sfi_gou=$cant_pvp_c9_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_sfi_gou=$cant_kg_c9_sfi_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_sfi_gou=$cant_total_c9_sfi_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_sfi_gou=$cont_c9_sfi_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c9_sfi_die=$cant_pvp_c9_sfi_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_sfi_die=$cant_kg_c9_sfi_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_sfi_die=$cant_total_c9_sfi_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_sfi_die=$cont_c9_sfi_die+1;
                                break;
                              }
                          break;
                          case 4; // Los Santos
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c9_lsa_dub=$cant_pvp_c9_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_lsa_dub=$cant_kg_c9_lsa_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_lsa_dub=$cant_total_c9_lsa_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_lsa_dub=$cont_c9_lsa_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c9_lsa_moz=$cant_pvp_c9_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_lsa_moz=$cant_kg_c9_lsa_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_lsa_moz=$cant_total_c9_lsa_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_lsa_moz=$cont_c9_lsa_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c9_lsa_gou=$cant_pvp_c9_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_lsa_gou=$cant_kg_c9_lsa_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_lsa_gou=$cant_total_c9_lsa_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_lsa_gou=$cont_c9_lsa_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c9_lsa_die=$cant_pvp_c9_lsa_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c9_lsa_die=$cant_kg_c9_lsa_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c9_lsa_die=$cant_total_c9_lsa_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c9_lsa_die=$cont_c9_lsa_die+1;
                                break;
                              }
                          break;
                        }
                    break;
                    
                    case 10; // Ciclo 10
                        //selecciono la tienda
                        switch($tienda){
                          case 1; // Armadillo
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c10_arm_dub=$cant_pvp_c10_arm_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_arm_dub=$cant_kg_c10_arm_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_arm_dub=$cant_total_c10_arm_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_arm_dub=$cont_c10_arm_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c10_arm_moz=$cant_pvp_c10_arm_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_arm_moz=$cant_kg_c10_arm_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_arm_moz=$cant_total_c10_arm_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_arm_moz=$cont_c10_arm_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c10_arm_gou=$cant_pvp_c10_arm_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_arm_gou=$cant_kg_c10_arm_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_arm_gou=$cant_total_c10_arm_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_arm_gou=$cont_c10_arm_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c10_arm_die=$cant_pvp_c10_arm_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_arm_die=$cant_kg_c10_arm_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_arm_die=$cant_total_c10_arm_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_arm_die=$cont_c10_arm_die+1;
                                break;
                              }
                          break;
                          case 2; // Ciudadela
                              // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c10_ciu_dub=$cant_pvp_c10_ciu_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_ciu_dub=$cant_kg_c10_ciu_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_ciu_dub=$cant_total_c10_ciu_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_ciu_dub=$cont_c10_ciu_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c10_ciu_moz=$cant_pvp_c10_ciu_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_ciu_moz=$cant_kg_c10_ciu_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_ciu_moz=$cant_total_c10_ciu_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_ciu_moz=$cont_c10_ciu_moz+1;
                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c10_ciu_gou=$cant_pvp_c10_ciu_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_ciu_gou=$cant_kg_c10_ciu_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_ciu_gou=$cant_total_c10_ciu_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_ciu_gou=$cont_c10_ciu_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c10_ciu_die=$cant_pvp_c10_ciu_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_ciu_die=$cant_kg_c10_ciu_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_ciu_die=$cant_total_c10_ciu_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_ciu_die=$cont_c10_ciu_die+1;
                                break;
                              }
                          break;
                          case 3; // San Fierro
                            // Selecciono el queso
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c10_sfi_dub=$cant_pvp_c10_sfi_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_sfi_dub=$cant_kg_c10_sfi_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_sfi_dub=$cant_total_c10_sfi_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_sfi_dub=$cont_c10_sfi_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c10_sfi_moz=$cant_pvp_c10_sfi_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_sfi_moz=$cant_kg_c10_sfi_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_sfi_moz=$cant_total_c10_sfi_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_sfi_moz=$cont_c10_sfi_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c10_sfi_gou=$cant_pvp_c10_sfi_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_sfi_gou=$cant_kg_c10_sfi_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_sfi_gou=$cant_total_c10_sfi_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_sfi_gou=$cont_c10_sfi_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c10_sfi_die=$cant_pvp_c10_sfi_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_sfi_die=$cant_kg_c10_sfi_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_sfi_die=$cant_total_c10_sfi_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_sfi_die=$cont_c10_sfi_die+1;
                                break;
                              }
                          break;
                          case 4; // Los Santos
                              switch($queso){
                                case 1; // Queso Duro
                                  $cant_pvp_c10_lsa_dub=$cant_pvp_c10_lsa_dub+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_lsa_dub=$cant_kg_c10_lsa_dub+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_lsa_dub=$cant_total_c10_lsa_dub+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_lsa_dub=$cont_c10_lsa_dub+1;

                                break;
                                case 2; // Queso Mozarella
                                  $cant_pvp_c10_lsa_moz=$cant_pvp_c10_lsa_moz+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_lsa_moz=$cant_kg_c10_lsa_moz+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_lsa_moz=$cant_total_c10_lsa_moz+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_lsa_moz=$cont_c10_lsa_moz+1;

                                break;
                                case 3; // Queso Gouda
                                  $cant_pvp_c10_lsa_gou=$cant_pvp_c10_lsa_gou+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_lsa_gou=$cant_kg_c10_lsa_gou+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_lsa_gou=$cant_total_c10_lsa_gou+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_lsa_gou=$cont_c10_lsa_gou+1;
                                break;
                                case 4; // Queso dietético
                                  $cant_pvp_c10_lsa_die=$cant_pvp_c10_lsa_die+$tiendas_mov['cant_monto_pvp'];
                                  $cant_kg_c10_lsa_die=$cant_kg_c10_lsa_die+$tiendas_mov['cant_venta'];
                                  $cant_total_c10_lsa_die=$cant_total_c10_lsa_die+$tiendas_mov['cant_ingreso'];
                                  $cont_c10_lsa_die=$cont_c10_lsa_die+1;
                                break;
                              }
                          break;
                        }
                    break;

                    case 11;
                    break;

                    case 12;
                    break;
                  }
                }

                
                // Selecciono las existencias de queso ---------------------------------------------------------------
                  $sentencia=$pdo->prepare("SELECT * FROM `tiendas_existe` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
                  $sentencia->execute();
                  $listado_tiendas_existe=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                  $cant_tiendas_existe=$sentencia->rowCount();
                  if($listado_tiendas_existe>=1){
                    $temporal="SI";
                  }else{
                    $procesar="listo"; //Muestra Vista normal
                    $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
                    $mensaje_usuario="No se encontraron las existencias de la empresa"; // Vacío en inicalización
                  }

              }else{
                $procesar="listo"; //Muestra Vista normal
                $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
                $mensaje_usuario="No se encontraron movimientos de tiendas de la empresa"; // Vacío en inicalización
              }

            }else{
              $procesar="listo"; //Muestra Vista normal
              $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
              $mensaje_usuario="No se encontró tiendas para la empresa"; // Vacío en inicalización
            } 
          // ----------------------------------------------------------------------------------------------------

        }else{
          $procesar="listo"; //Muestra Vista normal
          $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
          $mensaje_usuario="¡No hay empresa registrada!"; // Vacío en inicalización
        }
        
        
      // /. Fin selección de empresa del usuario -------------------------------------------------------------------------

  
    }
  // /. Fin selección empresa--------------------------------------------------------------------------------

  //Recepción de Post  --------------------------------------------------------------------------------------
    if(isset($_POST["btn_accion"])){

      $accion=($_POST["btn_accion"]);
      
      //Variables de Datos
      $txtNro=0;
      $txtId="";
      $txtFechaCreacion=($_POST["txtFecha_reg"]);   
      $txtNombre=($_POST['txtNombre']);
      $txtEstructura="Estandar";
      $txtDepartamentos="Estandar";
      $txtOrganigrama="Estandar";
      $txtMontoPresupuesto=0.00;
      $txtMontoSaldoActual=0.00;
      $txtMontoMultas=0.00;
      $txtEstatus="A";
      $txtIntegrantes=" ";
      //$txtFecha_reg=date("Y/m/d");
      $txtFecha_reg=($_POST["txtFecha_reg"]);
      //print_r($txtFecha_reg);
      $txtUsuario_reg=$txtUsuario;
      $txtEstatus_reg="A";
      // ----------------------------


      switch($accion){


        case "Guardar";
            // echo "<script> alert('Quieres Guardar Operación...'); </script>";
            // header('Location:usuarios.php');

            $sentencia=$pdo->prepare("INSERT INTO empresa(nro,id,usuario,id_usuario,fecha_creacion,nombre,estructura,departamentos,organigrama,monto_presupuesto,monto_saldo_actual,monto_multas,estatus,integrantes,fecha_reg,usuario_reg,estatus_reg) 
            VALUES (NULL, :id, :usuario, :id_usuario, :fecha_creacion, :nombre, :estructura, :departamentos,:organigrama, :monto_presupuesto,:monto_saldo_actual, :monto_multas, :estatus, :integrantes, :fecha_reg, :usuario_reg, :estatus_reg)");

            $sentencia->bindParam(':id',$txtId,PDO::PARAM_STR);
            $sentencia->bindParam(':usuario',$txtUsuario,PDO::PARAM_STR);
            $sentencia->bindParam(':id_usuario',$txtIdUsuario,PDO::PARAM_STR);
            $sentencia->bindParam(':fecha_creacion',$txtFechaCreacion);
            $sentencia->bindParam(':nombre',$txtNombreEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estructura',$txtEstructura,PDO::PARAM_STR);
            $sentencia->bindParam(':departamentos',$txtDepartamentos,PDO::PARAM_STR);
            $sentencia->bindParam(':organigrama',$txtOrganigrama,PDO::PARAM_STR);
            $sentencia->bindParam(':monto_presupuesto',$txtMontoPresupuesto,PDO::PARAM_STR);
            $sentencia->bindParam(':monto_saldo_actual',$txtMontoSaldoActual,PDO::PARAM_STR);
            $sentencia->bindParam(':monto_multas',$txtMontoMultas,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$txtEstatus,PDO::PARAM_STR);
            $sentencia->bindParam(':integrantes',$txtIntegrantes,PDO::PARAM_STR);
            $sentencia->bindParam(':fecha_reg',$txtFecha_reg);
            $sentencia->bindParam(':usuario_reg',$txtUsuario_reg,PDO::PARAM_INT);
            $sentencia->bindParam(':estatus_reg',$txtEstatus_reg);
            $sentencia->execute();

            echo "<script> alert('Entorno Creado Satisfactoriamente...'); </script>";

        break;

        case "Cancelar";
            // echo "<script> alert('Quieres cancelar Operación...'); </script>";
            $procesar="ok";
            header('Location:entorno.php');
        break;

        case "Aceptar";
            // echo "<script> alert('Quieres Aceptar Operación...'); </script>";
            $procesar="ok";
            header('Location:inicio.php');
        break;

        case "Actualizar";
            // echo "<script> alert('Quieres Actualizar Registro...'); </script>";
            if ($password1==$password2){

                $sentencia=$pdo->prepare("UPDATE Tblusuarios SET 
                clave=:clave,
                nombre=:nombre WHERE
                nro=:nro");
                
                $sentencia->bindParam(':nro',$nro,PDO::PARAM_STR);
                $sentencia->bindParam(':nombre',$nombre,PDO::PARAM_STR);
                $sentencia->bindParam(':clave',$password1,PDO::PARAM_STR);
                $sentencia->execute();

                // echo "<script> alert('Los Password son iguales...'); </script>";
                $accion="C";
                $mensaje_usuario="Usuario Actualizado Satisfactoriamente";
                $procesar="listo";
            }else{
                // echo "<script> alert('Los Password no son iguales...'); </script>";
                $accion="E";
                $mensaje_usuario="No se pudo actualizar, claves no coinciden";
                $error_accion=2;
                $procesar="ok";
            }

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
// . Fin recepción de Post  ---------------------------------------------------------------------------------

?>
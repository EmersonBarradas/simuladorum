<?php
 include('../controladores/global/conexion.php');
 include('../controladores/global/sesiones.php');
 include('../controladores/global/constantes.php');

//Datos del Usuario ------------------------------------------------------------------
 $usuariosesion=($_SESSION['usuario']);
 $txtUsuario=$usuariosesion['nro'];
 $txtIdUsuario=$usuariosesion['id'];
 $txtUsuarioTipo=$usuariosesion['tipo'];
 // ------------------------------------------------------------------------------------

// Variables de Acción ------------------------------------------------------------------
  $procesar="ok"; //Muestra Vista normal
  $error_accion=0; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
  $mensaje_usuario=""; // Vacío en inicalización
  $calcular="NO";
  $btnOperador="NO";
// ------------------------------------------------------------------------------------

// Variables de datos ------------------------------------------------------------------
  $Estatus=0;
// ------------------------------------------------------------------------------------

// Verifica los registros activos en simulación ---------------------------------------
  $cant_listado_quesoduro=0;
  $cant_listado_quesomozarella=0;
  $cant_listado_quesogouda=0;
  $cant_listado_quesodietetico=0;
// ------------------------------------------------------------------------------------

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
   // Asigno la empresa seleccionada
   $NroEmpresa=$_SESSION['nro_empresa'];
   $txtNro_empresa=$NroEmpresa;

   // Selecciono la empresa
   $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus=:estatus AND nro=:nro");
   $sentencia->bindParam("nro",$NroEmpresa,PDO::PARAM_STR);
   $sentencia->bindParam("estatus",$Estatus,PDO::PARAM_STR);
   $sentencia->execute();
   $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
   $cant_empresa=$sentencia->rowCount(); 

   // Seleccionar produccción de la empresa
   $sentencia=$pdo->prepare("SELECT * FROM `pcm` WHERE estatus=:estatus AND nro_empresa=:nro");
   $sentencia->bindParam("nro",$NroEmpresa,PDO::PARAM_STR);
   $sentencia->bindParam("estatus",$Estatus,PDO::PARAM_STR);
   $sentencia->execute();
   $listado_PCM=$sentencia->fetchAll(PDO::FETCH_ASSOC);
   $cant_PCM=$sentencia->rowCount();
   if($cant_PCM>=1){
       foreach($listado_PCM as $PCM){
           $nro_PCM=$PCM['nro'];
       }
   }

   // Selección Operador de empresa del usuario -------------------------------------------------------------------------
   $sentencia=$pdo->prepare("SELECT * FROM `apt` WHERE estatus=:estatus AND nro_empresa=:nro");
   $sentencia->bindParam("nro",$NroEmpresa,PDO::PARAM_STR);
   $sentencia->bindParam("estatus",$Estatus,PDO::PARAM_STR);
   $sentencia->execute();
   $listado_apt=$sentencia->fetchAll(PDO::FETCH_ASSOC);
   $cant_listado_apt=$sentencia->rowCount();

   if($cant_listado_apt>=1){

     foreach($listado_apt as $apt){
       $txtNro_apt=$apt['nro'];
       $txtId_apt=$apt['id'];
       $txt_cant_cmax_qd=$apt['cant_cmax_qd']; // Variables de queso duro
       $txt_cant_e_qd=$apt['cant_e_qd'];
       $txt_cant_disp_qd=$apt['cant_disp_qd'];
       $txt_cant_cmax_moz=$apt['cant_cmax_moz']; // Variables de queso mozarella
       $txt_cant_e_moz=$apt['cant_e_moz'];
       $txt_cant_disp_moz=$apt['cant_disp_moz'];
       $txt_cant_cmax_gou=$apt['cant_cmax_gou']; // Variables de queso gouda
       $txt_cant_e_gou=$apt['cant_e_gou'];
       $txt_cant_disp_gou=$apt['cant_disp_gou'];
       $txt_cant_cmax_die=$apt['cant_cmax_die']; // VAriables dietético
       $txt_cant_e_die=$apt['cant_e_die'];
       $txt_cant_disp_die=$apt['cant_disp_die'];
     }

     // Selecciono movimientos de almacén de productos terminados del almacén seleccionado
     $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus=:estatus AND nro_almacen=:nro_almacen  ORDER BY ciclo");
     $sentencia->bindParam("estatus",$Estatus,PDO::PARAM_STR);
     $sentencia->bindParam("nro_almacen",$txtNro_apt,PDO::PARAM_STR);
     $sentencia->execute();
     $listado_apt_mov=$sentencia->fetchAll(PDO::FETCH_ASSOC);
     $cant_listado_apt_mov=$sentencia->rowCount();

     if($cant_listado_apt_mov<1){
      $procesar="NO"; //Muestra Vista normal
      $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
      $mensaje_usuario="No Hay Movimientos de Almacén de Productos Terminados (APT)"; // Vacío en inicalización
      $btnOperador="SI";
     }

     if($cant_listado_apt_mov>=1){
        // Selecciono movimientos de queso duro --
          $nro_queso=1;
          $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus=:estatus AND nro_almacen=:nro_almacen AND nro_queso=:nro_queso  ORDER BY ciclo");
          $sentencia->bindParam("estatus",$Estatus,PDO::PARAM_STR);
          $sentencia->bindParam("nro_almacen",$txtNro_apt,PDO::PARAM_STR);
          $sentencia->bindParam("nro_queso",$nro_queso,PDO::PARAM_STR);
          $sentencia->execute();
          $listado_quesoduro=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_listado_quesoduro=$sentencia->rowCount();
        // Fin movimientos de queso duro ---------
        
        // Selecciono movimientos de queso mozarella --
          $nro_queso=2;
          $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus=:estatus AND nro_almacen=:nro_almacen AND nro_queso=:nro_queso  ORDER BY ciclo");
          $sentencia->bindParam("estatus",$Estatus,PDO::PARAM_STR);
          $sentencia->bindParam("nro_almacen",$txtNro_apt,PDO::PARAM_STR);
          $sentencia->bindParam("nro_queso",$nro_queso,PDO::PARAM_STR);
          $sentencia->execute();
          $listado_quesomozarella=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_listado_quesomozarella=$sentencia->rowCount();
        // Fin movimientos de queso mozarella ---------
        
        // Selecciono movimientos de queso gouda --
          $nro_queso=3;
          $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus=:estatus AND nro_almacen=:nro_almacen AND nro_queso=:nro_queso  ORDER BY ciclo");
          $sentencia->bindParam("estatus",$Estatus,PDO::PARAM_STR);
          $sentencia->bindParam("nro_almacen",$txtNro_apt,PDO::PARAM_STR);
          $sentencia->bindParam("nro_queso",$nro_queso,PDO::PARAM_STR);
          $sentencia->execute();
          $listado_quesogouda=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_listado_quesogouda=$sentencia->rowCount();
        // Fin movimientos de queso gouda ---------
      }
      // Selecciono movimientos de queso dietetico --
          $nro_queso=4;
          $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus=:estatus AND nro_almacen=:nro_almacen AND nro_queso=:nro_queso  ORDER BY ciclo");
          $sentencia->bindParam("estatus",$Estatus,PDO::PARAM_STR);
          $sentencia->bindParam("nro_almacen",$txtNro_apt,PDO::PARAM_STR);
          $sentencia->bindParam("nro_queso",$nro_queso,PDO::PARAM_STR);
        $listado_quesodietetico=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cant_listado_quesodietetico=$sentencia->rowCount();
      // Fin movimientos de queso dietetico ---------

   }




 }else{
   // Selección de empresa del usuario -------------------------------------------------------------------------
   $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND usuario=$txtUsuario");
   $sentencia->execute();
   $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
   $cant_empresa=$sentencia->rowCount();
   
   if($cant_empresa>=1){
     foreach($listado_empresa as $empresa){
       $txtNro_empresa=$empresa['nro'];
       $txtNombre_empresa=$empresa['nombre'];
     }

     // Selección Operador de empresa del usuario -------------------------------------------------------------------------
     $sentencia=$pdo->prepare("SELECT * FROM `apt` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
     $sentencia->execute();
     $listado_apt=$sentencia->fetchAll(PDO::FETCH_ASSOC);
     $cant_listado_apt=$sentencia->rowCount();

     if($cant_listado_apt>=1){

       foreach($listado_apt as $apt){
         $txtNro_apt=$apt['nro'];
         $txtId_apt=$apt['id'];
         $txt_cant_cmax_qd=$apt['cant_cmax_qd']; // Variables de queso duro
         $txt_cant_e_qd=$apt['cant_e_qd'];
         $txt_cant_disp_qd=$apt['cant_disp_qd'];
         $txt_cant_cmax_moz=$apt['cant_cmax_moz']; // Variables de queso mozarella
         $txt_cant_e_moz=$apt['cant_e_moz'];
         $txt_cant_disp_moz=$apt['cant_disp_moz'];
         $txt_cant_cmax_gou=$apt['cant_cmax_gou']; // Variables de queso gouda
         $txt_cant_e_gou=$apt['cant_e_gou'];
         $txt_cant_disp_gou=$apt['cant_disp_gou'];
         $txt_cant_cmax_die=$apt['cant_cmax_die']; // VAriables dietético
         $txt_cant_e_die=$apt['cant_e_die'];
         $txt_cant_disp_die=$apt['cant_disp_die'];
       }

       // Selecciono movimientos de almacén de productos terminados del almacén seleccionado
       $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus='A' AND nro_almacen=$txtNro_apt  ORDER BY ciclo");
       $sentencia->execute();
       $listado_apt_mov=$sentencia->fetchAll(PDO::FETCH_ASSOC);
       $cant_listado_apt_mov=$sentencia->rowCount();

       if($cant_listado_apt_mov<1){
        $procesar="NO"; //Muestra Vista normal
        $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
        $mensaje_usuario="No Hay Movimientos de Almacén de Productos Terminados (APT)"; // Vacío en inicalización
        $btnOperador="SI";
       }

       if($cant_listado_apt_mov>=1){
          // Selecciono movimientos de queso duro --
            $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus='A' AND nro_almacen=$txtNro_apt AND nro_queso=1  ORDER BY ciclo");
            $sentencia->execute();
            $listado_quesoduro=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $cant_listado_quesoduro=$sentencia->rowCount();
          // Fin movimientos de queso duro ---------
          
          // Selecciono movimientos de queso mozarella --
            $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus='A' AND nro_almacen=$txtNro_apt AND nro_queso=2  ORDER BY ciclo");
            $sentencia->execute();
            $listado_quesomozarella=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $cant_listado_quesomozarella=$sentencia->rowCount();
          // Fin movimientos de queso mozarella ---------
          
          // Selecciono movimientos de queso gouda --
            $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus='A' AND nro_almacen=$txtNro_apt AND nro_queso=3  ORDER BY ciclo");
            $sentencia->execute();
            $listado_quesogouda=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $cant_listado_quesogouda=$sentencia->rowCount();
          // Fin movimientos de queso gouda ---------
        }
        // Selecciono movimientos de queso dietetico --
          $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus='A' AND nro_almacen=$txtNro_apt AND nro_queso=4  ORDER BY ciclo");
          $sentencia->execute();
          $listado_quesodietetico=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_listado_quesodietetico=$sentencia->rowCount();
        // Fin movimientos de queso dietetico ---------

     }else{
       $procesar="SI"; //Muestra Vista normal
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
?>
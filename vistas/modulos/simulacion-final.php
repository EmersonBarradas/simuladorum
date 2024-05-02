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
    $finalizar=0;

    if ($txtUsuarioTipo=="A") {
      // Asigno la empresa seleccionada
      $NroEmpresa=$_SESSION['nro_empresa'];

      // Selecciono la empresa
      $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND nro=$NroEmpresa");
      $sentencia->execute();
      $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $cant_empresa=$sentencia->rowCount();
      if($cant_empresa>=1){
        $finalizar=1;
      }else{
        $finalizar=0;
      }
      

  }else{
    $finalizar=0;
  }

  // Verifica los registros activos en simulación ---------------------------------------
    $sentencia=$pdo->prepare("SELECT * FROM `simulacion` WHERE estatus='A' ");
    $sentencia->execute();
    $listasimulacion=$sentencia->fetchAll(PDO::FETCH_ASSOC);
  
    $cantRegistros=$sentencia->rowCount();
    //print_r($cantRegistros);
    //print_r($listasimulacion);

    if($cantRegistros>=1){
      //echo "<script> alert('Es mayor a uno...'); </script>";

      foreach ($listasimulacion as $simulacion){  
        $txtNro=($simulacion['nro']);
        $txtId=($simulacion['id']);
        $txtFechaInicio=($simulacion['fecha_inicio']);
        $txtEstatus=($simulacion['estatus']);
        $txtDescripcion=($simulacion['descripcion']);
      }

    }else{
      // echo "<script> alert('Es menor a uno...'); </script>";
      $txtNro=0;
      $txtId="";
      $txtFechaInicio="";
      $txtEstatus="";
      $txtDescripcion="";
    }
  // ------------------------------------------------------------------------------------
  

  if(isset($_POST["btn_accion"])){

    $accion=($_POST["btn_accion"]);
    $nro=($_POST['txtNro']);

    switch($accion){

      case "Cancelar";
          // echo "<script> alert('Quieres cancelar Operación...'); </script>";
          $procesar="ok";
          header('Location:inicio.php');
      break;

      case "Aceptar";
          // echo "<script> alert('Quieres Aceptar Operación...'); </script>";
          $procesar="ok";
          header('Location:inicio.php');
      break;

      case "Finalizar";
        // echo "<script> alert('Quieres Actualizar Registro...'); </script>";
        
        if($finalizar>0){

          // Cambia a inactiva la simulación -----------------------------------------------
            $estatus="I";
            $sentencia=$pdo->prepare("UPDATE simulacion SET 
            estatus=:estatus WHERE
            nro=:nro");
                  
            $sentencia->bindParam(':nro',$nro,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // -------------------------------------------------------------------------------


          // Finaliza la empresa-------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE empresa SET 
            estatus=:estatus WHERE
            nro=:nro");
                  
            $sentencia->bindParam(':nro',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------

          // Finaliza amp -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE amp SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------
          
          // Finaliza amp_cto -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE amp_cto SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------
          
          // Finaliza amp_mov -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE amp_mov SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------
          
          // Finaliza apt -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE apt SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------
          
          // Finaliza apt_dtienda -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE apt_dtienda SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------
          
          // Finaliza amp_mov -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE apt_mov SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------
          
          // Finaliza bitacora -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE bitacora SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------
          
          // Finaliza bitacora -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE bitacora SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------
          
          // Finaliza calendario -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE calendario SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------

          // Finaliza compra_subasta -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE compra_subasta SET 
            estatus=:estatus WHERE
            empresa=:empresa");
                  
            $sentencia->bindParam(':empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
          // --------------------------------------------------------------------------------

          // Finaliza despacho -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE despacho SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
        // --------------------------------------------------------------------------------
        
        // Finaliza empresa -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE empresa SET 
            estatus=:estatus WHERE
            nro=:nro");
                  
            $sentencia->bindParam(':empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
        // --------------------------------------------------------------------------------

        // Finaliza pcm -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE pcm SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
        // --------------------------------------------------------------------------------
        
        // Finaliza pcm -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE pcm SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
        // --------------------------------------------------------------------------------
        
        // Finaliza pcm_mod_mov -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE pcm_mod_mov SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
        // --------------------------------------------------------------------------------
        
        // Finaliza pcm_mod_operador -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE pcm_mod_operador SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
        // --------------------------------------------------------------------------------
        
        // Finaliza publicidad -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE publicidad SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
        // --------------------------------------------------------------------------------
        
        // Finaliza tiendas -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE tiendas SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
        // --------------------------------------------------------------------------------
        
        // Finaliza tiendas_existe -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE tiendas_existe SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
        // --------------------------------------------------------------------------------
        
        // Finaliza tiendas_mov -------------------------------------------------------------------
            $estatus="F";
            $sentencia=$pdo->prepare("UPDATE tiendas_mov SET 
            estatus=:estatus WHERE
            nro_empresa=:nro_empresa");
                  
            $sentencia->bindParam(':nro_empresa',$NroEmpresa,PDO::PARAM_STR);
            $sentencia->bindParam(':estatus',$estatus,PDO::PARAM_STR);
            $sentencia->execute();
        // --------------------------------------------------------------------------------


        }else{
          $mensaje_usuario="";
          $procesar="ok";
          $error_accion=0;
        }
        
        // echo "<script> alert('Simulación Finalizada Satisfactoriamente...'); </script>";
        // $accion="C";
        $cantRegistros=0;
        $txtNro=0;
        $txtId="";
        $txtFechaInicio="";
        $txtEstatus="";
        $txtDescripcion="";
        //header('Location:simulacion.php');

        $mensaje_usuario="Simulación Finalizada Satisfactoriamente";
        $procesar="listo";
        $error_accion=0;

      break;

    }
  
  }

?>
<?php
    include('../controladores/global/sesiones.php');
    include('../controladores/global/conexion.php');
    include('../controladores/global/constantes.php');


    //Datos del Usuario
    $usuariosesion=($_SESSION['usuario']);
    $txtUsuario=$usuariosesion['nro'];
    $txtIdUsuario=$usuariosesion['id'];
    $txtUsuarioTipo=$usuariosesion['tipo'];

    // Selección de entorno

    // --------------------------------------------------------------------------------

  
    // Variables de Acción
    $procesar="ok"; //Muestra Vista normal
    $error_accion=0; // Valor 0 si todo va normal
    $mensaje_usuario=""; // Vacío en inicalización

  //Recepción de Post
  if(isset($_POST["btn_accion"])){

    $accion=($_POST["btn_accion"]);

    //Variables de Datos
    $txtNro=0;
    $txtId=($_POST['txtId']);
    // El Usuario es el mismo usuario de sesión
    // La Id del usuario es la misma que el usuario de sesión
    //$txtUsuarioe=$txtUsuario;
    //print_r($txtUsuario);
    //$txtIdUsuarioe=$txtIdUsuario;
    $txtFechaCreacion=date("Y/m/d");   
    $txtNombre=($_POST['txtNombre']);
    $txtEstructura="Estandar";
    $txtDepartamentos="Estandar";
    $txtOrganigrama="Estandar";
    $txtMontoPresupuesto=0.00;
    $txtMontoSaldoActual=0.00;
    $txtMontoMultas=0.00;
    $txtEstatus="A";
    $txtIntegrantes="Vacio";
    $txtFecha_reg=date("Y/m/d");
    $txtUsuario_reg=$txtUsuario;
    $txtEstatus_reg="A";
    // ----------------------------


    switch($accion){

      case "Guardar";
          // echo "<script> alert('Quieres Guardar Operación...'); </script>";
          // header('Location:usuarios.php');

          // Insertar Empresa

          $sentencia=$pdo->prepare("INSERT INTO empresa(nro,id,usuario,id_usuario,fecha_creacion,nombre,estructura,departamentos,organigrama,monto_presupuesto,monto_saldo_actual,monto_multas,estatus,integrantes,fecha_reg,usuario_reg,estatus_reg) 
          VALUES (NULL, :id, :usuario, :id_usuario, :fecha_creacion, :nombre, :estructura, :departamentos,:organigrama, :monto_presupuesto,:monto_saldo_actual, :monto_multas, :estatus, :integrantes, :fecha_reg, :usuario_reg, :estatus_reg)");

          $sentencia->bindParam(':id',$txtId,PDO::PARAM_STR);
          $sentencia->bindParam(':usuario',$txtUsuario,PDO::PARAM_STR);
          $sentencia->bindParam(':id_usuario',$txtIdUsuario,PDO::PARAM_STR);
          $sentencia->bindParam(':fecha_creacion',$txtFechaCreacion);
          $sentencia->bindParam(':nombre',$txtNombre,PDO::PARAM_STR);
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

          $IdEmpresa=$pdo->lastInsertID(); // Último Nro de empresa insertado (campo clave)

          // -----------------------------------------------------------------------------------------

          // Creación de almacén de materia prima AMP

          $IdAMP="AMP-".strval($IdEmpresa);
          $EmpresAMP=$IdEmpresa;
          $IdEmpresaAMP=($_POST['txtId']);
          print_r($IdEmpresaAMP);
          $CapMaxlcAMP=$cant_capmax_lc;
          $ExistencialcAMP=0.00;
          $CapDisplcAMP=$cant_capmax_lc;
          $CapMaxadAMP=$cant_capmax_ad;
          $ExistenciaadAMP=0.00;
          $CapDispadAMP=$cant_capmax_ad;
          $EstatusAMP="A";
          $fecha_regAMP=date("Y/m/d");
          $Usuario_regAMP=$txtUsuario_reg;
          $estatus_regAMP="A";


          $sentencia=$pdo->prepare("INSERT INTO amp(nro,id,nro_empresa,id_empresa,cant_capmax_lc,cant_existencia_lc,cant_capdisp_lc,cant_capmax_ad,cant_existencia_ad,cant_capdisp_ad,estatus,fecha_reg,usuario_reg,estatus_reg) 
          VALUES (NULL, :id, :nro_empresa, :id_empresa, :cant_capmax_lc, :cant_existencia_lc, :cant_capdisp_lc, :cant_capmax_ad, :cant_existencia_ad, :cant_capdisp_ad, :estatus, :fecha_reg, :usuario_reg, :estatus_reg)");

          $sentencia->bindParam(':id',$IdAMP,PDO::PARAM_STR);
          $sentencia->bindParam(':nro_empresa',$EmpresAMP,PDO::PARAM_STR);
          $sentencia->bindParam(':id_empresa',$txtId,PDO::PARAM_STR);
          $sentencia->bindParam(':cant_capmax_lc',$CapMaxlcAMP,PDO::PARAM_STR);
          $sentencia->bindParam(':cant_existencia_lc',$ExistencialcAMP,PDO::PARAM_STR);
          $sentencia->bindParam(':cant_capdisp_lc',$CapDisplcAMP,PDO::PARAM_STR);
          $sentencia->bindParam(':cant_capmax_ad',$CapMaxadAMP,PDO::PARAM_STR);
          $sentencia->bindParam(':cant_existencia_ad',$ExistenciaadAMP,PDO::PARAM_STR);
          $sentencia->bindParam(':cant_capdisp_ad',$CapDispadAMP,PDO::PARAM_STR);
          $sentencia->bindParam(':estatus',$EstatusAMP,PDO::PARAM_STR);
          $sentencia->bindParam(':fecha_reg',$fecha_regAMP);
          $sentencia->bindParam(':usuario_reg',$Usuario_regAMP,PDO::PARAM_INT);
          $sentencia->bindParam(':estatus_reg',$estatus_regAMP,PDO::PARAM_STR);
          $sentencia->execute();
          // ----------------------------------------------

          //echo "<script> alert('Entorno Creado Satisfactoriamente...'); </script>";

          $procesar="listo"; //Muestra Vista normal
          $error_accion=1; // Valor 0 si todo va normal
          $mensaje_usuario="Entorno Creado Satisfactoriamente"; // Vacío en inicalización

      break;

      case "Cancelar";
          // echo "<script> alert('Quieres cancelar Operación...'); </script>";
          $procesar="ok";
          header('Location:entorno.php');
      break;

      case "Aceptar";
          // echo "<script> alert('Quieres Aceptar Operación...'); </script>";
          $procesar="ok";
          header('Location:entorno.php');
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


?>
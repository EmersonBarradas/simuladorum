<?php
    include('../controladores/global/conexion.php');
    include('../controladores/global/sesiones.php');
    include('../controladores/global/constantes.php');
    
    //Datos del Usuario---------------------------------------------------------------------
        $usuariosesion=($_SESSION['usuario']);
        $txtUsuario=$usuariosesion['nro'];
        $txtIdUsuario=$usuariosesion['id'];
        $txtUsuarioTipo=$usuariosesion['tipo'];
        // print_r($txtUsuario);
    // ------------------------------------------------------------------------------------


    // Variables de Acción -----------------------------------------------------------------
        $procesar="ok"; //Muestra Vista normal
        $error_accion=0; // Valor 0 si todo va normal
        $mensaje_usuario=""; // Vacío en inicalización
        $Mensaje_Mov="";
        $SubastaMovimientos="SI";
    // ------------------------------------------------------------------------------------
    
    // Variables de Datos -----------------------------------------------------------------
        $Estatus="A";
    // ------------------------------------------------------------------------------------


    // Verifica los registros activos en simulación ---------------------------------------
        $sentencia=$pdo->prepare("SELECT * FROM `simulacion` WHERE estatus='A' ");
        $sentencia->execute();
        $lista_simulacion=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cantsimulacion=$sentencia->rowCount();
        //print_r($cantRegistros);
        //print_r($listasimulacion);
    // ------------------------------------------------------------------------------------

    // Selección de entorno
    if ($txtUsuarioTipo=="A") {

        // Asigno la empresa seleccionada
        $NroEmpresa=$_SESSION['nro_empresa'];

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

    }else{
        // Selección de empresa del usuario -------------------------------------------------------------------------
        $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus=:estatus AND usuario=:usuario");
        $sentencia->bindParam("estatus",$Estatus,PDO::PARAM_STR);
        $sentencia->bindParam("usuario",$txtUsuario,PDO::PARAM_STR);
        $sentencia->execute();
        $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cant_empresa=$sentencia->rowCount();
        
        if($cant_empresa>=1){
            foreach ($listado_empresa as $empresa){
                $NroEmpresa=$empresa['nro'];
                $NombreEmpresa=$empresa['nombre'];
                $EstatusEmpresa=$empresa['estatus'];
            }

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
            }else{
                $SubastaMovimientos="NO";
                $Mensaje_Mov="¡No hay registros de esta empresa!";
                $procesar="listo"; //Muestra Vista normal
                $error_accion=3; // Valor 0 si todo va normal
                $mensaje_usuario="No hay movimientos de producción"; // Vacío en inicalización
                $Mensaje_Mov="";
            }

        }else{
            $procesar="listo"; //Muestra Vista normal
            $error_accion=2; // Valor 0 si todo va normal
            $mensaje_usuario="¡No hay empresa registrada!"; // Vacío en inicalización
            $Mensaje_Mov="";
            $SubastaMovimientos="SI";
        }            
        // echo "<script> alert('Se encontraron".$cant_compras_subasta."<script> El usuario es ADMINISTRADOR...'); </script>";
    }

// Recepción de Post -------------------------------------------------------------------------------
    if(isset($_POST["btn_accion"])){

        $accion=($_POST["btn_accion"]);

        if ($accion=="Actualizar") {
            $txtNro=($_POST["txtNro"]);
        }else{
            $txtNro=($_POST["txtEmpresa"]);
        }
        
        switch($accion){

            case "Guardar";
                // echo "<script> alert('Quieres Guardar Operación...'); </script>";
                // header('Location:usuarios.php');
                
            break;

            case "Consultar";
                // echo "<script> alert('Quieres cancelar Operación...'); </script>";
                // header('Location:entorno.php');
                $varEstatus="A";
                $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus=:estatus and nro=:nro");
                $sentencia->bindParam("estatus",$varEstatus,PDO::PARAM_STR);
                $sentencia->bindParam("nro",$txtNro,PDO::PARAM_STR);
                $sentencia->execute();
                $EntornoSeleccionado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
                $cant_entorno=$sentencia->rowCount();
            
                if ($cant_entorno>=1){
            
                    foreach ($EntornoSeleccionado as $entorno){
            
                        //Variables de Datos ------------------------------------- |
                        $txtId=$entorno['id'];
                        $txtUsuarioe=$entorno['usuario'];
                        $txtIdUsuarioe=$entorno['id_usuario'];
                        $txtFecha_Creacion=$entorno['fecha_creacion'];   
                        $txtNombre=$entorno['nombre'];
                        $txtEstructura=$entorno['estructura'];
                        $txtDepartamentos=$entorno['departamentos'];
                        $txtOrganigrama=$entorno['organigrama'];
                        $txtMonto_Presupuesto=$entorno['monto_presupuesto'];
                        $txtMonto_Saldo_Actual=$entorno['monto_saldo_actual'];
                        $txtMonto_Multas=$entorno['monto_multas'];
                        $txtEstatus=$entorno['estatus'];
                        $txtIntegrantes=$entorno['integrantes'];
                        $txtFecha_reg=$entorno['fecha_reg'];
                        $txtUsuario_reg=$entorno['usuario_reg'];
                        $txtEstatus_reg=$entorno['estatus_reg'];
                        // ------------------------------------------------------- |
            
                    }

                    $sentenciaSQL=$pdo->prepare("SELECT `nombre` FROM tblusuarios WHERE nro=:nro");
                    $sentenciaSQL->bindParam("nro",$txtUsuarioe,PDO::PARAM_STR);
                    $sentenciaSQL->execute();
                    $txtNombreUsuario=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
                    //print_r($txtNombreUsuario);
            
                }
            $procesar="ok";
            $error_accion=0; // Valor 0 si todo va normal
            $mensaje_usuario=""; // Vacío en inicalización

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

            case "Modificar";
                    // echo "<script> alert('Quieres Actualizar Registro...'); </script>";
                    $varEstatus="A";
                    $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus=:estatus and nro=:nro");
                    $sentencia->bindParam("estatus",$varEstatus,PDO::PARAM_STR);
                    $sentencia->bindParam("nro",$txtNro,PDO::PARAM_STR);
                    $sentencia->execute();
                    $EntornoSeleccionado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                
                    $cant_entorno=$sentencia->rowCount();
                
                    if ($cant_entorno>=1){
                
                        foreach ($EntornoSeleccionado as $entorno){
                
                            //Variables de Datos ------------------------------------- |
                            $txtId=$entorno['id'];
                            $txtUsuarioe=$entorno['usuario'];
                            $txtIdUsuarioe=$entorno['id_usuario'];
                            $txtFecha_Creacion=$entorno['fecha_creacion'];   
                            $txtNombre=$entorno['nombre'];
                            $txtEstructura=$entorno['estructura'];
                            $txtDepartamentos=$entorno['departamentos'];
                            $txtOrganigrama=$entorno['organigrama'];
                            $txtMonto_Presupuesto=$entorno['monto_presupuesto'];
                            $txtMonto_Saldo_Actual=$entorno['monto_saldo_actual'];
                            $txtMonto_Multas=$entorno['monto_multas'];
                            $txtEstatus=$entorno['estatus'];
                            $txtIntegrantes=$entorno['integrantes'];
                            $txtFecha_reg=$entorno['fecha_reg'];
                            $txtUsuario_reg=$entorno['usuario_reg'];
                            $txtEstatus_reg=$entorno['estatus_reg'];
                            // ------------------------------------------------------- |
                
                        }

                        $sentenciaSQL=$pdo->prepare("SELECT `nombre` FROM tblusuarios WHERE nro=:nro");
                        $sentenciaSQL->bindParam("nro",$txtUsuarioe,PDO::PARAM_STR);
                        $sentenciaSQL->execute();
                        $txtNombreUsuario=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
                        print_r($txtNombreUsuario);
                
                    }
                    $procesar="ok";
                    $error_accion=0; // Valor 0 si todo va normal
                    $mensaje_usuario=""; // Vacío en inicalización
                

            break;

            case "Actualizar";
                //echo "<script> alert('Quieres Actualizar el Registro...'); </script>";
                // header('Location:usuarios.php');
                
                $txtId=($_POST["txtId"]);
                $txtNombre=($_POST["txtNombre"]);

                //print_r("Número:".$txtNro." ");
                //print_r("ID: ".$txtId." ");
                //print_r("Nombre: ".$txtNombre." ");
                
                $sentencia=$pdo->prepare("UPDATE empresa SET 
                id=:id,
                nombre=:nombre WHERE
                nro=:nro");
                        
                $sentencia->bindParam(':nro',$txtNro,PDO::PARAM_STR);
                $sentencia->bindParam(':id',$txtId,PDO::PARAM_STR);
                $sentencia->bindParam(':nombre',$txtNombre,PDO::PARAM_STR);
                $sentencia->execute();

                $procesar="listo";
                $error_accion=1; // Valor 0 si todo va normal
                $mensaje_usuario="Entorno Actualizado Satisfactoriamente"; // Vacío en inicalización

            break;

            case "Eliminar";
                // echo "<script> alert('Quieres Eliminar Registro...'); </script>";
                // echo "<script> alert('Usuario Eliminado Satisfactoriamente...'); </script>";
                // header('Location:usuarios.php');

                //$sentencia=$pdo->prepare("DELETE FROM Tblusuarios WHERE nro=:nro");
                //$sentencia->bindParam(':nro',$nro,PDO::PARAM_STR);
                //$sentencia->execute();
                
                $txtEstatus="F";
                $txtEstatus_reg="E";
                $sentencia=$pdo->prepare("UPDATE empresa SET 
                estatus=:estatus,
                estatus_reg=:estatus_reg WHERE
                nro=:nro");
                        
                $sentencia->bindParam(':nro',$txtNro,PDO::PARAM_STR);
                $sentencia->bindParam(':estatus',$txtEstatus,PDO::PARAM_STR);
                $sentencia->bindParam(':estatus_reg',$txtEstatus_reg,PDO::PARAM_STR);
                $sentencia->execute();

                $procesar="listo";
                $error_accion=2;
                $mensaje_usuario="Registro Eliminado Satisfactoriamente...";
            break;
        }
    }
// --------------------------------------------------------------------------------------------------

?>
<?php
  include('../controladores/global/sesiones.php');
  include('../controladores/global/conexion.php');
  include('../controladores/global/constantes.php');


  //Datos del Usuario
    $usuariosesion=($_SESSION['usuario']);
    $txtUsuario=$usuariosesion['nro'];
    $txtIdUsuario=$usuariosesion['id'];
    $txtUsuarioTipo=$usuariosesion['tipo'];
  
  // Variables de Acción ---------------------------------------------------------------
    $procesar="ok"; //Muestra Vista normal
    $error_accion=0; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
    $mensaje_usuario=""; // Vacío en inicalización
    $calcular="NO";
  // ------------------------------------------------------------------------------------
  
  // Vaiables de Datos -----------------------------------------------------------------
    $Estatus="A";
    $cant_e_ciclo1=0;
    $cant_cto_total1=0;
    $cant_cto_unidad1=0;
    $cant_s_ciclo1=0;
    $cant_cost_unidad_s1=0;  
    
    $cant_e_ciclo2=0;
    $cant_cto_total2=0;
    $cant_cto_unidad2=0;
    $cant_s_ciclo2=0;
    $cant_cost_unidad_s2=0;  
    
    $cant_e_ciclo3=0;
    $cant_cto_total3=0;
    $cant_cto_unidad3=0;
    $cant_s_ciclo3=0;
    $cant_cost_unidad_s3=0;  
    
    $cant_e_ciclo4=0;
    $cant_cto_total4=0;
    $cant_cto_unidad4=0;
    $cant_s_ciclo4=0;
    $cant_cost_unidad_s4=0;
      
    $cant_e_ciclo5=0;
    $cant_cto_total5=0;
    $cant_cto_unidad5=0;
    $cant_s_ciclo5=0;
    $cant_cost_unidad_s5=0;
    
    $cant_e_ciclo6=0;
    $cant_cto_total6=0;
    $cant_cto_unidad6=0;
    $cant_s_ciclo6=0;
    $cant_cost_unidad_s6=0;
    
    $cant_e_ciclo7=0;
    $cant_cto_total7=0;
    $cant_cto_unidad7=0;
    $cant_s_ciclo7=0;
    $cant_cost_unidad_s7=0;
    
    $cant_e_ciclo8=0;
    $cant_cto_total8=0;
    $cant_cto_unidad8=0;
    $cant_s_ciclo8=0;
    $cant_cost_unidad_s8=0;
    
    $cant_e_ciclo9=0;
    $cant_cto_total9=0;
    $cant_cto_unidad9=0;
    $cant_s_ciclo9=0;
    $cant_cost_unidad_s9=0;
    
    $cant_e_ciclo10=0;
    $cant_cto_total10=0;
    $cant_cto_unidad10=0;
    $cant_s_ciclo10=0;
    $cant_cost_unidad_s10=0;


  // ------------------------------------------------------------------------------------

  // Verifica los registros activos en simulación ---------------------------------------
    $sentencia=$pdo->prepare("SELECT * FROM `simulacion` WHERE estatus='A' ");
    $sentencia->execute();
    $lista_simulacion=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $cantsimulacion=$sentencia->rowCount();
    //print_r($cantRegistros);
    //print_r($listasimulacion);
  // ------------------------------------------------------------------------------------

  // Selección de Empresa / Entorno
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

      // Selección Depósito AMP de la empresa ---------------------------------------------------------------
      $sentencia=$pdo->prepare("SELECT * FROM `pcm` WHERE estatus=:estatus AND nro_empresa=:nro");
      $sentencia->bindParam("nro",$NroEmpresa,PDO::PARAM_STR);
      $sentencia->bindParam("estatus",$Estatus,PDO::PARAM_STR);
      $sentencia->execute();
      $listado_pcm=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $cant_pcm=$sentencia->rowCount();

      if($cant_pcm>=1){
        // Inicialización de Variables de Entrada: Cantidad y Costo Total
          $cant_e_ciclo1=0.00; $cant_e_ciclo2=0.00; $cant_e_ciclo3=0.00; $cant_e_ciclo4=0.00; $cant_e_ciclo5=0.00;
          $cant_e_ciclo6=0.00; $cant_e_ciclo7=0.00; $cant_e_ciclo8=0.00; $cant_e_ciclo9=0.00; $cant_e_ciclo10=0.00;
          $cant_e_ciclo11=0.00; $cant_e_ciclo12=0.00;
          
          $cant_cto_total1=0.00; $cant_cto_total2=0.00; $cant_cto_total3=0.00; $cant_cto_total4=0.00; $cant_cto_total5=0.00;
          $cant_cto_total6=0.00; $cant_cto_total7=0.00; $cant_cto_total8=0.00; $cant_cto_total9=0.00; $cant_cto_total10=0.00;
          $cant_cto_total11=0.00; $cant_cto_total12=0.00;
  
          foreach ($listado_pcm as $pcm){
              if($pcm['ciclo']==1){
                $cant_e_ciclo1=$cant_e_ciclo1+$pcm['cant_queso'];
                $cant_cto_total1=$cant_cto_total1+$pcm['monto_cto_prod_mp'];
              }else{
                if($pcm['ciclo']==2){
                  $cant_e_ciclo2=$cant_e_ciclo2+$pcm['cant_queso'];
                  $cant_cto_total2=$cant_cto_total2+$pcm['monto_cto_prod_mp'];
                }else{
                  if($pcm['ciclo']==3){
                    $cant_e_ciclo3=$cant_e_ciclo3+$pcm['cant_queso'];
                    $cant_cto_total3=$cant_cto_total3+$pcm['monto_cto_prod_mp'];
                  }else{
                    if($pcm['ciclo']==4){
                      $cant_e_ciclo4=$cant_e_ciclo4+$pcm['cant_queso'];
                      $cant_cto_total4=$cant_cto_total4+$pcm['monto_cto_prod_mp'];
                    }else{
                      if($pcm['ciclo']==5){
                        $cant_e_ciclo5=$cant_e_ciclo5+$pcm['cant_queso'];
                        $cant_cto_total5=$cant_cto_total5+$pcm['monto_cto_prod_mp'];
                      }else{
                        if($pcm['ciclo']==6){
                          $cant_e_ciclo6=$cant_e_ciclo6+$pcm['cant_queso'];
                          $cant_cto_total6=$cant_cto_total6+$pcm['monto_cto_prod_mp'];
                        }else{
                          if($pcm['ciclo']==7){
                            $cant_e_ciclo7=$cant_e_ciclo7+$pcm['cant_queso'];
                            $cant_cto_total7=$cant_cto_total7+$pcm['monto_cto_prod_mp'];
                          }else{
                            if($pcm['ciclo']==8){
                              $cant_e_ciclo8=$cant_e_ciclo8+$pcm['cant_queso'];
                              $cant_cto_total8=$cant_cto_total8+$pcm['monto_cto_prod_mp'];
                            }else{
                              if($pcm['ciclo']==9){
                                $cant_e_ciclo9=$cant_e_ciclo9+$pcm['cant_queso'];
                                $cant_cto_total9=$cant_cto_total9+$pcm['monto_cto_prod_mp'];
                              }else{
                                if($pcm['ciclo']==10){
                                  $cant_e_ciclo10=$cant_e_ciclo10+$pcm['cant_queso'];
                                  $cant_cto_total0=$cant_cto_total0+$pcm['monto_cto_prod_mp'];
                                }else{
                                  if($pcm['ciclo']==11){
                                    $cant_e_ciclo11=$cant_e_ciclo11+$pcm['cant_queso'];
                                    $cant_cto_total11=$cant_cto_total11+$pcm['monto_cto_prod_mp'];
                                  }else{
                                    $cant_e_ciclo12=$cant_e_ciclo12+$pcm['cant_queso'];
                                    $cant_cto_total12=$cant_cto_total12+$pcm['monto_cto_prod_mp'];
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  } 
                }
              } 
          }
        //------------------------------------------------------------------------------
          
        // Costos por unidad entrada -----------------------------------------
            if(($cant_cto_total1>0) and ($cant_e_ciclo1>0)){
              $cant_cto_unidad1=$cant_cto_total1/$cant_e_ciclo1;
            }else{
              $cant_cto_unidad1=0.00;
            }
  
            if(($cant_cto_total2>0) and ($cant_e_ciclo2>0)){
              $cant_cto_unidad2=$cant_cto_total2/$cant_e_ciclo2;
            }else{
              $cant_cto_unidad2=0.00;
            }
            
            if(($cant_cto_total3>0) and ($cant_e_ciclo3>0)){
              $cant_cto_unidad3=$cant_cto_total3/$cant_e_ciclo3;
            }else{
              $cant_cto_unidad3=0.00;
            }
            
            if(($cant_cto_total4>0) and ($cant_e_ciclo4>0)){
              $cant_cto_unidad4=$cant_cto_total4/$cant_e_ciclo4;
            }else{
              $cant_cto_unidad4=0.00;
            }
            
            if(($cant_cto_total5>0) and ($cant_e_ciclo5>0)){
              $cant_cto_unidad5=$cant_cto_total5/$cant_e_ciclo5;
            }else{
              $cant_cto_unidad5=0.00;
            }
            
            if(($cant_cto_total6>0) and ($cant_e_ciclo6>0)){
              $cant_cto_unidad6=$cant_cto_total6/$cant_e_ciclo6;
            }else{
              $cant_cto_unidad6=0.00;
            }
            
            if(($cant_cto_total7>0) and ($cant_e_ciclo7>0)){
              $cant_cto_unidad7=$cant_cto_total7/$cant_e_ciclo7;
            }else{
              $cant_cto_unidad7=0.00;
            }
            
            if(($cant_cto_total8>0) and ($cant_e_ciclo8>0)){
              $cant_cto_unidad8=$cant_cto_total8/$cant_e_ciclo8;
            }else{
              $cant_cto_unidad8=0.00;
            }
            
            if(($cant_cto_total9>0) and ($cant_e_ciclo9>0)){
              $cant_cto_unidad9=$cant_cto_total9/$cant_e_ciclo9;
            }else{
              $cant_cto_unidad9=0.00;
            }
            
            if(($cant_cto_total10>0) and ($cant_e_ciclo10>0)){
              $cant_cto_unidad10=$cant_cto_total10/$cant_e_ciclo10;
            }else{
              $cant_cto_unidad10=0.00;
            }
            
            if(($cant_cto_total11>0) and ($cant_e_ciclo11>0)){
              $cant_cto_unidad11=$cant_cto_total11/$cant_e_ciclo11;
            }else{
              $cant_cto_unidad11=0.00;
            }
            
            if(($cant_cto_total12>0) and ($cant_e_ciclo12>0)){
              $cant_cto_unidad12=$cant_cto_total12/$cant_e_ciclo12;
            }else{
              $cant_cto_unidad12=0.00;
            }
        // ---------------------------------------------------------------------

          // Selección Depósito APT de la empresa ---------------------------------------------------------------
          $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
          $sentencia->execute();
          $listado_apt_mov=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          $cant_apt_mov=$sentencia->rowCount();
        
          // Inicialización de variables de salida: Cantidad de salida
          $cant_s_ciclo1=0.00; $cant_s_ciclo2=0.00; $cant_s_ciclo3=0.00; $cant_s_ciclo4=0.00; $cant_s_ciclo5=0.00;
          $cant_s_ciclo6=0.00; $cant_s_ciclo7=0.00; $cant_s_ciclo8=0.00; $cant_s_ciclo9=0.00; $cant_s_ciclo10=0.00;
          $cant_s_ciclo11=0.00; $cant_s_ciclo12=0.00;
        
          foreach ($listado_apt_mov as $apt_mov){
            //$nro_apt_mov=$apt_mov['nro'];
            if($apt_mov['ciclo']==1){
              $cant_s_ciclo1=$cant_s_ciclo1+$pcm['cant_queso'];
            }else{
              if($apt_mov['ciclo']==2){
                $cant_s_ciclo2=$cant_s_ciclo2+$pcm['cant_queso'];
              }else{
                if($apt_mov['ciclo']==3){
                  $cant_s_ciclo3=$cant_s_ciclo3+$pcm['cant_queso'];
                }else{
                  if($apt_mov['ciclo']==4){
                    $cant_s_ciclo4=$cant_s_ciclo4+$pcm['cant_queso'];
                  }else{
                    if($apt_mov['ciclo']==5){
                      $cant_s_ciclo5=$cant_s_ciclo5+$pcm['cant_queso'];
                    }else{
                      if($apt_mov['ciclo']==6){
                        $cant_s_ciclo6=$cant_s_ciclo6+$pcm['cant_queso'];
                      }else{
                        if($apt_mov['ciclo']==7){
                          $cant_s_ciclo7=$cant_s_ciclo7+$pcm['cant_queso'];
                        }else{
                          if($apt_mov['ciclo']==8){
                            $cant_s_ciclo8=$cant_s_ciclo8+$pcm['cant_queso'];
                          }else{
                            if($apt_mov['ciclo']==9){
                              $cant_s_ciclo9=$cant_s_ciclo9+$pcm['cant_queso'];
                            }else{
                              if($apt_mov['ciclo']==10){
                                $cant_s_ciclo10=$cant_s_ciclo10+$pcm['cant_queso'];
                              }else{
                                if($apt_mov['ciclo']==11){
                                  $cant_s_ciclo11=$cant_s_ciclo11+$pcm['cant_queso'];
                                }else{
                                  $cant_s_ciclo12=$cant_s_ciclo12+$pcm['cant_queso'];
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                } 
              }
            } 
        
          }
           //. Fin selección Depósito APT de la empresa --------------------------------------------------------
      }
  }else{
    // Selección de empresa del usuario -------------------------------------------------------------------------
      $sentencia=$pdo->prepare("SELECT * FROM `empresa` WHERE estatus='A' AND usuario=$txtUsuario");
      $sentencia->execute();
      $listado_empresa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $cant_empresa=$sentencia->rowCount(); 

      if ($cant_empresa>=1) {
        //echo "<script> alert('Empresa es mayor a 1...'); </script>";

        foreach($listado_empresa as $empresa){
            $txtNro_empresa=$empresa['nro'];
            $txtNombre_empresa=$empresa['nombre'];
        }
        // Selección Depósito AMP de la empresa ---------------------------------------------------------------
        $sentencia=$pdo->prepare("SELECT * FROM `pcm` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
        $sentencia->execute();
        $listado_pcm=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $cant_pcm=$sentencia->rowCount();

        if($cant_pcm>=1){
          // Inicialización de Variables de Entrada: Cantidad y Costo Total
            $cant_e_ciclo1=0.00; $cant_e_ciclo2=0.00; $cant_e_ciclo3=0.00; $cant_e_ciclo4=0.00; $cant_e_ciclo5=0.00;
            $cant_e_ciclo6=0.00; $cant_e_ciclo7=0.00; $cant_e_ciclo8=0.00; $cant_e_ciclo9=0.00; $cant_e_ciclo10=0.00;
            $cant_e_ciclo11=0.00; $cant_e_ciclo12=0.00;
            
            $cant_cto_total1=0.00; $cant_cto_total2=0.00; $cant_cto_total3=0.00; $cant_cto_total4=0.00; $cant_cto_total5=0.00;
            $cant_cto_total6=0.00; $cant_cto_total7=0.00; $cant_cto_total8=0.00; $cant_cto_total9=0.00; $cant_cto_total10=0.00;
            $cant_cto_total11=0.00; $cant_cto_total12=0.00;
    
            foreach ($listado_pcm as $pcm){
                if($pcm['ciclo']==1){
                  $cant_e_ciclo1=$cant_e_ciclo1+$pcm['cant_queso'];
                  $cant_cto_total1=$cant_cto_total1+$pcm['monto_cto_prod_mp'];
                }else{
                  if($pcm['ciclo']==2){
                    $cant_e_ciclo2=$cant_e_ciclo2+$pcm['cant_queso'];
                    $cant_cto_total2=$cant_cto_total2+$pcm['monto_cto_prod_mp'];
                  }else{
                    if($pcm['ciclo']==3){
                      $cant_e_ciclo3=$cant_e_ciclo3+$pcm['cant_queso'];
                      $cant_cto_total3=$cant_cto_total3+$pcm['monto_cto_prod_mp'];
                    }else{
                      if($pcm['ciclo']==4){
                        $cant_e_ciclo4=$cant_e_ciclo4+$pcm['cant_queso'];
                        $cant_cto_total4=$cant_cto_total4+$pcm['monto_cto_prod_mp'];
                      }else{
                        if($pcm['ciclo']==5){
                          $cant_e_ciclo5=$cant_e_ciclo5+$pcm['cant_queso'];
                          $cant_cto_total5=$cant_cto_total5+$pcm['monto_cto_prod_mp'];
                        }else{
                          if($pcm['ciclo']==6){
                            $cant_e_ciclo6=$cant_e_ciclo6+$pcm['cant_queso'];
                            $cant_cto_total6=$cant_cto_total6+$pcm['monto_cto_prod_mp'];
                          }else{
                            if($pcm['ciclo']==7){
                              $cant_e_ciclo7=$cant_e_ciclo7+$pcm['cant_queso'];
                              $cant_cto_total7=$cant_cto_total7+$pcm['monto_cto_prod_mp'];
                            }else{
                              if($pcm['ciclo']==8){
                                $cant_e_ciclo8=$cant_e_ciclo8+$pcm['cant_queso'];
                                $cant_cto_total8=$cant_cto_total8+$pcm['monto_cto_prod_mp'];
                              }else{
                                if($pcm['ciclo']==9){
                                  $cant_e_ciclo9=$cant_e_ciclo9+$pcm['cant_queso'];
                                  $cant_cto_total9=$cant_cto_total9+$pcm['monto_cto_prod_mp'];
                                }else{
                                  if($pcm['ciclo']==10){
                                    $cant_e_ciclo10=$cant_e_ciclo10+$pcm['cant_queso'];
                                    $cant_cto_total0=$cant_cto_total0+$pcm['monto_cto_prod_mp'];
                                  }else{
                                    if($pcm['ciclo']==11){
                                      $cant_e_ciclo11=$cant_e_ciclo11+$pcm['cant_queso'];
                                      $cant_cto_total11=$cant_cto_total11+$pcm['monto_cto_prod_mp'];
                                    }else{
                                      $cant_e_ciclo12=$cant_e_ciclo12+$pcm['cant_queso'];
                                      $cant_cto_total12=$cant_cto_total12+$pcm['monto_cto_prod_mp'];
                                    }
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    } 
                  }
                } 
            }
          //------------------------------------------------------------------------------
            
            // Costos por unidad entrada -----------------------------------------
              if(($cant_cto_total1>0) and ($cant_e_ciclo1>0)){
                $cant_cto_unidad1=$cant_cto_total1/$cant_e_ciclo1;
              }else{
                $cant_cto_unidad1=0.00;
              }
    
              if(($cant_cto_total2>0) and ($cant_e_ciclo2>0)){
                $cant_cto_unidad2=$cant_cto_total2/$cant_e_ciclo2;
              }else{
                $cant_cto_unidad2=0.00;
              }
              
              if(($cant_cto_total3>0) and ($cant_e_ciclo3>0)){
                $cant_cto_unidad3=$cant_cto_total3/$cant_e_ciclo3;
              }else{
                $cant_cto_unidad3=0.00;
              }
              
              if(($cant_cto_total4>0) and ($cant_e_ciclo4>0)){
                $cant_cto_unidad4=$cant_cto_total4/$cant_e_ciclo4;
              }else{
                $cant_cto_unidad4=0.00;
              }
              
              if(($cant_cto_total5>0) and ($cant_e_ciclo5>0)){
                $cant_cto_unidad5=$cant_cto_total5/$cant_e_ciclo5;
              }else{
                $cant_cto_unidad5=0.00;
              }
              
              if(($cant_cto_total6>0) and ($cant_e_ciclo6>0)){
                $cant_cto_unidad6=$cant_cto_total6/$cant_e_ciclo6;
              }else{
                $cant_cto_unidad6=0.00;
              }
              
              if(($cant_cto_total7>0) and ($cant_e_ciclo7>0)){
                $cant_cto_unidad7=$cant_cto_total7/$cant_e_ciclo7;
              }else{
                $cant_cto_unidad7=0.00;
              }
              
              if(($cant_cto_total8>0) and ($cant_e_ciclo8>0)){
                $cant_cto_unidad8=$cant_cto_total8/$cant_e_ciclo8;
              }else{
                $cant_cto_unidad8=0.00;
              }
              
              if(($cant_cto_total9>0) and ($cant_e_ciclo9>0)){
                $cant_cto_unidad9=$cant_cto_total9/$cant_e_ciclo9;
              }else{
                $cant_cto_unidad9=0.00;
              }
              
              if(($cant_cto_total10>0) and ($cant_e_ciclo10>0)){
                $cant_cto_unidad10=$cant_cto_total10/$cant_e_ciclo10;
              }else{
                $cant_cto_unidad10=0.00;
              }
              
              if(($cant_cto_total11>0) and ($cant_e_ciclo11>0)){
                $cant_cto_unidad11=$cant_cto_total11/$cant_e_ciclo11;
              }else{
                $cant_cto_unidad11=0.00;
              }
              
              if(($cant_cto_total12>0) and ($cant_e_ciclo12>0)){
                $cant_cto_unidad12=$cant_cto_total12/$cant_e_ciclo12;
              }else{
                $cant_cto_unidad12=0.00;
              }
            // ---------------------------------------------------------------------

            // Selección Depósito APT de la empresa ---------------------------------------------------------------
            $sentencia=$pdo->prepare("SELECT * FROM `apt_mov` WHERE estatus='A' AND nro_empresa=$txtNro_empresa");
            $sentencia->execute();
            $listado_apt_mov=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $cant_apt_mov=$sentencia->rowCount();
          
            // Inicialización de variables de salida: Cantidad de salida
            $cant_s_ciclo1=0.00; $cant_s_ciclo2=0.00; $cant_s_ciclo3=0.00; $cant_s_ciclo4=0.00; $cant_s_ciclo5=0.00;
            $cant_s_ciclo6=0.00; $cant_s_ciclo7=0.00; $cant_s_ciclo8=0.00; $cant_s_ciclo9=0.00; $cant_s_ciclo10=0.00;
            $cant_s_ciclo11=0.00; $cant_s_ciclo12=0.00;
          
            foreach ($listado_apt_mov as $apt_mov){
              //$nro_apt_mov=$apt_mov['nro'];
              if($apt_mov['ciclo']==1){
                $cant_s_ciclo1=$cant_s_ciclo1+$pcm['cant_queso'];
              }else{
                if($apt_mov['ciclo']==2){
                  $cant_s_ciclo2=$cant_s_ciclo2+$pcm['cant_queso'];
                }else{
                  if($apt_mov['ciclo']==3){
                    $cant_s_ciclo3=$cant_s_ciclo3+$pcm['cant_queso'];
                  }else{
                    if($apt_mov['ciclo']==4){
                      $cant_s_ciclo4=$cant_s_ciclo4+$pcm['cant_queso'];
                    }else{
                      if($apt_mov['ciclo']==5){
                        $cant_s_ciclo5=$cant_s_ciclo5+$pcm['cant_queso'];
                      }else{
                        if($apt_mov['ciclo']==6){
                          $cant_s_ciclo6=$cant_s_ciclo6+$pcm['cant_queso'];
                        }else{
                          if($apt_mov['ciclo']==7){
                            $cant_s_ciclo7=$cant_s_ciclo7+$pcm['cant_queso'];
                          }else{
                            if($apt_mov['ciclo']==8){
                              $cant_s_ciclo8=$cant_s_ciclo8+$pcm['cant_queso'];
                            }else{
                              if($apt_mov['ciclo']==9){
                                $cant_s_ciclo9=$cant_s_ciclo9+$pcm['cant_queso'];
                              }else{
                                if($apt_mov['ciclo']==10){
                                  $cant_s_ciclo10=$cant_s_ciclo10+$pcm['cant_queso'];
                                }else{
                                  if($apt_mov['ciclo']==11){
                                    $cant_s_ciclo11=$cant_s_ciclo11+$pcm['cant_queso'];
                                  }else{
                                    $cant_s_ciclo12=$cant_s_ciclo12+$pcm['cant_queso'];
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  } 
                }
              } 
          
            }
             //. Fin selección Depósito APT de la empresa --------------------------------------------------------
    
    // /. Fin selección Depósito AMP de la empresa --------------------------------------------------------
    

        }else{
          $procesar="listo"; //Muestra Vista normal
          $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
          $mensaje_usuario="No se pudo rescatar la producción (PCM)"; // Vacío en inicalización
          $calcular="NO";
        }

      } else{ 
        $procesar="listo"; //Muestra Vista normal
        $error_accion=2; // Valor 0 si todo va normal | 1 si se procesó correctamente | 2 si hay error
        $mensaje_usuario="¡No hay empresa registrada!"; // Vacío en inicalización
        $calcular="NO";
        
      }


  }
?>
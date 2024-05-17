<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php
        include "modulos/valores.php";
        include "modulos/encabezado.php";
        include "modulos/menu.php";
    
    ?>  

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Valores </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="valores.php">Valores</a></li>
                <li class="breadcrumb-item active">Valores</li>
                </ol>
            </div><!-- /.col -->
            <!-- Separador -->
            <div class="col-md-12">
                <hr style="color: #0056b2;" />
            </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    <!-- Verifica si hay simulación activa -->
    <?php if($cantsimulacion>=1){ ?>

        <!-- Inicio del contenedor de datos -->
            <div class="container" style="padding: 0px 20px 50px 20px;">
                <div class="row justify-content-center">
                    <?php if ($procesar=="ok") {  ?>
                        <?php  if ($mensaje_usuario!=""){ ?>
                            <div class="col-12 ">
                                <?php if($error_accion==1){ ?>
                                    <h3 class="text-center text-success"><?php echo $mensaje_usuario; ?></h3>
                                <?php }else{ ?>
                                    <h3 class="text-center text-danger"><?php echo "ERROR 4: ".$mensaje_usuario; ?></h3>
                                <?php } ?>    
                            </div>
                        <?php } ?>

                    <!-- Formulario principal-->    
                    <form class="col-md-12" action="valores.php" method="post" >
                        <div class="row">
                            <!-- Tabla  -->
                                <div class="col-12">
                                    <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Litros por contrato</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 140px;">
                                        <table class="table table-head-fixed text-nowrap">
                                            <tbody>
                                                    <div class="row" style="padding: 15px;">
                                                        <!-- ---------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="contrato_lc">Contrato LC (Litros)</label>
                                                                    <input type="number" class="form-control" name="contrato_lc" step="0.001"  value="<?php echo $contrato_lc; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                    
                                                        <!--  -->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="contrato_ad">Contrato AD (Litros)</label>
                                                                    <input type="number" class="form-control" name="contrato_ad" step="0.001"  value="<?php echo $contrato_ad; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                    </div>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            <!-- /. Fin tabla  -->
                            <!-- Tabla  -->
                                <div class="col-12">
                                    <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Capacidades de Almacén</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 140px;">
                                        <table class="table table-head-fixed text-nowrap">

                                            <tbody>
                                                    <div class="row" style="padding: 15px;">
                                                        <!--  --------------->
                                                        <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cap_max_lc_amp">Capacidad Máxima LC (AMP)</label>
                                                                    <input type="number" class="form-control" name="cap_max_lc_amp" step="0.001"  value="<?php echo $cap_max_lc_amp; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cap_max_ad_amp">Capacidad Máxima AD (AMP)</label>
                                                                    <input type="number" class="form-control" name="cap_max_ad_amp" step="0.001"  value="<?php echo $cap_max_ad_amp; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->

                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cap_max_kg_apt">Capacidad Máxima Kg (APT)</label>
                                                                    <input type="number" class="form-control" name="cap_max_kg_apt" step="0.001"  value="<?php echo $cap_max_kg_apt; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cap_alm_tiendas">Capacidad Almacén Tienda</label>
                                                                    <input type="number" class="form-control" name="cap_alm_tiendas" step="0.001"  value="<?php echo $cap_alm_tiendas; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        
                                                    </div>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            <!-- /. Fin tabla  -->
                            <!-- Tabla  -->
                                <div class="col-12">
                                    <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Costos de Transporte</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 140px;">
                                        <table class="table table-head-fixed text-nowrap">

                                            <tbody>
                                                    <div class="row" style="padding: 15px;">
                                                        <!--  --------------->
                                                        <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cto_trans_arm">Cto. Transporte Armadillo</label>
                                                                    <input type="number" class="form-control" name="cto_trans_arm" step="0.001" value="<?php echo $cto_trans_arm; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cto_trans_sfi">Cto. Transporte San Fierro</label>
                                                                    <input type="number" class="form-control" name="cto_trans_sfi" step="0.001" value="<?php echo $cto_trans_sfi; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cto_trans_ciu">Cto. Transporte Ciudadela</label>
                                                                    <input type="number" class="form-control" name="cto_trans_ciu" step="0.001" value="<?php echo $cto_trans_ciu; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cto_trans_lsa">Cto. Transporte Los Santos</label>
                                                                    <input type="number" class="form-control" name="cto_trans_lsa" step="0.001" value="<?php echo $cto_trans_lsa; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        
                                                    </div>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            <!-- /. Fin tabla  -->
                            
                            <!-- Tabla  -->
                                <div class="col-12">
                                    <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Gastos de Alquiler</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 140px;">
                                        <table class="table table-head-fixed text-nowrap">

                                            <tbody>
                                                    <div class="row" style="padding: 15px;">
                                                        <!--  --------------->
                                                        <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="alquiler_arm">Alquiler Armadillo</label>
                                                                    <input type="number" class="form-control" name="alquiler_arm" step="0.001"  value="<?php echo $alquiler_arm; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="alquiler_sfi">Alquiler San Fierro</label>
                                                                    <input type="number" class="form-control" name="alquiler_sfi" step="0.001"  value="<?php echo $alquiler_sfi; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="alquiler_ciu">Alquiler Ciudadela</label>
                                                                    <input type="number" class="form-control" name="alquiler_ciu" step="0.001"  value="<?php echo $alquiler_ciu; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="alquiler_lsa">Alquiler Los Santos</label>
                                                                    <input type="number" class="form-control" name="alquiler_lsa" step="0.001"  value="<?php echo $alquiler_lsa; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                    </div>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            <!-- /. Fin tabla  -->
                            <!-- Tabla  -->
                                <div class="col-12">
                                    <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Publicidad</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 140px;">
                                        <table class="table table-head-fixed text-nowrap">

                                            <tbody>
                                                    <div class="row" style="padding: 15px;">
                                                    <!--  --------------->
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <h4></h4>
                                                            </div>
                                                        </div>
                                                    <!-- /. ------------->

                                                    <!--  --------------->
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="pub_videos">Videos Promocionales ($)</label>
                                                                <input type="number" class="form-control" name="pub_videos" step="0.001"  value="<?php echo $pub_videos; ?>">
                                                            </div>
                                                        </div>
                                                    <!-- /. ------------->
                                                    <!--  --------------->
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="pub_vallas">Vallas en avenidas ($)</label>
                                                                <input type="number" class="form-control" name="pub_vallas" step="0.001"  value="<?php echo $pub_vallas; ?>">
                                                            </div>
                                                        </div>
                                                    <!-- /. ------------->
                                                    <!--  --------------->
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="pub_flyers">Flyers ($)</label>
                                                                <input type="number" class="form-control" name="pub_flyers" step="0.001"  value="<?php echo $pub_flyers; ?>">
                                                            </div>
                                                        </div>
                                                    <!-- /. ------------->
                                                    <!--  --------------->
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="pub_otros">Otros ($)</label>
                                                                <input type="number" class="form-control" name="pub_otros" step="0.001"  value="<?php echo $pub_otros; ?>">
                                                            </div>
                                                        </div>
                                                    <!-- /. ------------->
                                                    </div>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            <!-- /. Fin tabla  -->
                            
                            <!-- Tabla  -->
                                <div class="col-12">
                                    <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Otros</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 140px;">
                                        <table class="table table-head-fixed text-nowrap">

                                            <tbody>
                                                    <div class="row" style="padding: 15px;">
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="alquiler_galpon">Alquiler del Galpón ($)</label>
                                                                    <input type="number" class="form-control" name="alquiler_galpon" step="0.001"  value="<?php echo $alquiler_galpon; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cto_amp">Costo Almacén AMP  ($)</label>
                                                                    <input type="number" class="form-control" name="cto_amp" step="0.001"  value="<?php echo $cto_amp; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                        <!--  --------------->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="cto_apt">Costo Almacén APT ($)</label>
                                                                    <input type="number" class="form-control" name="cto_apt" step="0.001"  value="<?php echo $cto_apt; ?>">
                                                                </div>
                                                            </div>
                                                        <!-- /. ------------->
                                                    </div>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            <!-- /. Fin tabla  -->

                                <!-- /. Div CTA -->
                                <!-- Separador -->
                                <div class="col-md-12">
                                    <hr style="color: #0056b2;" />
                                </div>

                                <?php if ($txtUsuarioTipo="A") {?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-block" name="btn_accion" value="Actualizar">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                            <a href="inicio.php"type="button" class="btn btn-primary btn-block">Cancelar</a>
                                            </div>
                                        </div>
                                    
                                <?php }?>
                                <!-- /. Fin Div CTA -->
                            </div>
                        <!-- /. Fin row  -->
                        </div>
                        <!-- /. Fin Row principal de formulario -->
                    </form>

                        <?php }else{ ?>

                            <?php  if ($mensaje_usuario!=""){ ?>
                                <div class="col-md-12 ">
                                    <?php if($error_accion==1){ ?>
                                        <h3 class="text-center text-success"><?php echo $mensaje_usuario; ?></h3>
                                    <?php }else{ ?>
                                        <h3 class="text-center text-danger"><?php echo $mensaje_usuario; ?></h3>
                                    <?php } ?>    
                                </div>
                                <div class="col-md-12">
                                    <div class="row justify-content-center">
                                        <div class="col-md-2">
                                            <a href="inicio.php"type="button" class="btn btn-primary btn-block">Aceptar</a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="valores.php"type="button" class="btn btn-primary btn-block">regresar</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php } ?>

                </div>

            </div>
        <!-- /. Fin de contenedor de datos -->

    <?php }else{ ?>

        <div class="col-md-12">
            <h3 class="text-center text-danger">NO HAY SIMULACIÓN ACTIVA <?php if ($txtUsuarioTipo=="P") { echo "CONTACTE CON EL ADMINISTRADOR"; }?></h3>
        </div>
        <?php if ($txtUsuarioTipo=="A") { ?>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <a href="simulacion-r.php"type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Crear Simulación</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    <?php } ?>
    <!--/. Fin Verifica si hay simulación activa -->
    </div>
    <!-- /.content-wrapper -->
    
    <?php
        include "modulos/footer.php";
    ?>    

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>

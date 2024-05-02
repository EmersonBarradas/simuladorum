
<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php

        include "modulos/amp-cto.php";
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
                <h1 class="m-0 text-dark">ALMACÉN | Costos AMP (AMP-CTO)</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="amp.php">AMP</a></li>
                <li class="breadcrumb-item active">AMP-CTO</li>
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

    <!-- Inicio del contenedor de datos -->
        <div class="container" style="padding: 0px 20px 50px 20px;">
            <div class="row justify-content-center">
                <!-- Verifica si se debe procesar -->
                <?php if ($procesar=="ok") {  ?>
                    <!-- Imprimer mensaje de alerta o error en procesar [calcular, guardar]  -->
                    <?php  if ($mensaje_usuario!=""){ ?>
                        <div class="col-12 ">
                            <?php if($error_accion==1){ ?>
                                <h3 class="text-center text-success"><?php echo $mensaje_usuario; ?></h3>
                            <?php }else{ ?>
                                <h3 class="text-center text-danger"><?php echo $mensaje_usuario; ?></h3>
                            <?php } ?>    
                        </div>
                    <?php } ?>
                    <!-- /. Fin del mensaje -----------------------------------------------  -->

                    <!-- Div empresa -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="txtEmpresa">Empresa</label>
                            <select class="form-control" name="txtEmpresa">
                                <?php foreach ($listado_empresa as $empresa) { ?>
                                <option value="<?php echo $empresa['nro']; ?>"> <?php echo $empresa['nombre']; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <!-- /. Fin div empresa -->
                    
                    <!-- div Vacío -->
                    <div class="col-md-8">
                        
                    </div>
                    <!-- div Vacío -->
                    
                    <!-- Tabla de leche cruda -->
                    <div class="col-12">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><b>Costos Leche Cruda (LC)</b></h3>

                            <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="buscar">

                                <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Ciclo</th>
                                    <th>Tipo</th>
                                    <th>Fecha</th>
                                    <th>Cantidad</th>
                                    <th>Cto/Ltr</th>
                                    <th>Cto. Total </th>
                                    <th>Cant. Acumulada </th>
                                    <th>Cto. Acumulado</th>
                                    <th>Cto. Promedio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listado_AMP_CTO as $Amp_cto) { ?>
                                    <tr>
                                        <td> <?php echo $Amp_cto['ciclo']; ?></td>
                                        <td> <?php echo $Amp_cto['tipo_mov_lc']; ?></td>
                                        <td> <?php echo $Amp_cto['fecha']; ?></td>
                                        <td> <?php echo $Amp_cto['cant_lc']; ?></td>
                                        <td> <?php echo $Amp_cto['monto_cto_ltr_lc']; ?></td>
                                        <td> <?php echo $Amp_cto['monto_cto_total_lc']; ?></td>
                                        <td> <?php echo $Amp_cto['cant_acum_lc']; ?></td>
                                        <td> <?php echo $Amp_cto['monto_cto_acum_lc']; ?></td>
                                        <td> <?php echo $Amp_cto['monto_cto_promedio_lc']; ?></td>
                                        <td>
                                            <form action="amp-cto-c.php" method="post">
                                                <input type="hidden" name="txtNro" value="<?php echo $compras_subasta['nro'];?>">
                                                <input type="hidden" name="txtId" value="<?php echo $compras_subasta['id'];?>">
                                                <input type="hidden" name="txtEmpresa" value="<?php echo $compras_subasta['empresa'];?>">
                                                <input type="hidden" name="txtCiclo" value="<?php echo $compras_subasta['ciclo'];?>">                        
                                                <input type="hidden" name="txtFecha_ped" value="<?php echo $compras_subasta['fecha_ped'];?>">
                                                <input type="hidden" name="txtFecha_recep" value="<?php echo $compras_subasta['fecha_recep'];?>">
                                                <input type="hidden" name="txtMonto_precio_lc" value="<?php echo $compras_subasta['monto_precio_lc'];?>">
                                                <input type="hidden" name="txtCant_contratos_lc" value="<?php echo $compras_subasta['cant_contratos_lc'];?>">
                                                <input type="hidden" name="txtCant_litros_lc" value="<?php echo $compras_subasta['cant_litros_lc'];?>">
                                                <input type="hidden" name="txtMonto_total_usb_lc" value="<?php echo $compras_subasta['monto_total_usb_lc'];?>">
                                                <input type="hidden" name="txtEstatus" value="<?php echo $compras_subasta['estatus'];?>">
                                                <input type="hidden" name="txtUsuario_reg" value="<?php echo $compras_subasta['usuario_reg'];?>">
                                                <input type="hidden" name="txtProducto" value="LC">

                                                <input class="btn btn-outline-primary btn-sm" type="submit" name="btn_accion" value="C">
                                                <!-- <input class="btn btn-primary" type="submit" name="btn_accion" value="E" readonly> -->
                                                <input class="btn btn-outline-primary btn-sm" type="submit" name="btn_accion" value="X">
                                                <!-- <a href="#"><i class="fas fa-file"></i></a>&nbsp;
                                                <a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;
                                                <a href="#"><i class="fas fa-trash-alt"></i></a> -->
                                            </form>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /. Tabla de leche cruda -->
                    <!-- Tabla de aditivo -->
                    <div class="col-12">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><b>Listado Aditivo (AD)</b></h3>

                            <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="buscar">

                                <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Ciclo</th>
                                    <th>Tipo</th>
                                    <th>Fecha</th>
                                    <th>Cantidad</th>
                                    <th>Cto/Ltr</th>
                                    <th>Cto. Total </th>
                                    <th>Cant. Acumulada </th>
                                    <th>Cto. Acumulado</th>
                                    <th>Cto. Promedio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($listado_AMP_CTO as $Amp_cto) { ?>
                                    <tr>
                                        <td> <?php echo $Amp_cto['ciclo']; ?></td>
                                        <td> <?php echo $Amp_cto['tipo_mov_ad']; ?></td>
                                        <td> <?php echo $Amp_cto['fecha']; ?></td>
                                        <td> <?php echo $Amp_cto['cant_ad']; ?></td>
                                        <td> <?php echo $Amp_cto['monto_cto_ltr_ad']; ?></td>
                                        <td> <?php echo $Amp_cto['monto_cto_total_ad']; ?></td>
                                        <td> <?php echo $Amp_cto['cant_acum_ad']; ?></td>
                                        <td> <?php echo $Amp_cto['monto_cto_acum_ad']; ?></td>
                                        <td> <?php echo $Amp_cto['monto_cto_promedio_ad']; ?></td>
                                        <td>
                                            <form action="amp-cto-c.php" method="post">
                                                <input type="hidden" name="txtNro" value="<?php echo $compras_subasta['nro'];?>">
                                                <input type="hidden" name="txtId" value="<?php echo $compras_subasta['id'];?>">
                                                <input type="hidden" name="txtEmpresa" value="<?php echo $compras_subasta['empresa'];?>">
                                                <input type="hidden" name="txtCiclo" value="<?php echo $compras_subasta['ciclo'];?>">                        
                                                <input type="hidden" name="txtFecha_ped" value="<?php echo $compras_subasta['fecha_ped'];?>">
                                                <input type="hidden" name="txtFecha_recep" value="<?php echo $compras_subasta['fecha_recep'];?>">
                                                <input type="hidden" name="txtMonto_precio_lc" value="<?php echo $compras_subasta['monto_precio_lc'];?>">
                                                <input type="hidden" name="txtCant_contratos_lc" value="<?php echo $compras_subasta['cant_contratos_lc'];?>">
                                                <input type="hidden" name="txtCant_litros_lc" value="<?php echo $compras_subasta['cant_litros_lc'];?>">
                                                <input type="hidden" name="txtMonto_total_usb_lc" value="<?php echo $compras_subasta['monto_total_usb_lc'];?>">
                                                <input type="hidden" name="txtEstatus" value="<?php echo $compras_subasta['estatus'];?>">
                                                <input type="hidden" name="txtUsuario_reg" value="<?php echo $compras_subasta['usuario_reg'];?>">
                                                <input type="hidden" name="txtProducto" value="LC">

                                                <input class="btn btn-outline-primary btn-sm" type="submit" name="btn_accion" value="C">
                                                <!-- <input class="btn btn-primary" type="submit" name="btn_accion" value="E" readonly> -->
                                                <input class="btn btn-outline-primary btn-sm" type="submit" name="btn_accion" value="X">
                                                <!-- <a href="#"><i class="fas fa-file"></i></a>&nbsp;
                                                <a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;
                                                <a href="#"><i class="fas fa-trash-alt"></i></a> -->
                                            </form>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /. Tabla de Aditivo -->

                <!-- /. Instrucciones si no se va a procesar -->
                <?php }else{ ?>

                        <!-- Imprimer mensaje de alerta o error al final de procesar o antes de procesar  -->
                        <?php  if ($mensaje_usuario!=""){ ?>
                            <div class="col-md-12 ">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <?php if($error_accion==1){ ?>
                                            <h3 class="text-center text-success"><?php echo $mensaje_usuario; ?></h3>
                                        <?php }else{ ?>
                                            <h3 class="text-center text-danger"><?php echo $mensaje_usuario; ?></h3>
                                        <?php } ?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="row justify-content-center">
                                            <?php if($movimientos=="SI"){ ?>
                                                <div class="col-md-3">
                                                    <a href="subasta-r.php"type="button" class="btn btn-primary btn-block"><i class="fas fa-plus-circle"></i> Subasta</a>
                                                </div>
                                            <?php } ?>
                                            <div class="col-md-3">
                                                <a href="inicio.php"type="button" class="btn btn-primary btn-block">Aceptar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- fin de imprimir mensaje ---------------------------------------------------  -->

                <?php } ?>
            </div>
            <!-- /. fin row del contenedor  -->

        </div>
    <!-- /. Fin de contenedor de datos -->

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

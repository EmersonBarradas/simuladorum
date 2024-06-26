<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php
        include "modulos/subasta.php";
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
                <h1 class="m-0 text-dark">Subasta</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Subasta</a></li>
                <li class="breadcrumb-item active">Subasta</li>
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
                    <!-- Verifica si se debe procesar -->
                    <?php if ($procesar=="ok") {  ?>
                        <!-- Imprimer mensaje de alerta o error en procesar [calcular, guardar]  -->
                        <?php  if ($mensaje_usuario!=""){ ?>
                            <div class="col-12 ">
                                <?php if($error_accion==1){ ?>
                                    <h3 class="text-center text-success"><?php echo $mensaje_usuario; ?></h3>
                                <?php }else{ ?>
                                    <h3 class="text-center text-danger"><?php echo "ERROR 4: ".$mensaje_usuario; ?></h3>
                                <?php } ?>    
                            </div>
                        <?php } ?>
                        <!-- /. Fin del mensaje -----------------------------------------------  -->
                        
                        <!-- Div Opciones generales -----------------------------------------------  -->
                        <div class="col-md-6" >
                            <?php if ($txtUsuarioTipo!="A") {?>
                                <a href="subasta-r.php"type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
                                <!-- <a href="subasta-a.php"type="button" class="btn btn-primary"><i class="fa fa-reply" aria-hidden="true"></i> Ajuste</a> -->
                            <?php }?>
                            <button type="button" class="btn btn-primary"><i class="fas fa-share-alt"></i></button>
                            <button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button>
                            <!-- Botón que activa la ventana modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-question" aria-hidden="true"></i></button>
                            <!-- Contenedor de la ventana modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Características de la Subasta</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    <li>Las compras se llevarán a cabo mediante subasta.</li>
                                                    <li>La subasta consta de XX rondas.</li>
                                                    <li>La oferta de Leche y Aditivos es limitada e impactada por eventos externos.</li>
                                                    <li>Las compras se llevarán a cabo mediante subasta.</li>
                                                    <li>En cada ronda se indicará un precio y cada participante fijará una cantidad expresada en números de contratos, que será asignada a la mejor oferta.</li>
                                                    <li>Se acabará la oferta cuando finalicen las rondas o cuando se acabe el inventario.</li>
                                                    <li>La adquisión de la materia prima es por contrato.  Cada contrato para la Leche Cruda equivale a 5.000 Litros y de 3.000 Litros para los aditivos.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            <!-- /. Fin de ventana modal -->
                            
                        </div>

                        <div class="col-md-6">

                        </div>
                        <!-- /. Fin Div Opciones generales -----------------------------------------------  -->
                                        
                        <!-- Div Empresa -----------------------------------------------  -->
                        <div class="col-md-4" style="padding-top: 20px;">
                            <div class="form-group">
                                <label for="txtEmpresa">Empresa</label>
                                <select class="form-control" name="txtEmpresa">
                                    <?php foreach ($listado_empresa as $empresa) { ?>
                                    <option value="<?php echo $empresa['nro']; ?>"> <?php echo $empresa['nombre']; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- /. Div Empresa -----------------------------------------------  -->

                        <!-- Div Vacio -->
                        <div class="col md-8">

                        </div>
                        <!-- Div Vacio -->
                        
                    <!-- Div mensaje si no hay movimeintos -->
                    <?php if ($SubastaMovimientos=="NO") {?>
                        <div class="col-md-12" style="padding-top: 20px;">
                            <div class="">
                                <h4 class="text-center text-danger"> <?php echo $Mensaje_Mov;?> </h4>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Div mensaje si no hay movimeintos -->


                    <?php if ($SubastaMovimientos=="SI") {?>
                        <!-- Tabla Leche Cruda -->
                            <div class="col-12">
                                <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Listado de Leche Cruda (LC)</b></h3>

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
                                        <th>Fecha Pedido</th>
                                        <th>Fecha Recepción</th>
                                        <th>Precio LC</th>
                                        <th>Cant. Contratos</th>
                                        <th>Cantidad LC (Lts)</th>
                                        <th>Total LC ($)</th>
                                        <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listado_compras_subasta as $compras_subasta) { ?>
                                            <tr>
                                                <td> <?php echo $compras_subasta['ciclo']; ?></td>
                                                <td> <?php echo $compras_subasta['fecha_ped']; ?></td>
                                                <td> <?php echo $compras_subasta['fecha_recep']; ?></td>
                                                <td> <?php echo $compras_subasta['monto_precio_lc']; ?></td>
                                                <td> <?php echo $compras_subasta['cant_contratos_lc']; ?></td>
                                                <td> <?php echo $compras_subasta['cant_litros_lc']; ?></td>
                                                <td> <?php echo $compras_subasta['monto_total_usb_lc']; ?></td>
                                                <td>
                                                    <form action="subasta-c.php" method="post">
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
                                                        <!-- <input class="btn btn-outline-primary btn-sm" type="submit" name="btn_accion" value="X"> -->
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
                        <!-- /. Fin tabla Leche Cruda -->

                        <!-- Tabla Aditivo -->
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
                                        <th>Precio AD</th>
                                        <th>Fecha Pedido</th>
                                        <th>Fecha Recepción</th>
                                        <th>Nro. Contratos</th>
                                        <th>Cantidad AD (Lts)</th>
                                        <th>Total AD ($)</th>
                                        <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listado_compras_subasta as $compras_subasta) { ?>
                                            <tr>
                                                <td> <?php echo $compras_subasta['ciclo']; ?></td>
                                                <td> <?php echo $compras_subasta['monto_precio_ad']; ?></td>
                                                <td> <?php echo $compras_subasta['fecha_ped']; ?></td>
                                                <td> <?php echo $compras_subasta['fecha_recep']; ?></td>
                                                <td> <?php echo $compras_subasta['cant_contratos_ad']; ?></td>
                                                <td> <?php echo $compras_subasta['cant_litros_ad']; ?></td>
                                                <td> <?php echo $compras_subasta['monto_total_usb_ad']; ?></td>
                                                <td>
                                                    <form action="subasta-c.php" method="post">
                                                        <input type="hidden" name="txtNro" value="<?php echo $compras_subasta['nro'];?>">
                                                        <input type="hidden" name="txtId" value="<?php echo $compras_subasta['id'];?>">
                                                        <input type="hidden" name="txtEmpresa" value="<?php echo $compras_subasta['empresa'];?>">
                                                        <input type="hidden" name="txtCiclo" value="<?php echo $compras_subasta['ciclo'];?>">
                                                        <input type="hidden" name="txtFecha_ped" value="<?php echo $compras_subasta['fecha_ped'];?>">
                                                        <input type="hidden" name="txtFecha_recep" value="<?php echo $compras_subasta['fecha_recep'];?>">
                                                        <input type="hidden" name="txtMonto_precio_ad" value="<?php echo $compras_subasta['monto_precio_ad'];?>">
                                                        <input type="hidden" name="txtCant_contratos_ad" value="<?php echo $compras_subasta['cant_contratos_ad'];?>">
                                                        <input type="hidden" name="txtCant_litros_ad" value="<?php echo $compras_subasta['cant_litros_ad'];?>">
                                                        <input type="hidden" name="txtMonto_total_usb_ad" value="<?php echo $compras_subasta['monto_total_usb_ad'];?>">
                                                        <input type="hidden" name="txtEstatus" value="<?php echo $compras_subasta['estatus'];?>">
                                                        <input type="hidden" name="txtUsuario_reg" value="<?php echo $compras_subasta['usuario_reg'];?>">
                                                        <input type="hidden" name="txtProducto" value="AD">

                                                        <input class="btn btn-outline-primary btn-sm" type="submit" name="btn_accion" value="C">
                                                        <!-- <input class="btn btn-primary" type="submit" name="btn_accion" value="E"> -->
                                                        <!-- <input class="btn btn-primary" type="submit" name="btn_accion" value="X"> -->
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
                        <!-- /. Fin Tabla Aditivo -->
                    <?php  }?>

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
                                                <?php if($error_accion==2) { ?>
                                                    <div class="col-md-4">
                                                        <a href="entorno.php"type="button" class="btn btn-primary btn-block">Entorno</a>
                                                    </div>
                                                <?php }else { ?>
                                                    <div class="col-md-4">
                                                        <a href="subasta-r.php"type="button" class="btn btn-primary btn-block"><i class="fas fa-plus-circle"></i> Subasta / Compra</a>
                                                    </div>
                                                <?php } ?>
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

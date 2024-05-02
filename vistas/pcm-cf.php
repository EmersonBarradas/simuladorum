<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php

        include "modulos/pcm-cf.php";
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
                <h1 class="m-0 text-dark">Cálculo del Costo de Fabricación</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="pcm.php">PCM</a></li>
                <li class="breadcrumb-item active">Costo de Fabricación</li>
                </ol>
            </div><!-- /.col -->
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
                                <h3 class="text-center text-danger"><?php echo "ERROR 4: ".$mensaje_usuario; ?></h3>
                            <?php } ?>    
                        </div>
                    <?php } ?>
                    <!-- /. Fin del mensaje -----------------------------------------------  -->

                    <!-- Inicio Div Empresa-->
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
                    <!-- /. Fin inicio Div Empresa-->

                        <div class="col-md-8">

                        </div>
                    
                    <!-- Tabla de movimientos -->
                        <div class="col-12">
                            <div class="card card-primary   ">
                            <div class="card-header">
                                <h3 class="card-title"><b>Costo de Fabricación</b></h3>

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
                            <div class="card-body table-responsive p-0 text-right" style="height: 300px;">
                                <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="text-left">Detalle</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">Alquiler Galpón 2.800 m2 USB 8,2 por m2</td>
                                        <td><?php echo $AlquilerGalpon;?></td>
                                        <td><?php echo $AlquilerGalpon;?></td>
                                        <td><?php echo $AlquilerGalpon;?></td>
                                        <td><?php echo $AlquilerGalpon;?></td>
                                        <td><?php echo $AlquilerGalpon;?></td>
                                        <td><?php echo $AlquilerGalpon;?></td>
                                        <td><?php echo $AlquilerGalpon;?></td>
                                        <td><?php echo $AlquilerGalpon;?></td>
                                        <td><?php echo $AlquilerGalpon;?></td>
                                        <td><?php echo $AlquilerGalpon;?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Costos de almacén MP (0,025 por Lt. Comprado)</td>
                                        <td><?php echo $cant_cto_alm_c1;?></td>
                                        <td><?php echo $cant_cto_alm_c2;?></td>
                                        <td><?php echo $cant_cto_alm_c3;?></td>
                                        <td><?php echo $cant_cto_alm_c4;?></td>
                                        <td><?php echo $cant_cto_alm_c5;?></td>
                                        <td><?php echo $cant_cto_alm_c6;?></td>
                                        <td><?php echo $cant_cto_alm_c7;?></td>
                                        <td><?php echo $cant_cto_alm_c8;?></td>
                                        <td><?php echo $cant_cto_alm_c9;?></td>
                                        <td><?php echo $cant_cto_alm_c10;?></td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="text-left">Costos de almacén de PT. (0,15 por Kg producido)</td>
                                        <td><?php echo $cant_cto_almpt_c1;?></td> 
                                        <td><?php echo $cant_cto_almpt_c2;?></td>
                                        <td><?php echo $cant_cto_almpt_c3;?></td>
                                        <td><?php echo $cant_cto_almpt_c4;?></td>
                                        <td><?php echo $cant_cto_almpt_c5;?></td>
                                        <td><?php echo $cant_cto_almpt_c6;?></td>
                                        <td><?php echo $cant_cto_almpt_c7;?></td>
                                        <td><?php echo $cant_cto_almpt_c8;?></td>
                                        <td><?php echo $cant_cto_almpt_c9;?></td>
                                        <td><?php echo $cant_cto_almpt_c10;?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Costos de Transporte</td>
                                        <td><?php echo $cant_ctoT_c1;?></td>
                                        <td><?php echo $cant_ctoT_c2;?></td> 
                                        <td><?php echo $cant_ctoT_c3;?></td> 
                                        <td><?php echo $cant_ctoT_c4;?></td> 
                                        <td><?php echo $cant_ctoT_c5;?></td> 
                                        <td><?php echo $cant_ctoT_c6;?></td> 
                                        <td><?php echo $cant_ctoT_c7;?></td> 
                                        <td><?php echo $cant_ctoT_c8;?></td> 
                                        <td><?php echo $cant_ctoT_c9;?></td> 
                                        <td><?php echo $cant_ctoT_c10;?></td> 
                                    </tr>
                                    <tr>
                                        <td><b>Totales</b></td>
                                        <td><?php echo $cant_total_c1;?></td>
                                        <td><?php echo $cant_total_c2;?></td>
                                        <td><?php echo $cant_total_c3;?></td>
                                        <td><?php echo $cant_total_c4;?></td>
                                        <td><?php echo $cant_total_c5;?></td>
                                        <td><?php echo $cant_total_c6;?></td>
                                        <td><?php echo $cant_total_c7;?></td>
                                        <td><?php echo $cant_total_c8;?></td>
                                        <td><?php echo $cant_total_c9;?></td>
                                        <td><?php echo $cant_total_c10;?></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    <!-- /. Fin tabla separador -->

            <!-- Separador -->
            <div class="row" style="padding: 5px 0 5px 0;">
                <div class="col-md-12">
                    <hr style="color: #0056b2;" />
                </div>
            </div>
            <!-- /. Fin separador -->

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
                                            <div class="col-md-3">
                                                <a href="subasta-r.php"type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
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

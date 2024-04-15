<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php
        include "modulos/amp.php";
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
                <h1 class="m-0 text-dark">Almacén de Materia Prima (AMP)</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="amp.php">AMP</a></li>
                <li class="breadcrumb-item active">AMP</li>
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
        <div class="container" style="padding: 0px 20px 50px 20px;">
            <!-- Cabecera Tabla Leche Cruda -->
            <div class="row justify-content-left">
                <div class="col-md-12">
                    <h3>Almacén Leche Cruda (LC)</h3>
                </div>
                <div class="col-md-6" style="padding: 10px 0px 10px 10px;">
                    <a href="subasta-r.php"type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
                    <button type="button" class="btn btn-primary"><i class="fas fa-share-alt"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button>
                </div>
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-3">
                    <div class="form-group" style="padding-top: 20px;">
                        <label for="txtEmpresa">Empresa</label>
                        <input type="text" class="form-control" name="txtEmpresa" placeholder="" value="<?php echo $txtEmpresa; ?>">
                    </div>
                </div>
                <div class="col-md-3" style="padding-top: 20px;">
                    <div class="form-group">
                        <label for="txtCant_capmax_lc">Capacidad Máxima LC</label>
                        <input type="text" class="form-control" name="txtCant_capmax_lc" placeholder="" value="<?php echo $txtCant_capmax_lc; ?>">
                    </div>
                </div>
                <div class="col-md-3" style="padding-top: 20px;">
                    <div class="form-group">
                        <label for="txtCant_existencia_lc">Existencia LC</label>
                        <input type="text" class="form-control"  name="txtCant_existencia_lc" placeholder="" value="<?php echo $txtCant_existencia_lc; ?>">
                    </div>
                </div>
                <div class="col-md-3" style="padding-top: 20px;">
                    <div class="form-group">
                        <label for="txtCant_capdisp_lc">Capacidad Disponible LC</label>
                        <input type="text" class="form-control" name="txtCant_capdisp_lc" placeholder="" value="<?php echo $txtCant_capdisp_lc; ?>">
                    </div>
                </div>

            </div>
            <?php if ($cant_amp_mov<=0){ ?>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <h4><< NO HAY MOVIMIENTOS DE ALMACÉN >></h4>
                    </div>

                </div>
            <?php } else{?>
                <!-- Tabla Leche Cruda -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Movimientos Almacén de Leche Cruda (LC)</b></h3>

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
                                <th>Fecha</th>
                                <th>Tipo</th>
                                <th>Entradas</th>
                                <th>Salidas</th>
                                <th>Total ($)</th>
                                <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php foreach($listado_amp_mov as $amp_mov) { ?>
                                    <tr>
                                        <td><?php echo $amp_mov['ciclo']; ?></td>
                                        <td><?php echo $amp_mov['fecha']; ?></td>
                                        <td><?php echo $amp_mov['tipo_mov_lc']; ?></td>
                                        <td><?php echo $amp_mov['cant_entrada_lc']; ?></td>
                                        <td><?php echo $amp_mov['cant_salida_lc']; ?></td>
                                        <td><?php echo $amp_mov['cant_total_lc']; ?></td>
                                        <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            <?php } ?>

            <!-- Separador -->
            <div class="row" style="padding: 25px 0 25px 0;">
                <div class="col-md-12">
                    <hr style="color: #0056b2;" />
                </div>
            </div>

            <!-- Cabecera Tabla Aditivo -->
            <div class="row justify-content-left">
                <div class="col-md-12">
                    <h3>Almacén Aditivo (AD)</h3>
                </div>
                <div class="col-md-2" style="padding-top: 10px;">
                    <a href="subasta-r.php"type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
                </div>

                <div class="col-md-2" style="padding-top: 10px;">
                    <button type="button" class="btn btn-primary"><i class="fas fa-share-alt"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button>
                </div>
                <div class="col-md-8 style="padding-top: 10px;">

                </div>

                <div class="col-md-3">
                    <div class="txtEmpresa" style="padding-top: 20px;">
                        <label for="texto">Empresa</label>
                        <input type="text" class="form-control" name="txtEmpresa" placeholder="" value="<?php echo $txtEmpresa; ?>">
                    </div>
                </div>
                <div class="col-md-3" style="padding-top: 20px;">
                    <div class="form-group">
                        <label for="txtCant_capmax_ad">Capacidad Máxima LC</label>
                        <input type="text" class="form-control" name="txtCant_capmax_ad" placeholder="" value="<?php echo $txtCant_capmax_ad; ?>">
                    </div>
                </div>
                <div class="col-md-3" style="padding-top: 20px;">
                    <div class="form-group">
                        <label for="txtCant_existencia_ad">Existencia LC</label>
                        <input type="text" class="form-control"  name="txtCant_existencia_ad" placeholder="" value="<?php echo $txtCant_existencia_ad; ?>">
                    </div>
                </div>
                <div class="col-md-3" style="padding-top: 20px;">
                    <div class="form-group">
                        <label for="txtCant_capdisp_ad">Capacidad Disponible LC</label>
                        <input type="text" class="form-control" name="txtCant_capdisp_ad" placeholder="" value="<?php echo $txtCant_capdisp_ad; ?>">
                    </div>
                </div>

            </div>
            <?php if ($cant_amp_mov<=0){ ?>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <h4><< NO HAY MOVIMIENTOS DE ALMACÉN >></h4>
                    </div>

                </div>
            <?php } else{?>
                <!-- Tabla Aditivo -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Movimientos Almacén de Aditivos (AD)</b></h3>

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
                                <th>Fecha</th>
                                <th>Tipo</th>
                                <th>Entradas</th>
                                <th>Salidas</th>
                                <th>Total ($)</th>
                                <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($listado_amp_mov as $amp_mov) { ?>
                                <tr>
                                    <td><?php echo $amp_mov['ciclo']; ?></td>
                                    <td><?php echo $amp_mov['fecha']; ?></td>
                                    <td><?php echo $amp_mov['tipo_mov_ad']; ?></td>
                                    <td><?php echo $amp_mov['cant_entrada_ad']; ?></td>
                                    <td><?php echo $amp_mov['cant_salida_ad']; ?></td>
                                    <td><?php echo $amp_mov['cant_total_ad']; ?></td>
                                    <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            <?php } ?>
        </div>
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

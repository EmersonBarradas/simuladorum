<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php
        include "modulos/ventas.php";
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
                <h1 class="m-0 text-dark">VENTAS</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="ventas.php">Ventas</a></li>
                <li class="breadcrumb-item active">Ventas</li>
                </ol>
            </div><!-- /.col -->
            <div class="col-md-12">
                <hr style="color: #0056b2;" />
            </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        
        <!-- Tienda Armadillo -->
        <div class="container" style="padding: 0px 20px 0px 20px;">
            <!-- Íconos Generales -->
            <div class="row justify-content-left">


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
            </div>

            <!-- Tabla de movimientos -->
            <div class="row" style="padding: 0px 0px 0px 0px;">
                <div class="col-12">
                    <div class="card card-primary text-right">
                    <div class="card-header">
                        <h3 class="card-title"><b>Ventas Armadillo</b></h3>

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
                    <div class="card-body table-responsive p-0" style="height: 280px;">
                        <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Queso</th>
                                <th>Ciclo 1</th>
                                <th>Ciclo 2</th>
                                <th>Ciclo 3</th>
                                <th>Ciclo 4</th>
                                <th>Ciclo 5</th>
                                <th>Ciclo 6</th>
                                <th>Ciclo 7</th>
                                <th>Ciclo 8</th>
                                <th>Ciclo 9</th>
                                <th>Ciclo 10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Queso Duro Blanco </td>
                                <td> <?php echo $cant_total_c1_arm_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_arm_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_arm_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_arm_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_arm_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_arm_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_arm_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_arm_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_arm_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_arm_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                            <tr>
                                <td>Queso Mozarella</td>
                                <td> <?php echo $cant_total_c1_arm_moz; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_arm_moz; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_arm_moz; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_arm_moz; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_arm_moz; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_arm_moz; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_arm_moz; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_arm_moz; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_arm_moz; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_arm_moz; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                            <tr>
                                <td>Queso Gouda</td>
                                <td> <?php echo $cant_total_c1_arm_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_arm_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_arm_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_arm_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_arm_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_arm_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_arm_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_arm_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_arm_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_arm_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                            <tr>
                                <td>Queso Dietético</td>
                                <td> <?php echo $cant_total_c1_arm_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_arm_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_arm_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_arm_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_arm_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_arm_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_arm_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_arm_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_arm_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_arm_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- Separador -->
            <div class="row" style="padding: 5px 0 5px 0;">
                <div class="col-md-12">
                    <hr style="color: #0056b2;" />
                </div>
            </div>
        </div>

        <!-- Tienda San Ferro -->
        <div class="container" style="padding: 0px 20px 0px 20px;">
            <!-- Íconos Generales -->
            <div class="row justify-content-left">
                <!-- Título -->
                <div class="col-md-12">
                    <h3>San Ferro</h3>
                </div> 
               
                <!-- Íconos Generales -->
                <!--
                <div class="col-md-6" style="padding: 10px 0px 10px 10px;">
                    <a href="apt-r.php"type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
                    <button type="button" class="btn btn-primary"><i class="fas fa-share-alt"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button>
                </div>
                -->

                <!-- Variables Globales -->
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
            </div>

            <!-- Tabla de movimientos -->
            <div class="row" style="padding: 0px 0px 0px 0px;">
                <div class="col-12">
                    <div class="card card-primary text-right">
                    <div class="card-header">
                        <h3 class="card-title"><b>Ventas San Ferro</b></h3>

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
                    <div class="card-body table-responsive p-0" style="height: 280px;">
                        <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Queso</th>
                                <th>Ciclo 1</th>
                                <th>Ciclo 2</th>
                                <th>Ciclo 3</th>
                                <th>Ciclo 4</th>
                                <th>Ciclo 5</th>
                                <th>Ciclo 6</th>
                                <th>Ciclo 7</th>
                                <th>Ciclo 8</th>
                                <th>Ciclo 9</th>
                                <th>Ciclo 10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Queso Duro Blanco </td>
                                <td> <?php echo $cant_total_c1_sfi_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_sfi_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_sfi_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_sfi_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_sfi_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_sfi_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_sfi_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_sfi_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_sfi_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_sfi_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                            <tr>
                                <td>Queso Mozarella</td>
                                <td> <?php echo $cant_total_c1_sfi_moz; ?>&nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_sfi_moz; ?>&nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_sfi_moz; ?>&nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_sfi_moz; ?>&nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_sfi_moz; ?>&nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_sfi_moz; ?>&nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_sfi_moz; ?>&nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_sfi_moz; ?>&nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_sfi_moz; ?>&nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_sfi_moz; ?>&nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                            <tr>
                                <td>Queso Gouda</td>
                                <td> <?php echo $cant_total_c1_sfi_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_sfi_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_sfi_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_sfi_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_sfi_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_sfi_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_sfi_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_sfi_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_sfi_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_sfi_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                            <tr>
                                <td>Queso Dietético</td>
                                <td> <?php echo $cant_total_c1_sfi_die; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_sfi_die; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_sfi_die; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_sfi_die; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_sfi_die; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_sfi_die; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_sfi_die; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_sfi_die; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_sfi_die; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_sfi_die; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- Separador -->
            <div class="row" style="padding: 5px 0 5px 0;">
                <div class="col-md-12">
                    <hr style="color: #0056b2;" />
                </div>
            </div>
        </div>

        <!-- Tienda Ciudadela -->
        <div class="container" style="padding: 0px 20px 0px 20px;">
            <!-- Íconos Generales -->
            <div class="row justify-content-left">
                <!-- Título -->
                <div class="col-md-12">
                    <h3>Ciudadela</h3>
                </div> 

                <!-- Variables Globales -->
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
            </div>

            <!-- Tabla de movimientos -->
            <div class="row" style="padding: 0px 0px 0px 0px;">
                <div class="col-12">
                    <div class="card card-primary text-right">
                    <div class="card-header">
                        <h3 class="card-title"><b>Ventas Ciudadela</b></h3>

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
                    <div class="card-body table-responsive p-0" style="height: 280px;">
                        <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Queso</th>
                                <th>Ciclo 1</th>
                                <th>Ciclo 2</th>
                                <th>Ciclo 3</th>
                                <th>Ciclo 4</th>
                                <th>Ciclo 5</th>
                                <th>Ciclo 6</th>
                                <th>Ciclo 7</th>
                                <th>Ciclo 8</th>
                                <th>Ciclo 9</th>
                                <th>Ciclo 10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Queso Duro Blanco </td>
                                <td> <?php echo $cant_total_c1_ciu_dub; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_ciu_dub; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_ciu_dub; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_ciu_dub; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_ciu_dub; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_ciu_dub; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_ciu_dub; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_ciu_dub; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_ciu_dub; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_ciu_dub; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                            <tr>
                                <td>Queso Mozarella</td>
                                <td> <?php echo $cant_total_c1_ciu_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_ciu_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_ciu_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_ciu_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_ciu_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_ciu_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_ciu_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_ciu_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_ciu_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_ciu_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                            
                            </tr>
                            <tr>
                                <td>Queso Gouda</td>
                                <td> <?php echo $cant_total_c1_ciu_gou; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_ciu_gou; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_ciu_gou; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_ciu_gou; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_ciu_gou; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_ciu_gou; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_ciu_gou; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_ciu_gou; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_ciu_gou; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_ciu_gou; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                            <tr>
                                <td>Queso Dietético</td>
                                <td> <?php echo $cant_total_c1_ciu_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_ciu_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_ciu_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_ciu_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_ciu_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_ciu_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_ciu_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_ciu_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_ciu_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_ciu_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- Separador -->
            <div class="row" style="padding: 5px 0 5px 0;">
                <div class="col-md-12">
                    <hr style="color: #0056b2;" />
                </div>
            </div>
        </div>

        <!-- Tienda Los Santos -->
        <div class="container" style="padding: 0px 20px 0px 20px;">
            <!-- Íconos Generales -->
            <div class="row justify-content-left">
                <!-- Título -->
                <div class="col-md-12">
                    <h3>Los Santos</h3>
                </div> 
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

            </div>

            <!-- Tabla de movimientos Los Santos -->
            <div class="row" style="padding: 0px 0px 0px 0px;">
                <div class="col-12">
                    <div class="card card-primary text-right">
                    <div class="card-header">
                        <h3 class="card-title"><b>Ventas Los Santos</b></h3>

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
                    <div class="card-body table-responsive p-0" style="height: 280px;">
                        <table class="table table-head-fixed text-nowrap ">
                        <thead>
                            <tr>
                                <th>Queso</th>
                                <th>Ciclo 1</th>
                                <th>Ciclo 2</th>
                                <th>Ciclo 3</th>
                                <th>Ciclo 4</th>
                                <th>Ciclo 5</th>
                                <th>Ciclo 6</th>
                                <th>Ciclo 7</th>
                                <th>Ciclo 8</th>
                                <th>Ciclo 9</th>
                                <th>Ciclo 10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Queso Duro Blanco </td>
                                <td> <?php echo $cant_total_c1_lsa_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"> </td>
                                <td> <?php echo $cant_total_c2_lsa_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"> </td>
                                <td> <?php echo $cant_total_c3_lsa_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"> </td>
                                <td> <?php echo $cant_total_c4_lsa_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"> </td>
                                <td> <?php echo $cant_total_c5_lsa_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"> </td>
                                <td> <?php echo $cant_total_c6_lsa_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"> </td>
                                <td> <?php echo $cant_total_c7_lsa_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"> </td>
                                <td> <?php echo $cant_total_c8_lsa_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"> </td>
                                <td> <?php echo $cant_total_c9_lsa_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"> </td>
                                <td> <?php echo $cant_total_c10_lsa_dub; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"> </td>

                            </tr>
                            <tr>
                                <td>Queso Mozarella</td>
                                <td> <?php echo $cant_total_c1_lsa_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_lsa_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_lsa_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_lsa_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_lsa_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_lsa_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_lsa_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_lsa_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_lsa_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_lsa_moz; ?>  &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                            <tr>
                                <td>Queso Gouda</td>
                                <td> <?php echo $cant_total_c1_lsa_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_lsa_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_lsa_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_lsa_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_lsa_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_lsa_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_lsa_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_lsa_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_lsa_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_lsa_gou; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                            </tr>
                            <tr>
                                <td>Queso Dietético</td>
                                <td> <?php echo $cant_total_c1_lsa_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c2_lsa_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c3_lsa_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c4_lsa_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c5_lsa_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c6_lsa_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c7_lsa_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c8_lsa_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c9_lsa_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>
                                <td> <?php echo $cant_total_c10_lsa_die; ?> &nbsp; <input class="btn btn-outline-primary btn-sm" type="submit" name="btnaccion" value="C"></td>

                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- Separador -->
            <div class="row" style="padding: 5px 0 5px 0;">
                <div class="col-md-12">
                    <hr style="color: #0056b2;" />
                </div>
            </div>
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

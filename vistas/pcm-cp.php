<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php

        include "modulos/pcm-cp.php";
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
                <h1 class="m-0 text-dark">Cálculo del Costo de Producción</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="pcm.php">PCM</a></li>
                <li class="breadcrumb-item active">Costo de Producción</li>
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

                <!-- Costos de producción -->
                    <div class="col-12">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><b>Costo de Producción ($)</b></h3>

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
                        <div class="card-body table-responsive p-0 text-right" style="height: 560px;">
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
                                    <td class="text-left">Inventario Inicial</td>
                                    <td><?php echo $cant_ii_c1;?></td>
                                    <td><?php echo $cant_ii_c2;?></td>
                                    <td><?php echo $cant_ii_c3;?></td>
                                    <td><?php echo $cant_ii_c4;?></td>
                                    <td><?php echo $cant_ii_c5;?></td>
                                    <td><?php echo $cant_ii_c6;?></td>
                                    <td><?php echo $cant_ii_c7?></td>
                                    <td><?php echo $cant_ii_c8;?></td>
                                    <td><?php echo $cant_ii_c9;?></td>
                                    <td><?php echo $cant_ii_c10;?></td>

                                </tr>
                                <tr>
                                    <td class="text-left">Compras</td>
                                    <td><?php echo number_format($cant_compras_c1,2,".","");?></td>
                                    <td><?php echo number_format($cant_compras_c2,2,".","");?></td>
                                    <td><?php echo number_format($cant_compras_c3,2,".","");?></td>
                                    <td><?php echo number_format($cant_compras_c4,2,".","");?></td>
                                    <td><?php echo number_format($cant_compras_c5,2,".","");?></td>
                                    <td><?php echo number_format($cant_compras_c6,2,".","");?></td>
                                    <td><?php echo number_format($cant_compras_c7,2,".","");?></td>
                                    <td><?php echo number_format($cant_compras_c8,2,".","");?></td>
                                    <td><?php echo number_format($cant_compras_c9,2,".","");?></td>
                                    <td><?php echo number_format($cant_compras_c10,2,".","");?></td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-left">Total de materias primas</td>
                                    <td><?php echo number_format($cant_ii_c1+$cant_compras_c1,2,".","");?></td>
                                    <td><?php echo number_format($cant_ii_c2+$cant_compras_c2,2,".","");?></td>
                                    <td><?php echo number_format($cant_ii_c3+$cant_compras_c3,2,".","");?></td>
                                    <td><?php echo number_format($cant_ii_c4+$cant_compras_c4,2,".","");?></td>
                                    <td><?php echo number_format($cant_ii_c5+$cant_compras_c5,2,".","");?></td>
                                    <td><?php echo number_format($cant_ii_c6+$cant_compras_c6,2,".","");?></td>
                                    <td><?php echo number_format($cant_ii_c7+$cant_compras_c7,2,".","");?></td>
                                    <td><?php echo number_format($cant_ii_c8+$cant_compras_c8,2,".","");?></td>
                                    <td><?php echo number_format($cant_ii_c9+$cant_compras_c9,2,".","");?></td>
                                    <td><?php echo number_format($cant_ii_c10+$cant_compras_c10,2,".","");?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Inventario final de materias primas</td>
                                    <td><?php echo number_format($cant_cto_amp_c1,2,".","");?></td>
                                    <td><?php echo number_format($cant_cto_amp_c2,2,".","");?></td>
                                    <td><?php echo number_format($cant_cto_amp_c3,2,".","");?></td>
                                    <td><?php echo number_format($cant_cto_amp_c4,2,".","");?></td>
                                    <td><?php echo number_format($cant_cto_amp_c5,2,".","");?></td>
                                    <td><?php echo number_format($cant_cto_amp_c6,2,".","");?></td>
                                    <td><?php echo number_format($cant_cto_amp_c7,2,".","");?></td>
                                    <td><?php echo number_format($cant_cto_amp_c8,2,".","");?></td>
                                    <td><?php echo number_format($cant_cto_amp_c9,2,".","");?></td>
                                    <td><?php echo number_format($cant_cto_amp_c10,2,".","");?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Costos de materias primas</td>
                                    <td><?php echo number_format(($cant_ii_c1+$cant_compras_c1)-$cant_cto_amp_c1,2,".","");?></td>
                                    <td><?php echo number_format(($cant_ii_c2+$cant_compras_c2)-$cant_cto_amp_c2,2,".","");?></td>
                                    <td><?php echo number_format(($cant_ii_c3+$cant_compras_c3)-$cant_cto_amp_c3,2,".","");?></td>
                                    <td><?php echo number_format(($cant_ii_c4+$cant_compras_c4)-$cant_cto_amp_c4,2,".","");?></td>
                                    <td><?php echo number_format(($cant_ii_c5+$cant_compras_c5)-$cant_cto_amp_c5,2,".","");?></td>
                                    <td><?php echo number_format(($cant_ii_c6+$cant_compras_c6)-$cant_cto_amp_c6,2,".","");?></td>
                                    <td><?php echo number_format(($cant_ii_c7+$cant_compras_c7)-$cant_cto_amp_c7,2,".","");?></td>
                                    <td><?php echo number_format(($cant_ii_c8+$cant_compras_c8)-$cant_cto_amp_c8,2,".","");?></td>
                                    <td><?php echo number_format(($cant_ii_c9+$cant_compras_c9)-$cant_cto_amp_c9,2,".","");?></td>
                                    <td><?php echo number_format(($cant_ii_c10+$cant_compras_c10)-$cant_cto_amp_c10,2,".","");?></td>

                                </tr>
                                <tr>
                                    <td class="text-left">Mano de obra directa</td>
                                    <td><?php echo number_format(($cant_pcmmod_c1),2,".","");?></td> 
                                    <td><?php echo number_format(($cant_pcmmod_c2),2,".","");?></td> 
                                    <td><?php echo number_format(($cant_pcmmod_c3),2,".","");?></td> 
                                    <td><?php echo number_format(($cant_pcmmod_c4),2,".","");?></td> 
                                    <td><?php echo number_format(($cant_pcmmod_c5),2,".","");?></td> 
                                    <td><?php echo number_format(($cant_pcmmod_c6),2,".","");?></td> 
                                    <td><?php echo number_format(($cant_pcmmod_c7),2,".","");?></td> 
                                    <td><?php echo number_format(($cant_pcmmod_c8),2,".","");?></td> 
                                    <td><?php echo number_format(($cant_pcmmod_c9),2,".","");?></td> 
                                    <td><?php echo number_format(($cant_pcmmod_c10),2,".","");?></td> 

                                </tr>
                                <tr>
                                    <td class="text-left">Costos de fabricación</td>
                                    <td><?php echo number_format(($cant_total_c1),2,".","");?></td>
                                    <td><?php echo number_format(($cant_total_c2),2,".","");?></td>
                                    <td><?php echo number_format(($cant_total_c3),2,".","");?></td>
                                    <td><?php echo number_format(($cant_total_c4),2,".","");?></td>
                                    <td><?php echo number_format(($cant_total_c5),2,".","");?></td>
                                    <td><?php echo number_format(($cant_total_c6),2,".","");?></td>
                                    <td><?php echo number_format(($cant_total_c7),2,".","");?></td>
                                    <td><?php echo number_format(($cant_total_c8),2,".","");?></td>
                                    <td><?php echo number_format(($cant_total_c9),2,".","");?></td>
                                    <td><?php echo number_format(($cant_total_c10),2,".","");?></td>

                                </tr>
                                <tr>
                                    <td class="text-left"><b>Total costos de Producción</b></td>
                                    <td><b><?php echo number_format(((($cant_ii_c1+$cant_compras_c1)-$cant_cto_amp_c1)+$cant_pcmmod_c1+$cant_total_c1),2,".","");?></b></td>
                                    <td><b><?php echo number_format(((($cant_ii_c2+$cant_compras_c2)-$cant_cto_amp_c2)+$cant_pcmmod_c2+$cant_total_c2),2,".","");?></b></td>
                                    <td><b><?php echo number_format(((($cant_ii_c3+$cant_compras_c3)-$cant_cto_amp_c3)+$cant_pcmmod_c3+$cant_total_c3),2,".","");?></b></td>
                                    <td><b><?php echo number_format(((($cant_ii_c4+$cant_compras_c4)-$cant_cto_amp_c4)+$cant_pcmmod_c4+$cant_total_c4),2,".","");?></b></td>
                                    <td><b><?php echo number_format(((($cant_ii_c5+$cant_compras_c5)-$cant_cto_amp_c5)+$cant_pcmmod_c5+$cant_total_c5),2,".","");?></b></td>
                                    <td><b><?php echo number_format(((($cant_ii_c6+$cant_compras_c6)-$cant_cto_amp_c6)+$cant_pcmmod_c6+$cant_total_c6),2,".","");?></b></td>
                                    <td><b><?php echo number_format(((($cant_ii_c7+$cant_compras_c7)-$cant_cto_amp_c7)+$cant_pcmmod_c7+$cant_total_c7),2,".","");?></b></td>
                                    <td><b><?php echo number_format(((($cant_ii_c8+$cant_compras_c8)-$cant_cto_amp_c8)+$cant_pcmmod_c8+$cant_total_c8),2,".","");?></b></td>
                                    <td><b><?php echo number_format(((($cant_ii_c9+$cant_compras_c9)-$cant_cto_amp_c9)+$cant_pcmmod_c9+$cant_total_c9),2,".","");?></b></td>
                                    <td><b><?php echo number_format(((($cant_ii_c10+$cant_compras_c10)-$cant_cto_amp_c10)+$cant_pcmmod_c10+$cant_total_c10),2,".","");?></b></td>


                                </tr>
                                <tr>
                                    <td class="text-left">Producción semanal (Kg)</td>
                                    <td><?php echo number_format($cant_pcm_c1,2,".","");?></td>
                                    <td><?php echo number_format($cant_pcm_c2,2,".","");?></td>
                                    <td><?php echo number_format($cant_pcm_c3,2,".","");?></td>
                                    <td><?php echo number_format($cant_pcm_c4,2,".","");?></td>
                                    <td><?php echo number_format($cant_pcm_c5,2,".","");?></td>
                                    <td><?php echo number_format($cant_pcm_c6,2,".","");?></td>
                                    <td><?php echo number_format($cant_pcm_c7,2,".","");?></td>
                                    <td><?php echo number_format($cant_pcm_c8,2,".","");?></td>
                                    <td><?php echo number_format($cant_pcm_c9,2,".","");?></td>
                                    <td><?php echo number_format($cant_pcm_c10,2,".","");?></td>


                                </tr>
                                <tr>
                                    <td class="text-left"><b>Costos unitarios semanales</b></td>
                                    <td>
                                        <?php 
                                            if($cant_pcm_c1>0) { 
                                                echo number_format(((($cant_ii_c1+$cant_compras_c1)-$cant_cto_amp_c1)+$cant_pcmmod_c1+$cant_total_c1)/$cant_pcm_c1,2,".","");
                                            }else{
                                                echo number_format(0,2,".",""); 
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($cant_pcm_c2>0) { 
                                                echo number_format(((($cant_ii_c2+$cant_compras_c2)-$cant_cto_amp_c2)+$cant_pcmmod_c2+$cant_total_c2)/$cant_pcm_c2,2,".","");
                                            }else{
                                                echo number_format(0,2,".",""); 
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($cant_pcm_c3>0) { 
                                                echo number_format(((($cant_ii_c3+$cant_compras_c3)-$cant_cto_amp_c3)+$cant_pcmmod_c3+$cant_total_c3)/$cant_pcm_c3,2,".","");
                                            }else{
                                                echo number_format(0,2,".",""); 
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($cant_pcm_c4>0) { 
                                                echo number_format(((($cant_ii_c4+$cant_compras_c4)-$cant_cto_amp_c4)+$cant_pcmmod_c4+$cant_total_c4)/$cant_pcm_c4,2,".","");
                                            }else{
                                                echo number_format(0,2,".",""); 
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($cant_pcm_c5>0) { 
                                                echo number_format(((($cant_ii_c5+$cant_compras_c5)-$cant_cto_amp_c5)+$cant_pcmmod_c5+$cant_total_c5)/$cant_pcm_c5,2,".","");
                                            }else{
                                                echo 0.00; 
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($cant_pcm_c6>0) { 
                                                echo number_format(((($cant_ii_c6+$cant_compras_c6)-$cant_cto_amp_c6)+$cant_pcmmod_c6+$cant_total_c6)/$cant_pcm_c6,2,".","");
                                            }else{
                                                echo number_format(0,2,".",""); 
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($cant_pcm_c7>0) { 
                                                echo number_format(((($cant_ii_c7+$cant_compras_c7)-$cant_cto_amp_c7)+$cant_pcmmod_c7+$cant_total_c7)/$cant_pcm_c7,2,".","");
                                            }else{
                                                echo number_format(0,2,".",""); 
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($cant_pcm_c8>0) { 
                                                echo number_format(((($cant_ii_c8+$cant_compras_c8)-$cant_cto_amp_c8)+$cant_pcmmod_c8+$cant_total_c8)/$cant_pcm_c8,2,".","");
                                            }else{
                                                echo number_format(0,2,".",""); 
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($cant_pcm_c9>0) { 
                                                echo number_format(((($cant_ii_c9+$cant_compras_c9)-$cant_cto_amp_c9)+$cant_pcmmod_c9+$cant_total_c9)/$cant_pcm_c9,2,".","");
                                            }else{
                                                echo number_format(0,2,".",""); 
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($cant_pcm_c10>0) { 
                                                echo number_format(((($cant_ii_c10+$cant_compras_c10)-$cant_cto_amp_c10)+$cant_pcmmod_c10+$cant_total_c10)/$cant_pcm_c10,2,".","");
                                            }else{
                                                echo number_format(0,2,".",""); 
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                <!-- /. Fin de costos de producción -->

                <!-- Separador -->
                    <div class="col-md-12">
                        <hr style="color: #0056b2;" />
                    </div>
                <!-- /. fin separador -->

                <!-- Costos Unitarios -->
                <div class="col-12">
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Costos Unitarios Individuales</b></h3>

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
                    <div class="card-body table-responsive p-0 text-right" style="height: 260px;">
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
                                <td class="text-left">Costo Unit. MP</td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c1>0) {
                                            echo number_format(($cant_ii_c1+$cant_compras_c1)/$cant_pcm_c1,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c2>0) {
                                            echo number_format(($cant_ii_c2+$cant_compras_c2)/$cant_pcm_c2,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c3>0) {
                                            echo number_format(($cant_ii_c3+$cant_compras_c3)/$cant_pcm_c3,2,".","");
                                        }else{
                                            echo number_format(0,2,".",""); 
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c4>0) {
                                            echo number_format(($cant_ii_c4+$cant_compras_c4)/$cant_pcm_c4,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c5>0) {
                                            echo number_format(($cant_ii_c5+$cant_compras_c5)/$cant_pcm_c5,2,".","");
                                        }else{
                                            echo number_format(0,2,".",""); 
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c6>0) {
                                            echo number_format(($cant_ii_c6+$cant_compras_c6)/$cant_pcm_c6,2,".","");
                                        }else{
                                            echo number_format(0,2,".",""); 
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c7>0) {
                                            echo number_format(($cant_ii_c7+$cant_compras_c7)/$cant_pcm_c7,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c8>0) {
                                            echo number_format(($cant_ii_c8+$cant_compras_c8)/$cant_pcm_c8,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c9>0) {
                                            echo number_format(($cant_ii_c9+$cant_compras_c9)/$cant_pcm_c9,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c10>0) {
                                            echo number_format((($cant_ii_c10+$cant_compras_c10)/$cant_pcm_c10),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-left">Costo Unit. Mano de Obra</td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c1>0) {
                                            echo number_format($cant_pcmmod_c1/$cant_pcm_c1,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c2>0) {
                                            echo number_format($cant_pcmmod_c2/$cant_pcm_c2,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c3>0) {
                                            echo number_format($cant_pcmmod_c3/$cant_pcm_c3,2,".","");
                                        }else{
                                            echo number_format(0,2,".",""); 
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c4>0) {
                                            echo number_format($cant_pcmmod_c4/$cant_pcm_c4,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c5>0) {
                                            echo number_format($cant_pcmmod_c5/$cant_pcm_c5,2,".","");
                                        }else{
                                            echo number_format(0,2,".",""); 
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c6>0) {
                                            echo number_format($cant_pcmmod_c6/$cant_pcm_c6,2,".","");
                                        }else{
                                            echo number_format(0,2,".",""); 
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c7>0) {
                                            echo number_format($cant_pcmmod_c7/$cant_pcm_c7,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c8>0) {
                                            echo number_format($cant_pcmmod_c8/$cant_pcm_c8,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c9>0) {
                                            echo number_format($cant_pcmmod_c9/$cant_pcm_c9,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c10>0) {
                                            echo number_format($cant_pcmmod_c1/$cant_pcm_c10,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-left">Costo Unit. Gastos de Fabricación</td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c1>0) {
                                            echo number_format($cant_total_c1/$cant_pcm_c1,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c2>0) {
                                            echo number_format($cant_total_c2/$cant_pcm_c2,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c3>0) {
                                            echo number_format($cant_total_c3/$cant_pcm_c3,2,".","");
                                        }else{
                                            echo number_format(0,2,".",""); 
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c4>0) {
                                            echo number_format($cant_total_c4/$cant_pcm_c4,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c5>0) {
                                            echo number_format($cant_total_c5/$cant_pcm_c5,2,".","");
                                        }else{
                                            echo number_format(0,2,".",""); 
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c6>0) {
                                            echo number_format($cant_total_c6/$cant_pcm_c6,2,".","");
                                        }else{
                                            echo number_format(0,2,".",""); 
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c7>0) {
                                            echo number_format($cant_total_c7/$cant_pcm_c7,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c8>0) {
                                            echo number_format($cant_total_c8/$cant_pcm_c8,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c9>0) {
                                            echo number_format($cant_total_c9/$cant_pcm_c9,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c10>0) {
                                            echo number_format($cant_total_c10/$cant_pcm_c10,2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-left"><b>Total</b></td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c1>0) {
                                            echo number_format((($cant_ii_c1+$cant_compras_c1)/$cant_pcm_c1)+($cant_pcmmod_c1/$cant_pcm_c1)+($cant_total_c1/$cant_pcm_c1),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c2>0) {
                                            echo number_format((($cant_ii_c2+$cant_compras_c2)/$cant_pcm_c2)+($cant_pcmmod_c2/$cant_pcm_c2)+($cant_total_c2/$cant_pcm_c2),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c3>0) {
                                            echo number_format((($cant_ii_c3+$cant_compras_c3)/$cant_pcm_c3)+($cant_pcmmod_c3/$cant_pcm_c3)+($cant_total_c3/$cant_pcm_c3),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c4>0) {
                                            echo number_format((($cant_ii_c4+$cant_compras_c4)/$cant_pcm_c4)+($cant_pcmmod_c4/$cant_pcm_c4)+($cant_total_c4/$cant_pcm_c4),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c5>0) {
                                            echo number_format((($cant_ii_c5+$cant_compras_c5)/$cant_pcm_c5)+($cant_pcmmod_c5/$cant_pcm_c5)+($cant_total_c5/$cant_pcm_c5),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c6>0) {
                                            echo number_format((($cant_ii_c6+$cant_compras_c6)/$cant_pcm_c6)+($cant_pcmmod_c6/$cant_pcm_c6)+($cant_total_c6/$cant_pcm_c6),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c7>0) {
                                            echo number_format((($cant_ii_c7+$cant_compras_c7)/$cant_pcm_c7)+($cant_pcmmod_c7/$cant_pcm_c7)+($cant_total_c7/$cant_pcm_c7),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c8>0) {
                                            echo number_format((($cant_ii_c8+$cant_compras_c8)/$cant_pcm_c8)+($cant_pcmmod_c8/$cant_pcm_c8)+($cant_total_c8/$cant_pcm_c8),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c9>0) {
                                            echo number_format((($cant_ii_c9+$cant_compras_c9)/$cant_pcm_c9)+($cant_pcmmod_c9/$cant_pcm_c9)+($cant_total_c9/$cant_pcm_c9),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($cant_pcm_c10>0) {
                                            echo number_format((($cant_ii_c10+$cant_compras_c10)/$cant_pcm_c10)+($cant_pcmmod_c10/$cant_pcm_c10)+($cant_total_c10/$cant_pcm_c10),2,".","");
                                        }else{
                                            echo number_format(0,2,".","");
                                        }
                                    ?>
                                </td>

                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /. fin tabla de costos individuales -->

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

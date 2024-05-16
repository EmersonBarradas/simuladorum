<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php

        include "modulos/apt-cto.php";
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
                <h1 class="m-0 text-dark">Costos APT</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="apt.php">APT</a></li>
                <li class="breadcrumb-item active">APT-CTO</li>
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

                            <!-- Íconos Generales -->
                                <div class="col-md-12" style="padding: 0px 10px 20px 10px;">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-share-alt"></i></button>
                                    <button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button>
                                </div>
                            <!-- /. Fin íconos Generales -->

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

                                <!-- -->
                                <div class="col-12">
                                    <div class="card card-primary text-center">
                                    <div class="card-header">
                                        <h3 class="card-title"><b>Movimientos APT-CTO</b></h3>

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
                                                <th>Cantidad (E) </th>
                                                <th>Costo Unidad (E)</th>
                                                <th>Costo Total (E)</th>
                                                <th>Cantidad (D)</th>
                                                <th>Costo Unidad (D)</th>
                                                <th>Costo Total (D)</th>
                                                <th>Cantidad Acumulada (S)</th>
                                                <th>Costo Promedio (S)</th>
                                                <th>Costo Acum (S)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <!-- Entradas ------------------------------------------------------------------->
                                                <td><?php echo number_format($cant_e_ciclo1,2,",",".");      //  Cantidad Entrada?></td>
                                                <td><?php echo number_format($cant_cto_unidad1,2,",",".");   //  Costo unidad entrada ?></td>
                                                <td><?php echo number_format($cant_cto_total1,2,",",".");    //  Cantidad total entrada ?></td>
                                                <!-- Variables Globales---------------------------------------------------------->
                                                <?php $cant_ag1=$cant_e_ciclo1;      //  GLOBAL: Cantidad acumulada global?>
                                                <?php $cost_ag1=$cant_cto_total1;    //  GLOGAL: Costo acumulado global?>
                                                <!-- Salidas ------------------------------------------------------------------->
                                                <td><?php echo number_format($cant_s_ciclo1,2,",",".");      //  Cantidad Salida?></td>
                                                <td><?php 
                                                    if($cant_ag1>0) {
                                                        $cant_cost_unidad_s1=$cost_ag1/$cant_ag1; echo number_format($cant_cost_unidad_s1,2,",","."); // Costo unidad salida
                                                    }else{
                                                        echo number_format(0,2,",",".");
                                                    }
                                                    ?></td>
                                                <td><?php $cant_cto_total_s1=$cant_s_ciclo1*$cant_cost_unidad_s1; echo number_format($cant_cto_total_s1,2,",","."); // Costo Total Salida?></td>
                                                <!-- Saldos ------------------------------------------------------------------->
                                                <td><?php $cant_acum_sal_1=$cant_e_ciclo1-$cant_s_ciclo1; echo number_format($cant_acum_sal_1,2,",","."); // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_acum_sal_1=$cant_cto_unidad1; echo number_format($cant_cost_acum_sal_1,2,",","."); // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_total_sal_1=$cant_cto_total1-$cant_cto_total_s1; echo number_format($cant_cost_total_sal_1,2,",","."); // Cantidad acumulada en saldos?></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <!-- Entradas ------------------------------------------------------------------->
                                                <td><?php echo $cant_e_ciclo2;      //  Cantidad Entrada?></td>
                                                <td><?php echo $cant_cto_unidad2;   //  Costo unidad entrada ?></td>
                                                <td><?php echo $cant_cto_total2;    //  Cantidad total entrada ?></td>
                                                <!-- Variables Globales---------------------------------------------------------->
                                                <?php $cant_ag2=$cant_e_ciclo2;      //  GLOBAL: Cantidad acumulada global?>
                                                <?php $cost_ag2=$cant_cto_total2;    //  GLOGAL: Costo acumulado global?>
                                                <!-- Salidas ------------------------------------------------------------------->
                                                <td><?php echo $cant_s_ciclo2;      //  Cantidad Salida?></td>
                                                <td><?php 
                                                    if($cant_ag2>0) {
                                                        $cant_cost_unidad_s2=$cost_ag2/$cant_ag2; echo $cant_cost_unidad_s2; // Costo unidad salida
                                                    }else{
                                                        echo 0;
                                                    }
                                                    ?></td>
                                                <td><?php $cant_cto_total_s2=$cant_s_ciclo2*$cant_cost_unidad_s2; echo $cant_cto_total_s2; // Costo Total Salida?></td>
                                                <!-- Saldos ------------------------------------------------------------------->
                                                <td><?php $cant_acum_sal_2=$cant_e_ciclo2-$cant_s_ciclo2; echo $cant_acum_sal_2; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_acum_sal_2=$cant_cto_unidad2; echo $cant_cost_acum_sal_2; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_total_sal_2=$cant_cto_total2-$cant_cto_total_s2; echo $cant_cost_total_sal_2; // Cantidad acumulada en saldos?></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <!-- Entradas ------------------------------------------------------------------->
                                                <td><?php echo $cant_e_ciclo3;      //  Cantidad Entrada?></td>
                                                <td><?php echo $cant_cto_unidad3;   //  Costo unidad entrada ?></td>
                                                <td><?php echo $cant_cto_total3;    //  Cantidad total entrada ?></td>
                                                <!-- Variables Globales---------------------------------------------------------->
                                                <?php $cant_ag3=$cant_e_ciclo3;      //  GLOBAL: Cantidad acumulada global?>
                                                <?php $cost_ag3=$cant_cto_total3;    //  GLOGAL: Costo acumulado global?>
                                                <!-- Salidas ------------------------------------------------------------------->
                                                <td><?php echo $cant_s_ciclo3;      //  Cantidad Salida?></td>
                                                <td><?php 
                                                    if($cant_ag3>0) {
                                                        $cant_cost_unidad_s3=$cost_ag3/$cant_ag3; echo $cant_cost_unidad_s3; // Costo unidad salida
                                                    }else{
                                                        echo 0;
                                                    }
                                                    ?></td>
                                                <td><?php $cant_cto_total_s3=$cant_s_ciclo3*$cant_cost_unidad_s3; echo $cant_cto_total_s3; // Costo Total Salida?></td>
                                                <!-- Saldos ------------------------------------------------------------------->
                                                <td><?php $cant_acum_sal_3=$cant_e_ciclo3-$cant_s_ciclo3; echo $cant_acum_sal_3; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_acum_sal_3=$cant_cto_unidad3; echo $cant_cost_acum_sal_3; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_total_sal_3=$cant_cto_total3-$cant_cto_total_s3; echo $cant_cost_total_sal_3; // Cantidad acumulada en saldos?></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <!-- Entradas ------------------------------------------------------------------->
                                                <td><?php echo $cant_e_ciclo4;      //  Cantidad Entrada?></td>
                                                <td><?php echo $cant_cto_unidad4;   //  Costo unidad entrada ?></td>
                                                <td><?php echo $cant_cto_total4;    //  Cantidad total entrada ?></td>
                                                <!-- Variables Globales---------------------------------------------------------->
                                                <?php $cant_ag4=$cant_e_ciclo4;      //  GLOBAL: Cantidad acumulada global?>
                                                <?php $cost_ag4=$cant_cto_total4;    //  GLOGAL: Costo acumulado global?>
                                                <!-- Salidas ------------------------------------------------------------------->
                                                <td><?php echo $cant_s_ciclo4;      //  Cantidad Salida?></td>
                                                <td><?php 
                                                    if($cant_ag4>0) {
                                                        $cant_cost_unidad_s4=$cost_ag4/$cant_ag4; echo $cant_cost_unidad_s4; // Costo unidad salida
                                                    }else{
                                                        echo 0;
                                                    }
                                                    ?></td>
                                                <td><?php $cant_cto_total_s4=$cant_s_ciclo4*$cant_cost_unidad_s4; echo $cant_cto_total_s4; // Costo Total Salida?></td>
                                                <!-- Saldos ------------------------------------------------------------------->
                                                <td><?php $cant_acum_sal_4=$cant_e_ciclo4-$cant_s_ciclo4; echo $cant_acum_sal_4; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_acum_sal_4=$cant_cto_unidad4; echo $cant_cost_acum_sal_4; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_total_sal_4=$cant_cto_total4-$cant_cto_total_s4; echo $cant_cost_total_sal_4; // Cantidad acumulada en saldos?></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <!-- Entradas ------------------------------------------------------------------->
                                                <td><?php echo $cant_e_ciclo5;      //  Cantidad Entrada?></td>
                                                <td><?php echo $cant_cto_unidad5;   //  Costo unidad entrada ?></td>
                                                <td><?php echo $cant_cto_total5;    //  Cantidad total entrada ?></td>
                                                <!-- Variables Globales---------------------------------------------------------->
                                                <?php $cant_ag5=$cant_e_ciclo5;      //  GLOBAL: Cantidad acumulada global?>
                                                <?php $cost_ag5=$cant_cto_total5;    //  GLOGAL: Costo acumulado global?>
                                                <!-- Salidas ------------------------------------------------------------------->
                                                <td><?php echo $cant_s_ciclo5;      //  Cantidad Salida?></td>
                                                <td><?php 
                                                    if($cant_ag5>0) {
                                                        $cant_cost_unidad_s5=$cost_ag5/$cant_ag5; echo $cant_cost_unidad_s5; // Costo unidad salida
                                                    }else{
                                                        echo 0;
                                                    }
                                                    ?></td>
                                                <td><?php $cant_cto_total_s5=$cant_s_ciclo5*$cant_cost_unidad_s5; echo $cant_cto_total_s5; // Costo Total Salida?></td>
                                                <!-- Saldos ------------------------------------------------------------------->
                                                <td><?php $cant_acum_sal_5=$cant_e_ciclo5-$cant_s_ciclo5; echo $cant_acum_sal_5; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_acum_sal_5=$cant_cto_unidad5; echo $cant_cost_acum_sal_5; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_total_sal_5=$cant_cto_total5-$cant_cto_total_s5; echo $cant_cost_total_sal_5; // Cantidad acumulada en saldos?></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <!-- Entradas ------------------------------------------------------------------->
                                                <td><?php echo $cant_e_ciclo6;      //  Cantidad Entrada?></td>
                                                <td><?php echo $cant_cto_unidad6;   //  Costo unidad entrada ?></td>
                                                <td><?php echo $cant_cto_total6;    //  Cantidad total entrada ?></td>
                                                <!-- Variables Globales---------------------------------------------------------->
                                                <?php $cant_ag6=$cant_e_ciclo6;      //  GLOBAL: Cantidad acumulada global?>
                                                <?php $cost_ag6=$cant_cto_total6;    //  GLOGAL: Costo acumulado global?>
                                                <!-- Salidas ------------------------------------------------------------------->
                                                <td><?php echo $cant_s_ciclo6;      //  Cantidad Salida?></td>
                                                <td><?php 
                                                    if($cant_ag6>0) {
                                                        $cant_cost_unidad_s6=$cost_ag6/$cant_ag6; echo $cant_cost_unidad_s6; // Costo unidad salida
                                                    }else{
                                                        echo 0;
                                                    }
                                                    ?></td>
                                                <td><?php $cant_cto_total_s6=$cant_s_ciclo6*$cant_cost_unidad_s6; echo $cant_cto_total_s6; // Costo Total Salida?></td>
                                                <!-- Saldos ------------------------------------------------------------------->
                                                <td><?php $cant_acum_sal_6=$cant_e_ciclo6-$cant_s_ciclo6; echo $cant_acum_sal_6; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_acum_sal_6=$cant_cto_unidad6; echo $cant_cost_acum_sal_6; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_total_sal_6=$cant_cto_total6-$cant_cto_total_s6; echo $cant_cost_total_sal_6; // Cantidad acumulada en saldos?></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <!-- Entradas ------------------------------------------------------------------->
                                                <td><?php echo $cant_e_ciclo7;      //  Cantidad Entrada?></td>
                                                <td><?php echo $cant_cto_unidad7;   //  Costo unidad entrada ?></td>
                                                <td><?php echo $cant_cto_total7;    //  Cantidad total entrada ?></td>
                                                <!-- Variables Globales---------------------------------------------------------->
                                                <?php $cant_ag7=$cant_e_ciclo7;      //  GLOBAL: Cantidad acumulada global?>
                                                <?php $cost_ag7=$cant_cto_total7;    //  GLOGAL: Costo acumulado global?>
                                                <!-- Salidas ------------------------------------------------------------------->
                                                <td><?php echo $cant_s_ciclo7;      //  Cantidad Salida?></td>
                                                <td><?php 
                                                    if($cant_ag7>0) {
                                                        $cant_cost_unidad_s7=$cost_ag7/$cant_ag7; echo $cant_cost_unidad_s7; // Costo unidad salida
                                                    }else{
                                                        echo 0;
                                                    }
                                                    ?></td>
                                                <td><?php $cant_cto_total_s7=$cant_s_ciclo7*$cant_cost_unidad_s7; echo $cant_cto_total_s7; // Costo Total Salida?></td>
                                                <!-- Saldos ------------------------------------------------------------------->
                                                <td><?php $cant_acum_sal_7=$cant_e_ciclo7-$cant_s_ciclo7; echo $cant_acum_sal_7; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_acum_sal_7=$cant_cto_unidad7; echo $cant_cost_acum_sal_7; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_total_sal_7=$cant_cto_total7-$cant_cto_total_s7; echo $cant_cost_total_sal_7; // Cantidad acumulada en saldos?></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <!-- Entradas ------------------------------------------------------------------->
                                                <td><?php echo $cant_e_ciclo8;      //  Cantidad Entrada?></td>
                                                <td><?php echo $cant_cto_unidad8;   //  Costo unidad entrada ?></td>
                                                <td><?php echo $cant_cto_total8;    //  Cantidad total entrada ?></td>
                                                <!-- Variables Globales---------------------------------------------------------->
                                                <?php $cant_ag8=$cant_e_ciclo8;      //  GLOBAL: Cantidad acumulada global?>
                                                <?php $cost_ag8=$cant_cto_total8;    //  GLOGAL: Costo acumulado global?>
                                                <!-- Salidas ------------------------------------------------------------------->
                                                <td><?php echo $cant_s_ciclo8;      //  Cantidad Salida?></td>
                                                <td><?php 
                                                    if($cant_ag8>0) {
                                                        $cant_cost_unidad_s8=$cost_ag8/$cant_ag8; echo $cant_cost_unidad_s8; // Costo unidad salida
                                                    }else{
                                                        echo 0;
                                                    }
                                                    ?></td>
                                                <td><?php $cant_cto_total_s8=$cant_s_ciclo8*$cant_cost_unidad_s8; echo $cant_cto_total_s8; // Costo Total Salida?></td>
                                                <!-- Saldos ------------------------------------------------------------------->
                                                <td><?php $cant_acum_sal_8=$cant_e_ciclo8-$cant_s_ciclo8; echo $cant_acum_sal_8; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_acum_sal_8=$cant_cto_unidad8; echo $cant_cost_acum_sal_8; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_total_sal_8=$cant_cto_total8-$cant_cto_total_s8; echo $cant_cost_total_sal_8; // Cantidad acumulada en saldos?></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <!-- Entradas ------------------------------------------------------------------->
                                                <td><?php echo $cant_e_ciclo9;      //  Cantidad Entrada?></td>
                                                <td><?php echo $cant_cto_unidad9;   //  Costo unidad entrada ?></td>
                                                <td><?php echo $cant_cto_total9;    //  Cantidad total entrada ?></td>
                                                <!-- Variables Globales---------------------------------------------------------->
                                                <?php $cant_ag9=$cant_e_ciclo9;      //  GLOBAL: Cantidad acumulada global?>
                                                <?php $cost_ag9=$cant_cto_total9;    //  GLOGAL: Costo acumulado global?>
                                                <!-- Salidas ------------------------------------------------------------------->
                                                <td><?php echo $cant_s_ciclo9;      //  Cantidad Salida?></td>
                                                <td><?php 
                                                    if($cant_ag9>0) {
                                                        $cant_cost_unidad_s9=$cost_ag9/$cant_ag9; echo $cant_cost_unidad_s9; // Costo unidad salida
                                                    }else{
                                                        echo 0;
                                                    }
                                                    ?></td>
                                                <td><?php $cant_cto_total_s9=$cant_s_ciclo9*$cant_cost_unidad_s9; echo $cant_cto_total_s9; // Costo Total Salida?></td>
                                                <!-- Saldos ------------------------------------------------------------------->
                                                <td><?php $cant_acum_sal_9=$cant_e_ciclo9-$cant_s_ciclo9; echo $cant_acum_sal_9; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_acum_sal_9=$cant_cto_unidad9; echo $cant_cost_acum_sal_9; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_total_sal_9=$cant_cto_total9-$cant_cto_total_s9; echo $cant_cost_total_sal_9; // Cantidad acumulada en saldos?></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <!-- Entradas ------------------------------------------------------------------->
                                                <td><?php echo $cant_e_ciclo10;      //  Cantidad Entrada?></td>
                                                <td><?php echo $cant_cto_unidad10;   //  Costo unidad entrada ?></td>
                                                <td><?php echo $cant_cto_total10;    //  Cantidad total entrada ?></td>
                                                <!-- Variables Globales---------------------------------------------------------->
                                                <?php $cant_ag10=$cant_e_ciclo10;      //  GLOBAL: Cantidad acumulada global?>
                                                <?php $cost_ag10=$cant_cto_total10;    //  GLOGAL: Costo acumulado global?>
                                                <!-- Salidas ------------------------------------------------------------------->
                                                <td><?php echo $cant_s_ciclo10;      //  Cantidad Salida?></td>
                                                <td><?php 
                                                    if($cant_ag10>0) {
                                                        $cant_cost_unidad_s10=$cost_ag10/$cant_ag10; echo $cant_cost_unidad_s10; // Costo unidad salida
                                                    }else{
                                                        echo 0;
                                                    }
                                                    ?></td>
                                                <td><?php $cant_cto_total_s10=$cant_s_ciclo10*$cant_cost_unidad_s10; echo $cant_cto_total_s10; // Costo Total Salida?></td>
                                                <!-- Saldos ------------------------------------------------------------------->
                                                <td><?php $cant_acum_sal_10=$cant_e_ciclo10-$cant_s_ciclo10; echo $cant_acum_sal_10; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_acum_sal_10=$cant_cto_unidad10; echo $cant_cost_acum_sal_10; // Cantidad acumulada en saldos?></td>
                                                <td><?php $cant_cost_total_sal_10=$cant_cto_total10-$cant_cto_total_s10; echo $cant_cost_total_sal_10; // Cantidad acumulada en saldos?></td>
                                            </tr>

                                        </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!--/. Fin tabla de contenido -->


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
                                        <?php if($error_accion==2) { ?>
                                            <div class="col-md-2">
                                                <a href="entorno.php"type="button" class="btn btn-primary btn-block">Entorno</a>
                                            </div>
                                        <?php }else { ?>
                                            <div class="col-md-2">
                                                <a href="subasta-r.php"type="button" class="btn btn-primary btn-block"><i class="fas fa-plus-circle"></i> Subasta / Compra</a>
                                            </div>
                                        <?php } ?>
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

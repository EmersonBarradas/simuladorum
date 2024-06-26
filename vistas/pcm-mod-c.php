<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php

        include "modulos/pcm-mod-c.php";
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
                <h1 class="m-0 text-dark">PCM - MOD | Registro</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="pcm-mod.php">PCM-MOD</a></li>
                <li class="breadcrumb-item active">PCM-MOD Registro</li>
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
                    <!-- Tarjeta de datos -->
                    <div class="col-md-12">
                        <form class="" action="pcm-mod-c.php" method="post">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Datos del Modelado</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="txtNro"> Nro ID</label>
                                                    <input type="number" class="form-control" name="txtNro" step="0.01" min="1" placeholder="1.00" value="<?php echo $txtNro; ?>" readonly>
                                                </div>
                                            </div>
                                            <!-- DIV Empresa-->
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

                                            <!-- DIV Operador-->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="txtOperador">Operador</label>
                                                    <select class="form-control" name="txtOperador">
                                                        <?php foreach ($listado_operador as $operador) { ?>
                                                            <option value="<?php echo $operador['nro']; ?>" <?php if($txtNro_operador==$operador['nro']) { echo "Selected"; } ?>> <?php echo $operador['nombre']; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>



                                            <!-- DIV Ciclo -->
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label for="txtCiclo">Ciclo</label>
                                                    <select class="form-control" name="txtCiclo">
                                                    <option value="1" <?php if($txtCiclo=="1") { echo "Selected"; } ?> >1</option>
                                                    <option value="2" <?php if($txtCiclo=="2") { echo "Selected"; } ?> >2</option>
                                                    <option value="3" <?php if($txtCiclo=="3") { echo "Selected"; } ?> >3</option>
                                                    <option value="4" <?php if($txtCiclo=="4") { echo "Selected"; } ?> >4</option>
                                                    <option value="5" <?php if($txtCiclo=="5") { echo "Selected"; } ?> >5</option>
                                                    <option value="6" <?php if($txtCiclo=="6") { echo "Selected"; } ?> >6</option>
                                                    <option value="7" <?php if($txtCiclo=="7") { echo "Selected"; } ?> >7</option>
                                                    <option value="8" <?php if($txtCiclo=="8") { echo "Selected"; } ?> >8</option>
                                                    <option value="9" <?php if($txtCiclo=="9") { echo "Selected"; } ?> >9</option>
                                                    <option value="10" <?php if($txtCiclo=="10") { echo "Selected"; } ?> >10</option>
                                                    <option value="11" <?php if($txtCiclo=="11") { echo "Selected"; } ?> >11</option>
                                                    <option value="12" <?php if($txtCiclo=="12") { echo "Selected"; } ?> >12</option>
                                                </select>
                                                </div> 
                                            </div> 

                                            <!-- DIV ID -->
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="txtFecha"> Fecha</label>
                                                    <input type="date" class="form-control" name="txtFecha" placeholder="" value="<?php echo $txtFecha; ?>" readonly>
                                                </div>
                                            </div>


                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="txtCant_total_horas_trab">Total de Horas</label>
                                                    <input type="number" class="form-control" name="txtCant_total_horas_trab" step="1.00" min="0" placeholder="0.00" value="<?php echo $txtCant_total_horas_trab; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="txtMonto_pago_hora">$ por Hora</label>
                                                    <input type="number" class="form-control" name="txtMonto_pago_hora" step="0.01" min="0" placeholder="0.00" value="<?php echo $txtMonto_pago_hora; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="txtMonto_pago_adicional">$ Adicional</label>
                                                    <input type="number" class="form-control" name="txtMonto_pago_adicional" step="0.01" min="0" placeholder="0.00" value="<?php echo $txtMonto_pago_adicional; ?>" readonly>
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="txtMonto_total_jornada">$ Total Jornada</label>
                                                    <input type="number" class="form-control" name="txtMonto_total_jornada" step="0.01" min="1" placeholder="1.00" value="<?php echo $txtMonto_total_jornada; ?>" readonly>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                            <div class="col-md-12">
                                <div class="row justify-content-left">
                                    <?php if($btnEliminar>0) { ?>
                                        <div class="col-md-2">
                                            <input type="submit" class="btn btn-primary btn-block" name="btn_accion" value="Eliminar">
                                        </div>
                                    <?php } ?>
                                    <div class="col-md-2">
                                        <a href="pcm-mod.php"type="button" class="btn btn-primary btn-block">Cancelar</a>
                                    </div>
                                    <?php if($btnEliminar>0) { ?>
                                        <div class="col-md-2">
                                            <input type="hidden" class="btn btn-primary btn-block" name="txtNro_operador" value="<?php echo $operadorX; ?>">
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                        <a href="pcm-mod.php" type="button" class="btn btn-primary btn-block">Aceptar</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    <?php } ?>

            </div>

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

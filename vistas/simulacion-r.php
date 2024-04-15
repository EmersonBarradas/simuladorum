<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php
    
        include "modulos/simulacion-r.php";
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
                <h1 class="m-0 text-dark">CREAR SIMULACIÓN</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Tiendas</a></li>
                <li class="breadcrumb-item active">Tiendas</li>
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
        <div class="container" style="padding-top: 25px;">

            <div class="row justify-content-center">
                <?php  if ($mensaje_usuario!=""){ ?>
                    <div class="col-12 ">
                        <?php if($error_accion>1){ ?>
                            <h3 class="text-center text-danger"><?php echo $mensaje_usuario; ?></h3>
                        <?php }else {?> 
                            <h3 class="text-center text-success"><?php echo $mensaje_usuario; ?></h3>
                        <?php }?> 
                    </div>
                <?php } ?>
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Datos de la Simulación</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="simulacion-r.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-idsimulacion">ID Simulación (*)</label>
                                    <input type="input" class="form-control" name="txtidsimulacion" placeholder="ID Simulación" required>
                                </div>
                                <div class="form-group">
                                    <label for="fechainicio">Fecha Inicio (*)</label>
                                    <input type="date" class="form-control" name="fechainicio" placeholder="Fecha de inicio" required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Descripción</span>
                                    </div>
                                    <textarea class="form-control" aria-label="With textarea" name="txtdescrip" ></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="btn_accion" value="Guardar" >
                                <input type="submit" class="btn btn-primary" name="btn_accion" value="Cancelar" >
                                <!-- <button type="submit" class="btn btn-primary" name="btnguardar">Guardar Simulación</button> -->
                            </div>
                        </form>
                    </div>
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

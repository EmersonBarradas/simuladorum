<?php

include "../controladores/enlaces.php";

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php

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
                <h1 class="m-0 text-dark">SIMULACIÓN</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Tiendas</a></li>
                <li class="breadcrumb-item active">Tiendas</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container" style="padding-top: 25px;">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Datos de la Simulación</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="inicio.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-idsimulacion">ID Simulación</label>
                                    <input type="input" class="form-control" id="txt-idsimulacion" placeholder="ID Simulación">
                                </div>
                                <div class="form-group">
                                    <label for="fechainicio">Fecha Inicio</label>
                                    <input type="date" class="form-control" id="fechainicio" placeholder="Fecha de inicio">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Descripción</span>
                                    </div>
                                    <textarea class="form-control" aria-label="With textarea" id="txt-descrip" ></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Crear Simulación</button>
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

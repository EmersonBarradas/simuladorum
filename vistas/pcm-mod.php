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
                <h1 class="m-0 text-dark">PCM | Modelado</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="pcm.php">PCM</a></li>
                <li class="breadcrumb-item active">PCM | MOD</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container" style="padding: 25px 20px 50px 20px;">
            <div class="row justify-content-center">
                <!-- Íconos Generales -->
                <div class="col-md-2" style="padding-top: 10px;">
                    <a href="pcm-mod-r.php"type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
                </div>

                <div class="col-md-2" style="padding-top: 10px;">
                    <button type="button" class="btn btn-primary"><i class="fas fa-share-alt"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button>
                </div>
                <div class="col-md-8 style="padding-top: 10px;">

                </div>
                <!-- Variables Globales -->
                <div class="col-md-3">
                    <div class="form-group" style="padding-top: 20px;">
                        <label for="texto">Empresa</label>
                        <input type="text" class="form-control" id="text" placeholder="Empresa" value="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" style="padding-top: 20px;">
                            <label for="select-operador">Operador</label>
                            <select class="form-control" id="select-operador">
                                <option>Operador 1</option>
                                <option>Operador 2</option>
                                <option>Operador 3</option>
                                <option>Operador 4</option>
                                <option>Operador 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                </div>

            <!-- Tabla de movimientos -->
            <div class="row" style="padding: 0px 0px 0px 0px;">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Movimientos PCM Mod</b></h3>

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
                                <th>Operador</th>
                                <th>Total Horas</th>
                                <th>$ por Hora</th>
                                <th>$ Adicional</th>
                                <th>Total Jornada</th>
                                <th>Icon 1</th>
                                <th>Icon 2</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>11-1-2014</td>
                                <td>Operador 1</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><i class="far fa-smile"></i></td>
                                <td><i class="far fa-smile"></i></td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>11-1-2014</td>
                                <td>Operador 1</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><i class="far fa-smile"></i></td>
                                <td><i class="far fa-smile"></i></td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>11-1-2014</td>
                                <td>Operador 1</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><i class="far fa-smile"></i></td>
                                <td><i class="far fa-smile"></i></td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>11-1-2014</td>
                                <td>Operador 1</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><i class="far fa-smile"></i></td>
                                <td><i class="far fa-smile"></i></td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>11-1-2014</td>
                                <td>Operador 1</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><i class="far fa-smile"></i></td>
                                <td><i class="far fa-smile"></i></td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>11-1-2014</td>
                                <td>Operador 1</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><i class="far fa-smile"></i></td>
                                <td><i class="far fa-smile"></i></td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>11-1-2014</td>
                                <td>Operador 1</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><i class="far fa-smile"></i></td>
                                <td><i class="far fa-smile"></i></td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
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
            <div class="row" style="padding: 25px 0 25px 0;">
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

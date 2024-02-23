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
                <h1 class="m-0 text-dark">Pasterurizado, Cuajado, Moldeado (PCM)</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="pcm.php">PCM</a></li>
                <li class="breadcrumb-item active">PCM</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container" style="padding: 25px 20px 50px 20px;">
            <!-- Cabecera Tabla Leche Cruda -->
            <div class="row justify-content-left">
                <div class="col-md-12">
                    <h3>Productos</h3>
                </div>
                <div class="col-md-12">
                    <span> <i class="fas fa-cheese" style="padding: 0 10px 0 0;"></i>Queso Duro</span> 
                    <span> <i class="fas fa-cheese" style="padding: 0 10px 0 20px;"></i>Queso Mozarella</span>
                    <span> <i class="fas fa-cheese" style="padding: 0 10px 0 20px;"></i>Queso Gouda</span>
                    <span> <i class="fas fa-cheese" style="padding: 0 10px 0 20px;"></i>Queso Dietético</span>
                </div>

                <!-- Íconos Generales -->
                <div class="col-md-2" style="padding-top: 10px;">
                    <a href="pcm-r.php"type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
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
                <!-- Desactivados
                <div class="col-md-3" style="padding-top: 20px;">
                    <div class="form-group">
                        <label for="num-capmax">Capacidad Máxima LC</label>
                        <input type="number" class="form-control" id="num-capmax" placeholder="" value="0.00">
                    </div>
                </div>
                <div class="col-md-3" style="padding-top: 20px;">
                    <div class="form-group">
                        <label for="num-existencia">Existencia LC</label>
                        <input type="number" class="form-control" id="num-existencia" placeholder="" value="0.00">
                    </div>
                </div>
                <div class="col-md-3" style="padding-top: 20px;">
                    <div class="form-group">
                        <label for="num-capdisp">Capacidad Disponible LC</label>
                        <input type="number" class="form-control" id="num-capdisp" placeholder="" value="0.00">
                    </div>
                </div>
                -->
            </div>
            <!-- Tabla de movimientos -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Movimientos PCM</b></h3>

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
                                <th>Tipo</th>
                                <th>Fecha Prod</th>
                                <th>Entrada LC</th>
                                <th>Entrada AD</th>
                                <th>Queso Producido </th>
                                <th>Producto</th>
                                <th>Costo Producción MP</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>E</td>
                                <td>11-1-2014</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>E</td>
                                <td>11-1-2014</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>E</td>
                                <td>11-1-2014</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>E</td>
                                <td>11-1-2014</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>E</td>
                                <td>11-1-2014</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>E</td>
                                <td>11-1-2014</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>E</td>
                                <td>11-1-2014</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
                                <td>0,0</td>
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

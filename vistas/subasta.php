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
                <h1 class="m-0 text-dark">SUBASTA</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Subasta</a></li>
                <li class="breadcrumb-item active">Subasta</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container" style="padding: 25px 20px 50px 20px;">
            <div class="row justify-content-left">
                <!-- 
                <div class="col-md-12">
                    <h2>Leche Cruda</h2>
                </div> -->
                <div class="col-md-2" style="padding-top: 10px;">
                    <a href="subasta-r.php"type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
                </div>

                <div class="col-md-2" style="padding-top: 10px;">
                    <button type="button" class="btn btn-primary"><i class="fas fa-share-alt"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 form-group" style="padding-top: 20px;">
                            <label for="texto">Empresa</label>
                            <input type="text" class="form-control" id="text" placeholder="Empresa" value="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabla Leche Cruda -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Listado de Leche Cruda (LC)</b></h3>

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
                            <th>Precio LC</th>
                            <th>Fecha Pedido</th>
                            <th>Fecha Recepción</th>
                            <th>Nro. Contratos</th>
                            <th>Cantidad LC (Lts)</th>
                            <th>Total LC ($)</th>
                            <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr><tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
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

            <!-- Tabla Aditivo -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Listado Aditivo (AD)</b></h3>

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
                            <th>Precio AD</th>
                            <th>Fecha Pedido</th>
                            <th>Fecha Recepción</th>
                            <th>Nro. Contratos</th>
                            <th>Cantidad AD (Lts)</th>
                            <th>Total AD ($)</th>
                            <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr><tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
                            <td><a href="#"><i class="fas fa-file"></i></a>&nbsp;<a href="#"><i class="fas fa-file-alt"></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>1000</td>
                            <td>11-7-2014</td>
                            <td>11-7-2014</td>
                            <td>2</td>
                            <td>16</td>
                            <td>1500,00</td>
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

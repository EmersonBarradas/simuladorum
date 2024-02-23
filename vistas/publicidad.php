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
                <h1 class="m-0 text-dark">PUBLICIDAD</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="publicidad.php">PUBLICIDAD</a></li>
                <li class="breadcrumb-item active">Publicidad</li>
                </ol>
            </div><!-- /.col -->
            <div class="col-md-12">
                <hr style="color: #0056b2;" />
            </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Cabecera del contenido -->
        <div class="container" style="padding: 0px 20px 0px 20px;">
            <!-- Íconos Generales -->
            <div class="row justify-content-left">          
                <!-- Variables Globales -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="texto-empresa">Empresa</label>
                        <input type="text" class="form-control" id="texto-empresa" placeholder="Empresa" value="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="num-totalinversion">Total Inversión</label>
                        <input type="number" class="form-control" id="texto-totalinversion" placeholder="" value="0.00">
                    </div>
                </div>
            </div>
        </div>
        <!-- Publicidad Contenido  -->
        <div class="container" style="padding: 0px 20px 0px 20px;">

            <!-- Tabla de movimientos -->
            <form action="inicio.php" method="post" class="row" style="padding: 0px 0px 0px 0px;">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Tabla Publicidad</b></h3>

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
                    <div class="card-body table-responsive p-0" style="height: 350px;">
                        <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>QUESO</th>
                                <th>ARMADILLO</th>
                                <th>SAN FIERRO</th>
                                <th>CIUDADELA</th>
                                <th>LOS SANTOS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Queso Duro Blanco</td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Queso Mozarrella</td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Queso Gouda</td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Queso Dietético</td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="select">
                                            <option>Ninguna</option>
                                            <option>Videos Promocionales</option>
                                            <option>Vallas en Avenidas y Carreteras</option>
                                            <option>Flyers</option>
                                            <option>Otros</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-12">
                    <div class="">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Imagenes Publicidad -->
        <div class="container" style="padding: 0px 20px 0px 20px;">
            <div class="row justify-content-center">
                <div class="col-md-5" style="padding: 20px;">
                    <img src="img/publicidad-1.jpg" class="img-fluid rounded mx-auto d-block" alt="Niños">
                </div>
                <div class="col-md-5" style="padding: 20px;">
                    <img src="img/publicidad-2.jpg" class="img-fluid rounded mx-auto d-block" alt="Jóvenes">
                </div>
                <div class="col-md-5" style="padding: 20px;">
                    <img src="img/publicidad-3.jpg" class="img-fluid rounded mx-auto d-block" alt="Adultos">
                </div>
                <div class="col-md-5" style="padding: 20px;">
                    <img src="img/publicidad-4.jpg" class="img-fluid rounded mx-auto d-block" alt="Adulto Mayor">
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

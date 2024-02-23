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
                <li class="breadcrumb-item"><a href="subasta.php">Subasta</a></li>
                <li class="breadcrumb-item active">Subasta</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container" style="padding: 25px 0 50px 0;">
            <div class="row justify-content-center">
                
                <form class="row justify-content-center" action="inicio.php" method="post">

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="num-ciclo">Ciclo</label>
                            <input type="number" class="form-control" id="num-ciclo" placeholder="Ciclo" value="0">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="text-empresa">Empresa</label>
                            <select class="form-control" id="text-empresa">
                                <option>Empresa ACME</option>
                                <option>Empresa 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Leche Cruda (LC)</h3>
                            </div>
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="num-preciolc">Precio LC</label>
                                        <input type="number" class="form-control" id="num-preciolc" placeholder="" value="0.00">
                                    </div>
                                    <div class="form-group">
                                        <label for="fechapedidolc">Fecha Pedido LC</label>
                                        <input type="date" class="form-control" id="fechapedidolc" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="fecharecepcionlc">Fecha Recepción</label>
                                        <input type="date" class="form-control" id="fecharecepcionlc" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-nrocontratolc">Número de Contrato LC</label>
                                        <input type="text" class="form-control" id="txt-nrocontratolc" placeholder="Número de contrato">
                                    </div>
                                    <div class="form-group">
                                        <label for="num-cantlc">Cantidad LC</label>
                                        <input type="number" class="form-control" id="num-cantlc" placeholder="" value="0.00">
                                    </div>
                                    <div class="form-group">
                                        <label for="num-montototallc">Monto Total $ LC</label>
                                        <input type="number" class="form-control" id="num-montototallc" placeholder="" value="0.00">
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Aditivo AD</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="num-precioad">Precio AD</label>
                                        <input type="number" class="form-control" id="num-precioad" placeholder="" value="0.00">
                                    </div>
                                    <div class="form-group">
                                        <label for="fechapedidoad">Fecha Pedido AD</label>
                                        <input type="date" class="form-control" id="fechapedidoad" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="fecharecepcionad">Fecha Recepción AD</label>
                                        <input type="date" class="form-control" id="fecharecepcionad" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="txt-nrocontratoad">Número de Contrato AD</label>
                                        <input type="text" class="form-control" id="txt-nrocontratoad" placeholder="Número de contrato">
                                    </div>
                                    <div class="form-group">
                                        <label for="num-cantad">Cantidad AD</label>
                                        <input type="number" class="form-control" id="num-cantad" placeholder="" value="0.00">
                                    </div>
                                    <div class="form-group">
                                        <label for="num-montototalad">Monto Total $ AD</label>
                                        <input type="number" class="form-control" id="num-montototalad" placeholder="" value="0.00">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                        </div>
                    </div>

                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-database"></i> &nbsp; Guardar </button>
                        <a class="btn btn-primary" href="inicio.php" role="button"><i class="fas fa-window-close"></i> &nbsp; Cancelar</a>
                    </div>
                </form>

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

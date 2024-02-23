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
                <h1 class="m-0 text-dark">PCM - MOD | Registro</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="pcm-mod.php">PCM-MOD</a></li>
                <li class="breadcrumb-item active">PCM-MOD Registro</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container" style="padding: 25px 20px 50px 20px;">
                
            <form class="row justify-content-center" action="inicio.php" method="post">

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="text-empresa">Empresa</label>
                            <select class="form-control" id="text-empresa">
                                <option>Empresa ACME</option>
                                <option>Empresa 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">

                    </div>
                    <!--
                    <div class="col-md-5">
                        <div class="form-group">
                                        <label for="num-ciclo">Ciclo</label>
                                        <input type="number" class="form-control" id="num-ciclo" placeholder="Ciclo" value="0">
                        </div>
                    </div>
                    -->
                    <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Datos PCM-MOD</h3>
                            </div>
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="text-empresa">Empresa</label>
                                        <select class="form-control" id="text-empresa">
                                            <option>Operador 1</option>
                                            <option>Operador 2</option>
                                            <option>Operador 3</option>
                                            <option>Operador 4</option>
                                            <option>Operador 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="num-ciclo">Ciclo</label>
                                        <input type="number" class="form-control" id="num-ciclo" placeholder="Ciclo" value="0">
                                    </div>
                                    <div class="form-group">
                                        <label for="fechaproduccion">Fecha</label>
                                        <input type="date" class="form-control" id="fechaproduccion" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="num-horastrabajadas">Horas Trabajadas</label>
                                        <input type="number" class="form-control" id="num-horastrabajadas" placeholder="" value="0.00">
                                    </div>
                                    <div class="form-group">
                                        <label for="num-montohora">$ por hora</label>
                                        <input type="number" class="form-control" id="num-montohora" placeholder="" value="0.00">
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        
                    </div>

                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-database"></i> &nbsp; Guardar </button>
                        <a class="btn btn-primary" href="amp.php" role="button"><i class="fas fa-window-close"></i> &nbsp; Cancelar</a>
                    </div>
            </form>

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

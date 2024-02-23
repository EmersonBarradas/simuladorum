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
                <h1 class="m-0 text-dark">Entorno</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Entorno</a></li>
                <li class="breadcrumb-item active">Entorno</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container" style="padding-top: 25px;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="lead">
                        <b>Bienvenidos</b>, acaban de hacer una inversión importante para la producción de queso con el propósito de satisfacer el paladar de los habitantes de <b>Santino</b>.
                    </p>
                    <p class="lead">
                        A continuación te explicaremos como es la estructura y organización de la empresa. Pero antes debemos registrar el nombre comercial de la Empresa.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <form action="inicio.php" method="post">
                        <div class="">
                            <div class="form-group">
                                <input type="input" class="form-control" id="txt-nombreempresa" placeholder="Nombre de la empresa">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="">
                            <button type="submit" class="btn btn-primary">Crear Entorno</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row justify-content-around" style="padding: 50px 0 50px 0;">
                <div class="col-md-3">
                    <h3 class="text-center">Mapa</h3>
                    <img src="img/mapa.png" class="img-fluid rounded mx-auto d-block" alt="Logo Universidad">
                </div>
                <div class="col-md-3">
                    <h3 class="text-center">Organigrama</h3>
                    <img src="img/organigrama.png" class="img-fluid rounded mx-auto d-block" alt="Logo Universidad">
                </div>
                <div class="col-md-3">
                    <h3 class="text-center">Estructura</h3>
                    <img src="img/lafabrica.png" class="img-fluid rounded mx-auto d-block" alt="Logo Universidad">
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

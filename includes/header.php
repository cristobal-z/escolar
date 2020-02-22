
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> <?php echo $titulo; ?> </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="alertifyjs/alertify.js"></script>
  <link rel="stylesheet" type="text/css" href="data/datatables.min.css">
  <script type="text/javascript" src="data/datatables.min.js"></script>
</head>


<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg- border-right" id="sidebar-wrapper" style="background-color: #2874a6; ">
      <div class="sidebar-heading bg-"style="background-color: #2874a6; ">Administrador</div>
      <div class="list-group ">
        <a href="index.php" class="list-group-item list-group-item-action bg- " <?php if($titulo =="Inicio") {echo 'style ="background-color:red;"';} ?> >Agregar alumnos</a>
        <a href="gral.php" class="list-group-item list-group-item-action bg- <?php if($titulo =="Alumnos con reportes"){echo "active";} ?>">Alumnos con reportes</a>
        <a href="historial.php" class="list-group-item list-group-item-action bg- <?php if($titulo == "Historial"){echo "active";} ?>" >Reportes generales</a>



      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg- border-bottom" style="background-color:#2874a6 ">
        <button class="btn btn-primary" id="menu-toggle"><</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link btn btn-success mg-r" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn btn-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Reportes
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pdfs/conducta.php" target="_blank">Conducta General</a>
                <a class="dropdown-item" href="pdfs/celular.php" target="_blank" >Celular General</a>
                <a class="dropdown-item" href="pdfs/faltas.php" target="_blank">Faltas General</a>
                <a class="dropdown-item" href="pdfs/justificantes.php" target="_blank" >Justificantes General</a>
                <a class="dropdown-item" href="pdfs/tareas.php" target="_blank">Tareas General</a>
                <a class="dropdown-item" href="pdfs/uniformes.php" target="_blank" >Uniformes General</a>
                <div class="dropdown-divider"></div>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn btn-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opciones
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Cerrar session</a>
                <a class="dropdown-item" href="#">editar perfil</a>
                <div class="dropdown-divider"></div>

              </div>
            </li>
          </ul>
        </div>
      </nav>

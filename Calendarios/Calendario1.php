<?php


$mysquli = new mysqli ("localhost", "root", "", "base_bayard");


$cld = "SELECT * FROM calendario1";


$sth = $mysquli->query ($cld);

session_start();

if(!isset ($_SESSION['id'])){
    header("location: index.php");
}

$nombre = $_SESSION['usuario']

?>



<!doctype html>
<html lang="en">
  <head>
    <title>Colegio Bayard</title>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
            <!-- Navbar Brand-->
            
            <a class="navbar-brand ps-3" href="../principal.php"><img src="../assets/img/bayard-logo-1.png"  alt="logo" width=130px></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true"><?php echo $nombre;?> <i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuración</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu bg-success">
                        <div class="nav nav-light bg-success">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="../principal.php">
                                <?php if ($nombre == "Preceptoria") { ?> 
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Inicio
                            </a>
                            <a class="nav-link" href="../Asistencia/asistencia1.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Registro de Inasistencias
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Asistencia
                                 
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../Asistencia/asistenciaprimero.php">Primer Año</a>
                                    <a class="nav-link" href="../Asistencia/asistenciasegundo.php">Segundo Año</a>
                                    <a class="nav-link" href="../Asistencia/asistenciatercero.php">Tercer Año</a>
                                    <a class="nav-link" href="../Asistencia/asistenciacuarto.php">Cuarto Año</a>
                                    <a class="nav-link" href="../Asistencia/asistenciaquinto.php">Quinto Año</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Calificaciones
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Primer Año
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Matemática</a>
                                            <a class="nav-link" href="#">Lengua y Literatura</a>
                                            <a class="nav-link" href="#">Lengua Adicional (inglés)</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Segundo Año
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Matemática</a>
                                            <a class="nav-link" href="#">Lengua y Literatura</a>
                                            <a class="nav-link" href="#">Lengua Adicional (inglés)</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError3" aria-expanded="false" aria-controls="pagesCollapseError3">
                                        Tercer Año
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Matemática</a>
                                            <a class="nav-link" href="#">Lengua y Literatura</a>
                                            <a class="nav-link" href="#">Lengua Adicional (inglés)</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError4" aria-expanded="false" aria-controls="pagesCollapseError4">
                                        Cuarto Año
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Matemática</a>
                                            <a class="nav-link" href="#">Lengua y Literatura</a>
                                            <a class="nav-link" href="#">Lengua Adicional (inglés)</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError5" aria-expanded="false" aria-controls="pagesCollapseError5">
                                        Quinto Año
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Matemática</a>
                                            <a class="nav-link" href="#">Lengua y Literatura</a>
                                            <a class="nav-link" href="#">Lengua Adicional (inglés)</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Calendario
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Primer Año</a>
                                    <a class="nav-link" href="#">Segundo Año</a>
                                    <a class="nav-link" href="#">Tercer Año</a>
                                    <a class="nav-link" href="#">Cuarto Año</a>
                                    <a class="nav-link" href="#">Quinto Año</a>
                                </nav>
                            </div>
                            <?php } ?>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer bg-success">
                        <div class="small">Logged in as:</div>
                        <?php echo $nombre;?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Calendario Primer Año</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> </li>
                        </ol>
<div class="container">
<div class="col-md-8 offset-md-2">
    <div id='calendar'></div>
    <br><br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Agregar Evento
    </button>
    <div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cargar Eventos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="Calendario1.php">

              <label for="fecha" >Fecha</label>
              <input type="date" placeholder="Fecha" name="fecha"> <br><br>
              <label for="evento">Evento</label>
              <input type="text" placeholder="Evento" name="evento"> <br><br>
              <label for="descripcion">Descripción</label>
              <textarea  placeholder="Descripción" name="descripcion"></textarea>
              <input type="submit" name="enviar"  value="Guardar Evento" class="btn btn-primary">
            
            </form>
            
            <?php include ("guardar.php"); ?>
            

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<script>



document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    
    initialView: 'dayGridMonth',
    locale: "es",
    headerToolbar:{
      left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
    eventClick: function(info) {
    alert('Event: ' + info.event.title);
    alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
    alert('View: ' + info.view.type);

    // change the border color just for fun
    info.el.style.borderColor = 'red';
  },
  events: [
    <?php
    foreach ($sth as $fila){
    ?>
    {
      title:"<?php echo $fila['Evento'];?>",
      start:"<?php echo $fila['Fecha'];?>",
      
      
    } ,
    <?php } ?> 
    // other events here
  ],
  
  
  
});

calendar.render();




if (window.history.replaceState) { // verificamos disponibilidad
  window.history.replaceState(null, null, window.location.href);
}


});

</script>


<br>
<footer class="py-4 bg-dark mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Franco Yacaruso 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
  </body>
</html>
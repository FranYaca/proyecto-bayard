<?php

$mysquli = new mysqli ("localhost", "root", "", "base_bayard");

session_start();

if(!isset ($_SESSION['id'])){
    header("location: index.php");
}

$nombre = $_SESSION['usuario'];


    $sql="SELECT *  FROM alumnos";

    $query=mysqli_query($mysquli,$sql);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Colegio Bayard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
            <!-- Navbar Brand-->
            
            <a class="navbar-brand ps-3" href="#"><img src="../assets/img/bayard-logo-1.png"  alt="logo" width=130px></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre;?> <i class="fas fa-user fa-fw"></i></a>
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
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="../principal.php">
                                <?php if ($nombre == "Preceptoria") { ?> 
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Inicio
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Registro de Inasistencias
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Asistencia
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="asistenciaprimero.php">Primer Año</a>
                                    <a class="nav-link" href="asistenciasegundo.php">Segundo Año</a>
                                    <a class="nav-link" href="#">Tercer Año</a>
                                    <a class="nav-link" href="#">Cuarto Año</a>
                                    <a class="nav-link" href="#">Quinto Año</a>
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
                                    <a class="nav-link" href="../Calendarios/Calendario1.php">Primer Año</a>
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
                        <h1 class="mt-4">Registro de Inasistencia</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> </li>
                        </ol>
                        <?php if ($nombre == "Preceptoria") { ?> 
                            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-6">
                            <h1>Ingrese Inasistencia</h1>
                            <form name="formulario1" action="ingresar.php" method="POST">
			<select class="form-select" aria-label="Default select example" name="cosa" onchange="cambia()">
				<option value="0">Seleccione el curso
				<option value="1">1° año
				<option value="2">2° año
				<option value="3">3° año
				<option value="4">4° año
				<option value="5">5° año
			</select> <br>
			
			<select class="form-select" aria-label="Default select example" name="opt">
				<option value="-">-
			</select> <br>

            <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha"> <br>
            <select class="form-select" aria-label="Default select example" name="inasistencia">
                <option value="0">Seleccione la inasistencia</option>
                <option value="0,25">Tarde 1 TM (0,25)</option>
                <option value="0,25">Tarde 1 TT (0,25)</option>
                <option value="0,5">Tarde 2 TM (0,50)</option>
                <option value="0,5">Tarde 2 TT (0,50)</option>
                <option value="0,5">Ausente TM (0,50)</option>
                <option value="0,5">Ausente TT (0,50)</option>
                <option value="1">Ausente (1)</option>
                </select><br>

                <input type="submit" class="btn btn-primary" value="Registrar">
		</form>
		
		<script type="text/javascript">
			//1) Definir Las Variables Correspondintes
			var opt_1 = new Array ("-", "AGNESINA, MALENA", "ALAN, VALENTINA", "BIANCONI, SOFIA", "CABALLERO, ANTONIO", "CASTELLINI, LUCIA MILAGROS", "CASTEX, JOAQUIN", "CERDÁ CHELATO, OLIVIA", "CHILUKURI, AKSHARA", "CHILUKURI, AKSHITA", "DE LA IGLESIA, FEDERICA", "DE NUCCI, MÁXIMO FELIX", "DOMINGUEZ, EMILIA", "ESKENAZI STOREY, ABRIL", "FERNANDEZ CANCIO, JUAN CRUZ", "FERNANDEZ, AGUSTIN LEANDRO", "GRÜNBERG, MARTIN", "HAMMERSCHMIDT GIGOLA, FRANCO", "LEMA GOYCOECHEA, SEBASTIAN", "LEMOS, JUAN", "LOPEZ PISANO, AGUSTINA", "MAGLIOCCA MONTENEGRO, MARIA BELEN", "MAGLIONE, CAMILA", "MANSILLA, MARIA TERESA", "MARTIN REINAS, SOFIA", "MERIGGI, MATIAS", "MINO FONTELA VAZQUEZ, VICTORIA", "MOLTENI, EMILIA MARIA", "OLIVER, BAUTISTA EDUARDO", "OTSUKA SUMNY, VALENTINA MIKI", "PAREDES CASTRO, MAXIMO", "PETTINATO, LORENZO ROBERTO", "ROSILLO, NICOLÁS", "SANCHEZ GARCES, MATILDA", "SRUR, BAUTISTA", "SRUR, DANIEL", "STUPENENGO, BAUTISTA", "VIRASORO CALABRÓ, MIA", "WAISMAN, EMMA", "ZARCO TOVAR, LUCIA");
			var opt_2 = new Array ("-", "Alurralde Marien, Yara", "Álvarez Treveset, Augusto Manuel", "Benedetelli Simonetti, Milo", "Boigen, Bruno", "Bordoli, Mateo", "Burdisso, Emilia", "Celnik Villa, Tomás", "Díaz, Gonzalo Emilio", "Donndorff, Juan Martín", "Doorn Poblete, Anne Carolina", "Fera, Juan Ignacio", "Fontes Cunha, Ana Julia", "Gotlib, Mila", "Juez, Agustín", "Malagrino, Francisco Javier", "Martínez Zupicich, Octavio", "Mittelman, Agustín", "Montalto, Thiago", "Nano Meichtry, Federica", "Nofal, Antonia", "Ozores, Valentina", "Paci, Mía", "Pradere, Benicio", "Priolo Casazza, Valentino", "Schwanek, Helena", "Sosa, Julia", "Stjepanek, Ambar", "Suarez Messina, Felipe", "Vazquez Iglesias, Milo");
			var opt_3 = new Array ("-", "BAQUERO CLARA", "BARREIRA CONSTANTINO", "BOCCAZZI ROCCO", "BOTINDARI TEO", "DASCOLI CERIANI BENITO", "ENTRALA VALENTINA", "FEDELE TAVOLARO SOFIA", "GARCIA RAMIRO TOMAS", "GIROLA BRUNO", "HARARI MICAELA", "HERBEL ALVAREDO MARTINA", "HUERTA DOLORES", "ILLOBRE SIRACUSANO BIANCA", "KWELLER JUANA", "LÁBAQUE, DAVID FELIPE", "LAPORTA FRANCO MARIO", "LOPEZ AMARTINO IGNACIO", "MUJICA RECHTER, DELFINA", "NOFAL FIDEL", "PENTEADO VALENTIM GABRIELA", "RICARDES LUCIO", "RITONDO BAUTISTA", "SCINTO LEONARDO", "SILINGER CAROLA");
			var opt_4 = new Array ("-", "AGOSTO, Matías Ulises", "ALURRALDE MARIEN, Luna", "ALVAREZ TREVEST, Mercedes Belén", "BORI, Agostina María", "CASTELLINI, Federico", "COHEN MOIX, Bartolomé", "CRAVERO, Ema", "DASCOLI CERIANI, Isabella", "DE LA IGLESIA, Francisca", "DE NUCCI, Francisco Bernabe", "DOMINGUEZ, Pedro", "EINSENSTEIN GAVRIC, Josefina", "GAETA, Agustín", "GIUDICI, Gianmarco", "GONZALEZ CASTAÑON, Isabella", "GRÜMBERG, Felipe", "HERNANDEZ VIEYRA, Miguel", "JUEZ, Nicolás", "LARRONDO BICONDOA, Corina", "LEPORI, Agustín Eduardo", "NANO, Lorenzo", "OZORES, Manuel", "PACI, Chiara", "PELUFFO, Valentino", "PIZZOLO, Santino", "POLLICITA, Maximo", "SANTOS WULF, Uma", "SCHROEDER, Alexia Luz", "SCHWANEK, Ema", "SOLDATO, Simón", "SPERLI CARVALHO, Lucas", "VERA, Federico");
			var opt_5 = new Array ("-", "ACHAVAL, Lautaro", "ALVAREZ CORREA, Justine", "BARREIRA, Lorenzo", "BIANCONI, Tomás", "BOTINDARI, Sofia", "CAMPOS ZAVALETA, Candela", "CASSANO, Facundo", "DOMINGUEZ, Isabel", "DONNDORFF, Lucía", "FOX, Máximo", "GONZALEZ ZALDUA, Camila", "GUTIERREZ BIONDI, Santiago Matías", "MONTI JOSEFINA", "OCCHIUZZO CHIAVAZZA, Nicolas Alejandro", "OJEDA ZALAZAR EZEQUIEL", "PAZ, Charo", "POZO del, Máximo", "RICARDES, Agustin", "STUPENENGO, Olivia", "TRAFICANTE SARIC, Tomas");
			// 2) crear una funcion que permita ejecutar el cambio dinamico
			
			function cambia(){
				var cosa;
				//Se toma el vamor de la "cosa seleccionada"
				cosa = document.formulario1.cosa[document.formulario1.cosa.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(cosa!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("opt_" + cosa);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario1.opt.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.formulario1.opt.options[i].value=mis_opts[i];
						document.formulario1.opt.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.formulario1.opt.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario1.opt.options[0].value="-";
						document.formulario1.opt.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario1.opt.options[0].selected = true;
					
				}
			
			
		
		</script>
        </div>

                      
                    </div>  
            </div>
                    
                        <?php } ?>
                            </div>
                        </div>
                    </div>
                    <footer class="py-4 bg-light mt-auto bg-dark">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-center small">
                                <div class="text-muted">Copyright &copy; Franco Yacaruso 2022</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>

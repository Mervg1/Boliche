<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Torneos (Admin)</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.css?1.0" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
  <!-- Alertify-->
  <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="alertify/css/themes/bootstrap.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div>
          <!--<i class="fas fa-laugh-wink"></i>-->
            <img class="logo-bc" src="img/logos/logo2.jpg">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tablero</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
        
    <!-- Heading -->
      <div class="sidebar-heading">
        Torneos
      </div>
        
    <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="torneo.php">
          <i class="fas fa-fw fa-trophy"></i>
          <span>Torneos</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mercedes Vazquez (Admin)</span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Torneos</h1>
          </div>

            <!-- Modal Agregar Torneo-->
            <div class="modal fade" id="agregarTorneo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Torneo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="frmTorneo">
                        <label>Nombre</label>
                        <input type="text" class="form-control input-sm" id="nombreT" name="nombreT">
                        <label>Fecha de inicio</label>
                        <input type="date" class="form-control input-sm" id="fecha_inicio" name="fecha_inicio">
                        <label>Fecha final</label>
                        <input type="date" class="form-control input-sm" id="fecha_final" name="fecha_final">
                        <label>Numero de Sesiones</label>
                        <input type="number" class="form-control input-sm" id="numero_sesiones" name="numero_sesiones">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btnAgregarNuevoTorneo" class="btn btn-primary">Agregar</button>
                  </div>
                </div>
              </div>
            </div>
            
            
            <!-- Modal Agregar Sesion-->
            <div class="modal fade" id="agregarSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Sesion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="frmSesion">
                        <label>Nombre</label>
                        <input type="text" class="form-control input-sm" id="nombre_sesion" name="nombre_sesion">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btnAgregarNuevaSesion" class="btn btn-primary">Agregar</button>
                  </div>
                </div>
              </div>
            </div>
            
            
            <!-- Modal Equipo-->
            <div class="modal fade" id="agregarEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Equipo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="frmnuevo">
                        <label>Equipo</label>
                        <input type="text" class="form-control input-sm" id="nombre_equipo" name="nombre_equipo">
                        <label>Puntos</label>
                        <input type="number" class="form-control input-sm" id="puntos" name="puntos">
                        <label>Pinos totales</label>
                        <input type="number" class="form-control input-sm" id="total_pinos" name="total_pinos">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btnAgregarNuevo" class="btn btn-primary">Agregar</button>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Modal Jugador-->
            <div class="modal fade" id="agregarJugador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Jugador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="frmnuevoJugador">
                        <label>Nombre</label>
                        <input type="text" class="form-control input-sm" id="nombre_jugador" name="nombre_jugador">
                        <label>Promedio</label>
                        <input type="number" class="form-control input-sm" id="promedio" name="promedio">
                        <label>HDCP</label>
                        <input type="number" class="form-control input-sm" id="handicap" name="handicap">
                        <label>Gms</label>
                        <input type="number" class="form-control input-sm" id="numero_lineas" name="numero_lineas">
                        <label>Pins</label>
                        <input type="number" class="form-control input-sm" id="pinos_jugador" name="pinos_jugador">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="btnAgregarNuevoJugador" class="btn btn-primary">Agregar</button>
                  </div>
                </div>
              </div>
            </div>
            
        <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Torneo</h6>
                </div>
                <div class="card-body">
                    <div class="col-3 d-sm-inline-block">
                      <h6 class="mb-3 font-weight-bold text-secondary">Seleccione un torneo:</h6>
                        <!-- seleccionar el Torneo-->
                        <select id="selectTorneos" onchange="actualizaSelectSesiones()"></select>
                    </div>
                    <div class="col-3 d-sm-inline-block">
                      <h6 class="mb-3 font-weight-bold text-secondary">Seleccione una sesion:</h6>
                        <!-- seleccionar el Sesion-->
                        <select id="selectSesion" ></select>
                    </div>
                    <div class="col-5 d-sm-inline-block float-rigth">
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mb-3" data-toggle="modal" data-target="#agregarTorneo"><i class="fas fa-plus fa-sm text-white-50"></i> Crear Torneo</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm mb-3" data-toggle="modal" data-target="#modalEditarTorneo"><i class="fas fa-edit fa-sm text-white-50"></i> Editar Torneo</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3" data-toggle="modal" data-target="#eliminarTorneo" onclick="eliminarDatosTorneo()"><i class="fas fa-trash fa-sm text-white-50"></i> Eliminar Torneo</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mb-3" data-toggle="modal" data-target="#agregarSesion"><i class="fas fa-plus fa-sm text-white-50"></i> Crear Sesion</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm mb-3" data-toggle="modal" data-target="#modalEditarSesion" onclick="agregaFrmActualizarSesion()"><i class="fas fa-edit fa-sm text-white-50"></i> Editar Sesion</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3" data-toggle="modal" data-target="#eliminarSesion" onclick="eliminarDatosSesion()"><i class="fas fa-trash fa-sm text-white-50"></i> Eliminar Sesion</a>
                    </div>
                    <div class="col-12">
                    <button type="button" id="btnBuscar" class="btn btn-primary mt-5">Buscar</button>
                  </div>
                </div>
              </div>
            
            
          <!-- Collapsable Card Teams -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardTeams" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardTeams">
                  <h6 class="m-0 font-weight-bold text-primary">Equipos</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardTeams">
                  <div class="card-body">
                    <div class="col-12">
                       <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#agregarEquipo"><i class="fas fa-plus fa-sm text-white-50"></i> Agregar Equipo</a>   
                    </div>
                    <div class="table-responsive mt-5">
                    <!--AQUI VA LA TABLA DE ST -->
                        <div id="tablaDatatable"></div>
                  </div>
                  </div>
                </div>
              </div>
            
            
           <!-- Collapsable Card PLAYERS -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardPlayers" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardPlayers">
                  <h6 class="m-0 font-weight-bold text-primary">Jugadores</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardPlayers">
                  <div class="card-body">
                    <div class="col-12">
                       <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#agregarJugador"><i class="fas fa-plus fa-sm text-white-50"></i> Agregar Jugador</a>   
                    </div>
                    <div class="table-responsive mt-5">
                    <!--AQUI VA LA TABLA DE ST -->
                        <div id="tablaDatatableJugadores"></div>
                  </div>
                  </div>
                </div>
              </div> 

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Bolerama Coyoacan 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Seguro que quieres salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecciona Cerrar Sesión para salir</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.html">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal -->
    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <form id="frmnuevoEquipo">
                        <input type="text" hidden="" id="id_equipo" name="id_equipo">
                        <label>Equipo</label>
                        <input type="text" class="form-control input-sm" id="nombre_equipo" name="nombre_equipo">
                        <label>Puntos</label>
                        <input type="number" class="form-control input-sm" id="puntos" name="puntos">
                        <label>Pinos</label>
                        <input type="number" class="form-control input-sm" id="total_pinos" name="total_pinos">
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal Jugadores-->
    <div class="modal fade" id="modalEditarJugador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <form id="frmactualizarJugador">
                        <input type="text" hidden="" id="id_jugador" name="id_jugador">
                        <label>Nombre</label>
                        <input type="text" class="form-control input-sm" id="nombre_jugador" name="nombre_jugador">
                        <label>Promedio</label>
                        <input type="number" class="form-control input-sm" id="promedio" name="promedio">
                        <label>HDCP</label>
                        <input type="number" class="form-control input-sm" id="handicap" name="handicap">
                        <label>Gms</label>
                        <input type="number" class="form-control input-sm" id="numero_lineas" name="numero_lineas">
                        <label>Pins</label>
                        <input type="number" class="form-control input-sm" id="pinos_jugador" name="pinos_jugador">
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-warning" id="btnActualizarJugador">Actualizar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal Torneo-->
    <div class="modal fade" id="modalEditarTorneo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <form id="frmactualizarTorneo">
                        <label>Nombre</label>
                        <input type="text" class="form-control input-sm" id="nombre" name="nombre">
                        <label>Fecha de inicio</label>
                        <input type="date" class="form-control input-sm" id="fecha_inicio" name="fecha_inicio">
                        <label>Fecha final</label>
                        <input type="date" class="form-control input-sm" id="fecha_final" name="fecha_final">
                        <label>Numero de Sesiones</label>
                        <input type="number" class="form-control input-sm" id="numero_sesiones" name="numero_sesiones">
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-warning" id="btnActualizarTorneo">Actualizar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal Sesion-->
    <div class="modal fade" id="modalEditarSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <form id="frmactualizarSesion">
                        <label>Nombre</label>
                        <input type="text" class="form-control input-sm" id="nombre_sesion" name="nombre_sesion">
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-warning" id="btnActualizarSesion">Actualizar</button>
          </div>
        </div>
      </div>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  
  <!-- Alertify-->
  <script src="alertify/alertify.js"></script>
  
  <script>
   $(document).ready(function(){
       $('#btnAgregarNuevo').click(function(){
           datos=$('#frmnuevo').serialize();
           $.ajax({
               type:"POST",
               data: datos,
               url:"procesos/agregar.php",
               success:function(r){
                   if(r==1){
                       $('#frmnuevo')[0].reset();
                       alertify.success("Agregado con éxito");
                       var select = document.getElementById('selectTorneos');
                       var select2 = document.getElementById('selectSesion');
                       $.ajax({
                           type:"POST",
                           data: "id_torneo="+select.value,
                           url:"procesos/agregarTorneoAEquipo.php",
                           success:function(r){
                               //if(r==1){
                                   
                                   $.ajax({
                                       type:"POST",
                                       data: "id_sesion="+select2.value,
                                       url:"procesos/agregarSesionAEquipo.php",
                                       success:function(r){
                                           //if(r==1){

                                               $('#tablaDatatable').load('tabla.php',{id_torneo:select.value, id_sesion:select2.value});
                                           //}
                                       }
                                   });
                               //$('#tablaDatatable').load('tabla.php',{id_torneo:select.value});
                               //}
                           }
                       });
                       //$('#tablaDatatable').load('tabla.php');
                   }else{
                       alertify.error("Error, no se pudo agregar");
                   }
               }
           });
       });
       $('#btnActualizar').click(function(){
           datos=$('#frmnuevoEquipo').serialize();
           $.ajax({
               type:"POST",
               data: datos,
               url:"procesos/actualizar.php",
               success:function(r){
                   if(r==1){
                       $('#tablaDatatable').load('tabla.php');
                       alertify.success("Actualizado con éxito");
                   }else{
                       alertify.error("Error, no se pudo actualizar");
                   }
               }
           });
       });
       $('#btnAgregarNuevoTorneo').click(function(){
           datosB=$('#frmTorneo').serialize();
           $.ajax({
               type:"POST",
               data: datosB,
               url:"procesos/agregarB.php",
               success:function(r){
                   if(r==1){
                       $('#frmTorneo')[0].reset();
                       alertify.success("Agregado con éxito");
                       $('#selectTorneos').load('select.php');
                   }else{
                       alertify.error("Error, no se pudo agregar");
                   }
               }
           });
       });
       $('#btnAgregarNuevaSesion').click(function(){
           select = document.getElementById('selectTorneos');
           datosB=$('#frmSesion').serialize()+'&'+'id_torneo='+select.value;
           $.ajax({
               type:"POST",
               data: datosB,
               url:"procesos/agregarSesion.php",
               success:function(r){
                   if(r==1){
                       $('#frmTorneo')[0].reset();
                       alertify.success("Agregado con éxito");
                       $('#selectSesion').load('selectSesion.php',{id_torneo:select.value});
                   }else{
                       alertify.error("Error, no se pudo agregar");
                   }
               }
           });
       });
         $('#btnActualizarJugador').click(function(){
           datos=$('#frmactualizarJugador').serialize();
          console.log(datos);
           $.ajax({
               type:"POST",
               data: datos,
               url:"procesos/actualizarJugador.php",
               success:function(r){
                   if(r==1){
                       $('#tablaDatatableJugadores').load('tablaJugadores.php');
                       alertify.success("Actualizado con éxito");
                   }else{
                       alertify.error("Error, no se pudo actualizar");
                   }
               }
           });
       });
      $('#btnActualizarTorneo').click(function(){
           var select = document.getElementById('selectTorneos');
          datos='id_torneo='+select.value+'&'+$('#frmactualizarTorneo').serialize();
          console.log(datos);
           $.ajax({
               type:"POST",
               data: datos,
               url:"procesos/actualizarTorneo.php",
               success:function(r){
                   if(r==1){
                       $('#selectTorneos').load('select.php',{id_torneo:select.value});
                       alertify.success("Actualizado con éxito");
                   }else{
                       alertify.error("Error, no se pudo actualizar");
                   }
               }
           });
       });
       $('#btnActualizarSesion').click(function(){
           var select = document.getElementById('selectSesion');
           var select2 = document.getElementById('selectTorneos');
          datos='id_sesion='+select.value+'&'+$('#frmactualizarSesion').serialize();
           $.ajax({
               type:"POST",
               data: datos,
               url:"procesos/actualizarSesion.php",
               success:function(r){
                   if(r==1){
                       $('#selectSesion').load('selectSesion.php',{id_torneo:select2.value});
                       alertify.success("Actualizado con éxito");
                   }else{
                       alertify.error("Error, no se pudo actualizar");
                   }
               }
           });
       });
      $('#btnBuscar').click(function(){
          var select = document.getElementById('selectTorneos');
          var select2 = document.getElementById('selectSesion');
          console.log(select.value);
          $('#tablaDatatable').load('tabla.php',{id_torneo:select.value, id_sesion:select2.value});   $('#tablaDatatableJugadores').load('tablaJugadores.php',{id_torneo:select.value, id_sesion:select2.value});
           
       });
       $('#btnAgregarNuevoJugador').click(function(){
           datos=$('#frmnuevoJugador').serialize();
           $.ajax({
               type:"POST",
               data: datos,
               url:"procesos/agregarJugador.php",
               success:function(r){
                   if(r==1){
                       var select = document.getElementById('selectTorneos');
                       var select2 = document.getElementById('selectSesion');
                       $('#frmnuevoJugador')[0].reset();
                       alertify.success("Agregado con éxito");
                       $.ajax({
                           type:"POST",
                           data: "id_torneo="+select.value,
                           url:"procesos/agregarTorneoAJugador.php",
                           success:function(r){
                               //if(r==1){
                                   $.ajax({
                                       type:"POST",
                                       data: "id_sesion="+select2.value,
                                       url:"procesos/agregarSesionAJugador.php",
                                       success:function(r){
                                           //if(r==1){

                                               $('#tablaDatatable').load('tabla.php',{id_torneo:select.value, id_sesion:select2.value});
                                           //}
                                       }
                                   });
                               //$('#tablaDatatableJugadores').load('tablaJugadores.php',{id_torneo:select.value});
                               //}
                           }
                       });
                       
                   }else{
                       alertify.error("Error, no se pudo agregar");
                   }
               }
           });
       });
       
   });
      
    
  </script>
  <script type="text/javascript">
	$(document).ready(function(){
		  var select = document.getElementById('selectTorneos');
          console.log(select.value);
          $('#tablaDatatable').load('tabla.php',{id_torneo:'Seleccione Torneo...'});
        $('#selectTorneos').load('select.php');
        $('#selectSesion').load('selectSesion.php',{id_torneo:'Seleccione Sesion...'});
        $('#tablaDatatableJugadores').load('tablaJugadores.php',{id_torneo:'Seleccione Torneo...'});
	});
</script>
  <script type="text/javascript">
      var select = document.getElementById('selectTorneos');
      function agregaFrmActualizar(id_equipo){
          $.ajax({
			type:"POST",
			data:"id_equipo=" + id_equipo,
			url:"procesos/obtenDatos.php",
			success:function(r){
				datosB = jQuery.parseJSON(r);
                console.log(datosB)
				$('#id_equipo').val(datosB['id_equipo']);
				$('#nombre_equipo').val(datosB['nombre_equipo']);
				$('#puntos').val(datosB['puntos']);
				$('#total_pinos').val(datosB['total_pinos']);
			}
		});
      }
      function agregaFrmActualizarJugador(id_jugador){
          $.ajax({
			type:"POST",
			data:"id_jugador=" + id_jugador,
			url:"procesos/obtenDatosJugador.php",
			success:function(r){
				datosB = jQuery.parseJSON(r);
                console.log(datosB);
				$('#id_jugador').val(datosB['id_jugador']);
				$('#nombre_jugador').val(datosB['nombre_jugador']);
				$('#promedio').val(datosB['promedio']);
				$('#handicap').val(datosB['handicap']);
                $('#numero_lineas').val(datosB['numero_lineas']);
                $('#pinos_jugador').val(datosB['pinos_jugador']);
			}
		});
      }
      function agregaFrmActualizarTorneo(){
        select = document.getElementById('selectTorneos');
        var id_torneo = select.value;
          $.ajax({
			type:"POST",
			data:"id_equipo=" + id_torneo,
			url:"procesos/obtenDatosTorneo.php",
			success:function(r){
				datosB = jQuery.parseJSON(r);
                console.log(datosB)
				$('#id_torneo').val(datosB['id_torneo']);
				$('#nombre').val(datosB['nombre']);
				$('#fecha_inicio').val(datosB['fecha_inicio']);
				$('#fecha_final').val(datosB['fecha_final']);
                $('#numero_sesiones').val(datosB['numero_sesiones']);
			}
		});
      }
      function agregaFrmActualizarSesion(){
        var select = document.getElementById('selectSesion');
          console.log('id_sesion='+select.value);
        var id_sesion = select.value;
          
          $.ajax({
			type:"POST",
			data:"id_sesion=" + id_sesion,
			url:"procesos/obtenDatosSesion.php",
			success:function(r){
				datosB = jQuery.parseJSON(r);
                console.log(datosB);
				$('#nombre_sesion').val(datosB['nombre_sesion']);
			}
		});
      }
      function eliminarDatos(id_equipo){
		alertify.confirm('Eliminar un equipo', '¿Seguro de eliminar este equipo?', function(){ 
			$.ajax({
				type:"POST",
				data:"id_equipo=" + id_equipo,
				url:"procesos/eliminar.php",
				success:function(r){
					if(r==1){
                        $('#tablaDatatable').load('tabla.php',{id_torneo:select.value});
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});
		}
		, function(){
		});
	}
    function eliminarDatosJugador(id_jugador){
		alertify.confirm('Eliminar un jugador', '¿Seguro de eliminar este jugador?', function(){ 
			$.ajax({
				type:"POST",
				data:"id_jugador=" + id_jugador,
				url:"procesos/eliminarJugador.php",
				success:function(r){
					if(r==1){
                        $('#tablaDatatable').load('tablaJugadores.php',{id_torneo:select.value});
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});
		}
		, function(){
		});
	}
    function eliminarDatosTorneo(){
        select = document.getElementById('selectTorneos');
        console.log(select.value);
        var id_torneo = select.value;
		alertify.confirm('Eliminar un Torneo', '¿Seguro de eliminar este Torneo?', function(){ 
			$.ajax({
				type:"POST",
				data:"id_torneo=" + id_torneo,
				url:"procesos/eliminarTorneo.php",
				success:function(r){
					if(r==1){
                        $('#selectTorneos').load('select.php',{id_torneo:select.value});
                       
                       $('#tablaDatatable').load('tabla.php',{id_torneo:'Seleccione Torneo...'}); $('#tablaDatatable').load('tablaJugadores.php',{id_torneo:select.value});
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});
		}
		, function(){
		});
	}
    function eliminarDatosSesion(){
        select = document.getElementById('selectSesion');
        select2 = document.getElementById('selectTorneo');
        var id_sesion = select.value;
		alertify.confirm('Eliminar un Torneo', '¿Seguro de eliminar este Torneo?', function(){ 
			$.ajax({
				type:"POST",
				data:"id_torneo=" + id_sesion,
				url:"procesos/eliminarSesion.php",
				success:function(r){
					if(r==1){
                        $('#selectTorneos').load('select.php',{id_torneo:select.value});
                        $('#selectSesion').load('selectSesion.php',{id_torneo:select.value});
                       
                       $('#tablaDatatable').load('tabla.php',{id_torneo:'Seleccione Torneo...'}); $('#tablaDatatable').load('tablaJugadores.php',{id_torneo:select.value});
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});
		}
		, function(){
		});
	}
    function actualizaSelectSesiones(){
        var select = document.getElementById('selectTorneos');
      var select2 = document.getElementById('selectSesion');
        console.log('bla');
      $('#selectSesion').load('selectSesion.php',{id_torneo:select.value});
         
      }
    
  </script>

</body>

</html>

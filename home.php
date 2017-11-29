<?php 
session_start();
  if(!$_SESSION)
  {
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Studio Princes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/std.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="home.php" class="navbar-brand">
                  <div class="brand-text brand-big"><span>Bootstrap </span><strong>Dashboard</strong></div>
                  <div class="brand-text brand-small"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <!-- Logout    -->
                <li class="nav-item"><a href="index.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo $_SESSION['nombre']; ?></h1>
              <p><?php echo $_SESSION['email']; ?></p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="home.php"><i class="icon-home"></i>Home</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Registro</a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="#myProveedor"  data-toggle="modal" data-target="#myProveedor">Registar Proveedor</a></li>
                <li><a href="registro_producto.php">Registrar Producto</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myCliente">Registrar Cliente</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="#Consultar" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Consultar</a>
              <ul id="Consultar" class="collapse list-unstyled">
                <li><a href="#" data-toggle="modal" data-target="#">Producto</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="#editar" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Editar</a>
              <ul id="editar" class="collapse list-unstyled">
                <li><a href="editar_proveedor.php" >Proveedor</a></li>
                <li><a href="#myProducto" data-toggle="modal" data-target="#myProducto">Producto</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myCliente">Cliente</a></li>
                <li><a href="#">Empleado</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Pagina Principal</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                  
              <!-- Inline Form-->
                <div class="col-lg-8">                           
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Validar Cedula Cliente</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-inline">
                      <div class="input-group">
                                <input type="text" class="form-control"><span class="input-group-btn">
                                      <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Consultar</button></span>
                              </div>
                     
                       <div class="card-body text-center">
                 
                      <!-- Modal-->
                      <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Registar Cliente</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Para poder continuar debe registrar el cliente.</p>
                              <form>
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" placeholder="Email Address" class="form-control">
                                </div>
                                 
                                <div class="form-group">       
                                  <label>Cedula</label>
                                  <input type="password" placeholder="Password" class="form-control">
                                </div>
                                   <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" placeholder="Email Address" class="form-control">
                                </div>
                                <div class="form-group">       
                                  <input type="submit" value="Signin" class="btn btn-primary">
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      </form>
                    </div>
                  </div>
                </div>
            
                <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Datos Basicos </h3>
                    </div>
                    <div class="card-body">
               
                      <form class="form-horizontal">
                           <div class="form-group row" Style="text-align">
                          <label class="col-sm-3 form-control-label">Factura Numero 1234</label>
                         
                        </div>
                             <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Fecha</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalWarning" type="date" placeholder="Fecha Actual" class="form-control form-control-warning"><small class="form-text"></small>
                          </div>
                        </div>
                       
                    <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Producto</label>
                          <div class="col-sm-9">
                             <select name="account" class="form-control">
                              <option>Camisa</option>
                              <option>Pantalon</option>
                              <option>Vestido</option>
                              <option>Proveedor 4</option>
                            </select>
                          </div>
                        </div>
                      
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Color</label>
                          <div class="col-sm-9">
                             <select name="account" class="form-control">
                              <option>Amarillo  </option>
                              <option>Azul</option>
                              <option>Rojo</option>
                              <option>Verde</option>
                                 <option>Blanco</option>
                                 <option>Negro</option>
                            </select>
                          </div>
                        </div>
                              <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tipo de Tela</label>
                          <div class="col-sm-9">
                             <select name="account" class="form-control">
                              <option>Licra</option>
                              <option>Jean</option>
                              <option>Franela</option>
                             
                            </select>
                          </div>
                        </div>
                          
                           <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tipo de Venta</label>
                          <div class="col-sm-9">
                             <select name="account" class="form-control">
                              <option>Mayor</option>
                              <option>Detal</option>
                              
                            </select>
                          </div>
                        </div>
                        
                         
                          
                        
                      </form>
                    </div>
                  </div>
                </div>
                      <!-- Horizontal Form-->
               <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Cantidad</h3>
                    </div>
                    <div class="card-body">
               
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">S</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalSuccess" type="text" placeholder="Cantidad S " class="form-control form-control-success"><small class="form-text"></small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">M</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalWarning" type="text" placeholder="Cantidad M" class="form-control form-control-warning"><small class="form-text"></small>
                          </div>
                        </div>
                           <div class="form-group row">
                          <label class="col-sm-3 form-control-label">L</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalWarning" type="text" placeholder="Cantidad L" class="form-control form-control-warning"><small class="form-text"></small>
                          </div>
                        </div>
                           <div class="form-group row">
                          <label class="col-sm-3 form-control-label">XL</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalWarning" type="text" placeholder="Cantidad XL" class="form-control form-control-warning"><small class="form-text"></small>
                          </div>
                        </div>
                           <div class="form-group row">
                          <label class="col-sm-3 form-control-label">XXL</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalWarning" type="text" placeholder="Cantidad XXL" class="form-control form-control-warning"><small class="form-text"></small>
                          </div>
                        </div>
                          
                           <div class="form-group">
                          <input type="submit" value="Guardar" class="mx-sm-3 btn btn-primary">
                        </div>
                        
                      
                        
                      </form>
                    </div>
                  </div>
                </div>
               
       
            
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          
          <!-- Projects Section-->
          
          <!-- Client Section-->
          
          
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Universidad Francisco de Paula Santander &copy; 2017</p>
                </div>
                <div class="col-sm-6 text-right">
                  <!-- <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p> -->
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- modals -->
    <?php require_once('controller/modal/registro_proveedor.php'); ?>
    <?php require_once('controller/modal/registro_producto.php'); ?>
    <?php require_once('controller/modal/registro_cliente.php'); ?>
    <!-- Javascrpt files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
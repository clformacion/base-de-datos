<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Beautiful Bootstrap Navbar with Menu Icons</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body {
	background: #eeeeee;
	font-family: 'Varela Round', sans-serif;
}
.navbar {
	color: #fff;
	background: #926dde !important;
	padding: 5px 16px;
	border-radius: 0;
	border: none;
	box-shadow: 0 0 4px rgba(0,0,0,.1);
}
.navbar img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin-right: 10px;
}
.navbar .navbar-brand {
	color: #efe5ff;
	padding-left: 0;
	padding-right: 50px;
	font-size: 24px;
}
.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
	color: #fff;
}
.navbar .navbar-brand i {
	font-size: 25px;
	margin-right: 5px;
}
.search-box {
	position: relative;
}
.search-box input {
	padding-right: 35px;
	min-height: 38px;
	border: none;
	background: #faf7fd;
	border-radius: 3px !important;
}
.search-box input:focus {
	background: #fff;
	box-shadow: none;
}
.search-box .input-group-addon {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 10px 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .nav-item i {
	font-size: 18px;
}
.navbar .nav-item span {
	position: relative;
	top: 3px;
}
.navbar .navbar-nav > a {
	color: #efe5ff;
	padding: 8px 15px;
	font-size: 14px;
}
.navbar .navbar-nav > a:hover, .navbar .navbar-nav > a:focus {
	color: #fff;
	text-shadow: 0 0 4px rgba(255,255,255,0.3);
}
.navbar .navbar-nav > a > i {
	display: block;
	text-align: center;
}
.navbar .dropdown-item i {
	font-size: 16px;
	min-width: 22px;
}
.navbar .dropdown-item .material-icons {
	font-size: 21px;
	line-height: 16px;
	vertical-align: middle;
	margin-top: -2px;
}
.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
	color: #fff;
	background: none !important;
}
.navbar .dropdown-menu {
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a {
	color: #777 !important;
	padding: 8px 20px;
	line-height: normal;
	font-size: 15px;
}
.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:focus {
	color: #333 !important;
	background: transparent !important;
}
.navbar .navbar-nav .active a, .navbar .navbar-nav .active a:hover, .navbar .navbar-nav .active a:focus {
	color: #fff;
	text-shadow: 0 0 4px rgba(255,255,255,0.2);
	background: transparent !important;
}
.navbar .navbar-nav .user-action {
	padding: 9px 15px;
	font-size: 15px;
}
.navbar .navbar-toggle {
	border-color: #fff;
}
.navbar .navbar-toggle .icon-bar {
	background: #fff;
}
.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
	background: transparent;
}
.navbar .navbar-nav .open .dropdown-menu {
	background: #faf7fd;
	border-radius: 1px;
	border-color: #faf7fd;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .divider {
	background-color: #e9ecef !important;
}

@media (min-width: 1200px) {
.form-inline .input-group {
	width: 350px;
	margin-left: 30px;
}
}

@media (max-width: 1199px) {
.navbar .navbar-nav > a > i {
	display: inline-block;
	text-align: left;
	min-width: 30px;
	position: relative;
	top: 4px;
}
.navbar .navbar-collapse {
	border: none;
	box-shadow: none;
	padding: 0;
}
.navbar .navbar-form {
	border: none;
	display: block;
	margin: 10px 0;
	padding: 0;
}
.navbar .navbar-nav {
	margin: 8px 0;
}
.navbar .navbar-toggle {
	margin-right: 0;
}
.input-group {
	width: 100%;
}
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-xl navbar-dark bg-dark"> <a href="#" class="navbar-brand"><i class="fa fa-cube"></i>App<b>Docente</b></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"> <span class="navbar-toggler-icon"></span> </button>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    <form class="navbar-form form-inline">
      <div class="input-group search-box">
        <input type="text" id="search" class="form-control" placeholder="Search here...">
        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span> </div>
    </form>
    <div class="navbar-nav ml-auto"> <a href="#" class="nav-item nav-link active"><i class="fa fa-home"></i><span>Home</span></a> <a href="#" class="nav-item nav-link"><i class="fa fa-gears"></i><span>Projects</span></a> <a href="#" class="nav-item nav-link"><i class="fa fa-users"></i><span>Team</span></a> <a href="#" class="nav-item nav-link"><i class="fa fa-pie-chart"></i><span>Reports</span></a> <a href="#" class="nav-item nav-link"><i class="fa fa-briefcase"></i><span>Careers</span></a> <a href="#" class="nav-item nav-link"><i class="fa fa-envelope"></i><span>Messages</span></a> <a href="#" class="nav-item nav-link"><i class="fa fa-bell"></i><span>Notifications</span></a>
      <div class="nav-item dropdown"> <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="img/carlos.jpg" class="avatar" alt="Avatar"> Prof Carlos Lopez <b class="caret"></b></a>
        <div class="dropdown-menu"> <a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a> <a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a> <a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a>
          <div class="divider dropdown-divider"></div>
          <a href="#" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a> </div>
      </div>
    </div>
  </div>
</nav>

<br><br>
<a href="https://campusvirtual.clformacion.es/AULA6/1/clase.php">
<button type="button" class="btn btn-primary" style="margin-left: 690px;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-video3" viewBox="0 0 16 16">
  <path d="M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2"/>
  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783Q16 12.312 16 12V4a2 2 0 0 0-2-2z"/>
</svg> IR A CAMPUS DE ESTUDIO</button>
</a>
<div class="container" style="margin-top: 60px;">

<div class="alert alert-info alert-dismissible">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>



<div class="container" style="text-align: center; border:2px solid black">
<?php
  $conexion = mysqli_connect("localhost", "root", "", "academia") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select nombre,identificacion,calificacion
                        from notas where identificacion='$_REQUEST[identificacion]'") or
    die("Problemas en el select:" . mysqli_error($conexion));





if ($reg = mysqli_fetch_array($registros)) {


   
  echo "<h1>" .  "Nombre del estudiante:" . "<br>". $reg['nombre'] . "<br>" ."</h1>";
  echo "<h1>" .  "indeficacion del estudiante:" . "<br>" . $reg['identificacion'] . "<br>" ."</h1>";
  echo "<h1>" .  "calificacion:" . $reg['calificacion'] . "</br>" . "<br>" ."</h1>";
  ;
  
}
mysqli_close($conexion);



?>
<

<div class="container">


<div>
<form method="post" action="alumno.php">

<h3>ENVIARLE UN MENSAJE AL ESTUDIANTE:</h3>

<form method="post" action="alumno.php">

       
<textarea class="form-control" rows="5" id="comment" name="nombre"></textarea>      
       
       <button type="sumit" value="confirmar" class="btn btn-primary">ENVIAR MENSAJE AL ESTUDIANTE</button>
    </form>






</form>
</div>






</div>


</div>   












</body>
</html>







    










































<!---div class="container" style="text-align: center; border:2px solid black">
<!--?php
  $conexion = mysqli_connect("localhost", "root", "", "academia") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select nombre,identificacion,calificacion
                        from notas where identificacion='$_REQUEST[identificacion]'") or
    die("Problemas en el select:" . mysqli_error($conexion));





if ($reg = mysqli_fetch_array($registros)) {


   
  echo "<h1>" .  "Nombre del estudiante:" . "<br>". $reg['nombre'] . "<br>" ."</h1>";
  echo "<h1>" .  "indeficacion del estudiante:" . "<br>" . $reg['identificacion'] . "<br>" ."</h1>";
  echo "<h1>" .  "calificacion:" . $reg['calificacion'] . "</br>" . "<br>" ."</h1>";
  ;
  
}
mysqli_close($conexion);



?>
<

<div class="container">


<div>
<form method="post" action="alumno.php">

<h3>ENVIARLE UN MENSAJE AL ESTUDIANTE:</h3>

<form method="post" action="alumno.php">

       
<textarea class="form-control" rows="5" id="comment" name="nombre"></textarea>      
       br
       <button type="sumit" value="confirmar" class="btn btn-primary">ENVIAR MENSAJE AL ESTUDIANTE</button>
    </form>






</form>
</div>




















<!---!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
 
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

  
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
 
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<div class="container" style="text-align: center; border:2px solid black">
<!--?php
  $conexion = mysqli_connect("localhost", "root", "", "academia") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select nombre,identificacion,calificacion
                        from notas where identificacion='$_REQUEST[identificacion]'") or
    die("Problemas en el select:" . mysqli_error($conexion));





if ($reg = mysqli_fetch_array($registros)) {


   
  echo "<h1>" .  "Nombre del estudiante:" . "<br>". $reg['nombre'] . "<br>" ."</h1>";
  echo "<h1>" .  "indeficacion del estudiante:" . "<br>" . $reg['identificacion'] . "<br>" ."</h1>";
  echo "<h1>" .  "calificacion:" . $reg['calificacion'] . "</br>" . "<br>" ."</h1>";
  ;
  
}
mysqli_close($conexion);



?>
<

<div class="container">


<div>
<form method="post" action="alumno.php">

<h3>ENVIARLE UN MENSAJE AL ESTUDIANTE:</h3>

<form method="post" action="alumno.php">

       
<textarea class="form-control" rows="5" id="comment" name="nombre"></textarea>      
       
       <button type="sumit" value="confirmar" class="btn btn-primary">ENVIAR MENSAJE AL ESTUDIANTE</button>
    </form>






</form>
</div>























    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


































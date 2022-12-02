<!DOCTYPE html>
<html lang="en">
<head>
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!--Aos-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Inicie sesion</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="registro.php">Registrese</a>
          <a class="nav-link" href="loggin.php">inicie sesion</a>
        </div>
      </div>
    </div>
  </nav>
</header> 
<main class="container o-container">
    <div class="container-md" id="who">
    <br><br>

<form method='post'>
<div class="mb-3">
    <label for="email" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" name="usuario" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="clave" class="form-label">Clave</label>
    <input type="password" class="form-control" name="clave" id="clave">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php

include("conexion.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
$usuario = $_POST ['usuario'];
$clave = $_POST ['clave'];

$query = "select user,clave  from form where user='$usuario' and clave='$clave'";
$data = (mysqli_query($conexion, $query));
$total= mysqli_num_rows($data);

if($total>0){
    session_start();
    header ('location: logger.php');
    $_SESSION['usuario']= $usuario;

}else echo "Las claves no coinciden";

$conexion->close();
}
?>
</body>
</html>
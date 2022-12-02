<?php
if(isset($_SESSION['user'])){

setcookie("session","cookie", time()+15, "/");
setcookie("session","cookie", time()+15, "/");

$url1 = $_SERVER['REQUEST_URL'];
header("REFRESH:300; URL; URL=$url1");

if(!isset($_COOKIE['session'])){
header("location: logout.php?cookie=expired");
}
}
?>

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
      <a class="navbar-brand" href="index.php">Registrese</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a  class="btn btn-primary" href="logout.php">Log out</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="loggin.php">inicie sesion</a>
        </div>
      </div>
    </div>
  </nav>
</header> 

<H1>
  Bienvenid@ <?php session_start();
echo $_SESSION['usuario'];?>
</H1>
</body>
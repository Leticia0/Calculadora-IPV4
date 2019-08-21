<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="/assets/SemanticUI/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/SemanticUI/components/icon.min.css">

    <script src="/assets/jQuery/jquery-3.3.1.min.js"></script>
    <script src="/assets/SemanticUI/semantic.min.js"></script>
</head>

<body >

    <nav class=" navbar sticky-top navbar navbar-expand-lg navbar-light bg-light">
      <!--!-->

  <a class="navbar-brand" href="#" ></a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown" >

    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ipv4.php">Sobre IPV4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="como_calc.php">Como Calcular</a>
      </li>
</ul>
    </div>
     
      <div style="margin-right: 16.5%;">
        Calculadora IPV4
      </div>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

    <ul class="navbar-nav" style="margin-left:80%; "> <!--aqui muda o "sobre"-->

      <li class="nav-item">
        <a class="nav-link" href="sobre.php">Sobre</a>
      </li>
      <li class="nav-item dropdown">
       
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="perfil_usuario.php?id=1">Meu Perfil</a>
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="#">Sair</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
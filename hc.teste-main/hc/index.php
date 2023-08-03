<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hot Coast Surfing</title>
    <link rel="stylesheet" href="style.css">
    <!-- Google Icons Link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body>
    <?php
      session_start();
    ?>
    <!-- Header or Navbar -->
    <header class="header">
      <nav class="navbar max-width">
        <a href="#" class="logo">Hot Coast Surfing</a>
        <ul class="links">
          <li><a href="#">Fiverr BusIness</a></li>
          <li><a href="#">Sobre Nós</a></li>
          <li class="language">
            <a href="#"></a>  
            <span class="material-symbols-outlined"></span>          
          </li>
          <?php 
            if (isset($_SESSION['idUsuario'])) {
              echo "<li><a href='agendamentorole.php'>Agendamento Rolê</a></li>";
              echo "<li class='btn join'><a href='sair.php'>SAIR</a></li>";
              echo "<li class='dropdown'>
                      <a href='javascript:void(0);' class='dropbtn'>Bem-vindo, " . $_SESSION['nomeUsuario'] . "</a>
                      <div class='dropdown-content'>
                        <a href='#'>.</a>
                        <a href='#'>.</a>
                      </div>
                    </li>"; // Exibindo o dropdown com informações do usuário
            } else {
              echo "<li><a href='cadastro.php'>Agendamento Rolê</a></li>";
              echo "<li class='btn signin'><a href='cadastro.php'>Cadastro</a></li>";
              echo "<li class='btn join'><a href='login.php'>Login</a></li>";
            }
          ?>
        </ul>
      </nav>
    </header>

    <!-- Hero section -->
    <section class="hero">
       <div class="content max-width">
        <h2>Find the right freelance service, right away</h2>
        <div class="search-field">
          <input type="text" placeholder="Search for any service...">
          <span class="material-symbols-outlined search-btn">search</span>
        </div>
        <div class="popular-tags">
          Popular:
          <ul class="link">
            <li><a href="#">Web Design</a></li>
            <li></li>
            <li><a href="#">Logo Design</a></li>
            <li><a href="#">AI Design</a></li>
          </ul>
        </div>
       </div>
    </section>
  </body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda de camisetas</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  
  <div class="container">

    <!-- CABECERA -->
    <header id="header">
      <div id="logo">
        <img src="assets/img/camiseta.png" alt="camiseta logo">
        <a href="index.php">
          Tienda de camisetas
        </a>
      </div>
    </header>  

    <!-- MENU -->
    <nav id="menu">
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Categoria 1</a></li>
        <li><a href="#">Categoria 2</a></li>
        <li><a href="#">Categoria X</a></li>
      </ul>
    </nav>

    <!-- Contendio -->
    <div id="content">
      <!-- BARRA LATERAL -->
      <aside id="lateral">
        <div id="login" class="block_aside">
          <h3>Entrar a la Web</h3>
          <form action="#" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email">
            <label for="password">Password:</label>
            <input type="password" name="password">

            <input type="submit" value="Enviar">
          </form>

          
          <ul>
            <li><a href="#">Mis pedidos</a></li>
            <li><a href="#">Gestionar pedidos</a></li>
            <li><a href="#">Gestionar categorias</a></li>
          </ul>
          
            
            
        </div>


      </aside>

      <!-- CONTENIDO CENTRAL -->

      <div id="central">
        <h1>Productos Destacados</h1>

        <div class="product"> 
          <img src="assets/img/camiseta.png" alt="camiseta logo">
          <h2>Camiseta Azul Ancha</h2>
          <p>30 Euros</p>
          <a href="#" class="button">Comprar</a>
        </div>

        <div class="product"> 
          <img src="assets/img/camiseta.png" alt="camiseta logo">
          <h2>Camiseta Azul Ancha</h2>
          <p>30 Euros</p>
          <a href="#" class="button">Comprar</a>
        </div>

        <div class="product"> 
          <img src="assets/img/camiseta.png" alt="camiseta logo">
          <h2>Camiseta Azul Ancha</h2>
          <p>30 Euros</p>
          <a href="#" class="button">Comprar</a>
        </div>

      
      </div>

    </div>

    
    <!-- FOOTER -->

    <footer id="footer">
      <p>Desarrollado por Victor Robles Web &copy <?=date('Y')?></p>
    </footer>
  </div>
</body>
</html>
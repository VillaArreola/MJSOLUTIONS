 <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">


      <div id="logo" class="pull-left">
        <!--<a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>-->
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
       <h2><a href="index.php#inicio">MJ SOLUCIONES EN TI</a></h2>
      </div>


      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php#home">Inicio</a></li>
          
          <li><a href="servicios.php">Servicios</a></li>
          <li class="menu-has-children">  <a href="productos.php">Productos</a>

          <!---- kkdkdkkdk 
            <ul>
              <li><a href="#">Producto 1</a> </li>
              
              
              <li class="menu-has-children"><a href="#">producto 2</a>
                <ul>
                  <li><a href="#">Productos 2.2</a></li>
                  <li><a href="#">Productos 2.2</a></li>
                  <li><a href="#">Productos 2.2</a></li>
                  <li><a href="#">Productos 2.2</a></li>
                  <li><a href="#">Productos 2.2</a></li>
                </ul>
              </li>
              <li><a href="#">producto 3</a></li>
              <li><a href="#">producto 4</a></li>
              <li><a href="#">producto 5</a></li>
            </ul>
          </li>
          -->
          <li><a href="capacitacion.php">Capacitaciones</a></li>
          <li><a href="acerca.php">Acerca de</a></li>
  
       
        <?php if(isset($_SESSION['usuario'])): ?>
  
            <li class="menu-has-children"><a href="#"> Bienvenido <?=$_SESSION['usuario']['nombre'];?></a>
            <ul>
                  <li><a href="#">Cerrar session</a></li>
            </ul>
            </li>

         <?php endif; ?>

         <?php if(!isset($_SESSION['usuario'])): ?>
            <li><a href="login.php">Iniciar Sesion</a></li>
          <?php endif; ?>
        </ul>
      </nav>
      <!-- #nav-menu-container -->





      
    </div>
  </header>
  <!-- #header -->
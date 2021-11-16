<?php include 'includes/cabecera.php' ?>
<div id="body-inicio" >
<?php include 'includes/nav-menu.php' ?>
<?php require_once 'php/helpers.php'; ?>






<?php

//numeros y letras aleatorios

		function codigo_captcha(){
      $numero1 = rand(0,9);
      $letra1 = chr(rand(65,90));
      $numero2 = rand(0,9);
      $letra2 = chr(rand(65,90));
      $numero3 = rand(0,9);
      $letra3 = chr(rand(65,90));
      $codigo = $numero1.$letra1.$numero2.$letra2.$numero3.$letra3;
      
      return $codigo;
    }

      

?>



<div class="login-cont" >   


    
    <form action="php/login.php" method="POST" >
        
            <div class="form">
                <h1>Registro</h1>


                <?php if(isset($_SESSION['error_login'])): ?>
			<div class="alerta alerta-error">
				<?=$_SESSION['error_login'];?>
			</div>
        
		<?php endif; ?>


    
    
    
    
                <div class="grupo">
                
                <div class="grupo">
                    <input type="email" name="email" id="" required  ><span class="barra"></span>
                    <label>Email</label>
                </div>
             
    
    
    
               
    
                <div class="grupo">
                    <input type="password" name="password" id="" required><span class="barra"></span>
                    <label>Contraseña</label>
                
    
                       </div>

                       
               




                <button type="submit" name="submit">     Registrar    </button>
    
                </form>
    
     
    
        </div>
    
        </div>
  









       


		


  
<?php include 'includes/footer.php' ?>
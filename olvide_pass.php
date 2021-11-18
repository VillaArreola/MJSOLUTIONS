
 <?php include 'includes/cabecera.php'?>
 
 <?php include 'includes/nav-menu.php'?>
 <?php require_once 'php/helpers.php'; ?>

 <div class="container">

 <div class="row" >  




 <!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Cambiar o Reestablecer contraseña </h1>
	
	<?php if(isset($_SESSION['completado'])): ?>
		<div class="alerta alerta-exito">
			<?=$_SESSION['completado']?>
		</div>
	<?php elseif(isset($_SESSION['errores']['general'])): ?>
		<div class="alerta alerta-error">
			<?=$_SESSION['errores']['general']?>
		</div>
	<?php endif; ?>
 
    <form action="php/email-code.php" method="POST">
     
        <input type="email" name="email-code" value="Correo de recuperacion" required>
        
        <input type="submit" value="Enviar">

    </form>



		
	<form action="/php/actualizar-contraseña.php" method="POST"> 




    <div class="form">
            <h1>Registro        </h1>    


          
            <div class="grupo">
                <input type="email" name="email" id="" required   ><span class="barra"></span>
                <label>correo</label>
            </div>

            <div class="grupo">
                <input type="text" name="password_hash" id="" required  ><span class="barra"></span>
                <label>verificacion</label>
            </div>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            <div class="grupo">
                <input type="password" name="password" id="" required   ><span class="barra"></span>
                <label>Contraseña</label>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                   </div>
                   <div class="grupo">
                <input type="password" name="password2" id="" required ><span class="barra"></span>
                <label>confirmar contraeña</label>
        </div>
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password2') : ''; ?>

               


                
            <button type="submit" name="submit"  >Actualizar Datos</button>





	</form>
	<?php borrarErrores(); ?>



</div> <!--fin principal-->

<div class="grupo">
                <input type="text" name="password2" id="" required  value="<?=$_SESSION['usuario']['password']; ?>" ><span class="barra"></span>
                <label>confirm</label>
        </div>






















 </div>

 
 </div>























 
 <?php include 'includes/footer.php'?>